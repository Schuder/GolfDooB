<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "league_info".
 *
 * @property integer $id
 * @property string $name
 * @property string $league_notes
 *
 * @property LeagueSeason[] $leagueSeasons
 */
class LeagueInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'league_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['league_name'], 'required'],
            [['league_notes'], 'string'],
            [['league_name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'league_name' => 'Name',
            'league_notes' => 'League Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLeagueSeasons()
    {
        return $this->hasMany(LeagueSeason::className(), ['league_id' => 'id']);
    }
}
