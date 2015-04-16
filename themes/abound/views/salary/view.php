<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	$model->idsalary,
);

$this->menu=array(
	array('label'=>'List Salary records', 'url'=>array('index')),
	array('label'=>'Create Salary records', 'url'=>array('create')),
	array('label'=>'Update Salary records', 'url'=>array('update', 'id'=>$model->idsalary)),
	array('label'=>'Delete Salary records', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idsalary),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salary', 'url'=>array('admin')),
);
?>

<h1>View Salary entry#<?php echo $model->idsalary; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idsalary',
		'staffid',
		'krapin',
		'firstname',
		'othernames',
		'surname',
		'nationalid',
		'employeeposition',
		'month',
		'year',
		'bankname',
		'bankbranch',
		'accountname',
		'accountnumber',
		'amount',
		'ispaid',
	),
)); ?>
