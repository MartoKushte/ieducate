<?php
/* @var $this ExpenditureController */
/* @var $model Expenditure */

$this->breadcrumbs=array(
	'Expenditures'=>array('index'),
	$model->idexpenditure,
);

$this->menu=array(
	array('label'=>'List Expenditure records', 'url'=>array('index')),
	array('label'=>'Create Expenditure records', 'url'=>array('create')),
	array('label'=>'Update Expenditure records', 'url'=>array('update', 'id'=>$model->idexpenditure)),
	array('label'=>'Delete Expenditure records', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idexpenditure),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Expenditure', 'url'=>array('admin')),
);
?>

<h1>View Expenditure record #<?php echo $model->idexpenditure; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idexpenditure',
		'receiptno',
		'staffid',
		'purpose',
		'date',
		'amount',
	),
)); ?>
