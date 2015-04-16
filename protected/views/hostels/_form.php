<?php
/* @var $this HostelsController */
/* @var $model Hostels */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hostels-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hostelname'); ?>
		<?php echo $form->textField($model,'hostelname',array('size'=>60,'maxlength'=>108)); ?>
		<?php echo $form->error($model,'hostelname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beds'); ?>
		<?php echo $form->textField($model,'beds'); ?>
		<?php echo $form->error($model,'beds'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->