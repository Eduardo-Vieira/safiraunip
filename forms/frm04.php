<?php
if ($_SESSION['logado']=='0') 
{
    return header('location: index.php');
}

    require_once ('data/config.php');
require_once ('data/db.php');

//Abrir conexão com banco de dado.
$cnnPDO = new Db();
$sql ="SELECT `curs_cCurso`,`curs_Curso` FROM `tb_cursos`";

$cont =$cnnPDO->Db()->query($sql)->rowCount();
$rs = $cnnPDO->Db()->query($sql)->fetchAll(PDO::FETCH_NUM);

$sql_turno ="SELECT `turn_cTurno`,`turn_txTurno` FROM `tb_turno`";

$cont_turno =$cnnPDO->Db()->query($sql_turno)->rowCount();
$rs_turno = $cnnPDO->Db()->query($sql_turno)->fetchAll(PDO::FETCH_NUM);
?>

<form action="controllers/c_form.php" method="post"  id="formq" name="formq">

<input type="hidden" value="12" id="TQ" name="TQ">
<input type="hidden" value="54" id="idpergunta" name="idpergunta">
<input type="hidden" value="4" id="idformulario" name="idformulario">
<input type="hidden" value="9" id="iddefull" name="iddefull">

<div class="container">
  <div class="row">
    <div class="page-header">
        <p><b>04 - QUESTIONÁRIO DE AVALIAÇÃO INSTITUCIONAL INTERNA 
        DESTINADO À SOCIEDADE CIVIL - 2015</b></p>
    </div>
  </div>
    <div>
      <div id="subtitulo1" name="subtitulo1"><p><b>Eixo 1 – Dimensão 8 (Planejamento e Avaliação Institucional)</b></p></div>
      <div id="subtitulo2" name="subtitulo2"><p><b>Eixo 2 – Dimensões 1 e 3 (Desenvolvimento Institucional)</b></p></div>
      <div id="subtitulo3" name="subtitulo3"><p><b>Eixo 3 – Dimensões 2, 4 e 9 (Política Acadêmica)</b></p></div>
      <div id="subtitulo4" name="subtitulo4"><p><b>Eixo 4 – Dimensões 5, 6 e 10 (Política de Gestão, Organização e Gestão Institucional e Sustentabilidade Financeira)</b></p></div>
      <div id="subtitulo5" name="subtitulo5"><p><b>Eixo 5 – Dimensão 5 (Infraestrutura)</b></p></div>
    </div>

    <div class="form-group">
    <label for="InputCurso">Curso </label>
    <select name ="idCurso" id = "idCurso">
    <option value="0">Escolha...</option>
        <?php
            for($i=0;$i<$cont;$i++){
                echo '<option value="'.$rs[$i][0].'">'.utf8_encode($rs[$i][1]).'</option>';
            }
        ?>      
    </select>
    </div>
    
    <div class="form-group">
    <label for="InputTurno">Turno </label>
    <select name = "idTurno" id = "idTurno">
    <option value="0">Escolha...</option>
        <?php
            for($i=0;$i<$cont_turno;$i++){
                echo '<option value="'.$rs_turno[$i][0].'">'.utf8_encode($rs_turno[$i][1]).'</option>';
            }
        ?>      
    </select>
    </div>
    
    <div class="panel panel-default" id="1">
          <div class="panel-heading">1. A avaliação institucional interna é importante porque identifica potencialidades e fragilidades, permitindo propor ações corretivas, tanto administrativas como pedagógicas.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q1" name="Q1" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q1" name="Q1" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q1" name="Q1" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q1" name="Q1" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q1" name="Q1" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				   <nav>
                <ul class="pager">
                  <li class="next"><a href="#" onclick="divn('2','1')"  id="next1">Próximo <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="2">
          <div class="panel-heading">2. O site da instituição é de fácil acesso e permite, ao ser acessado pela comunidade interna e externa, obter todas as informações de forma clara e objetiva.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q2" name="Q2" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q2" name="Q2" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q2" name="Q2" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q2" name="Q2" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q2" name="Q2" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('1','1')" id="previous2">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('3','1')" id="next2">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="3">
          <div class="panel-heading">3. A Comissão Própria de Avaliação Interna publica no campus suas ações e divulga os resultados das avaliações realizadas de forma clara e objetiva.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q3" name="Q3" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q3" name="Q3" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q3" name="Q3" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q3" name="Q3" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q3" name="Q3" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('2','1')" id="previous3">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('4','2')" id="next3">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="4">
          <div class="panel-heading">4. A prestação de serviços especializados (atendimentos na área da saúde, jurídica e psicológica) à comunidade externa e interna da UNIP tem contribuído para o desenvolvimento da cidadania.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q4" name="Q4" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q4" name="Q4" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q4" name="Q4" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q4" name="Q4" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q4" name="Q4" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('3','1')" id="previous4">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('5','2')" id="next4">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="5">
          <div class="panel-heading">5. As ações de ensino, pesquisa e extensão praticadas pela UNIP contribuem para a melhoria da qualidade de vida da sociedade local.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q5" name="Q5" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q5" name="Q5" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q5" name="Q5" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q5" name="Q5" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q5" name="Q5" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('4','2')" id="previous5">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('6','2')" id="next5">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="6">
          <div class="panel-heading">6. A UNIP desenvolve atividades de Extensão Comunitária com o objetivo de contribuir para o desenvolvimento local, regional e nacional. Para tanto, promove eventos culturais, artísticos e sociais, contribuindo para a melhoria das condições de vida da população. Nesses programas, toda a comunidade acadêmica é envolvida.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q6" name="Q6" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q6" name="Q6" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q6" name="Q6" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q6" name="Q6" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q6" name="Q6" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('5','2')" id="previous6">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('7','2')" id="next6">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="7">
          <div class="panel-heading">7. A oportunidade de obtenção de bolsa/desconto para a realização dos diversos cursos da UNIP sustenta uma política de inclusão e de inserção qualificada no mercado de trabalho.</div>
          <div class="panel-body">
                  <label><input type="radio" id="Q7" name="Q7" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q7" name="Q7" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q7" name="Q7" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q7" name="Q7" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q7" name="Q7" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('6','2')" id="previous7">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('8','3')" id="next7">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="8">
          <div class="panel-heading">8. A contribuição para a melhoria regional e para a responsabilidade social está clara nas ações da UNIP.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q8" name="Q8" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q8" name="Q8" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q8" name="Q8" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q8" name="Q8" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q8" name="Q8" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('7','2')" id="previous8">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('9','3')" id="next8">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="9">
          <div class="panel-heading">9. A UNIP mantém um atendimento por intermédio da Ouvidoria que permite à comunidade interna e externa esclarecer dúvidas e solucionar problemas.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q9" name="Q9" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q9" name="Q9" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q9" name="Q9" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q9" name="Q9" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q9" name="Q9" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('8','3')" id="previous9">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('10','3')" id="next9">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="10">
          <div class="panel-heading">10. A política de atendimento praticada pela UNIP a toda a comunidade acadêmica e sociedade civil tem se mostrado eficaz.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q10" name="Q10" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q10" name="Q10" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q10" name="Q10" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q10" name="Q10" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q10" name="Q10" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('9','3')" id="previous10">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('11','4')" id="next10">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="11">
          <div class="panel-heading">11. A UNIP disponibiliza funcionários de apoio técnico e acadêmico para atendimento à comunidade interna e externa em quantidade suficiente.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q11" name="Q11" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q11" name="Q11" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q11" name="Q11" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q11" name="Q11" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q11" name="Q11" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('10','3')" id="previous11">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('12','5')" id="next11">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="12">
          <div class="panel-heading">12. A infraestrutura do campus da UNIP está adequada para o atendimento aos discentes, docentes e à comunidade em geral.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q12" name="Q12" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q12" name="Q12" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q12" name="Q12" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q12" name="Q12" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q12" name="Q12" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('11','4')" id="previous12">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <div align="right">
                 <input type="button" class="btn btn-success" value="Finalizar" id="enviar" name="enviar">
                 </div>
               </ul>
              </nav>
     			 </div>
          </div>
		</div>
</div>
</form>