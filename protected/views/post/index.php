<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>Posts</h1>
 
<div class="album py-5">
    <div class="container">

      <div class="row">
	  		<?php
				foreach($posts as $post){
			?>
        <div class="col-md-4 mx-auto">
          <div class="card mb-4 shadow-sm">
		  	<div class="card-header">
			  <h4 class="card-text"><?php echo $post->titulo ?></h4>
			</div>
            <div class="card-body">
              <p class="card-text"><?php echo $post->conteudo ?></p>
              <div class="d-flex justify-content-between align-items-center">
			  	<small class="text-muted"><?php echo $post->autor ?></small>
                <small class="text-muted"><?php echo $post->data ?></small>
              </div>
			  <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"> Mostrar</button>
                  
                </div>
            </div>
          </div>
        </div>
		<?php }?>
      </div>
    </div>
  </div>