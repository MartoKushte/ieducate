<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Academic session', 'url'=>array('index')),
	array('label'=>'Manage Academic session', 'url'=>array('admin')),
);
?>

<h1>Create Academic session</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>