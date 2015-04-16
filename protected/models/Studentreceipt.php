<?php

/**
 * This is the model class for table "studentreceipt".
 *
 * The followings are the available columns in table 'studentreceipt':
 * @property integer $idstudentreceipt
 * @property string $adminno
 * @property integer $year
 * @property string $class
 * @property string $datepaid
 * @property string $term
 * @property string $firstname
 * @property string $othernames
 * @property string $surname
 * @property integer $forebalance
 * @property integer $schoolfees
 * @property integer $registration
 * @property integer $transport
 * @property integer $interviewfee
 * @property integer $uniforms
 * @property integer $holidayclasses
 * @property integer $triporexcursion
 * @property integer $medical
 * @property integer $others
 * @property integer $postbalance
 * @property integer $totalpaid
 * @property string $paymentmode
 * @property string $notes
 */
class Studentreceipt extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Studentreceipt the static model class
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
		return 'studentreceipt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adminno, datepaid, term', 'required'),
			array('year, forebalance, schoolfees, registration, transport, interviewfee, uniforms, holidayclasses, triporexcursion, medical, others, postbalance, totalpaid', 'numerical', 'integerOnly'=>true),
			array('adminno, class, term, firstname, othernames, surname, paymentmode', 'length', 'max'=>45),
			array('notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idstudentreceipt, adminno, year, class, datepaid, term, firstname, othernames, surname, forebalance, schoolfees, registration, transport, interviewfee, uniforms, holidayclasses, triporexcursion, medical, others, postbalance, totalpaid, paymentmode, notes', 'safe', 'on'=>'search'),
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
			'idstudentreceipt' => 'Idstudentreceipt',
			'adminno' => 'Adminno',
			'year' => 'Year',
			'class' => 'Class',
			'datepaid' => 'Datepaid',
			'term' => 'Term',
			'firstname' => 'Firstname',
			'othernames' => 'Othernames',
			'surname' => 'Surname',
			'forebalance' => 'Forebalance',
			'schoolfees' => 'Schoolfees',
			'registration' => 'Registration',
			'transport' => 'Transport',
			'interviewfee' => 'Interviewfee',
			'uniforms' => 'Uniforms',
			'holidayclasses' => 'Holidayclasses',
			'triporexcursion' => 'Triporexcursion',
			'medical' => 'Medical',
			'others' => 'Others',
			'postbalance' => 'Postbalance',
			'totalpaid' => 'Totalpaid',
			'paymentmode' => 'Paymentmode',
			'notes' => 'Notes',
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

		$criteria->compare('idstudentreceipt',$this->idstudentreceipt);
		$criteria->compare('adminno',$this->adminno,true);
		$criteria->compare('year',$this->year);
		$criteria->compare('class',$this->class,true);
		$criteria->compare('datepaid',$this->datepaid,true);
		$criteria->compare('term',$this->term,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('othernames',$this->othernames,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('forebalance',$this->forebalance);
		$criteria->compare('schoolfees',$this->schoolfees);
		$criteria->compare('registration',$this->registration);
		$criteria->compare('transport',$this->transport);
		$criteria->compare('interviewfee',$this->interviewfee);
		$criteria->compare('uniforms',$this->uniforms);
		$criteria->compare('holidayclasses',$this->holidayclasses);
		$criteria->compare('triporexcursion',$this->triporexcursion);
		$criteria->compare('medical',$this->medical);
		$criteria->compare('others',$this->others);
		$criteria->compare('postbalance',$this->postbalance);
		$criteria->compare('totalpaid',$this->totalpaid);
		$criteria->compare('paymentmode',$this->paymentmode,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}