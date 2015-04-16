<?php
/* @var $this StudentreceiptController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Studentreceipts',
);

$this->menu=array(
	array('label'=>'Create Studentreceipt', 'url'=>array('create')),
	array('label'=>'Manage Studentreceipt', 'url'=>array('admin')),
);
?>

<h1>Studentreceipts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
