<?php

namespace app\components\widgets\StartWidget;

use yii\base\Widget;


class StartWidget extends Widget
{

    public $divClass;

    public $widget;

    public $icon;

    public $count;

    public $title;

    public $subTitle;


    public function init()
    {
        parent::init();

    }

    public function run()
    {
        return $this->render('widget', [
            'divClass' => $this->divClass,
            'widget' => $this->widget,
            'icon' => $this->icon,
            'count' => $this->count,
            'title' => $this->title,
            'subTitle' => $this->subTitle,
        ]);
    }
}