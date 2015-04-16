<?php
/* @var $this FeepaymentController */
/* @var $model Feepayment */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feepayment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'fee receiptID'); ?>
		<?php echo $form->textField($model,'feereceiptID'); ?>
		<?php echo $form->error($model,'feereceiptID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'financial year'); ?>
		<?php echo $form->textField($model,'financialyear',array('size'=>44,'maxlength'=>44,'encode'=>false,'value'=>'','placeholder'=>'2014')); ?>
		<?php echo $form->error($model,'financialyear'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'payment date'); ?>
		<?php echo $form->textField($model,'paymentdate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'paymentdate'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'payment mode'); ?>
		<?php echo $form->textField($model,'paymentmode',array('size'=>12,'maxlength'=>12,'encode'=>false,'value'=>'','placeholder'=>'cheque,cash,mpesa,airtel money,cash deposit')); ?>
		<?php echo $form->error($model,'paymentmode'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'paid amount'); ?>
		<?php echo $form->textField($model,'paidamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'paidamount'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'adjusted amount'); ?>
		<?php echo $form->textField($model,'adjustedamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'adjustedamount'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'cheque date'); ?>
		<?php echo $form->textField($model,'chequedate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'chequedate'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'cheque number'); ?>
		<?php echo $form->textField($model,'chequenumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'chequenumber'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'bank branch'); ?>
		<?php echo $form->textField($model,'bankbranch',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bankbranch'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'date added'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->