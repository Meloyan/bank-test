<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "qusetion_answer".
 *
 * @property integer $id
 * @property integer $session_id
 * @property integer $question_id
 * @property integer $answer_id
 *
 * @property Questions $question
 * @property Answers $answer
 * @property Sessions $session
 */
class QusetionAnswer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qusetion_answer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['session_id', 'question_id', 'answer_id'], 'integer'],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => Questions::className(), 'targetAttribute' => ['question_id' => 'id']],
            [['answer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Answers::className(), 'targetAttribute' => ['answer_id' => 'id']],
            [['session_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sessions::className(), 'targetAttribute' => ['session_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'session_id' => 'Session ID',
            'question_id' => 'Question ID',
            'answer_id' => 'Answer ID',
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
    public function getAnswer()
    {
        return $this->hasOne(Answers::className(), ['id' => 'answer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession()
    {
        return $this->hasOne(Sessions::className(), ['id' => 'session_id']);
    }


    /**
     * @param $sessionId
     * @param $questionId
     */
    public function saveQuestionAnswer($sessionId, $questionId)
    {
        $this->session_id = $sessionId;
        $this->question_id = $questionId;
        $this->save(false);
    }
}
