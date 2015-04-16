<?php
/* @var $this FeedbackareaController */
/* @var $model Feedbackarea */

$this->breadcrumbs=array(
	'Feedbackareas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feedbackarea', 'url'=>array('index')),
	array('label'=>'Manage Feedbackarea', 'url'=>array('admin')),
);
?>

<h1>Create Feedbackarea</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>