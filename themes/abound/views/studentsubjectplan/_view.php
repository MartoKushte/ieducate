<?php
/* @var $this StudentsubjectplanController */
/* @var $data Studentsubjectplan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectplanID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->subjectplanID), array('view', 'id'=>$data->subjectplanID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academicyear')); ?>:</b>
	<?php echo CHtml::encode($data->academicyear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminno')); ?>:</b>
	<?php echo CHtml::encode($data->adminno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject1')); ?>:</b>
	<?php echo CHtml::encode($data->subject1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject2')); ?>:</b>
	<?php echo CHtml::encode($data->subject2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('subject3')); ?>:</b>
	<?php echo CHtml::encode($data->subject3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject4')); ?>:</b>
	<?php echo CHtml::encode($data->subject4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject5')); ?>:</b>
	<?php echo CHtml::encode($data->subject5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject6')); ?>:</b>
	<?php echo CHtml::encode($data->subject6); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject7')); ?>:</b>
	<?php echo CHtml::encode($data->subject7); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjec8')); ?>:</b>
	<?php echo CHtml::encode($data->subjec8); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject9')); ?>:</b>
	<?php echo CHtml::encode($data->subject9); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject10')); ?>:</b>
	<?php echo CHtml::encode($data->subject10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject11')); ?>:</b>
	<?php echo CHtml::encode($data->subject11); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject12')); ?>:</b>
	<?php echo CHtml::encode($data->subject12); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject13')); ?>:</b>
	<?php echo CHtml::encode($data->subject13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject14')); ?>:</b>
	<?php echo CHtml::encode($data->subject14); ?>
	<br />

	*/ ?>

</div>