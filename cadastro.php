<html>
<head> 
<title>Sistema de Cadastro</title>
</head>
<meta http-equiv="Content-type" content="text/html; charset=utf8" />
<link rel="shortcut icon" href="imagens/favicon.ico"/>
<link href='http://fonts.googeapis.com/css?family=Oswald:400,300,700' rel='stylesheet'type='text/css'/>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<body>
<div id="cadastrar"><a href="index.php"title="Cadastre-se">Voltar &raquo;</a></div>
    <div id="login" class="form bradius" style="top:150px;">
        <div class="message"></div>
        <div class="logo"><a href="<?php echo $home;?>"title="<?php echo $title;?>"><img src="imagens/Person.jpg" alt="<?php echo $title;?>"title="<?php 
        echo $title;?>"title="<?php echo $title;?>"width="60" height="58"/></a></div>
        <div class="acomodar">
        <form name="signup" method="post" action="cadastrando.php">
            <label for="nome">Nome:</label><input type="text" class="txt bradius" name="nome" required autofocus />
            <label for="sobrenome">Sobrenome:</label><input type="text" class="txt bradius" name="sobrenome" />
            <label for="pais">País:</label><input type="text" class="txt bradius" name="pais" />
            <label for="estado">Estado:</label><input type="text" class="txt bradius" name="estado" />
            <label for="cidade">Cidade:</label><input type="text" class="txt bradius" name="cidade" />
            <label for="email">E-mail:</label><input type="text" class="txt bradius"name="email" />
            <label for="senha">Senha:</label><input id="senha"type="password" class="txt bradius" name="senha" />
            <input type="submit" class="sb bradius" value="Cadastrar" />
            </form>
        </div>
</div>
</body>

</html>