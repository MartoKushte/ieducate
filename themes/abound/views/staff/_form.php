<?php
/* @var $this StaffController */
/* @var $model Staff */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'staff-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'departmen',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'departmen'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'employee code'); ?>
		<?php echo $form->textField($model,'employeecode',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'employeecode'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'initials'); ?>
		<?php echo $form->textField($model,'initials',array('size'=>11,'maxlength'=>11,'encode'=>false,'value'=>'','placeholder'=>'Mr / Mrs')); ?>
		<?php echo $form->error($model,'initials'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'first name'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'middle name'); ?>
		<?php echo $form->textField($model,'middlename',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'middlename'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'last name'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'photo image'); ?>
		<?php echo $form->textField($model,'photoimage',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'photoimage'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'employment type'); ?>
		<?php echo $form->textField($model,'employmenttype',array('size'=>50,'maxlength'=>50,'encode'=>false,'value'=>'','placeholder'=>'Permanent/Part time')); ?>
		<?php echo $form->error($model,'employmenttype'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>11,'maxlength'=>11,'encode'=>false,'value'=>'','placeholder'=>'male / female')); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'date of birth'); ?>
		<?php echo $form->textField($model,'dateofbirth',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'1980/07/13')); ?>
		<?php echo $form->error($model,'dateofbirth'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'phone no'); ?>
		<?php echo $form->textField($model,'phoneno'); ?>
		<?php echo $form->error($model,'phoneno'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'job title'); ?>
		<?php echo $form->textField($model,'jobtitle',array('size'=>20,'maxlength'=>20,'encode'=>false,'value'=>'','placeholder'=>'teacher,principal,other staff...')); ?>
		<?php echo $form->error($model,'jobtitle'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'specialization'); ?>
		<?php echo $form->textField($model,'specialization',array('size'=>20,'maxlength'=>20,'encode'=>false,'value'=>'','placeholder'=>'maths,physics....')); ?>
		<?php echo $form->error($model,'specialization'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'marital status'); ?>
		<?php echo $form->textField($model,'maritalstatus',array('size'=>20,'maxlength'=>20,'encode'=>false,'value'=>'','placeholder'=>'single,married,divorced')); ?>
		<?php echo $form->error($model,'maritalstatus'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'join date'); ?>
		<?php echo $form->textField($model,'joindate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'joindate'); ?>
	</div>
</div>
<div class="row">
	<div class="span3">
		<?php echo $form->labelEx($model,'release date'); ?>
		<?php echo $form->textField($model,'releasedate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'releasedate'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'national ID'); ?>
		<?php echo $form->textField($model,'nationalID'); ?>
		<?php echo $form->error($model,'nationalID'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->