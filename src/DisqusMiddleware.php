<?php

namespace Yajra\Disqus;

use Closure;
use Illuminate\Support\Str;

class DisqusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (config('disqus.enabled', false) && ! empty(config('disqus.username'))) {
            $this->appendDisqusScript($request, $response);
        }

        return $response;
    }

    /**
     * Append disqus script on the end of the page.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Http\Response $response
     * @return mixed
     */
    protected function appendDisqusScript($request, $response)
    {
        $content = $response->getContent();

        if (! Str::contains($content, '<div id="disqus_thread"></div>')) {
            return;
        }

        $uri = $request->getRequestUri();
        $pageUrl = url($uri);
        $pageId = 'route'.implode('.', explode('/', $uri));
        $username = config('disqus.username');

        $disqusHtml = <<<CDATA
<script>
     var disqus_config = function () {
         this.page.url = '$pageUrl';
         this.page.identifier = '$pageId';
     };

    (function() {
        var d = document, s = d.createElement('script');

        s.src = '//$username.disqus.com/embed.js';

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
CDATA;

        $bodyPosition = strripos($content, '</body>');

        if (false !== $bodyPosition) {
            $content = substr($content, 0, $bodyPosition).$disqusHtml.substr($content, $bodyPosition);
        }

        $response->setContent($content);
    }
}
