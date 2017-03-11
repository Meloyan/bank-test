<?php

use common\models\ProfessionSettings;
use common\models\ProfessionType;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchProfession */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Professions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Profession'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
            'price_for_test',

            [
                'attribute' => 'profession_setting_id',
                'value' => function ($model) {
                    return   $model->professionSetting->name ? : null;
                },
                'filter' => Html::activeDropDownList($searchModel, 'profession_setting_id', ArrayHelper::map(ProfessionSettings::find()->all(), 'id', 'name'), [
                    'prompt' => '',
                    'class' => 'form-control'
                ])
            ],

            [
                'attribute' => 'type',
                'value' => function ($model) {
                    return   $model->type_->name ? : null;
                },
                'filter' => Html::activeDropDownList($searchModel, 'profession_setting_id', ArrayHelper::map(ProfessionType::find()->all(), 'id', 'name'), [
                    'prompt' => '',
                    'class' => 'form-control'
                ])
            ],

            'created_at:datetime',
            'updated_at:datetime',

//            [
//                'attribute' => 'created_at',
//                'value' => function ($model) {
//                    return  date("Y-m-d H:i:s", $model->created_at);
//                },
//            ],
//
//            [
//                'attribute' => 'updated_at',
//                'value' => function ($model) {
//                    return  date("Y-m-d H:i:s", $model->updated_at);
//                },
//            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
