<h1>Inserir nova matrícula</h1><br><br>
<p>Selecione aluno e curso: </p><br>

<form method="POST" action="processa_matricula.php">

	<select name="escolha_aluno">
		<?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';					
		}
		?>
	</select>


    <select name="escolha_curso">
		<?php
		while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';	
		}
		?>
	</select>
	<br><br>
	<input type="submit" value="Matricular aluno">


</form>