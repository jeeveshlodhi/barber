<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ab14f88510.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <?php
    include_once 'includes/db_connetion.php';
    include_once 'includes/session.php';
    $sessionObj = Session::getInstance();
    ?>
    <div class="container row appHead">
        <div class="col-1 appIcon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div class="col-10 appIcon"> My Account </div>
    </div>
        <div class="accountWrapper">
            <div class="profileImgWrapper">
                <img src="assets/b6.jpg" alt="">
            </div>
            <div class="contentWrapper">
                <?php
                $database = new dbController();
        
                $db = $database->connectDB();
                $sql = "select name, phone, email from user where email = '".$_SESSION['email']."';";
                $result = $database->runQuery($sql);
                if(!empty($result)){
                    
                ?>
                <div class="row">
                    <div class="column">Name : </div>
                    <div class="column"><?php echo $result[0]['name']; ?></div>
                </div>
                <div class="row">
                    <div class="column">E-mail :</div>
                    <div class="column"><?php echo $result[0]['email']; ?></div>
                </div>
                <div class="row">
                    <div class="column">Phone Number :</div>
                    <div class="column"><?php echo $result[0]['phone']; ?></div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="contentWrapper">
                <form action="logout.php" style="width: fit-content;margin-top:50px;">
                    <button type="submit" class="btn btn-success">Logout</button>
                </form>
            </div>

        </div>
    <?php
    include_once "includes/footer.php"
    ?>
</body>
</html>