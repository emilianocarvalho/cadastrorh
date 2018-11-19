<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Edição de Cliente</title>
    <link rel="shortcut icon" href="../imagens/favicon.ico"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='http://fonts.googeapis.com/css?family=Oswald:400,300,700' rel='stylesheet'type='text/css'/>

    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<?php

// require './conexao.php';
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
    <div class='container'>
        <fieldset>
            <legend><h1>Formulário - Edição de Cliente</h1></legend>
            
            <?php if (empty($cliente)) : ?>
                <h3 class="text-center text-danger">Cliente não encontrado!</h3>
            <?php else : ?>
                <form action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
                    <div class="row">
                        <label for="nome">Alterar Foto</label>
                          <div class="col-md-2">
                            <a href="#" class="thumbnail">
                              <img src="fotos/<?= $cliente->foto ?>" height="190" width="150" id="foto-cliente">
                            </a>
                          </div>
                          <input type="file" name="foto" id="foto" value="foto" >
                      </div>

                    <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome" value="<?= $cliente->nome ?>" placeholder="Infome o Nome">
                      <span class='msg-erro msg-nome'></span>
                    </div>

                    <div class="form-group">
                        <label for="pai">Pai</label>
                        <input type="text" class="form-control" id="pai" name="pai" value="<?= $cliente->pai ?>" placeholder="Informe o Pai">
                        <span class='msg-erro msg-pai'></span>
                    </div>

                    <div class="form-group">
                        <label for="mae">Mãe</label>
                        <input type="text" class="form-control" id="mae" name="mae" value="<?= $cliente->mae ?>" placeholder="Informe a Mãe">
                        <span class='msg-erro msg-mae'></span>
                    </div>

                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <input type="rua" class="form-control" id="rua" name="rua" value="<?= $cliente->rua ?>" placeholder="Informe a Rua">
                        <span class='msg-erro msg-rua'></span>
                    </div>

                    <div class="form-group">
                        <label for="numero">N°</label>
                        <input type="numero" class="form-control" id="numero" maxlength="12" name="numero" value="<?= $cliente->numero ?>" placeholder="Informe o N°">
                        <span class='msg-erro msg-numero'></span>
                    </div>

                    <div class="formgroup">
                        <label for="complemento">Complemento</label>
                        <input type="complemento" class="form-control" id="complemento" name="complemento" value="<?= $cliente->complemento ?>" placeholder="Informe o Complemento">
                        <span class='msg-erro msg-complemento'></span>
                    </div>	

                    <div class="form-group">
                        <label for="cep">Cep</label>
                        <input type="cep" class="form-control" id="cep" maxlength="9" name="cep" value="<?= $cliente->cep ?>" placeholder="Infome o Cep">
                        <span class='msg-erro msg-cep'></span>
                    </div>

                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="bairro" class="form-control" id="bairro" name="bairro" value="<?= $cliente->bairro ?>" placeholder="Informe o Bairro">
                        <span class='msg-erro msg-bairro'></span>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="cidade" class="form-control" id="cidade" name="cidade" value="<?= $cliente->cidade ?>" placeholder="Informe a Cidade">
                        <span class='msg-erro msg-cidade'></span>
                    </div>

                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="email" class="form-control" id="email" name="email" value="<?= $cliente->email ?>" placeholder="Informe o E-mail">
                      <span class='msg-erro msg-email'></span>
                    </div>

                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="matricula" class="form-control" id="matricula" maxlength="9" name="matricula" value="<?= $cliente->matricula ?>" placeholder="Informe a Matricula">
                        <span class="msg-erro msg-matricula"></span>
                    </div>	

                    <div class="form-group">
                      <label for="cpf">CPF</label>
                      <input type="cpf" class="form-control" id="cpf" maxlength="14" name="cpf" value="<?= $cliente->cpf ?>" placeholder="Informe o CPF">
                      <span class='msg-erro msg-cpf'></span>
                    </div>

                    <div class="form-group">
                        <label for="identidade">RG</label>
                        <input type="identidade" class="form-control" id="identidade" maxlength="20" name="identidade" value="<?= $cliente->identidade ?>" placeholder="Informe a RG">
                        <span class='msg-erro msg-identidade'></span>
                    </div>

                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input type="titulo" class="form-control" id="titulo" maxlength="14" name="titulo" value="<?= $cliente->titulo ?>" placeholder="Informe o Titulo">
                        <span class='msg-erro msg-titulo'></span>
                    </div>

                    <div class="form-group">
                        <label for="zona">Zona</label>
                        <input type="zona" class="form-control" id="zona" maxlength="3" name="zona" value="<?= $cliente->zona ?>" placeholder="Informe o Titulo">
                        <span class='msg-erro msg-zona'></span>
                    </div>

                    <div class="form-group">
                        <label for="secao">Seção</label>
                        <input type="secao" class="form-control" id="secao" maxlength="4" name="secao" value="<?= $cliente->secao ?>" placeholder="Informe a Zona">
                        <span class='msg-erro msg-secao'></span>
                    </div>

                    <div class="form-group">
                        <label for="pis">PIS/PASEP</label>
                        <input type="pis" class="form-control" id="pis" maxlength="14" name="pis" value="<?= $cliente->pis ?>" placeholder="Informe o PIS/PASEP">
                        <span class='msg-erro msg-pis'></span>
                    </div>

                    <div class="form-group">
                        <label for="carteiratrabalho">Carteira de Trabalho</label>
                        <input type="carteiratrabalho" class="form-control" id="carteiratrabalho" maxlength="20" name="carteiratrabalho" value="<?= $cliente->carteiratrabalho ?>" placeholder="Infome a carteira de trabalho">
                        <span class='msg-erro msg-carteiratrabalho'></span>
                    </div>

                    <div class="form-group">
                        <label for="reservista">Carteira Reservista</label>
                        <input type="reservista" class="form-control" id="reservista" maxlength="20" name="reservista" value="<?= $cliente->reservista ?>" placeholder="Informe a Reservista">
                        <span class='msg-erro msg-reservista'></span>
                    </div>

                    <div class="form-group">
                        <label for="escolar">Instrução Escolar</label>
                        <input type="escolar" class="form-control" id="escolar" maxlength="50" name="escolar" value="<?= $cliente->escolar ?>" placeholder="Informer a Instrução Escolar">
                        <span class='msg-erro msg-escolar'></span>
                    </div>

                    <div class="form-group">
                        <label for="instituicao">Instituição</label>
                        <input type="instituicao" class="form-control" id="instituicao" maxlength="50" name="instituicao" value="<?= $cliente->instituicao ?>" placeholder="Informe a Instituição">
                        <span class='msg-erro msg-instituicao'></span>
                    </div>

                    <div class="form-group">
                        <label for="curso">Curso Formação</label>
                        <input type="curso" class="form-control" id="curso" maxlength="50" name="curso" value="<?= $cliente->curso ?>" placeholder="Informe o Curso Formação">
                        <span class='msg-erro msg-curso'></span>
                    </div>

                    <div class="form-group">
                        <label for="deficiente">Deficiente</label>
                        <input type="deficiente" class="form-control" id="deficiente" maxlength="50" name="deficiente" value="<?= $cliente->deficiente ?>" placeholder="Informe a Deficiência">
                        <span class='msg-erro msg-deficiente'></span>
                    </div>

                    <div class="form-group">
                    <label for="nota">Anotações:</label>
                    <textarea class="form-control" name="nota" id="nota"><?php echo $cliente->nota; ?></textarea>
                        <span class='msg-erro msg-nota'></span>
                    </div>

                    <div class="form-group">
                        <label for="cargo">Cargo</label>
                        <input type="cargo" class="form-control" name="cargo" id="cargo" value="<?= $cliente->cargo ?>" placeholder="Informe o Cargo">
                        <span class='msg-erro msg-cargo'></span>
                    </div>

                    <div class="form-group">
                        <label for="funcao">Função</label>
                        <input type="funcao" class="form-control" name="funcao" id="funcao" value="<?= $cliente->funcao ?>" placeholder="Informe a Função">
                        <span class='msg-erro msg-funcao'></span>
                    </div>

                    <div class="form-group">
                      <label for="forma_admissao">Forma de Admissão</label>
                      <select class="form-control" name="forma_admissao" id="forma_admissao">
                        <option value="<?= $cliente->forma_admissao ?>"><?= $cliente->forma_admissao ?></option>
                        <option value="Sem Concurso">Sem Concurso</option>
                        <option value="Concurso">Concurso</option>
                        <option value="Contrato">Contrato</option>
                        <option value="Em Comissao">Em Comissão</option>
                      </select>
                      <span class='msg-erro msg-forma_admissao'></span>
                    </div>

                    <div class="form-group">
                        <label for="regime">Regime</label>
                        <select class="form-control" name="regime" id="regime">
                            <option value="<?= $cliente->regime ?>"><?= $cliente->regime ?></option>
                            <option value="Estatuario">Estatutário</option>
                            <option value="Exclusivamente em Comissao">Exclusivamente em Comissão</option>
                        </select>
                        <span class='msg-erro msg-regime'></span>
                    </div>

                    <div class="form-group">
                        <label for="setor">Setor</label>
                        <input type="setor" class="form-control" id="setor" name="setor" value="<?= $cliente->setor ?>" placeholder="Informe o Setor">
                        <span class='msg-erro msg-setor'></span>
                    </div>

                    <div class="form-group">
                      <label for="data_nascimento">Data de Nascimento</label>
                      <input type="data_nascimento" class="form-control" id="data_nascimento" maxlength="10" value="<?= $data_formatada ?>" name="data_nascimento">
                      <span class='msg-erro msg-data'></span>
                    </div>

                    <div class="form-group">
                        <label for="data_admissao">Data de Admissão</label>
                        <input type="data_admissao" class="form-control" id="data_admissao" maxlength="10" value="<?= $data_formatada2 ?>" name="data_admissao">
                        <span class='msg-erro msg-data2'></span>
                    </div>

                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select class="form-control" name="sexo" id="sexo">
                            <option value="<?= $cliente->sexo ?>"><?= $cliente->sexo ?></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                        <span class='msg-erro msg-sexo'></span>
                    </div>

                    <div class="form-group">
                        <label for="nacionalidade">Nacionalidade</label>
                        <select class="form-control" name="nacionalidade" id="nacionalidade">
                        <option value="<?= $cliente->nacionalidade ?>"><?= $cliente->nacionalidade ?></option>
                                <option value="Brasil - Brasileiro">Brasil - Brasileiro</option>
                                <option value="Antígua e Barbuda - Antiguano">Antígua e Barbuda - Antiguano</option>
                                <option value="Argentina - Argentino">Argentina - Argentino</option>
                                <option value="Bahamas - Bahamense">Bahamas - Bahamense</option>
                                <option value="Barbados - Barbadiano, barbadense">Barbados - Barbadiano, barbadense</option>
                                <option value="Belize - Belizenho">Belize - Belizenho</option>
                                <option value="Bolívia - Boliviano">Bolívia - Boliviano</option>
                                <option value="Chile - Chileno">Chile - Chileno</option>
                                <option value="Colômbia - Colombiano">Colômbia - Colombiano</option>
                                <option value="Costa Rica - Costarriquenho">Costa Rica - Costarriquenho</option>
                                <option value="Cuba - Cubano">Cuba - Cubano</option>
                                <option value="Dominica - Dominicano">Dominica - Dominicano</option>
                                <option value="Equador - Equatoriano">Equador - Equatoriano</option>
                                <option value="El Salvador - Salvadorenho">El Salvador - Salvadorenho</option>
                                <option value="Granada - Granadino">Granada - Granadino</option>
                                <option value="Guatemala - Guatemalteco">Guatemala - Guatemalteco</option>
                                <option value="Guiana - Guianês">Guiana - Guianês</option>
                                <option value="Guiana Francesa - Guianense">Guiana Francesa - Guianense</option>
                                <option value="Haiti - Haitiano">Haiti - Haitiano</option>
                                <option value="Honduras - Hondurenho">Honduras - Hondurenho</option>
                                <option value="Jamaica - Jamaicano">Jamaica - Jamaicano</option>
                                <option value="México - Mexicano">México - Mexicano</option>
                                <option value="Nicarágua - Nicaraguense">Nicarágua - Nicaraguense</option>
                                <option value="Panamá - Panamenho">Panamá - Panamenho</option>
                                <option value="Paraguai - Paraguaio">Paraguai - Paraguaio</option>
                                <option value="Peru - Peruano">Peru - Peruano</option>
                                <option value="República Dominicana - Dominicana">República Dominicana - Dominicana</option>
                                <option value="São Cristóvão e Nevis - São-cristovense">São Cristóvão e Nevis - São-cristovense</option>
                                <option value="São Vicente e Granadinas - São-vicentino">São Vicente e Granadinas - São-vicentino</option>
                                <option value="Suriname - Surinamês">Suriname - Surinamês</option>
                                <option value="Uruguai - Uruguaio">Uruguai - Uruguaio</option>
                                <option value="Venezuela - Venezuelano">Venezuela - Venezuelano</option>
                                <option value="Alemanha - Alemão">Alemanha - Alemão</option>
                                <option value="Bélgica - Belga">Bélgica - Belga</option>
                                <option value="Croácia - Croata">Croácia - Croata</option>
                                <option value="Dinamarca - Dinamarquês">Dinamarca - Dinamarquês</option>
                                <option value="Eslováquia - Eslovaco">Eslováquia - Eslovaco</option>
                                <option value="Eslovênia - Esloveno">Eslovênia - Esloveno</option>
                                <option value="Espanha - Espanhol">Espanha - Espanhol</option>
                                <option value="Grécia - Grego">Grécia - Grego</option>
                                <option value="Hungria - Húngaro">Hungria - Húngaro</option>
                                <option value="Irlanda - Irlandês">Irlanda - Irlandês</option>
                                <option value="Itália - Italiano">Itália - Italiano</option>
                                <option value="Noruega - Noruego">Noruega - Noruego</option>
                                <option value="Países Baixos - Holandês">Países Baixos - Holandês</option>
                                <option value="Polônia - Polonês">Polônia - Polonês</option>
                                <option value="Portugal - Português">Portugal - Português</option>
                                <option value="Inglaterra - Inglês">Inglaterra - Inglês</option>
                                <option value="País de Gales - Galês">País de Gales - Galês</option>
                                <option value="Escócia - Escocês">Escócia - Escocês</option>
                                <option value="Romênia - Romeno">Romênia - Romeno</option>
                                <option value="Rússia - Russo">Rússia - Russo</option>
                                <option value="Sérvio - Sérvio">Sérvio - Sérvio</option>
                                <option value="Suécia - Sueco">Suécia - Sueco</option>
                                <option value="Suíça - Suíço">Suíça - Suíço</option>
                                <option value="Turquia - Turco">Turquia - Turco</option>
                                <option value="Ucrânia - Ucraniano">Ucrânia - Ucraniano</option>
                                <option value="Estados Unidos - Americano">Estados Unidos - Americano</option>
                                <option value="Canadá - Canadense">Canadá - Canadense</option>
                                <option value="Angola - Angolano">Angola - Angolano</option>
                                <option value="África do Sul - Sul-africano">África do Sul - Sul-africano</option>
                                <option value="Zimbabue - Zimbabuense">Zimbabue - Zimbabuense</option>
                                <option value="Argélia - Argélia">Argélia - Argélia</option>
                                <option value="Comores - Comorense">Comores - Comorense</option>
                                <option value="Egito - Egípcio">Egito - Egípcio</option>
                                <option value="Líbia - Líbio">Líbia - Líbio</option>
                                <option value="Marrocos - Marroquino">Marrocos - Marroquino</option>
                                <option value="Quênia - Queniano">Quênia - Queniano</option>
                                <option value="Ruanda - Ruandês">Ruanda - Ruandês</option>
                                <option value="Uganda - Ugandense">Uganda - Ugandense</option>
                                <option value="Botsuana - Bechuano">Botsuana - Bechuano</option>
                                <option value="Costa do Marfim - Marfinense">Costa do Marfim - Marfinense</option>
                                <option value="Camarões - Camaronense">Camarões - Camaronense</option>
                                <option value="Nigéria - Nigerian">Nigéria - Nigerian</option>
                                <option value="Austrália - Australiano">Austrália - Australiano</option>
                                <option value="Nova Zelândia - Neozelandês">Nova Zelândia - Neozelandês</option>
                                <option value="Afeganistão - Afegão">Afeganistão - Afegão</option>
                                <option value="Arábia Saudita - Saudita">Arábia Saudita - Saudita</option>
                                <option value="Armênia - Armeno">Armênia - Armeno</option>
                                <option value="Armeno - Bangladesh">Armeno - Bangladesh</option>
                                <option value="China - Chinês">China - Chinês</option>
                                <option value="Coréia do Sul - Sul-coreano, coreano">Coréia do Sul - Sul-coreano, coreano</option>
                                <option value="Índia - Indiano">Índia - Indiano</option>
                                <option value="Indonésia - Indonésio">Indonésia - Indonésio</option>
                                <option value="Iraque - Iraquiano">Iraque - Iraquiano</option>
                                <option value="Irã - Iraniano">Irã - Iraniano</option>
                                <option value="Israel - Israelita">Israel - Israelita</option>
                                <option value="Japão - Japonês">Japão - Japonês</option>
                                <option value="Malásia - Malaio">Malásia - Malaio</option>
                                <option value="Nepal - Nepalês">Nepal - Nepalês</option>
                                <option value="Omã - Omanense">Omã - Omanense</option>
                                <option value="Paquistão - Paquistanês">Paquistão - Paquistanês</option>
                                <option value="Palestina - Palestino">Palestina - Palestino</option>
                                <option value="Qatar - Qatarense">Qatar - Qatarense</option>
                                <option value="Síria - Sírio">Síria - Sírio</option>
                                <option value="Sri Lanka - Cingalês">Sri Lanka - Cingalês</option>
                                <option value="Tailândia - Tailandês">Tailândia - Tailandês</option>
                                <option value="Timor-Leste - Timorense, maubere">Timor-Leste - Timorense, maubere</option>
                                <option value="Emirados Árabes Unidos - Árabe, emiratense">Emirados Árabes Unidos - Árabe, emiratense</option>
                                <option value="Vietnã - Vietnamita">Vietnã - Vietnamita</option>
                                <option value="Iêmen - Iemenita">Iêmen - Iemenita</option>		
                            </select>	
                        <span class='msg-erro msg-nacionalidade'></span>
                        </div>

                        <div class="form-group">
                            <label for="naturalidade">Naturalidade</label>
                            <input type="naturalidade" class="form-control" id="naturalidade" maxlength="20" value="<?= $cliente->naturalidade ?>" name="naturalidade" placeholder="Informe a Naturalidade">
                            <span class='msg-erro msg-naturalidade'></span>
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select class="form-control" name="estado" id="estado">
                                <option value="<?= $cliente->estado ?>"><?= $cliente->estado ?></option>
                                <option value="Amazonas AM">Amazonas (AM)</option>
                                <option value="Roraima RR">Roraima (RR)</option>
                                <option value="Amapá AP">Amapá (AP)</option>
                                <option value="Pará PA">Pará (PA)</option>
                                <option value="Tocantins TO">Tocantins (TO)</option>
                                <option value="Rondônia RO">Rondônia (RO)</option>
                                <option value="Acre AC">Acre (AC)</option>
                                <option value="Maranhão MA">Maranhão (MA)</option>
                                <option value="Piauí PI">Piauí (PI)</option>
                                <option value="Ceará CE">Ceará (CE)</option>
                                <option value="Rio Grande do Norte RN">Rio Grande do Norte (RN)</option>
                                <option value="Pernambuco PE">Pernambuco (PE)</option>
                                <option value="Paraíba PB">Paraíba (PB)</option>
                                <option value="Sergipe SE">Sergipe (SE)</option>
                                <option value="Alagoas AL">Alagoas (AL)</option>
                                <option value="Bahia BA">Bahia (BA)</option>
                                <option value="Mato Grosso MT">Mato Grosso (MT)</option>
                                <option value="Mato Grosso do Sul MS">Mato Grosso do Sul (MS)</option>
                                <option value="Goiás GO">Goiás (GO)</option>
                                <option value="São Paulo SP">São Paulo (SP)</option>
                                <option value="Rio de Janeiro RJ">Rio de Janeiro (RJ)</option>
                                <option value="Espírito Santo ES">Espírito Santo (ES)</option>
                                <option value="Minas Gerais MG">Minas Gerais (MG)</option>
                                <option value="Paraná PR">Paraná (PR)</option>
                                <option value="Rio Grande do Sul RS">Rio Grande do Sul (RS)</option>
                                <option value="Santa Catarina SC">Santa Catarina (SC)</option>
                        </select>	
                        <span class='msg-erro msg-estado'></span>
                    </div>

                    <div class="form-group">
                        <label for="estado_civil">Estado Civil</label>
                            <select class="form-control" name="estado_civil" id="estado_civil">
                            <option value="<?= $cliente->estado_civil ?>"><?= $cliente->estado_civil ?></option>
                            <option value="Casado">Casado(a)</option>
                            <option value="Divorcio">Divorcio(a)</option>
                            <option value="Junto">Junto(a)</option>
                            <option value="Separado">Separado(a)</option>
                            <option value="Solteiro">Solteiro(a)</option>
                            <option value="Viuvo">Viuvo(a)</option>
                        </select>
                        <span class='msg-erro msg-estado_civil'></span>
                    </div>

                    <div class="form-group">
                        <label for="numero_dependente">Número de Dependente(s)</label>
                        <input type="numero_dependente" class="form-control" id="numero_dependente" name="numero_dependente" maxlength="2" value="<?= $cliente->numero_dependente ?>" placeholder="Informe o Número de Dependente">
                        <span class='msg-erro msg-numero_dependente'></span>
                    </div>

                    <div class="form-group">
                      <label for="telefone">Telefone</label>
                      <input type="telefone" class="form-control" id="telefone" maxlength="12" name="telefone" value="<?= $cliente->telefone ?>" placeholder="Informe o Telefone">
                      <span class='msg-erro msg-telefone'></span>
                    </div>
                    <div class="form-group">
                      <label for="celular">Celular</label>
                      <input type="celular" class="form-control" id="celular" maxlength="13" name="celular" value="<?= $cliente->celular ?>" placeholder="Informe o Celular">
                      <span class='msg-erro msg-celular'></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="whatsapp">Whatsapp</label>
                        <input type="whatsapp" class="form-control" id="whatsapp" maxlength="13" name="whatsapp" value="<?= $cliente->whatsapp ?>" placeholder="Informe o Whatsapp">
                        <span class='msg-erro msg-whatsapp'></span>
                    </div>

                    <div class="form-group">
                        <label for="banco">Banco</label>
                        <input type="banco" class="form-control" id="banco" name="banco" value="<?= $cliente->banco ?>" style="text-transform:uppercase;" placeholder="Informe o Banco">
                        <span class='msg-erro msg-banco'></span>
                    </div>	

                    <div class="form-group">
                        <label for="agencia">Agencia</label>
                        <input type="agencia" class="form-control" id="agencia" maxlength="20" name="agencia" value="<?= $cliente->agencia ?>" placeholder="Informe a Agência">
                        <span class='msg-erro msg-agencia'></span>
                    </div>

                    <div class="form-group">
                        <label for="conta_corrente">Conta Corrente</label>
                        <input type="conta_corrente" class="form-control" id="conta_corrente" maxlength="20" name="conta_corrente" value="<?= $cliente->conta_corrente ?>" placeholder="Informe a Conta Corrente">
                        <span class='msg-erro msg-conta_corrente'></span>
                    </div>

                    <div class="form-group">
                      <label for="status">Status</label>
                      <select class="form-control" name="status" id="status">
                        <option value="<?= $cliente->status ?>"><?= $cliente->status ?></option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                      </select>
                      <span class='msg-erro msg-status'></span>
                    </div>

                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="id" value="<?= $cliente->id ?>">
                    <input type="hidden" name="foto_atual" value="<?= $cliente->foto ?>">
                    <button type="submit" class="btn btn-primary" id='botao'> 
                      Gravar
                    </button>
                    <a href='../painel.php' class="btn btn-danger">Cancelar</a>
                </form>
            <?php endif; ?>
        </fieldset>

    </div>
    <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>