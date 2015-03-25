<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tournament_players".
 *
 * @property integer $id
 * @property integer $tournament_id
 * @property integer $player_season_id
 * @property integer $score_front
 * @property integer $score_back
 * @property integer $score_total
 * @property integer $disqualified
 * @property string $round_notes
 * @property integer $additional_stats_id
 *
 * @property TournamentInfo $tournament
 * @property PlayerSeason $playerSeason
 * @property AdditonalStats $additionalStats
 */
class TournamentPlayers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tournament_players';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tournament_id', 'player_season_id'], 'required'],
            [['tournament_id', 'player_season_id', 'score_front', 'score_back', 'score_total', 'disqualified', 'additional_stats_id'], 'integer'],
            [['round_notes'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tournament_id' => 'Tournament',
            'player_season_id' => 'Player Season',
            'score_front' => 'Score Front',
            'score_back' => 'Score Back',
            'score_total' => 'Score Total',
            'disqualified' => 'Disqualified',
            'round_notes' => 'Round Notes',
            'additional_stats_id' => 'Additional Stats',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournament()
    {
		//code added to allow a dropdown menu

		$models = TournamentInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerSeason()
    {
		//code added to allow a dropdown menu

		$models = PlayerSeason::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'id');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdditionalStats()
    {
		//code added to allow a dropdown menu

		$models = AdditonalStats::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'id');
    }
}
