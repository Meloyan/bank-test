<?php

use common\models\ProfessionType;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;
?>

<section>
    <div id="head-page-section" class="l-grey-bg">
        <div class="container">
            <div class="row">
                <div class="btn-group btn-group-justified">
                <!-- Centered Pills -->
                    <section>
                        <?php $form = ActiveForm::begin(['id' => 'form', 'method' => 'get']); ?>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <?= $form->field($searchModel, 'type')->dropDownList(ArrayHelper::map(ProfessionType::find()->all(), 'id', 'name'), ['class' => 'select form-control filter', 'prompt' => '[Виберите сатегори]'])->label(false) ?>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <?= $form->field($searchModel, 'name')->textInput(['class' => 'form-control ', 'placeholder' => 'Search...'])->label(false) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </section>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row" style="padding: 20px 15px;">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
        ]); ?>
    </div>
</section>

