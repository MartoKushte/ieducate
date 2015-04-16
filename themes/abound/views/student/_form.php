<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'academic year'); ?>
		<?php echo $form->textField($model,'academic_year',array('size'=>44,'maxlength'=>44,'encode'=>false,'value'=>'','placeholder'=>'2014')); ?>
		<?php echo $form->error($model,'academic_year'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'classroom'); ?>
		<?php echo $form->textField($model,'classroom',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'classroom'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'hostel'); ?>
		<?php echo $form->textField($model,'hostel',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'hostel'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'admin no'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>33,'maxlength'=>33)); ?>
		<?php echo $form->error($model,'adminno'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'first name'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>33,'maxlength'=>33)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'middle name'); ?>
		<?php echo $form->textField($model,'middlename',array('size'=>33,'maxlength'=>33)); ?>
		<?php echo $form->error($model,'middlename'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'last name'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>33,'maxlength'=>33)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class=" span3 offset1">
		<?php echo $form->labelEx($model,'date of birth'); ?>
		<?php echo $form->textField($model,'dateofbirth',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateofbirth'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship',array('size'=>33,'maxlength'=>33)); ?>
		<?php echo $form->error($model,'citizenship'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'parent name'); ?>
		<?php echo $form->textField($model,'parentname',array('size'=>33,'maxlength'=>33)); ?>
		<?php echo $form->error($model,'parentname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'photo image'); ?>
        <input id="file" type="jpg" name="file"> 
        <input id="submit" type="submit" name="submit" value="Upload" />
		<?php echo $form->textField($model,'photoimage',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'photoimage'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'emergency number'); ?>
		<?php echo $form->textField($model,'emergencynumber'); ?>
		<?php echo $form->error($model,'emergencynumber'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'postal address'); ?>
		<?php echo $form->textField($model,'postaladress',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'postaladress'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'admin date'); ?>
		<?php echo $form->textField($model,'admindate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'admindate'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>33,'maxlength'=>33,'encode'=>false,'value'=>'','placeholder'=>'male / female')); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->