![Yii2 Google Analytics](logo.png)

![GitHub release (latest SemVer)](https://img.shields.io/github/v/release/tomlutzenberger/yii2-googleanalytics)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/tomlutzenberger/yii2-googleanalytics)
![Libraries.io dependency status for GitHub repo](https://img.shields.io/librariesio/github/tomlutzenberger/yii2-googleanalytics)
![Packagist Downloads](https://img.shields.io/packagist/dt/tomlutzenberger/yii2-googleanalytics)
![Lines of code](https://img.shields.io/tokei/lines/github/tomlutzenberger/yii2-googleanalytics)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=tomlutzenberger_yii2-googleanalytics&metric=alert_status)](https://sonarcloud.io/dashboard?id=tomlutzenberger_yii2-googleanalytics)
![Maintenance](https://img.shields.io/maintenance/yes/2021)

Yii2 GoogleAnalytics
=====================
Yii2 Widget for Google Analytics

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tomlutzenberger/yii2-googleanalytics "*"
```

or add

```
"tomlutzenberger/yii2-googleanalytics": "*"
```

to the required section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by:

```php
<?= \TomLutzenberger\GoogleAnalytics\GoogleAnalytics::widget() ?>
```

You can either add the ID of your container to the `params.php`

```php
<?php
      
return [
    // ...
    'gaId' => YII_ENV_PROD ? 'UA-1234567-01' : '',
];
```

or pass it
directly to the widget: 

```php
<?= \TomLutzenberger\GoogleAnalytics\GoogleAnalytics::widget([
    'gaId' => 'UA-1234567-01'
]) ?>
```

License
-----
This package is published under the MIT License and can be used for any 
commercial and personal projects.
