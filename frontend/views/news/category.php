<?php


/* @var $newsListByCategory frontend\controllers\NewsController */
/* @var $commentModel frontend\models\Comment */
/* @var $newsItem frontend\models\News */

/* @var $categoryItem frontend\models\NewsCategory */

use frontend\themes\widgets\AllTags;
use frontend\themes\widgets\PopularPosts;
use yii\widgets\LinkPager;

?>
<!-- content-section-starts-here -->
<div class="main-body">
    <div class="wrap">
        <div class="col-md-8 content-left">
            <div class="slider">
                <div class="callbacks_wrap">

                </div>
            </div>

            <div class="articles">
                <header>
                    <h3 class="title-head"><?= $categoryItem->label ?></h3>
                </header>
                <?php foreach ($newsListByCategory as $newsItem) {

                    $query = $commentModel->find()->select('COUNT(*)')->where(['news_id' => $newsItem->id])->asArray()->all();
                    $countComment = $query[0]['count'];

                    ?>
                    <div class="article">
                        <div class="article-left">
                            <a href="single.html"><img
                                        src="/uploads/news/<?= $newsItem->image ?: 'no-image.png' ?>"></a>
                        </div>
                        <div class="article-right">
                            <div class="article-title">
                                <p><?= $newsItem->date ?><a class="span_link"><span
                                                class="glyphicon glyphicon-comment"> <?= $countComment ?></span></a>
                                    <a class="span_link"><span
                                                class="glyphicon glyphicon-eye-open"></span><?php echo $tmp = $newsItem->views == null ? '0' : $newsItem->views ?>
                                    </a></p>
                                <a class="title" href="/news/view?id=<?= $newsItem->id ?>"><?= $newsItem->title; ?></a>
                            </div>
                            <div class="article-text">
                                <p><?= $newsItem->short_content; ?></p>
                                <a href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <?php } ?>
            </div>
            <?= LinkPager::widget([
                'pagination' => $pages,
            ]); ?>
        </div>
        <div class="col-md-4 side-bar">
            <div class="first_half">
                <?= PopularPosts::widget(); ?>
            </div>
            <?= AllTags::widget() ?>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- content-section-ends-here -->
