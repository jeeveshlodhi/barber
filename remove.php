<?php
    include "includes/session.php";
    include "includes/db_connetion.php";
        $sessionObj = Session::getInstance();
    $database = new dbController();
    $db = $database->connectDB();
    if($sessionObj == TRUE){    
        $id = $_GET['data'];
        $sql = "Delete from booking where booking_id = '$id';";
        $result = $database->runQuery($sql);
        mysqli_close($db);
        
    }
    
    header("location:index.php");

?>
