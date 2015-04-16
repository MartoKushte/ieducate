																					deleted data
=========================================================================================================
=========================================================================================================
1.Student table
=============

	<div class="row">
		<?php echo $form->label($model,'academicsessionID'); ?>
		<?php echo $form->textField($model,'academicsessionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classID'); ?>
		<?php echo $form->textField($model,'classID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dormID'); ?>
		<?php echo $form->textField($model,'dormID'); ?>
	</div>

	
	<div class="row">
	
		<?php echo $form->label($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'middlename'); ?>
		<?php echo $form->textField($model,'middlename',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateofbirth'); ?>
		<?php echo $form->textField($model,'dateofbirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'citizenship'); ?>
		<?php echo $form->textField($model,'citizenship',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentname'); ?>
		<?php echo $form->textField($model,'parentname',array('size'=>33,'maxlength'=>33)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photoimage'); ?>
		<?php echo $form->textField($model,'photoimage',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emergencynumber'); ?>
		<?php echo $form->textField($model,'emergencynumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postaladress'); ?>
		<?php echo $form->textField($model,'postaladress',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'admindate'); ?>
		<?php echo $form->textField($model,'admindate'); ?>
	</div>



	<div class="row">
		<?php echo $form->label($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>45,'maxlength'=>45)); ?>
	</div>
