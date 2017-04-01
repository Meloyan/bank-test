<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "sessions".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $category_id
 * @property integer $started_at
 * @property integer $finished_at
 * @property integer $questions_count
 *
 * @property QusetionAnswer[] $qusetionAnswers
 * @property User $user
 * @property Category $category
 */
class Sessions extends ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sessions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'category_id', 'started_at', 'finished_at', 'questions_count'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
            'started_at' => 'Started At',
            'finished_at' => 'Finished At',
            'questions_count' => 'Questions Count',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQusetionAnswers()
    {
        return $this->hasMany(QusetionAnswer::className(), ['session_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @param $professionId
     */
    public function createNewSession($professionId)
    {
        $this->user_id = Yii::$app->user->id;
        $this->profession_id = $professionId;
        $this->save(false);
    }
}
