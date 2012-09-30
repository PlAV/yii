<?php
/* @var $this CompanyDetailsController */
/* @var $model CompanyDetails */

$this->breadcrumbs=array(
	'Company Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompanyDetails', 'url'=>array('index')),
	array('label'=>'Create CompanyDetails', 'url'=>array('create')),
	array('label'=>'View CompanyDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompanyDetails', 'url'=>array('admin')),
);
?>

<h1>Update CompanyDetails <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>