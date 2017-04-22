<?php

namespace frontend\modules\test\controllers;

use common\models\SearchProfession;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `test` module
 */
class DefaultController extends Controller
{

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchProfession();
        $dataProvider =$searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
}
