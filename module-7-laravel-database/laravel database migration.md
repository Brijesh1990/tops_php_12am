# how to connect database in laravel 

1. create a database in  .env file
2. open .env file and create database with mysql 
3. .env

````
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=crud_laravel_app
DB_USERNAME=root
DB_PASSWORD=

````

# laravel database migration
1. laravel database migration create an schema of table 
2. laravel database migration add a table schema



# How to create a table schema 

1. create any tables schema 

**command of database migrations**

```
cmd : php artisan make:migration create_contacts_table 

```

```
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('categories', function (Blueprint $table) {
$table->id();
$table->timestamps();
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('categories');
}
};


```  

## how to migrate database structures 

**migrate structures**

```
#####create table schema######
php artisan make:migration create_categories_table
or 
#####migrate database#####
php artisan migrate 
or
######migrate fresh#######
php artisan migrate:fresh
or
#######migrate:refresh#######
php artisan migrate:refresh
or
########migrate:rollback######
php artisan migrate:rollback
or
#######migrate:reset#########
php artisan migrate:reset
or
#########migrate:status########
php artisan migrate:status
or 
#########migrate:install########
php artisan migrate:install

``` 