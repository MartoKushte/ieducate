<?php
/* @var $this ClassperiodController */
/* @var $model Classperiod */
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'starttime'); ?>
		<?php echo $form->textField($model,'starttime'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->label($model,'endtime'); ?>
		<?php echo $form->textField($model,'endtime'); ?>
	</div>
</div>
	<div class="row">
		<?php echo $form->label($model,'break'); ?>
		<?php echo $form->textField($model,'break'); ?>
	</div>

	<div class="row buttons">
		<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->