<?php
    require_once "../session.php";
    require_once "../conn.php";

    if(empty($_POST['username']) ||empty($_POST['password']) ||
    empty($_POST['email']) ||empty($_POST['cpf']) ||empty($_POST['telefone'])){
        header('Location : ../views/cadastro.html');
    }

         
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];

    $query = "INSERT INTO a2.cliente (useName, email, senha, telefone, cpf)
    VALUES('$username','$email','$password','$telefone','$cpf')";

    $result = mysqli_query($mysqli,$query);

    if ($result) {
        header('Location: sucesso.php');
        echo"deu certo";
    }else{
        header('Location : ../views/cadastro.html');
        
    }

?>
