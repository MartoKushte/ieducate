<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */

$this->breadcrumbs=array(
	'Studentreceipts'=>array('index'),
	$model->idstudentreceipt,
);

$this->menu=array(
	array('label'=>'List Studentreceipt', 'url'=>array('index')),
	array('label'=>'Create Studentreceipt', 'url'=>array('create')),
	array('label'=>'Update Studentreceipt', 'url'=>array('update', 'id'=>$model->idstudentreceipt)),
	array('label'=>'Delete Studentreceipt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idstudentreceipt),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Studentreceipt', 'url'=>array('admin')),
);
?>

<h1>View Studentreceipt #<?php echo $model->idstudentreceipt; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idstudentreceipt',
		'adminno',
		'year',
		'class',
		'datepaid',
		'term',
		'firstname',
		'othernames',
		'surname',
		'forebalance',
		'schoolfees',
		'registration',
		'transport',
		'interviewfee',
		'uniforms',
		'holidayclasses',
		'triporexcursion',
		'medical',
		'others',
		'postbalance',
		'totalpaid',
		'paymentmode',
		'notes',
	),
)); ?>
