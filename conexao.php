<?php

$localhost  = "localhost";

$username   = "root";

$password   = "123123";

$db         = "bdsistema";



try {

    $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);

    //var_dump($con); //debugar - Descobrir o que está sendo respondido

} catch(PDOException $e) {

    echo "conexão falhou:<br> ".$e->getMessage();



}