<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserBalanceAway */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-balance-away-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput() ?>

<!--    --><?php //echo  $form->field($model, 'timestamp')->textInput() ?>

<!--    --><?php //echo  $form->field($model, 'balance_before')->textInput() ?>

<!--    --><?php // $form->field($model, 'balance_after')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
