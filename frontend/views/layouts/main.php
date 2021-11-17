<?php

/* @var $this \yii\web\View */

/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
$newsCategoryModel = new \frontend\models\NewsCategory();
$newsCategoryList = $newsCategoryModel->find()->asArray()->all();
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <!-- header-section-starts-here -->
    <div class="header">
        <div class="header-top">
            <div class="wrap">
                <div class="top-menu">
                    <ul>
                        <li><a href="http://news/news/list">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="top-menu" style="position: relative; float: right;">
                    <?php
                    if (Yii::$app->user->isGuest) {
                        echo '<ul><li><a href="/site/signup">Signup</a></li>
                                <li><a href="/site/login">Login</a></li></ul>';
                    } else {
                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                                . Html::a('Profile', '/site/profile', ['style' => ['color' => 'white', 'text-decoration' => 'none']])
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn logout', 'style' => ['color' => 'white']]
                            )
                            . Html::endForm();
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="logo text-center">
                <a href="index.html"><img src="/template/images/logo.jpg" alt=""/></a>
            </div>
            <div class="navigation">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="wrap">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <!--/.navbar-header-->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav d-inline navbar-nav">
                                <li class="active"><a href="http://news/news/list">Home</a></li>
                                <li><a href="/news/category/?category=sports">Sports</a></li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Cities<b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="position: absolute;">
                                        <?php foreach ($newsCategoryList as $newsCategoryItem) { ?>
                                            <li>
                                                <a href="/news/category/?category=<?= $newsCategoryItem['title'] ?>"><?= $newsCategoryItem['label'] ?></a>
                                            </li>
                                            <li class="divider"></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a href="/news/category/?category=health">Health</a></li>
                                <li><a href="/news/category/?category=fashion">Fashion</a></li>
                                <li><a href="/news/category/?category=technology">Technology</a></li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="search">
                                <!-- start search-->
                                <div class="search-box">
                                    <div id="sb-search" class="sb-search">
                                        <form>
                                            <input class="sb-search-input" placeholder="Enter your search term..."
                                                   type="search" name="search" id="search">
                                            <input class="sb-search-submit" type="submit" value="">
                                            <span class="sb-icon-search"> </span>
                                        </form>
                                    </div>
                                </div>
                                <!-- search-scripts -->
                                <script src="js/classie.js"></script>
                                <script src="js/uisearch.js"></script>
                                <script>
                                    new UISearch(document.getElementById('sb-search'));
                                </script>
                                <!-- //search-scripts -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--/.navbar-collapse-->
                    <!--/.navbar-->
            </div>
            </nav>
        </div>
    </div>
    <!-- header-section-ends-here -->

    <?= $content ?>
    <!-- content-section-ends-here -->
    <!-- footer-section-starts-here -->
    <div class="footer">
        <div class="footer-top">
            <div class="wrap">
                <div class="col-md-3 col-xs-6 col-sm-4 footer-grid">
                    <h4 class="footer-head">About Us</h4>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout.</p>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                        opposed to using 'Content here.</p>
                </div>
                <div class="col-md-2 col-xs-6 col-sm-2 footer-grid">
                    <h4 class="footer-head">Categories</h4>
                    <ul class="cat">
                        <li><a href="/news/category/?category=technology">Technology</a></li>
                        <li><a href="/news/category/?category=entertainment">Entertainment</a></li>
                        <li><a href="/news/category/?category=sports">Sports</a></li>
                        <li><a href="/news/category/?category=health">Health</a></li>
                        <li><a href="/news/category/?category=fashion">Fashion</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-12 footer-grid">
                    <h4 class="footer-head">Contact Us</h4>
                    <span class="hq">Our headquaters</span>
                    <address>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-map-marker"></span></li>
                            <li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
                            <div class="clearfix"></div>
                        </ul>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-earphone"></span></li>
                            <li>+0 561 111 235</li>
                            <div class="clearfix"></div>
                        </ul>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-envelope"></span></li>
                            <li><a href="mailto:info@example.com">mail@example.com</a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </address>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="wrap">
                <div class="copyrights col-md-6">
                    <p> © 2015 Express News. All Rights Reserved | Design by <a href="http://w3layouts.com/">
                            W3layouts</a></p>
                </div>
                <div class="footer-social-icons col-md-6">
                    <ul>
                        <li><a class="facebook" href="#"></a></li>
                        <li><a class="twitter" href="#"></a></li>
                        <li><a class="flickr" href="#"></a></li>
                        <li><a class="googleplus" href="#"></a></li>
                        <li><a class="dribbble" href="#"></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- footer-section-ends-here -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
            var defaults = {
            wrapID: 'toTop', // fading element id
            wrapHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
            */
            $().UItoTop({easingType: 'easeOutQuart'});
        });
    </script>
    <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!---->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>

        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
