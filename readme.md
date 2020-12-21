PHP >= 7.2.5
    - BCMath PHP Extension
    - Ctype PHP Extension
    - Fileinfo PHP extension
    - JSON PHP Extension
    - Mbstring PHP Extension
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension
Laravel 7.0

----------------------------
### CMD or TERMINAL
```bash
$ git clone https://github.com/sunsilver/wiz_project
$ cd ./wiz_project
$ composer install 
```

### Edit .env File
```text
DB_CONNECTION=mysql     // DBMS
DB_HOST=127.0.0.1       // Database Host
DB_PORT=3306            // Database Port
DB_DATABASE=db          // Database Name
DB_USERNAME=username    // user name
DB_PASSWORD=password    // user password
```
### CMD or TERMINAL
```bash
$ php artisan migrate 
$ php artisan serve
```
[web site](http://localhost:8000)