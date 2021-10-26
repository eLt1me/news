<?php

namespace frontend\themes\widgets;

use frontend\models\News;
use yii\base\Widget;

class PopularNews extends Widget
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

    public function getFewPopularNews()
    {
        return News::find()->orderBy(['views' => SORT_DESC])->limit(4)->all();
    }

    public function run()
    {
        return $this->render($this->viewFile, [
            'model' => $this->model,
            'popularNews' => $this->getFewPopularNews(),
            ]);
    }
}