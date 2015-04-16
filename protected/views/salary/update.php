<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	$model->idsalary=>array('view','id'=>$model->idsalary),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salary', 'url'=>array('index')),
	array('label'=>'Create Salary', 'url'=>array('create')),
	array('label'=>'View Salary', 'url'=>array('view', 'id'=>$model->idsalary)),
	array('label'=>'Manage Salary', 'url'=>array('admin')),
);
?>

<h1>Update Salary <?php echo $model->idsalary; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>