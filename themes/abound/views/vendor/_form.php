<?php
/* @var $this VendorController */
/* @var $model Vendor */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vendor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'initials'); ?>
		<?php echo $form->textField($model,'initials',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'initials'); ?>
	</div>

	<div class="span3 offset1">
    		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'firstname'); ?>	</div>

	<div class="span3 offset2">
        		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lastname'); ?>
        </div>
	</div>

	<div class="row">
<div class="span3">
		<?php echo $form->labelEx($model,'phoneno'); ?>
		<?php echo $form->textField($model,'phoneno'); ?>
		<?php echo $form->error($model,'phoneno'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'vendortype'); ?>
		<?php echo $form->textField($model,'vendortype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'vendortype'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->