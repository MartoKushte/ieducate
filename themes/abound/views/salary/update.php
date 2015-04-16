<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	$model->idsalary=>array('view','id'=>$model->idsalary),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salary records', 'url'=>array('index')),
	array('label'=>'Create Salary records', 'url'=>array('create')),
	array('label'=>'View Salary records', 'url'=>array('view', 'id'=>$model->idsalary)),
	array('label'=>'Manage Salary records', 'url'=>array('admin')),
);
?>

<h1>Update Salary <?php echo $model->idsalary; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>