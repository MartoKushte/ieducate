<?php
/* @var $this BookController */
/* @var $model Book */
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
		<?php echo $form->label($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->label($model,'publisher'); ?>
		<?php echo $form->textField($model,'publisher',array('size'=>60,'maxlength'=>100)); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-primary" type="submit">Search</button>
        	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->