<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounts".
 *
 * @property string $username
 * @property string $password
 * @property integer $coach_id
 * @property integer $player_id
 *
 * @property CoachInfo $coach
 * @property PlayerInfo $player
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['coach_id', 'player_id'], 'integer'],
            [['username'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 60],
            [['coach_id', 'player_id'], 'unique', 'targetAttribute' => ['coach_id', 'player_id'], 'message' => 'The combination of Coach ID and Player ID has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'coach_id' => 'Coach ID',
            'player_id' => 'Player ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCoach()
    {
        return $this->hasOne(CoachInfo::className(), ['id' => 'coach_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(PlayerInfo::className(), ['id' => 'player_id']);
    }
}
