<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */

$this->breadcrumbs=array(
	'Studentreceipts'=>array('index'),
	$model->idstudentreceipt=>array('view','id'=>$model->idstudentreceipt),
	'Update',
);

$this->menu=array(
	array('label'=>'List Studentreceipt', 'url'=>array('index')),
	array('label'=>'Create Studentreceipt', 'url'=>array('create')),
	array('label'=>'View Studentreceipt', 'url'=>array('view', 'id'=>$model->idstudentreceipt)),
	array('label'=>'Manage Studentreceipt', 'url'=>array('admin')),
);
?>

<h1>Update Studentreceipt <?php echo $model->idstudentreceipt; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>