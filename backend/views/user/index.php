<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchUser */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>-->
<!--        --><?php  // echo Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
             'email:email',
//             'status',
             'balance',
             'age',

            [
                'attribute' => 'sex',
                'format' => 'image',
                'value' => function ($model) {
                    return  $model->sex ? '/images/male2.png' : '/images/female1.png';
                },
                'filter' => Html::activeDropDownList($searchModel, 'sex', [0 => 'Female', 1 => 'male'], [
                    'prompt' => '',
                    'class' => 'form-control'
                ])
            ],

            // 'profile_img',
//             'role',

            [
                'attribute' => 'activated',
                'value' => function ($model) {
                    return   $model->activated ? 'Да' : 'Нет';
                },
                'filter' => Html::activeDropDownList($searchModel, 'activated', [0 => 'Нет', 1 => 'Да'], [
                    'prompt' => '',
                    'class' => 'form-control'
                ])
            ],

            'created_at:datetime',
            'updated_at:datetime',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
