<?php
/* @var $this VisitorpassController */
/* @var $model Visitorpass */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitorpass-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'visitor name'); ?>
		<?php echo $form->textField($model,'visitorname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'visitorname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'visitor card number'); ?>
		<?php echo $form->textField($model,'visitorcardnumber'); ?>
		<?php echo $form->error($model,'visitorcardnumber'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'contact number'); ?>
		<?php echo $form->textField($model,'contactnumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contactnumber'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'number of visitors'); ?>
		<?php echo $form->textField($model,'numberofvisitors'); ?>
		<?php echo $form->error($model,'numberofvisitors'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'visit purpose'); ?>
		<?php echo $form->textField($model,'visitpurpose',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'visitpurpose'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'meeting with'); ?>
		<?php echo $form->textField($model,'meetingwith',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'meetingwith'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'visit date'); ?>
		<?php echo $form->textField($model,'visitdate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'visitdate'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'in time'); ?>
		<?php echo $form->textField($model,'intime',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'08:14 / 17:00')); ?>
		<?php echo $form->error($model,'intime'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'out time'); ?>
		<?php echo $form->textField($model,'outtime',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'08:14 / 17:00')); ?>
		<?php echo $form->error($model,'outtime'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>
	<div class="span3 offset2">
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