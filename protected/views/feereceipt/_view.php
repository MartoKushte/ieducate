<?php
/* @var $this FeereceiptController */
/* @var $data Feereceipt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feereceiptID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feereceiptID), array('view', 'id'=>$data->feereceiptID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminno')); ?>:</b>
	<?php echo CHtml::encode($data->adminno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classroom')); ?>:</b>
	<?php echo CHtml::encode($data->classroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoicedate')); ?>:</b>
	<?php echo CHtml::encode($data->invoicedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('termtitle')); ?>:</b>
	<?php echo CHtml::encode($data->termtitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previousinvoiceamount')); ?>:</b>
	<?php echo CHtml::encode($data->previousinvoiceamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previousamount')); ?>:</b>
	<?php echo CHtml::encode($data->previousamount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('duedate')); ?>:</b>
	<?php echo CHtml::encode($data->duedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adjustedamount')); ?>:</b>
	<?php echo CHtml::encode($data->adjustedamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalamount')); ?>:</b>
	<?php echo CHtml::encode($data->totalamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	*/ ?>

</div>