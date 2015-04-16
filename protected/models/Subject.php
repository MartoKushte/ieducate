<?php

/**
 * This is the model class for table "subject".
 *
 * The followings are the available columns in table 'subject':
 * @property integer $subjectID
 * @property string $subjectname
 * @property string $subjectgroup
 * @property integer $subjectcode
 * @property string $dateadded
 */
class Subject extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Subject the static model class
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
		return 'subject';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subjectcode', 'numerical', 'integerOnly'=>true),
			array('subjectname, subjectgroup', 'length', 'max'=>50),
			array('dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('subjectID, subjectname, subjectgroup, subjectcode, dateadded', 'safe', 'on'=>'search'),
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
			'subjectID' => 'Subject',
			'subjectname' => 'Subjectname',
			'subjectgroup' => 'Subjectgroup',
			'subjectcode' => 'Subjectcode',
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

		$criteria->compare('subjectID',$this->subjectID);
		$criteria->compare('subjectname',$this->subjectname,true);
		$criteria->compare('subjectgroup',$this->subjectgroup,true);
		$criteria->compare('subjectcode',$this->subjectcode);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}