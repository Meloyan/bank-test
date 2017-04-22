<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SearchProfession represents the model behind the search form about `common\models\Profession`.
 */
class SearchProfession extends Profession
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'profession_setting_id'], 'integer'],
            [['name', 'description', 'type'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Profession::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'profession_setting_id' => $this->profession_setting_id,
        ]);
        if ($this->type) {
            $query->andFilterWhere([
                'type' => $this->type,
            ]);
        }
        if($this->name){
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description]);
        }

        return $dataProvider;
    }
}
