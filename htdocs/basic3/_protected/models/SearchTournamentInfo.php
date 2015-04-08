<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TournamentInfo;

/**
 * SearchTournamentInfo represents the model behind the search form about `app\models\TournamentInfo`.
 */
class SearchTournamentInfo extends TournamentInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'host_team_id', 'course_id', 'tee_box_id', 'season_id', 'format_id', 'level_id', 'players_per_team'], 'integer'],
            [['name', 'date', 'start_time', 'coaches_meeting', 'fee_payable_to', 'tournament_notes'], 'safe'],
            [['fee'], 'number'],
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
        $query = TournamentInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'host_team_id' => $this->host_team_id,
            'course_id' => $this->course_id,
            'tee_box_id' => $this->tee_box_id,
            'season_id' => $this->season_id,
            'date' => $this->date,
            'start_time' => $this->start_time,
            'coaches_meeting' => $this->coaches_meeting,
            'fee' => $this->fee,
            'format_id' => $this->format_id,
            'level_id' => $this->level_id,
            'players_per_team' => $this->players_per_team,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'fee_payable_to', $this->fee_payable_to])
            ->andFilterWhere(['like', 'tournament_notes', $this->tournament_notes]);

        return $dataProvider;
    }
}
