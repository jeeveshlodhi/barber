<?php

function checkLogin(){
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        return $_SESSION['name'];
    }
    else{
        return 'LogIn';
    }
}


