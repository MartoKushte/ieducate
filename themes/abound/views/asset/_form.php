<?php
/* @var $this AssetController */
/* @var $model Asset */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asset-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'label'); ?>
		<?php echo $form->textField($model,'label',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'label'); ?>
	</div>
	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'assettype'); ?>
		<?php echo $form->textField($model,'assettype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'assettype'); ?>
	</div>

	<div class="span3 offset2">
    		<?php echo $form->labelEx($model,'departmentcode'); ?>
		<?php echo $form->textField($model,'departmentcode'); ?>
		<?php echo $form->error($model,'departmentcode'); ?>
      
	</div>
</div>
	<div class="row">
		<div class="span3 ">
		<?php echo $form->labelEx($model,'originalvalue'); ?>
		<?php echo $form->textField($model,'originalvalue',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'originalvalue'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'currentvalue'); ?>
		<?php echo $form->textField($model,'currentvalue',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'currentvalue'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'accession date'); ?>
		<?php echo $form->textField($model,'accessiondate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'accessiondate'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->