<?php
/* @var $this ClientsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clients',
);

$this->menu=array(
	array('label'=>'Create Clients', 'url'=>array('create')),
	array('label'=>'Manage Clients', 'url'=>array('admin')),
);
?>

<h1>Clients</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'columns'=>array(
        'company_name',
        'contact_name',
        'contact_phone',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{Edit} | {Delete}',
            'buttons'=>array(
                'Edit'=>array(
                    'url'=>''
                ),
                'Delete'=>array(
                    'url'=>''
                )
            )
        )
    )
)); ?>
