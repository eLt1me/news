<?php


/* @var $newsListByCategory frontend\controllers\NewsController */
/* @var $commentModel frontend\models\Comment */
/* @var $newsItem frontend\models\News */
/* @var $categoryItem frontend\models\NewsCategory */

use frontend\themes\widgets\AllTags;
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
                            <a href="single.html"><img src="/uploads/news/<?= $newsItem->image ? : 'no-image.png' ?>"></a>
                        </div>
                        <div class="article-right">
                            <div class="article-title">
                                <p><?= $newsItem->date ?><a class="span_link"><span
                                                class="glyphicon glyphicon-comment"> <?= $countComment ?></span></a>
                                    <a class="span_link"><span
                                                class="glyphicon glyphicon-eye-open"></span><?php echo $tmp = $newsItem->views == null ? '0' : $newsItem->views ?>
                                    </a>
                                    <a class="span_link" href=""><span class="glyphicon glyphicon-thumbs-up"></span>52</a></p>
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
                <div class="newsletter">
                    <h1 class="side-title-head">Newsletter</h1>
                    <p class="sign">Sign up to receive our free newsletters!</p>
                    <form>
                        <input type="text" class="text" value="Email Address" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Email Address';}">
                        <input type="submit" value="submit">
                    </form>
                </div>
                <div class="list_vertical">
                    <section class="accordation_menu">
                        <div>
                            <input id="label-1" name="lida" type="radio" checked/>
                            <label for="label-1" id="item1"><i class="ferme"> </i>Popular Posts<i
                                        class="icon-plus-sign i-right1"></i><i
                                        class="icon-minus-sign i-right2"></i></label>
                            <div class="content" id="a1">
                                <div class="scrollbar" id="style-2">
                                    <div class="force-overflow">
                                        <div class="popular-post-grids">
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="/template/images/bus2.jpg" alt=""/></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html"> The section of the mass
                                                        media industry</a>
                                                    <p>On Feb 25 <a class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-comment"></span>3 </a><a
                                                                class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-eye-open"></span>56 </a>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="/template/images/bus1.jpg" alt=""/></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html"> Lorem Ipsum is simply dummy
                                                        text printing</a>
                                                    <p>On Apr 14 <a class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-comment"></span>2 </a><a
                                                                class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-eye-open"></span>56 </a>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="/template/images/bus3.jpg" alt=""/></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html">There are many variations of
                                                        Lorem</a>
                                                    <p>On Jun 25 <a class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-comment"></span>0 </a><a
                                                                class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-eye-open"></span>56 </a>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="/template/images/bus4.jpg" alt=""/></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input id="label-2" name="lida" type="radio"/>
                            <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Recent Posts<i
                                        class="icon-plus-sign i-right1"></i><i
                                        class="icon-minus-sign i-right2"></i></label>
                            <div class="content" id="a2">
                                <div class="scrollbar" id="style-2">
                                    <div class="force-overflow">
                                        <div class="popular-post-grids">
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="/template/images/tec2.jpg" alt=""/></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html"> The section of the mass
                                                        media industry</a>
                                                    <p>On Feb 25 <a class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-comment"></span>3 </a><a
                                                                class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-eye-open"></span>56 </a>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="/template/images/tec1.jpg" alt=""/></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html"> Lorem Ipsum is simply dummy
                                                        text printing</a>
                                                    <p>On Apr 14 <a class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-comment"></span>2 </a><a
                                                                class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-eye-open"></span>56 </a>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="/template/images/tec3.jpg" alt=""/></a>
                                                </div>
                                                <div class="post-text">
                                                    <a class="pp-title" href="single.html">There are many variations of
                                                        Lorem</a>
                                                    <p>On Jun 25 <a class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-comment"></span>0 </a><a
                                                                class="span_link" href="#"><span
                                                                    class="glyphicon glyphicon-eye-open"></span>56 </a>
                                                    </p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="popular-post-grid">
                                                <div class="post-img">
                                                    <a href="single.html"><img src="/template/images/tec4.jpg" alt=""/></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input id="label-3" name="lida" type="radio"/>
                            <label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i>Comments<i
                                        class="icon-plus-sign i-right1"></i><i
                                        class="icon-minus-sign i-right2"></i></label>
                            <div class="content" id="a3">
                                <div class="scrollbar" id="style-2">
                                    <div class="force-overflow">
                                        <div class="response">
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="/template/images/icon1.png"
                                                             alt=""/>
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There
                                                        are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                    <ul>
                                                        <li>MARCH 21, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="/template/images/icon1.png"
                                                             alt=""/>
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There
                                                        are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                    <ul>
                                                        <li>MARCH 26, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="/template/images/icon1.png"
                                                             alt=""/>
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There
                                                        are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                    <ul>
                                                        <li>MAY 25, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="/template/images/icon1.png"
                                                             alt=""/>
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There
                                                        are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                    <ul>
                                                        <li>FEB 13, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="/template/images/icon1.png"
                                                             alt=""/>
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There
                                                        are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                    <ul>
                                                        <li>JAN 28, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="/template/images/icon1.png"
                                                             alt=""/>
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There
                                                        are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                    <ul>
                                                        <li>APR 18, 2015</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="media response-info">
                                                <div class="media-left response-text-left">
                                                    <a href="#">
                                                        <img class="media-object" src="/template/images/icon1.png"
                                                             alt=""/>
                                                    </a>
                                                    <h5><a href="#">Username</a></h5>
                                                </div>
                                                <div class="media-body response-text-right">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There
                                                        are many variations of passages of Lorem Ipsum available,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna
                                                        aliqua.</p>
                                                    <ul>
                                                        <li>DEC 25, 2014</li>
                                                        <li><a href="single.html">Reply</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <?= AllTags::widget() ?>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- content-section-ends-here -->
