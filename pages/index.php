<?php $h_title="Med Plus | Accueil"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/header.php';?>
<!Doctype html>
<html>

  <head>
      <!-- Linking Bootstraps CSS-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

      <!-- Linking CSS File & Font & Icons-->
      <link rel="stylesheet" href="../style/css.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title> <?php print $h_title ?> </title>
  </head>

  <body>
    <!--- Image Slider --->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../style/imgs/slide1.png" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h1 class="display-2">Med Plus</h1>
            <h3>Vos Médicaments Chez Nous.</h3>
            <p>Le Site de Pharmacie Le Plus Large Du Monde !</p>
            <button type="button" class="btn btn-outline-light btn-lg">À PROPOS</button>
            <button type="button" class="btn btn-primary btn-lg">NOUS CONTACTER</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../style/imgs/slide2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../style/imgs/slide3.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!--- Jumbotron -->
    <div class="jumbotron">
      <p class="lead">Plein de produits pharmaceutique pour vous sur notre Catalogue.</p>
      <p>Jetez un Oeil</p>
      <a class="btn btn-outline-secondary btn-lg" href="#" role="button">CATALOGUE</a>
    </div>
  </body>


  <!--- Welcome Section -->
  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
          <h1 class="display-4">Bienvenue !</h1>
      </div>

      <hr>
      <div class="col-12">
        <p class="lead">Cher Client</p>
        <p class="lead">Med Plus, le plus large site pharmaceutique fait pour vous, naviguer et commander vos produits, vous les recevez dans les bref delais.</p>
      </div>
    </div>
    </div>
  <hr class="my-4">

  <!-- Three Column Section -->
  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <i class="fas fa-heart"></i>
        <h3>Fait Par Amour</h3>
        <p>Projet Fait par amour, par nos experts pour mettre en place des services imbattables qui seront utile a nos clients.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-bolt"></i>
        <h3>Rapide</h3>
        <p>La rapidité et la fléxibilité de notre sérvice c'est pour votre bien, Faites vos commandes et c'est a nous de continuer.</p>
      </div>
      <div class="col-md-4">
        <i class="fab fa-uikit"></i>
        <h3>Unique</h3>
        <p>Nous avons pris l'initiative pour être à l'égard de nos clients.</p>
      </div>
    </div>
    <hr class="my-4">
  </div>

  <!--- Image Text Section --->
  <div class="container-fluid imagesection padding">
    <div class="row padding">
      <div class="col-md-12 col-lg-6">
        <h2>Nous Vous Accompagnons...</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="about.php" class="btn btn-primary">Plus D'infomations</a>
      </div>
      <div class="col-lg-6">
        <img src="../style/imgs/followyou.jpg" alt="followyou" class="img-fluid">
      </div>
    </div>
  </div>
  <hr class="my-4">

    <!--- Notre Equipe --->
    <div Class="Container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Notre Equipe</h1>
            </div>
            <hr>
        </div>
    </div>

    <!--- cartes --->
    <div class="container-fluid padding">
        <div class="row padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../style/imgs/team1.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nom Prenom</h5>
        <h6><b>PROFESSION</b></h6>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
        </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../style/imgs/team3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nom Prenom</h5>
        <h6><b>PROFESSION</b></h6>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
        </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../style/imgs/team2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Nom Prenom</h5>
        <h6><b>PROFESSION</b></h6>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
        </div>
    </div>
    </div>
    <hr class="my-4">

  <!--- Image Text Section 2 --->
  <div class="container-fluid imagesection padding">
    <div class="row padding">
      <div class="col-lg-6">
        <img src="../style/imgs/products.jpg" alt="catalogue" class="img-fluid">
      </div>
      <div class="col-md-12 col-lg-6">
        <h2>Large Catalogue ...</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
  <hr class="my-4">

  <!--- Suivez-Nous Section --->
  <div class="container-fluid padding">
    <div class="row text-center padding">
      <div class="col-12">
        <h2>Suivez Nous !</h2>
      </div>
      <div class="col-12 social padding">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
</html>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/footer.php';?>
