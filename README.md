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

to the require section of your `composer.json` file.


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
