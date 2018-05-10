<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="layout11.css">

	<style>
	@font-face {
		font-family: insightfront;
		src: url(fonts/ostrich-sans-master/OstrichSansInline-Italic.otf);
	}
	.site_container{
	margin-left: 40px;
	margin-right: 40px;
	margin-top: 40px;
	margin-bottom: 20px;
	padding: 0;
	border: 0;
	outline: 0;
	vertical-align: baseline;
	background: white;

	}
	.wrapper{
	  margin-top: -30px;
	}
/*******************login*******************************/
.logincont{
	position: absolute;
	    width: 437px;
	    height: 95%;
	    top: 2%;
	    left: 40%;
	    /* box-shadow: 14px 69px 300px -33px rgba(111,94,254,1); */
	    border-radius: 39px;
	    border: 6px double #5efe6f;
			background: white;
			background-image: url(images/skulls.png);
}
.logintitle{
	position: absolute;
	height: 81px;
	width: 100px;
	color: black;
	font-family: insightfront;
	font-size: 61px;
	left: 125px;
}
.input1{
	position: absolute;

    width: 277px;
    height: 177px;
    top: 244px;
    left: 95px;
}
input:focus{
	outline:none;

}
#email{
	position: relative;

    width: 98%;
    height: 43px;
    font-size: 29px;
    border: 0px;
		 background: transparent;
    /* border-bottom: 5px solid radial-gradient(#fe6f5e,#6f5efe,#5efe6f); */
}
#pass{
	position: relative;
	    margin-top: 11%;

    width: 98%;
    height: 43px;
    font-size: 29px;
    border: 0px;
		    background: transparent;
}
#verify{
	position: relative;
	margin-top: 11%;

    width: 98%;
    height: 43px;
    font-size: 29px;
    border: 0px;
		background: transparent;
}
#fname{
	position: relative;
	margin-top: 11%;

    width: 98%;
    height: 43px;
    font-size: 29px;
    border: 0px;
		background: transparent;
}
#lname{
	position: relative;
	margin-top: 11%;

    width: 98%;
    height: 43px;
    font-size: 29px;
    border: 0px;
		background: transparent;
}
#dob{
	position: relative;
	margin-top: 11%;

    width: 98%;
    height: 43px;
    font-size: 29px;
    border: 0px;
		background: transparent;
}
.sign{
	position: absolute;


    width: 250px;
    height: 50px;
    top: 93%;
    left: 18%;
    color: black;
    font-size: 18px;
    font-family: insightfront;
}
/**********buttons************************************/
.butto{
	position: absolute;
    top: 87%;
    height: 45px;
    width: 98px;

    left: 74%;
		align-items:center;
  justify-content:center;
	cursor: pointer;
}
a.bttn {
  color:#fe6f5e;
  text-decoration:none;
  -webkit-transition:0.3s all ease;
  transition:0.3s ease all;
}
  a.bttn:hover {
    color:#FFF;
  }
  a.bttn:focus {
    color:#FFF;
  }
	.bttn {
		font-size: 18px;
		    letter-spacing: 2px;
		    text-transform: uppercase;
		    display: inline-block;
		    text-align: center;
		    width: 103px;
		    font-weight: bold;
		    padding: 14px 0px;
		    border: 3px solid #fe6f5e;
		    border-radius: 2px;
		    position: relative;
		    box-shadow: 0 2px 10px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.1);
		    border-radius: 20px;
	}
	  .bttn:before {
	    -webkit-transition:0.5s all ease;
	    transition:0.5s all ease;
	    position:absolute;
	    top:0;
	    left:50%;
	    right:50%;
	    bottom:0;
	    opacity:0;
	    content:'';
	    background-color:#fe6f5e;
	    z-index:-2;
	  }

	    .bttn:hover:before {
	      -webkit-transition:0.5s all ease;
	      transition:0.5s all ease;
	      left:0;
	      right:0;
	      opacity:1;
	    }


	    .bttn:focus:before {
	      transition:0.5s all ease;
	      left:0;
	      right:0;
	      opacity:1;
	    }
/**************BAR********************************/
.bar{
	position: absolute;
    top: 289px;
    height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		display: block;
		border-radius: 27px;

}
.baractive{
	position: absolute;
    top: 289px;
		height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 10s; /* Safari 4.0 - 8.0 */
		-webkit-animation-iteration-count: 1000;
    animation-name: example;
    animation-duration: 10s;
		animation-iteration-count: 10000;
		display: none;
}
.bar1{
	position: absolute;
    top: 364px;
    height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		display: block;
		border-radius: 27px;
		z-index: 3;

}
.bar1active{
	position: absolute;
    top: 364px;
		height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 10s; /* Safari 4.0 - 8.0 */
		-webkit-animation-iteration-count: 1000;
    animation-name: example;
    animation-duration: 10s;
		animation-iteration-count: 10000;
		display: none;
}
.bar2{
	position: absolute;
    top: 439px;
    height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		display: block;
		border-radius: 27px;
		z-index: 3;
}
.bar2active{
	position: absolute;
    top: 439px;
		height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 10s; /* Safari 4.0 - 8.0 */
		-webkit-animation-iteration-count: 1000;
    animation-name: example;
    animation-duration: 10s;
		animation-iteration-count: 10000;
		display: none;
}
.bar3{
	position: absolute;
    top: 515px;
    height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		display: block;
		border-radius: 27px;
		z-index: 3;
}
.bar3active{
	position: absolute;
    top: 515px;
		height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 10s; /* Safari 4.0 - 8.0 */
		-webkit-animation-iteration-count: 1000;
    animation-name: example;
    animation-duration: 10s;
		animation-iteration-count: 10000;
		display: none;
}
.bar4{
	position: absolute;
    top: 592px;
    height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		display: block;
		border-radius: 27px;
		z-index: 3;
}
.bar4active{
	position: absolute;
    top: 592px;
		height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 10s; /* Safari 4.0 - 8.0 */
		-webkit-animation-iteration-count: 1000;
    animation-name: example;
    animation-duration: 10s;
		animation-iteration-count: 10000;
		display: none;
}
.bar5{
	position: absolute;
    top: 667px;
    height: 6px;
    width: 183px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		display: block;
		border-radius: 27px;
		z-index: 3;
}
.bar5active{
	position: absolute;
    top: 667px;
		height: 6px;
    width: 183px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 10s; /* Safari 4.0 - 8.0 */
		-webkit-animation-iteration-count: 1000;
    animation-name: example;
    animation-duration: 10s;
		animation-iteration-count: 10000;
		display: none;
}
/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
	0%   {background-color:#fe6f5e;}
	25%  {background-color:#5efe6f;}
	50%  {background-color:#5eedfe; }
	75%  {background-color:#fe5eed; }
	100% {background-color:#fe6f5e;}
}

/* Standard syntax */
@keyframes example {
	0%   {background-color:#fe6f5e;}
	25%  {background-color:#5efe6f;}
	50%  {background-color:#5eedfe; }
	75%  {background-color:#fe5eed; }
	100% {background-color:#fe6f5e;}
}
/****************ALERTS*****************************/
.feedbackEmailExist{
	position: relative;
border: .2px solid Black;
width: 229px;
height: 29px;
left: 87px;
color: white;
align-items: center;
justify-content: center;
padding-left: 41px;
padding-top: 17px;
border-top: 0px;
background: #f44336;
letter-spacing: 1px;
border-radius: 0px 24px 0px 14px;
    top: 6px;
		display: none;
}
.feedbackNotEmail{
	position: relative;
border: .2px solid Black;
width: 229px;
height: 29px;
left: 87px;
color: white;
align-items: center;
justify-content: center;
padding-left: 41px;
padding-top: 17px;
border-top: 0px;
background: #f44336;
letter-spacing: 1px;
border-radius: 0px 24px 0px 14px;
    top: 6px;
		display: none;
}
.feedbackPassword{
	position: relative;
border: .2px solid Black;
width: 229px;
height: 29px;
left: 87px;
color: white;
align-items: center;
justify-content: center;
padding-left: 41px;
padding-top: 17px;
border-top: 0px;
background: #f44336;
letter-spacing: 1px;
border-radius: 0px 24px 0px 14px;
    top: 6px;
		display: none;
}
.closebtn {
	position: relative;
	margin-left: 0px;
	color: white;
	font-weight: bold;
	float: right;
	font-size: 22px;
	line-height: 20px;
	cursor: pointer;
	transition: 0.3s;
	left: -17px;
	top: 1px;

}
.closebtn:hover {
    color: black;
}
	</style>
</head>
<body>
	<div class="site_container">
	<div class="wrapper">
		<div class="logincont">
			<div class="feedbackPassword">
				Passsword Not the Same!
				<span class="closebtn">&times;</span>
			</div>
			<div class="feedbackEmailExist">
				Email Already Exist!
				<span class="closebtn">&times;</span>
			</div>
			<div class="feedbackNotEmail">
				Not An Email!
				<span class="closebtn">&times;</span>
			</div>


			<div class="logintitle">
				Register
			</div>
			<img src="images/logo.png" style="position: relative;left: 117px;margin-top: 49px;">
			<form name="register">
			<div class="input1">
				<input type="text" name="email"id="email"placeholder="Enter Email">
				<input type="password" name="pass"id="pass"placeholder="Enter password">
				<input type="password" id="verify"name="verify"placeholder="Verify password">
				<input type="text"id="fname" name="fname"placeholder="Enter First Name">
				<input type="text"id="lname" name="lname"placeholder="Enter Last Name">
				<h1 style="font-size: 24px;position: absolute;top: 210%;left: -21%;">DOB</h1>
				<input type="date" id="dob"name="dob"placeholder="">

			</div>
		</form>

			<div class="bar">
			</div>
			<div class="baractive">
			</div>
			<div class="bar1">
			</div>
			<div class="bar2">
			</div>
			<div class="bar3">
			</div>
			<div class="bar4">
			</div>
			<div class="bar5">
			</div>
			<div class="bar1active">
			</div>
			<div class="bar2active">
			</div>
			<div class="bar3active">
			</div>
			<div class="bar4active">
			</div>
			<div class="bar5active">
			</div>

			<div class="butto">
				<a class="bttn">Next</a>
			</div>
			<div class="sign">
				Have an Account Already? <a id="up" href="empty.php">Login</a>
			</div>

		</div>
	</div>
</div>




	<script>
	$(document).ready(function(){
	$("#email").focusin(function(){
		$(".bar").css("display","none");
		$(".baractive").css("display","block");
	 });
	 $("#email").focusout(function(){
		 $(".bar").css("display","block");
		$(".baractive").css("display","none");
	 });
	 $("#pass").focusin(function(){
 		$(".bar1").css("display","none");
 		$(".bar1active").css("display","block");
 	 });
 	 $("#pass").focusout(function(){
 		 $(".bar1").css("display","block");
 		$(".bar1active").css("display","none");
 	 });
	 $("#verify").focusin(function(){
 		$(".bar2").css("display","none");
 		$(".bar2active").css("display","block");
 	 });
 	 $("#verify").focusout(function(){
 		 $(".bar2").css("display","block");
 		$(".bar2active").css("display","none");
 	 });
	 $("#fname").focusin(function(){
 		$(".bar3").css("display","none");
 		$(".bar3active").css("display","block");
 	 });
 	 $("#fname").focusout(function(){
 		 $(".bar3").css("display","block");
 		$(".bar3active").css("display","none");
	});
	 $("#lname").focusin(function(){
 		$(".bar4").css("display","none");
 		$(".bar4active").css("display","block");
 	 });
 	 $("#lname").focusout(function(){
 		 $(".bar4").css("display","block");
 		$(".bar4active").css("display","none");
 	 });
	 $("#dob").focusin(function(){
		 $(".bar5").css("display","none");
		 $(".bar5active").css("display","block");
		});
		$("#dob").focusout(function(){
			$(".bar5").css("display","block");
		 $(".bar5active").css("display","none");
 });

	$(".bttn").click(function(){
		verify();
	});
	  function verify(){
	    var email=document.forms["register"]["email"].value;
	    var password=document.forms["register"]["pass"].value;
	    var fname=document.forms["register"]["fname"].value;
			var lname=document.forms["register"]["lname"].value;
			var dob=document.forms["register"]["dob"].value;
			var verify=document.forms["register"]["verify"].value;
	     // alert(email);
			 // alert(password);
			 // alert(fname);
			 // alert(lname);
			 // alert(dob);
			 // alert(verify);

			 // alert("inaaa");
	    $.post("regs_handle.php",{"email":email,"password":password,"verify":verify,"fname":fname,"lname":lname,"dob":dob})
	    .done(function(data){
	      // alert("in");
				// alert(data);
	      if(data=="email existed"){
					// alert("out");
	      $(".feedbackEmailExist").css("display","block");
	    }
			if(data=="Not an Email"){
				$(".feedbackNotEmail").css("display","block");
			}
			if(data=="password not the same"){
				$(".feedbackPassword").css("display","block");
			}
			if(data=="good"){

	      window.location = "selection.php";
	    }
	    })
	    .fail(function() {
	       alert( "error" );
	    });
	  }
		$(".closebtn").click(function(){
			$(".feedbackPassword").css("display","none");
			$(".feedbackEmailExist").css("display","none");
			$(".feedbackNotEmail").css("display","none");
		});
});
	</script>

</body>
</html>
