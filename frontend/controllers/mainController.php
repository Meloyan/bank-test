<?php
namespace frontend\controllers;


use common\models\User;
use frontend\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
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

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }


    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


    /**
     * @return \yii\web\Response
     */
    public function actionConfirmRegister()
    {
        $token = urlencode(Yii::$app->request->get()[1]['token']);

        $model = User::find()->where(['auth_key' => $token])->one();

        if ($model->activated == 1) {
            \Yii::$app->session->setFlash('confirm_through_email', 'вы уже активировали ваш аккаунт');
            return $this->redirect('login');
        }

        $model->activated = User::STATUC_ACTIV_CONFIRM;
        if ($model->save(false)) {

        }
        return $this->redirect('login');
    }
}
