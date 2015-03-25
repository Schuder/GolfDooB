<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TournamentPlayers;

/**
 * SearchTournamentPlayers represents the model behind the search form about `app\models\TournamentPlayers`.
 */
class SearchTournamentPlayers extends TournamentPlayers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tournament_id', 'player_season_id', 'score_front', 'score_back', 'score_total', 'disqualified', 'additional_stats_id'], 'integer'],
            [['round_notes'], 'safe'],
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
        $query = TournamentPlayers::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tournament_id' => $this->tournament_id,
            'player_season_id' => $this->player_season_id,
            'score_front' => $this->score_front,
            'score_back' => $this->score_back,
            'score_total' => $this->score_total,
            'disqualified' => $this->disqualified,
            'additional_stats_id' => $this->additional_stats_id,
        ]);

        $query->andFilterWhere(['like', 'round_notes', $this->round_notes]);

        return $dataProvider;
    }
}
