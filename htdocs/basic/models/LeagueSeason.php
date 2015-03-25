<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "league_season".
 *
 * @property integer $id
 * @property integer $league_id
 * @property integer $season_id
 * @property integer $number_of_teams
 *
 * @property Season $season
 * @property LeagueInfo $league
 * @property LeagueTeams[] $leagueTeams
 * @property LeagueTournament[] $leagueTournaments
 * @property TeamSeason[] $teamSeasons
 */
class LeagueSeason extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'league_season';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['league_id', 'season_id'], 'required'],
            [['league_id', 'season_id', 'number_of_teams'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'league_id' => 'League ID',
            'season_id' => 'Season ID',
            'number_of_teams' => 'Number Of Teams',
        ];
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
    public function getLeagueInfo()
    {
 	$models = LeagueInfo::find()->asArray()->all();
        return $this->hasOne(LeagueInfo::className(), ['id' => 'league_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueTeams()
    {
        return $this->hasMany(LeagueTeams::className(), ['league_season_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueTournaments()
    {
        return $this->hasMany(LeagueTournament::className(), ['league_season_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSeasons()
    {
        return $this->hasMany(TeamSeason::className(), ['league_season_id' => 'id']);
    }
}
