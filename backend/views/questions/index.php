<?php

use common\models\Category;
use common\models\Questions;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\QuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Questions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Questions'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',

            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return   $model->category->name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'category_id', ArrayHelper::map(Category::find()->all(), 'id', 'name'), [
                    'prompt' => '',
                    'class' => 'form-control'
                ])
            ],

            'title',
            'body',

            [
                'attribute' => 'fl_default',
                'value' => function ($model) {
                    return   $model->fl_default ? 'Да': 'Нет';
                },
                'filter' => Html::activeDropDownList($searchModel, 'fl_default', Questions::$default, [
                    'prompt' => '',
                    'class' => 'form-control'
                ])
            ],

            'created_at:datetime',
            'updated_at:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
