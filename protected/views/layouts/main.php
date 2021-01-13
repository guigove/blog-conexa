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

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="bg-light">

	<div>
		<header>

			<div class="navbar navbar-dark bg-dark shadow-sm">
				<div class="container d-flex justify-content-between">
					<a href="#" class="navbar-brand d-flex align-items-center">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false">
							<path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
							<circle cx="12" cy="13" r="4" />
						</svg>
						<strong>Conexa</strong>
					</a>
					<div class="navbar-text">
						<?php $this->widget('zii.widgets.CMenu', array(
							'items' => array(
								array('label' => 'Home', 'url' => array('/site/index')),
								array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
								array('label' => 'Contact', 'url' => array('/site/contact')),
								array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
								array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
							),
							'htmlOptions' => array(
								'class' => 'list-unstyled '
							),
							'itemCssClass' => 'nav-item d-inline-block ml-3 mt-3'
						)); ?>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
			</div>
			<div class="collapse bg-dark" id="navbarHeader">
				<div class="container">
					<div class="row">
						<?php
						foreach ($this->menu as $m) {
						?>
							<a class="nav-item ml-3" href="<?= Yii::app()->createUrl($this->actionParams['r'] . "/" . $m["url"][0])  ?>"> <?php echo $m["label"]; ?> </a>
						<?php } ?>
					</div>
				</div>
			</div>
		</header>




		<?php if (isset($this->breadcrumbs)) : ?>
			<?php /*$this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); */ ?>
			<!-- breadcrumbs -->
		<?php endif ?>
		<div class="container">

			<?php echo $content; ?>
		</div>


		<div class="clear"></div>

		<footer class="container">		
			<p>&copy; Conexa &middot; <?php echo date('Y'); ?> </p>
		</footer>

	</div><!-- page -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>