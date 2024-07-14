# Laravel Octane Test

Compare Laravel Octane Servers with Laravel served by nginx and php-fpm.

## Used Tools

- [Docker](https://www.docker.com/)
- [Warden](https://warden.dev/)
- [Laravel](https://laravel.com/)
- [Laravel Octane](https://github.com/laravel/octane)
- [PHP](https://www.php.net/) 8.3
- [Bombardier](https://github.com/codesenberg/bombardier)

## How To Use

Install Docker\
Install Warden\
Install Bombardier\
Clone project
````shell
~$ git clone https://github.com/rnscode/laravel-octane-test.git
````
Enter project folder
```shell
~$ cd laravel-octane-test
```
Run environment
```shell
~/laravel-octane-test$ warden env up --build
```
Enter project container
```shell
~/laravel-octane-test$ warden shell
```
Install project
```shell
www-data@laravel-octane-test-php-fpm:/var/www/html$ composer install
```
Exit project container
```shell
www-data@laravel-octane-test-php-fpm:/var/www/html$ exit
```
Run Bombardier to test endpoints `https://{app|swoole|openswoole|frankenphp|roadrunner}.laravel-octane-test.test{/|/api/health-check|/api/static|/api/http-request}`
```shell
~$ bombardier -c 10 -t 6s -d 30s https://app.laravel-octane-test.test/
```

## Url Hosts
- `https://app.laravel-octane-test.test`
- `https://swoole.laravel-octane-test.test`
- `https://openswoole.laravel-octane-test.test`
- `https://frankenphp.laravel-octane-test.test`
- `https://roadrunner.laravel-octane-test.test`

## Endpoints To Use To Test

- `/`
- `/api/health-check`
- `/api/static`
- `/api/http-request`

## Results

### Total Requests
![image](https://github.com/user-attachments/assets/c5a5005e-117c-4985-843f-bf3bf4198cec)

### Average Requests/Seconds
![image](https://github.com/user-attachments/assets/e6f34381-da53-4fdb-9961-f49b1fb3529d)

