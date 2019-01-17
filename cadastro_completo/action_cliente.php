<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Sistema de Cadastro</title>
	<link rel="shortcut icon" href="../imagens/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class='container box-mensagem-crud'>
		<?php
    require './conexao.php';

        // Atribui uma conexão PDO
    $conexao = conexao::getInstance();

        // Recebe os dados enviados pela submissão
    $acao = (isset($_POST['acao'])) ? $_POST['acao'] : '';
    $id = (isset($_POST['id'])) ? $_POST['id'] : '';
    $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
    $pai = (isset($_POST['pai'])) ? $_POST['pai'] : '';
    $mae = (isset($_POST['mae'])) ? $_POST['mae'] : '';
    $rua = (isset($_POST['rua'])) ? $_POST['rua'] : '';
    $numero = (isset($_POST['numero'])) ? $_POST['numero'] : '';
    $complemento = (isset($_POST['complemento'])) ? $_POST['complemento'] : '';
    $cep = (isset($_POST['cep'])) ? str_replace(array('-', ' '), '', $_POST['cep']) : '';
    $bairro = (isset($_POST['bairro'])) ? $_POST['bairro'] : '';
    $cidade = (isset($_POST['cidade'])) ? $_POST['cidade'] : '';
    $nacionalidade = (isset($_POST['nacionalidade'])) ? $_POST['nacionalidade'] : '';
    $naturalidade = (isset($_POST['naturalidade'])) ? $_POST['naturalidade'] : '';
    $estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
    $estado_civil = (isset($_POST['estado_civil'])) ? $_POST['estado_civil'] : '';
    $numero_dependente = (isset($_POST['numero_dependente'])) ? $_POST['numero_dependente'] : '';
    $cpf = (isset($_POST['cpf'])) ? str_replace(array('-', ' '), '', $_POST['cpf']) : '';
    $carteiratrabalho = (isset($_POST['carteiratrabalho'])) ? $_POST['carteiratrabalho'] : '';
    $reservista = (isset($_POST['reservista'])) ? $_POST['reservista'] : '';
    $escolar = (isset($_POST['escolar'])) ? $_POST['escolar'] : '';
    $instituicao = (isset($_POST['instituicao'])) ? $_POST['instituicao'] : '';
    $curso = (isset($_POST['curso'])) ? $_POST['curso'] : '';
    $deficiente = (isset($_POST['deficiente'])) ? $_POST['deficiente'] : '';
    $nota = (isset($_POST['nota'])) ? $_POST['nota'] : '';
    $cargo = (isset($_POST['cargo'])) ? $_POST['cargo'] : '';
    $funcao = (isset($_POST['funcao'])) ? $_POST['funcao'] : '';
    $forma_admissao = (isset($_POST['forma_admissao'])) ? $_POST['forma_admissao'] : '';
    $identidade = (isset($_POST['identidade'])) ? $_POST['identidade'] : '';
    $titulo = (isset($_POST['titulo'])) ? str_replace(array('-', ' '), '', $_POST['titulo']) : '';
    $zona = (isset($_POST['zona'])) ? $_POST['zona'] : '';
    $secao = (isset($_POST['secao'])) ? $_POST['secao'] : '';
    $pis = (isset($_POST['pis'])) ? str_replace(array('.', '-'), '', $_POST['pis']) : '';
    $matricula = (isset($_POST['matricula'])) ? str_replace(array('.', '-'), '', $_POST['matricula']) : '';
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $foto_atual = (isset($_POST['foto_atual'])) ? $_POST['foto_atual'] : '';
    $data_nascimento = (isset($_POST['data_nascimento'])) ? $_POST['data_nascimento'] : '';
    $data_admissao = (isset($_POST['data_admissao'])) ? $_POST['data_admissao'] : '';
    $regime = (isset($_POST['regime'])) ? $_POST['regime'] : '';
    $setor = (isset($_POST['setor'])) ? $_POST['setor'] : '';
    $sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
    $telefone = (isset($_POST['telefone'])) ? str_replace(array('-', ' '), '', $_POST['telefone']) : '';
    $celular = (isset($_POST['celular'])) ? str_replace(array('-', ' '), '', $_POST['celular']) : '';
    $whatsapp = (isset($_POST['whatsapp'])) ? str_replace(array('-', ' '), '', $_POST['whatsapp']) : '';
    $banco = (isset($_POST['banco'])) ? $_POST['banco'] : '';
    $agencia = (isset($_POST['agencia'])) ? $_POST['agencia'] : '';
    $conta_corrente = (isset($_POST['conta_corrente'])) ? $_POST['conta_corrente'] : '';
    $status = (isset($_POST['status'])) ? $_POST['status'] : '';


        // Valida os dados recebidos
    $mensagem = '';
    if ($acao == 'editar' && $id == '') :
        $mensagem .= '<li>ID do registros desconhecido.</li>';
    endif;

        // Se for ação diferente de excluir valida os dados obrigatórios
    if ($acao != 'excluir') :
        if ($nome == '' || strlen($nome) < 3) :
        $mensagem .= '<li>Favor preencher o Nome.</li>';
    endif;

    if ($pai == '' || strlen($pai) < 3) :
        $mensagem .= '<li>Favor preencher o Pai.</li>';
    endif;

    if ($mae == '' || strlen($mae) < 3) :
        $mensagem .= '<li>Favor preencher a Mãe.<li>';
    endif;

    if ($rua == '' || strlen($rua) < 3) :
        $mensagem .= '<li>Favor preencher a Rua.<li>';
    endif;

    if ($numero == '' || strlen($numero) < 1) :
        $mensagem .= '<li>Favor preencher o N°.<li>';
    endif;

            // if ($complemento == ''):
            // elseif(strlen($complemento) >= 0):
            //  	$mensagem .= '<li>Favor preencher o Complemento.<li>';
            // endif;

    if ($cep == '') :
        $mensagem .= '<li>Favor preencher Cep.<li>';
    elseif (strlen($cep) < 8) :
        $mensagem .= '<li>Formato do Cep inválido.<li>';
    endif;

    if ($bairro == '' || strlen($bairro) < 3) :
        $mensagem .= '<li>Favor preencher o Bairro.<li>';
    endif;

    if ($cidade == '' || strlen($cidade) < 1) :
        $mensagem .= '<li>Favor preencher a Cidade<li>';
    endif;

    if ($matricula == '') :
        $mensagem .= '<li>Favor preencer a Matricula.<li>';
    elseif (strlen($matricula) < 7) :
        $mensagem .= '<li>Formato da matricula inválido.<li>';
    endif;

    if ($cpf == '') :
        $mensagem .= '<li>Favor preencher o CPF.</li>';
    elseif (strlen($cpf) < 11) :
        $mensagem .= '<li>Formato do CPF inválido.</li>';
    endif;

    if ($identidade == '' || strlen($identidade) < 1) :
        $mensagem .= '<li>Favor preencher a RG.<li>';
    endif;

    if ($zona == '' || strlen($zona) < 1) :
        $mensagem .= '<li>Favor preencher a Zona.<li>';
    endif;

    if ($secao == '' || strlen($secao) < 1) :
        $mensagem .= '<li>Favor preencher a Seção.<li>';
    endif;

    if ($pis == '') :
        $mensagem .= '<li>Favor preencher o PIS/PASEP.</li>';
    elseif (strlen($pis) < 11) :
        $mensagem .= '<li>Formato do PIS/PASEP inválido.</li>';
    endif;

    if ($carteiratrabalho == '' || strlen($carteiratrabalho) < 1) :
        $mensagem .= '<li>Favor preencher a Carteira de Trabalho.<li>';
    endif;

    if ($reservista == '' || strlen($reservista) < 1) :
        $mensagem .= '<li>Favor preencher a Carteira Reservista.<li>';
    endif;

    if ($escolar == '' || strlen($escolar) < 1) :
        $mensagem .= '<li>Favor preencher a Instrução Escolar.<li>';
    endif;

    if ($instituicao == '' || strlen($instituicao) < 1) :
        $mensagem .= '<li>Favor preencher a Instituição.<li>';
    endif;

    if ($curso == '' || strlen($curso) < 1) :
        $mensagem .= '<li>Favor preencher o Curso Formação.<li>';
    endif;
            
            // if ($deficiente == '' || strlen($deficiente) < 1):
            // 	$mensagem .= '<li>Favor preencher o N°.<li>';
            // endif;

            // if ($nota == '' || strlen($nota) < 1):
            // 	$mensagem .= '<li>Favor preencher a Anotação.<li>';
            // endif;

    if ($cargo == '' || strlen($cargo) < 1) :
        $mensagem .= '<li><Favor preencher o cargo>';
    endif;

    if ($funcao == '' || strlen($funcao) < 1) :
        $mensagem .= '<li>Favor preencher a função<li>';
    endif;

    if ($forma_admissao == '') :
        $mensagem .= '<li>Favor preencher o Status.</li>';
    endif;

    if ($regime == '') :
        $mensagem .= '<li>Favor preencher o Regime.<li>';
    endif;

    if ($setor == '' || strlen($setor) < 1) :
        $mensagem .= '<li>Favor preencher o Setor.<li>';
    endif;

    if ($email == '') :
        $mensagem .= '<li>Favor preencher o E-mail.</li>';
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $mensagem .= '<li>Formato do E-mail inválido.</li>';
    endif;

    if ($data_nascimento == '') :
        $mensagem .= '<li>Favor preencher a Data de Nascimento.</li>';
    else :
        $data = explode('/', $data_nascimento);
    if (!checkdate($data[1], $data[0], $data[2])) :
        $mensagem .= '<li>Formato da Data de Nascimento inválido.</li>';
    endif;
    endif;

    if ($data_admissao == '') :
        $mensagem .= '<li>Favor preencher a Data de Admissão.<li>';
    else :
        $data2 = explode('/', $data_admissao);
    if (!checkdate($data2[1], $data2[0], $data2[2])) :
        $mensagem .= '<li>Formato da Data de Admissão Inválido.<li>';
    endif;
    endif;

    if ($sexo == '') :
        $mensagem .= '<li>Favor preencher o Sexo.<li>';
    endif;

    if ($estado == '') :
        $mensagem .= '<li>Favor preencher o Estado.<li>';
    endif;

    if ($estado_civil == '') :
        $mensagem .= '<li>Favor preencher o Estado Civil.<li>';
    endif;

    if ($numero_dependente == '') :
        $mensagem .= '<li>Favor preencher o Número de Dependente(s).</li>';
    elseif (strlen($numero_dependente) < 1) :
        $mensagem .= '<li>Formato do Número de Dependente inválido.</li>';
    endif;

    if ($mensagem != '') :
        $mensagem = '<ul>' . $mensagem . '<ul>';
    echo "<div class='alert alert-danger' role='alert'>" . $mensagem . "</div> ";
    exit;
    endif;

    if ($nacionalidade == '') :
        $mensagem .= '<li>Favor preencher a Nacionalidade.<li>';
    endif;

    if ($naturalidade == '' || strlen($naturalidade) < 3) :
        $mensagem .= '<li>Favor preencher a Naturalidade.<li>';
    endif;

    if ($telefone == '') :
        $mensagem .= '<li>Favor preencher o Telefone.</li>';
    elseif (strlen($telefone) < 10) :
        $mensagem .= '<li>Formato do Telefone inválido.</li>';
    endif;

    if ($celular == '') :
        $mensagem .= '<li>Favor preencher o Celular.</li>';
    elseif (strlen($celular) < 11) :
        $mensagem .= '<li>Formato do Celular inválido.</li>';
    endif;

    if ($whatsapp == '') :
        $mensagem .= '<li>Favor preencher o Whatsapp.<li>';
    elseif (strlen($whatsapp) < 11) :
        $mensagem .= '<li>Formato do Whatsapp inválido.<li>';
    endif;
            // if ($whatsapp == ''):
            // 	$mensagem .= '<li>Favor preencher o Whatsapp.<li>';
            // elseif(strlen($whatsapp) < 11):
            // 	$mensagem .= '<li>Formato do Whatsapp inválido.<li>';
            // endif;

    if ($banco == '' || strlen($banco) < 1) :
        $mensagem .= '<li>Favor preencher o Banco.<li>';
    endif;

    if ($agencia == '' || strlen($agencia) < 1) :
        $mensagem .= '<li>Favor preencher a Agência.<li>';
    endif;

    if ($conta_corrente == '' || strlen($conta_corrente) < 1) :
        $mensagem .= '<li>Favor preencher a Conta Corrente.<li>';
    endif;

    if ($status == '') :
        $mensagem .= '<li>Favor preencher o Status.</li>';
    endif;

    if ($mensagem != '') :
        $mensagem = '<ul>' . $mensagem . '</ul>';
    echo "<div class='alert alert-danger' role='alert'>" . $mensagem . "</div> ";
    exit;
    endif;

            // Constrói a data no formato ANSI yyyy/mm/dd
    $data_temp = explode('/', $data_nascimento);
    $data_ansi = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[0];

    $data2_temp = explode('/', $data_admissao);
    $data2_ansi2 = $data2_temp[2] . '/' . $data2_temp[1] . '/' . $data2_temp[0];
    endif;



        // Verifica se foi solicitada a inclusão de dados
    if ($acao == 'incluir') :

        $nome_foto = 'padrao.jpg';
    if (isset($_FILES['foto']) && $_FILES['foto']['size'] > 0) :

        $extensoes_aceitas = array('bmp', 'png', 'svg', 'jpeg', 'jpg');
    $tmp = explode('.', $_FILES['foto']['name']);
    $extensao = strtolower(end($tmp));
                //$extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

                 // Validamos se a extensão do arquivo é aceita
    if (array_search($extensao, $extensoes_aceitas) === false) :
        echo "<h1>Extensão Inválida!</h1>";
    exit;
    endif;
 
                 // Verifica se o upload foi enviado via POST
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) :
                         
    // Verifica se o diretório de destino existe, senão existir cria o diretório
    if (!file_exists("fotos")) :
        mkdir("fotos");
    endif;
              
    // Monta o caminho de destino com o nome do arquivo e sua extensão
        $filefotoextensao = $_FILES['foto']['name'];
        $ext = pathinfo($filefotoextensao, PATHINFO_EXTENSION);

    $nome_foto = $matricula . "." . $ext;

        
    // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino
    if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/' . $nome_foto)) :
        echo "Houve um erro ao gravar arquivo na pasta de destino!";
    endif;
    endif;
    endif;

    $sql = 'INSERT INTO tab_clientes (nome, pai, mae, rua, numero, complemento, cep, bairro, cidade, email, matricula, cpf, identidade, 
			titulo, zona, secao, pis, carteiratrabalho, reservista, escolar, instituicao, curso, deficiente, nota, cargo, funcao, forma_admissao, regime, setor, data_nascimento, data_admissao, 
			sexo, 
			nacionalidade, naturalidade, estado, estado_civil, numero_dependente, telefone, celular, whatsapp, banco, agencia, conta_corrente, status, foto)
							   VALUES(:nome, :pai, :mae, :rua, :numero, :complemento, :cep, :bairro, :cidade, :email, :matricula, :cpf, :identidade, 
			:titulo, :zona, :secao, :pis, :carteiratrabalho, :reservista, :escolar, :instituicao, :curso, :deficiente, :nota, :cargo, :funcao, :forma_admissao, :regime, :setor, :data_nascimento, :data_admissao, 
			:sexo, 
			:nacionalidade, :naturalidade, :estado, :estado_civil, :numero_dependente, :telefone, :celular, :whatsapp, :banco, :agencia, :conta_corrente, :status, :foto)';

    $stm = $conexao->prepare($sql);
    $stm->bindValue(':nome', $nome);
    $stm->bindValue(':pai', $pai);
    $stm->bindValue(':mae', $mae);
    $stm->bindValue(':rua', $rua);
    $stm->bindValue(':numero', $numero);
    $stm->bindValue(':complemento', $complemento);
    $stm->bindValue(':cep', $cep);
    $stm->bindValue(':bairro', $bairro);
    $stm->bindValue(':cidade', $cidade);
    $stm->bindValue(':email', $email);
    $stm->bindValue(':cpf', $cpf);
    $stm->bindValue(':identidade', $identidade);
    $stm->bindValue(':titulo', $titulo);
    $stm->bindValue(':zona', $zona);
    $stm->bindValue(':secao', $secao);
    $stm->bindValue(':pis', $pis);
    $stm->bindValue(':carteiratrabalho', $carteiratrabalho);
    $stm->bindValue(':reservista', $reservista);
    $stm->bindValue(':escolar', $escolar);
    $stm->bindValue(':instituicao', $instituicao);
    $stm->bindValue(':curso', $curso);
    $stm->bindValue(':deficiente', $deficiente);
    $stm->bindValue(':nota', $nota);
    $stm->bindValue(':cargo', $cargo);
    $stm->bindValue(':funcao', $funcao);
    $stm->bindValue(':forma_admissao', $forma_admissao);
    $stm->bindValue(':regime', $regime);
    $stm->bindValue(':setor', $setor);
    $stm->bindValue(':matricula', $matricula);
    $stm->bindValue(':data_nascimento', $data_ansi);
    $stm->bindValue(':data_admissao', $data2_ansi2);
    $stm->bindValue(':sexo', $sexo);
    $stm->bindValue(':nacionalidade', $nacionalidade);
    $stm->bindValue(':naturalidade', $naturalidade);
    $stm->bindValue(':estado', $estado);
    $stm->bindValue(':estado_civil', $estado_civil);
    $stm->bindValue(':numero_dependente', $numero_dependente);
    $stm->bindValue(':telefone', $telefone);
    $stm->bindValue(':celular', $celular);
    $stm->bindValue(':whatsapp', $whatsapp);
    $stm->bindValue(':banco', $banco);
    $stm->bindValue(':agencia', $agencia);
    $stm->bindValue(':conta_corrente', $conta_corrente);
    $stm->bindValue(':status', $status);
    $stm->bindValue(':foto', $nome_foto);
    $retorno = $stm->execute();


    if ($retorno) :
        echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
    else :
        echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
    endif;

    echo "<meta http-equiv=refresh content='3;URL=../painel.php'>";
    endif;


        // Verifica se foi solicitada a edição de dados
    if ($acao == 'editar') :

        if (isset($_FILES['foto']) && $_FILES['foto']['size'] > 0) :

                // Verifica se a foto é diferente da padrão, se verdadeiro exclui a foto antiga da pasta
    if ($foto_atual <> 'padrao.jpg') :
        unlink("fotos/" . $foto_atual);
    endif;

    $extensoes_aceitas = array('bmp', 'png', 'svg', 'jpeg', 'jpg');
    $tmp = explode('.', $_FILES['foto']['name']);
    $extensao = strtolower(end($tmp));
                // $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

                 // Validamos se a extensão do arquivo é aceita
    if (array_search($extensao, $extensoes_aceitas) === false) :
        echo "<h1>Extensão Inválida!</h1>";
    exit;
    endif;
 
                 // Verifica se o upload foi enviado via POST
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) :
                         
                      // Verifica se o diretório de destino existe, senão existir cria o diretório
    if (!file_exists("fotos")) :
        mkdir("fotos");
    endif;
              
    // Monta o caminho de destino com o nome do arquivo e sua extensão
        $filefotoextensao = $_FILES['foto']['name'];
        $ext = pathinfo($filefotoextensao, PATHINFO_EXTENSION);

    $nome_foto = $matricula . "." . $ext;
              
    // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino
    if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/' . $nome_foto)) :
        echo "Houve um erro ao gravar arquivo na pasta de destino!";
    endif;
    endif;
    else :

       $nome_foto = $foto_atual;

    endif;

    $sql = 'UPDATE tab_clientes SET nome=:nome, pai=:pai, mae=:mae, rua=:rua, numero=:numero, complemento=:complemento, cep=:cep, bairro=:bairro, 
			cidade=:cidade, email=:email, matricula=:matricula, cpf=:cpf, titulo=:titulo, zona=:zona, secao=:secao, pis=:pis, identidade=:identidade, 
			carteiratrabalho=:carteiratrabalho, reservista=:reservista, escolar=:escolar, instituicao=:instituicao, curso=:curso, deficiente=:deficiente, 
			nota=:nota, cargo=:cargo, funcao=:funcao, forma_admissao=:forma_admissao, regime=:regime, setor=:setor, data_nascimento=:data_nascimento, data_admissao=:data_admissao, sexo=:sexo, 
			nacionalidade=:nacionalidade, naturalidade=:naturalidade, estado=:estado, estado_civil=:estado_civil, numero_dependente=:numero_dependente, 
			telefone=:telefone, celular=:celular, whatsapp=:whatsapp, banco=:banco, agencia=:agencia, conta_corrente=:conta_corrente, status=:status, foto=:foto ';
    $sql .= 'WHERE id = :id';

    $stm = $conexao->prepare($sql);
    $stm->bindValue(':nome', $nome);
    $stm->bindValue(':pai', $pai);
    $stm->bindValue(':mae', $mae);
    $stm->bindValue(':rua', $rua);
    $stm->bindValue(':numero', $numero);
    $stm->bindValue(':complemento', $complemento);
    $stm->bindValue(':cep', $cep);
    $stm->bindValue(':bairro', $bairro);
    $stm->bindValue(':cidade', $cidade);
    $stm->bindValue(':email', $email);
    $stm->bindValue(':cpf', $cpf);
    $stm->bindValue(':identidade', $identidade);
    $stm->bindValue(':titulo', $titulo);
    $stm->bindValue(':zona', $zona);
    $stm->bindValue(':secao', $secao);
    $stm->bindValue(':pis', $pis);
    $stm->bindValue(':carteiratrabalho', $carteiratrabalho);
    $stm->bindValue(':reservista', $reservista);
    $stm->bindValue(':escolar', $escolar);
    $stm->bindValue(':instituicao', $instituicao);
    $stm->bindValue(':curso', $curso);
    $stm->bindValue(':deficiente', $deficiente);
    $stm->bindValue(':nota', $nota);
    $stm->bindValue(':cargo', $cargo);
    $stm->bindValue(':funcao', $funcao);
    $stm->bindValue(':forma_admissao', $forma_admissao);
    $stm->bindValue(':regime', $regime);
    $stm->bindValue(':setor', $setor);
    $stm->bindValue(':matricula', $matricula);
    $stm->bindValue(':data_nascimento', $data_ansi);
    $stm->bindValue(':data_admissao', $data2_ansi2);
    $stm->bindValue(':sexo', $sexo);
    $stm->bindValue(':nacionalidade', $nacionalidade);
    $stm->bindValue(':naturalidade', $naturalidade);
    $stm->bindValue(':estado', $estado);
    $stm->bindValue(':estado_civil', $estado_civil);
    $stm->bindValue(':numero_dependente', $numero_dependente);
    $stm->bindValue(':telefone', $telefone);
    $stm->bindValue(':celular', $celular);
    $stm->bindValue(':whatsapp', $whatsapp);
    $stm->bindValue(':banco', $banco);
    $stm->bindValue(':agencia', $agencia);
    $stm->bindValue(':conta_corrente', $conta_corrente);
    $stm->bindValue(':status', $status);
    $stm->bindValue(':foto', $nome_foto);
    $stm->bindValue(':id', $id);
    $retorno = $stm->execute();

    if ($retorno) :
        echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
    else :
        echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
    endif;

    echo "<meta http-equiv=refresh content='3;URL=../painel.php'>";
    endif;


        // Verifica se foi solicitada a exclusão dos dados
    if ($acao == 'excluir') :

            // Captura o nome da foto para excluir da pasta
    $sql = "SELECT foto FROM tab_clientes WHERE id = :id AND foto <> 'padrao.jpg'";
    $stm = $conexao->prepare($sql);
    $stm->bindValue(':id', $id);
    $stm->execute();
    $cliente = $stm->fetch(PDO::FETCH_OBJ);

    if (!empty($cliente) && file_exists('fotos/' . $cliente->foto)) :
        unlink("fotos/" . $cliente->foto);
    endif;

            // Exclui o registro do banco de dados
    $sql = 'DELETE FROM tab_clientes WHERE id = :id';
    $stm = $conexao->prepare($sql);
    $stm->bindValue(':id', $id);
    $retorno = $stm->execute();

    if ($retorno) :
        echo "<div class='alert alert-success' role='alert'>Registro excluído com sucesso, aguarde você está sendo redirecionado ...</div> ";
    else :
        echo "<div class='alert alert-danger' role='alert'>Erro ao excluir registro!</div> ";
    endif;

            //head ('Location: ../painel.php');
    echo "<meta http-equiv=refresh content='3;URL=../painel.php'>";
    endif;
    ?>

	</div>
</body>
</html>