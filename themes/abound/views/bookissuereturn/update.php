<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */

$this->breadcrumbs=array(
	'Bookissuereturns'=>array('index'),
	$model->bookissuereturnID=>array('view','id'=>$model->bookissuereturnID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Issued Books', 'url'=>array('index')),
	array('label'=>'Issue Books', 'url'=>array('create')),
	array('label'=>'View Issued Books', 'url'=>array('view', 'id'=>$model->bookissuereturnID)),
	array('label'=>'Manage Issued Books', 'url'=>array('admin')),
);
?>

<h1>Update Issued Book <?php echo $model->bookissuereturnID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>