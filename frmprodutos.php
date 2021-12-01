<?php

    include('conexão.php');

    try {

      $sql = "insert into tblprodutos (produto,preco,estoque) values (:produto,:preco,:estoque)";

      $stmt = $con->prepare($sql);

      

      $stmt->bindValue(":produto",$_POST["produto"]);

      $stmt->bindValue(":preco",$_POST["preco"]);

      $stmt->bindValue(":estoque",$_POST["estoque"]);

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

    <!-- método de envio são 2 

        * method="GET" - Enviar sem segurança pois exibe os dados na url - mais rápido

        * method="POST" - Oculta os dados da url - mais lento

    -->

    <div class="container">
    <h1>Cadastro de Produtos</h1>
        <form method="post">
            
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Produto</label>
                    <input type="text" class="form-control"  name="produto">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Preço</label>
                    <input type="text" class="form-control" name="preco">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Estoque</label>
                    <input type="text" class="form-control" name="estoque">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
       </form>
    </div>
            
</body>

</html>