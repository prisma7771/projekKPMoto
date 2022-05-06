<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About This Project
This Project is created as final project for our KP in Tapanuli Motor

## Requirement
- XAMPP with PHP 7.*
- Composer 2
- Code Editor/IDE (We Recommended using VSC)

## How To Use
- git clone this repository 
- run $ composer install
- run $ php artisan key:generate
- run mysql server using xampp (or any mysql database server you use)
- change in .env DB_PORT into your port configuration for mysql (usually 3306), because i use port 3310
- create database(you don`t need  to create any tableinside  it, laravel will make it for you)
- setting .env with your database setting
- run $ php artisan migrate:fresh --seed to have data dummy in database, else just run without --seed
- run $ php artisan storage:link
- run $ php artisan serve

# (NEED STYLING TO MAKE IT LOOK BETTER)
