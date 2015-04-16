<?php
/* @var $this FeereceiptController */
/* @var $model Feereceipt */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feereceipt-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'adminno'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'adminno'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'classroom'); ?>
		<?php echo $form->textField($model,'classroom',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'classroom'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'invoicedate'); ?>
		<?php echo $form->textField($model,'invoicedate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'invoicedate'); ?>
	</div>
</div>
<div class="row">
	<div class="span3">
		<?php echo $form->labelEx($model,'termtitle'); ?>
		<?php echo $form->textField($model,'termtitle',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'termtitle'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'previousinvoiceamount'); ?>
		<?php echo $form->textField($model,'previousinvoiceamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'previousinvoiceamount'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'previousamount'); ?>
		<?php echo $form->textField($model,'previousamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'previousamount'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'duedate'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'adjustedamount'); ?>
		<?php echo $form->textField($model,'adjustedamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'adjustedamount'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'totalamount'); ?>
		<?php echo $form->textField($model,'totalamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'totalamount'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->