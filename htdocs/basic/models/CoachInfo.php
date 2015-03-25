<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coach_info".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $cell_number
 * @property string $home_number
 * @property string $coach_notes
 * @property string $coach_email
 *
 * @property TeamSeason[] $teamSeasons
 */
class CoachInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'coach_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['coach_notes'], 'string'],
            [['first_name', 'last_name', 'coach_email'], 'string', 'max' => 50],
            [['cell_number', 'home_number'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'cell_number' => 'Cell Number',
            'home_number' => 'Home Number',
            'coach_notes' => 'Coach Notes',
            'coach_email' => 'Coach Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamSeasons()
    {
        return $this->hasMany(TeamSeason::className(), ['ast_coach_id_2' => 'id']);
    }
}