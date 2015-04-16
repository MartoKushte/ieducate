<?php
/* @var $this FeepaymentController */
/* @var $model Feepayment */
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
		<?php echo $form->label($model,'feereceiptID'); ?>
		<?php echo $form->textField($model,'feereceiptID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->label($model,'financialyear'); ?>
		<?php echo $form->textField($model,'financialyear',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->label($model,'bankbranch'); ?>
		<?php echo $form->textField($model,'bankbranch',array('size'=>50,'maxlength'=>50)); ?>
	</div>
</div>

	<div class="row buttons">
		<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->