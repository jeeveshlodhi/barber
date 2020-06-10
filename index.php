<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://kit.fontawesome.com/ab14f88510.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include "includes/db_connetion.php";
        include_once "includes/header.php";
    ?>
    <div class="container bannerWrapper">
        <img src="assets/banner1.jpg" alt="" width="600">
    </div>
    <div class="container bannerWrapper">
        <img src="assets/banner2.png" alt="" width="600">
    </div>
    <div class="container row">
        <div class="col-2">Services : </div>
        <div class="col-3">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Men</label>
        </div>
        <div class="col-4">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1">Women</label><br>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="column">
                <a href="product.php?id=shave"><img src="assets/shave.png"></a>
                <a href="product.php?id=hair-cut"><img src="assets/hair-cut.png"></a>
            </div>
            <div class="column">
                <a href="product.php?id=facial"><img src="assets/s1.png"></a>
                <a href="product.php?id=waxing"><img src="assets/s2.png"></a>
            </div>
            <div class="column">
                <a href="product.php?id=hair-color"><img src="assets/grooming.png"></a>
                <a href="product.php?id=others"><img src="assets/s3.png"></a>
            </div>
        </div>
    </div>
    
    <?php
        include_once "includes/footer.php";
    ?>
</body>
</html> 