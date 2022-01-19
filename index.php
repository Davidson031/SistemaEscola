<?php

    include 'db.php';

    include 'header.php';

    @$pagina = $_GET['pagina'];

    if($pagina=='cursos'){
        include 'views/cursos.php';
    }
    elseif($pagina=='alunos'){
        include 'views/alunos.php';
    }
    elseif($pagina=='matriculas'){
        include 'views/matriculas.php';
    }
    else{
        include 'views/home.php';
    }
    

    include 'footer.php';
    
    /*
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "aula_php";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);
    */

    /*$query ="CREATE TABLE CURSOS (id_curso int not null auto_increment, 
                                  nome_curso varchar(255) not null,
                                  carga_horaria int not null,
                                  primary key(id_curso))";
    $executar = mysqli_query($conexao, $query);
  

    $query ="CREATE TABLE ALUNOS (id_aluno int not null auto_increment, 
                                  nome_aluno varchar(255) not null,
                                  data_nascimento varchar(255),
                                  primary key(id_aluno))";
    $executar = mysqli_query($conexao, $query);
    



    $query ="CREATE TABLE ALUNOS_CURSOS (id_aluno_curso int not null auto_increment, 
                                  id_aluno int not null,
                                  id_curso int not null,
                                  primary key(id_aluno_curso))";
    $executar = mysqli_query($conexao, $query);
    */

    /*
    $query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES ('Jose', '01-01-1990')"; 
    $executar = mysqli_query($conexao, $query);

    $query = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES ('Pedagogia', 200)"; 
    $executar = mysqli_query($conexao, $query);
    */








    

?>