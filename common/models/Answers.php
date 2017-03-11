<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property integer $id
 * @property integer $question_id
 * @property string $body
 * @property integer $fl_true
 * @property string $created_at
 * @property string $update_at
 *
 * @property Questions $question
 * @property QusetionAnswer[] $qusetionAnswers
 */
class Answers extends \yii\db\ActiveRecord
{

    public static $TRUE_FALSE = [

        0 => 'Нет',
        1 => 'Да'

    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id', 'fl_true'], 'integer'],
            [['created_at', 'update_at'], 'safe'],
            [['body'], 'string', 'max' => 255],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Questions::className(), 'targetAttribute' => ['question_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'question_id' => 'Question ID',
            'body' => 'Body',
            'fl_true' => 'True',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(Questions::className(), ['id' => 'question_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQusetionAnswers()
    {
        return $this->hasMany(QusetionAnswer::className(), ['answer_id' => 'id']);
    }
}
