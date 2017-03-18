<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\ListView;

?>

<section>
    <div id="head-page-section" class="l-grey-bg">
        <div class="container">
            <div class="row">
                <div class="btn-group btn-group-justified">
                <!-- Centered Pills -->
                <ul class="nav nav-pills nav-justified ">
                    <li class="<?= Yii::$app->controller->action->id == 'category-one' ? 'active' : '' ?>"><a href="<?= Url::to(['default/category-one']) ?>">Menu 1</a></li>
                    <li class="<?= Yii::$app->controller->action->id == 'category-two' ? 'active' : '' ?>"><a href="<?= Url::to(['default/category-two']) ?>">Menu 2</a></li>
                    <li class="<?= Yii::$app->controller->action->id == 'category-three'? 'active' : '' ?>"><a href="<?= Url::to(['default/category-three']) ?>">Menu 3</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <?php $form = ActiveForm::begin(['id' => 'form', 'method' => 'get']); ?>

    <div class="row">
        <div class="col-xs-6">
            <div class="input-group">

                <?= $form->field($searchModel, 'name')->textInput(['class' => 'form-control', 'placeholder' => 'Search...'])->label(false) ?>

            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</section>
<section>
    <div class="row" style="padding: 20px 15px;">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_post',
        ]); ?>
    </div>
</section>

