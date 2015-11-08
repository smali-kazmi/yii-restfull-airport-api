Yii 2 Basic Project Template
============================

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install from an Archive File

Extract the archive file downloaded from [yiiframework.com](http://www.yiiframework.com/download/) to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:


You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

### DB Dump

````
CREATE TABLE `airport` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `airport_code` varchar(10) DEFAULT NULL,
  `airport_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
````


Users
-------------

 1. guest
 2. admin (admin/admin)
 3. user (demo/demo)

Routes
-------------

 1. GET /airports: list all airport page by page; (guest | admin | user)
 2. GET /searchAirport?airport_code=? : list all airport page by page; (guest | admin | user)
 4. POST /airports: create a new airport (admin | user);
 5. GET /airports/123: return the details of the airport 123 (admin | user);
 8. DELETE /airports/123: delete the user 123;
