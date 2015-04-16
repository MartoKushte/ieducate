<?php
/* @var $this AcademicsessionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Academicsessions',
);

$this->menu=array(
	array('label'=>'Create Academic session', 'url'=>array('create')),
	array('label'=>'Manage Academic session', 'url'=>array('admin')),
);
?>

<h1>Academicsessions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
