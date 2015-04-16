<?php
/* @var $this FeedbackareaController */
/* @var $data Feedbackarea */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feedbackID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feedbackID), array('view', 'id'=>$data->feedbackID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />


</div>