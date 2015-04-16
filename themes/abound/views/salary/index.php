<?php
/* @var $this SalaryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salaries',
);

$this->menu=array(
	array('label'=>'Create Salary record', 'url'=>array('create')),
	array('label'=>'Manage Salary records', 'url'=>array('admin')),
);
?>

<h1>Salary portal</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
