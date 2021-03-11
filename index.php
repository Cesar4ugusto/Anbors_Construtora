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

	<header>
		<div class="container">
			<div><div class="logo1"></div><!--logo1--></div>
			<div><div class="logo2"></div><!--logo2--></div>
			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</header>

	<section class="cover-form">
		<div class="container bg">
			<div class="form-container">
				<h2>PODE ACREDITAR, POR DENTRO É AINDA MAIS BONITO.</h2>

				<form method="POST">

					<div class="form-wraper">
						<p>*Nome completo:</p>
						<input type="text" name="nome" required>
					</div><!--form-wraper-->

					<div class="form-wraper">
						<p>*E-mail:</p>
						<input type="email" name="email" required>
					</div><!--form-wraper-->

					<div class="form-wraper">
						<p>*Fone:</p>
						<input type="tel" name="telefone" required>
					</div><!--form-wraper-->

					<div class="form-wraper">
						<input type="submit" name="acao" value="Enviar">
					</div><!--form-wraper-->

					<div class="form-wraper">
						<p>* Campos Obrigatórios.</p>
					</div><!--form-wraper-->

				</form>
			</div><!--form-container-->
		</div><!--container-->
	</section><!--cover-form-->

	<section class="chamada">
		<div class="container">
			<div><h2>Viva a vida que você sempre sonhou</h2></div>
			<div><p>Coberturas e apartamentos de frente para o mar.</p></div>
		</div><!--container-->
	</section><!--chamada-->

	<section class="mosaico">
		<div class="container">

			<div class="flex-mosaico">
				<div style="background-image: url('images/mosaico4.jpg');" class="item-1-mosaico"></div><!--item-1-mosaico-->
				<div class="item-2-mosaico">
					<p>O sol nasce para todos mas se põe de um jeito mais exclusivo aqui.</p>
				</div><!--item-2-mosaico-->
			</div><!--flex-container-->

			<div class="flex-mosaico" style="flex-direction: row-reverse;">
				<div style="background-image: url('images/mosaico3.jpg');" class="item-1-mosaico"></div><!--item-1-mosaico-->
				<div class="item-2-mosaico">
					<p>A chave para a felicidade é a mesma que abre estas portas.</p>
				</div><!--item-2-mosaico-->
			</div><!--flex-container-->

			<div class="flex-mosaico">
				<div style="background-image: url('images/mosaico2.jpg');" class="item-1-mosaico"></div><!--item-1-mosaico-->
				<div class="item-2-mosaico">
					<h2 style="font-weight: normal; font-size: 17px;">Vai ser amor a primeira vista. E que vista.</h2>
					<p style="font-weight: bold; font-size: 13px; margin-top: 10px;">Apartamento decorado e pronto para morar.</p>
				</div><!--item-2-mosaico-->
			</div><!--flex-container-->

			<div class="flex-mosaico" style="flex-direction: row-reverse;">
				<div style="background-image: url('images/mosaico1.jpg');" class="item-1-mosaico"></div><!--item-1-mosaico-->
				<div class="item-2-mosaico">
					<p>Mais deslumbrantes que o cenário la fora, só os ambientes aqui dentro.</p>
				</div><!--item-2-mosaico-->
			</div><!--flex-container-->

		</div><!--container-->
	</section><!--mosaico-->

	<section class="servicos">
		<div class="container">
			<div><h2>Passe o final de ano no seu apartamento decorado e pronto para morar:</h2></div>
			<div><p>piscina externa com borda infinita / piscina interna com raia playground / 2 salões de festas / brinquedoteca / sala de massagem / sala de jogos / home cinema / sauna / business center / espaço mulher / espaço fitness / espaço gormet lounge / varanda do pôr do sol</p></div>
		</div><!--container-->
	</section><!--servicos-->

	<section class="contato">
		<div class="container">

			<div class="footer-container">
				<div class="footer-block">
					<h2>Telefone</h2>
					<p>César Augusto - <a target="_blank" href="https://api.whatsapp.com/send/?phone=5532984997373&text=Ol%C3%A1,%20vim%20pelo%20site%20da%20Anbors.%20%F0%9F%98%89">+55 32 98499-7373</a></p>
				</div><!--footer-block-->
			</div><!--footer-container-->

			<div class="footer-container">
				<div class="footer-block">
					<h2>Horários para atendimento:</h2>
					<p>De Segunda a Sexta - 08:00 horas às 12:00 horas e 13:00 horas às 18:00 horas.</p>
					<!--</br>
					Aos Sabados - 08:00 horas às 12:00 horas.-->
				</div><!--footer-block-->
			</div><!--footer-container-->

			<div class="clear"></div><!--clear-->
		</div><!--container-->
	</section><!--contato-->
	
	<footer>
		<p>Copyright © 2021-2030 Anbors Todos os direitos reservados.</p>
		<img src="<?php echo INCLUDE_PATH; ?>images/logo.png">
	</footer>

</body>

</html>