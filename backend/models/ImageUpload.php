<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;

    public static function uploadFile(UploadedFile $file, $path = 'all')
    {
        $path = stripslashes($path);
        $fileName = time() . '.' .  $file->extension;
        $file->saveAs(Yii::getAlias('@web') . 'uploads/' . $path . '/' . $fileName);
        return $fileName;
    }
}