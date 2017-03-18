<?php

use common\models\Category;
use common\models\Profession;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Rule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rule-form">

    <div class="col-sm-6">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'profession_id')->dropDownList(ArrayHelper::map(Profession::find()->all(), 'id', 'name')) ?>

        <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>

        <?= $form->field($model, 'count')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
