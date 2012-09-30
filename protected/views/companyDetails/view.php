<?php
/* @var $this CompanyDetailsController */
/* @var $model CompanyDetails */

$this->breadcrumbs=array(
	'Company Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CompanyDetails', 'url'=>array('index')),
	array('label'=>'Create CompanyDetails', 'url'=>array('create')),
	array('label'=>'Update CompanyDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CompanyDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompanyDetails', 'url'=>array('admin')),
);
?>

<h1>View CompanyDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_name',
		'adress1',
		'adress2',
		'suburb',
		'zip',
		'state',
		'phone',
		'fax',
		'website',
	),
)); ?>
