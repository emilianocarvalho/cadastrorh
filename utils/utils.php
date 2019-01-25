<?php
function generate_OptionsForms($arrayOpcoes, $opcaoAtual, $opcaoPadrao, $nomeForm, $cssId){
  $types = $arrayOpcoes;

  $type = isset($opcaoAtual) && in_array($opcaoAtual,$types)?$opcaoAtual:$opcaoPadrao;

  echo '<select class="form-control" name="'.$nomeForm.'" id="'.$cssId.'">';
  foreach($types as $option) {
      echo '<option value="'.$option.'"'.(strcmp($option,$type)==0?' selected="selected"':'').'>'.$option.'</option>';
  }
  echo '</select>';
}
?>