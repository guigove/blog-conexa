<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" /> -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Conexa - Blog</title>
</head>

<body class="bg-light">

	<div>

		<header>
			<nav>
				<div class="navbar navbar-dark bg-dark shadow-sm navbar-expand-lg">
					<div class="container d-flex justify-content-between">
						<a href="<?= Yii::app()->createUrl("site")  ?>" class="navbar-brand d-flex align-items-center ">
							<strong>Conexa</strong>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<div class="navbar-nav">
								<li class="nav-item active ">
									<a class="nav-link" href="<?= Yii::app()->createUrl("site")  ?>">Home </a>
								</li>
								<li class="nav-item active ">
									<a class="nav-link" href="<?= Yii::app()->createUrl("post")  ?>">Posts</a>
								</li>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<div class="container" id="topo">
			<?php echo $content; ?>
		</div>


		<div class="clear"></div>

		<footer class="text-muted footer fixed-bottom bg-dark" style="height:40px;">
			<div class="container-fluid">
				<div class="container">
					
						<p class="float-right">
							<a href="#topo">Voltar pro topo</a>
						</p>
						<p class="mt-2">&copy; Conexa &middot; <?php echo date('Y'); ?> </p>
		
				</div>

			</div>
		</footer>


	</div><!-- page -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>