<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Formulário de Cadastro de Modelos e Valores</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Modelo <input type="text" name="modelo">
    Valor <input type="text" name="valor">
    Foto  <input type="file" name="fileToUpload" id="fileToUpload">
    
    <input type="submit" value="Cadastrar">
    </form>
    <a href="listar.php">Listagem</a>
</body>
</html>