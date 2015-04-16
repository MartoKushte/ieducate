<?php
/* @var $this HostelsController */
/* @var $data Hostels */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('hostelID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->hostelID), array('view', 'id'=>$data->hostelID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hostelname')); ?>:</b>
	<?php echo CHtml::encode($data->hostelname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beds')); ?>:</b>
	<?php echo CHtml::encode($data->beds); ?>
	<br />


</div>