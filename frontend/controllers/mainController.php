<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Site controller
 */
class MainController extends Controller
{

    public $layout = 'site';

  public function actionIndex()
  {
      return $this->render('index');
  }
}
