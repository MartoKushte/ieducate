<?php

/**
 * This is the model class for table "resultsheet".
 *
 * The followings are the available columns in table 'resultsheet':
 * @property integer $resultsheetID
 * @property string $admin_no
 * @property string $examtype
 * @property integer $maths
 * @property integer $english
 * @property integer $kiswahili
 * @property integer $biology
 * @property integer $physics
 * @property integer $chemistry
 * @property integer $history
 * @property integer $geography
 * @property integer $religious_studies
 * @property integer $agriculture
 * @property integer $computerstudies
 * @property integer $businesstudies
 * @property integer $art
 * @property integer $aviation
 * @property integer $french
 * @property integer $music
 * @property integer $woodwork
 * @property integer $metal
 * @property integer $points
 * @property integer $totalmks
 * @property integer $mean
 * @property string $grade
 * @property integer $position
 */
class Resultsheet extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Resultsheet the static model class
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
		return 'resultsheet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('admin_no, examtype, maths, english, kiswahili, totalmks, grade, position', 'required'),
			array('maths, english, kiswahili, biology, physics, chemistry, history, geography, religious_studies, agriculture, computerstudies, businesstudies, art, aviation, french, music, woodwork, metal, points, totalmks, mean, position', 'numerical', 'integerOnly'=>true),
			array('admin_no', 'length', 'max'=>44),
			array('examtype', 'length', 'max'=>7),
			array('grade', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('resultsheetID, admin_no, examtype, maths, english, kiswahili, biology, physics, chemistry, history, geography, religious_studies, agriculture, computerstudies, businesstudies, art, aviation, french, music, woodwork, metal, points, totalmks, mean, grade, position', 'safe', 'on'=>'search'),
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
			'resultsheetID' => 'Resultsheet',
			'admin_no' => 'Admin No',
			'examtype' => 'Examtype',
			'maths' => 'Maths',
			'english' => 'English',
			'kiswahili' => 'Kiswahili',
			'biology' => 'Biology',
			'physics' => 'Physics',
			'chemistry' => 'Chemistry',
			'history' => 'History',
			'geography' => 'Geography',
			'religious_studies' => 'Religious Studies',
			'agriculture' => 'Agriculture',
			'computerstudies' => 'Computerstudies',
			'businesstudies' => 'Businesstudies',
			'art' => 'Art',
			'aviation' => 'Aviation',
			'french' => 'French',
			'music' => 'Music',
			'woodwork' => 'Woodwork',
			'metal' => 'Metal',
			'points' => 'Points',
			'totalmks' => 'Totalmks',
			'mean' => 'Mean',
			'grade' => 'Grade',
			'position' => 'Position',
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

		$criteria->compare('resultsheetID',$this->resultsheetID);
		$criteria->compare('admin_no',$this->admin_no,true);
		$criteria->compare('examtype',$this->examtype,true);
		$criteria->compare('maths',$this->maths);
		$criteria->compare('english',$this->english);
		$criteria->compare('kiswahili',$this->kiswahili);
		$criteria->compare('biology',$this->biology);
		$criteria->compare('physics',$this->physics);
		$criteria->compare('chemistry',$this->chemistry);
		$criteria->compare('history',$this->history);
		$criteria->compare('geography',$this->geography);
		$criteria->compare('religious_studies',$this->religious_studies);
		$criteria->compare('agriculture',$this->agriculture);
		$criteria->compare('computerstudies',$this->computerstudies);
		$criteria->compare('businesstudies',$this->businesstudies);
		$criteria->compare('art',$this->art);
		$criteria->compare('aviation',$this->aviation);
		$criteria->compare('french',$this->french);
		$criteria->compare('music',$this->music);
		$criteria->compare('woodwork',$this->woodwork);
		$criteria->compare('metal',$this->metal);
		$criteria->compare('points',$this->points);
		$criteria->compare('totalmks',$this->totalmks);
		$criteria->compare('mean',$this->mean);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('position',$this->position);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}