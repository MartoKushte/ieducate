<?php
/* @var $this FeedbackareaController */
/* @var $model Feedbackarea */

$this->breadcrumbs=array(
	'Feedbackareas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feedback', 'url'=>array('index')),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>Give us your feedback</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>