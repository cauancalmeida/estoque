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
include_once ('conecta/conecta.php');
$query="SELECT * FROM Cliente ORDER BY nome";
$result= mysql_query($query, $con);
?>
<div class="container">
<div class="table-responsive">
<table class="table">
<thead>
	<th>Nome</th>
	<th>Telefone</th>
	<th>Email</th>
</thead>
<tbody>
<?php 
while(mysql_fetch_row($result)){
	echo'<tr>';
	echo'<td>'.mysql_result($result, 'nome').'</td>';
	echo'<td>'.mysql_result($result, 'telefone').'</td>';
	echo'<td>'.mysql_result($result, 'email').'</td>';
	echo '<button type="button" class="btn btn-danger" onclick="window.location.href='.'deletarCliente.php'.'">Deletar</button>';
}

?>
</tr>
</tbody>
</table>
</div>
</div>
