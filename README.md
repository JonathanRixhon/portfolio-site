# Portfolio

## Deploy

Run those commands

```sh
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
yarn
yarn build
php artisan migrate
php artisan db:seed
```
