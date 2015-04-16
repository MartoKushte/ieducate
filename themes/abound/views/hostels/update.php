<?php
/* @var $this HostelsController */
/* @var $model Hostels */

$this->breadcrumbs=array(
	'Hostels'=>array('index'),
	$model->hostelID=>array('view','id'=>$model->hostelID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hostels', 'url'=>array('index')),
	array('label'=>'Create Hostels', 'url'=>array('create')),
	array('label'=>'View Hostels', 'url'=>array('view', 'id'=>$model->hostelID)),
	array('label'=>'Manage Hostels', 'url'=>array('admin')),
);
?>

<h1>Update Hostels <?php echo $model->hostelID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>