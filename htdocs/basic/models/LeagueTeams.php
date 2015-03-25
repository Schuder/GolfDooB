<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\Query;

/**
 * This is the model class for table "league_teams".
 *
 * @property integer $id
 * @property integer $league_season_id
 * @property integer $team_season_id
 *
 * @property LeagueSeason $leagueSeason
 * @property TeamSeason $teamSeason
 */
class LeagueTeams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'league_teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['league_season_id', 'team_season_id'], 'required'],
            [['league_season_id', 'team_season_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'league_season_id' => 'League Season ID',
            'team_season_id' => 'Team Season ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueSeason()
    {
		//code added to allow a dropdown menu
		//needs work
		$models = LeagueSeason::find()->asArray()->all();
		/*
		$query = new Query();
		$query ->select('league_info.league_name')
				->from('league_info')
				->join('INNER JOIN', 'league_teams', 'league_teams.league_season_id = league_info.league_name')
				    ->LIMIT(5);
		$command = $query->createCommand();
		$data = $command->queryAll();   
		*/

		/*
 $subquery = LeagueInfo::find()->select('league_name')->distinct()->all();
    $arr = [];
    foreach ($subquery as $q) {
        $arr[] = $q->id;
    }
    $query = static::find()->where(['not in', 'id', $arr]);
    if (!empty($condition)) {
        $query->andWhere($condition);
    }
    return $query;
	*/
	return ArrayHelper::map($models, 'id', 'id');
		
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSeason()
    {
		//code added to allow a dropdown menu

		$models = TeamSeason::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'id');
    }
}
