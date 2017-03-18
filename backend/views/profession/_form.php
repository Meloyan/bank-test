<?php

use common\models\ProfessionSettings;
use common\models\ProfessionType;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profession */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profession-form">

    <div class="col-sm-6">


        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textarea(['row' => 3]) ?>

        <?= $form->field($model, 'price_for_test')->textInput() ?>

        <?= $form->field($model, 'profession_setting_id')->dropDownList(ArrayHelper::map(ProfessionSettings::find()->all(), 'id', 'name')) ?>

        <?= $form->field($model, 'type')->dropDownList(ArrayHelper::map(ProfessionType::find()->all(), 'id', 'name')) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
