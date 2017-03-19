<?php

use common\models\Category;
use common\models\Profession;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RuleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Rules');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rule-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-info"><?= Html::encode('amen profesiayi  hamar nshumenq  te  qani harc  ka vor kategoriayic') ?></div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Rule'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',

            [
                'attribute' => 'profession_id',
                'value' => function ($model) {
                    return $model->profession->name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'profession_id', ArrayHelper::map(Profession::find()->all(), 'id', 'name'), [
                    'prompt' => '',
                    'class' => 'form-control'
                ])
            ],

            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return $model->category->name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'category_id', ArrayHelper::map(Category::find()->all(), 'id', 'name'), [
                    'prompt' => '',
                    'class' => 'form-control'
                ])
            ],

            'count',

            'created_at:datetime',
            'updated_at:datetime',

            [
                'class' => 'yii\grid\ActionColumn',
//                'template' => '{view} {delete}',
//                'buttons' => [
//                    'delete' => function ($url, $model) {
//                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url,
//                            ['data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'POST']);
//                    }
//                ],

            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
