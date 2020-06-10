<?php
    include_once 'includes/session.php';
    if(session_status() == PHP_SESSION_NONE){
        $sessionObj = Session::getInstance();
    }
?>
<div class="container " style="height: 50px;"></div>
<div class="container row footerWrapper" id="bottom">
    <a href="index.php"><div class="col tabWrapper"><i class="fa fa-home" aria-hidden="true"></i></div></a>
    <a href="appointment.php"><div class="col tabWrapper"><i class="fa fa-calendar" aria-hidden="true"></i></div></a>
    <?php
        if($sessionObj->__get('loggedin')==false){
            echo '<a href="login.php"><div class="col tabWrapper"><i class="fa fa-user" aria-hidden="true"></i></div></a>';
        }
        else{
            echo '<a href="account.php"><div class="col tabWrapper"><i class="fa fa-user" aria-hidden="true"></i></div></a>';
        }
    ?>
</div>