<?php
/* @var $this BankaccountsController */
/* @var $model Bankaccounts */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bankaccounts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'Bank'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>108)); ?>
		<?php echo $form->error($model,'bank_name'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'branch'); ?>
		<?php echo $form->textField($model,'branch',array('size'=>60,'maxlength'=>108)); ?>
		<?php echo $form->error($model,'branch'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'account name'); ?>
		<?php echo $form->textField($model,'account_name',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'account_name'); ?>
	</div>
</div>
	<div class="row">
		<?php echo $form->labelEx($model,'account number'); ?>
		<?php echo $form->textField($model,'account_number'); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>

	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->