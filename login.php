<html>
<head>
<title>Sistema de Login</title>
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
        <form name="loginform" method="post" action="userauthentication.php">
            <label for="email">Email:</label><input type="text" class="txt bradius" name="email" required autofocus />
            <label for="senha">Senha:</label><input type="password" class="txt bradius" name="senha" />
            <input type="submit" class="sb bradius" value="Entrar" />
            </form>
            <!--acomodar-->
        </div>
        <!--login-->
</div>
<!--<form name="loginform" method="post" action="userauthentication.php">

E-mail: <input type="text" name="email" /><br /><br />
Senha: <input type="password" name="senha" /><br /><br />
<input type="submit" value="Entrar" /> -->


</form>
</body>
</html>