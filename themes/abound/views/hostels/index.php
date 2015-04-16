<?php
/* @var $this HostelsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hostels',
);

$this->menu=array(
	array('label'=>'Create Hostels', 'url'=>array('create')),
	array('label'=>'Manage Hostels', 'url'=>array('admin')),
);
?>

<h1>Hostels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
