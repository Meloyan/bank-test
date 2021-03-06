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
class QuestionAnswer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question_answer';
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

    /**
     * @param $questionId
     * @param $answer
     * @param $sessionId
     */
    public function updateAnswer($questionId, $answer,$sessionId)
    {
        $model = QuestionAnswer::findOne(['session_id' => $sessionId, 'question_id' => $questionId]);

        $model->answer_id = $answer;
        $model->save(false);
    }

    /**
     * ------------------------------------
     * Get count of  answered question count
     * ------------------------------------
     *
     * @param $sessionId
     * @return int|string
     */
    public static function getAnsweredQuestionCount($sessionId)
    {
        return self::find()->where(['session_id' => $sessionId])->andWhere(['is not','answer_id',null])->count();
    }

    /**
     * ------------------------------------
     * Get count of  unanswered question count
     * ------------------------------------
     *
     * @param $sessionId
     * @return int|string
     */
    public static function getUnAnsweredQuestionCount($sessionId)
    {
        return self::find()->where(['session_id' => $sessionId])->andWhere(['is','answer_id',null])->count();
    }

    /**
     * @param bool $flag
     * @return int
     */
    public static function getAnswerList($flag = true)
    {

        $sessionId = Yii::$app->session->get('session_id');
        $fl_true = $flag ? 1 : 0;

        $count = self::find()
            ->select('question_answer.`answer_id`')
            ->leftJoin('answers', 'answers.id = question_answer.answer_id')
            ->where(['question_answer.session_id' => $sessionId])
            ->andWhere(['answers.fl_true' => $fl_true])
            ->count();

        //
        return  (int)$count;
    }
}
