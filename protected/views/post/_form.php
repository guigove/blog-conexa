<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>



<div class="form col-12 col-md-6 mx-auto">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'post-form',
		'enableAjaxValidation' => false,
	)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">

		<?php echo $form->labelEx($model, 'categoria_id'); ?>
		<?php echo $form->dropDownList($model, 'categoria_id', $categorias, array('class' => 'form-control')) ?>
		<?php echo $form->error($model, 'categoria_id'); ?>

	</div>


	<div class="form-group">

		<?php echo $form->labelEx($model, 'titulo'); ?>
		<?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'titulo'); ?>

	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model, 'conteudo'); ?>
		<?php echo $form->textArea($model, 'conteudo', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'conteudo'); ?>

	</div>

	<div class="form-group">

		<?php echo $form->labelEx($model, 'autor'); ?>
		<?php echo $form->textField($model, 'autor', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
		<?php echo $form->error($model, 'autor'); ?>

	</div>



	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Save'); ?>
	</div>







	<?php $this->endWidget(); ?>

</div><!-- form -->