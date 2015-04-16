<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
    <div class="span3">
		<?php echo $form->label($model,'staff id'); ?>
		<?php echo $form->textField($model,'staffid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'KRA pin'); ?>
		<?php echo $form->textField($model,'krapin',array('size'=>45,'maxlength'=>45)); ?>
	</div>
	<div class="span3 offset2">
		<?php echo $form->label($model,'ispaid'); ?>
		<?php echo $form->textField($model,'ispaid',array('size'=>3,'maxlength'=>3)); ?>
	</div>
</div>
	<div class="row buttons">
	<button class="btn btn-info" type="submit">Search</button>
    	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->