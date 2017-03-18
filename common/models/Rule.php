<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "rule".
 *
 * @property integer $id
 * @property integer $profession_id
 * @property integer $category_id
 * @property integer $count
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Profession $profession
 * @property Category $category
 */
class Rule extends \yii\db\ActiveRecord
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
        return 'rule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profession_id', 'category_id', 'count'], 'required'],
            [['profession_id', 'category_id', 'count', 'created_at', 'updated_at'], 'integer'],
            [['profession_id', 'category_id'], 'unique', 'targetAttribute' => ['profession_id', 'category_id'], 'message' => 'The combination of Profession ID and Category ID has already been taken.'],
            [['profession_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profession::className(), 'targetAttribute' => ['profession_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'profession_id' => Yii::t('app', 'Profession'),
            'category_id' => Yii::t('app', 'Category'),
            'count' => Yii::t('app', 'Count'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfession()
    {
        return $this->hasOne(Profession::className(), ['id' => 'profession_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
