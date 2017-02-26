<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_balance_come".
 *
 * @property integer $id
 * @property integer $user_id
 * @property double $amount
 * @property string $timestamp
 * @property double $balance_before
 * @property double $balance_after
 * @property string $transaction_id
 *
 * @property User $user
 */
class UserBalanceCome extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_balance_come';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'amount', 'timestamp', 'balance_before', 'balance_after'], 'required'],
            [['user_id'], 'integer'],
            [['amount', 'balance_before', 'balance_after'], 'number'],
            [['timestamp'], 'safe'],
            [['transaction_id'], 'string', 'max' => 255],
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
            'transaction_id' => 'Transaction ID',
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
