<!DOCTYPE html>
<html>
<head>    
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Procon PB - SI (Sistemas Internos)</title>

	<link href="../dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/dashboard.css" rel="stylesheet" />
	
</head>

<?php
require 'conexao.php';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die(mysql_error());

mysqli_select_db($conexao, DBNAME) or die(mysqli_error());

session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
	header("Location: login.php");
	exit;
} else {
	echo "<center>Você está logado</center>";
}
?>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Procon PB  SI - CADASTRO DE SERVIDOR</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="index.php#">LOGIN</a>
        </li>
      </ul>
    </nav>

	<!-- Inicio Menu Lateral -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Servidores
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  ADICIONAR MENU
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>OUTRO TÓPICO</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ADICIONAR MENU
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  ADICIONAR MENU
                </a>
              </li>
            </ul>
          </div>
        </nav>
	
	<!-- Fim Menu Lateral -->

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Cadastro de Servidores</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
			
			<form action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<div class="row">
					<label for="nome">Selecionar Foto</label>
			      	<div class="col-md-2">
					    <a href="#" class="thumbnail">
					      <img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>

					<!-- início Formulário -->

					<div class=" container"> <!-- Inicio Div Formulário -->

					<ul class="nav nav-tabs" id="myTab" role="tablist">
							
							<li class="nav-item">
									<a class="nav-link active" id="DadosPessoais-tab" data-toggle="tab" href="#DadosPessoais" role="tab" aria-controls="DadosPessoais" aria-selected="true">Dados Pessoais</a>
							</li>

							<li class="nav-item">
									<a class="nav-link" id="Cadastro-tab" data-toggle="tab" href="#Cadastro" role="tab" aria-controls="Cadastro" aria-selected="false">Cadastro</a>
							</li>

							<li class="nav-item">
									<a class="nav-link" id="DadosFuncionario-tab" data-toggle="tab" href="#DadosFuncionario" role="tab" aria-controls="DadosFuncionario" aria-selected="false">Dados Funcionario</a>
							</li>

					</ul>

					<!-- icicio Dados Pessoais -->

					<div class="tab-content" id="myTabContent">

							<div class="tab-pane fade show active" id="DadosPessoais" role="tabpanel" aria-labelledby="DadosPessoais-tab">

							<div class="row">
											<div class="form-group col-md-8">
											<label for="nome">Nome</label>
											<input type="text" class="form-control" id="nome" name="nome" placeholder="Infome o Nome">
											<span class='msg-erro msg-nome'></span>
										</div>
							</div>

							<div class="row">
								
									<div class="form-group col-md-4">
										<label for="mae">Mãe</label>
										<input type="text" class="form-control" id="mae" name="mae" placeholder="Informe a Mãe">
										<span class='msg-erro msg-mae'></span>
									</div>

									<div class="form-group col-md-4">
										<label for="pai">Pai</label>
										<input type="text" class="form-control" id="pai" name="pai" placeholder="Infome o Pai">
										<span class='msg-erro msg-pai'></span>
									</div>
									
							</div>

							<div class="row">

								<div class="form-group col-md-6">
									<label for="rua">Rua</label>
									<input type="rua" class="form-control" id="rua" name="rua" placeholder="Informe a Rua">
									<span class='msg-erro msg-rua'></span>
								</div>

								<div class="form-group col-md-2">
									<label for="numero">N°</label>
									<input type="numero" class="form-control" id="numero" maxlength="12" name="numero" placeholder="Informe o N°">
									<span class='msg-erro msg-numero'><span>
								</div>	

							</div>
							
							<div class="row">
							
								<div class="form-group col-md-6">
									<label for="complemento">Complemento</label>
									<input type="complemento" class="form-control" id="complemento" name="complemento" placeholder="Infome o Complemento">
									<span class='msg-erro msg-complemento'></span>
								</div>

								<div class="form-group col-md-2">
									<label for="cep">Cep</label>
									<input type="cep" class="form-control" id="cep" maxlength="9" name="cep" placeholder="Informe o Cep">
									<span class='msg-erro msg-cep'></span>
								</div>

							</div>

							
							<div class="row">
									
									<div class="form-group col-md-4">
										<label for="bairro">Bairro</label>
										<input taype="bairro" class="form-control" id="bairro" name="bairro" placeholder="Informe o Bairro">
										<span class='msg-erro msg-bairro'></span>	
									</div>

									<div class="form-group col-md-4">
										<label for="cidade">Cidade</label>
										<input type="cidade" class="form-control" id="cidade" name="cidade" placeholder="Informe a Cidade">
										<span class='msg-erro msg-cidade'></span>
									</div>	

							</div>

							<div class="row">

									<div class="form-group col-md-8">
										<label for="email">E-mail</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Informe o E-mail">
										<span class='msg-erro msg-email'></span>
									</div>
							
							</div>

						</div>

						<!-- Fim Dados Pessoais -->

						<!-- Inicio Cadastro -->

						<div class="tab-pane fade" id="Cadastro" role="tabpanel" aria-labelledby="Cadastro-tab">
							
						<div class="row"> 

								<div class="form-group col-md-2">
									<label for="matricula">Matricula</label>
									<input type="matricula" class="form-control" id="matricula" maxlength="9" name="matricula" placeholder="infome a matricula">
									<span class='msg-erro msg-matricula'></span>
								</div>
								
								<div class="form-group col-md-4">
									<label for="cpf">CPF</label>
									<input type="cpf" class="form-control" id="cpf" maxlength="14" name="cpf" placeholder="Informe o CPF">
									<span class='msg-erro msg-cpf'></span>
								</div>

								<div class="form-group col-md-2">
									<label for="identidade">RG</label>
									<input type="identidade" class="form-control" id="identidade" maxlength="20" name="identidade" placeholder="Informe o RG">
									<span class='msg-erro msg-identidade'></span>
								</div>

						</div>

						<div class="row"> 

								<div class="form-group col-md-4">
									<label for="titulo">Titulo</label>
									<input type="titulo" class="form-control" id="titulo" maxlength="14" name="titulo" placeholder="Informe o Titulo">
									<span class='msg-erro msg-titulo'></span>
								</div>

								<div class="form-group col-md-2">
									<label for="zona">Zona</label>
									<input type="zona" class="form-control" id="zona" maxlength="3" name="zona" placeholder="Informe a Zona">
									<span class='msg-erro msg-zona'></span>
								</div>

								<div class="form-group col-md-2">
									<label for="secao">Seção</label>
									<input type="secao" class="form-control" id="secao" maxlength="4" name="secao" placeholder="Infomer a Seção">
									<span class='msg-erro msg-secao'></span>
								</div>
	
						</div>
						
						<div class="row">

								<div class="form-group col-md-2">
									<label for="pis">PIS/PASEP</label>
									<input type="pis" class="form-control" id="pis" maxlength="14" name="pis" placeholder="Informe o PIS/PASEP">
									<span class='msg-erro msg-pis'></span>
								</div>

								<div class="form-group col-md-2">
									<label for="reservista">Carteira Reservista</label>
									<input type="reservista" class="form-control" id="reservista" maxlength="20" name="reservista" placeholder="Informe a Reservista">
									<span class='msg-erro msg-reservista'></span>
								</div>

								<div class="form-group col-md-4">
									<label for="carteiratrabalho">Carteira de Trabalho</label>
									<input type="carteiratrabalho" class="form-control" id="carteiratrabalho" maxlength="20" name="carteiratrabalho" placeholder="Informe a Carteira de Trabalho">
									<span class='msg-erro msg-carteiratrabalho'></span>
								</div>

						</div>

						<div class="row">

							<div class="form-group col-md-8">
								<label for="escolar">Instrução Escolar</label>
								<input type="escolar" class="form-control" id="escolar" maxlength="50" name="escolar" placeholder="Informe a Instrução Escolar">
								<span class='msg-erro msg-escolar'></span>
							</div>

						</div>

						<div class="row">

							<div class="form-group col-md-4">
								<label for="instituicao">Instituição</label>
								<input type="instituicao" class="form-control" id="instituicao" maxlength="50" name="instituicao" placeholder="Informe a Instituição">
								<span class='msg-erro msg-instituicao'></span>
							</div>

							<div class="form-group col-md-4">
								<label for="curso">Curso Formação</label>
								<input type="curso" class="form-control" id="curso" maxlength="50" name="curso" placeholder="Informe o Curso Formação">
								<span class='msg-erro msg-curso'></span>
							</div>

						</div>

						<div class="row">

							<div class="form-group col-md-4">
								<label for="deficiente">Deficiente</label>
								<input type="deficiente" class="form-control" id="deficiente" maxlength="50" name="deficiente" placeholder="Informe a Deficiência">
								<span class='msg-erro msg-deficiente'></span>
							</div>

							<div class="form-group col-md-4">
								<label for="nota">Anotações</label>
								<textarea class="form-control" id="nota" name="nota" placeholder="O texto deve ser inserido aqui."></textarea>
								<span class='msg-erro msg-nota'></span>
							</div>

						</div>

					</div>
						
						<!-- Fim Cadastro -->

						<!-- Inicio Dados Funcionario -->
						
						<div class="tab-pane fade" id="DadosFuncionario" role="tabpanel" aria-labelledby="DadosFuncionario-tab">

							<div class="form-group">
								<label for="cargo">Cargo</label>
								<input type="cargo" class="form-control" id="cargo" name="cargo" placeholder="Informe o Cargo">
								<span class='msg-erro msg-cargo'></span>
							</div>

							<div class="form-group">
								<label for="funcao">Função</label>
								<input type="funcao" class="form-control" id="funcao" name="funcao" placeholder="Informe a Função">
								<span class='msg-erro msg-funcao'></span>
							</div>

							<div class="form-group">
								<label for="forma_admissao">Forma de Admissão</label>
								<select class="form-control" name="forma_admissao" id="forma_admissao">
								<option value="">Forma de Admissão</option>
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
								<option value="">Regime</option>
								<option value="estatutário">Estatutário</option>
								<option value="Exclusivamente em Comissao">Exclusivamente em Comissão</option>
								</select>
								<span class='msg-erro msg-regime'></span>
							</div>

							<div class="form-group">
								<label for="setor">Setor</label>
								<input type="setor" class="form-control" id="setor" name="setor" placeholder="Informe o Setor">
								<span class='msg-erro msg-setor'></span>
							</div>

							<div class="form-group">
								<label for="data_nascimento">Data de Nascimento</label>
								<input type="data_nascimento" class="form-control" id="data_nascimento" maxlength="10" name="data_nascimento">
								<span class='msg-erro msg-data'></span>
							</div>

							<div class="form-group">
								<label for="data_admissao">Data de Admissão</label>
								<input type="data_admissao" class="form-control" id="data_admissao" maxlength="10" name="data_admissao">
								<span class='msg-erro msg-data2'></span>
							</div>

							<div class="form-group">
								<label for="sexo">Sexo</label>
								<select class="form-control" name="sexo" id="sexo">
								<option value="">Selecione o Sexo</option>
								<option value="Masculino">Masculino</option>
								<option value="Feminino">Feminino</option>
								</select>
								<span class='msg-erro msg-sexo'></span>
							</div>	

							<div class="form-group">
								<label for="nacionalidade">Nacionalidade</label>
									<select class="form-control" name="nacionalidade" id="nacionalidade">
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
								<label for="estado_civil">Estado Civil</label>
									<select class="form-control" name="estado_civil" id="estado_civil">
									<option value="">Selecione o Estado Civil</option>
									<option value="Casado">Casado(a)</option>
									<option value="Divorciado">Divorciado(a)</option>
									<option value="Junto">Junto(a)</option>
									<option value="Separado">Separado(a)</option>
									<option value="Solteiro">Solteiro(a)</option>
									<option value="Viuvo">Viuvo(a)</option>
									</select>	
									<span class='msg-erro msg-estado_civil'></span>
							</div>

							<div class="form-group">
									<label for="numero_dependente">Números de Dependente(s)</label>
									<input type="numero_dependente" class="form-control" maxlength="2" name="numero_dependente" id="numero_dependente" placeholder="Informe o Número de Dependente">
									<span class='msg-erro msg-numero_dependente'></span>
							</div>

							<div class="form-group">
								<label for="naturalidade">Naturalidade</label>
								<input type="naturalidade" class="form-control" maxlength="20" name="naturalidade" id="naturalidade" placeholder="Informe a Naturalidade">
								<span class='msg-erro msg-naturalidade'></span>
							</div>

							<div class="form-group">
								<label for="estado">Estado</label>
								<select class="form-control" name="estado" id="estado">
									<option value="Paraíba PB">Paraíba (PB)</option>
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
								<label for="telefone">Telefone</label>
								<input type="telefone" class="form-control" id="telefone" maxlength="12" name="telefone" placeholder="Informe o Telefone">
								<span class='msg-erro msg-telefone'></span>
							</div>

							<div class="form-group">
								<label for="celular">Celular</label>
								<input type="celular" class="form-control" id="celular" maxlength="13" name="celular" placeholder="Informe o Celular">
								<span class='msg-erro msg-celular'></span>
							</div>
									
							<div class="form-group">
								<label for="whatsapp">Whatsapp</label>
								<input type="whatsapp" class="form-control" id="whatsapp" maxlength="13" name="whatsapp" placeholder="Informer o Whatsapp">
								<span class='msg-erro msg-whatsapp'></span>
							</div>

							<div class="form-group">
								<label for="banco">Banco</label>
								<input type="banco" class="form-control" id="banco" name="banco" placeholder="Informe o Banco" style="text-transform:uppercase;">
								<span class='msg-erro msg-banco'></span>
							</div>

							<div class="from-group">
								<label for="agencia">Agencia</label>
								<input type="agencia" class="form-control" id="agencia" maxlebgth="20" name="agencia" placeholder="Informe a Agência">
								<span class='msf-erro msg-agencia'></span>
							</div>

							<div class="form-group">
								<label for="conta_corrente">Conta Corrente</label>
								<input type="conta_corrente" class="form-control" id="conta_corrente" maxlength="20" name="conta_corrente" placeholder="Informe a Conta Corrente">
								<span class='msg-erro msg-conta_corrente'></span>
							</div>		

							<div class="form-group">
									<label for="status">Status</label>
									<select class="form-control" name="status" id="status">
									<option value="">Selecione o Status</option>
									<option value="Ativo">Ativo</option>
									<option value="Inativo">Inativo</option>
									</select>
									<span class='msg-erro msg-status'></span>
							</div>
						
						<!-- Fim Dados Funcionario -->

									<input type="hidden" name="acao" value="incluir">
									<button type="submit" class="btn btn-primary" id='botao'> 
										Gravar
									</button>
									<a href='../painel.php' class="btn btn-danger">Cancelar</a>
						</form>
					</div>

				</div> <!-- Div do formulario edit-cont-->
      
			 </div>

    </div>


					</main>
				</div>
			</div>
	
	
			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
			<script src="../assets/js/vendor/popper.min.js"></script>
			<script src="../dist/js/bootstrap.min.js"></script>
	
			<!-- Icons -->
			<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
			<script>
				feather.replace()
			</script>
	
			<!-- Graphs -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
			<script>
				var ctx = document.getElementById("myChart");
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
						labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
						datasets: [{
							data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
							lineTension: 0,
							backgroundColor: 'transparent',
							borderColor: '#007bff',
							borderWidth: 4,
							pointBackgroundColor: '#007bff'
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero: false
								}
							}]
						},
						legend: {
							display: false,
						}
					}
				});
			</script>
	
	
	<!-- <script type="text/javascript" src="js/custom.js"></script> -->
</body>
</html>