<?php

namespace common\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "profession".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $profession_setting_id
 *
 * @property ProfessionSettings $professionSetting
 */
class Profession extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
//        return [
//            [
//                'class' => TimestampBehavior::className(),
//                'createdAtAttribute' => 'created_at',
//                'updatedAtAttribute' => 'updated_at',
//                'value' => new Expression('NOW()'),
//            ],
//        ];

        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profession';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'profession_setting_id'], 'required'],
            [['created_at', 'updated_at', 'profession_setting_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
            [['profession_setting_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProfessionSettings::className(), 'targetAttribute' => ['profession_setting_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'profession_setting_id' => 'Profession Setting',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfessionSetting()
    {
        return $this->hasOne(ProfessionSettings::className(), ['id' => 'profession_setting_id']);
    }
}
