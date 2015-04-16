<?php
/* @var $this BankaccountsController */
/* @var $model Bankaccounts */

$this->breadcrumbs=array(
	'Bankaccounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bankaccounts', 'url'=>array('index')),
	array('label'=>'Manage Bankaccounts', 'url'=>array('admin')),
);
?>

<h1>Create Bankaccounts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>