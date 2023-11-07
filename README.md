# laravel-subject-students-example-laravel-10

<img width="1440" alt="Screenshot 2023-11-07 at 9 44 50 AM" src="https://github.com/mudassarali964/laravel-subject-students-example-laravel-10/assets/55048197/b1f5c010-ed9e-4481-842f-ef2384538f2b">

<img width="1440" alt="image" src="https://github.com/mudassarali964/laravel-subject-students-example-laravel-10/assets/55048197/651d5963-94fa-4102-b702-6d2105334713"># laravel-

<img width="1440" alt="Screenshot 2023-11-07 at 9 45 00 AM" src="https://github.com/mudassarali964/laravel-subject-students-example-laravel-10/assets/55048197/66285a1e-a86e-43af-930b-252c6324d429">

## Installation

``` bash
# clone the repo
$ git clone https://github.com/mudassarali964/laravel-subject-students-example-laravel-10.git my-project

# go into app's directory
$ cd my-project

# install app's dependencies
$ composer install

# install app's dependencies
$ npm install

```

### If you choice to use SQLite

``` bash

# create database
$ touch database/database.sqlite
```
Copy file ".env.example", and change its name to ".env".
Then in file ".env" replace this database configuration:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=laravel_subject_students
* DB_USERNAME=root
* DB_PASSWORD=

To this:

* DB_CONNECTION=sqlite
* DB_DATABASE=/path_to_your_project/database/database.sqlite

### If you choice to use PostgreSQL

1. Install PostgreSQL

2. Create user
``` bash
$ sudo -u postgres createuser --interactive
enter name of role to add: laravel
shall the new role be a superuser (y/n) n
shall the new role be allowed to create database (y/n) n
shall the new role be allowed to create more new roles (y/n) n
```
3. Set user password
``` bash
$ sudo -u postgres psql
postgres= ALTER USER laravel WITH ENCRYPTED PASSWORD 'password';
postgres= \q
```
4. Create database
``` bash
$ sudo -u postgres createdb laravel
```
5. Copy file ".env.example", and change its name to ".env".
   Then in file ".env" replace this database configuration:

* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=laravel_subject_students
* DB_USERNAME=root
* DB_PASSWORD=

To this:

* DB_CONNECTION=pgsql
* DB_HOST=127.0.0.1
* DB_PORT=5432
* DB_DATABASE=laravel_subject_students
* DB_USERNAME=laravel
* DB_PASSWORD=password

### If you choice to use MySQL

Copy file ".env.example", and change its name to ".env".
Then in file ".env" complete this database configuration:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=laravel_subject_students
* DB_USERNAME=root
* DB_PASSWORD=

### Set APP_URL

> If your project url looks like: example.com/sub-folder
Then go to `my-project/.env`
And modify this line:

* APP_URL =

To make it look like this:

* APP_URL = http://example.com/sub-folder


### Next step

``` bash
# in your app directory
# generate laravel APP_KEY
$ php artisan key:generate

# run database migration and seed
$ php artisan migrate:refresh --seed

# generate mixing
$ npm run build

# and repeat generate mixing
$ npm run dev
```

## Usage

``` bash
# start local server
$ php artisan serve

# test
$ php vendor/bin/phpunit
```

Open your browser with address: [localhost:8000](localhost:8000)  
Click "Login" on sidebar menu and log in with credentials:
 
* E-mail: _user@user.com_
* Password: _password_

For admin panel Open your browser with address: [localhost:8000/admin](localhost:8000/admin)

* E-mail: _admin@admin.com_
* Password: _password_

## Compile Css & Js

Basically we are using the Vite mixin. Whenever do some styling/script changes, 
the files must be compiled through the given command:

``` bash
# generate mixing
$ npm run build

# and repeat generate mixing
$ npm run dev
```

