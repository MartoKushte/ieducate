<?php
/* @var $this FeedbackareaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feedbackareas',
);

$this->menu=array(
	array('label'=>'Create Feedbackarea', 'url'=>array('create')),
	array('label'=>'Manage Feedbackarea', 'url'=>array('admin')),
);
?>

<h1>Feedbackareas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
