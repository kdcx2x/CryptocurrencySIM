<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<!--===============================================================================================-->
<style>
  .logo{
    position: absolute;
    left: 1%;
    top: -6%;
    width: 28%;
  }
  .container-login100{
    background: #6f5efe;
  }
  #display{
    position: relative;
    top: 24%;
    left: 50%;
    color: #ec4c4c;
    font-size: 20px;
  }
</style>
</head>
<body>
  <a href="login.php">
  <img class="logo" src="images/logo28.png">
</a>
  <div class="limiter">

		<div class="container-login100" >

			<div class="wrap-login100 validate-form">
				<form class="login100-form" name="register" autocomplete="off" onsubmit="verify()">
					<span class="login100-form-title p-b-26">
						Register
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email"required>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input">
            <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass"required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
          <div class="wrap-input100 validate-input">
            <button class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</button>
						<input class="input100" type="password" name="verify"required>
						<span class="focus-input100" data-placeholder="Verify Password"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<span class="login100-form-btn" onclick="verify()">
								Next
							</span>
						</div>
					</div>
        </form>

					<!-- <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<span class="login100-form-btn" onclick="verify()">
								Next
							</span>
						</div>
					</div> -->

					<div class="text-center p-t-115">
						<span class="txt1">
							Already Have a Account?
						</span>

						<a class="txt2" href="login.php">
							Login
						</a>
					</div>

			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
  <script>
  function verify(){
    var email=document.forms["register"]["email"].value;
    var password=document.forms["register"]["pass"].value;
    var verify=document.forms["register"]["verify"].value;
    alert(email);
    alert(password);
    alert(verify);
    //alert("mkk");
		if (email==="" || password===""|| verify===""){

			alert("kelsey");
			//document.forms["register"].submit();
		}
    $.post("regs_handle.php",{"email":email,"password":pass,"verify":verify})
    .done(function(data){
      alert("in");
    //   if(data!="good"){
    //   $('#display').html(data);
		// 	alert("hello");
    // }else {
    //   alert("kk");
    //   // window.location = "SelectCryptocurrencies.php";
    // }
    })
    .fail(function() {
       alert( "error" );
    });
  }
</script>

</body>
</html>
