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