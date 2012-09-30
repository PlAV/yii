<?php
/* @var $this ClientsController */
/* @var $model Clients */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	$model->first_name,
	'Edit',
);

$this->menu=array(
	array('label'=>'List Clients', 'url'=>array('index')),

);



$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Company Details', 'url'=>array('/clients/update2','id'=>$model->id)),
                array('label'=>'Accounts Address', 'url'=>array('/users/index')),
                array('label'=>'Contacts', 'url'=>array('/clients/index')),
                array('label'=>'General Notes', 'url'=>array('/tasks/index')),
                array('label'=>'Job History', 'url'=>array('/catalogue/index')),
                array('label'=>'Contact Notes', 'url'=>array('/Support/index')),
			),
            'itemCssClass'=>'detailsClient'
));
?>
<?php echo $this->renderPartial('_form2', array('model'=>$model)); ?>