<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ab14f88510.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php
        include "includes/db_connetion.php";
        include_once "functions/booking.php ";  
        $category = $_GET['id'];
    ?>
    <div class="container row appHead">
        <div class="col-1 appIcon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div class="col-11 appIcon"> Book Appointment </div>
    </div>

    <div class="row topicWrapper">
        <div class="col-1 card-img cardImgWrapper"><img src="assets/s1.png" alt=""></div>
        <div class="col-10">
            Barbers Name
        </div>
    </div>
    <div>
        Select Time
    </div>
    <?php
        $database = new dbController();

        $db = $database->connectDB();
        $sql1 = "select time, booked from booking where booked is FALSE ;";
        
        $result = $database->runQuery($sql1);
        if (empty($result)) {
            echo '
            <div class="container">
                Sorry We are FUlly Booked, Please contact us
            </div>';
        }
        else{
            for($i=0;$i<sizeof($result);$i++){
                $time = $result[$i]['time'];
                echo '
                <div class="row timeWrapper" id="timechoose" value='.$time.'>
                    <div class="col-1"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                    <div class="col-9">'.$time.'</div>
                </div>';
                if(empty($_GET['data'])){
                    $_GET['data']="09:00:00.000000";
                }  
                
            }
        }  

    ?>
    <?php
        echo "<script>console.log('".$_GET['data']."')</script>"; 
    ?>

    <div>
        <a href=<?php 
            echo "checkout.php?id=".$id."&data=".$_GET['data'];
         ?> class="btn btn-block bookApp">Checkout</a>
    </div>
    <?php
    include_once "includes/footer.php";
    ?>
    <script>
        
        $('.timeWrapper').on('click', function() {
            $('.timeWrapper').removeClass("btn-success");
            $(this).toggleClass("btn-success");
            var value = $(this).text();
            value= value.trim();  
            console.log(value);  
            let uri = document.location.href;
            let key = "data";
            var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
            var separator = uri.indexOf('?') !== -1 ? "&" : "?";
            if (uri.match(re)) {
                uri = (uri.replace(re, '$1' + key + "=" + value + '$2'));   
            }
            else {
                uri = (uri + separator + key + "=" + value);
            }
            history.pushState({}, null, uri);
            console.log(uri);
        
        });   
    </script>
</body>

</html>