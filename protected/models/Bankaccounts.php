<?php

/**
 * This is the model class for table "bankaccounts".
 *
 * The followings are the available columns in table 'bankaccounts':
 * @property integer $bankID
 * @property string $bank_name
 * @property string $branch
 * @property string $account_name
 * @property integer $account_number
 */
class Bankaccounts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bankaccounts the static model class
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
		return 'bankaccounts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bank_name, branch, account_name, account_number', 'required'),
			array('account_number', 'numerical', 'integerOnly'=>true),
			array('bank_name, branch', 'length', 'max'=>108),
			array('account_name', 'length', 'max'=>75),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bankID, bank_name, branch, account_name, account_number', 'safe', 'on'=>'search'),
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
			'bankID' => 'Bank',
			'bank_name' => 'Bank Name',
			'branch' => 'Branch',
			'account_name' => 'Account Name',
			'account_number' => 'Account Number',
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

		$criteria->compare('bankID',$this->bankID);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('branch',$this->branch,true);
		$criteria->compare('account_name',$this->account_name,true);
		$criteria->compare('account_number',$this->account_number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}