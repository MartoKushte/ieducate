<?php
/* @var $this ResultsheetController */
/* @var $data Resultsheet */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('resultsheetID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->resultsheetID), array('view', 'id'=>$data->resultsheetID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_no')); ?>:</b>
	<?php echo CHtml::encode($data->admin_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examtype')); ?>:</b>
	<?php echo CHtml::encode($data->examtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maths')); ?>:</b>
	<?php echo CHtml::encode($data->maths); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('english')); ?>:</b>
	<?php echo CHtml::encode($data->english); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kiswahili')); ?>:</b>
	<?php echo CHtml::encode($data->kiswahili); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biology')); ?>:</b>
	<?php echo CHtml::encode($data->biology); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('physics')); ?>:</b>
	<?php echo CHtml::encode($data->physics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chemistry')); ?>:</b>
	<?php echo CHtml::encode($data->chemistry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('history')); ?>:</b>
	<?php echo CHtml::encode($data->history); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('geography')); ?>:</b>
	<?php echo CHtml::encode($data->geography); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religious_studies')); ?>:</b>
	<?php echo CHtml::encode($data->religious_studies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agriculture')); ?>:</b>
	<?php echo CHtml::encode($data->agriculture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('computerstudies')); ?>:</b>
	<?php echo CHtml::encode($data->computerstudies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('businesstudies')); ?>:</b>
	<?php echo CHtml::encode($data->businesstudies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('art')); ?>:</b>
	<?php echo CHtml::encode($data->art); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aviation')); ?>:</b>
	<?php echo CHtml::encode($data->aviation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('french')); ?>:</b>
	<?php echo CHtml::encode($data->french); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('music')); ?>:</b>
	<?php echo CHtml::encode($data->music); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('woodwork')); ?>:</b>
	<?php echo CHtml::encode($data->woodwork); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metal')); ?>:</b>
	<?php echo CHtml::encode($data->metal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('points')); ?>:</b>
	<?php echo CHtml::encode($data->points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalmks')); ?>:</b>
	<?php echo CHtml::encode($data->totalmks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mean')); ?>:</b>
	<?php echo CHtml::encode($data->mean); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	*/ ?>

</div>