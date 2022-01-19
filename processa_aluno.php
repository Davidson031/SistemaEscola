<?php

include "db.php";

    
    $nome_aluno = $_POST['nome_aluno'];
    $nasc = $_POST['data_nascimento'];

    $query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES ('$nome_aluno', '$nasc')";
    mysqli_query($conexao, $query);


    header('location:index.php?pagina=alunos');


