<?php

/**
 * This is the model class for table "feereceipt".
 *
 * The followings are the available columns in table 'feereceipt':
 * @property integer $feereceiptID
 * @property string $adminno
 * @property string $classroom
 * @property string $invoicedate
 * @property string $termtitle
 * @property string $previousinvoiceamount
 * @property string $previousamount
 * @property string $duedate
 * @property string $adjustedamount
 * @property string $totalamount
 * @property string $dateadded
 */
class Feereceipt extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feereceipt the static model class
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
		return 'feereceipt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('invoicedate, termtitle, duedate', 'required'),
			array('adminno, classroom', 'length', 'max'=>44),
			array('termtitle', 'length', 'max'=>50),
			array('previousinvoiceamount, previousamount, adjustedamount, totalamount', 'length', 'max'=>18),
			array('dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('feereceiptID, adminno, classroom, invoicedate, termtitle, previousinvoiceamount, previousamount, duedate, adjustedamount, totalamount, dateadded', 'safe', 'on'=>'search'),
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
			'feereceiptID' => 'Feereceipt',
			'adminno' => 'Adminno',
			'classroom' => 'Classroom',
			'invoicedate' => 'Invoicedate',
			'termtitle' => 'Termtitle',
			'previousinvoiceamount' => 'Previousinvoiceamount',
			'previousamount' => 'Previousamount',
			'duedate' => 'Duedate',
			'adjustedamount' => 'Adjustedamount',
			'totalamount' => 'Totalamount',
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

		$criteria->compare('feereceiptID',$this->feereceiptID);
		$criteria->compare('adminno',$this->adminno,true);
		$criteria->compare('classroom',$this->classroom,true);
		$criteria->compare('invoicedate',$this->invoicedate,true);
		$criteria->compare('termtitle',$this->termtitle,true);
		$criteria->compare('previousinvoiceamount',$this->previousinvoiceamount,true);
		$criteria->compare('previousamount',$this->previousamount,true);
		$criteria->compare('duedate',$this->duedate,true);
		$criteria->compare('adjustedamount',$this->adjustedamount,true);
		$criteria->compare('totalamount',$this->totalamount,true);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}