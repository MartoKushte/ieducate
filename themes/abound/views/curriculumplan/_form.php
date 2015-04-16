<?php
/* @var $this CurriculumplanController */
/* @var $model Curriculumplan */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curriculumplan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'curriculumID'); ?>
		<?php echo $form->textField($model,'curriculumID',array('size'=>60,'maxlength'=>108)); ?>
		<?php echo $form->error($model,'curriculumID'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'book name'); ?>
		<?php echo $form->textField($model,'bookID',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'bookID'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'plan month'); ?>
		<?php echo $form->textField($model,'planmonth',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'planmonth'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'topic'); ?>
		<?php echo $form->textField($model,'topic',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'topic'); ?>
	</div>
    <div class="span3 offset1">
		<?php echo $form->labelEx($model,'sub topic'); ?>
		<?php echo $form->textField($model,'subtopic',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subtopic'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'activity'); ?>
		<?php echo $form->textField($model,'activity',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'activity'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
        <?php echo $form->labelEx($model,'iscompleted'); ?>
		<?php echo $form->textField($model,'iscompleted',array('size'=>3,'maxlength'=>3,'encode'=>false,'value'=>'','placeholder'=>'yes / no')); ?>
		<?php echo $form->error($model,'iscompleted'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'datemodified'); ?>
	</div>
</div>
	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->