<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CrimeDetail;

/**
 * CrimeDetailSearch represents the model behind the search form of `app\models\CrimeDetail`.
 */
class CrimeDetailSearch extends CrimeDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['crime_type', 'species', 'tanggal', 'link', 'location'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = CrimeDetail::find();

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
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'crime_type', $this->crime_type])
            ->andFilterWhere(['like', 'species', $this->species])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'location', $this->location]);

        return $dataProvider;
    }
}
