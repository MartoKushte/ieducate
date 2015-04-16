<?php

/**
 * This is the model class for table "transportation".
 *
 * The followings are the available columns in table 'transportation':
 * @property integer $transportationID
 * @property string $studentID
 * @property string $stopID
 * @property string $ispaid
 */
class Transportation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transportation the static model class
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
		return 'transportation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ispaid', 'required'),
			array('studentID, stopID', 'length', 'max'=>44),
			array('ispaid', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('transportationID, studentID, stopID, ispaid', 'safe', 'on'=>'search'),
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
			'transportationID' => 'Transportation',
			'studentID' => 'Student',
			'stopID' => 'Stop',
			'ispaid' => 'Ispaid',
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

		$criteria->compare('transportationID',$this->transportationID);
		$criteria->compare('studentID',$this->studentID,true);
		$criteria->compare('stopID',$this->stopID,true);
		$criteria->compare('ispaid',$this->ispaid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}