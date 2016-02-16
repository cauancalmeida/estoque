<?php
include_once ('conecta/conecta.php');

if (isset($_POST['cliente'])){
	$cliente=$_POST['cliente'];
}

if (isset($_POST['produto'])){
	$email=$_POST['produto'];
}

$insere="INSERT INTO Pedido ( id_cliente, id_produto) VALUES ($cliente, $produto)";
$result= mysql_query($insere);

if($result){
	echo'<script> alert("Pedido realizado com sucesso");window.location.href="pedidos.php";</script>'; 
}else{
	echo '<script> alert("Aldo deu errado");window.location.href="incluirPedidos.php";';
}

