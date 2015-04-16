<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $studentID
 * @property string $academic_year
 * @property string $classroom
 * @property string $hostel
 * @property string $adminno
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $dateofbirth
 * @property string $citizenship
 * @property string $parentname
 * @property string $photoimage
 * @property integer $emergencynumber
 * @property string $postaladress
 * @property string $email
 * @property string $admindate
 * @property string $gender
 * @property string $religion
 */
class Student extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adminno, firstname, dateofbirth, parentname, emergencynumber, admindate', 'required'),
			array('emergencynumber', 'numerical', 'integerOnly'=>true),
			array('academic_year, classroom, hostel', 'length', 'max'=>44),
			array('adminno, firstname, middlename, lastname, citizenship, parentname, gender', 'length', 'max'=>33),
			array('photoimage', 'length', 'max'=>100),
			array('postaladress, email, religion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('studentID, academic_year, classroom, hostel, adminno, firstname, middlename, lastname, dateofbirth, citizenship, parentname, photoimage, emergencynumber, postaladress, email, admindate, gender, religion', 'safe', 'on'=>'search'),
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
			'studentID' => 'Student',
			'academic_year' => 'Academic Year',
			'classroom' => 'Classroom',
			'hostel' => 'Hostel',
			'adminno' => 'Adminno',
			'firstname' => 'Firstname',
			'middlename' => 'Middlename',
			'lastname' => 'Lastname',
			'dateofbirth' => 'Dateofbirth',
			'citizenship' => 'Citizenship',
			'parentname' => 'Parentname',
			'photoimage' => 'Photoimage',
			'emergencynumber' => 'Emergencynumber',
			'postaladress' => 'Postaladress',
			'email' => 'Email',
			'admindate' => 'Admindate',
			'gender' => 'Gender',
			'religion' => 'Religion',
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

		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('academic_year',$this->academic_year,true);
		$criteria->compare('classroom',$this->classroom,true);
		$criteria->compare('hostel',$this->hostel,true);
		$criteria->compare('adminno',$this->adminno,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middlename',$this->middlename,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('dateofbirth',$this->dateofbirth,true);
		$criteria->compare('citizenship',$this->citizenship,true);
		$criteria->compare('parentname',$this->parentname,true);
		$criteria->compare('photoimage',$this->photoimage,true);
		$criteria->compare('emergencynumber',$this->emergencynumber);
		$criteria->compare('postaladress',$this->postaladress,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('admindate',$this->admindate,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('religion',$this->religion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}