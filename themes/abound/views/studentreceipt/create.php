<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */

$this->breadcrumbs=array(
	'Studentreceipts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Student receipt', 'url'=>array('index')),
	array('label'=>'Manage Student receipt', 'url'=>array('admin')),
);
?>

<h1>Create Student receipt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>