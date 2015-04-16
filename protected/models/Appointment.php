<?php

/**
 * This is the model class for table "appointment".
 *
 * The followings are the available columns in table 'appointment':
 * @property integer $appointmentID
 * @property integer $staffID
 * @property string $appointmentdate
 * @property string $personname
 * @property string $purpose
 * @property string $contactnumber
 * @property string $time
 */
class Appointment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Appointment the static model class
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
		return 'appointment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('staffID', 'numerical', 'integerOnly'=>true),
			array('personname, contactnumber', 'length', 'max'=>50),
			array('time', 'length', 'max'=>20),
			array('appointmentdate, purpose', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('appointmentID, staffID, appointmentdate, personname, purpose, contactnumber, time', 'safe', 'on'=>'search'),
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
			'appointmentID' => 'Appointment',
			'staffID' => 'Staff',
			'appointmentdate' => 'Appointmentdate',
			'personname' => 'Personname',
			'purpose' => 'Purpose',
			'contactnumber' => 'Contactnumber',
			'time' => 'Time',
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

		$criteria->compare('appointmentID',$this->appointmentID);
		$criteria->compare('staffID',$this->staffID);
		$criteria->compare('appointmentdate',$this->appointmentdate,true);
		$criteria->compare('personname',$this->personname,true);
		$criteria->compare('purpose',$this->purpose,true);
		$criteria->compare('contactnumber',$this->contactnumber,true);
		$criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}