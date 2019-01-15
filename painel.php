<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title>Procon PB - SI (Sistemas Internos)</title>

		<link href="./dist/css/bootstrap.min.css" rel="stylesheet" />

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
    
    <?php include("./partials/header.php"); ?>

      <?php include("./partials/menu_sidebar.php"); ?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <?php $HeaderContext = "Servidores"; ?>
          <?php include("./partials/headercontext.php")  ?>


          <form action="" method="get" id='form-contato' class="">
            <div class="row">
              <div class="col">          
              <label class="control-label" for="termo">Pesquisar</label>            
                <input type="text" class="form-control" id="termo" name="termo" data_nascimento="termo" placeholder="Infome o Nome ou E-mail ou celular">
              </div>
            </div>
            <br>
              <div class="row">
              <div class="col">          
              <button type="submit" class="btn btn-outline-danger">Pesquisar</button>
              <a href='painel.php' class="btn btn-outline-info">Ver Todos</a>
              <a href='./cadastro_completo/cadastro.php' class="btn btn-outline-success">Cadastrar Servidores</a>
            </div>
            </div>
          </form>
  
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
                  <a href='cadastro_completo/editar.php?id=<?= $cliente->id ?>' class="btn btn-outline-info">Editar</a>															
                  <a href='javascript:void(0)' class="btn btn-outline-danger" rel="<?= $cliente->id ?>">Excluir</a>
                </td>
              </tr>	
            <?php endforeach; ?>
          </table>

        <?php else : ?>

          <h3 class="text-center text-primary">Não existem Funcionários cadastrados!</h3>
        <?php endif; ?>

        
          </div>
          
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
<script type="text/javascript" src="./cadastro_completo/js/custom.js"></script>
</body>
</html>