<?php

namespace backend\components;

use backend\models\News;
use Yii;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

class CKEditorImageUpload
{
    public static function uploadImage()
    {
        $file = UploadedFile::getInstancesByName('upload');
        $funcNum = $_REQUEST['CKEditorFuncNum'];
        if (!$file) {
            $message = Yii::t('app', "Недопустимий файл зображення.");
            return '<script type="text/javascript">alert("' . $message . '");</script>';
        }
        if ($file[0]->size > 5 * 1024 * 1024) {
            $message = Yii::t('app', "Розмір зображення не повинен перевищувати 5 МБ.");
            return '<script type="text/javascript">alert("' . $message . '");</script>';
        }
        if (!in_array($file[0]->type, News::$valid_image_extensions)) {
            $message = Yii::t('app', "Тип зображення має бути JPG, JPEG або PNG.");
            return '<script type="text/javascript">alert("' . $message . '");</script>';
        }
        if ($file != NULL) {
            $path = Yii::getAlias('@frontend/web/uploads/images/');
            if (FileHelper::createDirectory($path, 0777, true)) {
                $CoverName = Yii::$app->getSecurity()->generateRandomString() . '.' . $file[0]->extension;
                $url = Yii::$app->request->hostInfo . '/frontend/web/uploads/images/' . $CoverName;
                if (!$file[0]->saveAs($path . $CoverName)) {
                    $message = Yii::t('app', "Помилка завантаження. Спробуйте ще раз.");
                    return '<script type="text/javascript">alert("' . $message . '");</script>';
                }
                return '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'
                    . $funcNum . '", "' . $url . '");</script>';
            }
        }
        $message = Yii::t('app', "Помилка завантаження. Спробуйте ще раз.");
        return '<script type="text/javascript">alert("' . $message . '");</script>';
    }
}