<!DOCTYPE html>
<html>
<head>    
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Procon PB - SI (Sistemas Internos)</title>

	<link href="../dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/dashboard.css" rel="stylesheet" />
	<link href="./css/custom.css" rel="stylesheet" />
	
</head>

<?php
require 'conexao.php';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die(mysql_error());

mysqli_select_db($conexao, DBNAME) or die(mysqli_error());

session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
	header("Location: login.php");
	exit;
} else {
	echo "<center>Você está logado</center>";
}
?>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Procon PB  SI - CADASTRO DE SERVIDOR</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="index.php#">LOGIN</a>
        </li>
      </ul>
    </nav>

	<!-- Inicio Menu Lateral -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Servidores
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  ADICIONAR MENU
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>OUTRO TÓPICO</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ADICIONAR MENU
                </a>
              </li>
            </ul>
          </div>
        </nav>
	
	<!-- Fim Menu Lateral -->

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cadastro de Servidores</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
             	 <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                 <span data-feather="calendar"></span>
                		This week
              	</button>
            </div>
          </div>

				<!-- Inicio Formulário -->
					<form action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
						
						<div class="row">
							<div class="col-md-2">
								<label for="nome">Selecionar Foto</label>
									<a href="#" class="thumbnail">
									<img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
									</a>
								<input type="file" name="foto" id="foto" value="foto" >
							</div>

							<div class="col-md-8">
                <?php include("editar-pessoal.php"); ?>
							</div>

              <div class="col-md-2">               
                  <input type="hidden" name="acao" value="incluir">
                  <button type="submit" class="btn btn-outline-success" id='botao'> 
                  Gravar
                  </button>
                  <a href='../painel.php' class="btn btn-outline-danger">Cancelar</a>
              </div>
						</div>

            <div class="row">
               <div class="col-md-12">
                 <hr>
               </div>
            </div>

            <div class="row">
               <div class="col-md-6">
                <?php include("editar-cadastrais.php"); ?>
							</div>

              <div class="col-md-6">
                <?php include("editar-funcionais.php"); ?>
							</div>
            </Div>
					</form>
				<!-- Fim Formulário -->

				</div>

				<!-- </div> Div do formulario edit-cont -->
      
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
			<script src="../assets/js/vendor/popper.min.js"></script>
			<script src="../dist/js/bootstrap.min.js"></script>
	
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
	
	<script type="text/javascript" src="./js/custom.js"></script>
</body>
</html>