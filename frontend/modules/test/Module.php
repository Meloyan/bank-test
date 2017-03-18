<?php

namespace frontend\modules\test;

/**
 * test module definition class
 */
class Module extends \yii\base\Module
{

    public $layout = '/site';

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'frontend\modules\test\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
