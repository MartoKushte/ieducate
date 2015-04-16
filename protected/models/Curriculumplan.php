<?php

/**
 * This is the model class for table "curriculumplan".
 *
 * The followings are the available columns in table 'curriculumplan':
 * @property integer $curriculumplanID
 * @property string $curriculumID
 * @property string $bookID
 * @property string $planmonth
 * @property string $topic
 * @property string $subtopic
 * @property string $activity
 * @property string $iscompleted
 * @property string $dateadded
 * @property string $datemodified
 */
class Curriculumplan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Curriculumplan the static model class
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
		return 'curriculumplan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('curriculumID, iscompleted', 'required'),
			array('curriculumID', 'length', 'max'=>108),
			array('bookID', 'length', 'max'=>44),
			array('planmonth, topic, subtopic, activity', 'length', 'max'=>50),
			array('iscompleted', 'length', 'max'=>3),
			array('dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('curriculumplanID, curriculumID, bookID, planmonth, topic, subtopic, activity, iscompleted, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'curriculumplanID' => 'Curriculumplan',
			'curriculumID' => 'Curriculum',
			'bookID' => 'Book',
			'planmonth' => 'Planmonth',
			'topic' => 'Topic',
			'subtopic' => 'Subtopic',
			'activity' => 'Activity',
			'iscompleted' => 'Iscompleted',
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

		$criteria->compare('curriculumplanID',$this->curriculumplanID);
		$criteria->compare('curriculumID',$this->curriculumID,true);
		$criteria->compare('bookID',$this->bookID,true);
		$criteria->compare('planmonth',$this->planmonth,true);
		$criteria->compare('topic',$this->topic,true);
		$criteria->compare('subtopic',$this->subtopic,true);
		$criteria->compare('activity',$this->activity,true);
		$criteria->compare('iscompleted',$this->iscompleted,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}