<?php
/* @var $this ResultsheetController */
/* @var $model Resultsheet */

$this->breadcrumbs=array(
	'Resultsheets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Resultsheet', 'url'=>array('index')),
	array('label'=>'Create Resultsheet', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#resultsheet-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Resultsheets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'resultsheet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'resultsheetID',
		'admin_no',
		'examtype',
		'maths',
		'english',
		'kiswahili',
		/*
		'biology',
		'physics',
		'chemistry',
		'history',
		'geography',
		'religious_studies',
		'agriculture',
		'computerstudies',
		'businesstudies',
		'art',
		'aviation',
		'french',
		'music',
		'woodwork',
		'metal',
		'points',
		'totalmks',
		'mean',
		'grade',
		'position',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
