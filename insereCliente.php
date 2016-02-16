<?php
include_once ('conecta/conecta.php');

if (isset($_POST['nome'])){
	$nome=$_POST['nome'];
}

if (isset($_POST['email'])){
	$email=$_POST['email'];
}

if (isset($_POST['telefone'])){
	$telefone=$_POST['telefone'];
}

$inserir="INSERT INTO Cliente (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";
$result= mysql_query($inserir);

if($result){
	echo'<script> alert("Cliente cadastrado com sucesso");window.location.href="clientes.php";</script>'; 
}else{
	echo '<script> alert("Aldo deu errado");window.location.href="incluiCliente.php";';
}

