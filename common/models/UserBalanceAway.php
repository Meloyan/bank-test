<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_balance_away".
 *
 * @property integer $id
 * @property integer $user_id
 * @property double $amount
 * @property string $timestamp
 * @property double $balance_before
 * @property double $balance_after
 * @property integer $type
 *
 * @property User $user
 */
class UserBalanceAway extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_balance_away';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'amount', 'timestamp', 'balance_before', 'balance_after'], 'required'],
            [['user_id', 'type'], 'integer'],
            [['amount', 'balance_before', 'balance_after'], 'number'],
            [['timestamp'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'amount' => 'Amount',
            'timestamp' => 'Timestamp',
            'balance_before' => 'Balance Before',
            'balance_after' => 'Balance After',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
