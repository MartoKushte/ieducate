<?php
/* @var $this BookController */
/* @var $model Book */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'book-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'ISBN'); ?>
		<?php echo $form->textField($model,'ISBN',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ISBN'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'publisher'); ?>
		<?php echo $form->textField($model,'publisher',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'publisher'); ?>
	</div>
</div>
	<div class="row">
		<div  class="span3 ">
		<?php echo $form->labelEx($model,'edition'); ?>
		<?php echo $form->textField($model,'edition',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'edition'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'issuable'); ?>
		<?php echo $form->textField($model,'issuable',array('size'=>11,'maxlength'=>11,'encode'=>false,'value'=>'','placeholder'=>'yes/no')); ?>
		<?php echo $form->error($model,'issuable'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'volume'); ?>
		<?php echo $form->textField($model,'volume',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'volume'); ?>
	</div>
</div>.
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textArea($model,'status',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'datemodified'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->