<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Sistema de Cadastro</title>
        <link rel="shortcut icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="index/estilo.css">
    </head>
    <link href='http://fonts.googeapis.com/css?family=Oswald:400,300,700' rel='stylesheet'type='text/css'/>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <body>
        <div class="container">
            <nav>
            <h1>Posso Ajudar?</h1>     
                <hr><br><br> 
                <form name="contactoform" method="post" action="contato/sendmail.php">
                    Nome: <input type="text" name="nome" /><br /><br />
                    E-mail: <input type="text" name="email" /><br /><br />
                    Assunto: <input type="text" name="assunto" /><br /><br />
                    Mensagem: <textarea name="mensagem"></textarea><br /><br />
                    <input type="submit" value="enviar" />  
                </form>   
            </nav>
            <section>
            <div class="acomodar">    
                <ul class="menu">
                <div class="logo"><a href="<?php echo $home;?>"title="<?php echo $title;?>"><img src="imagens/Person.jpg" alt="<?php echo $title;?>"title="<?php 
                echo $title;?>"title="<?php echo $title;?>"width="60" height="58"/></a></div>
                <center><a href="cadastro.php"><input type="submit" class="sb bradius" value="cadastrar" /></a></center>
                <center><a href="login.php"><input type="submit" class="sb bradius" value="login" /></a></center>
                </ul>
            </div>
                <!--<form method="post" action="">-->
            </section>
        </div>    
    </body>
</html>    