<?php
/* @var $this ResultsheetController */
/* @var $model Resultsheet */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resultsheet-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'admin_no'); ?>
		<?php echo $form->textField($model,'admin_no',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'admin_no'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'examtype'); ?>
		<?php echo $form->textField($model,'examtype',array('size'=>7,'maxlength'=>7,'encode'=>false,'value'=>'','placeholder'=>'C.A.T 1,C.A.T 2,ENDTERM')); ?>
		<?php echo $form->error($model,'examtype'); ?>
	</div>
</div>
<p>Compulsory Subjects</p>
<div class="row">
	<div class="span3">
		<?php echo $form->labelEx($model,'maths'); ?>
		<?php echo $form->textField($model,'maths'); ?>
		<?php echo $form->error($model,'maths'); ?>
	</div>
		<div class="span3 offset1">
		<?php echo $form->labelEx($model,'english'); ?>
		<?php echo $form->textField($model,'english'); ?>
		<?php echo $form->error($model,'english'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'kiswahili'); ?>
		<?php echo $form->textField($model,'kiswahili'); ?>
		<?php echo $form->error($model,'kiswahili'); ?>
	</div>
</div>
<p>Sciences</p>
	<div class="row">
	<div class="span3">
		<?php echo $form->labelEx($model,'biology'); ?>
		<?php echo $form->textField($model,'biology'); ?>
		<?php echo $form->error($model,'biology'); ?>
	</div>
	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'physics'); ?>
		<?php echo $form->textField($model,'physics'); ?>
		<?php echo $form->error($model,'physics'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'chemistry'); ?>
		<?php echo $form->textField($model,'chemistry'); ?>
		<?php echo $form->error($model,'chemistry'); ?>
	</div>
</div>
<p>Humanities</p>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'history'); ?>
		<?php echo $form->textField($model,'history'); ?>
		<?php echo $form->error($model,'history'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'geography'); ?>
		<?php echo $form->textField($model,'geography'); ?>
		<?php echo $form->error($model,'geography'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'religious studies'); ?>
		<?php echo $form->textField($model,'religious_studies'); ?>
		<?php echo $form->error($model,'religious_studies'); ?>
	</div>
</div>
<p style="font:'Comic Sans MS'">Technical subjects</p>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'agriculture'); ?>
		<?php echo $form->textField($model,'agriculture'); ?>
		<?php echo $form->error($model,'agriculture'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'computer studies'); ?>
		<?php echo $form->textField($model,'computerstudies'); ?>
		<?php echo $form->error($model,'computerstudies'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'business studies'); ?>
		<?php echo $form->textField($model,'businesstudies'); ?>
		<?php echo $form->error($model,'businesstudies'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'art'); ?>
		<?php echo $form->textField($model,'art'); ?>
		<?php echo $form->error($model,'art'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'aviation'); ?>
		<?php echo $form->textField($model,'aviation'); ?>
		<?php echo $form->error($model,'aviation'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'french'); ?>
		<?php echo $form->textField($model,'french'); ?>
		<?php echo $form->error($model,'french'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'music'); ?>
		<?php echo $form->textField($model,'music'); ?>
		<?php echo $form->error($model,'music'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'woodwork'); ?>
		<?php echo $form->textField($model,'woodwork'); ?>
		<?php echo $form->error($model,'woodwork'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'metal'); ?>
		<?php echo $form->textField($model,'metal'); ?>
		<?php echo $form->error($model,'metal'); ?>
	</div>
</div>

<span class="text-info" style="font-size:18px">Totals</span><br />
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'points'); ?>
		<?php echo $form->textField($model,'points'); ?>
		<?php echo $form->error($model,'points'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'totalmks'); ?>
		<?php echo $form->textField($model,'totalmks'); ?>
		<?php echo $form->error($model,'totalmks'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'mean'); ?>
		<?php echo $form->textField($model,'mean'); ?>
		<?php echo $form->error($model,'mean'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create new record</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->