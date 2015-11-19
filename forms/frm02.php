<?php
if (!isset($_SESSION)) {
      session_start();
      if (!empty($_SESSION['logado']))
        return header('location: ../index.php');
      {
        $_SESSION['logado'] = '0';
        return header('location: ../index.php');

      }
    }
?>

<form action="controllers/c_form.php" method="post"  id="formq" name="formq">

<input type="hidden" value="14" id="TQ" name="TQ">
<input type="hidden" value="25" id="idpergunta" name="idpergunta">
<input type="hidden" value="2" id="idformulario" name="idformulario">
<input type="hidden" value="9" id="iddefull" name="iddefull">

<div class="container">
  <div class="row">
    <div class="page-header">
        <p><b> 02 - QUESTIONÁRIO DE AVALIAÇÃO INSTITUCIONAL INTERNA DESTINADO AO CORPO DISCENTE E AOS EGRESSOS - 2015</b></p>
    </div>
  </div>
      <div>
      <div id="subtitulo1" name="subtitulo1"><p><b>Eixo 1 – Dimenssão 8 (Planejamento e Avaliação Institucional)</b></p></div>
      <div id="subtitulo2" name="subtitulo2"><p><b>Eixo 2 – Dimensões 1 e 3 (Desenvolvimento Institucional)</b></p></div>
      <div id="subtitulo3" name="subtitulo3"><p><b>Eixo 3 – Dimensões 2, 4 e 9 (Política Acadêmica)</b></p></div>
      <div id="subtitulo4" name="subtitulo4"><p><b>Eixo 4 – Dimensões 5, 6 e 10 (Política de Gestão, Organização e Gestão Institucional e Sustentabilidade Financeira)</b></p></div>
      <div id="subtitulo5" name="subtitulo5"><p><b>Eixo 5 – Dimensão 5 (Infraestrutura)</b></p></div>
    </div>
    <div class="panel panel-default" id="1">
          <div class="panel-heading">1. A avaliação institucional interna é importante, porque aponta potencialidades, fragilidades e ações corretivas para 
          							atender ao que estabelece o PDI.</div>
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
          <div class="panel-heading">2. Os meios de comunicação utilizados pela UNIP difundem suas ações para a comunidade externa de forma clara e objetiva.</div>
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
          <div class="panel-heading">3. A Comissão Própria de Avaliação Interna publica no campus suas ações e divulga os resultados das avaliações realizadas de 
          							forma clara e objetiva.</div>
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
          <div class="panel-heading">4. O Plano de Desenvolvimento Institucional -  PDI é o documento que define a Missão da instituição, a qual é do conhecimento
          							 dos discentes.</div>
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
          <div class="panel-heading">5. As ações acadêmicas praticadas pela instituição favorecem a unidade entre ensino, pesquisa e extensão.</div>
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
          <div class="panel-heading">6. As ações de ensino, pesquisa e extensão praticadas pela instituição contribuem para a melhoria da qualidade de vida 
          							 da sociedade local.</div>
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
                  <li class="next"><a href="#" onclick="divn('7','3')" id="next6">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="7">
          <div class="panel-heading">7. A instituição, por meio de suas políticas de incentivo, estimula a participação dos discentes nos projetos de ensino,
          							 pesquisa e extensão.</div>
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
          <div class="panel-heading">8. A instituição desenvolve atividades de Extensão Comunitária com o objetivo de contribuir para o desenvolvimento local,
          							 regional e nacional. Para tanto, promove eventos culturais, artísticos e sociais, contribuindo para a melhoria das condições
          							 de vida da população. Nesses programas, toda a comunidade acadêmica é envolvida.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q8" name="Q8" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q8" name="Q8" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q8" name="Q8" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q8" name="Q8" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q8" name="Q8" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('7','3')" id="previous8">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('9','3')" id="next8">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="9">
          <div class="panel-heading">9. A política de atendimento praticada pela instituição para a comunidade acadêmica e sociedade civil tem se mostrado 
          							eficaz.</div>
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
                  <li class="next"><a href="#" onclick="divn('10','4')" id="next9">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="10">
          <div class="panel-heading">10. O atendimento prestado pela Ouvidoria é adequado e acolhe, de modo geral, às necessidades dos discentes. </div>
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
          <div class="panel-heading">11. Os funcionários da UNIP prestam atendimento de qualidade e de forma eficiente e eficaz.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q11" name="Q11" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q11" name="Q11" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q11" name="Q11" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q11" name="Q11" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q11" name="Q11" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('10','4')" id="previous11">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('12','4')" id="next11">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
    <div class="panel panel-default" id="12">
          <div class="panel-heading">12. A equipe de apoio pedagógico disponibilizada pela UNIP para atendimento aos discentes é bem preparada.</div>
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
                  <li class="next"><a href="#" onclick="divn('13','5')" id="next12">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
                </ul>
              </nav>
     			 </div>
          </div>
	</div>
    
       <div class="panel panel-default" id="13">
          <div class="panel-heading">13. A UNIP disponibiliza para os discentes um ambiente virtual com atendimento eficiente e eficaz. </div>
          <div class="panel-body">
                 <label><input type="radio" id="Q13" name="Q13" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q13" name="Q13" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q13" name="Q13" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q13" name="Q13" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q13" name="Q13" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
      				<nav>
                <ul class="pager">
                  <li class="previous"><a href="#" onclick="divn('12','4')" id="previous13">Anterior<span aria-hidden="true">&larr;</span> </a></li>
                  <li class="next"><a href="#" onclick="divn('14','5')" id="next14">Próximo  <span aria-hidden="true">&rarr;</span></a></li>
               </ul>
              </nav>
     			 </div>
          </div>
		</div>
                     <div class="panel panel-default" id="14">
          <div class="panel-heading">14. A infraestrutura do campus da UNIP (salas de aula, laboratórios, bibliotecas e outros) garante o bom atendimento às 
          							necessidades dos discentes.</div>
          <div class="panel-body">
                 <label><input type="radio" id="Q14" name="Q14" value="3"> Concordo plenamente.</label><br>
                 <label><input type="radio" id="Q14" name="Q14" value="4"> Concordo.</label><br>
                 <label><input type="radio" id="Q14" name="Q14" value="7"> Indiferente.</label><br>
                 <label><input type="radio" id="Q14" name="Q14" value="5"> Discordo.</label><br>
                 <label><input type="radio" id="Q14" name="Q14" value="9"> Não sei responder.</label><br>
                 <div class="form-group">
              <nav>
                <ul class="pager">
                 <li class="previous"><a href="#" onclick="divn('13','5')" id="previous14">Anterior<span aria-hidden="true">&larr;</span> </a></li>
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