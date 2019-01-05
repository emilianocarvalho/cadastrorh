<html>

<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf8" />
  <!-- <link rel="shortcut icon" href="imagens/favicon.ico"/>
<title>Sistema de Cadastro</title>
<link href='http://fonts.googeapis.com/css?family=Oswald:400,300,700' rel='stylesheet'type='text/css'/>
<link rel="stylesheet" type="text/css" href="css/style.css" /> -->
  <title>Procon PB &middot; SI - CADASTRO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />

  <link rel="stylesheet" href="./assets/css/forms.css" />
  <!-- <link rel="stylesheet" href="./dashboard.css" /> -->

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="./assets/ico/favicon.png" />

</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-6 order-md-2 mb-6 mx-auto">
        <!--
            <div class="card card-api my-5">
            <div class="card-body">
          -->
        <form class="form-api needs-validation" novalidate name="signup" method="post" action="cadastrando.php">
          <h3 class="mb-3">Cadastro</h3>

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" required autofocus />
            </div>
            <div class="form-group col-md-12">
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
            <div class="form-group col-md-12">
              <label for="email">E-mail</label> <input type="text" class="form-control" name="email" />
            </div>
            <div class="form-group col-md-6">
              <label for="senha">Senha</label>
              <input id="senha" type="password" class="form-control" name="senha" />
            </div>
          </div>

          <input type="submit" class="btn btn-lg btn-secondary " value="Cadastrar" />

          <a class="btn btn-lg btn-light" href="index.php">Início</a>

          <p class="mt-5 mb-3 text-muted">Procon PB NTI &middot; &copy; 2017-2018</p>
        </form>
        <!--
            </div>
            </div>
          -->
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

  <!-- CODIGO ANTERIOR -->
  <!-- <div id="cadastrar"><a href="index.php"title="Cadastre-se">Voltar &raquo;</a></div>
    <div id="login" class="form bradius" style="top:150px;">
        <div class="message"></div>
        <div class="logo"><a href="<?php echo $home; ?>"title="<?php echo $title; ?>"><img src="imagens/Person.jpg" alt="<?php echo $title; ?>"title="<?php echo $title; ?>"title="<?php echo $title; ?>"width="60" height="58"/></a></div>
        <div class="acomodar">
        <form name="signup" method="post" action="cadastrando.php">
            <label for="nome">Nome:</label>
            <input type="text" class="txt bradius" name="nome" required autofocus />
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" class="txt bradius" name="sobrenome" />
            <label for="pais">País:</label>
            <input type="text" class="txt bradius" name="pais" />
            <label for="estado">Estado:</label>
            <input type="text" class="txt bradius" name="estado" />
            <label for="cidade">Cidade:</label>
            <input type="text" class="txt bradius" name="cidade" />
            <label for="email">E-mail:</label>
            <input type="text" class="txt bradius"name="email" />
            <label for="senha">Senha:</label>
            <input id="senha"type="password" class="txt bradius" name="senha" />
            <input type="submit" class="sb bradius" value="Cadastrar" />
            </form>
        </div>
</div> -->
</body>

</html>