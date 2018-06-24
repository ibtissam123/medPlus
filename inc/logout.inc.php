<?php

if(isset($_POST['submit'])){
    session_unset();
    session_destroy();
    $_SESSION['shopping_cart'] = array();
    header("Location: ../login.php");
    exit();
}
