<?php
/* @var $this HostelsController */
/* @var $model Hostels */

$this->breadcrumbs=array(
	'Hostels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hostels', 'url'=>array('index')),
	array('label'=>'Manage Hostels', 'url'=>array('admin')),
);
?>

<h1>Create Hostels</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>