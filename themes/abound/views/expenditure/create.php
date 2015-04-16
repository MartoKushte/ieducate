<?php
/* @var $this ExpenditureController */
/* @var $model Expenditure */

$this->breadcrumbs=array(
	'Expenditures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Expenditure records', 'url'=>array('index')),
	array('label'=>'Manage Expenditure records', 'url'=>array('admin')),
);
?>

<h1>Add new Expenditure record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>