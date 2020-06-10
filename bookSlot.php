<?php
    //echo "<script>console.log('Hello');</script>";
    include "includes/session.php";
    include "includes/db_connetion.php";
    if (isset($_POST)) {
        $category = $_POST['res_id'];
        $reservation_name = $_POST['reservation_name'];
        $reservation_phone = $_POST['reservation_phone'];
        $reservation_date = $_POST['reservation_date'];
        $reservation_time = $_POST['reservation_time'];
        $sessionObj = Session::getInstance();
        $database = new dbController();
        $db = $database->connectDB();
        if($sessionObj == TRUE){    
            $email = $sessionObj->__get('email');
            $sql = "select time, date from booking where time = '$reservation_time' and date = '$reservation_date'";
            $result = $database->runQuery($sql);
            if(empty($result)){
                $currentDate = date("Y-m-d h:i:sa");
                $query = "insert into booking  values('','$category','$reservation_name','$email','$reservation_time','$reservation_date', '$reservation_phone','$currentDate');";
                $database->exec($query);
                echo "Reservation Done";
                trim($category);
                $encodedTime = urlencode($currentDate);
                header("location:checkout.php?id=$encodedTime");
                
            }
            else{   
                echo "There is already a booking please select another slot";
            }


            mysqli_close($db);
            
        }
    }



?>
