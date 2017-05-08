<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/assets/css/style.css',
        'public/assets/css/leftmenu.css',
        'public/assets/css/right-information-bar.css',
        'public/assets/css/jquery.countdownTimer.css',
           ];
    public $js = [
        'public/assets/js/category.js',
        'public/assets/js/app.js',
        'public/assets/js/forms.js',
        'public/assets/js/testing.js',
        'public/assets/js/libraries/underscore.js',
        'public/assets/js/libraries/jquery.countdownTimer.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
