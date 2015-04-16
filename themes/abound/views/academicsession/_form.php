<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */
/* @var $form CActiveForm */

?>
<link
	href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php require_once('calendar/classes/tc_calendar.php'); ?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'academicsession-form',
			'enableAjaxValidation'=>false,
)); ?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'academicsessionID'); ?>
			<?php echo $form->textField($model,'academicsessionID'); ?>
			<?php echo $form->error($model,'academicsessionID'); ?>
		</div>
		<div class="span3 offset1">
			<?php echo $form->labelEx($model,'session year'); ?>
			<?php echo $form->textField($model,'sessionyear',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'sessionyear'); ?>
		</div>
		<div class="span3 offset2">
			<?php echo $form->labelEx($model,'session open date'); ?>

			<?php /*?>$myCalendar = new tc_calendar("date5", true, false);
	$myCalendar->setIcon("calendar/images/iconCalendar.gif");
	$myCalendar->setDate(date('d'), date('m'), date('Y'));
	$myCalendar->setPath("calender/");
	$myCalendar->setYearInterval(2014, 2025);
	$myCalendar->dateAllow('2014-05-13', '2020-03-01');
	$myCalendar->setDateFormat('j F Y');
	$myCalendar->setAlignment('left', 'bottom');
	$myCalendar->setSpecificDate(array("2011-04-01", "2011-04-04", "2011-12-25"), 0, 'year');
	$myCalendar->setSpecificDate(array("2011-04-10", "2011-04-14"), 0, 'month');
	$myCalendar->setSpecificDate(array("2011-06-01"), 0, '');
	  $myCalendar->writeScript();<?php */?>

			<?php echo $form->textField($model,'sessionopendate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13'));		
		 ?>
			<?php echo $form->error($model,'sessionopendate'); ?>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<?php echo $form->labelEx($model,'session close date'); ?>
			<?php echo $form->textField($model,'sessionclosedate',array('size'=>60,'maxlength'=>255,'encode'=>false,'value'=>'','placeholder'=>'2014/07/13'));?>
			<?php echo $form->error($model,'sessionclosedate'); ?>
		</div>
		<div class="span3 offset1">
			<?php echo $form->labelEx($model,'session status'); ?>
			<?php echo $form->textField($model,'sessionstatus',array('size'=>11,'maxlength'=>11)); ?>
			<?php echo $form->error($model,'sessionstatus'); ?>
		</div>
		<div class="span3 offset2">
			<?php echo $form->labelEx($model,'date added'); ?>
			<?php echo $form->textField($model,'dateadded'); ?>
			<?php echo $form->error($model,'dateadded'); ?>
		</div>
	</div>
	<div class="row buttons">
		<button class="btn-success" type="submit">Create</button>
	</div>

	<?php $this->endWidget(); ?>

</div>

