<?php
include('conexao.php');

$sql = "SELECT * from tblcarro";
$qry = mysqli_query($con,$sql);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Modelo</th>
      <th scope="col">Valor</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <?php

echo "<tr>";
while ($linha = mysqli_fetch_array($qry)) {
echo "<tr>";
echo "<td>{$linha['idcarro']}</td>";
echo "<td>{$linha['modelo']}</td>";
echo "<td>{$linha['valor']}</td>";
echo "<td><img src='{$linha['foto']}' width='400px' height='200px'></td>";

echo "<tr>";
}
   

?>
</table>
<a href="carros.php">Cadastro</a>
</body>
</html>