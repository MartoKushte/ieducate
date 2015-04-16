<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */

$this->breadcrumbs=array(
	'Studentreceipts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Studentreceipt', 'url'=>array('index')),
	array('label'=>'Manage Studentreceipt', 'url'=>array('admin')),
);
?>

<h1>Create Studentreceipt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>