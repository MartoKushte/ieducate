<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'form-type-report-meta-data-grid',
    'dataProvider'=>$model->search(),
        'htmlOptions' => array('class' => 'table table-striped'),
    'filter'=>$model,
        'pagerCssClass' => '',
        'pager' => array(
            'class' => 'CLinkPager',
            'selectedPageCssClass' => 'active',
            'hiddenPageCssClass' => 'disabled',
            'htmlOptions' => array('class' => 'pagination pagination-lg'),
        ),
    'columns'=>array(
                'another_boring_column',
                array(
                'header' => 'Actions',
                'class' => 'CButtonColumn',
                'buttons'=>array(
                    'update' => array(
                        'imageUrl' =>false,
                        'label' => '',
                        'options' => array( 'title'=>'Edit', 'class' => 'glyphicon glyphicon-pencil'),
                    ),
                    'view' => array(
                        'imageUrl' =>false,
                        'label' => '',
                        'options' => array( 'title'=>'View', 'class' => 'glyphicon glyphicon-eye-open'),                       
                    ),
                    'delete' => array(
                        'imageUrl' =>false,
                        'label' => '',
                        'options' => array( 'title'=>'Delete', 'class' => 'glyphicon glyphicon-remove-circle'),                       
                    ),                   
                ),
            ),
    ),
));
?>