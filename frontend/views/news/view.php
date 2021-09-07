<?php use backend\models\User;
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
                    <h3 class="post">Donald Trump News - Donald Trump Special Reports - Summarizes the latest news about
                        Donald Trump</h3>
                    <div class="last-article">
                        <p class="artext">With Cameron immediately renewing his pledge to hold a referendum on British
                            membership of the European Union, the result throws up questions about Britain’s
                            constitutional future. For now, the surprise victory was welcomed by markets, with stocks
                            and the pound rallying as it became clear Cameron had defied forecasts of a hung parliament
                            to easily defeat Ed Miliband’s Labour Party and govern alone.</p>
                        <h3>Donald Trump News - Donald Trump Special Reports</h3>
                        <iframe src="https://www.youtube.com/embed/mbDg4OG7z4Y" frameborder="0"
                                allowfullscreen=""></iframe>
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
                            <?php foreach ($commentList as $comment) {
                                $userModel = new User();
                                $user = $userModel->find()->where(['id' => $comment->user_id])->one();
                                ?>
                                <div class="media response-info" style="border-bottom: 1px solid #84754e;">
                                    <div class="media-left response-text-left">
                                        <a href="#">
                                            <img class="media-object" style="width: 67.578px; height: 67.578px" src="/uploads/user/<?= $user->image ?>" alt=""/>
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

                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/c3.jpg" alt=""/>
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                        variations of passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>June 21, 2015</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/c4.jpg" alt=""/>
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                        variations of passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>Mar 28, 2015</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>
                                    <div class="media response-info">
                                        <div class="media-left response-text-left">
                                            <a href="#">
                                                <img class="media-object" src="images/c5.jpg" alt=""/>
                                            </a>
                                            <h5><a href="#">Username</a></h5>
                                        </div>
                                        <div class="media-body response-text-right">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                                variations of passages of Lorem Ipsum available,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <ul>
                                                <li>Feb 19, 2015</li>
                                                <li><a href="single.html">Reply</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/c6.jpg" alt=""/>
                                    </a>
                                    <h5><a href="#">Username</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                        variations of passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>Jan 20, 2015</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
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
                        <div class="coment-form">
                            <h4>Leave your comment</h4>
                            <form>
                                <input type="text" value="Name " onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                <input type="email" value="Email (will not be published)*" onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}"
                                       required="">
                                <input type="text" value="Website" onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'Website';}" required="">
                                <textarea onfocus="this.value = '';"
                                          onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                                <input type="submit" value="Submit Comment">
                            </form>
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
                    <div class="list_vertical">
                        <section class="accordation_menu">
                            <div>
                                <input id="label-1" name="lida" type="radio" checked/>
                                <label for="label-1" id="item1"><i class="ferme"> </i>Popular Posts<i
                                            class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                                <div class="content" id="a1">
                                    <div class="scrollbar" id="style-2">
                                        <div class="force-overflow">
                                            <div class="popular-post-grids">
                                                <div class="popular-post-grid">
                                                    <div class="post-img">
                                                        <a href="single.html"><img src="images/bus2.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <a class="pp-title" href="single.html"> The section of the mass
                                                            media industry</a>
                                                        <p>On Feb 25 <a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-comment"></span>3
                                                            </a><a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-eye-open"></span>56
                                                            </a></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="popular-post-grid">
                                                    <div class="post-img">
                                                        <a href="single.html"><img src="images/bus1.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <a class="pp-title" href="single.html"> Lorem Ipsum is simply
                                                            dummy text printing</a>
                                                        <p>On Apr 14 <a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-comment"></span>2
                                                            </a><a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-eye-open"></span>56
                                                            </a></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="popular-post-grid">
                                                    <div class="post-img">
                                                        <a href="single.html"><img src="images/bus3.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <a class="pp-title" href="single.html">There are many variations
                                                            of Lorem</a>
                                                        <p>On Jun 25 <a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-comment"></span>0
                                                            </a><a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-eye-open"></span>56
                                                            </a></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="popular-post-grid">
                                                    <div class="post-img">
                                                        <a href="single.html"><img src="images/bus4.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <a class="pp-title" href="single.html">Sed ut perspiciatis unde
                                                            omnis iste natus</a>
                                                        <p>On Jan 25 <a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-comment"></span>1
                                                            </a><a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-eye-open"></span>56
                                                            </a></p>
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
                                            class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                                <div class="content" id="a2">
                                    <div class="scrollbar" id="style-2">
                                        <div class="force-overflow">
                                            <div class="popular-post-grids">
                                                <div class="popular-post-grid">
                                                    <div class="post-img">
                                                        <a href="single.html"><img src="images/tec2.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <a class="pp-title" href="single.html"> The section of the mass
                                                            media industry</a>
                                                        <p>On Feb 25 <a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-comment"></span>3
                                                            </a><a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-eye-open"></span>56
                                                            </a></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="popular-post-grid">
                                                    <div class="post-img">
                                                        <a href="single.html"><img src="images/tec1.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <a class="pp-title" href="single.html"> Lorem Ipsum is simply
                                                            dummy text printing</a>
                                                        <p>On Apr 14 <a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-comment"></span>2
                                                            </a><a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-eye-open"></span>56
                                                            </a></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="popular-post-grid">
                                                    <div class="post-img">
                                                        <a href="single.html"><img src="images/tec3.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <a class="pp-title" href="single.html">There are many variations
                                                            of Lorem</a>
                                                        <p>On Jun 25 <a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-comment"></span>0
                                                            </a><a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-eye-open"></span>56
                                                            </a></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="popular-post-grid">
                                                    <div class="post-img">
                                                        <a href="single.html"><img src="images/tec4.jpg" alt=""/></a>
                                                    </div>
                                                    <div class="post-text">
                                                        <a class="pp-title" href="single.html">Sed ut perspiciatis unde
                                                            omnis iste natus</a>
                                                        <p>On Jan 25 <a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-comment"></span>1
                                                            </a><a class="span_link" href="#"><span
                                                                        class="glyphicon glyphicon-eye-open"></span>56
                                                            </a></p>
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
                                            class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
                                <div class="content" id="a3">
                                    <div class="scrollbar" id="style-2">
                                        <div class="force-overflow">
                                            <div class="response">
                                                <div class="media response-info">
                                                    <div class="media-left response-text-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/icon1.png" alt=""/>
                                                        </a>
                                                        <h5><a href="#">Username</a></h5>
                                                    </div>
                                                    <div class="media-body response-text-right">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit,There are many variations of passages of Lorem Ipsum
                                                            available,
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
                                                            <img class="media-object" src="images/icon1.png" alt=""/>
                                                        </a>
                                                        <h5><a href="#">Username</a></h5>
                                                    </div>
                                                    <div class="media-body response-text-right">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit,There are many variations of passages of Lorem Ipsum
                                                            available,
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
                                                            <img class="media-object" src="images/icon1.png" alt=""/>
                                                        </a>
                                                        <h5><a href="#">Username</a></h5>
                                                    </div>
                                                    <div class="media-body response-text-right">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit,There are many variations of passages of Lorem Ipsum
                                                            available,
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
                                                            <img class="media-object" src="images/icon1.png" alt=""/>
                                                        </a>
                                                        <h5><a href="#">Username</a></h5>
                                                    </div>
                                                    <div class="media-body response-text-right">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit,There are many variations of passages of Lorem Ipsum
                                                            available,
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
                                                            <img class="media-object" src="images/icon1.png" alt=""/>
                                                        </a>
                                                        <h5><a href="#">Username</a></h5>
                                                    </div>
                                                    <div class="media-body response-text-right">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit,There are many variations of passages of Lorem Ipsum
                                                            available,
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
                                                            <img class="media-object" src="images/icon1.png" alt=""/>
                                                        </a>
                                                        <h5><a href="#">Username</a></h5>
                                                    </div>
                                                    <div class="media-body response-text-right">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit,There are many variations of passages of Lorem Ipsum
                                                            available,
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
                                                            <img class="media-object" src="images/icon1.png" alt=""/>
                                                        </a>
                                                        <h5><a href="#">Username</a></h5>
                                                    </div>
                                                    <div class="media-body response-text-right">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit,There are many variations of passages of Lorem Ipsum
                                                            available,
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
