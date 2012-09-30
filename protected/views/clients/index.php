<?php
/* @var $this ClientsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clients',
);

$this->menu=array(
	array('label'=>'Add New Client', 'url'=>array('create')),
	
);
?>



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
            'template' => '{Details} | {Delete} ',
            'buttons'=>array(
                'Details'=>array(
                    'url'=>'Yii::app()->createUrl("clients/view",array("id"=>$data->id))',
                ),
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
