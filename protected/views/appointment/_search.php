<?php
/* @var $this AppointmentController */
/* @var $model Appointment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'appointmentID'); ?>
		<?php echo $form->textField($model,'appointmentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'appointmentdate'); ?>
		<?php echo $form->textField($model,'appointmentdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personname'); ?>
		<?php echo $form->textField($model,'personname',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purpose'); ?>
		<?php echo $form->textArea($model,'purpose',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contactnumber'); ?>
		<?php echo $form->textField($model,'contactnumber',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->