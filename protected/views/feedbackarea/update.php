<?php
/* @var $this FeedbackareaController */
/* @var $model Feedbackarea */

$this->breadcrumbs=array(
	'Feedbackareas'=>array('index'),
	$model->Title=>array('view','id'=>$model->feedbackID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feedbackarea', 'url'=>array('index')),
	array('label'=>'Create Feedbackarea', 'url'=>array('create')),
	array('label'=>'View Feedbackarea', 'url'=>array('view', 'id'=>$model->feedbackID)),
	array('label'=>'Manage Feedbackarea', 'url'=>array('admin')),
);
?>

<h1>Update Feedbackarea <?php echo $model->feedbackID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>