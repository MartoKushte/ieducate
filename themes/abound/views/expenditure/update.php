<?php
/* @var $this ExpenditureController */
/* @var $model Expenditure */

$this->breadcrumbs=array(
	'Expenditures'=>array('index'),
	$model->idexpenditure=>array('view','id'=>$model->idexpenditure),
	'Update',
);

$this->menu=array(
	array('label'=>'List Expenditure records', 'url'=>array('index')),
	array('label'=>'Create Expenditure records', 'url'=>array('create')),
	array('label'=>'View Expenditure records', 'url'=>array('view', 'id'=>$model->idexpenditure)),
	array('label'=>'Manage Expenditure records', 'url'=>array('admin')),
);
?>

<h1>Update Expenditure <?php echo $model->idexpenditure; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>