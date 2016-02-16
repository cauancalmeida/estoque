<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>clientes</title>
</head>
<body>
<?php
include('menu.html');
include_once 'conecta/conecta.php';
$query="SELECT ped.idPedido, cli.nome AS cliente, prod.nome AS produto FROM pedidos ped INNER JOIN Cliente cli ON ped.id_cliente=cli.idCliente INNER JOIN Produto prod ON ped.id_produto=prod.idProd ORDER BY ped.idPedido";
$result= mysql_query($con, $query);
?>
<div class="container">
<div class="table-responsive">
<table class="table">
<thead>
	<th>#</th>
	<th>Cliente</th>
	<th>Produto</th>
</thead>
<tbody>
<?php 
while(mysql_fetch_row($result)){
	echo'<tr>';
	echo'<td>'.mysql_result($result, 'cliente').'</td>';
	echo'<td>'.mysql_result($result, 'produto').'</td>';
	echo '<button type="button" class="btn btn-danger" onclick="window.location.href='.'deletarPedido.php?id='.mysql_result($result, 'idPedido').'">Deletar</button>';
}

?>
</tr>
</tbody>
</table>
</div>
</div>
