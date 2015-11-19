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

        <div id="fcurso">
        <label for="fcurso">Curso <font color="red">*</font></label>
        <div class="row">
         <div class="col-xs-6">
            <select class="form-control">
                <option>Curso 1</option>
                <option>Curso 2</option>
                <option>Curso 3</option>
                <option>Curso 4</option>
                <option>Curso 5</option>
                <option>Curso 6</option>
                <option>Curso 7</option>
                <option>Curso 8</option>
                <option>Curso 9</option>
                <option>Curso 10</option>
                <option>Curso 11</option>
                <option>Curso 12</option>
                <option>Curso 13</option>
                <option>Curso 14</option>
                <option>Curso 15</option>
                <option>Curso 16</option>
                <option>Curso 17</option>
                <option>Curso 18</option>
                <option>Curso 19</option>
                <option>Curso 20</option>
                <option>Curso 21</option>
                <option>Curso 22</option>
                <option>Curso 23</option>
                <option>Curso 24</option>
                <option>Curso 25</option>
                <option>Curso 27</option>
                <option>Curso 28</option>
            </select>
        </div>

         <div class="col-xs-4">
            <select class="form-control">
                <option>Manhã</option>
                <option>Noite</option>
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
