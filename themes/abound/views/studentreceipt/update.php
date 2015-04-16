<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */

$this->breadcrumbs=array(
	'Studentreceipts'=>array('index'),
	$model->idstudentreceipt=>array('view','id'=>$model->idstudentreceipt),
	'Update',
);

$this->menu=array(
	array('label'=>'List Student receipt', 'url'=>array('index')),
	array('label'=>'Create Student receipt', 'url'=>array('create')),
	array('label'=>'View Student receipt', 'url'=>array('view', 'id'=>$model->idstudentreceipt)),
	array('label'=>'Manage Student receipt', 'url'=>array('admin')),
);
?>

<h1>Update Student receipt <?php echo $model->idstudentreceipt; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>