<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Laravel Dusk

Laravel Dusk provides an expressive, easy-to-use browser automation and testing API. By default, Dusk does not require you to install JDK or Selenium on your local computer. Instead, Dusk uses a standalone ChromeDriver installation. However, you are free to utilize any other Selenium compatible driver you wish.


Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Installation
To get started, you should install Google Chrome and add the laravel/dusk Composer dependency to your project

    composer require --dev laravel/dusk 

After installing the Dusk package, execute the dusk:install Artisan command. The dusk:install command will create a tests/Browser directory and an example Dusk test:

    php artisan dusk:install    

## Getting Started
### Generating Tests
To generate a Dusk test, use the dusk:make Artisan command. The generated test will be placed in the tests/Browser directory:

    php artisan dusk:make LoginTest
### Running Tests
To run your browser tests, execute the dusk Artisan command:

    php artisan dusk
## Precautions
If you are manually registering Dusk's service provider, you should never register it in your production environment, as doing so could lead to arbitrary users being able to authenticate with your application.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
