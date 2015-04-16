<?php
/* @var $this RouteController */
/* @var $model Route */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<div class="span3 ">
		<?php echo $form->label($model,'vehicle reg no'); ?>
		<?php echo $form->textField($model,'vehicleID',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class=" span3 offset1">
		<?php echo $form->label($model,'route name'); ?>
		<?php echo $form->textField($model,'routename',array('size'=>60,'maxlength'=>120)); ?>
	</div>
</div>

	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->