<?php use frontend\models\User;
use frontend\themes\widgets\PopularPosts;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $commentModel frontend\models\Comment */
/* @var $commentList frontend\models\Comment */
/* @var $model frontend\models\News */
/* @var $userModel frontend\models\User */
/* @var $comment frontend\models\Comment */
?>

<div class="main-body">
    <div class="wrap">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Single Page</li>
        </ol>
        <div class="single-page">
            <div class="col-md-2 share_grid">
                <h3>SHARE</h3>
                <ul>
                    <li>
                        <a href="#">
                            <i class="facebook"></i>
                            <div class="views">
                                <span>SHARE</span>
                                <label>180</label>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="twitter"></i>
                            <div class="views">
                                <span>TWEET</span>
                                <label>355</label>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="linkedin"></i>
                            <div class="views">
                                <span>SHARES</span>
                                <label>28</label>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="pinterest"></i>
                            <div class="views">
                                <span>PIN</span>
                                <label>16</label>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="email"></i>
                            <div class="views">
                                <span>Email</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 content-left single-post">
                <div class="blog-posts">
                    <h3 class="post"><?= $model->title ?></h3>
                    <div class="last-article">
                        <p class="artext"><?= $model->content ?></p>
                        <p class="artext">The premier was meeting with Queen Elizabeth II at Buckingham Palace as the
                            Conservatives reached the 326-seat threshold that allows them
                            to ditch their Liberal Democrat coalition partners and govern alone in the 650-seat
                            Parliament.</p>
                        <p class="artext">The premier was meeting with Queen Elizabeth II at Buckingham Palace as the
                            Conservatives reached the 326-seat threshold that allows them
                            to ditch their Liberal Democrat coalition partners and govern alone in the 650-seat
                            Parliament.</p>

                        <div class="clearfix"></div>

                        <div class="response">
                            <h4>Responses</h4>
                            <?php if (!empty($commentList)) {
                                foreach ($commentList as $comment) {
                                    $user = $userModel->getUserByComment($comment->user_id); ?>
                                    <div class="media response-info" style="border-bottom: 1px solid #84754e;">
                                        <div class="media-left response-text-left">
                                            <a href="#">
                                                <img class="media-object" style="width: 67.578px; height: 67.578px"
                                                     src="/uploads/user/<?php $user->image ?>" alt=""/>
                                            </a>
                                            <h5><a href="#"><?= $user->name ?></a></h5>
                                        </div>
                                        <div class="media-body response-text-right">
                                            <p><?= $comment->content ?></p>
                                            <ul>
                                                <li><?= $comment->date ?></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="coment-form">

                            <?php
                            $form = ActiveForm::begin(['options' => ['class' => 'coment-form']]); ?>

                            <?= $form->field($commentModel, 'content')->textarea(['rows' => 6, 'required' => true])->label('Комментрий') ?>

                            <div class="">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 side-bar">
                <div class="first_half">
                    <div class="categories">
                        <header>
                            <h3 class="side-title-head">Categories</h3>
                        </header>
                        <ul>
                            <li><a href="business.html">Business</a></li>
                            <li><a href="technology.html">Technology</a></li>
                            <li><a href="entertainment.html">Entertainment</a></li>
                            <li><a href="sports.html">Sports</a></li>
                            <li><a href="fashion.html">Fashion</a></li>
                            <li><a href="shortcodes.html">Health</a></li>
                        </ul>
                    </div>
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
                            <a href="single.html"><img src="images/sai.jpg" alt=""/></a>
                            <div class="side-bar-article-title">
                                <a href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text</a>
                            </div>
                        </div>
                        <div class="side-bar-article">
                            <a href="single.html"><img src="images/sai2.jpg" alt=""/></a>
                            <div class="side-bar-article-title">
                                <a href="single.html">There are many variations of passages of Lorem</a>
                            </div>
                        </div>
                        <div class="side-bar-article">
                            <a href="single.html"><img src="images/sai3.jpg" alt=""/></a>
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
                                <a href="single.html"><img src="images/popular-4.jpg" alt=""/></a>
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
                                <a href="single.html"><img src="images/popular-3.jpg" alt=""/></a>
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
</div>
