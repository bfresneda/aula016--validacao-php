<?php 
	echo('<pre>');
	print_r($_POST);	
	echo ('</pre>');

	require('./includes/validadores.php');

	//validador nome
	// if($_POST){
	// if(nomeOk($_POST['nome'])){
	// 	echo('Nome ok');
	// }elseif(nomeOk($_POST['nome'] == '')){
	// 	echo('Escreve ao menos seu nome!');
	// }
	// elseif( $_POST['nome'] < 8){
	// 	echo('Seu nome esta menor que 8 caracteres.');
	// }
	// else{
	// 	echo('Seu nome ultrapassou 40 caracteres.');
	// }
	// }

// definindo valor padrão para $nomeOk

$nomeOk = true;
$cpfOk = true;
$emailOk = true;
$senhaOk = true;

// Verificando se veio via post

if($_POST){
	$nomeOk = nomeOk($_POST['nome']);
	$cpfOk = cpfOk($_POST['cpf']);
	$emailOk = emailOk($_POST['email']);
	$senhaOk = senhaOk($_POST['senha']);
}


	// //cpf
	// if($_POST){
	
	// }


?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<main class="container mt-5">
		<div class="row">
			<div class="col-6 offset-3">
				<form method="post">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control <?= $nomeOk ? '' : 'is-invalid'; ?>" id="nome" name="nome" placeholder="Nome" required>
					<div class="invalid-feedback">Digite um nome válido</div>
					<label for="CPF">CPF</label>
					<input type="text" class="form-control <?= $cpfOk ? '' : 'is-invalid'; ?>" id="CPF" name="cpf" placeholder="000.000.000-00" required>
					<div class="invalid-feedback">Digite um CPF valido</div>
					<label for="Email">Email</label>
					<input type="text" class="form-control <?= $emailOk ? '' : 'is-invalid'; ?>" id="Email" name="email" placeholder="Email@dominio.com" required>
					<div class="invalid-feedback">Digite um Email valido</div>
					<label for="Senha">Senha</label>
					<input type="password" class="form-control <?= $senhaOk ? '' : 'is-invalid'; ?>" id="Senha" name="senha" placeholder="Senha" required>
					<div class="invalid-feedback">Digite um senha valida</div>
				</div>



					<button class="btn btn-primary float-right mt-3" type="submit">Enviar</button>
				</form>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>