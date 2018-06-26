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
        'css/site.css',
        'js/assets/owl.carousel.css',
        'js/assets/owl.theme.default.css',
        'css/font-awesome.css',
        'js/fancybox/jquery.fancybox.css',
        'css/style.css',
        'css/media.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
