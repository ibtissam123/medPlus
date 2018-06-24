<?php $h_title="Nous Contacter"; ?>
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
        <div class="container-fluid padding">
            <div class="row welcome">
              <div class="col-12">
                  <h1 class="display-4 text-uppercase text-center">Nous Contacter</h1>
              </div>
              <hr>
                <div class="col-12 text-center padding">
                <a><i class="fas fa-phone"> </i> 666-666-666</a>
                <a><i class="fab fa-skype"> </i> idskype</a>
                <a><i class="fas fa-envelope"> </i> email@myemail.com</a>
                </div>
                <hr class="my-4">
                <div class="col-12">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Adresse Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@myemail.com">
                         </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Prenom</label>
                                    <input type="text" class="form-control" placeholder="Prenom">
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">Nom</label>
                                    <input type="text" class="form-control" placeholder="Nom">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Sujet</label>
                                    <input type="text" class="form-control" placeholder="Sujet">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ecrire Message Ici"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-success">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/footer.php';?>
