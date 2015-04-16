<?php
/* @var $this ResultsheetController */
/* @var $model Resultsheet */

$this->breadcrumbs=array(
	'Resultsheets'=>array('index'),
	$model->resultsheetID=>array('view','id'=>$model->resultsheetID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Resultsheet', 'url'=>array('index')),
	array('label'=>'Create Resultsheet', 'url'=>array('create')),
	array('label'=>'View Resultsheet', 'url'=>array('view', 'id'=>$model->resultsheetID)),
	array('label'=>'Manage Resultsheet', 'url'=>array('admin')),
);
?>

<h1>Update Resultsheet <?php echo $model->resultsheetID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>