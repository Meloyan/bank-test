<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserBalanceAway */

$this->title = Yii::t('app', 'Create User Balance Away');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Balance Aways'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-balance-away-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
