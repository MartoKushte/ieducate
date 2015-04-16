<?php

/**
 * This is the model class for table "expenditure".
 *
 * The followings are the available columns in table 'expenditure':
 * @property integer $idexpenditure
 * @property string $receiptno
 * @property string $staffid
 * @property string $purpose
 * @property string $date
 * @property integer $amount
 */
class Expenditure extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Expenditure the static model class
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
		return 'expenditure';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('receiptno, date, amount', 'required'),
			array('amount', 'numerical', 'integerOnly'=>true),
			array('receiptno, staffid', 'length', 'max'=>45),
			array('purpose', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idexpenditure, receiptno, staffid, purpose, date, amount', 'safe', 'on'=>'search'),
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
			'idexpenditure' => 'Idexpenditure',
			'receiptno' => 'Receiptno',
			'staffid' => 'Staffid',
			'purpose' => 'Purpose',
			'date' => 'Date',
			'amount' => 'Amount',
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

		$criteria->compare('idexpenditure',$this->idexpenditure);
		$criteria->compare('receiptno',$this->receiptno,true);
		$criteria->compare('staffid',$this->staffid,true);
		$criteria->compare('purpose',$this->purpose,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('amount',$this->amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}