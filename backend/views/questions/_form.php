<?php

use common\models\Category;
use common\models\Questions;
use unclead\multipleinput\MultipleInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Questions */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .vertical-align-inherit{
        vertical-align: inherit;
    }
</style>

<div class="questions-form row">


    <?php $form = ActiveForm::begin(); ?>

    <div class="col-sm-4">

        <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'body')->textarea(['rows' => 3]) ?>

        <?= $form->field($model, 'fl_default')->dropDownList(Questions::$default) ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>


    </div>

    <div class="col-sm-6">
        

        <?php if($model->answers): ?>

            <?= $this->render('_answers', [

                'answers' => $model->answers

            ])?>

        <?php else: ?>

            <?= $this->render('_no_answers') ?>

        <?php endif; ?>
        
    </div>


    <?php ActiveForm::end(); ?>

</div>



