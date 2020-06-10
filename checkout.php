<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ab14f88510.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        include "includes/session.php";
        include "includes/db_connetion.php";    
        $sessionObj = Session::getInstance();
        $database = new dbController();
        $db = $database->connectDB();
        if($sessionObj == true){    
            $id = $_GET['id'];
            $id = urldecode($id);
            $email = $sessionObj->__get('email');
            $sql = "select category,name,email,time, date,phone,booking_time, product_price from booking, price where booking_time = '$id' and product_name = category;";
            $result = $database->runQuery($sql);   
            if(empty($result)){
                header("location:index.php");
            }

    ?>
    <div class="container row appHead">
        <div class="col-1 appIcon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div class="col-11 appIcon"> Checkout </div>
    </div>
    <div class="container row">
        <div class="imgWrapper"><img src="assets/b6.jpg" alt=""></div>
        <div class="col-8 container descWrapper">
            <p>Barbers Name</p>
            <p>Category : <?php echo $result[0]['category'];?></p>
            <p><?php echo $result[0]['time']; ?></p>
            <p><?php echo $result[0]['date'] ?></p>
            <p style="font-size: 25px; padding:8px;">₹ <?php echo $result[0]['product_price']; ?></p>
        </div>
        <div class="col-1" style="font-size: 25px; padding-top: 30px;"><i class="fa fa-trash" aria-hidden="true"></i></div>
    </div>
    <div style="bottom:0px;">
        <div>Order Summary</div>
        <div class="row">
            <div class="col-5" style="text-align:left;">Total Price</div>
            <div class="col-5" style="text-align:right;">₹<?php echo $result[0]['product_price']; ?></div>
        </div>
        <div class="row">
            <div class="col-5" style="text-align:left;">Discount</div>
            <div class="col-5" style="text-align:right;">₹0</div>
        </div>
        <hr>
        <div class="row">
            <div class="col-5" style="text-align:left;">You Need To Pay</div>
            <div class="col-5" style="text-align:right;">₹<?php echo $result[0]['product_price']; ?></div>
        </div>
    </div>
    <div>
        <a href="appointment.php" class="btn btn-block bookApp">Checkout</a>
    </div>
    <?php
        }
        mysqli_close($db);
    include_once "includes/footer.php";
    ?>
</body>

</html>