<!DOCTYPE html>
<?php include("../conect/dbConn.php") ?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Free Bulma template</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/bulma.css">
  <link rel="stylesheet" href="../demo/morris.css">
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>
  <div class="columns">
    <aside class="column is-2 aside hero is-fullheight is-hidden-mobile">
      <div>
        <div class="main">
          <div class="title"><img src="../images/bulma.png" alt="Description"></div>
          <a href="alunos.html" class="item"><span class="name">Alunos</span></a>
          <a href="notas.html" class="item"><span class="name">Notas</span></a>
          <a href="participacao.html" class="item"><span class="name">Participação</span></a>
          <a href="certificado.html" class="item"><span class="name">Certificado</span></a>
        </div>
      </div>
    </aside>
    <div class="column is-10 admin-panel">
	
			<nav class="nav has-shadow" id="top">
			
			<div class="container">
			<div class="nav-left">
			<a class="nav-item" href="../index.html">

			</a>
			</div>
			<span class="nav-toggle">
			<span></span>
			<span></span>
			<span></span>
			</span>


			<div class="nav-right nav-menu is-hidden-tablet">
			<a href="alunos.html" class="nav-item is-active">
			Alunos
			</a>
			<a href="notas.html" class="nav-item is-active">
			Notas
			</a>
			<a href="participacao.html" class="nav-item is-active">
			Participação
			</a>
			<a href="#" class="nav-item">
			Certificados
			</a>
			</div>


			</div>
			</nav>
					
					<section class="section">

					<p class="panel-heading">
					Alunos Cadastrados
					</p>
					<div class="panel-block">
					
<a href="aluno_novo.html"><i class="fa fa-user-plus" aria-hidden="true"></a></i>
					
					<table class="table">

					<thead>
					<tr>
					<th>Matrícula</th>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Email</th>
					<th>Senha</th>
					<th>Nota</th>
					<th>Participação</th>
					<th>Editar Perfil</th>
					<th>Excluir</th>
					</tr>
					</thead>

					<tfoot>
					<tr>
					<th>Matrícula</th>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Email</th>
					<th>Senha</th>
					<th>Nota</th>
					<th>Participação</th>
					<th>Editar Perfil</th>
					<th>Excluir</th>
					</tr>
					</tfoot>

					<tbody>
						
					
					<?php
						// Select a single row
						$stmt = $pdo->query('SELECT * FROM alunos');
						foreach ($stmt as $row) {
												
					?>
					
					
					<tr>
					<th><?php echo $row['id_alunos'] ?></th>
					<th><?php echo $row['nome_alunos'] ?></th>
					<th><?php echo $row['sobrenome_alunos'] ?></th>
					<th><?php echo $row['email_alunos'] ?></th>
					<th><?php echo $row['senha_alunos'] ?></th>
					<th><a href="notas.html"><i class="fa fa-graduation-cap" aria-hidden="true"></a></i></th>
					<th><a href="participacao.html"><i class="fa fa-hand-paper-o" aria-hidden="true"></i></a></th>
					<th><a href="perfil.html"><i class="fa fa-user" aria-hidden="true"></a></i></th>
					<th><button class="delete notification is-danger"></button></th>
					</tr>
					
					
					
					<?php
					}
					?>
					
					
					
					</tbody>

					</table>
					</div>
					</section>
			
			
			
          </div>
         
          
           
<footer class="footer">
  <div class="container">
    <div class="has-text-centered">
      <p>
        <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
      </p>
      <p>
        <a class="icon" href="https://github.com/jgthms/bulma">
          <i class="fa fa-github"></i>
        </a>
      </p>
    </div>
  </div>
</footer>
<script async type="text/javascript" src="../js/bulma.js"></script>
<script type="text/javascript" src="../demo/jquery.js"></script>
<script type="text/javascript" src="../demo/raphael.min.js"></script>
<script type="text/javascript" src="../demo/morris.js"></script>
<script type="text/javascript" src="../demo/admin.js"></script>
</body>
</html>