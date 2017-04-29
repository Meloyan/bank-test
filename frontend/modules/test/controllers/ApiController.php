<?php
namespace frontend\modules\test\controllers;

use common\models\QusetionAnswer;
use Yii;
use yii\web\Controller;

class ApiController extends Controller
{

    /**
     *
     */
    public function actionCreate()
    {
        $data = Yii::$app->request->post('data');
        $sessionId = Yii::$app->session->get('session_id');

        (new QusetionAnswer())->updateAnswer($data['questionId'], $data['answerId'], $sessionId);
    }
}