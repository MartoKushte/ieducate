<?php
/* @var $this ClassroomController */
/* @var $model Classroom */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classroom-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
	<div class="span3">    
		<?php echo $form->labelEx($model,'classificationID'); ?>
		<?php echo $form->textField($model,'classificationID'); ?>
		<?php echo $form->error($model,'classificationID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'classname'); ?>
		<?php echo $form->textField($model,'classname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'classname'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
		<?php echo $form->error($model,'staffID'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->