<?php

require_once "../conn.php";
require_once "../session.php"; 

if(empty($_POST['username']) || empty($_POST['password'])){
    header('Location : ../views/login.html');
}

$username = mysqli_real_escape_string($mysqli, $_POST['username']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

   
$query = "SELECT * FROM a2.cliente where useName = '{$username}' and senha ='{$password}'";

$result = mysqli_query($mysqli,$query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['username'] = $username;
    header('Location: sucesso.php');
    exit();
}else{
    header('Location: ../views/login.html');
    exit();
}
?>
