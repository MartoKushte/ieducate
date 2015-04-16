<?php
/* @var $this ExpenditureController */
/* @var $model Expenditure */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expenditure-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'receipt no'); ?>
		<?php echo $form->textField($model,'receiptno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'receiptno'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'staff id'); ?>
		<?php echo $form->textField($model,'staffid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'staffid'); ?>
	</div>
	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>
    <div>
	<div class="row">
 	<div class="span3">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

    <div class="span3 offset1">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textArea($model,'purpose',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>
</div>

	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->