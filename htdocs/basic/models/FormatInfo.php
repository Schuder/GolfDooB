<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "format_info".
 *
 * @property integer $id
 * @property string $format
 * @property string $format_notes
 *
 * @property TournamentInfo[] $tournamentInfos
 */
class FormatInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'format_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['format'], 'required'],
            [['format_notes'], 'string'],
            [['format'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'format' => 'Stroke, scramble, etc',
            'format_notes' => 'Format Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentInfos()
    {
        return $this->hasMany(TournamentInfo::className(), ['format_id' => 'id']);
    }
}
