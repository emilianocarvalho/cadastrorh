 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Procon PB - SI (Sistemas Internos)</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./assets/css/signin.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <link href="../../css/estilo.css" rel="stylesheet" />

</head>
<body>


    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php#">Procon PB - SI (Sistemas Internos)</a>
      <!--
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      -->
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
                <a class="nav-link active" href="index.php#">
                  <span data-feather="home"></span> Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#"> <span data-feather="users"></span> Funcionários </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#"> <span data-feather="bar-chart-2"></span> Relatórios </a>
              </li>
            </ul>

            <h6
              class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"
            >
              <span>Atividades Recentes</span>
              <a class="d-flex align-items-center text-muted" href="index.php#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="index.php#">
                  <span data-feather="file-text"></span> Últimas consultas
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span> This week
              </button>
            </div>
          </div>
          <div class="container">

            <div class="row">
              <div class="col-md-4 order-md-2 mb-4">
                <h4 class="mb-3">Posso Ajudar?</h4>
                <form
                  name="contactoform"
                  method="POST"
                  action="contato/sendmail.php"
                  class="needs-validation"
                  novalidate
                >
                  <div class="mb-3">
                    <label for="nome">Nome</label>
                    <input
                      type="text"
                      class="form-control"
                      id="nome"
                      name="nome"
                      placeholder=""
                      value=""
                      required
                    />
                    <div class="invalid-feedback">Por favor preencha seu nome.</div>
                  </div>
                  <div class="mb-3">
                    <label for="email">E-mail </label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      placeholder="voce@procon.pb.gov.br"
                    />
                    <div class="invalid-feedback">
                      Por favor, insira um endereço de e-mail válido para atualizações de envio.
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="assunto">Assunto</label>
                    <input
                      type="text"
                      class="form-control"
                      id="assunto"
                      name="assunto"
                      placeholder="Informe um assunto"
                      required
                    />
                    <div class="invalid-feedback">Por favor informe um assunto.</div>
                  </div>

                  <div class="mb-3">
                    <label for="mensagem">Mensagem</label>
                    <textarea
                      type="text"
                      class="form-control"
                      id="mensagem"
                      placeholder="Qual a sua dúvida?"
                    ></textarea>
                  </div>
                  <hr class="mb-4" />
                  <input class="btn btn-primary btn-lg" type="submit" value="Enviar" />
                </form>
              </div>
              <div class="col-md-8 order-md-1">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="mb-3">Sistema</span> <span class="badge badge-secondary badge-pill">2</span>
                </h4>
                <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Novo Usuário</h6>
                      <small class="text-muted">Realizar o cadastro de novo usuário</small>
                    </div>
                    <div class="input-group-append">
                      <a href="cadastro.php"><input type="submit" class="btn btn-secondary" value="Cadastrar"/></a>
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <h6 class="my-0">Acesso</h6>
                      <small class="text-muted">Acessar o sistema</small>
                    </div>
                    <div class="input-group-append">
                      <a href="login.php"><input type="submit" class="btn btn-secondary" value="Login"/></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <!--
              <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">&copy; 2017-2018 Company Name</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="index.php#">Privacy</a></li>
                  <li class="list-inline-item"><a href="index.php#">Terms</a></li>
                  <li class="list-inline-item"><a href="index.php#">Support</a></li>
                </ul>
              </footer>
            -->
          </div>
        </main>
      </div>
    </div>

    <!--
      Bootstrap core JavaScript
      ==================================================
    -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script>
      window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>');
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace();
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById('myChart');
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
          datasets: [
            {
              data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
              lineTension: 0,
              backgroundColor: 'transparent',
              borderColor: '#007bff',
              borderWidth: 4,
              pointBackgroundColor: '#007bff',
            },
          ],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: false,
                },
              },
            ],
          },
          legend: {
            display: false,
          },
        },
      });
    </script>


<!-- CÓDIGO ANTERIOR -->
        <!-- <div class="container">
            <nav>
            <h1>Posso Ajudar?</h1>     
                <hr><br><br> 
                <form name="contactoform" 
                method="post" 
                action="contato/sendmail.php">
                    Nome: <input type="text" name="nome" /><br /><br />
                    E-mail: <input type="text" name="email" /><br /><br />
                    Assunto: <input type="text" name="assunto" /><br /><br />
                    Mensagem: <textarea name="mensagem"></textarea><br /><br />
                    <input type="submit" value="enviar" />  
                </form>   
            </nav>
            <section>
            <div class="acomodar">    
                <ul class="menu">
                <div class="logo">
                <a href="<?php echo $home; ?>" title="<?php echo $title; ?>">
                <img src="imagens/Person.jpg" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"title="<?php echo $title; ?>"width="60" height="58"/></a>
                </div>
                <center><a href="cadastro.php"><input type="submit" class="sb bradius" value="cadastrar" /></a></center>
                <center><a href="login.php"><input type="submit" class="sb bradius" value="login" /></a></center>
                </ul>
            </div>
            </section>
        </div>     -->
    </body>
</html>    