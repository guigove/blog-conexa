<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
	'Posts' => array('index'),
	$model->id,
);

$this->menu = array(
	array('label' => 'List Post', 'url' => array('index')),
	array('label' => 'Create Post', 'url' => array('create')),
	array('label' => 'Update Post', 'url' => array('update', 'id' => $model->id)),
	array('label' => 'Delete Post', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
	array('label' => 'Manage Post', 'url' => array('admin')),
);
?>

<div class="album py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">
					<?php echo $model->titulo; ?>
				</h2>
			</div>
			<div class="col-md-12">
				<small class="text-left">
					Categoria: <strong><?php echo $model->categoria->nome; ?> </strong>
				</small>
			</div>
			<div class="col-md-12 mt-4">
				<p class="text-center">
					<?php echo $model->conteudo; ?>
				</p>
			</div>
			<div class="col-md-6 mt-3">
				<p>Autor: <strong><?php echo $model->autor; ?></strong></p>
			</div>
			<div class="col-md-6 mt-3">
				<p class="text-right"><?php echo date("d/m/Y H:i", strtotime($model->data)); ?></p>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-md-9">
				<h3>Comentarios </h3>
			</div>
			<div class="col-md-3">
				<a href="<?= Yii::app()->createUrl("comentario/create", array('post' => Yii::app()->request->getQuery('id'))) ?>" class="btn btn-block btn-dark">
					Criar comentario
				</a>
			</div>
		</div>

		<div class="row mt-3">
			<?php
			if (empty($model->comentarios)) { ?>
				<div class="col-md-12 mt-2">

					<div class="card mb-12 shadow-sm">
						<div class="card-body">
							<p class="card-text text-center"><strong>Sem comentarios</strong></p>
						</div>
					</div>
				</div>
			<?php }
			foreach ($model->comentarios as $c) {
			?>
				<div class="col-md-12 mt-2">
					<div class="card mb-12 shadow-sm">
						<div class="card-body">
							<p class="card-text"><?php echo $c->conteudo ?></p>
							<div class="d-flex justify-content-between align-items-center">
								<small class="text-muted">Autor: <?php echo $c->autor ?></small>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>