<?php

namespace common\components;

use Yii;

class ValidateUser extends \yii\base\Component
{
    public function init()
    {
        $user = Yii::$app->user->getIdentity();
        if (!$user->isAdmin()) {
            parent::init();
            return $this->redirect(Yii::$app->urlManager->createUrl('/news/list'));
        }
        return $this->render('index');

    }
}