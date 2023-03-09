<?php
//CONEXAO
try{
    $user = 'root';
    $pass = '';
    $cnx = new PDO("mysql:host=localhost;dbname=form;", $user, $pass);
}catch(PDOException $e){
    echo "ERROR: "  .$e->getMessage();
}

?>