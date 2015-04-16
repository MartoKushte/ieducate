<?php
/* @var $this StudentreceiptController */
/* @var $data Studentreceipt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstudentreceipt')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstudentreceipt), array('view', 'id'=>$data->idstudentreceipt)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminno')); ?>:</b>
	<?php echo CHtml::encode($data->adminno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class')); ?>:</b>
	<?php echo CHtml::encode($data->class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datepaid')); ?>:</b>
	<?php echo CHtml::encode($data->datepaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('term')); ?>:</b>
	<?php echo CHtml::encode($data->term); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('othernames')); ?>:</b>
	<?php echo CHtml::encode($data->othernames); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forebalance')); ?>:</b>
	<?php echo CHtml::encode($data->forebalance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolfees')); ?>:</b>
	<?php echo CHtml::encode($data->schoolfees); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration')); ?>:</b>
	<?php echo CHtml::encode($data->registration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transport')); ?>:</b>
	<?php echo CHtml::encode($data->transport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interviewfee')); ?>:</b>
	<?php echo CHtml::encode($data->interviewfee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uniforms')); ?>:</b>
	<?php echo CHtml::encode($data->uniforms); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('holidayclasses')); ?>:</b>
	<?php echo CHtml::encode($data->holidayclasses); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('triporexcursion')); ?>:</b>
	<?php echo CHtml::encode($data->triporexcursion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medical')); ?>:</b>
	<?php echo CHtml::encode($data->medical); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('others')); ?>:</b>
	<?php echo CHtml::encode($data->others); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postbalance')); ?>:</b>
	<?php echo CHtml::encode($data->postbalance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalpaid')); ?>:</b>
	<?php echo CHtml::encode($data->totalpaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentmode')); ?>:</b>
	<?php echo CHtml::encode($data->paymentmode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>