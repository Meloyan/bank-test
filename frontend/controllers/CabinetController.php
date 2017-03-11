<?php
namespace frontend\controllers;


use yii\web\Controller;

class CabinetController extends Controller
{
    public $layout = 'site';

    public function actionIndex()
    {

        return $this->render('index');
    }
}