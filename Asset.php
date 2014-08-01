<?php

namespace kotchuprik\Fotorama;

class Asset extends \yii\web\AssetBundle
{
    public static $version;

    public $css = ['//cdnjs.cloudflare.com/ajax/libs/fotorama/:version/fotorama.css'];

    public $js = ['//cdnjs.cloudflare.com/ajax/libs/fotorama/:version/fotorama.js'];

    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {
        // It's beautiful
        $this->css[0] = str_replace(':version', self::$version, $this->css[0]);
        $this->js[0] = str_replace(':version', self::$version, $this->js[0]);

        parent::init();
    }
}
