<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "course_info".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone_number
 * @property string $main_contact_person
 * @property string $course_notes
 *
 * @property TeeBoxInfo[] $teeBoxInfos
 * @property TournamentInfo[] $tournamentInfos
 */
class CourseInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['course_notes'], 'string'],
            [['name', 'address', 'city', 'main_contact_person'], 'string', 'max' => 50],
            [['state'], 'string', 'max' => 2],
            [['zip'], 'string', 'max' => 5],
            [['phone_number'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'phone_number' => 'Phone Number',
            'main_contact_person' => 'Main Contact Person',
            'course_notes' => 'Course Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeeBoxInfos()
    {
        return $this->hasMany(TeeBoxInfo::className(), ['course_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentInfos()
    {
        return $this->hasMany(TournamentInfo::className(), ['course_id' => 'id']);
    }
}
