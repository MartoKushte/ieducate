<?php
/* @var $this BookissuereturnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bookissuereturns',
);

$this->menu=array(
	array('label'=>'Issue Book', 'url'=>array('create')),
	array('label'=>'Manage Issued Books', 'url'=>array('admin')),
);
?>

<h1>Issued Books</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
