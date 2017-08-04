API DOC Crud
============
Create api documentation

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist shoxabbos/yii2-apicrud "*"
```

or add

```
"shoxabbos/yii2-apicrud": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

1: Into this code to config/web.php file
```php
'modules' => [
    'apidoc' => [
        'class' => 'shoxabbos\apicrud\Module'
    ]
],
```

2: You can run the migrations script provided to create the database structure from your yii programming console:
```php
php yii migrate --migrationPath=@vendor/shoxabbos/yii2-apicrud/migrations
```

Developer Team
http://www.qwerty.uz