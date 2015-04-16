<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */

$this->breadcrumbs=array(
	'Bookissuereturns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Issued Books', 'url'=>array('index')),
	array('label'=>'Manage Issued Books', 'url'=>array('admin')),
);
?>

<h1>Issue Book</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>