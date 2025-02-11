<!--inserindo o header-->

<?php include_once 'header.php';?>
<!--referenciando o css-->
<link rel="stylesheet" href="css/menuBootstrap.css">
<!--referenciando o js-->
<script src="js/submaterias.js" defer></script>
        <!--criando div centralizada com a logo-->
        <div class="text-center my-3">
          <img src="img/logoBranca.png" class="rounded" width="250" height="100"alt="">
        </div>
<!--criando um container que irá conter as div de cada submatéria-->
<div class="container justify-content">

    <!--criando a div das submatérias estilizada em bootstrap, com características de coluna e tamaho fixo-->
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <!--adicionando uma div que irá conter o texto da submatéria assim como seu link para a página telaProf-->
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Matemática geral</div>
    </div>
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Álgebra</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaNoProf()">Análise Combinatória</div>
    </div> 
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Aritmética</div>
    </div> 
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Binômio de Newton</div>
    </div>    
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Cálculo</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Circunferência</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Conjuntos</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Equação</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Estatística</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Fatoração</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Funções</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Geometria analítica</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Geometria Métrica Espacial</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Geomteria plana</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">História da matemática</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Logaritmo</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Matemática financeira</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Matriz e determinante</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Números Complexos</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Probabilidade</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Produtos notáveis</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Progressões</div>
    </div>  
    <div class="submateria d-flex flex-column bd-highlight mb-3">
      <div class="submatText p-2 bd-highlight" onclick="telaProf()">Trigonometria</div>
    </div>  
</div>

<!--incluindo o footer da página-->
<?php include_once 'footer.php';?>