<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Meals;

/**
 * MealsSearch represents the model behind the search form of `backend\models\Meals`.
 */
class MealsSearch extends Meals
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'narxi'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'how_uz', 'how_ru', 'how_en', 'rasmi'], 'safe'],
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
        $query = Meals::find();

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
            'narxi' => $this->narxi,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'how_uz', $this->how_uz])
            ->andFilterWhere(['like', 'how_ru', $this->how_ru])
            ->andFilterWhere(['like', 'how_en', $this->how_en])
            ->andFilterWhere(['like', 'rasmi', $this->rasmi]);

        return $dataProvider;
    }
}
