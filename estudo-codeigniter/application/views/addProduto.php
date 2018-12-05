<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Novo cadastro</title>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Novo cadastro">
		<meta name="author" content="Yago Lagrotti Bracco">
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lte IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Novo produto</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Inicio</a></li>
					<li class="active">Novo produto</li>
				</ol>
				<form action="<?php echo base_url('produtos/salvar'); ?>" name="form_add" method="post">
					<div class="row">
						<div class="col-md-8">
							<label>Nome</label>
							<input type="text" name="nome" value="" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<label>Preço</label>
							<input type="text" name="preco" value="" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<label>Ativo</label>
							<select name="ativo" class="form-control">
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-2">
							<button type="submit" class="btn btn-primary">Cadastrar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
	<script
	src="https://code.jquery.com/jquery-1.11.3.min.js"
	integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
	crossorigin="anonymous"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
</html>