<?php
  session_start();
  session_unset();

  $erros = array(); 
  include_once 'conexao.php'; 

  if (isset($_POST['btnEntrar'])){
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    $sql="SELECT * FROM alunos WHERE email='$email'";
    $resultado = mysqli_query($connect,$sql);
    $dados = mysqli_fetch_array($resultado);

    // Sanitização do Email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $_SESSION['email'] = $email;

    //validação de email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){ 
      $erros[] = "Email inválido!";
    } else {
      $email = preg_replace('/[^a-zA-Z0-9@.\-_]/', '', $email);
    } 

    $senha_descrip = base64_decode($dados['senha']);

    //validação de senha
    if($senha != $senha_descrip) {		  
      $erros[] = "Senha incorreta!";
    }

    if (empty($erros)){
      header('Location: ./menuBootstrap.php');
    } 
  }

  // inserindo o header da pagina
  include_once 'headerLogin.php';
?>


<!-- referenciando o css e js -->
<link href="css/login.css" rel="stylesheet">
<script type="text/javascript" src="js/login.js" defer></script>


  <!--Conteudo da pagina-->
  <div class="container my-3">
    <div class="d-flex justify-content-center flex-column flex-sm-row ">
      <!--Div com a logo e com um texto de apresentação-->
      <div class="divApresentacao col-sm-6 col-12 bg-txt p-1">
        <img src="img/logoBranca.png" class="img-logo"> <br>

        <p class="pTxt"> Bem-vindo(a) aooooo TeachHelp! Aqui, você encontra uma ampla seleção de professores de todas as áreas para ajudá-lo a 
            alcançar seus objetivos acadêmicos e profissionais. <br> <br>
            Todos os nossos professores são verificados e avaliados pelos próprios alunos, 
            garantindo que você tenha acesso a uma educação de qualidade. <br> <br>
            Não perca mais tempo pesquisando por aí. Com a TeachHelp,
            você pode encontrar o professor perfeito com facilidade e praticidade. 
            Comece hoje mesmo a melhorar seu aprendizado e desfrute de todos os benefícios que a educação pode oferecer!</p>
        <br>
      </div>

      <!--Div com um formulário para login-->
        <form action="index.php" method="POST" class="col-sm-6 col-12 bg-form">
          <div class="form-group p-4">
            <p class="fw-bold fs-3">Login</p>

            <label for="email">Email:</label>
            <input type="email" name="inputEmail" class="form-control-sm form-control" id="email">

            <label for="senha">Senha:</label>
            <input type="password" name="inputSenha" class="form-control-sm form-control" id="senha">

            <br>
            <button type="submit" name="btnEntrar" class="btn btn-info" >Entrar</button>
            <button type="button" name="btnCad" onclick="telaCadastro()" class="btn btn-info" >Não possuo cadastro</button>
            
            <?php
            //exibindo os erros do formulario caso existam
            if (!empty($erros)){    
              foreach($erros as $erro):
                echo "<li> $erro </li>";
              endforeach;
            } 
            ?>
          </div> 
        </form>  
      </div>
    </div>
  </div>

  

</body>

</html> 
