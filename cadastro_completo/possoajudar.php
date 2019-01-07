<!-- Iniciu Posso ajudar -->
<div class="form-group col-md-12">
  <a href="possoajudar.php" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" class="btn btn-link">Posso Ajudar?</a>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Posso Ajudar? </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form
              name="contactoform"
              method="POST"
              action="./../contato/sendmail.php"
              class="needs-validation"
              novalidate>

              <div class="mb-3">
              <label for="nome">Nome:</label>
              <input
                  type="text"
                  class="form-control"
                  id="nome"
                  name="nome"
                  placeholder=""
                  value=""
                  required/>

              <div class="invalid-feedback">Por favor preencha seu nome.</div>

              </div>

              <div class="mb-3">
                  <label for="email">E-mail:</label>
                  <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="voce@procon.pb.gov.br"/>

                  <div class="invalid-feedback">
                  Por favor, insira um endereço de e-mail válido para atualizações de envio.
                  </div>
              </div>

              <div class="mb-3">
                  <label for="assunto">Assunto:</label>
                  <input
                  type="text"
                  class="form-control"
                  id="assunto"
                  name="assunto"
                  placeholder="Informe um assunto"
                  required/>

                  <div class="invalid-feedback">Por favor informe um assunto.</div>

              </div>

              <div class="mb-3">
              <label for="mensagem">Mensagem:</label>
                  <textarea
                  type="text"
                  class="form-control"
                  id="mensagem"
                  name="mensagem"
                  placeholder="Qual a sua dúvida?"
                  ></textarea>
              </div>
            <div class="modal-footer">
              <input class="btn btn-outline-primary btn-lg" type="submit" value="Enviar"/>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
 <!-- fim Posso ajudar -->
