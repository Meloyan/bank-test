<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property integer $id
 * @property integer $all_qusetions_count
 * @property integer $session_time
 * @property integer $category_id
 * @property string $created_at
 * @property string $update_at
 * @property integer $min_true_questions_count
 * @property integer $session_questions_count
 * @property double $price
 *
 * @property Category $category
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['all_qusetions_count'], 'required'],
            [['all_qusetions_count', 'session_time', 'category_id', 'min_true_questions_count', 'session_questions_count'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
            [['price'], 'number'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'all_qusetions_count' => 'All Qusetions Count',
            'session_time' => 'Session Time',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
            'min_true_questions_count' => 'Min True Questions Count',
            'session_questions_count' => 'Session Questions Count',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
