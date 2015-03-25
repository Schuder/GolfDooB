<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LeagueTournament;

/**
 * SearchLeagueTournament represents the model behind the search form about `app\models\LeagueTournament`.
 */
class SearchLeagueTournament extends LeagueTournament
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tournament_id', 'league_season_id'], 'integer'],
            [['league_tournament_notes'], 'safe'],
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
        $query = LeagueTournament::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tournament_id' => $this->tournament_id,
            'league_season_id' => $this->league_season_id,
        ]);

        $query->andFilterWhere(['like', 'league_tournament_notes', $this->league_tournament_notes]);

        return $dataProvider;
    }
}
