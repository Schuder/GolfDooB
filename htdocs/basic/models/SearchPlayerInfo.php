<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PlayerInfo;

/**
 * SearchPlayerInfo represents the model behind the search form about `app\models\PlayerInfo`.
 */
class SearchPlayerInfo extends PlayerInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['first_name', 'last_name', 'email', 'cell_number', 'player_notes', 'parent_email1', 'parent_email2', 'home_phone_number'], 'safe'],
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
        $query = PlayerInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cell_number', $this->cell_number])
            ->andFilterWhere(['like', 'player_notes', $this->player_notes])
            ->andFilterWhere(['like', 'parent_email1', $this->parent_email1])
            ->andFilterWhere(['like', 'parent_email2', $this->parent_email2])
            ->andFilterWhere(['like', 'home_phone_number', $this->home_phone_number]);

        return $dataProvider;
    }
}
