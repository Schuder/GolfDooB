<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "season".
 *
 * @property integer $id
 * @property string $name
 * @property string $year
 *
 * @property LeagueSeason[] $leagueSeasons
 * @property TeamSeason[] $teamSeasons
 * @property TournamentInfo[] $tournamentInfos
 */
class Season extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'season';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'year'], 'required'],
            [['year'], 'safe'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Season Name',
            'year' => 'Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueSeasons()
    {
        return $this->hasMany(LeagueSeason::className(), ['season_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSeasons()
    {
        return $this->hasMany(TeamSeason::className(), ['season_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentInfos()
    {
        return $this->hasMany(TournamentInfo::className(), ['season_id' => 'id']);
    }
}
