<!DOCTYPE html>
<html>
<head>    
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Procon PB - SI (Sistemas Internos)</title>

	<link href="../dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/dashboard.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wtf-forms.css">
  <link rel="stylesheet" type="text/css" href="./css/custom.css">
	
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
<?php include("./../partials/header.php"); ?>
        <?php include("./../partials/menu_sidebar.php"); ?>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php $HeaderContext = "Cadastro de Servidores"; ?>
                <?php include("./../partials/headercontext.php")  ?>
	
            <div class="col-md-2">

              <img class="img-thumbnail d-block" src="fotos/<?= (empty($cliente->foto)) ? 'padrao.jpg' : $cliente->foto  ?>" id="foto-cliente">

              <div class="file">
                  <input type="file" class="custom-file-input" id="foto" name="foto" >
                  <label class="custom-file-label" for="foto">Selecionar...</label>                                            
              </div>
             

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
          </div>
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
      <script type="text/javascript" src="js/custom.js"></script>
	
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
	
</body>
</html>