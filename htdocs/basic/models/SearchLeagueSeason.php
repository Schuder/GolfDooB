<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LeagueSeason;

/**
 * SearchLeagueSeason represents the model behind the search form about `app\models\LeagueSeason`.
 */
class SearchLeagueSeason extends LeagueSeason
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'league_id', 'season_id', 'number_of_teams'], 'integer'],
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
        $query = LeagueSeason::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'league_id' => $this->league_id,
            'season_id' => $this->season_id,
            'number_of_teams' => $this->number_of_teams,
        ]);

        return $dataProvider;
    }
}
