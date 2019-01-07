<html>
<head>
<!-- <title>Sistema de Login</title>
<meta http-equiv="Content-type" content="text/html; charset=utf8" />
<link rel="shortcut icon" href="imagens/favicon.ico"/>
<link href='http://fonts.googeapis.com/css?family=Oswald:400,300,700' rel='stylesheet'type='text/css'/>
<link rel="stylesheet" type="text/css" href="css/style.css" /> -->

    <title>Procon PB &middot; SI - LOGIN </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./assets/css/signin.css" />
    <!-- <link rel="stylesheet" href="./dashboard.css" /> -->

    <link
      rel="apple-touch-icon-precomposed"
      sizes="144x144"
      href="./assets/ico/apple-touch-icon-144-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="114x114"
      href="./assets/ico/apple-touch-icon-114-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="72x72"
      href="./assets/ico/apple-touch-icon-72-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      href="./assets/ico/apple-touch-icon-57-precomposed.png"
    />
    <link rel="shortcut icon" href="./assets/ico/favicon.png" />

</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <form class="form-signin" name="loginform" method="post" action="userauthentication.php">
                <img class="mb-4" src="./dist/procon.png" alt="" width="40%" />
                <h1 class="h3 font-weight-normal">Login</h1>
                <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
                <input
                  type="email"
                  name="email"
                  id="inputEmail"
                  class="form-control"
                  placeholder="Endereço de e-mail"
                  required
                  autofocus
                />
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required />
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="recuperar" />
                  <label class="custom-control-label" for="recuperar">Recuperar acesso</label>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-8">
                    <input class="btn btn-lg btn btn-outline-primary btn-block" type="submit" value="Entrar" />
                  </div>
                  <div class="form-group col-md-4">
                    <a class="btn btn-lg btn btn-outline-secondary" href="index.php">Início</a>
                  </div>
                </div>
                <p class="mt-5 mb-3 text-muted">Procon PB NTI &middot; &copy; 2017-2018</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>


<!-- CODIGO ANTERIOR -->
<!-- <div id="cadastrar"><a href="index.php"title="Cadastre-se">Voltar &raquo;</a></div>
<div id="login" class="form bradius" style="top:150px;">
  <div class="message"></div>
  <div class="logo">
  <a href="<?php echo $home; ?>" title="<?php echo $title; ?>">
    <img src="imagens/Person.jpg" 
      alt="<?php echo $title; ?>" 
      title="<?php echo $title; ?>" 
      width="60" 
      height="58"/>
  </a>
  </div>
  <div class="acomodar">
  <form name="loginform" method="post" action="userauthentication.php">
    <label for="email">Email:</label>
    <input type="text" class="txt bradius" name="email" required autofocus/>
    <label for="senha">Senha:</label>
    <input type="password" class="txt bradius" name="senha" />
    <input type="submit" class="sb bradius" value="Entrar" />
    </form>
  </div>
</div> -->

<!--<form name="loginform" method="post" action="userauthentication.php">

E-mail: <input type="text" name="email" /><br /><br />
Senha: <input type="password" name="senha" /><br /><br />
<input type="submit" value="Entrar" /> -->


</form>
</body>
</html>