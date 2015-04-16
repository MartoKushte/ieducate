<?php
/* @var $this CurriculumplanController */
/* @var $model Curriculumplan */
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
		<?php echo $form->label($model,'curriculumID'); ?>
		<?php echo $form->textField($model,'curriculumID',array('size'=>60,'maxlength'=>108)); ?>
	</div>

	<div class=" span3 offset1">
		<?php echo $form->label($model,'bookID'); ?>
		<?php echo $form->textField($model,'bookID',array('size'=>44,'maxlength'=>44)); ?>
	</div>
	<div class="span3 offset2">
		<?php echo $form->label($model,'planmonth'); ?>
		<?php echo $form->textField($model,'planmonth',array('size'=>50,'maxlength'=>50)); ?>
	</div>
</div>
	<div class="row buttons">
	<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->