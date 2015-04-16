<?php
/* @var $this TransportationController */
/* @var $model Transportation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'transportationID'); ?>
		<?php echo $form->textField($model,'transportationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stopID'); ?>
		<?php echo $form->textField($model,'stopID',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ispaid'); ?>
		<?php echo $form->textField($model,'ispaid',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->