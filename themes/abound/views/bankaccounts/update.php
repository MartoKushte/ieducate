<?php
/* @var $this BankaccountsController */
/* @var $model Bankaccounts */

$this->breadcrumbs=array(
	'Bankaccounts'=>array('index'),
	$model->bankID=>array('view','id'=>$model->bankID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bankaccounts', 'url'=>array('index')),
	array('label'=>'Create Bankaccounts', 'url'=>array('create')),
	array('label'=>'View Bankaccounts', 'url'=>array('view', 'id'=>$model->bankID)),
	array('label'=>'Manage Bankaccounts', 'url'=>array('admin')),
);
?>

<h1>Update Bankaccount <?php echo $model->bankID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>