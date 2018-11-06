<html>

<head>
<title>Enviando E-mail</title>
</head>

<body>
<?php
$nome=$_POST ['nome'];
$email=$_POST ['emial'];
$assunto=$_POST ['assunto'];
$mensagem=$_POST ['mensagem'];

$to ="djalisson2@gmail.com";
$subject = "$assunto";
$message = "<strong>Nome:</strong> $nome<br /><br /><strong>E-mail:</strong> $email<br /><br /><strong>Assunto:</strong> 
$assunto<br /><br /><strong>Mensagem:</strong> $mensagem<br /><br />";
$header = "MINE-Version: 1.0\n;";
$header = "Content-type: text/html; charset=iso-8859-1\n";
$header = "From: $email\n";
mail($to, $subject, $message, $header);
echo "Mensagem enviada com sucesso!";
?>
</body>

</html>