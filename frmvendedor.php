<?php

    include('conexão.php');

    try {

      $sql = "insert into tblvendedor (vendedor,datademissao,salario) values (:vendedor,:datademissao,:salario)";

      $stmt = $con->prepare($sql);

      

      $stmt->bindValue(":vendedor",$_POST["vendedor"]);

      $stmt->bindValue(":datademissao",$_POST["datademissao"]);

      $stmt->bindValue(":salario",$_POST["salario"]);

      $stmt->execute();

      

    } catch(PDOException $e){

        echo "Não Cadastrou. ".$e->getMessage();



    }

?>



<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>


<div class="container">
<h1>Cadastro de Vendedor</h1>
    <form method="post">
        
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome do Vendedor</label>
                <input type="text" class="form-control"  name="vendedor">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Data de emissão</label>
                <input type="date" class="form-control" name="datademissao">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Salario</label>
                <input type="text" class="form-control" name="salario">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
   </form>
</div>
        
</body>
