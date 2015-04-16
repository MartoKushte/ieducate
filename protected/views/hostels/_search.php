<?php
/* @var $this HostelsController */
/* @var $model Hostels */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'hostelID'); ?>
		<?php echo $form->textField($model,'hostelID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hostelname'); ?>
		<?php echo $form->textField($model,'hostelname',array('size'=>60,'maxlength'=>108)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beds'); ?>
		<?php echo $form->textField($model,'beds'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->