<?php
    require_once "../session.php";
    require_once "../conn.php";

    if(empty($_POST['item']) ||empty($_POST['preco']) ||
    empty($_POST['descricao']) ||empty($_POST['categoria']) ||empty($_POST['imagem'])){
        header('Location : ../views/cadastro-item.html');
    }

         
    $nome = $_POST['item'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $imagem = $_POST['imagem'];

    $query = "INSERT INTO a2.produto (preco, nome, descricao, categoria, imagem)
    VALUES('$preco','$nome','$descricao','$categoria','$imagem')";

    $result = mysqli_query($mysqli,$query);

    if ($result) {
        header('Location: sucesso.php');
        echo"deu certo";
    }else{
        header('Location : ../views/cadastro-item.html');
        
    }

?>
