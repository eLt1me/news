<?php

use frontend\themes\widgets\PopularPosts;
use yii\widgets\LinkPager;

/* @var $newsList frontend\models\News */
/* @var $newsItem frontend\models\News */
/* @var $commentModel frontend\models\Comment */
/* @var $pagination frontend\controllers\NewsController */
?>


<div class="wrap">
    <div class="move-text">
        <div class="breaking_news">
            <h2>Breaking News</h2>
        </div>
        <div class="marquee">
            <div class="marquee1"><a class="breaking" href="single.html">>>The standard chunk of Lorem Ipsum used since
                    the 1500s is reproduced..</a></div>
            <div class="marquee2"><a class="breaking" href="single.html">>>At vero eos et accusamus et iusto qui
                    blanditiis praesentium voluptatum deleniti atque..</a></div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <script type="text/javascript" src="js/jquery.marquee.min.js"></script>
        <script>
            $('.marquee').marquee({pauseOnHover: true});
            //@ sourceURL=pen.js
        </script>
    </div>
</div>
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
                    <h3 class="title-head">All around the world</h3>
                </header>

                <?php foreach ($newsList as $newsItem) {
                    $numberOfComments = $commentModel->find()->where(['news_id' => $newsItem->id])->count();
                    ?>
                    <div class="article">
                        <div class="article-left">
                            <a href="single.html"><img src="/uploads/news/<?= $newsItem->image ?>"></a>
                        </div>
                        <div class="article-right">
                            <div class="article-title">
                                <p><?= $newsItem->date ?><a class="span_link"><span
                                                class="glyphicon glyphicon-comment"> <?= $commentModel->getNumberOfCommentsByNewsId($newsItem->id) ?></span></a>
                                    <a class="span_link"><span
                                                class="glyphicon glyphicon-eye-open"></span><?= $newsItem->getNumberOfViews() ?>
                                    </a>
                                    <a class="span_link"><span class="glyphicon glyphicon-thumbs-up"></span>52</a></p>
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
                <div class="pagination">
                    <?= LinkPager::widget(['pagination' => $pagination]); ?>
                </div>
            </div>
            <div class="life-style">
                <header>
                    <h3 class="title-head">Life Style</h3>
                </header>
                <div class="life-style-grids">
                    <div class="life-style-left-grid">
                        <a href="single.html"><img src="/template/images/l1.jpg" alt=""/></a>
                        <a class="title" href="single.html">It is a long established fact that a reader will be
                            distracted.</a>
                    </div>
                    <div class="life-style-right-grid">
                        <a href="single.html"><img src="/template/images/l2.jpg" alt=""/></a>
                        <a class="title" href="single.html">There are many variations of passages of Lorem Ipsum
                            available.</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="life-style-grids">
                    <div class="life-style-left-grid">
                        <a href="single.html"><img src="/template/images/l3.jpg" alt=""/></a>
                        <a class="title" href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random
                            text.</a>
                    </div>
                    <div class="life-style-right-grid">
                        <a href="single.html"><img src="/template/images/l4.jpg" alt=""/></a>
                        <a class="title" href="single.html">Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem.</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="sports-top">
                <div class="s-grid-left">
                    <div class="cricket">
                        <header>
                            <h3 class="title-head">Business</h3>
                        </header>
                        <div class="c-sports-main">
                            <div class="c-image">
                                <a href="single.html"><img src="/template/images/bus1.jpg" alt=""/></a>
                            </div>
                            <div class="c-text">
                                <h6>Lorem Ipsum</h6>
                                <a class="power" href="single.html">It is a long established fact that a reader</a>
                                <p class="date">On Feb 25, 2015</p>
                                <a class="reu" href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="s-grid-small">
                            <div class="sc-image">
                                <a href="single.html"><img src="/template/images/bus2.jpg" alt=""/></a>
                            </div>
                            <div class="sc-text">
                                <h6>Lorem Ipsum</h6>
                                <a class="power" href="single.html">It is a long established fact that a reader</a>
                                <p class="date">On Mar 21, 2015</p>
                                <a class="reu" href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="s-grid-small">
                            <div class="sc-image">
                                <a href="single.html"><img src="/template/images/bus3.jpg" alt=""/></a>
                            </div>
                            <div class="sc-text">
                                <h6>Lorem Ipsum</h6>
                                <a class="power" href="single.html">It is a long established fact that a reader</a>
                                <p class="date">On Jan 25, 2015</p>
                                <a class="reu" href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="s-grid-small">
                            <div class="sc-image">
                                <a href="single.html"><img src="/template/images/bus4.jpg" alt=""/></a>
                            </div>
                            <div class="sc-text">
                                <h6>Lorem Ipsum</h6>
                                <a class="power" href="single.html">It is a long established fact that a reader</a>
                                <p class="date">On Jul 19, 2015</p>
                                <a class="reu" href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="s-grid-right">
                    <div class="cricket">
                        <header>
                            <h3 class="title-popular">Technology</h3>
                        </header>
                        <div class="c-sports-main">
                            <div class="c-image">
                                <a href="single.html"><img src="/template/images/tec1.jpg" alt=""/></a>
                            </div>
                            <div class="c-text">
                                <h6>Lorem Ipsum</h6>
                                <a class="power" href="single.html">It is a long established fact that a reader</a>
                                <p class="date">On Apr 22, 2015</p>
                                <a class="reu" href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="s-grid-small">
                            <div class="sc-image">
                                <a href="single.html"><img src="/template/images/tec2.jpg" alt=""/></a>
                            </div>
                            <div class="sc-text">
                                <h6>Lorem Ipsum</h6>
                                <a class="power" href="single.html">It is a long established fact that a reader</a>
                                <p class="date">On Jan 19, 2015</p>
                                <a class="reu" href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="s-grid-small">
                            <div class="sc-image">
                                <a href="single.html"><img src="/template/images/tec3.jpg" alt=""/></a>
                            </div>
                            <div class="sc-text">
                                <h6>Lorem Ipsum</h6>
                                <a class="power" href="single.html">It is a long established fact that a reader</a>
                                <p class="date">On Jun 25, 2015</p>
                                <a class="reu" href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="s-grid-small">
                            <div class="sc-image">
                                <a href="single.html"><img src="/template/images/tec4.jpg" alt=""/></a>
                            </div>
                            <div class="sc-text">
                                <h6>Lorem Ipsum</h6>
                                <a class="power" href="single.html">It is a long established fact that a reader</a>
                                <p class="date">On Jul 19, 2015</p>
                                <a class="reu" href="single.html"><img src="/template/images/more.png" alt=""/></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
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
                <div class="side-bar-articles">
                    <div class="side-bar-article">
                        <a href="single.html"><img src="/template/images/sai.jpg" alt=""/></a>
                        <div class="side-bar-article-title">
                            <a href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                        </div>
                    </div>
                    <div class="side-bar-article">
                        <a href="single.html"><img src="/template/images/sai2.jpg" alt=""/></a>
                        <div class="side-bar-article-title">
                            <a href="single.html">There are many variations of passages of Lorem</a>
                        </div>
                    </div>
                    <div class="side-bar-article">
                        <a href="single.html"><img src="/template/images/sai3.jpg" alt=""/></a>
                        <div class="side-bar-article-title">
                            <a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="secound_half">
                <div class="tags">
                    <header>
                        <h3 class="title-head">Tags</h3>
                    </header>
                    <p>
                        <a class="tag1" href="single.html">At vero eos</a>
                        <a class="tag2" href="single.html">doloremque</a>
                        <a class="tag3" href="single.html">On the other</a>
                        <a class="tag4" href="single.html">pain was</a>
                        <a class="tag5" href="single.html">rationally encounter</a>
                        <a class="tag6" href="single.html">praesentium voluptatum</a>
                        <a class="tag7" href="single.html">est, omnis</a>
                        <a class="tag8" href="single.html">who are so beguiled</a>
                        <a class="tag9" href="single.html">when nothing</a>
                        <a class="tag10" href="single.html">owing to the</a>
                        <a class="tag11" href="single.html">pains to avoid</a>
                        <a class="tag12" href="single.html">tempora incidunt</a>
                        <a class="tag13" href="single.html">pursues or desires</a>
                        <a class="tag14" href="single.html">Bonorum et</a>
                        <a class="tag15" href="single.html">written by Cicero</a>
                        <a class="tag16" href="single.html">Ipsum passage</a>
                        <a class="tag17" href="single.html">exercitationem ullam</a>
                        <a class="tag18" href="single.html">mistaken idea</a>
                        <a class="tag19" href="single.html">ducimus qui</a>
                        <a class="tag20" href="single.html">holds in these</a>
                    </p>
                </div>
                <div class="popular-news">
                    <header>
                        <h3 class="title-popular">popular News</h3>
                    </header>
                    <div class="popular-grids">
                        <div class="popular-grid">
                            <a href="single.html"><img src="/template/images/popular-4.jpg" alt=""/></a>
                            <a class="title" href="single.html">It is a long established fact that a reader will be
                                distracted</a>
                            <p>On Aug 31, 2015 <a class="span_link" href="#"><span
                                            class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link"
                                                                                                href="#"><span
                                            class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link"
                                                                                                   href="#"><span
                                            class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
                        </div>
                        <div class="popular-grid">
                            <a href="single.html"><img src="/template/images/popular-1.jpg" alt=""/></a>
                            <a class="title" href="single.html">It is a long established fact that a reader will be
                                distracted</a>
                            <p>On Mar 14, 2015 <a class="span_link" href="#"><span
                                            class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link"
                                                                                                href="#"><span
                                            class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link"
                                                                                                   href="#"><span
                                            class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
                        </div>
                        <div class="popular-grid">
                            <iframe width="100%" src="https://www.youtube.com/embed/LGMn_yi_62k" frameborder="0"
                                    allowfullscreen></iframe>
                            <a class="title" href="single.html">Aishwarya Rai Bachchan's Latest SHOCKING News For Ex
                                Salman Khan</a>
                            <p>On Mar 14, 2015 <a class="span_link" href="#"><span
                                            class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link"
                                                                                                href="#"><span
                                            class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link"
                                                                                                   href="#"><span
                                            class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
                        </div>
                        <div class="popular-grid">
                            <a href="single.html"><img src="/template/images/popular-3.jpg" alt=""/></a>
                            <a class="title" href="single.html">It is a long established fact that a reader will be
                                distracted</a>
                            <p>On Mar 14, 2015 <a class="span_link" href="#"><span
                                            class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link"
                                                                                                href="#"><span
                                            class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link"
                                                                                                   href="#"><span
                                            class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- content-section-ends-here -->


