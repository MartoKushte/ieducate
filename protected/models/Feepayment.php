<?php

/**
 * This is the model class for table "feepayment".
 *
 * The followings are the available columns in table 'feepayment':
 * @property integer $feepaymentID
 * @property integer $feereceiptID
 * @property string $financialyear
 * @property string $paymentdate
 * @property string $paymentmode
 * @property string $paidamount
 * @property string $adjustedamount
 * @property string $chequedate
 * @property string $chequenumber
 * @property string $bankbranch
 * @property string $remarks
 * @property string $dateadded
 */
class Feepayment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feepayment the static model class
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
		return 'feepayment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adjustedamount', 'required'),
			array('feereceiptID', 'numerical', 'integerOnly'=>true),
			array('financialyear', 'length', 'max'=>44),
			array('paymentmode', 'length', 'max'=>12),
			array('paidamount, adjustedamount', 'length', 'max'=>18),
			array('chequenumber, bankbranch', 'length', 'max'=>50),
			array('paymentdate, chequedate, remarks, dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('feepaymentID, feereceiptID, financialyear, paymentdate, paymentmode, paidamount, adjustedamount, chequedate, chequenumber, bankbranch, remarks, dateadded', 'safe', 'on'=>'search'),
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
			'feepaymentID' => 'Feepayment',
			'feereceiptID' => 'Feereceipt',
			'financialyear' => 'Financialyear',
			'paymentdate' => 'Paymentdate',
			'paymentmode' => 'Paymentmode',
			'paidamount' => 'Paidamount',
			'adjustedamount' => 'Adjustedamount',
			'chequedate' => 'Chequedate',
			'chequenumber' => 'Chequenumber',
			'bankbranch' => 'Bankbranch',
			'remarks' => 'Remarks',
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

		$criteria->compare('feepaymentID',$this->feepaymentID);
		$criteria->compare('feereceiptID',$this->feereceiptID);
		$criteria->compare('financialyear',$this->financialyear,true);
		$criteria->compare('paymentdate',$this->paymentdate,true);
		$criteria->compare('paymentmode',$this->paymentmode,true);
		$criteria->compare('paidamount',$this->paidamount,true);
		$criteria->compare('adjustedamount',$this->adjustedamount,true);
		$criteria->compare('chequedate',$this->chequedate,true);
		$criteria->compare('chequenumber',$this->chequenumber,true);
		$criteria->compare('bankbranch',$this->bankbranch,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}