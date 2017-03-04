<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProfessionSettings */

$this->title = Yii::t('app', 'Create Profession Settings');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profession Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-settings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
