<?php
/* @var $this TimetableController */
/* @var $model Timetable */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'timetableID'); ?>
		<?php echo $form->textField($model,'timetableID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'academic_year'); ?>
		<?php echo $form->textField($model,'academic_year',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classroom'); ?>
		<?php echo $form->textField($model,'classroom',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodID'); ?>
		<?php echo $form->textField($model,'periodID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time'); ?>
		<?php echo $form->textField($model,'time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->