<?php
/* @var $this HostelsController */
/* @var $model Hostels */

$this->breadcrumbs=array(
	'Hostels'=>array('index'),
	$model->hostelID,
);

$this->menu=array(
	array('label'=>'List Hostels', 'url'=>array('index')),
	array('label'=>'Create Hostels', 'url'=>array('create')),
	array('label'=>'Update Hostels', 'url'=>array('update', 'id'=>$model->hostelID)),
	array('label'=>'Delete Hostels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->hostelID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hostels', 'url'=>array('admin')),
);
?>

<h1>View Hostels #<?php echo $model->hostelID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'hostelID',
		'hostelname',
		'beds',
	),
)); ?>
