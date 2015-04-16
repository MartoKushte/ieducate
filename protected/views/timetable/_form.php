<?php
/* @var $this TimetableController */
/* @var $model Timetable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timetable-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'academic_year'); ?>
		<?php echo $form->textField($model,'academic_year',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'academic_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classroom'); ?>
		<?php echo $form->textField($model,'classroom',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'classroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
		<?php echo $form->error($model,'staffID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodID'); ?>
		<?php echo $form->textField($model,'periodID'); ?>
		<?php echo $form->error($model,'periodID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
		<?php echo $form->error($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->