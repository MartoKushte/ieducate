<?php
/* @var $this BookstockController */
/* @var $model Bookstock */
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
		<?php echo $form->label($model,'book name'); ?>
		<?php echo $form->textField($model,'bookID',array('size'=>60,'maxlength'=>75)); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'barcodevalue'); ?>
		<?php echo $form->textField($model,'barcodevalue',array('size'=>50,'maxlength'=>50)); ?>
	</div>
    </div>
	<div class="row buttons">
		<button class="btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->