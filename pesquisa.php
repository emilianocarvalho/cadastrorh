<?php

require 'cadastro_completo/conexao.php';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die(mysql_error());

mysqli_select_db($conexao, DBNAME) or die(mysqli_error());

// Recebe o termo de pesquisa se existir
$termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';

// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termo)) :

  $conexao = conexao::getInstance();
$sql = 'SELECT id, nome, email, celular, data_nascimento, status, foto FROM servidor';
$stm = $conexao->prepare($sql);
$stm->execute();
$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

else :
  
  // Executa uma consulta baseada no termo de pesquisa passado como parâmetro
$conexao = conexao::getInstance();
$sql = 'SELECT id, nome, email, celular, status, foto FROM servidor WHERE nome LIKE :nome OR email LIKE :email 
    OR celular LIKE :celular';
$stm = $conexao->prepare($sql);
$stm->bindValue(':nome', $termo . '%');
$stm->bindValue(':email', $termo . '%');
$stm->bindValue(':celular', $termo . '%');
$stm->execute();
$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

endif;
