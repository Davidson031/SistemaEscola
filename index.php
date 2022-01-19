<?php

    echo 'THIS IS THE DAMN INDEX';
    include 'db.php';

    include 'header.php';

    @$pagina = $_GET['pagina'];

    if($pagina=='cursos'){
        include 'views/cursos.php';
    }
    elseif($pagina=='alunos'){
        include 'views/alunos.php';
    }
    elseif($pagina=='inserir_curso'){
        include 'views/inserir_curso.php';
    }
    elseif($pagina=='inserir_aluno'){
        include 'views/inserir_aluno.php';
    }
    elseif($pagina=='matriculas'){
        include 'views/matriculas.php';
    }
    else{
        include 'views/home.php';
    }
    

    include 'footer.php';
    
  

?>