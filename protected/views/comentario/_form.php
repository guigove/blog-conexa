<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comentario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_id'); ?>
		<?php echo $form->textField($model,'post_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'post_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->