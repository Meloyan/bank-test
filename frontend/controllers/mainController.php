<?php
namespace frontend\controllers;



use common\models\User;
use frontend\models\LoginForm;
use frontend\models\SignupForm;
use Yii;
use yii\web\Controller;


/**
 * Site controller
 */
class MainController extends Controller
{

    public $layout = 'site';

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * @return  mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            return $this->redirect(Yii::$app->urlManager->createUrl(['cabinet/index']));
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * @return mixed
     */
    public function actionRegister()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->signup()) {
                \Yii::$app->session->setFlash('confirm_through_email', 'вы прошли регистрацию пожалуйста подтвердите ваш емайл');
                return $this->redirect('login');
            }
        }

        return $this->render('register', [
            'model' => $model
        ]);
    }


    public function actionConfirmRegister()
    {
        $token = urlencode(Yii::$app->request->get()[1]['token']);

        $model = User::find()->where(['auth_key' => $token])->one();

        if ($model->activated == 1) {
            \Yii::$app->session->setFlash('confirm_through_email', 'вы уже активировали ваш аккаунт');
            return $this->redirect('login');
        }

        $model->activated = User::STATUC_ACTIV_CONFIRM;
        if($model->save(false)){

        }
        return $this->redirect('login');
    }
}
