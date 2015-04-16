<?php
/* @var $this FinancialyearController */
/* @var $model Financialyear */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'financialyear-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'date from'); ?>
		<?php echo $form->textField($model,'datefrom',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'datefrom'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'date to'); ?>
		<?php echo $form->textField($model,'dateto',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateto'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'is active'); ?>
		<?php echo $form->textField($model,'isactive',array('size'=>3,'maxlength'=>3,'encode'=>false,'value'=>'','placeholder'=>'yes / no')); ?>
		<?php echo $form->error($model,'isactive'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'date added'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->