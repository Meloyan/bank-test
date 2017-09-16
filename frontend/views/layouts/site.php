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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>

<?= $this->render('//common/head'); ?>

<?= $content ?>

<?= $this->render('//common/footer') ?>

<?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>
