
        <span class="badge badge-danger">==>> SESSÃO CADASTRAIS</span>
        <div class="form-row">

            <div class="form-group col-md-6">

                <label for="cpf">CPF</label>
                <input type="cpf" class="form-control" id="cpf" maxlength="14" name="cpf" value="<?= $cliente->cpf ?>" placeholder="Informe o CPF">
                <span class='msg-erro msg-cpf'></span>
            </div>

            <div class="form-group col-md-6">
                <label for="identidade">RG</label>
                <input type="identidade" class="form-control" id="identidade" maxlength="20" name="identidade" value="<?= $cliente->identidade ?>" placeholder="Informe a RG">
                <span class='msg-erro msg-identidade'></span>
            </div>
        </div>



        <div class="form-row">

                <div class="form-group col-md-5">
                    <label for="titulo">Titulo</label>
                    <input type="titulo" class="form-control" id="titulo" maxlength="14" name="titulo" value="<?= $cliente->titulo ?>" placeholder="Informe o Titulo">
                    <span class='msg-erro msg-titulo'></span>
                </div>

                <div class="form-group col-md-4">
                    <label for="zona">Zona</label>
                    <input type="zona" class="form-control" id="zona" maxlength="3" name="zona" value="<?= $cliente->zona ?>" placeholder="Informe o Titulo">
                    <span class='msg-erro msg-zona'></span>
                </div>

                <div class="form-group col-md-3">
                    <label for="secao">Seção</label>
                    <input type="secao" class="form-control" id="secao" maxlength="4" name="secao" value="<?= $cliente->secao ?>" placeholder="Informe a Zona">
                    <span class='msg-erro msg-secao'></span>
                </div>
            </div>


        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="pis">PIS/PASEP</label>
                <input type="pis" class="form-control" id="pis" maxlength="14" name="pis" value="<?= $cliente->pis ?>" placeholder="Informe o PIS/PASEP">
                <span class='msg-erro msg-pis'></span>
            </div>

            <div class="form-group col-md-4">
                <label for="carteiratrabalho">Carteira de Trabalho</label>
                <input type="carteiratrabalho" class="form-control" id="carteiratrabalho" maxlength="20" name="carteiratrabalho" value="<?= $cliente->carteiratrabalho ?>" placeholder="Infome a carteira de trabalho">
                <span class='msg-erro msg-carteiratrabalho'></span>
            </div>

            <div class="form-group col-md-4">
                <label for="reservista">Carteira Reservista</label>
                <input type="reservista" class="form-control" id="reservista" maxlength="20" name="reservista" value="<?= $cliente->reservista ?>" placeholder="Informe a Reservista">
                <span class='msg-erro msg-reservista'></span>
            </div>
        </div>


        <div class="form-row">

            <div class="form-group col-md-3">
                <label for="escolar">Instrução Escolar</label>
                <input type="escolar" class="form-control" id="escolar" maxlength="50" name="escolar" value="<?= $cliente->escolar ?>" placeholder="Informer a Instrução Escolar">
                <span class='msg-erro msg-escolar'></span>
            </div>

            <div class="form-group col-md-4">
                <label for="instituicao">Instituição</label>
                <input type="instituicao" class="form-control" id="instituicao" maxlength="50" name="instituicao" value="<?= $cliente->instituicao ?>" placeholder="Informe a Instituição">
                <span class='msg-erro msg-instituicao'></span>
            </div>
            <div class="form-group col-md-3">
                <label for="curso">Curso Formação</label>
                <input type="curso" class="form-control" id="curso" maxlength="50" name="curso" value="<?= $cliente->curso ?>" placeholder="Informe o Curso Formação">
                <span class='msg-erro msg-curso'></span>
            </div>

            <div class="form-group col-md-2">
                <label for="deficiente">Deficiente</label>
                <input type="deficiente" class="form-control" id="deficiente" maxlength="50" name="deficiente" value="<?= $cliente->deficiente ?>" placeholder="Informe a Deficiência">
                <span class='msg-erro msg-deficiente'></span>
            </div>

        </div>
        <div class="form-row">                
            <div class="form-group col-md-12">
                <label for="nota">Anotações:</label>
                <textarea class="form-control" name="nota" id="nota">
                    <?php echo $cliente->nota; ?>
                </textarea>
                <span class='msg-erro msg-nota'></span>
            </div>
        </div>
    
