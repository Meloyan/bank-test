<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

\frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!---->
<!--    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300'-->
<!--          rel='stylesheet' type='text/css'>-->
<!--    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>-->

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>

<?= $this->render('//common/head'); ?>

<?= $content ?>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<?= $this->render('//common/footer') ?>

<?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>
