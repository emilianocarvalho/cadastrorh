<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title>Procon PB - SI (Sistemas Internos)</title>

		<link href="./dist/css/bootstrap.min.css" rel="stylesheet" />

		<link href="./assets/css/dashboard.css" rel="stylesheet" />

</head>

<body>

    <?php include("header.php"); ?>

    <div class="container-fluid">
      <?php include("menu_sidebar.php"); ?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <!-- TRECHO DA ROTINA AQUI...  -->
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Servidores</h1>
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

        </main>      

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

     <script type="text/javascript" src="./cadastro_completo/js/custom.js"></script>
</body>
</html>