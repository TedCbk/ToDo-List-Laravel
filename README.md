# Simple Todo List in Laravel

This is my second webpage using Laravel framework.
A simple application which allow to create display edit delete tasks with a simple database.

## Installation

- First, clone the github repo
- Install Composer Dependencies
```bash
composer install
```
- Install NPM Dependencies
```bash
npm install
```
- Create a copy of your .env file
```bash
cp .env.example .env
```
- Generate an app encryption key
```bash
php artisan key:generate
```
- Create an empty database for our application
- In the .env file, add database information to allow Laravel to connect to the database
- Migrate the database
```bash
php artisan migrate
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
