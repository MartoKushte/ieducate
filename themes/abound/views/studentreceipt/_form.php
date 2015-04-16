<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'studentreceipt-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'admin no'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'adminno'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'class'); ?>
		<?php echo $form->textField($model,'class',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'class'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'date paid'); ?>
		<?php echo $form->textField($model,'datepaid'); ?>
		<?php echo $form->error($model,'datepaid'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'term'); ?>
		<?php echo $form->textField($model,'term',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'term'); ?>
	</div>
</div>
<div class="row">
	<div class="span3">
		<?php echo $form->labelEx($model,'first name'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>
    <div class="span3 offset1">
		<?php echo $form->labelEx($model,'other names'); ?>
		<?php echo $form->textField($model,'othernames',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'othernames'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>
</div>
<br />
<p class="text-info" style="font-size:16px"> Fee Details</p>
<br />
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'fore balance'); ?>
		<?php echo $form->textField($model,'forebalance'); ?>
		<?php echo $form->error($model,'forebalance'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'schoolfees'); ?>
		<?php echo $form->textField($model,'schoolfees'); ?>
		<?php echo $form->error($model,'schoolfees'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'registration'); ?>
		<?php echo $form->textField($model,'registration'); ?>
		<?php echo $form->error($model,'registration'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'transport'); ?>
		<?php echo $form->textField($model,'transport'); ?>
		<?php echo $form->error($model,'transport'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'interviewfee'); ?>
		<?php echo $form->textField($model,'interviewfee'); ?>
		<?php echo $form->error($model,'interviewfee'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'uniforms'); ?>
		<?php echo $form->textField($model,'uniforms'); ?>
		<?php echo $form->error($model,'uniforms'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'holiday classes'); ?>
		<?php echo $form->textField($model,'holidayclasses'); ?>
		<?php echo $form->error($model,'holidayclasses'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'trip or excursion'); ?>
		<?php echo $form->textField($model,'triporexcursion'); ?>
		<?php echo $form->error($model,'triporexcursion'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'medical'); ?>
		<?php echo $form->textField($model,'medical'); ?>
		<?php echo $form->error($model,'medical'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
        <?php echo $form->labelEx($model,'others'); ?>
		<?php echo $form->textField($model,'others'); ?>
		<?php echo $form->error($model,'others'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'post balance'); ?>
		<?php echo $form->textField($model,'postbalance'); ?>
		<?php echo $form->error($model,'postbalance'); ?>
	</div>
</div>
<div class="row">
<div class="span3">
		<?php echo $form->labelEx($model,'paymentmode'); ?>
		<?php echo $form->textField($model,'paymentmode',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'paymentmode'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>
    </div>
<p class="text-warning" style="font-size:16px">Totals</p>
	<div class="row">
		<?php echo $form->labelEx($model,'total paid'); ?>
		<?php echo $form->textField($model,'totalpaid'); ?>
		<?php echo $form->error($model,'totalpaid'); ?>
	</div>

	

	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
        	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->