<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/appointment.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ab14f88510.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container row appHead">
        <div class="col-1 appIcon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div class="col-10 appIcon"> Appointments </div>
    </div>
    <?php
        include "includes/session.php";
        include "includes/db_connetion.php";
        $sessionObj = Session::getInstance();
        $database = new dbController();
        $db = $database->connectDB();
        if($_SESSION['loggedin']==false){
            header('location:login.php?data=loginFirst');
        }
        if($sessionObj == TRUE){    
            $email = $sessionObj->__get('email');
            $sql = "select booking_id,category,name,email,time,date,phone,booking_time,product_price,product_img from booking , price where email = '$email' and product_name = category;";
            $result = $database->runQuery($sql);
            if(empty($result)){
    ?>  
        <div class="container" style="width: fit-content;margin: 0 auto;">
            <p>Sorry , No bookings Yet!</p>
        </div>

            <?php } 
            else{
                for($i=0;$i<count($result);$i++){
                    
                ?>
            
    <div class="container appWrapper">
        <div class="row">
            <div class="imgWrapper col-1">
                <img src=<?php echo "assets/".$result[$i]['product_img']; ?> alt="">
            </div>
            <div class="col-6">
                <div class="shop">Barber's Name</div>
                <h6><?php echo $result[$i]['email'] ?></h6>
                <div>Date : <?php echo $result[$i]['date'] ?></div>
                <div>Time : <?php echo $result[$i]['time'] ?></div>
            </div>
            <div class="col-2 priceWrapper">
                   <h2> ₹<?php echo $result[$i]['product_price'] ?></h2>
            </div>
        </div>
        <div class="btn" style="width: 100%;">
            <form action=<?php echo "remove.php?data=".$result[$i]['booking_id'];?> method="post">
                <button type="submit" class="btn btn-danger">Remove</button>
            </form>
        </div>

    </div>
    
    
    <?php
                }
            }   
        }
    include_once "includes/footer.php";
    ?>
</body>

</html>