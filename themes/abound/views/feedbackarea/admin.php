<?php
/* @var $this FeedbackareaController */
/* @var $model Feedbackarea */

$this->breadcrumbs=array(
	'Feedbackareas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Feedback', 'url'=>array('index')),
	array('label'=>'Create Feedback', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#feedbackarea-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Feedback</h1>

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
	'id'=>'feedbackarea-grid',
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
					array(
			'name' => 'feedbackID',
		'htmlOptions' => array('style' => 'width: 40px;'),
				'filterHtmlOptions' => array('style' => 'width: 40px;'),
),		
				array(
			'name' => 'Title',
		'htmlOptions' => array('style' => 'width: 70px;'),
				'filterHtmlOptions' => array('style' => 'width: 70px;'),
),		
		'Description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
