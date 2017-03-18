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
        'public/assets/images/favicon.html',
        'public/assets/css/bootstrap/bootstrap.min.css',
        'public/assets/css/style.css',
        'public/assets/css/animate.css',
        'public/assets/fonts/font-awesome-4.3/css/font-awesome.min.css',
        'public/assets/fonts/et-line-font/style.css',
        'public/assets/css/bxslider/jquery.bxslider.css',
//        'public/assets/css/assets/css/owl.carousel/owl.carousel.css',
        'public/assets/css/owl.carousel/owl.theme.css',
        'public/assets/css/owl.carousel/owl.transitions.css',
        'public/assets/css/magnific-popup/magnific-popup.css',
        'public/assets/css/YTPlayer/jquery.mb.YTPlayer.min.css',
        'public/assets/css/superslides.css',
        'public/assets/css/morphext.css',
        'public/assets/css/flexslider.css',
    ];
    public $js = [
//        'public/assets/js/jquery-1.11.3.min.js',
        'public/assets/js/bootstrap.min.js',
        'public/assets/js/jquery.easing.1.3.js',
        'public/assets/js/jquery.smoothscroll.js',
        'public/assets/js/jquery.stellar.min.js',
        'public/assets/js/jquery.countTo.js',
        'public/assets/js/jquery.waypoints.js',
        'public/assets/js/jquery.imagesloaded.min.js',
        'public/assets/js/jquery.appear.min.js',
        'public/assets/js/jquery.bxslider.min.js',
        'public/assets/js/jquery.touchSwipe.min.js',
        'public/assets/js/jquery.isotope.js',
        'public/assets/js/jquery.placeholder.js',
        'public/assets/js/jquery.ajaxchimp.min.js',
        'public/assets/js/jquery.fitvids.js',
        'public/assets/js/jquery.magnific-popup.min.js',
        'public/assets/js/jquery.mb.YTPlayer.min.js',
        'public/assets/js/jquery.owl.carousel.min.js',
        'public/assets/js/jquery.superslides.min.js',
        'public/assets/js/jquery.morphext.min.js',
        'public/assets/js/jquery.nouislider.min.js',
        'public/assets/js/jquery.flexslider-min.js',
//        'public/assets/js/jquery.gmaps.js',
        'public/assets/js/main.js',
        'public/assets/js/search.js',
//        'js/bootstrap.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
