<?php 

$email = $_POST['email'];

$password = $_POST['password'];

	if ($email == 'paulo@mail.com' && $password == 'abc123') {
		

		echo "Logado com sucesso!";
	
	}else{

		echo "Erro, usuário ou senha incorretos!";
	}

 ?>