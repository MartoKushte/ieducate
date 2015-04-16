<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salary-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'staffid'); ?>
		<?php echo $form->textField($model,'staffid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'staffid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'krapin'); ?>
		<?php echo $form->textField($model,'krapin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'krapin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'othernames'); ?>
		<?php echo $form->textField($model,'othernames',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'othernames'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationalid'); ?>
		<?php echo $form->textField($model,'nationalid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nationalid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employeeposition'); ?>
		<?php echo $form->textField($model,'employeeposition',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employeeposition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'month'); ?>
		<?php echo $form->textField($model,'month',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bankname'); ?>
		<?php echo $form->textField($model,'bankname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bankname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bankbranch'); ?>
		<?php echo $form->textField($model,'bankbranch',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bankbranch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accountname'); ?>
		<?php echo $form->textField($model,'accountname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'accountname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accountnumber'); ?>
		<?php echo $form->textField($model,'accountnumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'accountnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ispaid'); ?>
		<?php echo $form->textField($model,'ispaid',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'ispaid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->