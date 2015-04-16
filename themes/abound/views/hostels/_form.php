<?php
/* @var $this HostelsController */
/* @var $model Hostels */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hostels-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3 ">
		<?php echo $form->labelEx($model,'hostelname'); ?>
		<?php echo $form->textField($model,'hostelname',array('size'=>60,'maxlength'=>108)); ?>
		<?php echo $form->error($model,'hostelname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'beds'); ?>
		<?php echo $form->textField($model,'beds'); ?>
		<?php echo $form->error($model,'beds'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->