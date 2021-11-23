<?php
/* @var $popularPosts array */
/* @var $popularPost frontend\models\News */
/* @var $recentNewsList array */
/* @var $recentNewsItem frontend\models\News */
/* @var $lastComments array */
/* @var $lastComment frontend\models\Comment */
?>
<div class="list_vertical">
    <section class="accordation_menu">
        <div>
            <input id="label-1" name="lida" type="radio" checked/>
            <label for="label-1" id="item1"><i class="ferme"> </i>Активно обсуждаемые посты<i
                        class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
            <div class="content" id="a1">
                <div class="scrollbar" id="style-2">
                    <div class="force-overflow">
                        <div class="popular-post-grids">
                            <?php foreach ($popularPosts as $popularPost) { ?>
                                <div class="popular-post-grid">
                                    <div class="post-img">
                                        <a href="/news/view?id=<?= $popularPost->id ?>"><img
                                                    src="/uploads/news/<?= $popularPost->image ?: 'no-image.png' ?>"
                                                    alt=""/></a>
                                    </div>
                                    <div class="post-text">
                                        <a class="pp-title"
                                           href="/news/view?id=<?= $popularPost->id ?>"> <?= $popularPost->title ?></a>
                                        <p><?= $popularPost->date ?> <a class="span_link"><span
                                                        class="glyphicon glyphicon-comment"></span><?= $popularPost->countComments() ?>
                                            </a><a class="span_link"><span
                                                        class="glyphicon glyphicon-eye-open"></span><?= $popularPost->views ?: '0' ?>
                                            </a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <input id="label-2" name="lida" type="radio"/>
            <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Недавние посты<i
                        class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
            <div class="content" id="a2">
                <div class="scrollbar" id="style-2">
                    <div class="force-overflow">
                        <div class="popular-post-grids">
                            <?php foreach ($recentNewsList as $recentNewsItem) { ?>
                                <div class="popular-post-grid">
                                    <div class="post-img">
                                        <a href="/news/view?id=<?= $recentNewsItem->id ?>"><img
                                                    src="/uploads/news/<?= $recentNewsItem->image ?: 'no-image.png' ?>"
                                                    alt=""/></a>
                                    </div>
                                    <div class="post-text">
                                        <a class="pp-title"
                                           href="/news/view?id=<?= $recentNewsItem->id ?>"> <?= $recentNewsItem->title ?></a>
                                        <p><?= $recentNewsItem->date ?> <a class="span_link"><span
                                                        class="glyphicon glyphicon-comment"></span><?= $recentNewsItem->countComments() ?>
                                            </a><a class="span_link"><span
                                                        class="glyphicon glyphicon-eye-open"></span><?= $recentNewsItem->views ?: '0' ?>
                                            </a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <input id="label-3" name="lida" type="radio"/>
            <label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i>Последние коментарии<i
                        class="icon-plus-sign i-right1"></i><i
                        class="icon-minus-sign i-right2"></i></label>
            <div class="content" id="a3">
                <div class="scrollbar" id="style-2">
                    <div class="force-overflow">
                        <div class="response">
                            <?php foreach ($lastComments as $lastComment) { ?>
                                <div class="media response-info">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img class="media-object" style="width: 67.578px; height: 67.578px" src="/uploads/user/<?= $lastComment->getCommentOwnerImage() ?>"
                                                 alt=""/>
                                        </a>
                                        <h5><a href="#"><?= $lastComment->getCommentOwnerUsername() ?></a></h5>
                                    </div>
                                    <div class="media-body break-word response-text-right" style="word-wrap: break-word">
                                        <p><?= $lastComment->content ?></p>
                                        <ul>
                                            <li><a href="/news/view?id=<?= $lastComment->getNewsId() ?>">Перейти к новости</a></li>
                                            <li><?= $lastComment->date ?></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>