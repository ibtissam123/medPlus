<?php
if(isset($_SESSION)){
    header("Location: pages/index.php");
}
else{
session_start();

if(isset($_POST['submit'])){
    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //CHECK INPUT EMPTY
    if(empty($uid) || empty($pwd)){
        header("Location: ../login.php?login=empty");
        exit();
    }
    else
    {
        $sql = " SELECT * FROM client where ndc='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck < 1){
            $error= true;
            exit();
        }

        else{
        if($row = mysqli_fetch_assoc($result)){
                    $_SESSION['uid'] = $row['ndc'];
                    $_SESSION['pwd'] = $row['mdp'];
                    $_SESSION['id'] = $row['id_client'];
                    $_SESSION['last_name'] = $row['nom_client'];
                    $_SESSION['first_name'] = $row['prenom_client'];
                    $_SESSION['age'] = $row['age_client'];
                    $_SESSION['adress'] = $row['adresse_client'];
                    $_SESSION['id_phar'] = $row['id_pharmacien'];
                    header("Location: ../pages/index.php?login=success");
                    exit();
                }
            }
        }
    }
else{
    $error = true;
    exit();
}
}
