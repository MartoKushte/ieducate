<?php
/* @var $this ClassperiodController */
/* @var $model Classperiod */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classperiod-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'starttime'); ?>
		<?php echo $form->textField($model,'starttime'); ?>
		<?php echo $form->error($model,'starttime'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'endtime'); ?>
		<?php echo $form->textField($model,'endtime'); ?>
		<?php echo $form->error($model,'endtime'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'break'); ?>
		<?php echo $form->textField($model,'break'); ?>
		<?php echo $form->error($model,'break'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->