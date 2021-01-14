<?php
/* @var $this ComentarioController */
/* @var $model Comentario */

$this->breadcrumbs = array(
	'Comentarios' => array('index'),
	'Create',
);


?>
<div class="container mt-3">
	<h1 class="text-center">Criar Comentario</h1>

	<?php echo $this->renderPartial('_form', array('model' => $model, 'id' => Yii::app()->request->getQuery('post')))  ?>
</div>