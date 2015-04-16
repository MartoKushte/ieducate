<?php
/* @var $this AppointmentController */
/* @var $model Appointment */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'appointment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'staff ID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
		<?php echo $form->error($model,'staffID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'appointment date'); ?>
		<?php echo $form->textField($model,'appointmentdate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'appointmentdate'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'person name'); ?>
		<?php echo $form->textField($model,'personname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'personname'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textArea($model,'purpose',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'contact number'); ?>
		<?php echo $form->textField($model,'contactnumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contactnumber'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'08:00 / 17:00')); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->