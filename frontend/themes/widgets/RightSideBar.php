<?php

namespace frontend\themes\widgets;

use frontend\models\Comment;
use frontend\models\News;
use yii\base\Widget;

class RightSideBar extends Widget
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
        $newsModel = new News();
        $commentModel = new Comment();
        return $this->render($this->viewFile, [
            'model' => $this->model,
        ]);
    }
}