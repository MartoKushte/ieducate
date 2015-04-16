<?php

/**
 * This is the model class for table "timetable".
 *
 * The followings are the available columns in table 'timetable':
 * @property integer $timetableID
 * @property string $academic_year
 * @property string $classroom
 * @property integer $staffID
 * @property string $subject
 * @property integer $periodID
 * @property string $time
 * @property string $dateadded
 */
class Timetable extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Timetable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'timetable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('staffID, periodID', 'numerical', 'integerOnly'=>true),
			array('academic_year, classroom, subject', 'length', 'max'=>44),
			array('time, dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('timetableID, academic_year, classroom, staffID, subject, periodID, time, dateadded', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'timetableID' => 'Timetable',
			'academic_year' => 'Academic Year',
			'classroom' => 'Classroom',
			'staffID' => 'Staff',
			'subject' => 'Subject',
			'periodID' => 'Period',
			'time' => 'Time',
			'dateadded' => 'Dateadded',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('timetableID',$this->timetableID);
		$criteria->compare('academic_year',$this->academic_year,true);
		$criteria->compare('classroom',$this->classroom,true);
		$criteria->compare('staffID',$this->staffID);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('periodID',$this->periodID);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}