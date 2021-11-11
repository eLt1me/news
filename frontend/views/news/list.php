<?php

/* @var $newsList frontend\models\News */
/* @var $newsItem frontend\models\News */
/* @var $commentModel frontend\models\Comment */

use frontend\themes\widgets\AllTags;
use frontend\themes\widgets\PopularNews;
use frontend\themes\widgets\PopularPosts;
use frontend\themes\widgets\Tags;
use yii\widgets\LinkPager;

?>



<!-- content-section-starts-here -->
<div class="main-body">
    <div class="wrap">
        <div class="col-md-8 content-left">
            <div class="slider">
                <div class="callbacks_wrap">
                    <ul class="rslides" id="slider">
                        <li>
                            <img src="/template/images/3.jpg" alt="">
                            <div class="caption">
                                <a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry</a>
                            </div>
                        </li>
                        <li>
                            <img src="/template/images/2.jpg" alt="">
                            <div class="caption">
                                <a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque</a>
                            </div>
                        </li>
                        <li>
                            <img src="/template/images/1.jpg" alt="">
                            <div class="caption">
                                <a href="single.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="articles">
                <header>
                    <?php if (isset($tag)) { ?>
                    <h3 class="title-head"><?= ucfirst($tag->title) ?></h3>
                    <?php } else { ?>
                        <h3 class="title-head">All Around The World</h3>
                    <?php } ?>
                </header>

                <?php foreach ($newsList as $newsItem) {
                    $countComment = $commentModel->find()->where(['news_id' => $newsItem->id])->count(); ?>
                    <div class="article">
                        <div class="article-left">
                            <a href="single.html"><img src="/uploads/news/<?= $newsItem->image ? : 'no-image.png' ?>"></a>
                        </div>
                        <div class="article-right">
                            <div class="article-title">
                                <p><?= $newsItem->date ?><a class="span_link"><span
                                                class="glyphicon glyphicon-comment"></span><?= $countComment ?></a>
                                    <a class="span_link"><span class='glyphicon glyphicon-lock'></span><?php echo $tmp = $newsItem->views == null ? '0' : $newsItem->views ?>
                                    </a>
                                    <a class="span_link finger"><span class=" glyphicon glyphicon-thumbs-up"></span>52</a></p>
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
                <?php echo LinkPager::widget([
                    'pagination' => $pages,
                ]); ?>
            </div>

        </div>
        <div class="col-md-4 side-bar">
            <div class="first_half">
                <div class="newsletter">
                    <h1 class="side-title-head">Newsletter</h1>
                    <p class="sign">Sign up to receive our free newsletters!</p>
                    <form>
                        <input type="text" class="text" value="Email Address" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Email Address';}">
                        <input type="submit" value="submit">
                    </form>
                </div>
                <?= PopularPosts::widget(); ?>
            </div>
            <?= AllTags::widget() ?>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- content-section-ends-here -->


