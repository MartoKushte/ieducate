<?php
/* @var $this ClassroomController */
/* @var $model Classroom */
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
		<?php echo $form->label($model,'classname'); ?>
		<?php echo $form->textField($model,'classname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->