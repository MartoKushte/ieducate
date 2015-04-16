<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idsalary'); ?>
		<?php echo $form->textField($model,'idsalary'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staffid'); ?>
		<?php echo $form->textField($model,'staffid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'krapin'); ?>
		<?php echo $form->textField($model,'krapin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'othernames'); ?>
		<?php echo $form->textField($model,'othernames',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nationalid'); ?>
		<?php echo $form->textField($model,'nationalid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employeeposition'); ?>
		<?php echo $form->textField($model,'employeeposition',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'month'); ?>
		<?php echo $form->textField($model,'month',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bankname'); ?>
		<?php echo $form->textField($model,'bankname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bankbranch'); ?>
		<?php echo $form->textField($model,'bankbranch',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accountname'); ?>
		<?php echo $form->textField($model,'accountname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accountnumber'); ?>
		<?php echo $form->textField($model,'accountnumber',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
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