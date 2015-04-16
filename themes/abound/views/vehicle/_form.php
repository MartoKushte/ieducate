<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehicle-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'vehicle reg number'); ?>
		<?php echo $form->textField($model,'vehicleregnumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'vehicleregnumber'); ?>
	</div>

	<div class=" span3 offset1">
		<?php echo $form->labelEx($model,'year of make'); ?>
		<?php echo $form->textField($model,'manufacturingyear'); ?>
		<?php echo $form->error($model,'manufacturingyear'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'vehicle type'); ?>
		<?php echo $form->textField($model,'vehicletype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'vehicletype'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'sitting capacity'); ?>
		<?php echo $form->textField($model,'sitingcapacity'); ?>
		<?php echo $form->error($model,'sitingcapacity'); ?>
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

	<div class="row">	
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textArea($model,'status',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'status'); ?>
    </div>

	<div class="row buttons">
		<button class="btn btn-success" type="submit">Create</button>
        	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->