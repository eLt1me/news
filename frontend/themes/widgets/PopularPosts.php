<?php

namespace frontend\themes\widgets;

use frontend\models\Comment;
use frontend\models\News;
use yii\base\Widget;

class PopularPosts extends Widget
{

    public $models;

    /**
     * @return string
     */
    public function run()
    {
        $popularPosts = News::find()
            ->orderBy(['views' => SORT_DESC])
            ->limit(10)
            ->all();

        $commentModel = new Comment();

        return $this->render('popularposts', [
            'popularPosts' => $popularPosts,
            'commentModel' => $commentModel
        ]);
    }
}