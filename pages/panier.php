<?php $h_title="Panier"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/inc/header.php';?>
<?php
if(filter_input(INPUT_GET, 'action') == 'delete'){
    foreach($_SESSION['shopping_cart'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}


 ?>
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
            <div class="row welcome text-center">
              <div class="col-12">
                  <h1 class="display-4 text-uppercase">Mon Panier</h1>
              </div>

              <hr>
              <div class="table-responsive">
              <table class="table">
                  <tr><th colspan="5"><h3>Informations de commande</h3></th></tr>
              <tr>
                   <th width="40%">Nom Du Produit</th>
                   <th width="10%">Quantité</th>
                   <th width="20%">Prix</th>
                   <th width="15%">Prix Total</th>
                   <th width="5%">Action</th>
              </tr>
              <?php
              if(!empty($_SESSION['shopping_cart'])):

                   $total = 0;

                   foreach($_SESSION['shopping_cart'] as $key => $product):
              ?>
              <tr>
                 <td><?php echo $product['name']; ?></td>
                 <td><?php echo $product['quantity']; ?></td>
                 <td><?php echo $product['price']; ?> MAD</td>
                 <td><?php echo number_format($product['quantity'] * (float)$product['price'], 2); ?> MAD</td>
                 <td>
                     <a href="panier.php?action=delete&id=<?php echo $product['id']; ?>">
                          <div class="btn-danger">Supprimer</div>
                     </a>
                 </td>
              </tr>
              <?php
                    $total = (float)$total + ($product['quantity'] *(float)$product['price']);
                   endforeach;
              ?>
              <tr>
                   <td colspan="3" align="right">Total</td>
                   <td align="right"><?php echo number_format((float)$total, 2); ?> MAD</td>
                   <td></td>
              </tr>
              <tr>
                  <td colspan="5">
                   <?php
                      if (isset($_SESSION['shopping_cart'])):
                      if (count($_SESSION['shopping_cart']) > 0):
                   ?>
                      <a href="panier.php?action=save" class="btn btn-primary">Commander maintenant</a>
                   <?php endif; endif; ?>
                  </td>
              </tr>
              <?php
              endif;
                if(filter_input(INPUT_GET, 'action') == 'save'){

              	include '../inc/dbh.inc.php';

                $userid = $_SESSION['id'];
                //inserting a new cmd column
                $sql = "INSERT INTO cmd(id_client) values($userid)";
              	mysqli_query($conn, $sql);

                //selecting last id from cmd table
              	$sql2 = "SELECT * FROM cmd ORDER BY id_cmd DESC LIMIT 1";
              	$result2 = mysqli_query($conn, $sql2);
                $resultCheck = mysqli_num_rows($result2);
                if($resultCheck >= 1){
                if($row = mysqli_fetch_assoc($result2)){
                  $idcmd = $row['id_cmd'];
                  foreach($_SESSION['shopping_cart'] as $key => $product){
                  $idproduct = $product['id'];
                  $quantity = $product['quantity'];
                  echo 'trash';
                	mysqli_query($conn, "INSERT INTO products_cmd (id_cmd,id_product,quantity) values($idcmd,$idproduct,$quantity)");
                }
                }
              }
              else{
                echo 'error';
              }

              }
              ?>
              </table>
               </div>
            </div>
        </div>
    </body>
</html>
