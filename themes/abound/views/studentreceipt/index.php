<?php
/* @var $this StudentreceiptController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Studentreceipts',
);

$this->menu=array(
	array('label'=>'Create Student receipt', 'url'=>array('create')),
	array('label'=>'Manage Student receipt', 'url'=>array('admin')),
);
?>

<h1>Student receipts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
