<?php

namespace backend\module\admin;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $layout = 'admin';
    public $controllerNamespace = 'backend\module\admin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
