<?php

/**
 * This is the model class for table "feetermdate".
 *
 * The followings are the available columns in table 'feetermdate':
 * @property integer $feetermdateID
 * @property integer $termnumber
 * @property string $termtitle
 * @property string $periodfrom
 * @property string $periodto
 * @property integer $percentagecollection
 * @property string $duedate
 * @property integer $monthcount
 * @property string $dateadded
 */
class Feetermdate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feetermdate the static model class
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
		return 'feetermdate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('termnumber, percentagecollection, monthcount', 'numerical', 'integerOnly'=>true),
			array('termtitle', 'length', 'max'=>50),
			array('periodfrom, periodto, duedate, dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('feetermdateID, termnumber, termtitle, periodfrom, periodto, percentagecollection, duedate, monthcount, dateadded', 'safe', 'on'=>'search'),
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
			'feetermdateID' => 'Feetermdate',
			'termnumber' => 'Termnumber',
			'termtitle' => 'Termtitle',
			'periodfrom' => 'Periodfrom',
			'periodto' => 'Periodto',
			'percentagecollection' => 'Percentagecollection',
			'duedate' => 'Duedate',
			'monthcount' => 'Monthcount',
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

		$criteria->compare('feetermdateID',$this->feetermdateID);
		$criteria->compare('termnumber',$this->termnumber);
		$criteria->compare('termtitle',$this->termtitle,true);
		$criteria->compare('periodfrom',$this->periodfrom,true);
		$criteria->compare('periodto',$this->periodto,true);
		$criteria->compare('percentagecollection',$this->percentagecollection);
		$criteria->compare('duedate',$this->duedate,true);
		$criteria->compare('monthcount',$this->monthcount);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}