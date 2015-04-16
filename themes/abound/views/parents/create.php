<?php
/* @var $this ParentsController */
/* @var $model Parents */

$this->breadcrumbs=array(
	'Parents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Parents', 'url'=>array('index')),
	array('label'=>'Manage Parents', 'url'=>array('admin')),
);
?>

<h1>Add new parent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>