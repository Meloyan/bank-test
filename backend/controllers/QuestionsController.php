<?php

namespace backend\controllers;

use common\models\Answers;
use Yii;
use common\models\Questions;
use common\models\QuestionsSearch;
use yii\base\Model;
use yii\web\NotFoundHttpException;


/**
 * QuestionsController implements the CRUD actions for Questions model.
 */
class QuestionsController extends BaseController
{

    /**
     * Lists all Questions models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new QuestionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Questions model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Questions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Questions();

        $Answers = Yii::$app->request->post('Answers');

        if ( $model->load(Yii::$app->request->post() ) && $model->save()) {


            foreach($Answers['fl_true'] as $key => $value){

                $answerModel = new Answers();

                $answerModel->question_id = $model->id;
                $answerModel->body = $Answers['body'][$key];
                $answerModel->fl_true = $value;
                $answerModel->save();

            }

            return $this->redirect('index');

        } else {

            return $this->render('create', [

                'model' => $model

            ]);
        }
    }

    /**
     * Updates an existing Questions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $Answers = Yii::$app->request->post('Answers');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            foreach($Answers['id'] as $key => $value){

                $answerModel =  Answers::findOne($value);
                $answerModel->body = $Answers['body'][$key];
                $answerModel->save();

            }

            return $this->redirect('index');

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Questions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Questions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Questions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Questions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
