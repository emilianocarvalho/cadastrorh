<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

  if ('editar' === $acao && '' === $id) {
      $mensagem .= '<li>ID do registros desconhecido.</li>';
  }

      // Se for ação diferente de excluir valida os dados obrigatórios
  if ('excluir' !== $acao) {
      if ('' === $nome || strlen($nome) < 3) {
          $mensagem .= '<li>Favor preencher o Nome.</li>';
      }

      if ('' === $pai || strlen($pai) < 3) {
          $mensagem .= '<li>Favor preencher o Pai.</li>';
      }

      if ('' === $mae || strlen($mae) < 3) {
          $mensagem .= '<li>Favor preencher a Mãe.<li>';
      }

      if ('' === $rua || strlen($rua) < 3) {
          $mensagem .= '<li>Favor preencher a Rua.<li>';
      }

      if ('' === $numero || strlen($numero) < 1) {
          $mensagem .= '<li>Favor preencher o N°.<li>';
      }

      // if ($complemento == ''):
      // elseif(strlen($complemento) >= 0):
      //  	$mensagem .= '<li>Favor preencher o Complemento.<li>';
      // endif;

      if ('' === $cep) {
          $mensagem .= '<li>Favor preencher Cep.<li>';
      } elseif (strlen($cep) < 8) {
          $mensagem .= '<li>Formato do Cep inválido.<li>';
      }

      if ('' === $bairro || strlen($bairro) < 3) {
          $mensagem .= '<li>Favor preencher o Bairro.<li>';
      }

      if ('' === $cidade || strlen($cidade) < 1) {
          $mensagem .= '<li>Favor preencher a Cidade<li>';
      }

      if ('' === $matricula) {
          $mensagem .= '<li>Favor preencer a Matricula.<li>';
      } elseif (strlen($matricula) > 9) {
          $mensagem .= '<li>Formato da matricula inválido.<li>';
      }

      if ('' === $cpf) {
          $mensagem .= '<li>Favor preencher o CPF.</li>';
      } elseif (strlen($cpf) < 11) {
          $mensagem .= '<li>Formato do CPF inválido.</li>';
      }

      if ('' === $identidade || strlen($identidade) < 1) {
          $mensagem .= '<li>Favor preencher a RG.<li>';
      }

      if ('' === $zona || strlen($zona) < 1) {
          $mensagem .= '<li>Favor preencher a Zona.<li>';
      }

      if ('' === $secao || strlen($secao) < 1) {
          $mensagem .= '<li>Favor preencher a Seção.<li>';
      }

      if ('' === $pis) {
          $mensagem .= '<li>Favor preencher o PIS/PASEP.</li>';
      } elseif (strlen($pis) < 11) {
          $mensagem .= '<li>Formato do PIS/PASEP inválido.</li>';
      }

      if ('' === $carteiratrabalho || strlen($carteiratrabalho) < 1) {
          $mensagem .= '<li>Favor preencher a Carteira de Trabalho.<li>';
      }

      if ('' === $reservista || strlen($reservista) < 1) {
          $mensagem .= '<li>Favor preencher a Carteira Reservista.<li>';
      }

      if ('' === $escolar || strlen($escolar) < 1) {
          $mensagem .= '<li>Favor preencher a Instrução Escolar.<li>';
      }

      if ('' === $instituicao || strlen($instituicao) < 1) {
          $mensagem .= '<li>Favor preencher a Instituição.<li>';
      }

      if ('' === $curso || strlen($curso) < 1) {
          $mensagem .= '<li>Favor preencher o Curso Formação.<li>';
      }

      // if ($deficiente == '' || strlen($deficiente) < 1):
      // 	$mensagem .= '<li>Favor preencher o N°.<li>';
      // endif;

      // if ($nota == '' || strlen($nota) < 1):
      // 	$mensagem .= '<li>Favor preencher a Anotação.<li>';
      // endif;

      if ('' === $cargo || strlen($cargo) < 1) {
          $mensagem .= '<li><Favor preencher o cargo>';
      }

      if ('' === $funcao || strlen($funcao) < 1) {
          $mensagem .= '<li>Favor preencher a função<li>';
      }

      if ('' === $forma_admissao) {
          $mensagem .= '<li>Favor preencher o Status.</li>';
      }

      if ('' === $regime) {
          $mensagem .= '<li>Favor preencher o Regime.<li>';
      }

      if ('' === $setor || strlen($setor) < 1) {
          $mensagem .= '<li>Favor preencher o Setor.<li>';
      }

      if ('' === $email) {
          $mensagem .= '<li>Favor preencher o E-mail.</li>';
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $mensagem .= '<li>Formato do E-mail inválido.</li>';
      }

      if ('' === $data_nascimento) {
          $mensagem .= '<li>Favor preencher a Data de Nascimento.</li>';
      } else {
          $data = explode('/', $data_nascimento);
          if (!checkdate($data[1], $data[0], $data[2])) {
              $mensagem .= '<li>Formato da Data de Nascimento inválido.</li>';
          }
      }

      if ('' === $data_admissao) {
          $mensagem .= '<li>Favor preencher a Data de Admissão.<li>';
      } else {
          $data2 = explode('/', $data_admissao);
          if (!checkdate($data2[1], $data2[0], $data2[2])) {
              $mensagem .= '<li>Formato da Data de Admissão Inválido.<li>';
          }
      }

      if ('' === $sexo) {
          $mensagem .= '<li>Favor preencher o Sexo.<li>';
      }

      if ('' === $estado) {
          $mensagem .= '<li>Favor preencher o Estado.<li>';
      }

      if ('' === $estado_civil) {
          $mensagem .= '<li>Favor preencher o Estado Civil.<li>';
      }

      if ('' === $numero_dependente) {
          $mensagem .= '<li>Favor preencher o Número de Dependente(s).</li>';
      } elseif (strlen($numero_dependente) < 1) {
          $mensagem .= '<li>Formato do Número de Dependente inválido.</li>';
      }

      if ('' !== $mensagem) {
          $mensagem = '<ul>'.$mensagem.'<ul>';
          echo "<div class='alert alert-danger' role='alert'>".$mensagem.'</div> ';
          exit;
      }

      if ('' === $nacionalidade) {
          $mensagem .= '<li>Favor preencher a Nacionalidade.<li>';
      }

      if ('' === $naturalidade || strlen($naturalidade) < 3) {
          $mensagem .= '<li>Favor preencher a Naturalidade.<li>';
      }

      if ('' === $telefone) {
          $mensagem .= '<li>Favor preencher o Telefone.</li>';
      } elseif (strlen($telefone) < 10) {
          $mensagem .= '<li>Formato do Telefone inválido.</li>';
      }

      if ('' === $celular) {
          $mensagem .= '<li>Favor preencher o Celular.</li>';
      } elseif (strlen($celular) < 11) {
          $mensagem .= '<li>Formato do Celular inválido.</li>';
      }

      if ('' === $whatsapp) {
          $mensagem .= '<li>Favor preencher o Whatsapp.<li>';
      } elseif (strlen($whatsapp) < 11) {
          $mensagem .= '<li>Formato do Whatsapp inválido.<li>';
      }
      // if ($whatsapp == ''):
      // 	$mensagem .= '<li>Favor preencher o Whatsapp.<li>';
      // elseif(strlen($whatsapp) < 11):
      // 	$mensagem .= '<li>Formato do Whatsapp inválido.<li>';
      // endif;

      if ('' === $banco || strlen($banco) < 1) {
          $mensagem .= '<li>Favor preencher o Banco.<li>';
      }

      if ('' === $agencia || strlen($agencia) < 1) {
          $mensagem .= '<li>Favor preencher a Agência.<li>';
      }

      if ('' === $conta_corrente || strlen($conta_corrente) < 1) {
          $mensagem .= '<li>Favor preencher a Conta Corrente.<li>';
      }

      if ('' === $cnh || strlen($cnh) < 1) {
          $mensagem .= '<li>Favor preencher a CNH.<li>';
      }

      if ('' === $tipo_sangue || strlen($tipo_sangue) < 1) {
          $mensagem .= '<li>Favor preencher o Tipo Sanguíneo.<li>';
      }

      if ('' === $deficiente || strlen($deficiente) < 1) {
          $mensagem .= '<li>Favor preencher se é Deficiente.<li>';
      }
      if ('' === $deficiente_tipo || strlen($deficiente_tipo) < 1) {
          $mensagem .= '<li>Favor preencher o Tipo de Deficiência.<li>';
      }

      // if ('' ==! $deficiente || strlen($deficiente) > 1) {
      //     if ('' === $deficiente_tipo || strlen($deficiente_tipo) < 1) {
      //         $mensagem .= '<li>Favor preencher o Tipo de Deficiência.<li>';
      //     }

      if ('' === $cnh_categoria || strlen($cnh_categoria) < 1) {
          $mensagem .= '<li>Favor preencher o Tipo de CNH.<li>';
      }

      if ('' === $status) {
          $mensagem .= '<li>Favor preencher o Status.</li>';
      }

      if ('' !== $mensagem) {
          $mensagem = '<ul>'.$mensagem.'</ul>';
          echo "<div class='alert alert-danger' role='alert'>".$mensagem.'</div> ';
          exit;
      }

      // Constrói a data no formato ANSI yyyy/mm/dd
      $data_temp = explode('/', $data_nascimento);
      $data_ansi = $data_temp[2].'/'.$data_temp[1].'/'.$data_temp[0];

      $data2_temp = explode('/', $data_admissao);
      $data2_ansi2 = $data2_temp[2].'/'.$data2_temp[1].'/'.$data2_temp[0];
  }
