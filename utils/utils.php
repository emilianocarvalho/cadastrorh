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

function generate_OptionsForms($arrayOpcoes, $opcaoAtual, $opcaoPadrao, $nomeForm, $cssId)
{
    $types = $arrayOpcoes;

    $type = isset($opcaoAtual) && in_array($opcaoAtual, $types, true) ? $opcaoAtual : $opcaoPadrao;

    echo '<select class="form-control" name="'.$nomeForm.'" id="'.$cssId.'">';
    foreach ($types as $option) {
        echo '<option value="'.$option.'"'.(0 === strcmp($option, $type) ? ' selected="selected"' : '').'>'.$option.'</option>';
    }
    echo '</select>';
}

function verificaFoto($conexao, $id)
{
    // Captura o nome da foto para excluir da pasta
    $sql = 'SELECT foto FROM servidor WHERE id = :id';
    $stm = $conexao->prepare($sql);
    $stm->bindValue(':id', $id);
    $stm->execute();
    $servidor = $stm->fetch(PDO::FETCH_OBJ);

    // var_dump($servidor->foto);
    $foto_atual = $servidor->foto;
    if (file_exists('cadastro_completo/fotos/'.$foto_atual)) {
        $foto_atual = $servidor->foto;
    } else {
        $sql = 'UPDATE servidor SET foto=:imgfoto ';
        $sql .= 'WHERE id = :id';
        
        $stm = $conexao->prepare($sql);
        $stm->bindValue(':imgfoto', FOTO_PADRAO);
        $stm->bindValue(':id', $id);
        $retorno = $stm->execute();
        $foto_atual = FOTO_PADRAO;
    }

    return $foto_atual;
}
