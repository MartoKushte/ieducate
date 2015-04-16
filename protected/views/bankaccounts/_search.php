<?php
/* @var $this BankaccountsController */
/* @var $model Bankaccounts */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bankID'); ?>
		<?php echo $form->textField($model,'bankID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank_name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>108)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'branch'); ?>
		<?php echo $form->textField($model,'branch',array('size'=>60,'maxlength'=>108)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_name'); ?>
		<?php echo $form->textField($model,'account_name',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->