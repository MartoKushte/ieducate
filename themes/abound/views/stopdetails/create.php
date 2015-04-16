<?php
/* @var $this StopdetailsController */
/* @var $model Stopdetails */

$this->breadcrumbs=array(
	'Stopdetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stopdetails', 'url'=>array('index')),
	array('label'=>'Manage Stopdetails', 'url'=>array('admin')),
);
?>

<h1>Add Vehicle Stopdeatils</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>