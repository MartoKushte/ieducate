<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */
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
		<?php echo $form->label($model,'periodfrom'); ?>
		<?php echo $form->textField($model,'periodfrom'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'periodto'); ?>
		<?php echo $form->textField($model,'periodto'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->