<?php
/* @var $this TimetableController */
/* @var $model Timetable */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timetable-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3 ">
		<?php echo $form->labelEx($model,'academic year'); ?>
		<?php echo $form->textField($model,'academic_year',array('size'=>44,'maxlength'=>44,'encode'=>false,'value'=>'','placeholder'=>'2014')); ?>
		<?php echo $form->error($model,'academic_year'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'classroom'); ?>
		<?php echo $form->textField($model,'classroom',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'classroom'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'period ID'); ?>
		<?php echo $form->textField($model,'periodID'); ?>
		<?php echo $form->error($model,'periodID'); ?>
</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'staff ID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
		<?php echo $form->error($model,'staffID'); ?>
	
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'time'); ?>
		<?php echo $form->textField($model,'time',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'08:00')); ?>
		<?php echo $form->error($model,'time'); ?>
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