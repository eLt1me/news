<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/template/css/bootstrap.css',
        '/template/css/flexsider.css',
        '/template/css/style.css'
    ];
    public $js = [
        '/template/js/bootstrap.js',
        '/template/js/classie.js',
        '/template/js/easing.js',
        '/template/js/jquery.flexisel.js',
        '/template/js/jquery.marquee.min.js',
        '/template/js/jquery.min.js',
        '/template/js/move.top.js',
        '/template/js/responsiveslides.min.js',
        '/template/js/uisearch.js',
    ];
    public $depends = [
    ];
}
