<?php
include_once 'includes/session.php';

function addtocart($itemID){
    $sessionObj = Session::getInstance();
    if($sessionObj == TRUE){    
        $sessionObj->addProduct($itemID); 
    }
}

?>