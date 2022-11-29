<?php
$myusuario= "dsgr";
$mypass = "12345";

if(isset($_POST['login'])){
	$usuario    = $_POST['usuario'];
	$contraseña = $_POST['password'];
	if($usuario == $myusuario and $contraseña ==$mypass){
		if (isset($_POST['remember'])) {
		setcookie('usuario', $usuario, time()+60*60*7);}
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("location: panelprincipales.php");
	}else{
		echo "El usuario o contraseña son invalidos.<br> clic aquí para <a href='login.php'>intenta de nuevo </a>" ;
	}
	} else { 
	header("location: login.php");
}

?>