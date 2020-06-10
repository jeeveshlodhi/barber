<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://kit.fontawesome.com/ab14f88510.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include_once "includes/header.php";
        include_once 'includes/session.php';
        $sessionObj = Session::getInstance();
        $id = $_GET['id'];
        if($_SESSION['loggedin']==false){
            header('location:login.php?data=loginFirst');
        }
    ?>

    
    <div class="container bannerWrapper">
        <img src="assets/banner1.jpg" alt="" width="600">
    </div>
    <div class="container bannerWrapper">
        <img src="assets/banner2.png" alt="" width="600">
    </div>
    <div class="container">
        <div class="row ">
            <div class="column"><img src=<?php echo 'assets/'.$id.'/h1.jpg'; ?> alt=""><img src=<?php echo 'assets/'.$id.'/h4.jpg'; ?>  alt=""></div>
            <div class="column"><img src=<?php echo 'assets/'.$id.'/h2.jpg'; ?>  alt=""><img src=<?php echo 'assets/'.$id.'/h5.jpg'; ?>  alt=""></div>
            <div class="column"><img src=<?php echo 'assets/'.$id.'/h3.jpg'; ?>  alt=""><img src=<?php echo 'assets/'.$id.'/h6.jpg'; ?>  alt=""></div>
        </div>
    </div>

    <div class="btn" style="width:100%;">
        <a href=<?php echo 'book.php?id='.$id; ?> class="btn btn-block bookApp">Book an Appointment</a>
    </div>
    <?php
        include_once "includes/footer.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
                $(".toastWrapper").toast('show');
        });
    </script>
</body>
</html> 