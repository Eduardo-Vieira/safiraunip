<?php include 'controllers/c_caduser.php';?>


<script type="text/javascript" src="public/js/jquery.js" ></script>

<script type="text/javascript">
$(document).ready(function(){
    $("input").blur(function(){
     if($(this).val() == "")
         {
             $(this).css({"border" : "1px solid #F00", "padding": "2px"});
         }
    });
    $("#bntSalvar").click(function(){
     var cont = 0;
     $("#form input").each(function(){
         if($(this).val() == "")
             {
                 $(this).css({"border" : "1px solid #F00", "padding": "2px"});
                 cont++;
             }
        });
     if(cont == 0)
         {
             $("#form").submit();
         }
    });
});
</script>

<script type="text/javascript"> 
    
    $(document).ready(function(){
          $("#aluno").click(function(){
            //mostra div
            $('#fcurso').show();
          });
          $("#coordenadores").click(function(){
            //oculta div
            $('#fcurso').hide();   
          });
            $('#egressos').click(function(){
            //oculta div
            $('#fcurso').hide();    
          });
             $('#civil').click(function(){
            //oculta div
            $('#fcurso').hide();    
          });
             $('#administrativo').click(function(){
            //oculta div
            $('#fcurso').hide();    
          });
     });
     
</script>


<form action="" method="POST" name="cadastrar" id="cadastrar">
<div class="row">
<div class="col-md-6">
    <div class="control-group">

        <div class="controls">
        <label  class="checkbox-inline">
        <label><input type="radio" id="coordenadores" name="tipo" value="1">Coordenadores</label>
        <label><input type="radio" id="egressos" name="tipo" value="2">Egressos</label>
        <label><input type="radio" id="aluno" name="tipo" value="3" checked="">Aluno</label>
        <label><input type="radio" id="civil" name="tipo" value="4">Sociedade Civil</label>
        <label><input type="radio" id="administrativo" name="tipo" value="5">Administrativo</label>
        </label>
        </div>

        <div id="ccurso">
        <label for="ccurso">Curso<font color="red">*</font></label>
        <div class="row">
         <div class="col-xs-6">
            <select class="form-control" name="curso">
                <option value="1" name="curso">Administração</option>
                <option value="2" name="curso">Arquitetura e Urbanismo</option>
                <option value="3" name="curso">Biomedicina</option>
                <option value="4" name="curso">Ciências Atuariais</option>
                <option value="5" name="curso">Ciências Biológicas</option>
                <option value="6" name="curso">Ciências Contábeis</option>
                <option value="7" name="curso">Ciência da Computação</option>
                <option value="8" name="curso">Ciências Econômicas</option>
                <option value="9" name="curso">Desenho Industrial</option>
                <option value="10" name="curso">Direito</option>
                <option value="11" name="curso">Educação Física</option>
                <option value="12" name="curso">Enfermagem</option>
                <option value="13" name="curso">Engenharia Aeronáutica</option>
                <option value="14" name="curso">Engenharia Ambiental</option>
                <option value="15" name="curso">Engenharia Civil</option>
                <option value="16" name="curso">Engenharia de Computação</option>
                <option value="17" name="curso">Engenharia de Controle e Automação</option>
                <option value="18" name="curso">Engenharia de Petróleo</option>
                <option value="19" name="curso">Engenharia de Produção Mecânica</option>
                <option value="20" name="curso">Engenharia Elétrica</option>
                <option value="21" name="curso">Engenharia Mecânica</option>
                <option value="22" name="curso">Farmácia</option>
                <option value="23" name="curso">Física</option>
                <option value="24" name="curso">Fisioterapia</option>
                <option value="25" name="curso">Fonoaudiologia</option>
                <option value="26" name="curso">Geografia</option>
                <option value="27" name="curso">História</option>
                <option value="28" name="curso">Hotelaria</option>
                <option value="29" name="curso">Jornalismo</option>
                <option value="30" name="curso">Letras</option>
                <option value="31" name="curso">Matemática</option>
                <option value="32" name="curso">Medicina Veterinária</option>
                <option value="33" name="curso">Moda</option>
                <option value="34" name="curso">Nutrição</option>
                <option value="35" name="curso">Odontologia</option>
                <option value="36" name="curso">Pedagogia</option>
                <option value="37" name="curso">Propaganda e Marketing</option>
                <option value="38" name="curso">Psicologia</option>
                <option value="39" name="curso">Publicidade e Propaganda</option>
                <option value="40" name="curso">Química</option>
                <option value="41" name="curso">Relações Internacionais</option>
                <option value="42" name="curso">Secretariado Executivo Bilíngue</option>
                <option value="43" name="curso">Serviço Social</option>
                <option value="44" name="curso">Sistemas de Informação</option>
                <option value="45" name="curso">Terapia Ocupacional</option>
                <option value="46" name="curso">Turismo</option>
                <option value="47" name="curso">Zootecnia</option>
            </select>             
        </div>

         <div class="col-xs-4">
            <select class="form-control">
                <option value="manha" name="turno">Manhã</option>
                <option value="noite" name="turno">Noite</option>
            </select>
        </div>
        </div>
        </div>

        <label for="RA">RA <font color="red">*</font></label>
        <div class="controls">
            <input class="form-control" data-val="true" data-val-required="RA is required" id="ra" name="ra" type="text" value="" maxlength="7" placeholder="Ex.: C562SE5"/>
            <span class="field-validation-valid" data-valmsg-for="RA" data-valmsg-replace="true"></span>
        </div>

        <label for="NomeCompleto">Nome Completo <font color="red">*</font></label>
        <div class="controls">
            <input class="form-control" data-val="true" data-val-required="NomeCompleto is required" id="nome" name="nome" type="text" value="" placeholder="Ex.: José da Silva" maxlength="50"/>
            <span class="field-validation-valid" data-valmsg-for="NomeCompleto" data-valmsg-replace="true"></span>
        </div>

        <label for="Senha">Senha <font color="red">*</font></label>
        <div class="controls">
            <input class="form-control" data-val="true" data-val-required="Senha is required" id="senha" name="senha" type="password" value="" maxlength="16"/>
            <span class="field-validation-valid" data-valmsg-for="Senha" data-valmsg-replace="true"></span>
        </div>

        <label for="Confirma?o da Senha">Confirmação da Senha <font color="red">*</font></label>
        <div class="controls">
            <input class="form-control" data-val="true" data-val-required="Confirmação da Senha is required" id="resenha" name="resenha" type="password" value="" maxlength="16" />
            <span class="field-validation-valid" data-valmsg-for="Confirmação da Senha" data-valmsg-replace="true"></span>
        </div>

        <label for="e-Mail">e-Mail <font color="red">*</font></label>
        <div class="controls">
            <input class="form-control" data-val="true" data-val-required="e-Mail is required" id="email" name="email" type="text" value="" placeholder="Ex.: exemplo@dominio.com" maxlength="100"/>
            <span class="field-validation-valid" data-valmsg-for="e-Mail" data-valmsg-replace="true"></span>
        </div>
        <div class="controls" style="margin-top:20px;">
            <button type="submit" class="btn btn-success" id="bntSalvar" name="bntSalvar">Criar Usuário</button>
            <a href="javascript: history.back();" class="btn btn-danger">Cancelar</a>
        </div>
    </div>
</div>
<div class="col-md-6">
      <div class="panel panel-primary" style="height: 220px;">
      <!-- Default panel contents -->
      <div class="panel-heading"><b>Informações</b></div>
      <div class="panel-body">


        <p>Essas Informações importantes são representadas desta forma. Normalmente elas destacam passos que você pode precisar realizar.</p>

        <p>1. Esse cadastro você podera ter acesso ao questionário de avaliação da unip.</p>
       
        <p>2. A opção marcada, respondera as seguintes informações dada.
        
        <p>3. Após preencher o cadastro, enviaremos a confirmação para seu email.</p>
        <p>

      </div>

    </div>
</div>
</div>
</form>
