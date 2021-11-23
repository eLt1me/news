<?php
/* @var $popularNews frontend\models\News */

?>

<div class="popular-news">
    <header>
        <h3 class="title-popular">Популярные новости</h3>
    </header>
    <div class="popular-grids">
    <?php foreach ($popularNews as $newsItem) { ?>
        <div class="popular-grid">
            <a href="/news/view?id=<?= $newsItem->id ?>"><img src="/uploads/news/<?= $newsItem->image ? : 'no-image.png' ?>" alt=""></a>
            <a class="title" href="single.html"><?= $newsItem->title ?></a>
            <p><?= $newsItem->date ?>
                <a class="span_link" href="#">
                    <span class="glyphicon glyphicon-comment"></span><?= $newsItem->countComments() ?> </a>
                <a class="span_link" href="#">
                    <span class="glyphicon glyphicon-eye-open"></span><?= $newsItem->views ? : '0'?>
                </a>
            </p>
        </div>
        <?php } ?>
    </div>
</div>
<div class="clearfix"></div>