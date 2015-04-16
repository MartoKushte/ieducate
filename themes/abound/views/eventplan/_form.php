<?php
/* @var $this EventplanController */
/* @var $model Eventplan */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eventplan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'event name'); ?>
		<?php echo $form->textField($model,'eventname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'eventname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>4, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'event type'); ?>
		<?php echo $form->textField($model,'eventtype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'eventtype'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3 ">
		<?php echo $form->labelEx($model,'event from'); ?>
		<?php echo $form->textField($model,'eventfrom',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'eventfrom'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'event to'); ?>
		<?php echo $form->textField($model,'eventto',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'eventto'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'is working day'); ?>
		<?php echo $form->textField($model,'isworkingday',array('size'=>3,'maxlength'=>3,'encode'=>false,'value'=>'','placeholder'=>'yes / no')); ?>
		<?php echo $form->error($model,'isworkingday'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'date added'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'date modified'); ?>
		<?php echo $form->textField($model,'datemodified',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'datemodified'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-primary" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->