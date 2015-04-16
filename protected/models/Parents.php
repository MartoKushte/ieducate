<?php

/**
 * This is the model class for table "parents".
 *
 * The followings are the available columns in table 'parents':
 * @property integer $parentID
 * @property string $studentID
 * @property string $fullname
 * @property string $photoimage
 * @property string $parentrelation
 * @property string $occupation
 * @property string $officename
 * @property string $officeaddress
 * @property string $phonenumber
 * @property string $emailaddress
 * @property string $dateadded
 * @property string $datemodified
 */
class Parents extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Parents the static model class
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
		return 'parents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('studentID, fullname, phonenumber', 'required'),
			array('studentID', 'length', 'max'=>44),
			array('fullname', 'length', 'max'=>100),
			array('parentrelation, occupation, officename, officeaddress, phonenumber, emailaddress', 'length', 'max'=>50),
			array('photoimage, dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('parentID, studentID, fullname, photoimage, parentrelation, occupation, officename, officeaddress, phonenumber, emailaddress, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'parentID' => 'Parent',
			'studentID' => 'Student',
			'fullname' => 'Fullname',
			'photoimage' => 'Photoimage',
			'parentrelation' => 'Parentrelation',
			'occupation' => 'Occupation',
			'officename' => 'Officename',
			'officeaddress' => 'Officeaddress',
			'phonenumber' => 'Phonenumber',
			'emailaddress' => 'Emailaddress',
			'dateadded' => 'Dateadded',
			'datemodified' => 'Datemodified',
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

		$criteria->compare('parentID',$this->parentID);
		$criteria->compare('studentID',$this->studentID,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('photoimage',$this->photoimage,true);
		$criteria->compare('parentrelation',$this->parentrelation,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('officename',$this->officename,true);
		$criteria->compare('officeaddress',$this->officeaddress,true);
		$criteria->compare('phonenumber',$this->phonenumber,true);
		$criteria->compare('emailaddress',$this->emailaddress,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}