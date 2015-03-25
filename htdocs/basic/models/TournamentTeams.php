<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tournament_teams".
 *
 * @property integer $id
 * @property integer $tournament_id
 * @property integer $team_season_id
 *
 * @property TournamentInfo $tournament
 * @property TeamSeason $teamSeason
 */
class TournamentTeams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tournament_teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tournament_id', 'team_season_id'], 'required'],
            [['tournament_id', 'team_season_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tournament_id' => 'Tournament ID',
            'team_season_id' => 'Team Season ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournament()
    {
		//code added to allow a dropdown menu

		$models = TournamentInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'tournament_id');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSeason()
    {
		//code added to allow a dropdown menu

		$models = TeamSeason::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'team_season_id');
    }
}
