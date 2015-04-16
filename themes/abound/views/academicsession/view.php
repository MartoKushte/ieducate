<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	$model->academicsessionID,
);

$this->menu=array(
	array('label'=>'List Academic session', 'url'=>array('index')),
	array('label'=>'Create Academic session', 'url'=>array('create')),
	array('label'=>'Update Academic session', 'url'=>array('update', 'id'=>$model->academicsessionID)),
	array('label'=>'Delete Academic session', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->academicsessionID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Academic session', 'url'=>array('admin')),
);
?>

<h1>View Academicsession #<?php echo $model->academicsessionID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'academicsessionID',
		'sessionyear',
		'sessionopendate',
		'sessionclosedate',
		'sessionstatus',
		'dateadded',
	),
)); ?>
