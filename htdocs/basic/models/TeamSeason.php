<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "team_season".
 *
 * @property integer $id
 * @property integer $team_info_id
 * @property integer $head_coach_id
 * @property integer $ast_coach_id_1
 * @property integer $ast_coach_id_2
 * @property string $team_notes
 * @property integer $league_season_id
 * @property integer $season_id
 *
 * @property LeagueTeams[] $leagueTeams
 * @property Season $season
 * @property TeamInfo $teamInfo
 * @property CoachInfo $headCoach
 * @property CoachInfo $astCoachId1
 * @property CoachInfo $astCoachId2
 * @property LeagueSeason $leagueSeason
 * @property TournamentInfo[] $tournamentInfos
 * @property TournamentTeams[] $tournamentTeams
 */
class TeamSeason extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team_season';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_info_id', 'season_id'], 'required'],
            [['team_info_id', 'head_coach_id', 'ast_coach_id_1', 'ast_coach_id_2', 'league_season_id', 'season_id'], 'integer'],
            [['team_notes'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'team_info_id' => 'Team Info',
            'head_coach_id' => 'Head Coach',
            'ast_coach_id_1' => 'Ast Coach',
            'ast_coach_id_2' => 'Ast Coach',
            'team_notes' => 'Team Notes',
            'league_season_id' => 'League Season',
            'season_id' => 'Season',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueTeams()
    {
        return $this->hasMany(LeagueTeams::className(), ['team_season_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeason()
    {
		return $this->hasOne(Season::className(), ['id' => 'season_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamInfo()
    {
		return $this->hasOne(TeamInfo::className(), ['id' => 'team_info_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHeadCoach()
    {
        //code added to allow a dropdown menu
		
		$models = CoachInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', function($value,$_){return "{$value["first_name"]} {$value["last_name"]}";} );
			
        //return $this->hasOne(CoachInfo::className(), ['id' => 'head_coach_id']); //old, default code
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAstCoachId1()
    {
		//code added to allow a dropdown menu

		$models = CoachInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'ast_coach_id_1');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAstCoachId2()
    {
		//code added to allow a dropdown menu

		$models = CoachInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'ast_coach_id_2');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueSeason()
    {
		
		return $this->hasOne(TeamInfo::className(), ['id' => 'league_season_id']);
		//code added to allow a dropdown menu

		$models = LeagueSeason::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'id');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentInfos()
    {
        return $this->hasMany(TournamentInfo::className(), ['host_team_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentTeams()
    {
        return $this->hasMany(TournamentTeams::className(), ['team_season_id' => 'id']);
    }
}
