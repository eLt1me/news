<?php

namespace frontend\themes\widgets;

use frontend\models\News;
use yii\base\Widget;

class Tags extends Widget
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

    public function getNews()
    {
        return $this->hasMany(News::class, ['id' => 'news_id'])
            ->viaTable('news_tag', ['tag_id' => 'id']);
    }

    public function run()
    {
        return $this->render($this->viewFile, [
            'model' => $this->model,
            'tags' => $this->getTags(),
        ]);
    }
}