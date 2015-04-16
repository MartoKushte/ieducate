<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feetermdate-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'term number'); ?>
		<?php echo $form->textField($model,'termnumber'); ?>
		<?php echo $form->error($model,'termnumber'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'term title'); ?>
		<?php echo $form->textField($model,'termtitle',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'termtitle'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'period from'); ?>
		<?php echo $form->textField($model,'periodfrom'); ?>
		<?php echo $form->error($model,'periodfrom'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'period to'); ?>
		<?php echo $form->textField($model,'periodto'); ?>
		<?php echo $form->error($model,'periodto'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'percentage collection'); ?>
		<?php echo $form->textField($model,'percentagecollection'); ?>
		<?php echo $form->error($model,'percentagecollection'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate'); ?>
		<?php echo $form->error($model,'duedate'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'month count'); ?>
		<?php echo $form->textField($model,'monthcount'); ?>
		<?php echo $form->error($model,'monthcount'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'date added'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn  btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->