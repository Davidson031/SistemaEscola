<?php

include 'db.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND SENHA = '$senha'";


    $consulta = mysqli_query($conexao, $query);

    if(mysqli_num_rows($consulta)==1){
        $_SESSION['login'] = true;
        header('location:index.php');
    }else{
        header('location:index.php?erro');
    }

?>