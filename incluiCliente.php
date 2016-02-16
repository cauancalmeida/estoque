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
?>
<div class="container">
<table>
<form role="form" action="insereCliente.php" method="POST">
<div calss="form-group">
<tr>
<td><label for="nome">Nome: </label></td>
<td><input type="text" class="form-control" name="nome"/></td>
</tr>
</div>
<div class="form-group">
<tr>
<td><label for="email">Email: </label></td>
<td><input type="email" class="form-control" name="email"/></td>
</tr>
</div>
<div class="form-group">
<tr>
<td><label for="telefone">Telefone: </label></td>
<td><input type="tel" class="form-control" name="telefone"/></td>
</tr>
</div>
<input type="submit" class="btn btn-default" value="Enviar"/>
</form>
</table>
</div>
