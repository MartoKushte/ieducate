<?php
/* @var $this CurriculumplanController */
/* @var $model Curriculumplan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'curriculumplanID'); ?>
		<?php echo $form->textField($model,'curriculumplanID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'curriculumID'); ?>
		<?php echo $form->textField($model,'curriculumID',array('size'=>60,'maxlength'=>108)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bookID'); ?>
		<?php echo $form->textField($model,'bookID',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'planmonth'); ?>
		<?php echo $form->textField($model,'planmonth',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topic'); ?>
		<?php echo $form->textField($model,'topic',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subtopic'); ?>
		<?php echo $form->textField($model,'subtopic',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activity'); ?>
		<?php echo $form->textField($model,'activity',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iscompleted'); ?>
		<?php echo $form->textField($model,'iscompleted',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->