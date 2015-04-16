<?php
/* @var $this FeestructureController */
/* @var $data Feestructure */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feestructureID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feestructureID), array('view', 'id'=>$data->feestructureID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />


</div>