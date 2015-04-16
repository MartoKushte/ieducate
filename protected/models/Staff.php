<?php

/**
 * This is the model class for table "staff".
 *
 * The followings are the available columns in table 'staff':
 * @property integer $staffID
 * @property string $departmen
 * @property string $employeecode
 * @property string $initials
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $photoimage
 * @property string $employmenttype
 * @property string $gender
 * @property string $dateofbirth
 * @property string $address
 * @property integer $phoneno
 * @property string $email
 * @property string $religion
 * @property string $jobtitle
 * @property string $specialization
 * @property string $maritalstatus
 * @property string $joindate
 * @property string $releasedate
 * @property integer $nationalID
 * @property string $notes
 */
class Staff extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Staff the static model class
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
		return 'staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employeecode, firstname, lastname, gender, dateofbirth, phoneno, email, nationalID', 'required'),
			array('phoneno, nationalID', 'numerical', 'integerOnly'=>true),
			array('departmen', 'length', 'max'=>44),
			array('employeecode, employmenttype, address, email', 'length', 'max'=>50),
			array('initials, gender', 'length', 'max'=>11),
			array('firstname, middlename, lastname, religion, jobtitle, specialization, maritalstatus', 'length', 'max'=>20),
			array('photoimage', 'length', 'max'=>100),
			array('joindate, releasedate, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('staffID, departmen, employeecode, initials, firstname, middlename, lastname, photoimage, employmenttype, gender, dateofbirth, address, phoneno, email, religion, jobtitle, specialization, maritalstatus, joindate, releasedate, nationalID, notes', 'safe', 'on'=>'search'),
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
			'staffID' => 'Staff',
			'departmen' => 'Departmen',
			'employeecode' => 'Employeecode',
			'initials' => 'Initials',
			'firstname' => 'Firstname',
			'middlename' => 'Middlename',
			'lastname' => 'Lastname',
			'photoimage' => 'Photoimage',
			'employmenttype' => 'Employmenttype',
			'gender' => 'Gender',
			'dateofbirth' => 'Dateofbirth',
			'address' => 'Address',
			'phoneno' => 'Phoneno',
			'email' => 'Email',
			'religion' => 'Religion',
			'jobtitle' => 'Jobtitle',
			'specialization' => 'Specialization',
			'maritalstatus' => 'Maritalstatus',
			'joindate' => 'Joindate',
			'releasedate' => 'Releasedate',
			'nationalID' => 'National',
			'notes' => 'Notes',
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

		$criteria->compare('staffID',$this->staffID);
		$criteria->compare('departmen',$this->departmen,true);
		$criteria->compare('employeecode',$this->employeecode,true);
		$criteria->compare('initials',$this->initials,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middlename',$this->middlename,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('photoimage',$this->photoimage,true);
		$criteria->compare('employmenttype',$this->employmenttype,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('dateofbirth',$this->dateofbirth,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phoneno',$this->phoneno);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('jobtitle',$this->jobtitle,true);
		$criteria->compare('specialization',$this->specialization,true);
		$criteria->compare('maritalstatus',$this->maritalstatus,true);
		$criteria->compare('joindate',$this->joindate,true);
		$criteria->compare('releasedate',$this->releasedate,true);
		$criteria->compare('nationalID',$this->nationalID);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}