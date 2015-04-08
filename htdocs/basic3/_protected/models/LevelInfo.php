<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "level_info".
 *
 * @property integer $id
 * @property string $level
 * @property string $level_notes
 *
 * @property TournamentInfo[] $tournamentInfos
 */
class LevelInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'level_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level'], 'required'],
            [['level_notes'], 'string'],
            [['level'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level' => 'Level',
            'level_notes' => 'Level Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentInfos()
    {
        return $this->hasMany(TournamentInfo::className(), ['level_id' => 'id']);
    }
}
