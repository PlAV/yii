<?php
/* @var $this ClientsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clients',
);

$this->menu=array(
	array('label'=>'Create Clients', 'url'=>array('create')),
	
);
?>

<h1>Clients</h1>

 <?php
        
     $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
    
	'dataProvider'=>Clients::model()->search(),
    'columns'=>array(
		'id',
		'compData.company_name',
        array(
            'name'=>'contact name',
            'value'=>'$data->first_name'    
        ),
        array(
            'name'=>'Contact phone',
            'value'=>'$data->mobile'    
        ),
        array(
            'header'=>'Actions',
			'class'=>'CButtonColumn',
            'template' => '{Edit} | {Delete}',
            'buttons'=>array(
                'Edit'=>array(
                    'url'=>'Yii::app()->createUrl("clients/update",array("id"=>$data->id))',
                    
                    
                    
                ),
                'Delete'=>array(
                    'url'=>'Yii::app()->createUrl("clients/delete",array("id"=>$data->id))',
                    'click'=>'function(){if (!confirm("Delete ?"))return false;}',
                    
                    
                ),
                
            )
            
		),
	),
)); ?>
