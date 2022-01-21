<h1>Inserir nova matrícula</h1><br><br>


<form method="POST" class="form-control" action="processa_matricula.php">

	Selecione o aluno:
	<select name="escolha_aluno" class="form-control">
		<?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';					
		}
		?>
	</select>

	<br>Selecione o curso:
    <select name="escolha_curso" class="form-control">
		<?php
		while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';	
		}
		?>
	</select>
	<br>
	<input type="submit" value="Matricular aluno" class="btn btn-success">


</form>