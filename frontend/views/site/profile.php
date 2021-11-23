<?php

/* @var $user common\models\User */

?>
<link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>

<br><br><br>

<style>
    body{background:url(https://bootstraptema.ru/images/bg/bg-1.png)}
    .navigation {
        display: none!important;
    }
    .avatar {
        width: 212px;
        height: 212px;
    }
    #main {
        background-color: #f2f2f2;
        padding: 20px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        -o-border-radius: 4px;
        border-radius: 4px;
        border-bottom: 4px solid #ddd;
    }
    #real-estates-detail #author img {
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        -ms-border-radius: 100%;
        -o-border-radius: 100%;
        border-radius: 100%;
        border: 5px solid #ecf0f1;
        margin-bottom: 10px;
    }
    #real-estates-detail .sosmed-author i.fa {
        width: 30px;
        height: 30px;
        border: 2px solid #bdc3c7;
        color: #bdc3c7;
        padding-top: 6px;
        margin-top: 10px;
    }
    .panel-default .panel-heading {
        background-color: #fff;
    }
    #real-estates-detail .slides li img {
        height: 450px;
    }
</style>

<div class="container">
    <div id="main">


        <div class="row" id="real-estates-detail">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <header class="panel-title">
                            <div class="text-center">
                                <strong>Пользователь сайта</strong>
                            </div>
                        </header>
                    </div>
                    <div class="panel-body">
                        <div class="text-center" id="author">
                            <img class="avatar" src="<?= $user->getImageUrl() ?>">
                            <h3><?= $user->username ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="panel">
                    <div class="panel-body">
                        <div id="myTabContent" class="tab-content">
                            <hr>
                            <div class="tab-pane fade active in" id="detail">
                                <h4>История профиля</h4>
                                <table class="table table-th-block">
                                    <tbody>
                                    <tr><td class="active">Зарегистрирован:</td><td><?= Yii::$app->formatter->asDate($user->created_at,'php:d-m-Y'); ?></td></tr>
                                    <tr><td class="active">Город:</td><td><?= $user->getCity() ?></td></tr>
                                    <tr><td class="active">Пол:</td><td><?= $user->getGenderLabel() ?></td></tr>
                                    <tr><td class="active">Полных лет:</td><td><?= $user->getAge() ?></td></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <p></p>
                                <form role="form">
                                    <div class="form-group">
                                        <label>Ваше имя</label>
                                        <input type="text" class="form-control rounded" placeholder="Укажите Ваше Имя">
                                    </div>
                                    <div class="form-group">
                                        <label>Ваш телефон</label>
                                        <input type="text" class="form-control rounded" placeholder="(+7)(095)123456">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail адрес</label>
                                        <input type="email" class="form-control rounded" placeholder="Ваш Е-майл">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Согласен с условиями
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Текст Вашего сообщения</label>
                                        <textarea class="form-control rounded" style="height: 100px;"></textarea>
                                        <p class="help-block">Текст сообщения будет отправлен пользователю</p>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" data-original-title="" title="">Отправить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.main -->
</div><!-- /.container -->