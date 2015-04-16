<?php

/**
 * This is the model class for table "salary".
 *
 * The followings are the available columns in table 'salary':
 * @property integer $idsalary
 * @property string $staffid
 * @property string $krapin
 * @property string $firstname
 * @property string $othernames
 * @property string $surname
 * @property string $nationalid
 * @property string $employeeposition
 * @property string $month
 * @property integer $year
 * @property string $bankname
 * @property string $bankbranch
 * @property string $accountname
 * @property string $accountnumber
 * @property integer $amount
 * @property string $ispaid
 */
class Salary extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Salary the static model class
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
		return 'salary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('staffid, krapin, firstname, surname, nationalid, month, year, bankname, bankbranch, accountname, accountnumber', 'required'),
			array('year, amount', 'numerical', 'integerOnly'=>true),
			array('staffid, krapin, firstname, othernames, surname, nationalid, employeeposition, month, bankname, bankbranch, accountname, accountnumber', 'length', 'max'=>45),
			array('ispaid', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idsalary, staffid, krapin, firstname, othernames, surname, nationalid, employeeposition, month, year, bankname, bankbranch, accountname, accountnumber, amount, ispaid', 'safe', 'on'=>'search'),
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
			'idsalary' => 'Idsalary',
			'staffid' => 'Staffid',
			'krapin' => 'Krapin',
			'firstname' => 'Firstname',
			'othernames' => 'Othernames',
			'surname' => 'Surname',
			'nationalid' => 'Nationalid',
			'employeeposition' => 'Employeeposition',
			'month' => 'Month',
			'year' => 'Year',
			'bankname' => 'Bankname',
			'bankbranch' => 'Bankbranch',
			'accountname' => 'Accountname',
			'accountnumber' => 'Accountnumber',
			'amount' => 'Amount',
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

		$criteria->compare('idsalary',$this->idsalary);
		$criteria->compare('staffid',$this->staffid,true);
		$criteria->compare('krapin',$this->krapin,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('othernames',$this->othernames,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('nationalid',$this->nationalid,true);
		$criteria->compare('employeeposition',$this->employeeposition,true);
		$criteria->compare('month',$this->month,true);
		$criteria->compare('year',$this->year);
		$criteria->compare('bankname',$this->bankname,true);
		$criteria->compare('bankbranch',$this->bankbranch,true);
		$criteria->compare('accountname',$this->accountname,true);
		$criteria->compare('accountnumber',$this->accountnumber,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('ispaid',$this->ispaid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}