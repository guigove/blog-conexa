<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
	'Posts' => array('index'),
	'Create',
);
?>

<div class="container mt-3">

	<h1 class="text-center">Criar Post</h1>

	<?php echo $this->renderPartial('_form', array('model' => $model, 'categorias' => $categorias)); ?>
</div>