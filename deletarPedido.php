<?php
include_once ('conecta/conecta.php');
$id=$_REQUESNT['id'];

$del="DELETE FROM Pedidos WHERE idPedio=$id";
$result=mysql_query($del);
if($result){
	echo'<script> alert("Pedido excluido com sucesso");window.location.href="pedidos.php";</script>'; 
}else{
	echo '<script> alert("Aldo deu errado");window.location.href="pedidos.php";';
}
