<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

Getting Started with cjtterabytesoft/alert.
===========================================

#### 1.- Installation:

You can then install this project template using the following command:

##### Linux:

```
    php composer.phar require --prefer-dist cjtterabytesoft/alert "@dev"
```

##### Windows:

```
    composer require --prefer-dist cjtterabytesoft/alert "@dev"
```

##### Or add to composer.json:

```
    "cjtterabytesoft/alert": "@dev"
```

#### 2.- Usage:

Alert widget renders a message from session flash. All flash messages are displayed
 in the sequence they were assigned using setFlash. You can set message as following:.

Flash Messages:

 ```php
\Yii::$app->getSession()->setFlash('error', 'This is the message');
\Yii::$app->getSession()->setFlash('success', 'This is the message');
\Yii::$app->getSession()->setFlash('info', 'This is the message');
```

Multiple messages could be set as follows:

```php
\Yii::$app->getSession()->setFlash('error', ['Error 1', 'Error 2']);
```
Usages View:

```php
use cjtterabytesoft\widgets\Alert;

<?= Alert::widget() ?>
```

<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  A simple light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>
