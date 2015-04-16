<?php

/**
 * This is the model class for table "studentsubjectplan".
 *
 * The followings are the available columns in table 'studentsubjectplan':
 * @property integer $subjectplanID
 * @property string $academicyear
 * @property string $adminno
 * @property string $dateadded
 * @property string $datemodified
 * @property string $subject1
 * @property string $subject2
 * @property string $subject3
 * @property string $subject4
 * @property string $subject5
 * @property string $subject6
 * @property string $subject7
 * @property string $subjec8
 * @property string $subject9
 * @property string $subject10
 * @property string $subject11
 * @property string $subject12
 * @property string $subject13
 * @property string $subject14
 */
class Studentsubjectplan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Studentsubjectplan the static model class
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
		return 'studentsubjectplan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('academicyear, adminno, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subjec8, subject9, subject10, subject11, subject12, subject13, subject14', 'length', 'max'=>44),
			array('dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('subjectplanID, academicyear, adminno, dateadded, datemodified, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subjec8, subject9, subject10, subject11, subject12, subject13, subject14', 'safe', 'on'=>'search'),
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
			'subjectplanID' => 'Subjectplan',
			'academicyear' => 'Academicyear',
			'adminno' => 'Adminno',
			'dateadded' => 'Dateadded',
			'datemodified' => 'Datemodified',
			'subject1' => 'Subject1',
			'subject2' => 'Subject2',
			'subject3' => 'Subject3',
			'subject4' => 'Subject4',
			'subject5' => 'Subject5',
			'subject6' => 'Subject6',
			'subject7' => 'Subject7',
			'subjec8' => 'Subjec8',
			'subject9' => 'Subject9',
			'subject10' => 'Subject10',
			'subject11' => 'Subject11',
			'subject12' => 'Subject12',
			'subject13' => 'Subject13',
			'subject14' => 'Subject14',
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

		$criteria->compare('subjectplanID',$this->subjectplanID);
		$criteria->compare('academicyear',$this->academicyear,true);
		$criteria->compare('adminno',$this->adminno,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);
		$criteria->compare('subject1',$this->subject1,true);
		$criteria->compare('subject2',$this->subject2,true);
		$criteria->compare('subject3',$this->subject3,true);
		$criteria->compare('subject4',$this->subject4,true);
		$criteria->compare('subject5',$this->subject5,true);
		$criteria->compare('subject6',$this->subject6,true);
		$criteria->compare('subject7',$this->subject7,true);
		$criteria->compare('subjec8',$this->subjec8,true);
		$criteria->compare('subject9',$this->subject9,true);
		$criteria->compare('subject10',$this->subject10,true);
		$criteria->compare('subject11',$this->subject11,true);
		$criteria->compare('subject12',$this->subject12,true);
		$criteria->compare('subject13',$this->subject13,true);
		$criteria->compare('subject14',$this->subject14,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}