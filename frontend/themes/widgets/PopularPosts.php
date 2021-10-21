<?php
namespace frontend\themes\widgets;
use yii\base\Widget;

class PopularPosts extends Widget
{

    public $viewFile;

    public $model;

    public function init()
    {
        parent::init();
        if ($this->viewFile === null) {

            $classNameParts = explode('\\', get_called_class());
            $this->viewFile = strtolower(end($classNameParts));
        }
    }

    public function run()
    {
        return $this->render($this->viewFile, ['model' => $this->model]);
    }
}