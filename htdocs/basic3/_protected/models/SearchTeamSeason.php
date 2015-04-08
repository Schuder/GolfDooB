<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TeamSeason;

/**
 * SearchTeamSeason represents the model behind the search form about `app\models\TeamSeason`.
 */
class SearchTeamSeason extends TeamSeason
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'team_info_id', 'head_coach_id', 'ast_coach_id_1', 'ast_coach_id_2', 'league_season_id', 'season_id'], 'integer'],
            [['team_notes'], 'safe'],
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
        $query = TeamSeason::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'team_info_id' => $this->team_info_id,
            'head_coach_id' => $this->head_coach_id,
            'ast_coach_id_1' => $this->ast_coach_id_1,
            'ast_coach_id_2' => $this->ast_coach_id_2,
            'league_season_id' => $this->league_season_id,
            'season_id' => $this->season_id,
        ]);

        $query->andFilterWhere(['like', 'team_notes', $this->team_notes]);

        return $dataProvider;
    }
}
