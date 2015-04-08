<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tournament_info".
 *
 * @property integer $id
 * @property integer $host_team_id
 * @property integer $course_id
 * @property integer $tee_box_id
 * @property integer $season_id
 * @property string $name
 * @property string $date
 * @property string $start_time
 * @property string $coaches_meeting
 * @property double $fee
 * @property string $fee_payable_to
 * @property integer $format_id
 * @property integer $level_id
 * @property integer $players_per_team
 * @property string $tournament_notes
 *
 * @property LeagueTournament[] $leagueTournaments
 * @property TeamSeason $hostTeam
 * @property CourseInfo $course
 * @property TeeBoxInfo $teeBox
 * @property Season $season
 * @property FormatInfo $format
 * @property LevelInfo $level
 * @property TournamentPlayers[] $tournamentPlayers
 * @property TournamentTeams[] $tournamentTeams
 */
class TournamentInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tournament_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['host_team_id', 'course_id', 'season_id', 'name', 'date', 'start_time', 'coaches_meeting', 'players_per_team'], 'required'],
            [['host_team_id', 'course_id', 'tee_box_id', 'season_id', 'format_id', 'level_id', 'players_per_team'], 'integer'],
            [['date', 'start_time', 'coaches_meeting'], 'safe'],
            [['fee'], 'number'],
            [['tournament_notes'], 'string'],
            [['name', 'fee_payable_to'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'host_team_id' => 'Host Team',
            'course_id' => 'Course',
            'tee_box_id' => 'Tee Box',
            'season_id' => 'Season',
            'name' => 'Name',
            'date' => 'Date',
            'start_time' => 'Start Time',
            'coaches_meeting' => 'Coaches Meeting',
            'fee' => 'Fee',
            'fee_payable_to' => 'Fee Payable To',
            'format_id' => 'Format',
            'level_id' => 'Level',
            'players_per_team' => 'Players Per Team',
            'tournament_notes' => 'Tournament Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueTournaments()
    {
        return $this->hasMany(LeagueTournament::className(), ['tournament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHostTeam()
    {
		//code added to allow a dropdown menu

		return $this->hasOne(TeamSeason::className(), ['team_season_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
		//code added to allow a dropdown menu

		$models = CourseInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeeBox()
    {
		//code added to allow a dropdown menu

		$models = TeeBoxInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'id');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeason()
    {
		//code added to allow a dropdown menu

		$models = Season::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormat()
    {
		//code added to allow a dropdown menu

		$models = FormatInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'format');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevel()
    {
		//code added to allow a dropdown menu

		$models = LevelInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'level');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentPlayers()
    {
        return $this->hasMany(TournamentPlayers::className(), ['tournament_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentTeams()
    {
        return $this->hasMany(TournamentTeams::className(), ['tournament_id' => 'id']);
    }
}
