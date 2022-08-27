<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<!-- Para se ajustar a largura do dispositivo-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS --> <!--rel=folha de estilo--> <!-- integrity=criptografia-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
	 <!-- MDB-->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

	 <link rel ="stylesheet" type="text/css" href="css/estilo.css">
	 
	 <!-- Para colocar fotinho na aba do navegador-->
	 <link rel="icon" href="img/Icone3.png">
	 
   <!--Título da aba-->
    <title>Eletro Tech</title>
  </head>

<body>
          <!--Título do ínicio da página-->
         <h1>Eletrônicos</h1>
	       

		   <!--A tag <div> serve para alterar o estilo em partes específicas da página e posicionar objetos.-->
	
	       <!-- início do menu de navegação -->
	   
		
	     <!-- Inicio da NAVBAR-->
          
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"><img src="img/Icone7.png"  alt="" width="50" height="50"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="pesquisar" placeholder="pesquisar" aria-label="pesquisar">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
     
     <!-- fim da NAVBAR -->
	 
	 
	  <!--Formulário-->
        <form id="form1" name="form1" method="post" action="cookie.php">
            <label>Selecione a categoria: </label>
              <select name="eletronicosSelect">
   
                <option value="notebook">Notebooks</option>
                <option value="celular">Celulares</option>
                <option value="videogame">Video-games</option>
              </select> <input type="submit" name="Submit" value="Aplicar" />
        </form>


<!--Inicio do PHP-->
<?php


    if (isset($_COOKIE['selectCookie'])){
         $nome = $_COOKIE['selectCookie'];

  if($nome == "notebook"){
    echo("   
    
        <div class='container'>
        <div class='row'>
        <div class='col'><img src='img/note1.jpg'class='img-fluid' alt='Imagem responsiva'>Notebook Dell: R$ 5.000</div>
        <div class='col'><img src='img/note2.jpg'class='img-fluid' alt='Imagem responsiva'>Notebook Apple 12: R$ 20.000</div>
        <div class='col'><img src='img/note3.jpg'class='img-fluid' alt='Imagem responsiva'>Notebook Carus: R$ 30.000</div>
        <div class='col'><img src='img/note4.jpg'class='img-fluid' alt='Imagem responsiva'>Notebook Apple 13: R$ 35.000</div>
        <div class='col'><img src='img/note5.jpg'class='img-fluid' alt='Imagem responsiva'>Notebook Universe: R$ R$ 25.000</div>
          </div>
        </div>
    </div>");

            
    } else if($nome == "celular"){
          echo("   
    
              <div class='container'>
              <div class='row'>
              <div class='col'><img src='img/celular1.jpg'class='img-fluid' alt='Imagem responsiva'>iPhone 13 PRO Max: R$ 13.000</div>
              <div class='col'><img src='img/celular2.jpg'class='img-fluid' alt='Imagem responsiva'>Future 10: R$ 8.512</div>
              <div class='col'><img src='img/celular3.jpg'class='img-fluid' alt='Imagem responsiva'>Flip 1: R$ 7.599</div>
              <div class='col'><img src='img/celular4.jpg'class='img-fluid' alt='Imagem responsiva'>Pands: R$ 11.000</div>
              <div class='col'><img src='img/celular5.jpg'class='img-fluid' alt='Imagem responsiva'>Golds: R$ 2.000</div>
                    </div>
                  </div>
              </div>");

        } else if ($nome =="videogame"){
          echo("   
    
              <div class='container'>
              <div class='row'>
              <div class='col'><img src='img/game1.jpg'class='img-fluid' alt='Imagem responsiva'>Playstation 5: R$ 4.500</div>
              <div class='col'><img src='img/game2.jpg'class='img-fluid' alt='Imagem responsiva'>xBox Green: R$ 4.399 </div>
              <div class='col'><img src='img/game3.jpg'class='img-fluid' alt='Imagem responsiva'>Nintendo: R$ 8.800</div>
              <div class='col'><img src='img/game4.jpg'class='img-fluid' alt='Imagem responsiva'>Atari: R$ 5.300</div>
              <div class='col'><img src='img/game5.jpg'class='img-fluid' alt='Imagem responsiva'>Sonic: R$ 3.000</div>
          </div>
        </div>
    </div>");
        }

      
     } else {
       
      $pic = array('note1.jpg','note2.jpg','note3.jpg','note4.jpg','note5.jpg','celular1.jpg','celular2.jpg','celular3.jpg','celular4.jpg','celular5.jpg','game1.jpg','game2.jpg','game3.jpg','game4.jpg','game5.jpg');  
      shuffle($pic); //Shuffle é usada para embaralhar ou randomizar a ordem dos elementos em um array// 

         for( $i = 0; $i < 15; $i++)  
            echo "<li style=\"display: inline;\"> 
                               <img src=\"$pic[$i]\" width=\"250\" height=\"250\"> 
                             </li>";  
    }

?>

  
  <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
	  <img src="img/Icone7.png"  alt="" width="50" height="50">
      <span>Informações sobre nós:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Eletro Tech
          </h6>
          <p>
           A Eletro Tech está comprometida a levar a melhor experiência de vendas a estudantes, educadores, profissionais criativos e consumidores do mundo todo através de nossa plataforma online com produtos inovadores e ao mesmo tempo vendendo produtos nostálgicos.
          </p> 
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Produtos
          </h6>
          <p>
            <a href="#!" class="text-reset">Notebooks</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Celulares</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Desktop</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Teclados</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Links Úteis
          </h6>
          <p>
            <a href="#!" class="text-reset">Preços</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Configurações</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Pedidos</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Ajuda</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contato
          </h6>
          <p><i class="fas fa-home me-3"></i> São Paulo, SP 10012, BR</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            eletrotech@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 11 95544-3399</p>
          <p><i class="fas fa-print me-3"></i> 11 8833-1213</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href=".">Eletrotech.com</a>
	<!--Bandeira do Brasil-->
	
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  </body>
</html>
