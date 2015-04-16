<?php
/* @var $this ResultsheetController */
/* @var $model Resultsheet */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'resultsheetID'); ?>
		<?php echo $form->textField($model,'resultsheetID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admin_no'); ?>
		<?php echo $form->textField($model,'admin_no',array('size'=>44,'maxlength'=>44)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'examtype'); ?>
		<?php echo $form->textField($model,'examtype',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maths'); ?>
		<?php echo $form->textField($model,'maths'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'english'); ?>
		<?php echo $form->textField($model,'english'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kiswahili'); ?>
		<?php echo $form->textField($model,'kiswahili'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biology'); ?>
		<?php echo $form->textField($model,'biology'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'physics'); ?>
		<?php echo $form->textField($model,'physics'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chemistry'); ?>
		<?php echo $form->textField($model,'chemistry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'history'); ?>
		<?php echo $form->textField($model,'history'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'geography'); ?>
		<?php echo $form->textField($model,'geography'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'religious_studies'); ?>
		<?php echo $form->textField($model,'religious_studies'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agriculture'); ?>
		<?php echo $form->textField($model,'agriculture'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'computerstudies'); ?>
		<?php echo $form->textField($model,'computerstudies'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'businesstudies'); ?>
		<?php echo $form->textField($model,'businesstudies'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'art'); ?>
		<?php echo $form->textField($model,'art'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aviation'); ?>
		<?php echo $form->textField($model,'aviation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'french'); ?>
		<?php echo $form->textField($model,'french'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'music'); ?>
		<?php echo $form->textField($model,'music'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'woodwork'); ?>
		<?php echo $form->textField($model,'woodwork'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metal'); ?>
		<?php echo $form->textField($model,'metal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'points'); ?>
		<?php echo $form->textField($model,'points'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalmks'); ?>
		<?php echo $form->textField($model,'totalmks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mean'); ?>
		<?php echo $form->textField($model,'mean'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->