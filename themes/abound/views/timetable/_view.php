<?php
/* @var $this TimetableController */
/* @var $data Timetable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('timetableID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->timetableID), array('view', 'id'=>$data->timetableID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academic_year')); ?>:</b>
	<?php echo CHtml::encode($data->academic_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classroom')); ?>:</b>
	<?php echo CHtml::encode($data->classroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffID')); ?>:</b>
	<?php echo CHtml::encode($data->staffID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodID')); ?>:</b>
	<?php echo CHtml::encode($data->periodID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	*/ ?>

</div>