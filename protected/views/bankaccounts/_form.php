<?php
/* @var $this BankaccountsController */
/* @var $model Bankaccounts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bankaccounts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>108)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branch'); ?>
		<?php echo $form->textField($model,'branch',array('size'=>60,'maxlength'=>108)); ?>
		<?php echo $form->error($model,'branch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_name'); ?>
		<?php echo $form->textField($model,'account_name',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'account_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number'); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->