<?php
require_once ('defesaaluno.php');
require_once ('conexao.php');
require_once ('Crud.php');
$perfil = new Crud();
$con = $perfil->find();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

<title>Ventura</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="css/resume.min.css" rel="stylesheet">
</head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#">
        <span class="d-block d-lg-none">Ventura</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
		 <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="viagensabertas.php">Viagens Abertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="viagensInscritas.php">Minhas Viagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sair.php">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">

 <center>  
<table class="table">
  <thead>
    <tr>
      <th scope="col">Dados</th><br>


      <th scope="col"></th>
    </tr>
  </thead>
  
  
  
<?php 


if($perfil = $con){ ?>  

  <tbody>
    <tr>
      <th class="table-info" scope="row">Nome</th>
      <td><?php echo $perfil["nome"] ?></td>
       <th class="table-info" scope="row">Email</th>
      <td><?php echo $perfil["email"] ?></td>
   
    </tr>
	<tr>
      <th class="table-info" scope="row">Data Nacimento</th>
      <td><?php echo $perfil["data"] ?></td>
      <th class="table-info" scope="row">CPF</th>
      <td><?php echo $perfil["cpf"] ?></td>
    </tr>
	<tr>
      <th class="table-info" scope="row">Curso</th>
      <td><?php echo $perfil["curso"] ?></td>
      <th class="table-info" scope="row">Matricula</th>
      <td><?php echo $perfil["matricula"] ?></td>
   
    </tr>
      <tr>
	  <th class="table-info" scope="row">Telefone</th>
      <td><?php echo $perfil["telefone"] ?></td>
      <th class="table-info" scope="row">Sexo</th>
      <td><?php echo $perfil["sexo"] ?></td>
      </tr>
    </tr>
   <td><br><br><a href='editar.php?id=" . $idAlunos . "'><a href="editar.php" class="btn btn-danger">Editar Dados</a></td>
      </tr>
  </tbody>
</table></center>

 <?php } ?>



</section>
</html>