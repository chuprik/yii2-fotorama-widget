<?php

namespace kotchuprik\fotorama;

use yii\helpers\Html;
use yii\base\InvalidConfigException;

class Widget extends \yii\base\Widget
{
    const FOTORAMA_CSS_CLASS = 'fotorama';

    public $version;

    public $tagName = 'div';

    public $options = [];

    public $htmlOptions = [];

    public function init()
    {
        if (empty($this->version)) {
            throw new InvalidConfigException('You must set fotorama version.');
        }

        parent::init();

        if (!empty($this->htmlOptions['class'])) {
            $classes = explode(' ', $this->htmlOptions['class']);
            if (!in_array(self::FOTORAMA_CSS_CLASS, $classes)) {
                $this->htmlOptions['class'] .= ' ' . self::FOTORAMA_CSS_CLASS;
            }
        } else {
            $this->htmlOptions['class'] = self::FOTORAMA_CSS_CLASS;
        }

        foreach ($this->options as $option => $value) {
            $this->htmlOptions['data-' . $option] = $value;
        }

        Asset::$version = $this->version;
        Asset::register($this->getView());

        echo Html::beginTag($this->tagName, $this->htmlOptions);
    }

    public function run()
    {
        parent::run();

        echo Html::endTag($this->tagName);
    }
}

