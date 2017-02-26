<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "questions".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $body
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Answers[] $answers
 * @property Category $category
 * @property QusetionAnswer[] $qusetionAnswers
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'body'], 'string', 'max' => 255],
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
            'category_id' => 'Category ID',
            'title' => 'Title',
            'body' => 'Body',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnswers()
    {
        return $this->hasMany(Answers::className(), ['question_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQusetionAnswers()
    {
        return $this->hasMany(QusetionAnswer::className(), ['question_id' => 'id']);
    }
}
