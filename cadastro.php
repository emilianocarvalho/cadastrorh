<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title>Procon PB - SI (Sistemas Internos)</title>

		<link href="./dist/css/bootstrap.min.css" rel="stylesheet" />

		<link href="./assets/css/dashboard.css" rel="stylesheet" />

</head>

<body>

    <?php include("./partials/header.php"); ?>

    
      <?php include("./partials/menu_sidebar.php"); ?>
    
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      
        <?php $HeaderContext = "Cadastro Usuário"; ?>
        <?php include("./partials/headercontext.php")  ?>

        <form class="" novalidate name="signup" method="post" action="cadastrando.php">
       
        <div class="row">

          <div class="col-md-4">
            <b><h5 class="text-black-50">DADOS PARA O LOGIN</h5></b>
            <hr>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" required autofocus />
              </div>
              <div class="form-group col-md-6">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome" />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="cidade">Cidade</label> <input type="text" class="form-control" name="cidade" />
              </div>
              <div class="form-group col-md-2">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" size="4" />
              </div>
              <div class="form-group col-md-4">
                <label for="pais">País</label> <input type="text" class="form-control" name="pais" />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="email">E-mail</label> <input type="text" class="form-control" name="email" />
              </div>
              <div class="form-group col-md-4">
                <label for="senha">Senha</label>
                <input id="senha" type="password" class="form-control" name="senha" />
              </div>
            </div>

          </div>

          <div class="col-md-6">

          </div>

          <div class="col-md-2">
            <input type="submit" class="btn btn-outline-success" value="Cadastrar" />        
          </div>
        
        </div>
        </form>
      </main>      

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