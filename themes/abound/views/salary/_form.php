<?php
/* @var $this SalaryController */
/* @var $model Salary */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salary-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'staff id'); ?>
		<?php echo $form->textField($model,'staffid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'staffid'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'KRA pin'); ?>
		<?php echo $form->textField($model,'krapin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'krapin'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'nationalid'); ?>
		<?php echo $form->textField($model,'nationalid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nationalid'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'first name'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'other names'); ?>
		<?php echo $form->textField($model,'othernames',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'othernames'); ?>
	</div>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'employee position'); ?>
		<?php echo $form->textField($model,'employeeposition',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employeeposition'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'month'); ?>
		<?php echo $form->textField($model,'month',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>
</div>
<br />
<p class="text-info"  style="font-size:16px">Banking Details</p>
<br />
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'bank name'); ?>
		<?php echo $form->textField($model,'bankname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bankname'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'bank branch'); ?>
		<?php echo $form->textField($model,'bankbranch',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bankbranch'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'account name'); ?>
		<?php echo $form->textField($model,'accountname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'accountname'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'account number'); ?>
		<?php echo $form->textField($model,'accountnumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'accountnumber'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'ispaid'); ?>
		<?php echo $form->textField($model,'ispaid',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'ispaid'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Add new record</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->