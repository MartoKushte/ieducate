<?php
/* @var $this AppointmentController */
/* @var $data Appointment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('appointmentID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->appointmentID), array('view', 'id'=>$data->appointmentID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffID')); ?>:</b>
	<?php echo CHtml::encode($data->staffID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('appointmentdate')); ?>:</b>
	<?php echo CHtml::encode($data->appointmentdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personname')); ?>:</b>
	<?php echo CHtml::encode($data->personname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purpose')); ?>:</b>
	<?php echo CHtml::encode($data->purpose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactnumber')); ?>:</b>
	<?php echo CHtml::encode($data->contactnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />


</div>