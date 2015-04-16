<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bookissuereturnID'); ?>
		<?php echo $form->textField($model,'bookissuereturnID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bookID'); ?>
		<?php echo $form->textField($model,'bookID',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personID'); ?>
		<?php echo $form->textField($model,'personID',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateissue'); ?>
		<?php echo $form->textField($model,'dateissue'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datereturn'); ?>
		<?php echo $form->textField($model,'datereturn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'issuedby'); ?>
		<?php echo $form->textField($model,'issuedby',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fine'); ?>
		<?php echo $form->textField($model,'fine'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isfinepaid'); ?>
		<?php echo $form->textField($model,'isfinepaid',array('size'=>3,'maxlength'=>3)); ?>
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