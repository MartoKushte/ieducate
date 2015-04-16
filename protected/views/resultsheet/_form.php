<?php
/* @var $this ResultsheetController */
/* @var $model Resultsheet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resultsheet-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_no'); ?>
		<?php echo $form->textField($model,'admin_no',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'admin_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'examtype'); ?>
		<?php echo $form->textField($model,'examtype',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'examtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maths'); ?>
		<?php echo $form->textField($model,'maths'); ?>
		<?php echo $form->error($model,'maths'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'english'); ?>
		<?php echo $form->textField($model,'english'); ?>
		<?php echo $form->error($model,'english'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kiswahili'); ?>
		<?php echo $form->textField($model,'kiswahili'); ?>
		<?php echo $form->error($model,'kiswahili'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biology'); ?>
		<?php echo $form->textField($model,'biology'); ?>
		<?php echo $form->error($model,'biology'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'physics'); ?>
		<?php echo $form->textField($model,'physics'); ?>
		<?php echo $form->error($model,'physics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chemistry'); ?>
		<?php echo $form->textField($model,'chemistry'); ?>
		<?php echo $form->error($model,'chemistry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'history'); ?>
		<?php echo $form->textField($model,'history'); ?>
		<?php echo $form->error($model,'history'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'geography'); ?>
		<?php echo $form->textField($model,'geography'); ?>
		<?php echo $form->error($model,'geography'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religious_studies'); ?>
		<?php echo $form->textField($model,'religious_studies'); ?>
		<?php echo $form->error($model,'religious_studies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agriculture'); ?>
		<?php echo $form->textField($model,'agriculture'); ?>
		<?php echo $form->error($model,'agriculture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'computerstudies'); ?>
		<?php echo $form->textField($model,'computerstudies'); ?>
		<?php echo $form->error($model,'computerstudies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'businesstudies'); ?>
		<?php echo $form->textField($model,'businesstudies'); ?>
		<?php echo $form->error($model,'businesstudies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'art'); ?>
		<?php echo $form->textField($model,'art'); ?>
		<?php echo $form->error($model,'art'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aviation'); ?>
		<?php echo $form->textField($model,'aviation'); ?>
		<?php echo $form->error($model,'aviation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'french'); ?>
		<?php echo $form->textField($model,'french'); ?>
		<?php echo $form->error($model,'french'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'music'); ?>
		<?php echo $form->textField($model,'music'); ?>
		<?php echo $form->error($model,'music'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'woodwork'); ?>
		<?php echo $form->textField($model,'woodwork'); ?>
		<?php echo $form->error($model,'woodwork'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metal'); ?>
		<?php echo $form->textField($model,'metal'); ?>
		<?php echo $form->error($model,'metal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'points'); ?>
		<?php echo $form->textField($model,'points'); ?>
		<?php echo $form->error($model,'points'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalmks'); ?>
		<?php echo $form->textField($model,'totalmks'); ?>
		<?php echo $form->error($model,'totalmks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mean'); ?>
		<?php echo $form->textField($model,'mean'); ?>
		<?php echo $form->error($model,'mean'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->