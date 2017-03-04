<?php

namespace common\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "profession_settings".
 *
 * @property integer $id
 * @property integer $session_time
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $min_true_questions_count
 * @property integer $session_questions_count
 *
 * @property Profession[] $professions
 */
class ProfessionSettings extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profession_settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['session_time', 'created_at', 'updated_at', 'min_true_questions_count', 'session_questions_count'], 'integer'],
            [['session_time', 'min_true_questions_count', 'session_questions_count', 'name'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'session_time' => 'Session Time',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'min_true_questions_count' => 'Min True Questions Count',
            'session_questions_count' => 'Session Questions Count',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfessions()
    {
        return $this->hasMany(Profession::className(), ['profession_setting_id' => 'id']);
    }
}
