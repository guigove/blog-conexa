<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */


$this->menu = array(
  array('label' => 'Create Post', 'url' => array('create')),
  array('label' => 'Manage Post', 'url' => array('admin')),
);
?>



<div class="album py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h1> Posts </h1>
      </div>
      <div class="col-md-3">
        <a href="<?= Yii::app()->createUrl("post/create") ?>" class="btn btn-block btn-dark">
          Criar Post
        </a>
      </div>
    </div>
    <div class="row mt-4">
      <?php
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
                if (strlen($post->conteudo) > 20) {
                  $post->conteudo = substr($post->conteudo, 0, 20) . "...";
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
    <nav aria-label="Page navigation example ">
      <?php $this->widget('CLinkPager', array(
        'pages' => $paginas,
        'header' => '',
        'htmlOptions' => array('class' => 'pagination'),
        'internalPageCssClass' => 'page-item page-link',
        'lastPageCssClass' => 'page-link',
        'firstPageCssClass' => 'page-link',
        'nextPageCssClass' => 'page-link',
        'previousPageCssClass' => 'page-link',
        'selectedPageCssClass' => 'active',
        'lastPageLabel' => '>>',
        'firstPageLabel' => '<<',
        'nextPageLabel' => '>',
        'prevPageLabel' => '<',
      )) ?>
    </nav>
  </div>
</div>