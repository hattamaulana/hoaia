# Hoaia
#### Written with Codeigiter v3.0
CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

## Libraries
- illuminate/database: 5.0.28
- illuminate/events: 5.0.28
- chriskacerguis/codeigniter-restserve: ^3.1

## Getting Started
Tambahkan semua library ke dalam `composer.json`, seperti :
```json
...
   "require": {
        ...
        "illuminate/database": "5.0.28",
        "illuminate/events": "5.0.28",
        "chriskacerguis/codeigniter-restserver": "^3.1"
    },
...
```

Install menggunakan `composer` dengan perintah :
```bash
$ composer install
```

Jika disuruh masukkan token maka buka Link yang ditujukkan dan masuk ke github. Lalu Generate Tokennya.

Selanjutnya setting database dengan rename file pada directory application/config/ `database.copy.php` menjadi `database.php` dan isi username, password, database, lalu load query DDL dan DML SQL :
```bash
$ mysql -u root -p

> create database hoaia;
> use hoaia;
> source hoaia.sql;
```

## Run
Gunakan web server seperti apache2 atau nginx atau dapat menjalankan perintah :
```bash
$ php -S localhost:8080 index.php
```

## License
Please see the [license agreement](https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst)

## Resources
-  [User Guide](http://www.codeigniter.com/docs)
-  [Language File Translations](https://github.com/bcit-ci/codeigniter3-translations)
-  [Community Forums](http://forum.codeigniter.com/)
-  [Community Wiki](https://github.com/bcit-ci/CodeIgniter/wiki)
-  [Community IRC](http://www.codeigniter.com/irc)
-  [Forked from ferycode/codeigniter-eloquent-orm](https://github.com/ferycode/codeigniter-eloquent-orm)