<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Lista de produtos da tabela produtos</title>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Lista de produtos da tabela produtos">
		<meta name="author" content="Yago Lagrotti Bracco">
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lte IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			.margin-button15 {
				margin-bottom: 15px;
			}
		</style>
	</head>
	<body> 
		<div class="container">
			<div class="row">
				<h1>Lista de produtos</h1>
				<a href="produtos/add" class="btn btn-success margin-button15">Novo Produto</a>
				<table class="table table-bordered">
					<thead>
						<tr>
						<th class="text-center">Produto</th>
						<th class="text-right">Preço</th>
						<th class="text-center">Açoes</th>
						</tr>
					</thead>
					<?php
						$contador = 0;
						foreach ($produtos as $produto)
						{
							echo '<tr>';
								echo '<td>'.$produto->nome.'</td>'; 
								echo '<td class="text-right">'.$produto->preco.'</td>'; 
								echo '<td class="text-center">';
									echo '<a href="'.base_url().'produtos/editar/'.$produto->id.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
									echo ' <a href="'.base_url().'produtos/apagar/'.$produto->id.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
									echo ' <a href="'.base_url().'produtos/detalhes/'.$produto->id.'" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>';
								echo '</td>'; 
							echo '</tr>';
						$contador++;
						}
					?>
				</table>
				<div class="row">
					<div class="col-md-12">
						Todal de Registro: <?php echo $contador ?>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script
	src="https://code.jquery.com/jquery-1.11.3.min.js"
	integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
	crossorigin="anonymous"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
</html>