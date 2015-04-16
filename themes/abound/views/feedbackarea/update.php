<?php
/* @var $this FeedbackareaController */
/* @var $model Feedbackarea */

$this->breadcrumbs=array(
	'Feedbackareas'=>array('index'),
	$model->Title=>array('view','id'=>$model->feedbackID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feedback', 'url'=>array('index')),
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'View Feedback', 'url'=>array('view', 'id'=>$model->feedbackID)),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>Update Feedback<?php echo $model->feedbackID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>