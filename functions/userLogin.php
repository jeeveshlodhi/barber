<?php
include_once 'includes/db_connetion.php';
include_once 'includes/session.php';
if (isset($_POST["submit"])) {
    $sessionObj = Session::getInstance();
    
    if($sessionObj == TRUE){    
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $database = new dbController();
        
        $db = $database->connectDB();
        
        $sql = "select name, email, password from user where email = '$email'";
        $result = $database->runQuery($sql);
        if(empty($result)){
            echo '<div class="toast btn-success toastWrapper" role="alert"  id="myToast">
            <div class="toast-header">Wrong E-mail</div>
            <div class="toast-body">Please Register first</div>
                
        </div>';
        }
        else if($password == $result[0]['password']){
            $name = $result[0]['name'];
            $email = $result[0]['email'];
            $sessionObj -> __set('name',$name );
            $sessionObj -> __set('email',$email );
            $sessionObj -> __set('loggedin', true);
            mysqli_close($db);
            header('location: index.php');   
        }
        else{
            echo '<div class="toast btn-success toastWrapper" role="alert"  id="myToast">
            <div class="toast-header">Wrong Password</div>
            <div class="toast-body">Click on Forget Password to change your password</div>
                
        </div>';
        }

    }

}
?>