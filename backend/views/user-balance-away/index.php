<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserBalanceAwaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'User Balance Aways');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-balance-away-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--    <p>-->
    <!--        --><?php //echo  Html::a(Yii::t('app', 'Create User Balance Away'), ['create'], ['class' => 'btn btn-success']) ?>
    <!--    </p>-->

    <!--    --><?php //Pjax::begin(); ?><!--  -->
    <!--    --><?php //echo GridView::widget([
    //        'dataProvider' => $dataProvider,
    //        'filterModel' => $searchModel,
    //        'columns' => [
    //            ['class' => 'yii\grid\SerialColumn'],
    //
    //            'id',
    //            'user_id',
    //            'amount',
    ////            'timestamp',
    //            'balance_before',
    //            'balance_after',
    //            'type',
    //            'created_at:datetime',
    //
    //            ['class' => 'yii\grid\ActionColumn'],
    //        ],
    //    ]); ?>
    <!--    --><?php //Pjax::end(); ?>

</div>


<?php

$gridColumns = [

    ['class' => 'kartik\grid\SerialColumn'],

    'id',
    [
        'format' => 'raw',
        'attribute' => 'user_id',
        'value' => function ($model) {

            return Html::a(Html::encode($model->id), Url::to(['/user/view', 'id' =>$model->id]), ['target'=>'_blank']);

        },
        'pageSummary' => 'Page Total',
    ],
    [
        'attribute' => 'amount',
        'width'=>'150px',
//        'hAlign'=>'right',
        'format'=>['decimal', 2],
        'pageSummary'=>true,
//        'pageSummaryFunc'=>GridView::F_AVG
//        'editableOptions'=>['header'=>'Name', 'size'=>'md']
    ],
////            'timestamp',
    'balance_before',
    'balance_after',
    'type',

    'created_at:datetime',

//    [
//        'class' => 'kartik\grid\EditableColumn',
//        'attribute' => 'amount',
//        'pageSummary' => 'Page Total',
//        'vAlign'=>'middle',
//        'headerOptions'=>['class'=>'kv-sticky-column'],
//        'contentOptions'=>['class'=>'kv-sticky-column'],
//        'editableOptions'=>['header'=>'Name', 'size'=>'md']
//    ],
//    [
//        'attribute'=>'color',
//        'value'=>function ($model, $key, $index, $widget) {
//            return "<span class='badge' style='background-color: {$model->color}'> </span>  <code>" .
//                $model->color . '</code>';
//        },
//        'filterType'=>GridView::FILTER_COLOR,
//        'vAlign'=>'middle',
//        'format'=>'raw',
//        'width'=>'150px',
//        'noWrap'=>true
//    ],
//    [
//        'class' => 'kartik\grid\BooleanColumn',
//        'attribute' => 'type',
//        'vAlign' => 'middle',
//    ],
//    [
//        'class' => 'kartik\grid\ActionColumn',
//        'dropdown' => true,
//        'vAlign'=>'middle',
//        'urlCreator' => function($action, $model, $key, $index) { return '#'; },
//        'viewOptions'=>['title'=>$viewMsg, 'data-toggle'=>'tooltip'],
//        'updateOptions'=>['title'=>$updateMsg, 'data-toggle'=>'tooltip'],
//        'deleteOptions'=>['title'=>$deleteMsg, 'data-toggle'=>'tooltip'],
//    ],
//    ['class' => 'kartik\grid\CheckboxColumn']
];
//echo GridView::widget([
//    'dataProvider' => $dataProvider,
//    'filterModel' => $searchModel,
//    'columns' => $gridColumns,
//    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
//    'beforeHeader'=>[
//        [
//            'columns'=>[
//                ['content'=>'Header Before 1', 'options'=>['colspan'=>4, 'class'=>'text-center warning']],
//                ['content'=>'Header Before 2', 'options'=>['colspan'=>4, 'class'=>'text-center warning']],
//                ['content'=>'Header Before 3', 'options'=>['colspan'=>3, 'class'=>'text-center warning']],
//            ],
//            'options'=>['class'=>'skip-export'] // remove this row from export
//        ]
//    ],
//    'toolbar' =>  [
//        ['content'=>
//            Html::button('&lt;i class="glyphicon glyphicon-plus">&lt;/i>', ['type'=>'button', 'title'=>Yii::t('kvgrid', 'Add Book'), 'class'=>'btn btn-success', 'onclick'=>'alert("This will launch the book creation form.\n\nDisabled for this demo!");']) . ' '.
//            Html::a('&lt;i class="glyphicon glyphicon-repeat">&lt;/i>', ['grid-demo'], ['data-pjax'=>0, 'class' => 'btn btn-default', 'title'=>Yii::t('kvgrid', 'Reset Grid')])
//        ],
//        '{export}',
//        '{toggleData}'
//    ],
//    'pjax' => true,
//    'bordered' => true,
//    'striped' => false,
//    'condensed' => false,
//    'responsive' => true,
//    'hover' => true,
//    'floatHeader' => true,
//    'floatHeaderOptions' => ['scrollingTop' => $scrollingTop],
//    'showPageSummary' => true,
//    'panel' => [
//        'type' => GridView::TYPE_PRIMARY
//    ],
//]);


echo GridView::widget([
    'id' => 'kv-grid-demo',
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns,
    'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions' => ['class' => 'kartik-sheet-style'],
    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
    'pjax' => true, // pjax is set to always true for this demo
    // set your toolbar
    'toolbar' => [
        ['content' =>
            Html::a(Yii::t('app', '<i class="glyphicon glyphicon-plus"></i>'), ['create'], ['class' => 'btn btn-success'])
        ],
        '{export}',
        '{toggleData}',
    ],
    // set export properties
    'export' => [
        'fontAwesome' => true
    ],
    // parameters from the demo form
    'bordered' => false,
    'striped' => true,
    'condensed' => true,
    'responsive' => true,
    'hover' => true,
    'showPageSummary' => true,
    'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => true,
    ],
    'persistResize' => false,
]);

?>

