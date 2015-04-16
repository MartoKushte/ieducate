<?php
/* @var $this BankaccountsController */
/* @var $data Bankaccounts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bankID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bankID), array('view', 'id'=>$data->bankID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank_name')); ?>:</b>
	<?php echo CHtml::encode($data->bank_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch')); ?>:</b>
	<?php echo CHtml::encode($data->branch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_name')); ?>:</b>
	<?php echo CHtml::encode($data->account_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_number')); ?>:</b>
	<?php echo CHtml::encode($data->account_number); ?>
	<br />


</div>