<?php

namespace frontend\modules\test\controllers;

use common\models\Profession;
use common\models\QusetionAnswer;
use common\models\Sessions;
use Yii;
use yii\web\Controller;

class TestingController extends Controller
{
    /**
     * @param $id
     * @return mixed
     */
    public function actionIndex($id)
    {


        if (Yii::$app->session->has('session_id')) {

            $session = Sessions::findOne(Yii::$app->session->get('session_id'));

        } else {
            $session = new Sessions();
            $questions = (Profession::findOne($id))->getQuestions();

            $session->newSessions($id);

            Yii::$app->session->set('session_id', $id);

            foreach ($questions as $question) {
                (new QusetionAnswer())->saveQuestionAnswer($session->id, $question->id);
            }

        }

        return $this->render('index', [
            'session' => $session
        ]);
    }

}