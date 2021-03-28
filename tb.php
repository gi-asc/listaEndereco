<?php
include('conecta.php');
$consulta = 'SELECT * FROM endereco';
$con = $conn->query($consulta) or die($conn->error);
?> 

<html>
<head>
  <meta charset="utf-8">
  <title>Lista de Endereços</title>
</head>

<body>
  <style>
    body {
      background: #E6E6E6;
    }
    .ind{
      background: #1f1f1f;
      color: white;
text-align: center;
border: none;
margin: 0;
    }
    td{
      width: 130px;
      text-align: center;
      padding: 2% 0;
      box-shadow: #c0c0c0 0px 3px 4px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue';
    }
    tr{
      margin: -1%;
    }
    table{
      text-align: center;
      margin: 5% auto;
      box-shadow: ##1f1f1f 0px 0px 4px;
      background: #D9D9D9;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue'; 
      text-transform: uppercase;
      font-size: 0.8em;
    }
.dds {
margin: 5% auto;
background: #D9D9D9;
}
h1 {
      margin-top: 2%;
      text-align: center;
      font-size: 3em;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      color: #1f1f1f;
    }
    </style>
    <h1>TABELA DE ENDEREÇOS</h1>
<table class="tbla">
<tr class='ind'>
<td>CEP</td>
<td>Localidade</td>
<td>UF</td>
<td>Bairro</td>
<td>Logradouro</td>
<td>Complemento</td>
</tr>
<?php while($dado = $con->fetch_array()){ ?>
  <tr class="dds">
<td><?php echo $dado["cep"]; ?></td>
<td><?php echo $dado["localidade"]; ?></td>
<td><?php echo $dado["uf"]; ?></td>
<td><?php echo $dado["bairro"]; ?></td>
<td><?php echo $dado["logradouro"]; ?></td>
<td><?php echo $dado["complemento"]; ?></td>
</tr>
<?php } ?> 
</table>
</body>

</html>