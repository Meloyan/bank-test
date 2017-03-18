<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProfessionType */

$this->title = Yii::t('app', 'Create Profession Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profession Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
