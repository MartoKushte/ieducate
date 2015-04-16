<?php

/**
 * This is the model class for table "asset".
 *
 * The followings are the available columns in table 'asset':
 * @property integer $assetID
 * @property string $label
 * @property string $assettype
 * @property string $description
 * @property string $originalvalue
 * @property string $currentvalue
 * @property string $accessiondate
 * @property integer $quantity
 * @property integer $departmentcode
 */
class Asset extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Asset the static model class
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
		return 'asset';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('label, assettype, currentvalue, accessiondate, quantity, departmentcode', 'required'),
			array('quantity, departmentcode', 'numerical', 'integerOnly'=>true),
			array('label, assettype', 'length', 'max'=>50),
			array('originalvalue, currentvalue', 'length', 'max'=>20),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('assetID, label, assettype, description, originalvalue, currentvalue, accessiondate, quantity, departmentcode', 'safe', 'on'=>'search'),
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
			'assetID' => 'Asset',
			'label' => 'Label',
			'assettype' => 'Assettype',
			'description' => 'Description',
			'originalvalue' => 'Originalvalue',
			'currentvalue' => 'Currentvalue',
			'accessiondate' => 'Accessiondate',
			'quantity' => 'Quantity',
			'departmentcode' => 'Departmentcode',
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

		$criteria->compare('assetID',$this->assetID);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('assettype',$this->assettype,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('originalvalue',$this->originalvalue,true);
		$criteria->compare('currentvalue',$this->currentvalue,true);
		$criteria->compare('accessiondate',$this->accessiondate,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('departmentcode',$this->departmentcode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}