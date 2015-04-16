<?php

/**
 * This is the model class for table "bookissuereturn".
 *
 * The followings are the available columns in table 'bookissuereturn':
 * @property integer $bookissuereturnID
 * @property string $bookID
 * @property string $personID
 * @property string $dateissue
 * @property string $datereturn
 * @property string $duedate
 * @property string $issuedby
 * @property integer $fine
 * @property string $isfinepaid
 * @property string $dateadded
 * @property string $datemodified
 */
class Bookissuereturn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bookissuereturn the static model class
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
		return 'bookissuereturn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bookID, personID, dateissue, datereturn, duedate, dateadded, datemodified', 'required'),
			array('fine', 'numerical', 'integerOnly'=>true),
			array('bookID', 'length', 'max'=>75),
			array('personID', 'length', 'max'=>44),
			array('issuedby', 'length', 'max'=>100),
			array('isfinepaid', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bookissuereturnID, bookID, personID, dateissue, datereturn, duedate, issuedby, fine, isfinepaid, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'bookissuereturnID' => 'Bookissuereturn',
			'bookID' => 'Book',
			'personID' => 'Person',
			'dateissue' => 'Dateissue',
			'datereturn' => 'Datereturn',
			'duedate' => 'Duedate',
			'issuedby' => 'Issuedby',
			'fine' => 'Fine',
			'isfinepaid' => 'Isfinepaid',
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

		$criteria->compare('bookissuereturnID',$this->bookissuereturnID);
		$criteria->compare('bookID',$this->bookID,true);
		$criteria->compare('personID',$this->personID,true);
		$criteria->compare('dateissue',$this->dateissue,true);
		$criteria->compare('datereturn',$this->datereturn,true);
		$criteria->compare('duedate',$this->duedate,true);
		$criteria->compare('issuedby',$this->issuedby,true);
		$criteria->compare('fine',$this->fine);
		$criteria->compare('isfinepaid',$this->isfinepaid,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}