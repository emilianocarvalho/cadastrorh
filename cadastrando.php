<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf8" />
<link rel="shortcut icon" href="imagens/favicon.ico"/>
<title>Cadastrando...</title>
</head>

<body>
<?php
// include("cadastro.php");

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $pass, $banco) or die(mysql_error());
// (mysql_select_db($banco) or die(mysql_error());

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$cidade=$_POST['cidade'];

$sql = "INSERT INTO usuarios (nome, sobrenome, pais, estado, cidade, email, senha)
VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>";
} else {
    echo "<center><h1>Error:" . $sql . "<br>" . mysqli_error($conexao) . "</h1></center>";
}

mysqli_close($conexao);
?>
</body>

</html>