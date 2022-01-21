<?php  if(isset($_GET['erro'])){?>
    <div class="alert alert-danger" role="alert"> Usuário e/ou Senha inválidos </div>
<?php } ?>




<h1 style="text-align:center">Bem-vindos à Dog Cursos</h1>

<form method="POST"action="login.php">
    <input type="text" name="usuario" placeholder="Nome do Usuário" class="form-control"><br>

    <input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>

    <input type="submit" value =" Entrar " class="btn btn-success"><br>
</form>