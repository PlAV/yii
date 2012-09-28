<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Add New User', 'url'=>array('create')),
	
);
?>

<h1>Users</h1>


 
 <?php
        
     $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
    
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'email',
		'mobile',
		'role',
		'is_active',
		/*
		
		'id_user',
		*/
		array(
			'class'=>'CButtonColumn',
            'template' => '{Edit} | {Delete}',
            'buttons'=>array(
                'Edit'=>array(
                    'url'=>'Yii::app()->createUrl("users/update",array("id"=>$data->id))',
                    
                    
                    
                ),
                'Delete'=>array(
                    'url'=>'Yii::app()->createUrl("users/delete",array("id"=>$data->id))',
                    'click'=>'function(){if (!confirm("Delete ?"))return false;}',
                    
                    
                ),
                
            )
            
		),
	),
)); ?>

