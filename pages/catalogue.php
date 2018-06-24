<?php // Se connecter avec le serveur
$objConnect = mysqli_connect("localhost","root","","medplus") or die(mysql_error());?>

<?php $h_title="Catalogue"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/header.php';
?>

<?php
$product_ids = array();

if(filter_input(INPUT_POST, 'add')){
    if(isset($_SESSION['shopping_cart'])){

        $count = count($_SESSION['shopping_cart']);

        $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){
        $_SESSION['shopping_cart'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );
        }
        else {
            for ($i = 0; $i < count($product_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }

    }
    else {
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

//pre_r($_SESSION['shopping_cart']);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
} ?>
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
            <div class="row welcome padding">
              <div class="col-12">
                  <h1 class="display-4 text-uppercase text-center">Catalogue</h1>
              </div>
              <hr>
                <div class="container-fluid padding">
                    <div class="row padding">
                <?php $strSQL = "SELECT * FROM products";
                    $objQuery = mysqli_query($objConnect,$strSQL) or die ("Error Query [".$strSQL."]");

                    while($objResult = mysqli_fetch_assoc($objQuery))
                {

                        ?>
                <div class="col-xs-12 col-sm-6 col-md-4 text-center padding">
                    <div class="card" style="width: 18rem;">
                      <form method="post" action="catalogue.php?action=add&id=<?= $objResult["id"]; ?>">
                      <div class="card-body">
                        <?php echo '<img class="card-img-top" alt="Card image cap" src="data:image/jpeg;base64,' .base64_encode($objResult['image']).'"'?>
                        <h3 class="card-title"> <?php echo $objResult["title"]; ?> </h3>
                        <h4><?php echo number_format($objResult["price"],2); ?> MAD</h4>
                        <input type="hidden" name="name" value="<?php echo $objResult['title']; ?>" />
                        <input type="hidden" name="price" value="<?php echo number_format($objResult["price"],2); ?>" />
                        <input type="text" class="form-control" name="quantity" placeholder="Quantité" value="1">
                        <input type="submit" name="add" style="margin-top:5px;" class="btn btn-primary" value="Ajouter au panier" />
                      </div>
                      </form>
                    </div>
                </div>

                <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/footer.php';?>
