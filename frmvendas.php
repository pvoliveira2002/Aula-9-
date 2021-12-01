<?php

    include('conexão.php');

    try {

      $sql = "insert into tblvendas (idvendedor,idproduto,quantidade) values (:idvendedor,:idproduto,:quantidade)";

      $stmt = $con->prepare($sql);

      

      $stmt->bindValue(":idvendedor",$_POST["idvendedor"]);

      $stmt->bindValue(":idproduto",$_POST["idproduto"]);

      $stmt->bindValue(":quantidade",$_POST["quantidade"]);

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
        <title>Vendas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
    
        <div class="container">
            <h1>Cadastro de Vendas</h1>
            <form method="post">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID do Vendedor</label>
                        <input type="text" class="form-control" id="idvendedor" name="idvendedor">
                    
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">ID do Produto</label>
                        <input type="text" class="form-control" name="idproduto">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNumber" class="form-label">Quantidade</label>
                        <input type="text" class="form-control" name="quantidade">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
        </div>
            
    </body>

</html>