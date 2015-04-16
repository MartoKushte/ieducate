<?php
/* @var $this SchoolinfoController */
/* @var $model Schoolinfo */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'schoolinfo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
		<?php echo $form->error($model,'ID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'schoolname'); ?>
		<?php echo $form->textField($model,'schoolname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'schoolname'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'logo'); ?>
		<?php echo $form->textField($model,'logo'); ?>
		<?php echo $form->error($model,'logo'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'motto'); ?>
		<?php echo $form->textField($model,'motto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'motto'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'principal'); ?>
		<?php echo $form->textField($model,'principal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'principal'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'foundationdate'); ?>
		<?php echo $form->textField($model,'foundationdate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'foundationdate'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'foundedby'); ?>
		<?php echo $form->textField($model,'foundedby',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'foundedby'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'phoneno'); ?>
		<?php echo $form->textField($model,'phoneno',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'phoneno'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3 ">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'zippostal'); ?>
		<?php echo $form->textField($model,'zippostal',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'zippostal'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'addressline1'); ?>
		<?php echo $form->textField($model,'addressline1',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addressline1'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'addressline2'); ?>
		<?php echo $form->textField($model,'addressline2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addressline2'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->