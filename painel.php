<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Listagem de Funcionários</title>
	<link rel="shortcut icon" href="imagens/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="cadastro_completo/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="cadastro_completo/css/custom.css">
</head>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
    session_start();
    if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
        header("Location: login.php");
        exit;
    } else {
        echo "<center>Você está logado</center>";
    } 
?>
<?php
require 'cadastro_completo/conexao.php';

// Recebe o termo de pesquisa se existir
$termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';

// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termo)):

	$conexao = conexao::getInstance();
	$sql = 'SELECT id, nome, email, celular, data_nascimento, status, foto FROM tab_clientes';
	$stm = $conexao->prepare($sql);
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

else:

	// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
	$conexao = conexao::getInstance();
	$sql = 'SELECT id, nome, email, celular, status, foto FROM tab_clientes WHERE nome LIKE :nome OR email LIKE :email 
	OR celular LIKE :celular';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':nome', $termo.'%');
	$stm->bindValue(':email', $termo.'%');
	$stm->bindValue(':celular', $termo. '%');
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

endif;
?>

<body>
	<div class='container'>
		<fieldset>

			<!-- Cabeçalho da Listagem -->
			<legend><h1>Listagem de Funcionários</h1></legend>

			<!-- Formulário de Pesquisa -->
			<form action="" method="get" id='form-contato' class="form-horizontal col-md-10">
				<label class="col-md-2 control-label" for="termo">Pesquisar</label>
				<div class='col-md-7'>
			    	<input type="text" class="form-control" id="termo" name="termo" data_nascimento="termo" placeholder="Infome o Nome ou E-mail ou celular">
				</div>
			    <button type="submit" class="btn btn-primary">Pesquisar</button>
			    <a href='painel.php' class="btn btn-primary">Ver Todos</a>
			</form>

			<!-- Link para página de cadastro -->
			<a href='cadastro_completo/cadastro.php' class="btn btn-success pull-right">Cadastrar Funcionários</a>
			<div class='clearfix'></div>

			<?php if(!empty($clientes)):?>

				<!-- Tabela de Clientes(Funcionários) -->
				<table class="table table-striped">
					<tr class='active'>
						<th>Foto</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Celular</th>
						<th>Status</th>
						<th>Ação</th>
					</tr>
					<?php foreach($clientes as $cliente):?>
						<tr>
							<td><img src='cadastro_completo/fotos/<?=$cliente->foto?>' height='40' width='40'></td>
							<td><?=$cliente->nome?></td>
							<td><?=$cliente->email?></td>
							<td><?=$cliente->celular?></td>
							<td><?=$cliente->status?></td>
							<td>
								<a href='cadastro_completo/editar.php?id=<?=$cliente->id?>' class="btn btn-primary">Editar</a>															
								<a href='javascript:void(0)' class="btn btn-danger link_exclusao" rel="<?=$cliente->id?>">Excluir</a>
							</td>
						</tr>	
					<?php endforeach;?>
				</table>

			<?php else: ?>

				<!-- Mensagem caso não exista clientes(Funcionários) ou não encontrado  -->
				<h3 class="text-center text-primary">Não existem Funcionários cadastrados!</h3>
			<?php endif; ?>
		</fieldset>
	</div>
	<script type="text/javascript" src="cadastro_completo/js/custom.js"></script>
    <p style="text-align:center;"><a href="logout.php"><input type="submit" class="sb bradius" value="sair" /></a></p>
</body>
</html>