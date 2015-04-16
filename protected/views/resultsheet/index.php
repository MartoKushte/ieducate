<?php
/* @var $this ResultsheetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Resultsheets',
);

$this->menu=array(
	array('label'=>'Create Resultsheet', 'url'=>array('create')),
	array('label'=>'Manage Resultsheet', 'url'=>array('admin')),
);
?>

<h1>Resultsheets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
