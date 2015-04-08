<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "player_info".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $cell_number
 * @property string $player_notes
 * @property string $parent_email1
 * @property string $parent_email2
 * @property string $home_phone_number
 *
 * @property PlayerSeason[] $playerSeasons
 */
class PlayerInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'player_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['player_notes'], 'string'],
            [['first_name', 'last_name', 'email', 'parent_email1', 'parent_email2'], 'string', 'max' => 50],
            [['cell_number', 'home_phone_number'], 'string', 'max' => 15]
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
            'email' => 'Email',
            'cell_number' => 'Cell Number',
            'player_notes' => 'Player Notes',
            'parent_email1' => 'Parent Email1',
            'parent_email2' => 'Parent Email2',
            'home_phone_number' => 'Home Phone Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerSeasons()
    {
        return $this->hasMany(PlayerSeason::className(), ['player_info_id' => 'id']);
    }
}
