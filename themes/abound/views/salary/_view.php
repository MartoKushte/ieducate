<?php
/* @var $this SalaryController */
/* @var $data Salary */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idsalary')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idsalary), array('view', 'id'=>$data->idsalary)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffid')); ?>:</b>
	<?php echo CHtml::encode($data->staffid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('krapin')); ?>:</b>
	<?php echo CHtml::encode($data->krapin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('othernames')); ?>:</b>
	<?php echo CHtml::encode($data->othernames); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationalid')); ?>:</b>
	<?php echo CHtml::encode($data->nationalid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeposition')); ?>:</b>
	<?php echo CHtml::encode($data->employeeposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month')); ?>:</b>
	<?php echo CHtml::encode($data->month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bankname')); ?>:</b>
	<?php echo CHtml::encode($data->bankname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bankbranch')); ?>:</b>
	<?php echo CHtml::encode($data->bankbranch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accountname')); ?>:</b>
	<?php echo CHtml::encode($data->accountname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accountnumber')); ?>:</b>
	<?php echo CHtml::encode($data->accountnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ispaid')); ?>:</b>
	<?php echo CHtml::encode($data->ispaid); ?>
	<br />

	*/ ?>

</div>