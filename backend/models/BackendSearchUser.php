<?php
/**
 * Created by PhpStorm.
 * User: key
 * Date: 19.03.2017
 * Time: 12:59
 */

namespace backend\models;


use common\models\SearchUser;
use common\models\User;
use yii\data\ActiveDataProvider;

class BackendSearchUser extends SearchUser
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status',  'age', 'sex', 'activated'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'password_reset_token', 'email', 'profile_img'], 'safe'],
            [['balance'], 'number'],
        ];
    }

    public function search($params)
    {
        $query = User::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'balance' => $this->balance,
            'age' => $this->age,
            'sex' => $this->sex,
            'role' => 0,
            'activated' => $this->activated,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'profile_img', $this->profile_img]);

        return $dataProvider;
    }

}