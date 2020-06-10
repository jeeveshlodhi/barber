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
        if(empty($_GET['id'])){
            header("location:index.php");
        }
    ?>

    <div class="container row appHead">
        <div class="col-1 appIcon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div class="col-11 appIcon"> Book Appointment </div>
    </div>
    <div class="row topicWrapper">
        <div class="col-1 card-img cardImgWrapper"><img src="assets/s1.png" alt=""></div>
        <div class="col-9">
           <h2> Barbers Name</h2>
        </div>
    </div>
    <form action="bookSlot.php" method="post" class="formWrapper">
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="reservation_name" class="form-control" placeholder="Your Name" required="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="reservation_phone" class="form-control" placeholder="Phone" required="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="">Date</label>
            <input type="date" name="reservation_date" class="form-control" placeholder="Date" required="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label for="">Time</label>
            <select name="reservation_time" class="form-control" placeholder="Time" required="">
                <option value="10:00am">10:00am</option>
                <option value="10:45am">10:45am</option>
                <option value="11:30am">11:30am</option>
                <option value="12:15pm">12:15pm</option>
                <option value="1:15pm">1:15pm</option>
                <option value="2:15pm">2:15pm</option>
                <option value="3:15pm">3:15pm</option>
                <option value="4:15pm">4:15pm</option>
                <option value="5:15pm">5:15pm</option>
                <option value="6:15pm">6:15pm</option>
                <option value="7:15pm">7:15pm</option>
                <option value="8:00pm">8:00pm</option>
                <option value="8:45pm">8:45pm</option>
                <option value="9:30pm">9:30pm</option>
            </select>
            </div>
        </div>
        
        <div class="col-md-12 mt-3">
            <div class="form-group" style="margin: 0 auto;width:fit-content;">
            <input type="hidden" name="res_id" value="<?php echo $_GET['id']; ?>">
            <input type="submit" name="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
            </div>
        </div>
        </div>
    </form>

    <?php
        include_once "includes/footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>