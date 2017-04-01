<?php

use yii\helpers\Url;

?>
<div class="col-md-2">
    <div class="panel" style="border: 1px solid #D6D6D6">
        <div class="panel-body">
            <a href="<?= Url::to(['testing/index/', ['id'=>123]]); ?>" class="icon-box icon-box-vertical">
                <div class="desc-container">
                    <h6><?= $model->name?></h6>
                    <p>стоимость теста:<?= $model->price_for_test?>РУБ</p>
                </div>
            </a>
        </div>
    </div>
</div>