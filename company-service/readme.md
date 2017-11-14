# Right Company MicroService

##To run

1) Clone this project
2) Execute in folder: `composer install`
3) Rename env file: `cp env.example env`
4) Create database in your DBMS

Configure to env file 

    `DB_CONNECTION=pgsql`
    `DB_HOST=127.0.0.1`
    `DB_PORT=5432`
    `DB_DATABASE=your_database`
    `DB_USERNAME=your_user`
    `DB_PASSWORD=your_password`
`
Execute this migrations

    `php artisan migrate`
    
Execute seeder to populate database
    
    `php artisan db:seed --class=CompanyTableSeeder`

Generate key for application

    `php artisan key:generate    
    
 Run project

    `php artisan serve`
    
    
Obs: For run the test execute the phpunit:
 
    `phpunit`

phpunit Documentation

https://phpunit.de/manual/current/pt_br/installation.html
