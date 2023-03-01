<?php
include_once ("./cnx.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Yan Rodrigues</title>
</head>
<body>
   
    <form method="POST">
        <div class="container">
            <h1>Formulário de Cadastro</h1>
            <h4>Yan Pablo Rodrigues</h4>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome*</label><br>
            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Usuário">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email*</label><br>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Senha*</label><br>
            <input type="password" name="senha" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Confirmação de Senha*</label><br>
            <input type="password" class="form-control" name='senha2' id="exampleFormControlInput1" placeholder="name@example.com">
          </div>

          <button type="submit" name="bt" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <?php
      if(isset($_POST['bt'])){
        if(isset($_POST['nome']) != '' || isset($_POST['email']) != '' || isset($_POST['senha']) != '' || isset($_POST['senha2']) != ''){
          $nome = $_POST['nome'];
          $email = $_POST['email'];
          $senha1 = $_POST['senha'];
          $senha2 = $_POST['senha2'];

          if($senha1 == $senha2 || $senha2 == $senha1){
            $senhamd5 = $senha1;
            $sql = $cnx -> prepare("INSERT INTO `pessoas`(`nome_pes`, `email_pes`, `senha_pes`) VALUES ('$nome','$email','$senhamd5')")

          }else if($senha1 != "" && $senha2 != "" ){
              echo"<script>alert('As senhas são divergentes!')</script>";
          }
        }else{
          echo"<script>alert('Preencha todos os campos por favor!')</script>";
        }
      }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>