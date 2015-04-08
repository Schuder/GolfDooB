<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "additonal_stats".
 *
 * @property integer $id
 * @property integer $putts
 * @property integer $greens_in_regulation
 * @property integer $fairways_hit
 * @property integer $penalty_strokes
 * @property string $additional_notes
 *
 * @property TournamentPlayers[] $tournamentPlayers
 */
class AdditonalStats extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'additonal_stats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['putts', 'greens_in_regulation', 'fairways_hit', 'penalty_strokes'], 'integer'],
            [['additional_notes'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'putts' => 'Putts',
            'greens_in_regulation' => 'Greens In Regulation',
            'fairways_hit' => 'Fairways Hit',
            'penalty_strokes' => 'Penalty Strokes',
            'additional_notes' => 'Additional Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentPlayers()
    {
        return $this->hasMany(TournamentPlayers::className(), ['additional_stats_id' => 'id']);
    }
}
