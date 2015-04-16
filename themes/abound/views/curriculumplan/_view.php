<?php
/* @var $this CurriculumplanController */
/* @var $data Curriculumplan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('curriculumplanID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->curriculumplanID), array('view', 'id'=>$data->curriculumplanID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curriculumID')); ?>:</b>
	<?php echo CHtml::encode($data->curriculumID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bookID')); ?>:</b>
	<?php echo CHtml::encode($data->bookID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('planmonth')); ?>:</b>
	<?php echo CHtml::encode($data->planmonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic')); ?>:</b>
	<?php echo CHtml::encode($data->topic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtopic')); ?>:</b>
	<?php echo CHtml::encode($data->subtopic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity')); ?>:</b>
	<?php echo CHtml::encode($data->activity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('iscompleted')); ?>:</b>
	<?php echo CHtml::encode($data->iscompleted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	*/ ?>

</div>