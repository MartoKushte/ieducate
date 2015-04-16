<?php
/* @var $this RouteController */
/* @var $model Route */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'route-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'vehicle reg no'); ?>
		<?php echo $form->textField($model,'vehicleID',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'vehicleID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'route name'); ?>
		<?php echo $form->textField($model,'routename',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'routename'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'no of stops'); ?>
		<?php echo $form->textField($model,'noofstops',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'noofstops'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->