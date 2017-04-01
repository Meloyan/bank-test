<?php

namespace frontend\modules\test\controllers;

use common\models\Sessions;
use yii\web\Controller;

class TestingController extends Controller
{
    public function actionIndex($id)
    {

        (new Sessions())->createNewSession($id);

        return $this->render('index');
    }
}