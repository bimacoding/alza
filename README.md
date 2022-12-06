# alza
```
        _             
  __ _ | | ____  __ _ 
 / _` || ||_  / / _` |
| (_| || | / / | (_| |
 \__,_||_|/___| \__,_|
                      
```
alza - simple framework for PHP

[![Total Downloads](https://poser.pugx.org/bimacoding/alza-core/d/total.svg)](https://packagist.org/packages/bimacoding/alza)
[![Latest Stable Version](https://poser.pugx.org/bimacoding/alza-core/v/stable.svg)](https://packagist.org/packages/bimacoding/alza)
[![Latest Unstable Version](https://poser.pugx.org/bimacoding/alza-core/v/unstable.svg)](https://packagist.org/packages/bimacoding/alza)
[![License](https://poser.pugx.org/bimacoding/alza/license.svg)](https://packagist.org/packages/bimacoding/alza)

> Alza Framework telah dibuat hanya untuk bersenang-senang dan diadaptasi dengan menggunakan beberapa bagian paling populer dari >Framework PHP populer seperti Laravel dan Symfony. Ini memiliki infrastruktur yang sederhana namun kuat. Ini berisi banyak komponen >untuk menyiapkan aplikasi web. Jadi, Ini bisa menjadi preferensi untuk proyek kecil (mungkin menengah) Anda. Jika Anda mengatakan "Saya >akan membuat proyek yang lebih besar.", Saya sarankan Anda menggunakan kerangka kerja full-stack. :) misalnya: Laravel, Symfony

### features
- Model - View - Controller
- Easy command line application support. _(Alza Cli App)_
- Routing component. ([PHP-Router](https://github.com/bimacoding/php-router))
- **Symfony** Request and Response components. ([Symfony HttpFoundation](https://symfony.com/doc/current/components/http_foundation.html))
- PDOx Query Builder. ([PDOx](https://github.com/bimacoding/pdox))
- Authentication component. (with **JWT** and **Basic Auth**)
- Some **Laravel 8.x** Packages supports.
    - Eloquent ORM support. ([Laravel Eloquent ORM](https://laravel.com/docs/eloquent))
    - Laravel Query Builder support. ([Laravel Query Builder](https://laravel.com/docs/queries))
    - Blade Template Engine support. ([Laravel Blade](https://laravel.com/docs/blade))
    - Laravel Localization Support (with Translate)  [Laravel Localization](https://laravel.com/docs/localization)
    - Laravel Eloquent Migration System support with PHPMig. ([Laravel Migration](https://laravel.com/docs/migrations) - [PHPMig](https://github.com/bimacoding/alza-migration))
    - Laravel Cache support. (currently just File, Array and Database drivers.) ([Laravel Cache](https://laravel.com/docs/cache)) 
    - Laravel Hash and Encrypt support. ([Laravel Hashing](https://laravel.com/docs/hashing))
    - Collections support. ([Laravel Collections](https://laravel.com/docs/collections))
    - Useful Array and String helpers. (Arr, Str and more...) ([Laravel Helpers](https://laravel.com/docs/helpers))
- Mail Component. ([PHPMailer](https://github.com/PHPMailer/PHPMailer))
- Events/Listeners
- Basic Logger
- Request Validation
- Html/Form Builder
- and more...

## alza core
If you want to examine Alza's core files, you can follow this link: 

[bimacoding/alza-core](https://github.com/bimacoding/alza-core) 

## server requirements
- PHP >= ^7.3|^8.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Fileinfo PHP Extension
- BCMath PHP Extension

## install
create project via `composer` (`app` is application folder name):
```
$ composer create-project bimacoding/alza your-app
$ cd your-app
$ php alza serve
```

or run the following command directly.

```
$ git clone https://github.com/bimacoding/alza.git
$ cd alza
$ composer install
$ php alza serve
```

Okay, you can see your application on the browser. (127.0.0.1:8000)

## docs
documentation page: [alza docs][doc-url] (coming soon...)

## todo
- Write documentation
- Write test
- Write example project

## support
[bimacoding's homepage][author-url]

[bimacoding's twitter][twitter-url]

## contributing
1. fork it [Alza Framework](https://github.com/bimacoding/alza/fork) or [Alza Framework Core](https://github.com/bimacoding/alza-core/fork) (for core changes)
2. create your feature branch (git checkout -b my-new-feature)
3. commit your changes (git commit -am 'Add some feature')
4. push to the branch (git push origin my-new-feature)
5. create a new Pull Request

## contributors
- [bimacoding](https://github.com/bimacoding) izni burak demirtaş - creator, maintainer

[mit-url]: http://opensource.org/licenses/MIT
[doc-url]: javascript:;
[author-url]: https://burakdemirtas.org
[twitter-url]: https://twitter.com/bimacoding
