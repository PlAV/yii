<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
   
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
    'focus'=>array($model,'name'),
  
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
    
    
    <div class="row">
		<?php echo $form->labelEx($model->regData,'login'); ?>
		<?php echo CHtml::encode($model->regData->login); ?>
		
	</div>
    <div class="row">
		<?php echo $form->labelEx($model->regData,'passwd'); ?>
		<?php echo $form->textField($model->regData,"passwd"); ?>
		<?php echo $form->error($model->regData,'passwd'); ?>
	</div>
    

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile'); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
        <?php echo $form->dropDownList($model,'role',array('Estimator'=>'Estimator',
                                                            'Online Support'=>'Online Support',
                                                            'Production'=>'Production',
                                                            'Production manager'=>'Production manager',
                                                            'Deigner manager'=>'Designer manager',
                                                            'Accountant'=>'Accountant',
                                                            'Designer'=>'Designer',
                                                            'General manager'=>'General manager',
                                                            'Sales'=>'Sales',
                                                            'Staff'=>'Staff'
        )); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->checkBox($model,"is_active"); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->