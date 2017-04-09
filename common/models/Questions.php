<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

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

    public static $default = [

        0 => 'Нет',
        1 => 'Да'

    ];

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
        return 'questions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'body'], 'required'],
            [['category_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'body'], 'string', 'max' => 255],
            ['fl_default', 'boolean'],
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
            'category_id' => 'Category',
            'title' => 'Title',
            'body' => 'Body',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'fl_default' => 'Default'
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
    public function getQuestionAnswers()
    {
        return $this->hasMany(QusetionAnswer::className(), ['question_id' => 'id']);
    }

    /**
     * @param $category_id
     * @param $limit
     * @return array|\yii\db\ActiveRecord[]
     */
    public  static function getRandomQuestionsByCategory($category_id, $limit)
    {
       return  self::find()->where(['category_id' => $category_id])->orderBy(new Expression('rand()'))->limit($limit)->All();
    }

}