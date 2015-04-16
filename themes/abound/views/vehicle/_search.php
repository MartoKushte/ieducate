<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>



	<div class="row">
		<?php echo $form->label($model,'vehicle reg number'); ?>
		<?php echo $form->textField($model,'vehicleregnumber',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
			<button class="btn btn-primary" type="submit">Search</button>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->