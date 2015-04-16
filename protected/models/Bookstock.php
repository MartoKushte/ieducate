<?php

/**
 * This is the model class for table "bookstock".
 *
 * The followings are the available columns in table 'bookstock':
 * @property integer $bookstockID
 * @property string $vendor
 * @property string $bookID
 * @property string $barcodevalue
 * @property string $bookposition
 * @property string $purchasedate
 * @property string $purchasedby
 * @property string $instock
 * @property string $isreference
 * @property string $reason
 * @property string $dateadded
 * @property string $datemodified
 */
class Bookstock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bookstock the static model class
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
		return 'bookstock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vendor, bookID', 'length', 'max'=>75),
			array('barcodevalue, bookposition, purchasedby', 'length', 'max'=>50),
			array('instock, isreference', 'length', 'max'=>3),
			array('purchasedate, reason, dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bookstockID, vendor, bookID, barcodevalue, bookposition, purchasedate, purchasedby, instock, isreference, reason, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'bookstockID' => 'Bookstock',
			'vendor' => 'Vendor',
			'bookID' => 'Book',
			'barcodevalue' => 'Barcodevalue',
			'bookposition' => 'Bookposition',
			'purchasedate' => 'Purchasedate',
			'purchasedby' => 'Purchasedby',
			'instock' => 'Instock',
			'isreference' => 'Isreference',
			'reason' => 'Reason',
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

		$criteria->compare('bookstockID',$this->bookstockID);
		$criteria->compare('vendor',$this->vendor,true);
		$criteria->compare('bookID',$this->bookID,true);
		$criteria->compare('barcodevalue',$this->barcodevalue,true);
		$criteria->compare('bookposition',$this->bookposition,true);
		$criteria->compare('purchasedate',$this->purchasedate,true);
		$criteria->compare('purchasedby',$this->purchasedby,true);
		$criteria->compare('instock',$this->instock,true);
		$criteria->compare('isreference',$this->isreference,true);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}