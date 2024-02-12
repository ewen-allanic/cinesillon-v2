# CINESILLON

## Requirements

- PHP 8.1.10
- Synfony 6.3.1

### Other informations

In the following documentation, each `symfony console` can be replace by `php bin/console` and vice versa, according to your configuration


## Installation

### Activate extention
In your `php.ini` you must have activate the intl extension : `extention=intl`

### Install the dependencies
```
composer install
npm install
```


## Database configuration

1. Clone the `.env` file and name it `.env.local`.
2. In the `.env.local` uncomment a `DATABASE_URL` line and replace informations according to your configuration.
3. Create the database
```
symfony console doctrine:database:create
```
4. Migrate the migration
```
symfony console make:migration
symfony console d:m:m
```
<!-- 5. Load the fixtures
```
symfony console d:f:l
``` -->

## Create an admin user

1. Get an hashed password by using the following command, the you can copy the result
```
symfony console security:hash-password
```
2. Insert user into your database
```
INSERT INTO admin (email, roles, password) VALUES ('<email>', '["ROLE_ADMIN"]', '<hashedPassword>');
```


## Run the servers
```
php -S <addr>:<port> -t public
npm run watch|dev
```


## Usefull links

- https://tailwindcss.com/docs/installation
