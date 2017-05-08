<?php
namespace frontend\modules\test\controllers;

use common\components\DataHelper;
use common\models\QuestionAnswer;
use common\models\Sessions;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class ApiController extends Controller
{

    /**
     *
     */
    public function actionCreate()
    {
        $data = Yii::$app->request->post('data');
        $sessionId = Yii::$app->session->get('session_id');

        (new QuestionAnswer())->updateAnswer($data['questionId'], $data['answerId'], $sessionId);
    }

    /**
     * @return array
     */
    public function actionSessionInfo()
    {
        $sessionId = Yii::$app->request->post('sessionId');
        Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'answered_count' => QuestionAnswer::getAnsweredQuestionCount($sessionId),
            'unanswered_count' => QuestionAnswer::getUnAnsweredQuestionCount($sessionId),
            'rest_of_time' => [
                'hours' => gmdate("H", Sessions::getRestOfTime($sessionId)),
                'minutes' => gmdate("i", Sessions::getRestOfTime($sessionId)),
                'seconds' => gmdate("s", Sessions::getRestOfTime($sessionId))
            ]
        ];
    }
}