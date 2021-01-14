<?php
/* @var $this ComentarioController */
/* @var $model Comentario */
/* @var $form CActiveForm */
?>

<div class="form col-12 col-md-6 mx-auto">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'comentario-form',
		'enableAjaxValidation' => false,
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'autor'); ?>
		<?php echo $form->textField($model, 'autor', array('size' => 20, 'maxlenght' => 20,'class'=>'form-control')); ?>
		<?php echo $form->error($model, 'autor'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model, 'conteudo'); ?>
		<?php echo $form->textArea($model, 'conteudo', array('rows' => 6, 'cols' => 50,'class'=>'form-control')); ?>
		<?php echo $form->error($model, 'conteudo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->hiddenField($model, 'post_id', array('type'=>'hidden','value'=>$id,'size' => 10, 'maxlength' => 10,'class'=>'form-control')); ?>
		<?php echo $form->error($model, 'post_id'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->