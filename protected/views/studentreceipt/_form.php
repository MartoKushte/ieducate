<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'studentreceipt-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'adminno'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'adminno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'class'); ?>
		<?php echo $form->textField($model,'class',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datepaid'); ?>
		<?php echo $form->textField($model,'datepaid'); ?>
		<?php echo $form->error($model,'datepaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'term'); ?>
		<?php echo $form->textField($model,'term',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'term'); ?>
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
		<?php echo $form->labelEx($model,'forebalance'); ?>
		<?php echo $form->textField($model,'forebalance'); ?>
		<?php echo $form->error($model,'forebalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'schoolfees'); ?>
		<?php echo $form->textField($model,'schoolfees'); ?>
		<?php echo $form->error($model,'schoolfees'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registration'); ?>
		<?php echo $form->textField($model,'registration'); ?>
		<?php echo $form->error($model,'registration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transport'); ?>
		<?php echo $form->textField($model,'transport'); ?>
		<?php echo $form->error($model,'transport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interviewfee'); ?>
		<?php echo $form->textField($model,'interviewfee'); ?>
		<?php echo $form->error($model,'interviewfee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uniforms'); ?>
		<?php echo $form->textField($model,'uniforms'); ?>
		<?php echo $form->error($model,'uniforms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'holidayclasses'); ?>
		<?php echo $form->textField($model,'holidayclasses'); ?>
		<?php echo $form->error($model,'holidayclasses'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'triporexcursion'); ?>
		<?php echo $form->textField($model,'triporexcursion'); ?>
		<?php echo $form->error($model,'triporexcursion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medical'); ?>
		<?php echo $form->textField($model,'medical'); ?>
		<?php echo $form->error($model,'medical'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'others'); ?>
		<?php echo $form->textField($model,'others'); ?>
		<?php echo $form->error($model,'others'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postbalance'); ?>
		<?php echo $form->textField($model,'postbalance'); ?>
		<?php echo $form->error($model,'postbalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalpaid'); ?>
		<?php echo $form->textField($model,'totalpaid'); ?>
		<?php echo $form->error($model,'totalpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentmode'); ?>
		<?php echo $form->textField($model,'paymentmode',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'paymentmode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->