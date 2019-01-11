<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Procon PB - SI (Sistemas Internos)</title>
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/wtf-forms.css">
    <link rel="stylesheet" type="text/css" href="./css/custom.css"> 
    
</head>

<?php
    require_once 'conexao.php';
    $conexao = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die(mysql_error());

    mysqli_select_db($conexao, DBNAME) or die(mysqli_error());

    session_start();
    if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
        header("Location: login.php");
        exit;
    } else {
        echo "<center>Você está logado</center>";
    }

    // Recebe o id do cliente do cliente via GET
    if (isset($_GET['id']))
        $id_cliente = (isset($_GET['id'])) ? $_GET['id'] : '';

    // Valida se existe um id e se ele é numérico
    if (!empty($id_cliente) && is_numeric($id_cliente)) :

        // Captura os dados do cliente solicitado
        $conexao = conexao::getInstance();
        $sql = 'SELECT id, nome, pai, mae, rua, numero, complemento, cep, bairro, cidade, email, cpf, identidade, titulo, zona, secao, pis, 
            carteiratrabalho, reservista, escolar, instituicao, curso, deficiente, nota, cargo, funcao, forma_admissao, regime, setor, matricula, data_nascimento, data_admissao, sexo, nacionalidade, 
            naturalidade, estado, estado_civil, numero_dependente, telefone, celular, whatsapp, banco, agencia, conta_corrente, status, foto FROM tab_clientes WHERE id = :id';
        $stm = $conexao->prepare($sql);
        $stm->bindValue(':id', $id_cliente);
        $stm->execute();
        $cliente = $stm->fetch(PDO::FETCH_OBJ);

        if (!empty($cliente)) :

                // Formata a data no formato nacional
        $array_data = explode('-', $cliente->data_nascimento);
        $data_formatada = $array_data[2] . '/' . $array_data[1] . '/' . $array_data[0];

                // Formata a data no formato Nacional
        $array_data2 = explode('-', $cliente->data_admissao);
        $data_formatada2 = $array_data2[2] . '/' . $array_data2[1] . '/' . $array_data2[0];

        endif;

    endif;

?>

    <body>
    <?php include("./../partials/header.php"); ?>
        <?php include("./../partials/menu_sidebar.php"); ?>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php $HeaderContext = "Cadastro de Servidores - Editar"; ?>
                <?php include("./../partials/headercontext.php")  ?>

	            <?php if (empty($cliente)) : ?>
                        <h3 class="text-center text-danger">Cliente não encontrado!</h3>
                        <?php else : ?>

                            <form class="form-api needs-validation" action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>

                                <div class="row">

                                    <div class="col-md-2">

                                        <img class="img-thumbnail d-block" src="fotos/<?= (empty($cliente->foto)) ? 'padrao.jpg' : $cliente->foto ?>" id="foto-cliente">
                                        
                                        <div class="file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto" >
                                            <label class="custom-file-label" for="foto">Selecionar...</label>                                            
                                        </div>

                                    </div>

                                    <div class="col-md-8">
                                        <?php include("editar-pessoal.php"); ?>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="row"> 
                                            <div class="col-md-12">    
                                                <input type="hidden" name="acao" value="editar">
                                                <input type="hidden" name="id" value="<?= $cliente->id ?>">
                                                <input type="hidden" name="foto_atual" value="<?= $cliente->foto ?>">
                                                <button type="submit" class="btn btn-primary" id='botao'>Gravar</button>
                                                <a href='../painel.php' class="btn btn-danger">Cancelar</a>                                            
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                    <hr>
                                    </div>
                                </div>
                                
                                <div class="row">

                                    <div class="col-md-6">
                                        <?php include("editar-cadastrais.php"); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php include("editar-funcionais.php"); ?>
                                    </div>
                                </div>

                            </form>

                     <?php endif; ?>

                </main>
            </div>
            </div>
            <!-- Bootstrap core JavaScript

    ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script>
                window.jQuery || document.write('<script src="./assets/js/vendor/jquery-slim.min.js"><\/script>')
            </script>
            <script src="../assets/js/vendor/popper.min.js"></script>
            <script src="../dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/custom.js"></script>
            <!-- Icons -->
            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
            <script>
                feather.replace()
            </script>

            

    </body>


</html>