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

                <div class="top-menu" style="position: relative; float: right;">
                    <?php
                    if (Yii::$app->user->isGuest) {
                        echo '<ul><li><a href="/site/signup">Регистрация</a></li>
                                <li><a href="/site/login">Войти</a></li></ul>';
                    } else {
                        $adminPanel = Yii::$app->user->getIdentity()->isAdmin() ? '<a style="padding-right: 12px; color: white; text-decoration: none" href="/admin">Админ панель</a>' : '';
                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline']) . $adminPanel
                            //. Html::a('Профиль', '/site/profile', ['style' => ['color' => 'white', 'text-decoration' => 'none']])
                            . Html::submitButton(
                                'Выйти (' . Yii::$app->user->identity->username . ')',
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
                                <li class="active"><a href="http://news/news/list">Главная</a></li>
                                <li><a href="/news/category/?category=sports">Спорт</a></li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Города<b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="position: absolute;">
                                        <?php foreach ($newsCategoryList as $newsCategoryItem) { ?>
                                            <li>
                                                <a href="/news/category/?category=<?= $newsCategoryItem['title'] ?>"><?= $newsCategoryItem['label'] ?></a>
                                            </li>
                                            <li class="divider"></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a href="/news/category/?category=health">Здоровье</a></li>
                                <li><a href="/news/category/?category=fashion">Мода</a></li>
                                <li><a href="/news/category/?category=technology">Технологии</a></li>
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
                    <h4 class="footer-head">О нас</h4>
                    <p>Именно с запуска онлайн-издания в 2001 году началась история медиахолдинга. Сайт CurrentNews быстро стал самым популярным онлайн-медиа Украины. С тех пор он неизменно занимает первые строчки в рейтингах.
                        По данным Google Analytics, ежедневно OBOZREVATEL посещают около 1,5 млн уникальных пользователей, за месяц — 21 млн.
                    </p>
                </div>
                <div class="col-md-3 col-xs-12 footer-grid">
                    <h4 class="footer-head">Свяжитесь с нами</h4>
                    <address>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-earphone"></span></li>
                            <li>+380 63 315 25 26</li>
                            <div class="clearfix"></div>
                        </ul>
                        <ul class="location">
                            <li><span class="glyphicon glyphicon-envelope"></span></li>
                            <li><a href="mailto:current.news@gmail.com">current.news@gmail.com</a></li>
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
                    <p> © 2021 CurrentNews. All Rights Reserved</p>
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
