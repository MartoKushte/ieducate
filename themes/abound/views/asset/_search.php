<?php
/* @var $this AssetController */
/* @var $model Asset */
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
		<?php echo $form->label($model,'label'); ?>
		<?php echo $form->textField($model,'label',array('size'=>50,'maxlength'=>50)); ?>
	</div>
	<div class="span3 offset1">
		<?php echo $form->label($model,'departmentcode'); ?>
		<?php echo $form->textField($model,'departmentcode'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->