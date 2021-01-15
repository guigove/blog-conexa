<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="collapse" id="filtro">
	<div class="form col-12 col-md-6 mx-auto">

		<?php $form = $this->beginWidget('CActiveForm', array(
			'action' => Yii::app()->createUrl($this->route),
			'method' => 'get',
		)); ?>



		<div class="form-group">
			<?php echo $form->label($model, 'categoria_id'); ?>
			<?php echo $form->dropDownList($model, 'categoria_id', $categorias, array('class' => 'form-control')) ?>

		</div>

		<div class="form-group">
			<?php echo $form->label($model, 'titulo'); ?>
			<?php echo $form->textField($model, 'titulo', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
		</div>



		<div class="form-group">
			<?php echo $form->label($model, 'data'); ?>
			<?php echo $form->dateField($model, 'data', array('class' => 'form-control')); ?>
		</div>


		<div class="row buttons">
			<?php echo CHtml::submitButton('Pesquisar'); ?>
		</div>

		<?php $this->endWidget(); ?>

	</div><!-- search-form -->
</div>