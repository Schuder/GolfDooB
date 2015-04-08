<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "team_info".
 *
 * @property integer $id
 * @property string $school_name
 * @property string $mascot
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone_number
 * @property string $fax_number
 * @property string $team_notes
 *
 * @property TeamSeason[] $teamSeasons
 */
class TeamInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_name'], 'required'],
            [['team_notes'], 'string'],
            [['school_name', 'mascot', 'city'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 100],
            [['state'], 'string', 'max' => 2],
            [['zip'], 'string', 'max' => 5],
            [['phone_number', 'fax_number'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_name' => 'School Name',
            'mascot' => 'Mascot',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'phone_number' => 'Phone Number',
            'fax_number' => 'Fax Number',
            'team_notes' => 'Team Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSeasons()
    {
        return $this->hasMany(TeamSeason::className(), ['team_info_id' => 'id']);
    }
}
