<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AdditonalStats;

/**
 * SearchAdditionalStats represents the model behind the search form about `app\models\AdditonalStats`.
 */
class SearchAdditionalStats extends AdditonalStats
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'putts', 'greens_in_regulation', 'fairways_hit', 'penalty_strokes'], 'integer'],
            [['additional_notes'], 'safe'],
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
        $query = AdditonalStats::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'putts' => $this->putts,
            'greens_in_regulation' => $this->greens_in_regulation,
            'fairways_hit' => $this->fairways_hit,
            'penalty_strokes' => $this->penalty_strokes,
        ]);

        $query->andFilterWhere(['like', 'additional_notes', $this->additional_notes]);

        return $dataProvider;
    }
}
