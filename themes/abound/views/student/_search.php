<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<div class="row">
		<?php echo $form->label($model,'admin no'); ?>
		<?php echo $form->textField($model,'adminno',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row buttons">
		<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->