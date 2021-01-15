<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>



<div class="album py-5">
	<div class="container">
		<h1 class="text-center">Conexa Blog</h1>
		<div class="row mt-4">
			<?php
			if (empty($posts)) { ?>
				<div class="col-md-4 mx-auto">
					<div class="alert alert-danger text-center" role="alert">
						Nenhum Post cadastrado
					</div>
				</div>
			<?php
			}
			foreach ($posts as $post) {
			?>
				<div class="col-md-4 mx-auto my-2">
					<div class="card mb-4 shadow-sm h-100">
						<div class="card-header">
							<h4 class="card-text"><?php echo $post->titulo ?></h4>
						</div>
						<div class="card-body">
							<p class="card-text">
								<?php
								if (strlen($post->conteudo) > 30) {
									$post->conteudo = substr($post->conteudo, 0, 50) . "...";
								}
								echo $post->conteudo;
								?>
							</p>
							<a href="<?= Yii::app()->createUrl("post/view", array('id' => $post->id)) ?>" class="">
								<small>Visualizar</small>
							</a>
						</div>
						<div class="card-footer bg-white">
							<div class="d-flex justify-content-between align-items-center">
								<small class="text-muted">Autor:<strong> <?php echo $post->autor ?></strong></small>
								<small class="text-muted"><?php echo date("d/m/Y H:i", strtotime($post->data)); ?></small>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="row">
			<?php
			if (empty($posts)) { ?>
				<div class="col-md-2  col-12 mx-auto">
					<a href="<?= Yii::app()->createUrl("post/create") ?>" class="btn btn-block btn-dark">
						Criar Post
					</a>
				</div>
			<?php
			} else { ?>
				<div class="col-md-2  col-12 mx-auto my-4">
					<a href="<?= Yii::app()->createUrl("post") ?>" class="btn btn-block btn-dark">
						Ver mais
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>