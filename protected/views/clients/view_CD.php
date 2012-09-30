<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Clients', 'url'=>array('index')),
	
);
?>

<h1>View Client-<?php echo $model->first_name; ?></h1>

<?php
$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Company Details', 'url'=>array('/clients/index2','id'=>$model->id)),
                array('label'=>'Accounts Address', 'url'=>array('/users/index')),
                array('label'=>'Contacts', 'url'=>array('/clients/index')),
                array('label'=>'General Notes', 'url'=>array('/tasks/index')),
                array('label'=>'Job History', 'url'=>array('/catalogue/index')),
                array('label'=>'Contact Notes', 'url'=>array('/Support/index')),
			),
            'itemCssClass'=>'detailsClient'
));
        
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
    'dataProvider'=>$model->search(),
    'columns'=>array(
		'compData.id',
        'compData.company_name',
        'compData.adress1',
        'compData.adress2',
        'compData.suburb',
        'compData.zip',
        'compData.state',
        'compData.phone',
        'compData.fax',
        'compData.website',
        
        
        array(
            'header'=>'Actions',
			'class'=>'CButtonColumn',
            'template' => '{Edit} | {Delete} ',
            'buttons'=>array(
                'Edit'=>array(
                    'url'=>'Yii::app()->createUrl("clients/update2",array("id"=>$data->id))',
                ),
                'Delete'=>array(
                    'url'=>'Yii::app()->createUrl("clients/delete",array("id"=>$data->id))',
                    'click'=>'function(){if (!confirm("Delete ?"))return false;}',
                    
                    
                ),
                 
            )
            
		),
	),
)
); ?>