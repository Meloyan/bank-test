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
     * Renders the index view for the module
     */
    public function actionIndex()
    {
        return $this->redirect('category-one');
    }

    /**
     *
     */
    public function actionCategoryOne()
    {
        return $this->category();
    }

    /**
     *
     */
    public function actionCategoryTwo()
    {
        return $this->category();
    }

    /**
     *
     */
    public function actionCategoryThree()
    {
        return $this->category();
    }


    /**
     * @return mixed
     */
    public function category()
    {
        switch ($this->action->id){
            case 'category-two':
                $type = 2;
                break;
            case 'category-three':
                $type = 3;
                break;
            default:
                $type = 1;
                break;
        }

        $searchModel = new SearchProfession();
        $dataProvider = (new SearchProfession())->search(Yii::$app->request->queryParams, $type);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
}
