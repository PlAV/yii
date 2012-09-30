<?php
/* @var $this CompanyDetailsController */
/* @var $model CompanyDetails */

$this->breadcrumbs=array(
	'Company Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompanyDetails', 'url'=>array('index')),
	array('label'=>'Manage CompanyDetails', 'url'=>array('admin')),
);
?>

<h1>Create CompanyDetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>