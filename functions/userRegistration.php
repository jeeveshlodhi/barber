<?php

if (isset($_POST["submitup"])) {
    include_once 'includes/db_connetion.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);

    $database = new dbController();
    
    $db = $database->connectDB();
    $sql1 = "select email from user where email='$email'";
    
    $result = $database->runQuery($sql1);
    
    if (empty($result)) {
        $sql = "insert into user (name, phone, email, password) values ('$name',$phone,'$email','$password')";
        
        $database->exec($sql);
        mysqli_close($db);
        $response = array(
            "type" => "success",
            "message" => "You have registered successfully, Now Login"
        );
    } else {
        $response = array(
            "type" => "error",
            "message" => "Email already in use."
        );
    }
}
?>