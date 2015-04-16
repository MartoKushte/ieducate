<?php
/* @var $this UserroleController */
/* @var $model Userrole */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'userrole-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'role name'); ?>
		<?php echo $form->textField($model,'role',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'role description'); ?>
		<?php echo $form->textArea($model,'roledescription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'roledescription'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'date added'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>
</div>
	<div class="row buttons">
		<button  class="btn btn-success"  type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->