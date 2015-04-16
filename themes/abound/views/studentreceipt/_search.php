<?php
/* @var $this StudentreceiptController */
/* @var $model Studentreceipt */
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
		<?php echo $form->label($model,'admin no'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
	</div>
	</div>

	<div class="row buttons">
		<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->