<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LeagueTeams;

/**
 * SearchLeagueTeams represents the model behind the search form about `app\models\LeagueTeams`.
 */
class SearchLeagueTeams extends LeagueTeams
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'league_season_id', 'team_season_id'], 'integer'],
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
        $query = LeagueTeams::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'league_season_id' => $this->league_season_id,
            'team_season_id' => $this->team_season_id,
        ]);

        return $dataProvider;
    }
}
