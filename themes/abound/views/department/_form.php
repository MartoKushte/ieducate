<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'department-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    	<div class="span3">
		<?php echo $form->labelEx($model,'department code'); ?>
		<?php echo $form->textField($model,'departmentcode'); ?>
		<?php echo $form->error($model,'departmentcode'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'department name'); ?>
		<?php echo $form->textField($model,'departmentname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'departmentname'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'room no'); ?>
		<?php echo $form->textField($model,'roomno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'roomno'); ?>
	</div>
</div>
	<div class="row">
 		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->