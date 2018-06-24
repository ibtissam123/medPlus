<?php $h_title="A Propos"; ?>
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
            <div class="row welcome text-center">
              <div class="col-12">
                  <h1 class="display-4 text-uppercase">Mes Commandes</h1>
              </div>
              <div class="table-responsive">
              <table class="table">
                  <tr><th colspan="5"><h3>Mes Produits</h3></th></tr>
              <tr>
                   <th width="40%">Nom Du Produit</th>
                   <th width="25%">Quantité</th>
                   <th width="20%">Prix</th>
                   <th width="20%">Prix Total</th>
              </tr>
              <?php
              include '../inc/dbh.inc.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM products p, products_cmd pc, cmd c WHERE p.id = pc.id_product AND c.id_cmd = pc.id_cmd and c.id_client = $id and pc.checked = 0";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);

              if($resultCheck > 0){
                $total=0;
                while($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
                 <td><?php echo $row['title']; ?></td>
                 <td><?php echo $row['quantity']; ?></td>
                 <td><?php echo $row['price']; ?> MAD</td>
                 <td><?php echo number_format($row['quantity'] * (float)$row['price'], 2); ?> MAD</td>
              </tr>
              <?php
                    $total = (float)$total + ($row['quantity'] *(float)$row['price']);
                  }
              ?>
              <tr>
                   <td colspan="3" align="right">Total</td>
                   <td align="right"><?php echo number_format((float)$total, 2); ?> MAD</td>
                   <td></td>
              </tr>
              <?php
          }
              ?>
              </table>
               </div>
              <hr>
            </div>
          </div>
    </body>
</html>
