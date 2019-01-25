/* Atribui ao evento submit do formulário a função de validação de dados */
var form = document.getElementById("form-contato");
if (form != null && form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form != null && form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

/* Atribui ao evento keypress do input cpf a função para formatar o CPF */
var inputCPF = document.getElementById("cpf");
if (inputCPF != null && inputCPF.addEventListener) {                   
    inputCPF.addEventListener("keypress", function(){mascaraTexto(this, '###.###.###-##')});
} else if (inputCPF != null && inputCPF.attachEvent) {                  
    inputCPF.attachEvent("onkeypress", function(){mascaraTexto(this, '###.###.###-##')});
}

/* Atribui ao evento keypress do input titulo a função para formatar o Titulo */
var inputTitulo = document.getElementById("titulo");
if (inputTitulo != null && inputTitulo.addEventListener) {
	inputTitulo.addEventListener("keypress", function(){mascaraTexto(this, '####.####.####')});
} else if (inputTitulo != null && inputTitulo.attachEvent) {
	inputTitulo.attachEvent("onkeypress", function(){mascaraTexto(this, '####.####.####')});
}

/* Atribui ao evente keypress do input pis a função para formatar o PIS/PASEP */
var inputPis = document.getElementById('pis');
if (inputPis != null && inputPis.addEventListener) {
	inputPis.addEventListener("keypress", function(){mascaraTexto(this, '###.###.###-##')});
}else if (inputPis != null && inputPis.attachEvent) {
	inputPis.attachEvent("onkeypress", function(){mascaraTexto(this, '###.###.###-##')});
}

/* Atribuir ao evento keypress do input matricula a função para formatar a Matricula */
var inputMatricula = document.getElementById("matricula");
if (inputMatricula != null && inputMatricula.addEventListener) {
	inputMatricula.addEventListener("keypress", function(){mascaraTexto(this, '###.###-#')});
} else if (inputMatricula != null && inputMatricula.attachEvent) {
	inputMatricula.attachEvent("onkeypress", function(){mascaraTexto(this, '###.###-#')});
}

/* Atribuir ao evento keypress do input cep a função para formatar o cep */
var inputCep = document.getElementById("cep");
if (inputCep != null && inputCep.addEventListener) {
	inputCep.addEventListener("keypress", function(){mascaraTexto(this, '#####-###')});
} else if (inputCep != null && inputCep.attachEvent) {
	inputCep.attachEvent("onkeypress", function(){mascaraTexto(this, '#####-###')});
}

/* Atribui ao evento keypress do input data de nascimento a função para formatar o data (dd/mm/yyyy) */
var inputDataNascimento = document.getElementById("data_nascimento");
if (inputDataNascimento != null && inputDataNascimento.addEventListener) {                   
    inputDataNascimento.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputDataNascimento != null && inputDataNascimento.attachEvent) {                  
    inputDataNascimento.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}

/* Atribui ao evento keypress do input data de admissão a função para formatar o Data2 (dd/mm/yyyy) */
var inputDataAdmissao = document.getElementById("data_admissao");
if (inputDataAdmissao != null && inputDataAdmissao.addEventListener) {
	inputDataAdmissao.addEventListener("keypress", function(){mascaraTexto(this, '##/##/####')});
} else if (inputDataAdmissao != null && inputDataAdmissao.attachEvent) {
	inputDataAdmissao.attachEvent("onkeypress", function(){mascaraTexto(this, '##/##/####')});
}

/* Atribui ao evento keypress do input telefone a função para formatar o Telefone (00 0000-0000) */
var inputTelefone = document.getElementById("telefone");
if (inputTelefone != null && inputTelefone.addEventListener) {                   
    inputTelefone.addEventListener("keypress", function(){mascaraTexto(this, '## ####-####')});
} else if (inputTelefone != null && inputTelefone.attachEvent) {                  
    inputTelefone.attachEvent("onkeypress", function(){mascaraTexto(this, '## ####-####')});
}

/* Atribui ao evento keypress do input celular a função para formatar o Celular (00 00000-0000) */
var inputCelular = document.getElementById("celular");
if (inputCelular != null && inputCelular.addEventListener) {                   
    inputCelular.addEventListener("keypress", function(){mascaraTexto(this, '## #####-####')});
} else if (inputCelular != null && inputCelular.attachEvent) {                  
    inputCelular.attachEvent("onkeypress", function(){mascaraTexto(this, '## #####-####')});
}

/* Atribui ao evento keypress do input whatsapp a função para formatar o Whatsapp (00 00000-0000) */
var inputWhatsapp = document.getElementById("whatsapp");
if (inputWhatsapp != null && inputWhatsapp.addEventListener) {
	inputWhatsapp.addEventListener("keypress", function(){mascaraTexto(this, '## #####-####')});
} else if (inputWhatsapp != null && inputWhatsapp.attachEvent) {
	inputWhatsapp.attachEvent("onkeypress", function(){mascaraTexto(this, '## #####-####')});
}

/* Atribui ao evento change do input FILE para upload da foto*/
var inputFile = document.getElementById("foto");
var foto_cliente = document.getElementById("foto-cliente");
if (inputFile != null && inputFile.addEventListener) {                   
    inputFile.addEventListener("change", function(){loadFoto(this, foto_cliente)});
} else if (inputFile != null && inputFile.attachEvent) {                  
    inputFile.attachEvent("onchange", function(){loadFoto(this, foto_cliente)});
}

/* Atribui ao evento click do link de exclusão na página de consulta a função confirmaExclusao */
var linkExclusao = document.querySelectorAll(".link_exclusao");
if (linkExclusao != null) { 
	for ( var i = 0; i < linkExclusao.length; i++ ) {
		(function(i){
			var id_cliente = linkExclusao[i].getAttribute('rel');

			if (linkExclusao[i].addEventListener){
		    	linkExclusao[i].addEventListener("click", function(){confirmaExclusao(id_cliente);});
			}else if (linkExclusao[i].attachEvent) { 
				linkExclusao[i].attachEvent("onclick", function(){confirmaExclusao(id_cliente);});
			}
		})(i);
	}
}

/* Função para validar os dados antes da submissão dos dados */
function validaCadastro(evt){
	var nome = document.getElementById('nome');
	var pai  = document.getElementById('pai');
	var mae  = document.getElementById('mae');
	var rua  = document.getElementById('rua');
	var numero = document.getElementById('numero');
	var complemento = document.getElementById('complemento');
	var cep = document.getElementById('cep');
	var bairro = document.getElementById('bairro');
	var cidade = document.getElementById('cidade');
	var email = document.getElementById('email');
	var cpf = document.getElementById('cpf');
	var identidade = document.getElementById('identidade');
	var titulo = document.getElementById('titulo');
	var zona = document.getElementById('zona');
	var secao = document.getElementById('secao');
	var pis = document.getElementById('pis');
	var carteiratrabalho = document.getElementById('carteiratrabalho');
	var reservista = document.getElementById('reservista');
	var escolar = document.getElementById('escolar');
	var instituicao = document.getElementById('instituicao');
	var curso = document.getElementById('curso');
	var deficiente = document.getElementById('deficiente');
	var nota = document.getElementById('nota');
	var cargo = document.getElementById('cargo');
	var funcao = document.getElementById('funcao');
	var forma_admissao = document.getElementById('forma_admissao');
	var regime = document.getElementById('regime');
	var setor = document.getElementById('setor');
	var matricula = document.getElementById('matricula');
	var banco = document.getElementById('banco');
	var agencia = document.getElementById('agencia');
	var conta_corrente = document.getElementById('conta_corrente');
	var status = document.getElementById('status');
	var data_nascimento = document.getElementById('data_nascimento');
	var data_admissao = document.getElementById('data_admissao');
	var sexo = document.getElementById('sexo');
	var nacionalidade = document.getElementById('nacionalidade');
	var naturalidade = document.getElementById('naturalidade');
	var estado = document.getElementById('estado');
	var estado_civil = document.getElementById('estado_civil');
	var numero_dependente = document.getElementById('numero_dependente');
	var telefone = document.getElementById('telefone');
	var celular = document.getElementById('celular');
	var cnh_categoria = document.getElementById('cnh_categoria');
	var tipo_sangue = document.getElementById('tipo_sangue');
	var deficiente_tipo = document.getElementById('deficiente_tipo');
	var cnh = document.getElementById('cnh');
	var whatsapp = document.querySelector('#whatsapp');
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var contErro = 0;


	/* Validação do campo nome */
	caixa_nome = document.querySelector('.msg-nome');
	if(nome.value == ""){
		caixa_nome.innerHTML = "Favor preencher o Nome";
		caixa_nome.style.display = 'block';
		contErro += 1;
	}else{
		caixa_nome.style.display = 'none';
	}

	/* validação do campo pai */
	caixa_pai = document.querySelector('.msg-pai');
	if(pai.value == ""){
		caixa_pai.innerHTML = "Favor preencher o Pai";
		caixa_pai.style.display = 'block';
		contErro += 1;
	}else{
		caixa_pai.style.display = 'none';
	}	

	/* validação do campo mãe */
	caixa_mae = document.querySelector('.msg-mae');
	if(mae.value == ""){
		caixa_mae.innerHTML = "Favor preencher a Mãe";
		caixa_mae.style.display = 'block';
		contErro += 1;
	}else{
		caixa_mae.style.display = 'none';
	}

	/* validação do campo Rua */
	caixa_rua = document.querySelector('.msg-rua');
	if(rua.value == ""){
		caixa_rua.innerHTML = "Favor preencher a Rua";
		caixa_rua.style.display = 'block';
		contErro += 1;
	}else{
		caixa_rua.style.display = 'none';
	}

	/* Validação do campo N° */
	caixa_numero = document.querySelector('.msg-numero');
	if(numero.value == ""){
		caixa_numero.innerHTML = "Favor preencher o N°";
		caixa_numero.style.display = 'block';
		contErro += 1;
	}else{
		caixa_numero.style.display = 'none';
	}

	/* Validação do campo Complemento */
	caixa_complemento = document.querySelector('.msg-complemento');
	if(complemento.value == ""){
		// caixa_complemento.innerHTML = "Favor preencher o Complemento";
		// caixa_complemento.style.display = 'block';
		// contErro += 1;
	}else{
		caixa_complemento.style.display = 'none';
	}

	/* Validação do campo Cep */
	caixa_cep = document.querySelector('.msg-cep');
	if(cep.value == ""){
		caixa_cep.innerHTML = "Favor preencher o Cep";
		caixa_cep.style.display = 'block';
		contErro += 1;
	}else{
		caixa_cep.style.display = 'none';
	}

	/* Validação do campo Bairro */
	caixa_bairro = document.querySelector('.msg-bairro');
	if(bairro.value == ""){
		caixa_bairro.innerHTML = "Favor preencher o Bairro";
		caixa_bairro.style.display = 'block';
		contErro += 1;
	}else{
		caixa_bairro.style.display = 'none';
	}

	/* Validação do campo Cidade */
	caixa_cidade = document.querySelector('.msg-cidade');
	if (cidade.value == ""){
		caixa_cidade.innerHTML = "Favor preencher a Cidade";
		caixa_cidade.style.display = 'block';
		contErro += 1;
	}else{
		caixa_cidade.style.display = 'none';
	}

	/* Validação do campo email */
	caixa_email = document.querySelector('.msg-email');
	if(email.value == ""){
		caixa_email.innerHTML = "Favor preencher o E-mail";
		caixa_email.style.display = 'block';
		contErro += 1;
	}else if(filtro.test(email.value)){
		caixa_email.style.display = 'none';
	}else{
		caixa_email.innerHTML = "Formato do E-mail inválido";
		caixa_email.style.display = 'block';
		contErro += 1;
	}	

	/* Validação do campo data */
	caixa_data = document.querySelector('.msg-data');
	if(data_nascimento.value == ""){
		caixa_data.innerHTML = "Favor preencher a Data de Nascimento";
		caixa_data.style.display = 'block';
		contErro += 1;
	}else{
		caixa_data.style.display = 'none';
	}

	/* Validação do campo data2 */
	caixa_data2 = document.querySelector('.msg-data2');
	if(data_admissao.value == ""){
		caixa_data2.innerHTML = "Favor preencher a Data de Admissão";
		caixa_data2.style.display = 'block';
		contErro += 1;
	}else{
		caixa_data2.style.display = 'none';
	}

	/*validação do campo Sexo */
	caixa_sexo = document.querySelector('.msg-sexo');
	if(sexo.value == ""){
		caixa_sexo.innerHTML = "Favor preencher o Sexo";
		caixa_sexo.style.display = 'block';
		contErro += 1;
	}else{
		caixa_sexo.style.display = 'none';
	}

	/* Validação do campo Estado */
	caixa_estado = document.querySelector('.msg-estado');
	if(estado.value == ""){
		caixa_estado.innerHTML = "Favor preencher o Estado";
		caixa_estado.style.display = 'block';
		contErro += 1;
	}else{
		caixa_estado.style.display = 'none';
	}

	/* Validação do campo Estado Civil */
	caixa_estado_civil = document.querySelector('.msg-estado_civil');
	if(estado_civil.value == ""){
		caixa_estado_civil.innerHTML = "Favor preencher o Estado Civil";
		caixa_estado_civil.style.display = 'block';
		contErro += 1;
	}else{
		caixa_estado_civil.style.display = 'none';
	}

	/* validação do campo Número de Dependente */
	caixa_numero_dependente = document.querySelector('.msg-numero_dependente');
	if(numero_dependente.value == ""){
		caixa_numero_dependente.innerHTML = "Favor preencher o Número de Dependente(s)";
		caixa_numero_dependente.style.display = 'block';
		contErro += 1;
	}else{
		caixa_numero_dependente.style.display = 'none';
	}

	/* Validação do campo Nacionalidade */
	caixa_nacionalidade = document.querySelector('.msg-nacionalidade');
	if(nacionalidade.value == ""){
		caixa_nacionalidade.innerHTML = "Favor preencher a Nacionalidade";
		caixa_nacionalidade.style.display = 'block';
		contErro += 1;
	}else{
		caixa_nacionalidade.style.display = 'none';
	}

	/* Validação do campo Naturalidade */
	caixa_naturalidade = document.querySelector('.msg-naturalidade');
	if(naturalidade.value == ""){
		caixa_naturalidade.innerHTML = "Favor preencher a Naturalidade";
		caixa_naturalidade.style.display = 'block';
		contErro += 1;
	}else{
		caixa_naturalidade.style.display = 'none';
	}

	/* Validação do campo matricula */
	caixa_matricula = document.querySelector('.msg-matricula');
	if(matricula.value == ""){
		caixa_matricula.innerHTML = "Favor preencher a Matricula";
		caixa_matricula.style.display = 'block';
		contErro += 1;
	}else{
		caixa_matricula.style.display = 'none';
	}

	/* Validação do campo cpf */
	caixa_cpf = document.querySelector('.msg-cpf');
	if(cpf.value == ""){
		caixa_cpf.innerHTML = "Favor preencher o CPF";
		caixa_cpf.style.display = 'block';
		contErro += 1;
	}else{
		caixa_cpf.style.display = 'none';
	}

	/* Validação do campo RG */
	caixa_identidade = document.querySelector('.msg-identidade');
	if(identidade.value == ""){
		caixa_identidade.innerHTML = "Favor preencher a RG";
		caixa_identidade.style.display = 'block';
		contErro += 1;
	}else{
		caixa_identidade.style.display = 'none';
	}

	/* Validação do campo Titulo */
	caixa_titulo = document.querySelector('.msg-titulo');
	if(titulo.value == ""){
		caixa_titulo.innerHTML = "Favor preencher o Titulo";
		caixa_titulo.style.display = 'block';
		contErro += 1;
	}else{
		caixa_titulo.style.display = 'none';
	}

	/* Validação do campo zona */
	caixa_zona = document.querySelector('.msg-zona');
	if(zona.value == ""){
		caixa_zona.innerHTML = "Favor preencher a Zona";
		caixa_zona.style.display = 'block';
		contErro += 1;
	}else{
		caixa_zona.style.display = 'none';
	}

	/* Validação do campo secao */
	caixa_secao = document.querySelector('.msg-secao');
	if(secao.value == ""){
		caixa_secao.innerHTML = "Favor preencher a Seção";
		caixa_secao.style.display = 'block';
		contErro += 1;
	}else{
		caixa_secao.style.display = 'none';
	}

	/* Validação do campo pis */
	caixa_pis = document.querySelector('.msg-pis');
	if(pis.value == ""){
		caixa_pis.innerHTML = "Favor preencher o PIS/PASEP";
		caixa_pis.style.display = 'block';
		contErro += 1;
	}else{
		caixa_pis.style.display = 'none';
	}

	/* Validação do campo Carteira de Trabalho */
	caixa_carteiratrabalho = document.querySelector('.msg-carteiratrabalho');
	if (carteiratrabalho.value == ""){
		caixa_carteiratrabalho.innerHTML = "Favor preencher a Carteira de Trabalho";
		caixa_carteiratrabalho.style.display = 'block';
		contErro += 1;
	}else{
		caixa_carteiratrabalho.style.display = 'none';
	}

	/* Validação do campo Carteira Reservista */
	caixa_reservista = document.querySelector('.msg-reservista');
	if(reservista.value == ""){
		caixa_reservista.innerHTML = "Favor preencher a Carteira Reservista";
		caixa_reservista.style.display = 'block';
		contErro += 1;
	}else{
		caixa_reservista.style.display = 'none';
	}

	/* Validação do campo Instrução Escolar */
	caixa_escolar = document.querySelector('.msg-escolar');
	if(escolar.value == ""){
		caixa_escolar.innerHTML = "Favor preencher a Instrução Escolar";
		caixa_escolar.style.display = 'block';
		contErro += 1;
	}else{
		caixa_escolar.style.display = 'none';
	}

	/* Validação do campo Instituição */
	caixa_instituicao = document.querySelector('.msg-instituicao');
	if(instituicao.value == ""){
		caixa_instituicao.innerHTML = "Favor preencher a Instituição";
		caixa_instituicao.style.display = 'block';
		contErro += 1;
	}else{
		caixa_instituicao.style.display = 'none';
	}

	/* Validação do campo Curso */
	caixa_curso = document.querySelector('.msg-curso');
	if(curso.value == ""){
		caixa_curso.innerHTML = "Favor preencher o Curso Formação";
		caixa_curso.style.display = 'block';
		contErro += 1;
	}else{
		caixa_curso.style.display = 'none';
	}

	/* Validação do campo Deficiente */
	caixa_deficiente = document.querySelector('.msg-deficiente');
	if(deficiente.value == ""){
		// caixa_deficiente.innerHTML = "Favor preencher a Deficiência";
		// caixa_dificiente.style.display ='block';
		// contErro += 1;
	}else{
		caixa_deficiente.style.display = 'none';
	}

	/* Validação do campo Anotações */
	caixa_nota = document.querySelector('.msg-nota');
	if(nota.value == ""){
		// caixa_nota.innerHTML = "Favor preencher o Anotações";
		// caixa_nota.style.display = 'block';
		// contErro += 1;
	}else{
		caixa_nota.style.display = 'none';
	}

	/* Validação do campo Cargo */
	caixa_cargo = document.querySelector('.msg-cargo');
	if(cargo.value ==""){
		caixa_cargo.innerHTML = "Favor preencher o Cargo";
		caixa_cargo.style.display = 'block';
		contErro += 1;
	}else{
		caixa_cargo.style.display = 'none';
	}

	/* Validação do campo Função */
	caixa_funcao = document.querySelector('.msg-funcao');
	if(funcao.value == ""){
		caixa_funcao.innerHTML = "Favor preencher a Função";
		caixa_funcao.style.display = 'block';
		contErro += 1;
	}else{
		caixa_funcao.style.display = 'none';
	}

	/* Validação do campo Forma de Admissão */
	caixa_forma_admissao = document.querySelector('.msg-forma_admissao');
	if(forma_admissao.value == ""){
		caixa_forma_admissao.innerHTML = "Favor preencher a Forma de Admissão";
		caixa_forma_admissao.style.display = 'block';
		contErro += 1;
	}else{
		caixa_forma_admissao.style.display = 'none';
	}

	/* Validação do campo Regime */
	caixa_regime = document.querySelector('.msg-regime');
	if(regime.value == ""){
		caixa_regime.innerHTML = "Favor preencher o Regime";
		caixa_regime.style.display = 'block';
		contErro += 1;
	}else{
		caixa_regime.style.display = 'none';
	}

	/* Validação do campo Setor */
	caixa_setor = document.querySelector('.msg-setor');
	if(setor.value == ""){
		caixa_setor.innerHTML = "Favor preencher o Setor";
		caixa_setor.style.display = 'block';
		contErro += 1;
	}else{
		caixa_setor.style.display = 'none';
	}

	/* Validação do campo telefone */
	caixa_telefone = document.querySelector('.msg-telefone');
	if(telefone.value == ""){
		caixa_telefone.innerHTML = "Favor preencher o Telefone";
		caixa_telefone.style.display = 'block';
		contErro += 1;
	}else{
		caixa_telefone.style.display = 'none';
	}

	/* Validação do campo celular */
	caixa_celular = document.querySelector('.msg-celular');
	if(celular.value == ""){
		caixa_celular.innerHTML = "Favor preencher o Celular";
		caixa_celular.style.display = 'block';
		contErro += 1;
	}else{
		caixa_celular.style.display = 'none';
	}

	/* Validação do campo Whatsapp */
	caixa_whatsapp = document.querySelector('.msg-whatsapp');
	if(whatsapp.value == ""){
		caixa_whatsapp.innerHTML = "Favor preencher o Whatsapp";
		caixa_whatsapp.style.display = 'block';
		contErro += 1;
	}else{
		caixa_whatsapp.style.display = 'none';
	}

	/* Validação do campo Banco */
	caixa_banco = document.querySelector('.msg-banco');
	if(banco.value == ""){
		caixa_banco.innerHTML = "Favor preencher o Banco";
		caixa_banco.style.display = 'block';
		contErro += 1;
	}else{
		caixa_banco.style.display = 'none';
	}

	/* Validação do campo Agência */
	caixa_agencia = document.querySelector('.msg-agencia');
	if(agencia.value == ""){
		caixa_agencia.innerHTML = "Favor preencher a Agência";
		caixa_agencia.style.display = 'block';
		contErro += 1;
	}else{
		caixa_agencia.style.display = 'none';
	}

	/* Validação do campo Conta Corrente */
	caixa_conta_corrente = document.querySelector('.msg-conta_corrente');
	if(conta_corrente.value == ""){
		caixa_conta_corrente.innerHTML = "Favor preencher a Conta Corrente";
		caixa_conta_corrente.style.display = 'block';
		contErro += 1;
	}else{
		caixa_conta_corrente.style.display = 'none';
	}

	/* Validação do campo CNH */
	caixa_cnh = document.querySelector('.msg-cnh');
	if(cnh.value == ""){
		caixa_cnh.innerHTML = "Favor preencher o CNH";
		caixa_cnh.style.display = 'block';
		contErro += 1;
	}else{
		caixa_cnh.style.display = 'none';
	}
	/* Validação do campo CNH CATEGORIA */
	caixa_cnh_categoria = document.querySelector('.msg-cnh_categoria');
	if(cnh_categoria.value == ""){
		caixa_cnh_categoria.innerHTML = "Favor preencher a Categoria do CNH";
		caixa_cnh_categoria.style.display = 'block';
		contErro += 1;
	}else{
		caixa_cnh_categoria.style.display = 'none';
	}

	/* Validação do campo TIPO SANGUE */
	caixa_tipo_sangue = document.querySelector('.msg-tipo_sangue');
	if(tipo_sangue.value == ""){
		caixa_tipo_sangue.innerHTML = "Favor preencher o Tipo Sanguíneo";
		caixa_tipo_sangue.style.display = 'block';
		contErro += 1;
	}else{
		caixa_tipo_sangue.style.display = 'none';
	}

	/* Validação do campo DEFICIENTE */
	caixa_deficiente = document.querySelector('.msg-deficiente');
	if(deficiente.value == ""){
		caixa_deficiente.innerHTML = "Favor preencher a Deficiência";
		caixa_deficiente.style.display = 'block';
		contErro += 1;
	}else{
		caixa_deficiente.style.display = 'none';
	}

	/* Validação do campo DEFICIENTE */
	caixa_deficiente_tipo = document.querySelector('.msg-deficiente_tipo');
	if(deficiente_tipo.value == ""){
		caixa_deficiente_tipo.innerHTML = "Favor preencher o Tipo de Deficiência";
		caixa_deficiente_tipo.style.display = 'block';
		contErro += 1;
	}else{
		caixa_deficiente_tipo.style.display = 'none';
	}

	/* Validação do campo status */
	caixa_status = document.querySelector('.msg-status');
	if(status.value == ""){
		caixa_status.innerHTML = "Favor preencher o Status";
		caixa_status.style.display = 'block';
		contErro += 1;
	}else{
		caixa_status.style.display = 'none';
	}

	if(contErro > 0){
		evt.preventDefault();
	}
}

/* Função para formatar dados conforme parâmetro enviado, MATRICULA, CPF, DATA, TELEFONE e CELULAR */
function mascaraTexto(t, mask){
	var i = t.value.length;
	var saida = mask.substring(1,0);
	var texto = mask.substring(i);

	if (texto.substring(0,1) != saida){
		t.value += texto.substring(0,1);
	}
}

/* Função para exibir a imagem selecionada no input file na tag <img>  */
function loadFoto(file, img){
    if (file.files && file.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           img.src = e.target.result;
        }
        reader.readAsDataURL(file.files[0]);
    }
}

/* Função para exibir um alert confirmando a exclusão do registro*/
function confirmaExclusao(id){
	retorno = confirm("Deseja excluir esse Registro?")

	if (retorno){

	    //Cria um formulário
		var formulario = document.createElement("form");
			formulario.action = "../../cadastro_completo/action_cliente.php";
	    formulario.method = "post";

		// Cria os inputs e adiciona ao formulário
	    var inputAcao = document.createElement("input");
	    inputAcao.type = "hidden";
	    inputAcao.value = "excluir";
	    inputAcao.name = "acao";
	    formulario.appendChild(inputAcao); 

	    var inputId = document.createElement("input");
	    inputId.type = "hidden";
	    inputId.value = id;
	    inputId.name = "id";
	    formulario.appendChild(inputId);

	    //Adiciona o formulário ao corpo do documento
	    document.body.appendChild(formulario);

	    //Envia o formulário
	    formulario.submit();
	}
}
