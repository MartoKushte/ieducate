<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	$model->academicsessionID=>array('view','id'=>$model->academicsessionID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Academic session', 'url'=>array('index')),
	array('label'=>'Create Academic session', 'url'=>array('create')),
	array('label'=>'View Academic session', 'url'=>array('view', 'id'=>$model->academicsessionID)),
	array('label'=>'Manage Academic session', 'url'=>array('admin')),
);
?>

<h1>Update Academicsession <?php echo $model->academicsessionID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>