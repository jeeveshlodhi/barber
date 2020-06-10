<?php

include_once 'includes/db_connetion.php';
include_once 'includes/session.php';
//if (isset($_POST["addtocart"])) {
    $sessionObj = Session::getInstance();
    if($sessionObj == TRUE){    
        $sessionObj->deleteProduct();  
    }
//}
?>
