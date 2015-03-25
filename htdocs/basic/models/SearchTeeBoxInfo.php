<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TeeBoxInfo;

/**
 * SearchTeeBoxInfo represents the model behind the search form about `app\models\TeeBoxInfo`.
 */
class SearchTeeBoxInfo extends TeeBoxInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'course_id', 'par'], 'integer'],
            [['color', 'tee_box_notes'], 'safe'],
            [['slope', 'rating'], 'number'],
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
        $query = TeeBoxInfo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'course_id' => $this->course_id,
            'slope' => $this->slope,
            'rating' => $this->rating,
            'par' => $this->par,
        ]);

        $query->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'tee_box_notes', $this->tee_box_notes]);

        return $dataProvider;
    }
}
