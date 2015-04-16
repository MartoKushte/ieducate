<?php

/**
 * This is the model class for table "academicsession".
 *
 * The followings are the available columns in table 'academicsession':
 * @property integer $academicsessionID
 * @property string $sessionyear
 * @property string $sessionopendate
 * @property string $sessionclosedate
 * @property string $sessionstatus
 * @property string $dateadded
 */
class Academicsession extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Academicsession the static model class
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
		return 'academicsession';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('academicsessionID, sessionyear, sessionopendate, sessionclosedate, sessionstatus, dateadded', 'required'),
			array('academicsessionID', 'numerical', 'integerOnly'=>true),
			array('sessionyear', 'length', 'max'=>50),
			array('sessionstatus', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('academicsessionID, sessionyear, sessionopendate, sessionclosedate, sessionstatus, dateadded', 'safe', 'on'=>'search'),
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
			'academicsessionID' => 'Academicsession',
			'sessionyear' => 'Sessionyear',
			'sessionopendate' => 'Sessionopendate',
			'sessionclosedate' => 'Sessionclosedate',
			'sessionstatus' => 'Sessionstatus',
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

		$criteria->compare('academicsessionID',$this->academicsessionID);
		$criteria->compare('sessionyear',$this->sessionyear,true);
		$criteria->compare('sessionopendate',$this->sessionopendate,true);
		$criteria->compare('sessionclosedate',$this->sessionclosedate,true);
		$criteria->compare('sessionstatus',$this->sessionstatus,true);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}