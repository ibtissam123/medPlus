<?php
// Se connecter avec le serveur
$objConnect = mysqli_connect("localhost","root","","medplus") or die(mysql_error());
session_start();
?>
<!Doctype html>
<html>
    <head>
        <!-- Linking Bootstraps CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

        <!-- Linking CSS File & Font & Icons -->
        <link rel="stylesheet" href="../style/css.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900|Asap:400,700" rel="stylesheet">
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
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid header">
              <div class="containerlogo">
                <a class="logo" href="../pages/index.php"><i class="fas fa-file-medical fa-fw"></i>Med </a>
                <a class="logo2" href="../pages/index.php">Plus</a>
              </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/index.php"><i class="fas fa-home fa-fw"></i> Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/catalogue.php"><i class="fas fa-cart-plus fa-fw"></i> Nos Produits</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/about.php"><i class="fas fa-info fa-fw"></i> À Propos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/contact.php"><i class="fas fa-envelope-open fa-fw"></i> Nous Contacter</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../pages/myaccount.php"><i class="fas fa-user fa-fw"></i> Mon Compte</a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" href="../pages/panier.php"><i class="fas fa-shopping-cart fa-fw"></i> Panier</a>
                    </li>
                      <li class="nav-item">
                          <form action="../inc/logout.inc.php" method="POST">
                            <button type="submit" class="btn btn-danger" name="submit" >Se Deconnecter</button>
                        </form>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
