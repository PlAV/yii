<?php
/* @var $this CompanyDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Company Details',
);

$this->menu=array(
	array('label'=>'Create CompanyDetails', 'url'=>array('create')),
	array('label'=>'Manage CompanyDetails', 'url'=>array('admin')),
);
?>

<h1>Company Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
