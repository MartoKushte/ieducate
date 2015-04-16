<?php
/* @var $this BankaccountsController */
/* @var $model Bankaccounts */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


		<div class="row">
		<?php echo $form->label($model,'bank name'); ?>
		<?php echo $form->textField($model,'bank_name',array('size'=>60,'maxlength'=>108)); ?>
	</div>

	<div class="row buttons">
	<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->