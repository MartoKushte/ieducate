<?php
/* @var $this AppointmentController */
/* @var $model Appointment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'appointment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
		<?php echo $form->error($model,'staffID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'appointmentdate'); ?>
		<?php echo $form->textField($model,'appointmentdate'); ?>
		<?php echo $form->error($model,'appointmentdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personname'); ?>
		<?php echo $form->textField($model,'personname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'personname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textArea($model,'purpose',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactnumber'); ?>
		<?php echo $form->textField($model,'contactnumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contactnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->