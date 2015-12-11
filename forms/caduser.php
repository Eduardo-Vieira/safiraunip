<?php include 'controllers/c_caduser.php';?>


<script type="text/javascript" src="public/js/jquery.js" ></script>

<!-- <script type="text/javascript">
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

-->

<script type="text/javascript"> 
    
    $(document).ready(function(){
          $("#aluno").click(function(){
            //mostra div
            $('#ccurso').show();
          });
          $("#coordenadores").click(function(){
            //oculta div
            $('#ccurso').hide();   
          });
            $('#egressos').click(function(){
            //oculta div
            $('#ccurso').hide();    
          });
             $('#civil').click(function(){
            //oculta div
            $('#ccurso').hide();    
          });
             $('#administrativo').click(function(){
            //oculta div
            $('#ccurso').hide();    
          });
     });
     
</script>


<form action="" method="POST" name="cadastrar" id="cadastrar">
<div class="row">
<div class="col-md-6">
    <div class="control-group">

        <div class="controls">
        <label  class="checkbox-inline" name="nivel">
        <label><input type="radio" id="coordenadores" name="nivel" value="1">Coordenadores</label>
        <label><input type="radio" id="egressos" name="nivel" value="2">Egressos</label>
        <label><input type="radio" id="aluno" name="nivel" value="3" checked="">Aluno</label>
        <label><input type="radio" id="civil" name="nivel" value="4">Sociedade Civil</label>
        <label><input type="radio" id="administrativo" name="nivel" value="5">Administrativo</label>
        </label>
        </div>

        <div id="ccurso">
        <label for="ccurso">Curso<font color="red">*</font></label>
        <div class="row">
         <div class="col-xs-6">
            <select class="form-control" name="curso">
            <?php 
               $rs01 = $cnnPDO->Db()->query("SELECT `curs_cCurso`,`curs_Curso` FROM `tb_cursos`");
               $n_linhas = $rs01->rowCount();
               $row = $rs01->fetchAll();
                for($i=0;$i <$n_linhas;$i++){
                    echo '<option value="'.$row[$i][0].'" name="curso">'.utf8_encode($row[$i][1]).'</option>';
                }
            ?>               
            </select>           
        </div>

         <div class="col-xs-4">
             <select class="form-control" name="turno">
                <option value="1" name="turno">Manhã</option>
                <option value="2" name="turno">Noite</option>
            </select>
        </div>
        </div>
        </div>
        
        <label for="RA">Localidade<font color="red">*</font></label>
        <div class="controls">
            <select class="form-control" name="cidade">
                <option value="0">Escolha...</option>
                <?php 
               $rs02 = $cnnPDO->Db()->query("SELECT `cida_cCidade`,`cida_Cidade` FROM `tb_cidades`");
               $n_linhas = $rs02->rowCount();
               $row = $rs02->fetchAll();
                for($i=0;$i <$n_linhas;$i++){
                    echo '<option value="'.$row[$i][0].'" name="curso">'.$row[$i][1].'</option>';
                }
                ?>
            </select>
            <span class="field-validation-valid" data-valmsg-for="RA" data-valmsg-replace="true"></span>
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
