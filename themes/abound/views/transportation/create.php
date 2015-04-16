<?php
/* @var $this TransportationController */
/* @var $model Transportation */

$this->breadcrumbs=array(
	'Transportations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Transportation', 'url'=>array('index')),
	array('label'=>'Manage Transportation', 'url'=>array('admin')),
);
?>

<h1>Create Transport Detail</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>