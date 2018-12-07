
        <span class="badge badge-danger">==>> SESSÃO FUNCIONAIS</span>
        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="cargo">Cargo</label>
                <input type="cargo" class="form-control" name="cargo" id="cargo" value="<?= $cliente->cargo ?>" placeholder="Informe o Cargo">
                <span class='msg-erro msg-cargo'></span>
            </div>

            <div class="form-group col-md-3">
                <label for="funcao">Função</label>
                <input type="funcao" class="form-control" name="funcao" id="funcao" value="<?= $cliente->funcao ?>" placeholder="Informe a Função">
                <span class='msg-erro msg-funcao'></span>
            </div>

            <div class="form-group col-md-2">
                <label for="forma_admissao">Forma de Admissão</label>
                <select class="form-control" name="forma_admissao" id="forma_admissao">
                    <option value="<?= $cliente->forma_admissao ?>">
                        <?= $cliente->forma_admissao ?>
                    </option>
                    <option value="Sem Concurso">Sem Concurso</option>
                    <option value="Concurso">Concurso</option>
                    <option value="Contrato">Contrato</option>
                    <option value="Em Comissao">Em Comissão</option>
                </select>
                <span class='msg-erro msg-forma_admissao'></span>
            </div>
            <div class="form-group col-md-2">
                <label for="regime">Regime</label>
                <select class="form-control" name="regime" id="regime">
                    <option value="<?= $cliente->regime ?>">
                        <?= $cliente->regime ?>
                    </option>
                    <option value="Estatuario">Estatutário</option>
                    <option value="Exclusivamente em Comissao">Exclusivamente em Comissão</option>
                </select>
                <span class='msg-erro msg-regime'></span>
            </div>
            <div class="form-group col-md-2">
                <label for="setor">Setor</label>
                <input type="setor" class="form-control" id="setor" name="setor" value="<?= $cliente->setor ?>" placeholder="Informe o Setor">
                <span class='msg-erro msg-setor'></span>
            </div>
        </div>


        <div class="form-row">  
            

            <div class="form-group col-md-2">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="data_nascimento" class="form-control" id="data_nascimento" maxlength="10" value="<?= $data_formatada ?>" name="data_nascimento">
                <span class='msg-erro msg-data'></span>
            </div>

            <div class="form-group col-md-2">
                <label for="data_admissao">Data de Admissão</label>
                <input type="data_admissao" class="form-control" id="data_admissao" maxlength="10" value="<?= $data_formatada2 ?>" name="data_admissao">
                <span class='msg-erro msg-data2'></span>
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-1">
                <label for="sexo">Sexo</label>
                <select class="form-control" name="sexo" id="sexo">
                    <option value="<?= $cliente->sexo ?>">
                        <?= $cliente->sexo ?>
                    </option>
                    <option value="Masculino">M</option>
                    <option value="Feminino">F</option>
                    <option value="Outros">O</option>
                </select>
                <span class='msg-erro msg-sexo'></span>
            </div>

            <div class="form-group col-md-2">
                <label for="nacionalidade">Nacionalidade</label>
                <select class="form-control" name="nacionalidade" id="nacionalidade">
                    <option value="<?= $cliente->nacionalidade ?>">
                        <?= $cliente->nacionalidade ?>
                    </option>
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
            <div class="form-group col-md-2">
                    <label for="naturalidade">Naturalidade</label>
                    <input type="naturalidade" class="form-control" id="naturalidade" maxlength="20" value="<?= $cliente->naturalidade ?>" name="naturalidade" placeholder="Informe a Naturalidade">
                    <span class='msg-erro msg-naturalidade'></span>
            </div>
            <div class="form-group col-md-2">
                <label for="estado">Estado</label>
                    <select class="form-control" name="estado" id="estado">
                        <option value="<?= $cliente->estado ?>">
                            <?= $cliente->estado ?>
                        </option>
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
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="estado_civil">Estado Civil</label>
                <select class="form-control" name="estado_civil" id="estado_civil">
                    <option value="<?= $cliente->estado_civil ?>">
                        <?= $cliente->estado_civil ?>
                    </option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Divorcio">Divorcio(a)</option>
                    <option value="Junto">Junto(a)</option>
                    <option value="Separado">Separado(a)</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Viuvo">Viuvo(a)</option>
                </select>
                <span class='msg-erro msg-estado_civil'></span>
            </div>

            <div class="form-group col-md-2">
                <label for="numero_dependente">Número de Dependente(s)</label>
                <input type="numero_dependente" class="form-control" id="numero_dependente" name="numero_dependente" maxlength="2" value="<?= $cliente->numero_dependente ?>" placeholder="Informe o Número de Dependente">
                <span class='msg-erro msg-numero_dependente'></span>
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-2">
                <label for="telefone">Telefone</label>
                <input type="telefone" class="form-control" id="telefone" maxlength="12" name="telefone" value="<?= $cliente->telefone ?>" placeholder="Informe o Telefone">
                <span class='msg-erro msg-telefone'></span>
            </div>
            <div class="form-group col-md-3">
                <label for="celular">Celular</label>
                <input type="celular" class="form-control" id="celular" maxlength="13" name="celular" value="<?= $cliente->celular ?>" placeholder="Informe o Celular">
                <span class='msg-erro msg-celular'></span>
            </div>

            <div class="form-group col-md-3">
                <label for="whatsapp">Whatsapp</label>
                <input type="whatsapp" class="form-control" id="whatsapp" maxlength="13" name="whatsapp" value="<?= $cliente->whatsapp ?>" placeholder="Informe o Whatsapp">
                <span class='msg-erro msg-whatsapp'></span>
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="banco">Banco</label>
                <input type="banco" class="form-control" id="banco" name="banco" value="<?= $cliente->banco ?>" style="text-transform:uppercase;" placeholder="Informe o Banco">
                <span class='msg-erro msg-banco'></span>
            </div>

            <div class="form-group col-md-2">
                <label for="agencia">Agencia</label>
                <input type="agencia" class="form-control" id="agencia" maxlength="20" name="agencia" value="<?= $cliente->agencia ?>" placeholder="Informe a Agência">
                <span class='msg-erro msg-agencia'></span>
            </div>

            <div class="form-group col-md-3">
                <label for="conta_corrente">Conta Corrente</label>
                <input type="conta_corrente" class="form-control" id="conta_corrente" maxlength="20" name="conta_corrente" value="<?= $cliente->conta_corrente ?>" placeholder="Informe a Conta Corrente">
                <span class='msg-erro msg-conta_corrente'></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="status">Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="<?= $cliente->status ?>">
                        <?= $cliente->status ?>
                    </option>
                    <option value="Ativo">Ativo</option>
                    <option value="Inativo">Inativo</option>
                </select>
                <span class='msg-erro msg-status'></span>
            </div>
        </div>