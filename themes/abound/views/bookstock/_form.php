<?php
/* @var $this BookstockController */
/* @var $model Bookstock */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../bootcombo/css/bootstrap-combobox.css" rel="stylesheet" type="text/css"/>
<script src="../../bootcombo/js/bootstrap-combobox.js" type="text/javascript">
</script>
 <script type="text/javascript">
      $(document).ready(function(){
        $('.combobox').combobox();
      });
    </script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bookstock-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'book name'); ?>
		<?php echo $form->textField($model,'bookID',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'bookID'); ?>

	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'vendor'); ?>
		<?php echo $form->textField($model,'vendor',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'vendor'); ?>
			</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'bar code no'); ?>
		<?php echo $form->textField($model,'barcodevalue',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'barcodevalue'); ?>
	</div>
</div>
	<div class="row">
		<div class="span3">
		<?php echo $form->labelEx($model,'shelf number'); ?>
		<?php echo $form->textField($model,'bookposition',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bookposition'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'purchase date'); ?>
		<?php echo $form->textField($model,'purchasedate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13')); ?>
		<?php echo $form->error($model,'purchasedate'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'purchased by'); ?>
		<?php echo $form->textField($model,'purchasedby',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'purchasedby'); ?>
	</div>
</div>
	<div class="row">
    <div class="span3">
		<?php echo $form->labelEx($model,'in stock?'); ?>
		<?php echo $form->textField($model,'instock',array('size'=>3,'maxlength'=>3,'encode'=>false,'value'=>'','placeholder'=>'yes / no')); ?>
		<?php echo $form->error($model,'instock'); ?>
	</div>

	<div class="span3 offset1">
		<?php echo $form->labelEx($model,'is reference'); ?>
		<?php echo $form->textField($model,'isreference',array('size'=>3,'maxlength'=>3,'encode'=>false,'value'=>'','placeholder'=>'yes / no')); ?>
		<?php echo $form->error($model,'isreference'); ?>
	</div>

	<div class="span3 offset2">
		<?php echo $form->labelEx($model,'reason'); ?>
		<?php echo $form->textArea($model,'reason',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reason'); ?>
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

<?php $this->endWidget(); ?>

</div><!-- form -->