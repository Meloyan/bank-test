<?php

use yii\helpers\Url;
use yii\bootstrap\Nav;

?>

<!-- Navbar
================================================== -->
<header class="clearfix">
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="header-top-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <span><i class="fa fa-phone"></i> +102655874624</span>
                        <span><i class="fa fa-envelope"></i> contact@gmail.com</span>
                    </div>
<!--                    <div class="pull-right">-->
<!--                        <!-- clock widget start -->-->
<!--                        <script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","//s.bookcdn.com//css/cl/bw-cl-126el.css"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_7_1101166488"><div style="width:126px; height:82px; margin: 0 auto;"><a href="http://nochi.com/time/saint-petersburg-18398">Санкт-Петербург</a><br/></div></div> <script type="text/javascript"> function setWidgetData_1101166488(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_1101166488 = -1; </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/time/info?ver=2&domid=589&type=7&id=1101166488&scode=124&city_id=18398&wlangid=20&mode=0&details=0&background=ffffff&color=08488d&add_background=ffffff&add_color=00faff&head_color=333333&border=0&transparent=0"></script>-->
<!--                        <!-- clock widget end -->-->
<!---->
<!--                    </div>-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= Url::to(['main/index']) ?>"><img alt="" src=""></a>
            </div>
            <?php
            $menuItems = [
                ['label' => 'Главная', 'url' => ['/main/index']],
            ];
            if (!Yii::$app->user->isGuest) {
                $menuItems[] = [
                    'label' => 'Личный кабинет',
                    'url' => Url::to(['/cabinet/index']),
                ];
                $menuItems[] = [
                    'label' => 'Выйти (' . Yii::$app->user->identity->username . ')',
                    'url' => Url::to(['/main/logout']),
                    'linkOptions' => ['data-method' => 'post'],

                ];
            } else {
                $menuItems[] = [// первый уровень
                    'label' => 'Войти',
                    'url' => Url::to(['/main/login']),
                ];
            }

            echo Nav::widget([
                'items' => $menuItems,
                'options' => ['class' => 'navbar-nav'],
            ]);


            ?>
    </nav>
</header>
<!-- End Header -->