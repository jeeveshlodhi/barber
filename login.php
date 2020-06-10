<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://kit.fontawesome.com/ab14f88510.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <?php
        include 'functions/userLogin.php';
    ?>
    
    <div class="container row appHead">
        <div class="col-1 appIcon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div class="col-11 appIcon"> Login </div>
    </div>
    <?php
    if(!empty($_GET['data'])){
        $data = $_GET['data'];
        if($data == 'loginFirst'){
            echo '<div class="toast btn-success toastWrapper" role="alert"  id="myToast">
            <div class="toast-header">Log In First</div>
                
        </div>';
        }
    }
    ?>
    <?php
        
    ?>


    <div id="logreg-forms">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR </p>
            <input id="email" name="email" class="form-control" placeholder="E-mail" type="email" required class="validate" autocomplete="off" >
            <input id="password" name="password" class="form-control" placeholder="Password" type="password" required class="validate" autocomplete="off">

            <button class="btn btn-success btn-block" type="submit" name="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>
            <p>Don't have an account!</p>
            <a href="register.php"><p>Click here to register</p></a>

        </form>

        <form action="/reset/password/" class="form-reset">
            <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
        </form>

        

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/signin.js"></script>
    <?php
    include_once "includes/footer.php"
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
                $(".toastWrapper").toast('show');
        });
	function loginvalidation() {

		var email = document.getElementById('username').value;
		var password = document.getElementById('password').value;

		var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
		var valid = true;

		if (email == "") {
			valid = false;
			document.getElementById('email_error').innerHTML = "required.";
		} else {
			if (!emailRegex.test(email)) {
				valid = false;
				document.getElementById('email_error').innerHTML = "invalid.";
			}
		}

		if (password == "") {
			valid = false;
			document.getElementById('password_error').innerHTML = "required.";
		}
		return valid;
	}
</script>
</body>

</html>