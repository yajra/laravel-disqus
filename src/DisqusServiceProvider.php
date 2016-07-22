<?php

namespace Yajra\Disqus;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;

class DisqusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();

        $this->registerMiddleware();
    }

    /**
     * Register and publish the config.
     */
    protected function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/disqus.php' => config_path('disqus.php'),
        ], 'disqus');
    }

    /**
     * Register disqus middleware.
     */
    protected function registerMiddleware()
    {
        $this->app[Kernel::class]->pushMiddleware(
            DisqusMiddleware::class
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
