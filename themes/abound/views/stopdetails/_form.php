<?php
/* @var $this StopdetailsController */
/* @var $model Stopdetails */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stopdetails-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'route code'); ?>
		<?php echo $form->textField($model,'routeID'); ?>
		<?php echo $form->error($model,'routeID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'stop name'); ?>
		<?php echo $form->textField($model,'stopname',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'stopname'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'fare',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'fare'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'arrival mrng'); ?>
		<?php echo $form->textField($model,'arrivalmrng',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'08:00')); ?>
		<?php echo $form->error($model,'arrivalmrng'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'depature mrng'); ?>
		<?php echo $form->textField($model,'depaturemrng',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'09:00')); ?>
		<?php echo $form->error($model,'depaturemrng'); ?>
	</div>

	<div class="span3 offset2">
    
		<?php echo $form->labelEx($model,'depature evng'); ?>
		<?php echo $form->textField($model,'depatureevng',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'17:00')); ?>
		<?php echo $form->error($model,'depatureevng'); ?>
	</div>
</div>
<div class="row">
	<div class="span3 ">
		<?php echo $form->labelEx($model,'arrival evng'); ?>
		<?php echo $form->textField($model,'arrivalevng',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'18:00')); ?>
		<?php echo $form->error($model,'arrivalevng'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->