<?php
/* @var $this TransportationController */
/* @var $model Transportation */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transportation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'student admin no'); ?>
		<?php echo $form->textField($model,'studentID',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'studentID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'Route name'); ?>
		<?php echo $form->textField($model,'stopID',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'stopID'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'paid?'); ?>
		<?php echo $form->textField($model,'ispaid',array('size'=>3,'maxlength'=>3,'encode'=>false,'value'=>'','placeholder'=>'yes / no')); ?>
		<?php echo $form->error($model,'ispaid'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->