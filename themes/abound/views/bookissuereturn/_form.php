<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bookissuereturn-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3 ">
		<?php echo $form->labelEx($model,'bookID'); ?>
		<?php echo $form->textField($model,'bookID',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'bookID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'personID'); ?>
		<?php echo $form->textField($model,'personID',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'personID'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'date of issue'); ?>
		<?php echo $form->textField($model,'dateissue',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateissue'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'date returned'); ?>
		<?php echo $form->textField($model,'datereturn',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'datereturn'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'due date'); ?>
		<?php echo $form->textField($model,'duedate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'duedate'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'issued by'); ?>
		<?php echo $form->textField($model,'issuedby',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'issuedby'); ?>
	</div>
</div>
	<div class="row">
    	<div class="span3">
		<?php echo $form->labelEx($model,'date added'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'date modified'); ?>
		<?php echo $form->textField($model,'datemodified',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'datemodified'); ?>
	</div>
    </div>
    <div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>
<br />
<p style="font:'Courier New', Courier, monospace">Fine details</p>
	<div class="row">
		<div class="span2">
		<?php echo $form->labelEx($model,'fine'); ?>
		<?php echo $form->textField($model,'fine'); ?>
		<?php echo $form->error($model,'fine'); ?>
	</div>

	<div class="span2 offset1">
		<?php echo $form->labelEx($model,'is fine paid'); ?>
		<?php echo $form->textField($model,'isfinepaid',array('size'=>3,'maxlength'=>3,'encode'=>false,'value'=>'','placeholder'=>'yes / no')); ?>
		<?php echo $form->error($model,'isfinepaid'); ?>
	</div>
</div>


	<div class="row buttons">
		<button class="btn-danger" type="submit">Submit with fine</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->