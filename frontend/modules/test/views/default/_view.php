<?php

use yii\helpers\Url;

?>
<div class="col-md-2">
    <a href="<?= Url::to(['testing/index/', 'id' => $model->id]); ?>" class="icon-box icon-box-vertical a">
        <div class="panel <?= Yii::$app->user->identity->balance >= $model->price_for_test ? '' : ' inactive' ?>" style="border: 1px solid #D6D6D6">
            <div class="panel-body">
                <div class="desc-container ">
                    <strong><?= $model->name ?></strong>
                    <p>стоимость теста:<?= $model->price_for_test ?>РУБ</p>
                </div>
            </div>
        </div>
    </a>
</div>