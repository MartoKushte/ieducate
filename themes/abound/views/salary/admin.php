<?php
/* @var $this SalaryController */
/* @var $model Salary */

$this->breadcrumbs=array(
	'Salaries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Salary records', 'url'=>array('index')),
	array('label'=>'Create Salary records', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salary-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Salary records</h1>

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
	'id'=>'salary-grid',
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
			/*	'idsalary',
		'staffid',
		'krapin',
		'firstname',
		'othernames',
		'surname',
		'nationalid',
		'employeeposition',
		'month',
		'year',
		'bankname',
		'bankbranch',
		'accountname',
		'accountnumber',
		'amount',
		'ispaid',
		*/
		array(
			'name' =>'idsalary',
		'htmlOptions' => array('style' => 'width: 40px;'),
				'filterHtmlOptions' => array('style' => 'width: 100px;'),
		),				
				array(
			'name' =>'staffid',
		'htmlOptions' => array('style' => 'width: 140px;'),
				'filterHtmlOptions' => array('style' => 'width: 140px;'),
		),		
			array(
			'name' =>'krapin',
		'htmlOptions' => array('style' => 'width: 160px;'),
				'filterHtmlOptions' => array('style' => 'width: 160px;'),
		),	
			array(
			'name' =>'firstname',
		'htmlOptions' => array('style' => 'width: 170px;'),
				'filterHtmlOptions' => array('style' => 'width: 170px;'),
		),	
			array(
			'name' =>'surname',
		'htmlOptions' => array('style' => 'width: 170px;'),
				'filterHtmlOptions' => array('style' => 'width: 170px;'),
		),	
		array(
			'name' =>'bankname',
		'htmlOptions' => array('style' => 'width: 170px;'),
				'filterHtmlOptions' => array('style' => 'width: 170px;'),
		),	
			array(
			'name' =>'bankbranch',
		'htmlOptions' => array('style' => 'width: 170px;'),
				'filterHtmlOptions' => array('style' => 'width: 170px;'),
		),	
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
