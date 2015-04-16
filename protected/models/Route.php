<?php

/**
 * This is the model class for table "route".
 *
 * The followings are the available columns in table 'route':
 * @property integer $routeID
 * @property string $vehicleID
 * @property string $routename
 * @property string $noofstops
 */
class Route extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Route the static model class
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
		return 'route';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vehicleID', 'length', 'max'=>44),
			array('routename', 'length', 'max'=>120),
			array('noofstops', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('routeID, vehicleID, routename, noofstops', 'safe', 'on'=>'search'),
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
			'routeID' => 'Route',
			'vehicleID' => 'Vehicle',
			'routename' => 'Routename',
			'noofstops' => 'Noofstops',
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

		$criteria->compare('routeID',$this->routeID);
		$criteria->compare('vehicleID',$this->vehicleID,true);
		$criteria->compare('routename',$this->routename,true);
		$criteria->compare('noofstops',$this->noofstops,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}