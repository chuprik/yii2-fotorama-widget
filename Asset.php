<?php

namespace kotchuprik\Fotorama;

class Asset extends \yii\web\AssetBundle
{
    public $baseUrl = '//cdnjs.cloudflare.com/ajax/libs/fotorama/4.5.2';

    public $css = ['fotorama.css'];

    public $js = ['fotorama.js'];

    public $depends = ['yii\web\JqueryAsset'];
}
