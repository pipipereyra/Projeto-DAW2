<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
	session_start();
	include_once "../class/Usuarios.class.php";
	
	$obj = new Usuarios();

	$obj->E_mail =strip_tags($_POST['email']);
	$obj->Senha = md5($_POST['senha']);
	//var_dump($_POST['senha']);
	//echo md5($_POST['senha']);
	$login= $obj->login();
	require_once '../app/init.php';
		$response = $recaptcha->verify($_POST['g-recaptcha-response']);
	 if($login){
		$_SESSION['loginADM'] = true;
		if($response->isSuccess()){
			echo "<div style='text-align:center;' class='alert alert-success'> 
			<strong>Seja Bem vindo!</strong>
			</div>";
			header("Refresh:3; url=../index2.php");
		}
		else{
			echo "<div style='text-align:center;' class='alert alert-danger'>
			<strong>Você esqueceu de validar o reCaptcha!</strong>
			</div>";
			header("Refresh:3; url=login.php");
			}
	}
	else{
		echo "<div style='text-align:center;' class='alert alert-danger'>
		<strong>Usuário e/ou senha incorretos ou em branco!</strong>
		</div>";
		header("Refresh:3; url=login.php");
		}
?>