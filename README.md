# Laravel - Disqus Platform Integration

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

A simple package integrating Disqus platform with Laravel.

## Install

- Via Composer
``` bash
$ composer require yajra/laravel-disqus
```

## Providers and Config
> If you are using Laravel 5.5+ then the steps below are optional.

- Register service provider
```php
Yajra\Disqus\DisqusServiceProvider::class
```

- Publish config
```bash
$ php artisan vendor:publish --tag=disqus
```

## Config
Append the following config on your `.env` file.

``` php
DISQUS_ENABLED=true
DISQUS_USERNAME=your_website_shortname
```

## Usage
To display Disqus platform on your page, just add:
```html
<div id="disqus_thread"></div>
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email aqangeles@gmail.com instead of using the issue tracker.

## Credits

- [Arjay Angeles][link-author]
- [All Contributors][link-contributors]

## Buy me a coffee

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.me/yajra)
<a href='https://www.patreon.com/bePatron?u=4521203'><img alt='Become a Patron' src='https://s3.amazonaws.com/patreon_public_assets/toolbox/patreon.png' border='0' width='200px' ></a>

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/yajra/laravel-disqus.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/yajra/laravel-disqus.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/yajra/laravel-disqus
[link-downloads]: https://packagist.org/packages/yajra/laravel-disqus
[link-author]: https://github.com/yajra
[link-contributors]: ../../contributors
