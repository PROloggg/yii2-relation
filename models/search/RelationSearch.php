<?php

namespace prologgg\relation\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use prologgg\relation\models\Relation;

/**
 * RelationSearch represents the model behind the search form of `prologgg\relation\models\Relation`.
 */
class RelationSearch extends Relation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'model_id', 'model_relation_id'], 'integer'],
            [['model', 'relation_model'], 'safe'],
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
        $query = Relation::find();

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
            'model_id' => $this->model_id,
            'model_relation_id' => $this->model_relation_id,
        ]);

        $query->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'relation_model', $this->relation_model]);

        return $dataProvider;
    }
}
