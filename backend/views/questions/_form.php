<?php

use common\models\Answers;
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

        <?= $form->field($question, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>

        <?= $form->field($question, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($question, 'body')->textarea(['rows' => 3]) ?>

        <?= $form->field($question, 'fl_default')->dropDownList(Questions::$default) ?>

        <div class="form-group">
            <?= Html::submitButton($question->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $question->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>


    </div>

    <div class="col-sm-6">

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>answer</th>
                </tr>
            </thead>
            <tr>
                <td>
                    <?= $form->field($answer, 'fl_true[]', [])->radio()->label(false) ?>
                </td>
                <td>
                    <?= $form->field($answer, 'body[]')->textarea(['rows' => 3])->label(false) ?>
                </td>
            </tr>

            <tr>
                <td>
                    <?= $form->field($answer, 'fl_true[]', [])->radio()->label(false) ?>
                </td>
                <td>
                    <?= $form->field($answer, 'body[]')->textarea(['rows' => 3])->label(false) ?>
                </td>
            </tr>

            <tr>
                <td>
                    <?= $form->field($answer, 'fl_true[]', [])->radio()->label(false) ?>
                </td>
                <td>
                    <?= $form->field($answer, 'body[]')->textarea(['rows' => 3])->label(false) ?>
                </td>
            </tr>

            <tr>
                <td>
                    <?= $form->field($answer, 'fl_true[]', [])->radio()->label(false) ?>
                </td>
                <td>
                    <?= $form->field($answer, 'body[]')->textarea(['rows' => 3])->label(false) ?>
                </td>
            </tr>

        </table>

    </div>


    <?php ActiveForm::end(); ?>

</div>



