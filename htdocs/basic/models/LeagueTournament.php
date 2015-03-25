<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "league_tournament".
 *
 * @property integer $id
 * @property integer $tournament_id
 * @property integer $league_season_id
 * @property string $league_tournament_notes
 *
 * @property TournamentInfo $tournament
 * @property LeagueSeason $leagueSeason
 */
class LeagueTournament extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'league_tournament';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tournament_id', 'league_season_id'], 'required'],
            [['tournament_id', 'league_season_id'], 'integer'],
            [['league_tournament_notes'], 'string']
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
            'league_season_id' => 'League Season',
            'league_tournament_notes' => 'League Tournament Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournament()
    {
	  	$models = TournamentInfo::find()->asArray()->all();
	      return ArrayHelper::map($models, 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueSeason()
    {
    	//needs work
	  	//$models = LeagueSeason::find()->asArray()->all();
	    //  return ArrayHelper::map($models, 'id', 'id');
        return $this->hasOne(LeagueSeason::className(), ['id'  => 'league_season_id']);
    }
}
