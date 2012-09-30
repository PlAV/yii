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



/**/
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>