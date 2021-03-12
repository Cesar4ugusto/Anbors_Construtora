<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Anbors - Soluções em Designer e Desenvolvimento</title>
	<meta charset="utf-8"/>
	<meta name="author" content="César Augusto"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon">
</head>

<body>
	<?php $url = isset($_GET['url']) ? $_GET['url'] : 'home'; ?>
	<header>
		<div class="container">
			<div><div class="logo1"></div><!--logo1--></div>
			<div><div class="logo2"></div><!--logo2--></div>
			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</header>

	<div class="container-principal">
	<?php	

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			$pagina404 = true;
			include('pages/404.php');
		}

	?>
	</div><!--container-principal-->

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"' ?>>
		<p>Copyright © 2021-2030 Anbors Todos os direitos reservados.</p>
		<img src="<?php echo INCLUDE_PATH; ?>images/logo.png">
	</footer>

</body>

</html>