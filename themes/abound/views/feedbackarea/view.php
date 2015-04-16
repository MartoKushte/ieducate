<?php
/* @var $this FeedbackareaController */
/* @var $model Feedbackarea */

$this->breadcrumbs=array(
	'Feedbackareas'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Feedback', 'url'=>array('index')),
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'Update Feedback', 'url'=>array('update', 'id'=>$model->feedbackID)),
	array('label'=>'Delete Feedback', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feedbackID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>Feedback #<?php echo $model->feedbackID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feedbackID',
		'Title',
		'Description',
	),
)); ?>
