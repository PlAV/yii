<?php
/* @var $this CompanyDetailsController */
/* @var $model CompanyDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'company_name'); ?>
		<?php echo $form->textField($model->compData,'company_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model->compData,'company_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'adress1'); ?>
		<?php echo $form->textField($model->compData,'adress1',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model->compData,'adress1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'adress2'); ?>
		<?php echo $form->textField($model->compData,'adress2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model->compData,'adress2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'suburb'); ?>
		<?php echo $form->textField($model->compData,'suburb',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model->compData,'suburb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'zip'); ?>
		<?php echo $form->textField($model->compData,'zip'); ?>
		<?php echo $form->error($model->compData,'zip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'state'); ?>
		<?php echo $form->textField($model->compData,'state',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model->compData,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'phone'); ?>
		<?php echo $form->textField($model->compData,'phone'); ?>
		<?php echo $form->error($model->compData,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'fax'); ?>
		<?php echo $form->textField($model->compData,'fax'); ?>
		<?php echo $form->error($model->compData,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->compData,'website'); ?>
		<?php echo $form->textField($model->compData,'website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model->compData,'website'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->compData->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->