<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */

$this->breadcrumbs=array(
	'Bookissuereturns'=>array('index'),
	$model->bookissuereturnID,
);

$this->menu=array(
	array('label'=>'List Issued Books', 'url'=>array('index')),
	array('label'=>'Issue Books', 'url'=>array('create')),
	array('label'=>'Update Issued Books', 'url'=>array('update', 'id'=>$model->bookissuereturnID)),
	array('label'=>'Delete Issued Books', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bookissuereturnID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Issued Books', 'url'=>array('admin')),
);
?>

<h1>View Issued Books #<?php echo $model->bookissuereturnID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bookID',
		'personID',
		'dateissue',
		'datereturn',
		'duedate',
		'issuedby',
		'fine',
		'isfinepaid',
		'dateadded',
		'datemodified',
	),
)); ?>
