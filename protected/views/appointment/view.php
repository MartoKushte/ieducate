<?php
/* @var $this AppointmentController */
/* @var $model Appointment */

$this->breadcrumbs=array(
	'Appointments'=>array('index'),
	$model->appointmentID,
);

$this->menu=array(
	array('label'=>'List Appointment', 'url'=>array('index')),
	array('label'=>'Create Appointment', 'url'=>array('create')),
	array('label'=>'Update Appointment', 'url'=>array('update', 'id'=>$model->appointmentID)),
	array('label'=>'Delete Appointment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->appointmentID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Appointment', 'url'=>array('admin')),
);
?>

<h1>View Appointment #<?php echo $model->appointmentID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'appointmentID',
		'staffID',
		'appointmentdate',
		'personname',
		'purpose',
		'contactnumber',
		'time',
	),
)); ?>
