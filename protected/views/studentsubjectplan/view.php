<?php
/* @var $this StudentsubjectplanController */
/* @var $model Studentsubjectplan */

$this->breadcrumbs=array(
	'Studentsubjectplans'=>array('index'),
	$model->subjectplanID,
);

$this->menu=array(
	array('label'=>'List Studentsubjectplan', 'url'=>array('index')),
	array('label'=>'Create Studentsubjectplan', 'url'=>array('create')),
	array('label'=>'Update Studentsubjectplan', 'url'=>array('update', 'id'=>$model->subjectplanID)),
	array('label'=>'Delete Studentsubjectplan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->subjectplanID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Studentsubjectplan', 'url'=>array('admin')),
);
?>

<h1>View Studentsubjectplan #<?php echo $model->subjectplanID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'subjectplanID',
		'academicyear',
		'adminno',
		'dateadded',
		'datemodified',
		'subject1',
		'subject2',
		'subject3',
		'subject4',
		'subject5',
		'subject6',
		'subject7',
		'subjec8',
		'subject9',
		'subject10',
		'subject11',
		'subject12',
		'subject13',
		'subject14',
	),
)); ?>
