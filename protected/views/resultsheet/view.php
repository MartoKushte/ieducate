<?php
/* @var $this ResultsheetController */
/* @var $model Resultsheet */

$this->breadcrumbs=array(
	'Resultsheets'=>array('index'),
	$model->resultsheetID,
);

$this->menu=array(
	array('label'=>'List Resultsheet', 'url'=>array('index')),
	array('label'=>'Create Resultsheet', 'url'=>array('create')),
	array('label'=>'Update Resultsheet', 'url'=>array('update', 'id'=>$model->resultsheetID)),
	array('label'=>'Delete Resultsheet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->resultsheetID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Resultsheet', 'url'=>array('admin')),
);
?>

<h1>View Resultsheet #<?php echo $model->resultsheetID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'resultsheetID',
		'admin_no',
		'examtype',
		'maths',
		'english',
		'kiswahili',
		'biology',
		'physics',
		'chemistry',
		'history',
		'geography',
		'religious_studies',
		'agriculture',
		'computerstudies',
		'businesstudies',
		'art',
		'aviation',
		'french',
		'music',
		'woodwork',
		'metal',
		'points',
		'totalmks',
		'mean',
		'grade',
		'position',
	),
)); ?>
