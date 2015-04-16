<?php
/* @var $this BankaccountsController */
/* @var $model Bankaccounts */

$this->breadcrumbs=array(
	'Bankaccounts'=>array('index'),
	$model->bankID,
);

$this->menu=array(
	array('label'=>'List Bankaccounts', 'url'=>array('index')),
	array('label'=>'Create Bankaccounts', 'url'=>array('create')),
	array('label'=>'Update Bankaccounts', 'url'=>array('update', 'id'=>$model->bankID)),
	array('label'=>'Delete Bankaccounts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bankID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bankaccounts', 'url'=>array('admin')),
);
?>

<h1>View Bankaccount #<?php echo $model->bankID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bankID',
		'bank_name',
		'branch',
		'account_name',
		'account_number',
	),
)); ?>
