<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Profile',
);


?>

<h1>Profile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>