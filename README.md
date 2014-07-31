# yii2-fotorama-widget

This widget is the wrapper for the [Fotorama](http://fotorama.io/).

## Usage

To call the widget you should use:

```php
<?php $widget = \kotchuprik\Fotorama\Widget::begin([
    // you must specify the version (available versions http://cdnjs.com/libraries/fotorama)
    'version' => '4.5.2',
]); ?>
    <img src="/img/1.jpg"/>
    <img src="/img/2.jpg"/>
    <img src="/img/3.jpg"/>
<?php $widget->end(); ?>
```

To call the widget with the Fotorama [options](http://fotorama.io/customize/) you should use:

```php
<?php $widget = \kotchuprik\Fotorama\Widget::begin([
    'version' => '4.5.2',
    'options' => [
        'nav' => 'thumbs',
    ],
    'htmlOptions' => [
        'class' => 'anotherCssClass',
    ],
]); ?>
    <img src="/img/1.jpg"/>
    <img src="/img/2.jpg"/>
    <img src="/img/3.jpg"/>
<?php $widget->end(); ?>
```
