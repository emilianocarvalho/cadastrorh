<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title>Procon PB - SI (Sistemas Internos)</title>

		<!-- Bootstrap core CSS -->
		<link href="./dist/css/bootstrap.min.css" rel="stylesheet" />
		<!-- Custom styles for this template -->
		<!-- <link href="./assets/css/signin.css" rel="stylesheet" /> -->
		<!-- Custom styles for this template -->
		<link href="./assets/css/dashboard.css" rel="stylesheet" />

</head>

<body>
		<?php

  require 'cadastro_completo/conexao.php';

  $conexao = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die(mysql_error());

  mysqli_select_db($conexao, DBNAME) or die(mysqli_error());
  session_start();
  if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    header("Location: login.php");
    exit;
  } else {
    echo "<center>Você está logado</center>";
  }

// Recebe o termo de pesquisa se existir
  $termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';

// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
  if (empty($termo)) :

    $conexao = conexao::getInstance();
  $sql = 'SELECT id, nome, email, celular, data_nascimento, status, foto FROM tab_clientes';
  $stm = $conexao->prepare($sql);
  $stm->execute();
  $clientes = $stm->fetchAll(PDO::FETCH_OBJ);

  else :
		
		// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
  $conexao = conexao::getInstance();
  $sql = 'SELECT id, nome, email, celular, status, foto FROM tab_clientes WHERE nome LIKE :nome OR email LIKE :email 
			OR celular LIKE :celular';
  $stm = $conexao->prepare($sql);
  $stm->bindValue(':nome', $termo . '%');
  $stm->bindValue(':email', $termo . '%');
  $stm->bindValue(':celular', $termo . '%');
  $stm->execute();
  $clientes = $stm->fetchAll(PDO::FETCH_OBJ);

  endif;
  ?>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Procon PB SI - PAINEL </a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" />
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap"><a class="nav-link" href="index.php#">LOGIN</a></li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span> Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="file"></span> Orders </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="shopping-cart"></span> Products </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="users"></span> Customers </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="bar-chart-2"></span> Reports </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="layers"></span> Integrations </a>
              </li>
            </ul>

            <h6
              class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"
            >
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="file-text"></span> Current month </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="file-text"></span> Last quarter </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="file-text"></span> Social engagement </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> <span data-feather="file-text"></span> Year-end sale </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1>Servidores</h1>
      
			<form action="" method="get" id='form-contato' class="">
				<label class="control-label" for="termo">Pesquisar</label>
				<div class='col-md-7'>
			    	<input type="text" class="form-control" id="termo" name="termo" data_nascimento="termo" placeholder="Infome o Nome ou E-mail ou celular">
				</div>
			    <button type="submit" class="btn btn-primary">Pesquisar</button>
			    <a href='painel.php' class="btn btn-primary">Ver Todos</a>
			</form>

			<a href='cadastro_completo/cadastro.php' class="btn btn-success pull-right">Cadastrar Servidores</a>

          <!-- <div class="container">

			<div class="row"> -->

			<?php if (!empty($clientes)) : ?>

				<table class="table table-striped table-hover table-sm">
				<caption>Listagem dos servidores</caption>
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">FOTO</th>
							<th scope="col">NOME</th>
							<th scope="col">E-MAIL</th>
							<th scope="col">CELULAR</th>
							<th scope="col">STATUS</th>
							<th scope="col">AÇÃO</th>
						</tr>
					</thead>
					<tbody>				
					<?php foreach ($clientes as $cliente) : ?>
						<tr>
							<th scope="row"><?= $cliente->id ?></th>
							<td><img src='cadastro_completo/fotos/<?= $cliente->foto ?>' height='40' width='40'></td>
							<td><?= $cliente->nome ?></td>
							<td><?= $cliente->email ?></td>
							<td><?= $cliente->celular ?></td>
							<td><?= $cliente->status ?></td>
							<td>
								<a href='cadastro_completo/editar.php?id=<?= $cliente->id ?>' class="btn btn-primary">Editar</a>															
								<a href='javascript:void(0)' class="btn btn-danger link_exclusao" rel="<?= $cliente->id ?>">Excluir</a>
							</td>
						</tr>	
					<?php endforeach; ?>
				</table>

				<?php else : ?>

					<h3 class="text-center text-primary">Não existem Funcionários cadastrados!</h3>
				<?php endif; ?>
		
				<p style="text-align:center;">
				<a href="logout.php"><input type="submit" class="sb bradius" value="sair" /></a>
				</p>
				</div>
</div>	
				  
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>


		<!-- CÓDIGO ANTERIOR -->

		<!-- OBEDECER ESTA ORDEM -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
		<script type="text/javascript" src="cadastro_completo/js/custom.js"></script> -->
</body>
</html>