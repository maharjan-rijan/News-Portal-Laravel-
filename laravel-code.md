Laravel
<----- Creating Project ----->
laravel new project-name

<----- Installing npm ----->
npm install
composer run dev
<----- Breeze Package ----->
composer require laravel/breeze
<----- Installing breeze ----->
php artisan breeze:install
<----- Tinker Package ----->
php artisan tinker
<----- Make model ----->
php artisan make:model model-name (only model)
php artisan make:model model-name -m (with migration)
<----- Migrating migration ----->
php artisan migrate
<----- Make Factory ----->
php artisan make:factory factory-name
<----- Vendor Publishing ----->
php artisan vendor:publish --tag=laravel-pagination
<----- Make Component ----->
php artisan make:component component-name
<----- Storage Link Package ----->

php artisan storage:link
<----- Make Request ----->
php artisan make:request request-name
<----- Media Library Package ----->
composer require "spatie/laravel-medialibrary"
<----- Media Library Package migration ----->
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-migrations"
<----- Queue Package ----->
composer require spatie/laravel-sluggable


