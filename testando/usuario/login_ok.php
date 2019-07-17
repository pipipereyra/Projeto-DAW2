<?php
	session_start();
	include_once "../class/Usuarios.class.php";
	
	$obj = new Usuarios();
	$obj->E_mail =$_POST['email'];
	$obj->Senha = md5($_POST['senha']);
	//var_dump($_POST['senha']);
	$login= $obj->login();
	require_once '../app/init.php';
		$response = $recaptcha->verify($_POST['g-recaptcha-response']);
	 if($login){
		$_SESSION['loginADM'] = true;
		header("Location:../index2.php");
	}
	else{
		echo "Preencha os campos corretamente!";} 

		
	if($response->isSuccess()){
			header("Location:../index2.php");
	}else{
			echo "Preencha os campos corretamente!"; 
		}
?>