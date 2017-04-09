<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "profession".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $profession_setting_id
 * @property double $price_for_test
 * @property integer $type
 *
 * @property ProfessionType $type0
 * @property ProfessionSettings $professionSetting
 */
class Profession extends \yii\db\ActiveRecord
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
        return 'profession';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'profession_setting_id', 'price_for_test', 'type'], 'required'],
            [['created_at', 'updated_at', 'profession_setting_id', 'type'], 'integer'],
            [['price_for_test'], 'number'],
            [['name', 'description'], 'string', 'max' => 255],
            [['type'], 'exist', 'skipOnError' => true, 'targetClass' => ProfessionType::className(), 'targetAttribute' => ['type' => 'id']],
            [['profession_setting_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProfessionSettings::className(), 'targetAttribute' => ['profession_setting_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'profession_setting_id' => Yii::t('app', 'Profession Setting ID'),
            'price_for_test' => Yii::t('app', 'Price For Test'),
            'type' => Yii::t('app', 'Type'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType_()
    {
        return $this->hasOne(ProfessionType::className(), ['id' => 'type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfessionSetting()
    {
        return $this->hasOne(ProfessionSettings::className(), ['id' => 'profession_setting_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRules()
    {
        return $this->hasMany(Rule::className(), ['profession_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSessions()
    {
        return $this->hasMany(Sessions::className(), ['profession_id' => 'id']);
    }


    public function getQuestions()
    {
        foreach ($this->rules as $rule) {

            $questions = Questions::getRandomQuestionsByCategory($rule->category_id, $rule->count);
        }

        return $questions;
    }


}
