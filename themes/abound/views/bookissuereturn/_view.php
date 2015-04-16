<?php
/* @var $this BookissuereturnController */
/* @var $data Bookissuereturn */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('bookID')); ?>:</b>
	<?php echo CHtml::encode($data->bookID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::encode($data->personID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateissue')); ?>:</b>
	<?php echo CHtml::encode($data->dateissue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datereturn')); ?>:</b>
	<?php echo CHtml::encode($data->datereturn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duedate')); ?>:</b>
	<?php echo CHtml::encode($data->duedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issuedby')); ?>:</b>
	<?php echo CHtml::encode($data->issuedby); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fine')); ?>:</b>
	<?php echo CHtml::encode($data->fine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isfinepaid')); ?>:</b>
	<?php echo CHtml::encode($data->isfinepaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	*/ ?>

</div>