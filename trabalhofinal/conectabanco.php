<?php

	function ConectarBanco(){
	/*Alterar dados de conexão com banco.*/
	$host = "localhost";
	$banco = "trabalho_final";
	$usuario = "root";
	$senha = "";
	$porta = "3306";

	/* Não mexer. */
	$conn = new PDO('mysql:host='.$host.';port='.$porta.';dbname='.$banco.'', $usuario, $senha);
	return $conn;
}

function ExecutaSQL($sql){
	$conn = ConectarBanco();
	$conn->query($sql);
}

function SelecionaDiversosDados($sql){
	$conn = ConectarBanco();
	$retorno = $conn->prepare($sql);
	$retorno->execute();
	return $retorno;
}

function SelecionaUmDado($sql){
	$conn = ConectarBanco();
	$retorno = $conn->query($sql);
	return $retorno->fetch();
}

function gravaLog($pagina){
	ExecutaSQL("INSERT INTO logs(idusuario,pagina,dataehora)VALUES(".$_SESSION["ID"].",'".$pagina."',now())");
}



?>
