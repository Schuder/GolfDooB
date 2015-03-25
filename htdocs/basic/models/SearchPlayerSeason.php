<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PlayerSeason;

/**
 * SearchPlayerSeason represents the model behind the search form about `app\models\PlayerSeason`.
 */
class SearchPlayerSeason extends PlayerSeason
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'player_info_id', 'team_season_id', 'year_in_school'], 'integer'],
            [['player_season_notes'], 'safe'],
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
        $query = PlayerSeason::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'player_info_id' => $this->player_info_id,
            'team_season_id' => $this->team_season_id,
            'year_in_school' => $this->year_in_school,
        ]);

        $query->andFilterWhere(['like', 'player_season_notes', $this->player_season_notes]);

        return $dataProvider;
    }
}
