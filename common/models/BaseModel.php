<?php

namespace common\models;


use yii\db\ActiveRecord;

class BaseModel extends ActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return new $className;
    }
}