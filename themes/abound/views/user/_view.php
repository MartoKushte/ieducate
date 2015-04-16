<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userID), array('view', 'id'=>$data->userID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userrole')); ?>:</b>
	<?php echo CHtml::encode($data->userrole); ?>
	<br />


</div>