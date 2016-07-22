# Laravel - Disqus Platform Integration

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A simple package integrating Disqus platform with Laravel.

## Install

- Via Composer
``` bash
$ composer require yajra/laravel-disqus
```

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

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email aqangeles@gmail.com instead of using the issue tracker.

## Credits

- [Arjay Angeles][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/yajra/laravel-disqus.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/yajra/laravel-disqus/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/yajra/laravel-disqus.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/yajra/laravel-disqus.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/yajra/laravel-disqus.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/yajra/laravel-disqus
[link-travis]: https://travis-ci.org/yajra/laravel-disqus
[link-scrutinizer]: https://scrutinizer-ci.com/g/yajra/laravel-disqus/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/yajra/laravel-disqus
[link-downloads]: https://packagist.org/packages/yajra/laravel-disqus
[link-author]: https://github.com/yajra
[link-contributors]: ../../contributors
