Getting Started with terabytesoft/alert.
========================================

#### 1.- Installation:

You can then install this project template using the following command:

##### Linux:

```
    php composer.phar require --prefer-dist terabytesoft/alert "@dev"
```

##### Windows:

```
    composer require --prefer-dist terabytesoft/alert "@dev"
```

##### Or add to composer.json:

```
    "terabytesoft/alert": "@dev"
```

#### 2.- Usage:

Alert widget renders a message from session flash. All flash messages are displayed
 in the sequence they were assigned using setFlash. You can set message as following:.

Flash Messages:

 ```php
\Yii::$app->getSession()->setFlash('danger', 'This is the message');
\Yii::$app->getSession()->setFlash('success', 'This is the message');
\Yii::$app->getSession()->setFlash('info', 'This is the message');
```

Multiple messages could be set as follows:

```php
\Yii::$app->getSession()->setFlash('error', ['Error 1', 'Error 2']);
```
Usages View:

```php
use app\widgets\Alert;

<?= Alert::widget() ?>
```
#### 3.- Example Alert Bootstrap4:

![alert-bootstrap4](https://farm2.staticflickr.com/1763/28557087637_ef0045101c_o.jpg)
