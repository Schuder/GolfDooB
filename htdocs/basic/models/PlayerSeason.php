<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "player_season".
 *
 * @property integer $id
 * @property integer $player_info_id
 * @property integer $team_season_id
 * @property integer $year_in_school
 * @property string $player_season_notes
 *
 * @property PlayerInfo $playerInfo
 * @property TournamentPlayers[] $tournamentPlayers
 */
class PlayerSeason extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'player_season';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_info_id', 'team_season_id'], 'required'],
            [['player_info_id', 'team_season_id', 'year_in_school'], 'integer'],
            [['player_season_notes'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'player_info_id' => 'Player Info',
            'team_season_id' => 'Team Season',
            'year_in_school' => 'Year In School',
            'player_season_notes' => 'Player Season Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerInfo()
    {
		//code added to allow a dropdown menu

		//$models = PlayerInfo::find()->asArray()->all();
		return $this->hasOne(PlayerInfo::className(), ['id' => 'player_info_id']);
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSeason()
    {
		//code added to allow a dropdown menu
		//needs work
		$models = TeamSeason::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'id');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentPlayers()
    {
        return $this->hasMany(TournamentPlayers::className(), ['player_season_id' => 'id']);
    }
}
