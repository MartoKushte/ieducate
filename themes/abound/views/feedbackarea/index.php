<?php
/* @var $this FeedbackareaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feedbackareas',
);

$this->menu=array(
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>Feedback</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
