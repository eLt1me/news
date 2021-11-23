<?php

namespace common\components;

use Yii;

class Controller extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        $user = Yii::$app->user->getIdentity();
        if (Yii::$app->user->isGuest || !$user->isAdmin()) {
            parent::init();
            return $this->redirect(Yii::$app->urlManager->createUrl('/news/list'));
        }
        return parent::beforeAction($action);
    }
}