<?php
/* @var $this StudentsubjectplanController */
/* @var $model Studentsubjectplan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'studentsubjectplan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'academicyear'); ?>
		<?php echo $form->textField($model,'academicyear',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'academicyear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adminno'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'adminno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified'); ?>
		<?php echo $form->error($model,'datemodified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject1'); ?>
		<?php echo $form->textField($model,'subject1',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject2'); ?>
		<?php echo $form->textField($model,'subject2',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject3'); ?>
		<?php echo $form->textField($model,'subject3',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject4'); ?>
		<?php echo $form->textField($model,'subject4',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject5'); ?>
		<?php echo $form->textField($model,'subject5',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject6'); ?>
		<?php echo $form->textField($model,'subject6',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject7'); ?>
		<?php echo $form->textField($model,'subject7',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject7'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subjec8'); ?>
		<?php echo $form->textField($model,'subjec8',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subjec8'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject9'); ?>
		<?php echo $form->textField($model,'subject9',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject9'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject10'); ?>
		<?php echo $form->textField($model,'subject10',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject11'); ?>
		<?php echo $form->textField($model,'subject11',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject11'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject12'); ?>
		<?php echo $form->textField($model,'subject12',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject12'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject13'); ?>
		<?php echo $form->textField($model,'subject13',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject13'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject14'); ?>
		<?php echo $form->textField($model,'subject14',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject14'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->