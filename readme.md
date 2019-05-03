## Installation

1. Clone the repo: `git clone https://github.com/reefebba/designer-at-service` and `cd` into it.
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your FileSystem Driver in your `.env` file to public. Specifically `FILESYSTEM_DRIVER=public`
1. `php artisan storage:link`.
1. Set your `APP_URL` in your `.env` file. 
1. You may choose what data to be seeded to your database in `database/seeds/DatabaseSeeder.php`
1. `php artisan migrate --seed`.
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser

## Contributing

Thank you for considering contributing to this project! We currently don't have a contribution guide. But you may check [The Issues](https://github.com/reefebba/designer-at-service/issues).

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send me an  e-mail via [this e-mail](rifebba@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT). 
You may contact me for this project license via [this e-mail](rifebba@gmail.com).
