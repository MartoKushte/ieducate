<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salary records', 'url'=>array('index')),
	array('label'=>'Manage Salary records', 'url'=>array('admin')),
);
?>

<h1>Add new salary record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>