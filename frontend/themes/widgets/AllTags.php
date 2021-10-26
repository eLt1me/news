<?php

namespace frontend\themes\widgets;

use frontend\models\News;
use frontend\models\Tag;
use yii\base\Widget;

class AllTags extends Widget
{

    public $viewFile;
    public $popularNews;
    public $model;

    public function init()
    {
        parent::init();
        if ($this->viewFile === null) {

            $classNameParts = explode('\\', get_called_class());
            $this->viewFile = strtolower(end($classNameParts));
        }
    }

    private function getTags()
    {
        return $this->model->tags;
    }

    public function getAllTags()
    {
        return Tag::find()->all();
    }

    public function run()
    {
        return $this->render($this->viewFile, [
            'model' => $this->model,
            'tags' => $this->getAllTags(),
        ]);
    }
}