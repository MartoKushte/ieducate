<?php
/* @var $this SubjectController */
/* @var $model Subject */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subject-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'subject name'); ?>
		<?php echo $form->textField($model,'subjectname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subjectname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'subject group'); ?>
		<?php echo $form->textField($model,'subjectgroup',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subjectgroup'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'subject code'); ?>
		<?php echo $form->textField($model,'subjectcode'); ?>
		<?php echo $form->error($model,'subjectcode'); ?>
	</div>
</div>
	<div class="row">
		<?php echo $form->labelEx($model,'date added'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="row buttons">
	<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->