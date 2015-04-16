<?php
/* @var $this FeedbackareaController */
/* @var $model Feedbackarea */

$this->breadcrumbs=array(
	'Feedbackareas'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Feedbackarea', 'url'=>array('index')),
	array('label'=>'Create Feedbackarea', 'url'=>array('create')),
	array('label'=>'Update Feedbackarea', 'url'=>array('update', 'id'=>$model->feedbackID)),
	array('label'=>'Delete Feedbackarea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feedbackID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feedbackarea', 'url'=>array('admin')),
);
?>

<h1>View Feedbackarea #<?php echo $model->feedbackID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feedbackID',
		'Title',
		'Description',
	),
)); ?>
