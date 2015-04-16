<?php

/**
 * This is the model class for table "financialyear".
 *
 * The followings are the available columns in table 'financialyear':
 * @property integer $financialyearID
 * @property string $datefrom
 * @property string $dateto
 * @property string $isactive
 * @property string $dateadded
 */
class Financialyear extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Financialyear the static model class
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
		return 'financialyear';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('isactive', 'length', 'max'=>3),
			array('datefrom, dateto, dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('financialyearID, datefrom, dateto, isactive, dateadded', 'safe', 'on'=>'search'),
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
			'financialyearID' => 'Financialyear',
			'datefrom' => 'Datefrom',
			'dateto' => 'Dateto',
			'isactive' => 'Isactive',
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

		$criteria->compare('financialyearID',$this->financialyearID);
		$criteria->compare('datefrom',$this->datefrom,true);
		$criteria->compare('dateto',$this->dateto,true);
		$criteria->compare('isactive',$this->isactive,true);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}