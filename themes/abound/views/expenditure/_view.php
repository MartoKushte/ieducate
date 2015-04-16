<?php
/* @var $this ExpenditureController */
/* @var $data Expenditure */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idexpenditure')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idexpenditure), array('view', 'id'=>$data->idexpenditure)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receiptno')); ?>:</b>
	<?php echo CHtml::encode($data->receiptno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffid')); ?>:</b>
	<?php echo CHtml::encode($data->staffid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purpose')); ?>:</b>
	<?php echo CHtml::encode($data->purpose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />


</div>