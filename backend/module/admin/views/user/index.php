<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'status',
            'created_at',
            //'updated_at',
            //'verification_token',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(Yii::getAlias('@web').'/uploads/user/'. $model->image,
                        ['width' => '70px', 'height' => '70px']);
                }
            ],
            [
                'label' => 'Зображення',
                'format' => 'html',
                'value' => function ($model) {
                    if ($model->image) {
                        return Html::a(
                            'Змінити',
                            Url::to(['user/set-image', 'id' => $model->id]),
                            [
                                'class' => 'button btn btn-primary',
                            ]
                        );
                    }
                    return Html::a(
                        'Встановити',
                        Url::to(['user/set-image', 'id' => $model->id]),
                        [
                            'class' => 'button btn btn-info',
                        ]
                    );
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
