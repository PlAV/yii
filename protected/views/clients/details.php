<?php
$this->breadcrumbs=array(
	
    'Clients'=>array('index'),
    $model->first_name,
    'Details'
);

$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Company Details', 'url'=>array('/post/index')),
                array('label'=>'Accounts Address', 'url'=>array('/users/index')),
                array('label'=>'Contacts', 'url'=>array('/clients/index')),
                array('label'=>'General Notes', 'url'=>array('/tasks/index')),
                array('label'=>'Job History', 'url'=>array('/catalogue/index')),
                array('label'=>'Contact Notes', 'url'=>array('/Support/index')),
			),
            'itemCssClass'=>'detailsClient'
));
    
 

$this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider'=>$model->search(),
    ));        
?>