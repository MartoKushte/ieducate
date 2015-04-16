<?php
/* @var $this StudentsubjectplanController */
/* @var $model Studentsubjectplan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'subjectplanID'); ?>
		<?php echo $form->textField($model,'subjectplanID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'academicyear'); ?>
		<?php echo $form->textField($model,'academicyear',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adminno'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject1'); ?>
		<?php echo $form->textField($model,'subject1',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject2'); ?>
		<?php echo $form->textField($model,'subject2',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject3'); ?>
		<?php echo $form->textField($model,'subject3',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject4'); ?>
		<?php echo $form->textField($model,'subject4',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject5'); ?>
		<?php echo $form->textField($model,'subject5',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject6'); ?>
		<?php echo $form->textField($model,'subject6',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject7'); ?>
		<?php echo $form->textField($model,'subject7',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subjec8'); ?>
		<?php echo $form->textField($model,'subjec8',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject9'); ?>
		<?php echo $form->textField($model,'subject9',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject10'); ?>
		<?php echo $form->textField($model,'subject10',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject11'); ?>
		<?php echo $form->textField($model,'subject11',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject12'); ?>
		<?php echo $form->textField($model,'subject12',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject13'); ?>
		<?php echo $form->textField($model,'subject13',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject14'); ?>
		<?php echo $form->textField($model,'subject14',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->