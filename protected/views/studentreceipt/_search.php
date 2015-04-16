<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idstudentreceipt'); ?>
		<?php echo $form->textField($model,'idstudentreceipt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adminno'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'class'); ?>
		<?php echo $form->textField($model,'class',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datepaid'); ?>
		<?php echo $form->textField($model,'datepaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'term'); ?>
		<?php echo $form->textField($model,'term',array('size'=>45,'maxlength'=>45)); ?>
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
		<?php echo $form->label($model,'forebalance'); ?>
		<?php echo $form->textField($model,'forebalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolfees'); ?>
		<?php echo $form->textField($model,'schoolfees'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registration'); ?>
		<?php echo $form->textField($model,'registration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transport'); ?>
		<?php echo $form->textField($model,'transport'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interviewfee'); ?>
		<?php echo $form->textField($model,'interviewfee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uniforms'); ?>
		<?php echo $form->textField($model,'uniforms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'holidayclasses'); ?>
		<?php echo $form->textField($model,'holidayclasses'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'triporexcursion'); ?>
		<?php echo $form->textField($model,'triporexcursion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'medical'); ?>
		<?php echo $form->textField($model,'medical'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'others'); ?>
		<?php echo $form->textField($model,'others'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postbalance'); ?>
		<?php echo $form->textField($model,'postbalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalpaid'); ?>
		<?php echo $form->textField($model,'totalpaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentmode'); ?>
		<?php echo $form->textField($model,'paymentmode',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->