<?php
/* @var $this ResultsheetController */
/* @var $model Resultsheet */

$this->breadcrumbs=array(
	'Resultsheets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Resultsheet', 'url'=>array('index')),
	array('label'=>'Manage Resultsheet', 'url'=>array('admin')),
);
?>

<h1>Create Resultsheet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>