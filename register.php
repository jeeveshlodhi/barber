<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://kit.fontawesome.com/ab14f88510.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
        include "functions/userRegistration.php";
    ?>
    <div class="container row appHead">
        <div class="col-1 appIcon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div class="col-11 appIcon"> Register </div>
    </div>
    <?php
    if (! empty($response)) {
    ?>
    <div id="response" class="<?php echo $response["type"]; ?>">
    <div class="toast btn-success toastWrapper" role="alert"  id="myToast">
        <div class="toast-header"><?php echo $response["message"]; ?></div>
    </div>
        
    </div>
    <?php
        }
    ?> 
    <div class="container">
        <div class="card bg-light cardWrapper">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>
                <p>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                
                <form  method="post" onsubmit="return signupvalidation()">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input id="name" name="name" placeholder="Full Name" type="text" class="form-control" required class="validate" autocomplete="off">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input id="email" name="email" placeholder="Email" type="email" class="form-control" required class="validate" autocomplete="off">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>

                        <input id="phone" name="phone" type="tel" class="form-control" placeholder="Phone number" >
                    </div> <!-- form-group// -->
 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input id="password" name="password" placeholder="Password" type="password" class="form-control" required class="validate" autocomplete="off">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control" type="password" required class="validate" autocomplete="off">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" name="submitup" class="btn btn-primary btn-block"> Create Account </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->

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
	function signupvalidation() {   
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var password = document.getElementById('password').value;
		var confirm_pasword = document.getElementById('confirm_password').value;
		var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
		var valid = true;

		if (name == "") {
			valid = false;
			document.getElementById('name_error').innerHTML = "required.";
		}

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
		if (confirm_pasword == "") {
			valid = false;
			document.getElementById('confirm_password_error').innerHTML = "required.";
		}

		if (password != confirm_pasword) {
			valid = false;
			document.getElementById('confirm_password_error').innerHTML = "Both passwords must be same.";
		}

		return valid;
	}
</script>
</body>

</html>