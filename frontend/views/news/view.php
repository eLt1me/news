<?php
use frontend\models\User;
use frontend\themes\widgets\PopularNews;
use frontend\themes\widgets\PopularPosts;
use frontend\themes\widgets\Tags;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $commentModel frontend\models\Comment */
/* @var $commentList frontend\models\Comment */
/* @var $model frontend\models\News */
/* @var $comment frontend\models\Comment */
?>

<div class="main-body">
    <div class="wrap">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active"><?= $model->title ?></li>
        </ol>
        <div class="single-page">
            <div class="col-md-2 share_grid" style="visibility: hidden">
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
                    <a href="index.html"><img style="width: 850px; height: 500px;" src="/uploads/news/<?= $model->image ? : 'no-image.png' ?>" alt=""/></a>
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
                                    $userModel = new User();
                                    $user = $userModel->find()->where(['id' => $comment->user_id])->one(); ?>
                                    <div class="media response-info" style="border-bottom: 1px solid #84754e;">
                                        <div class="media-left response-text-left">
                                            <a href="#">
                                                <img class="media-object" style="width: 67.578px; height: 67.578px"
                                                     src="/uploads/user/<?= $user->image ?>" alt=""/>
                                            </a>
                                            <h5><a href="#"><?= $user->username ?></a></h5>
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

                            <?php if (!Yii::$app->user->isGuest) {
                            $form = ActiveForm::begin(['options' => ['class' => 'comment-form']]); ?>

                            <?= $form->field($commentModel, 'content')->textarea(['rows' => 6, 'required' => true])->label('Комментрий') ?>

                            <div class="">
                                <?= Html::input('submit', 'Submit Content', 'Submit Content') ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                            <?php } else {
                                echo '<a>You need to <a style="color: purple" href="/site/login">log in</a> to leave a comment</a>';
                            } ?>
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
                        </div>
                    </div>
                </div>
                <?= Tags::widget(['model' => $model]) ?>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
