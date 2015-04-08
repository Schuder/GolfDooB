<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tee_box_info".
 *
 * @property integer $id
 * @property integer $course_id
 * @property string $color
 * @property double $slope
 * @property double $rating
 * @property integer $par
 * @property string $tee_box_notes
 *
 * @property CourseInfo $course
 * @property TournamentInfo[] $tournamentInfos
 */
class TeeBoxInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tee_box_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'color'], 'required'],
            [['course_id', 'par'], 'integer'],
            [['slope', 'rating'], 'number'],
            [['tee_box_notes'], 'string'],
            [['color'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Course',
            'color' => 'Color',
            'slope' => 'Slope',
            'rating' => 'Rating',
            'par' => 'Par',
            'tee_box_notes' => 'Tee Box Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
		//code added to allow a dropdown menu

		$models = CourseInfo::find()->asArray()->all();
		return ArrayHelper::map($models, 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentInfos()
    {
        return $this->hasMany(TournamentInfo::className(), ['tee_box_id' => 'id']);
    }
}
