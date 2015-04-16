<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Academic sessions', 'url'=>array('index')),
	array('label'=>'Create Academic sessions', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#academicsession-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Academic Sessions</h1>

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
	'id'=>'academicsession-grid',
'dataProvider'=>$model->search(),
	'filter'=>$model,
		'htmlOptions' => array('class' => 'table table-striped'),
		'pagerCssClass' => '',
		'pager' => array(
				'class' => 'CLinkPager',
				'selectedPageCssClass' => 'active',
				'hiddenPageCssClass' => 'disabled',
				'htmlOptions' => array('class' => 'pagination pagination-lg'),
		),
	'columns'=>array(
		'sessionyear',
		'sessionopendate',
		'sessionclosedate',
		'sessionstatus',
		'dateadded',
					array(
			'name' => 'sessionyear',
		'htmlOptions' => array('style' => 'width: 40px;'),
				'filterHtmlOptions' => array('style' => 'width: 40px;'),
),		
			array(
			'name' => 'sessionopendate',
		'htmlOptions' => array('style' => 'width: 60px;'),
				'filterHtmlOptions' => array('style' => 'width: 60px;'),
),		
			array(
			'name' => 'sessionclosedate',
		'htmlOptions' => array('style' => 'width: 60px;'),
				'filterHtmlOptions' => array('style' => 'width: 60px;'),
),		
			array(
			'name' => 'sessionstatus',
		'htmlOptions' => array('style' => 'width: 70px;'),
				'filterHtmlOptions' => array('style' => 'width: 70px;'),
),					array(
			'name' => 'dateadded',
		'htmlOptions' => array('style' => 'width: 70px;'),
				'filterHtmlOptions' => array('style' => 'width: 70px;'),
),		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
