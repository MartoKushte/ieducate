<?php
/* @var $this ExpenditureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expenditures',
);

$this->menu=array(
	array('label'=>'Create Expenditure records', 'url'=>array('create')),
	array('label'=>'Manage Expenditure records', 'url'=>array('admin')),
);
?>

<h1>Expenditure records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
