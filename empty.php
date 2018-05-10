<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/layout1.css">
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
header,section,footer,aside,nav,article{
	display: block;

}
header{
	position: relative;
	height:79px;
	color: black;
	background-color: #5d8aa8;
	border-radius: 9px;

}
.about{
	position: absolute;
	border-style: ridge;
	border-width: 4px;
	border-color: white;
	top: 0px;
	height: 100%;
	width: 30%;
	background: black;
}
body{

	  margin: 0 auto;
		font-family: Impact, Charcoal, sans-serif;
		color: white;
		background-color: #d9d9d9;
	  color: black;
	  background-image: url(images/buried.png);


}
p{
	margin: 2px;
	font-size: 20px;
}
.wrapper{
	width: 73%;
	height: 100%;
	background: white;
	position: absolute;
	margin-left: 6%;
	/* margin-right: 81px; */
	border-radius: 2%;
	border-left: 25px solid #e6e6e6;
	border-right: 25px solid #e6e6e6;
	border-top: 25px solid #e6e6e6;
	background-image: url(images/stardust.png);
}
.wrapper1{
	position: absolute;
    width: 76.6%;
    height: 100%;
    top: 190%;
    background: white;
    margin-left: 6%;
    z-index: -1;
    margin-right: 81px;
		background-image: url(images/stardust.png);

}
section{
	background: white;

}
.container-login{

}
.formWrapper{

}
input{
	display: block;
}
h1,h2{
	display: flex;
	top: 23%;
	color: black;
	left: 5%;
	position: absolute;
	background-color: white;
	font-size: 45px;
	z-index: 1;
}
h1{
	border-bottom: solid white 10px;
		border-right: solid white 50px;
}
h2{
	display: flex;
	left: 10%;
	top: 28%;
	border-top: 0px;
	border-bottom: solid white 10px;
	border-right: solid white 50px;
}
h3{
	display: flex;
	font-family: monospace;
	font-size: 51px;
	color:black;
	left:15%;
	position: relative;
	top: 0px;
	text-decoration: underline;
	text-shadow:1px 1px black;
	letter-spacing: -6px;

}
nav{
	margin: 1%;
	color: black;
	font-family: fantasy;
	position: absolute;
	top: 5%;
	left:66%;

}
ul{

}
li{
		display: inline;
		padding: 5px;
}
.containerExchanges{
	height: 100%;
    width: 76.5%;
    position: absolute;
    top: 101%;
    display: block;
    background: #e6e6e6;
    margin-left: 6%;
    margin-right: 81px;
    border: .5px solid white;
		background-image: url(images/stardust.png);
}
.more{
	border-color: black;
	position: relative;
	border-width: 5px;
	border-style: solid;
	width: 101%;
	cursor: pointer;
	background-image: url(images/grid_background.png);
}
img{

	max-width: 100%;
    height: auto;
}
.inpu{

}
.logincont{
	position: absolute;
    width: 437px;
    height: 664px;
    top: -8%;
    left: 28%;
    /* box-shadow: 14px 69px 300px -33px rgba(111,94,254,1); */
    border-radius: 39px;
    border: 6px double #5efe6f;
    background-image: url(images/skulls.png);
}
.logintitle{
	position: absolute;
	height: 81px;
	width: 100px;
	color: black;
	font-family: insightfront;
	font-size: 61px;
	left: 129px;

	padding-left: 11px;
	padding-right: 11px;
	border-radius: 20px;
	padding-bottom: 14px;
	letter-spacing: 18px;
    color: #fe6f5e;
margin-top: 3px;
}
.input1{
	position: absolute;

    width: 277px;
    height: 177px;
    top: 267px;
    left: 96px;
}
#email{
	position: absolute;
    top: 25px;
    width: 98%;
    height: 43px;
    font-size: 29px;
    border: 0px;
    /* border-bottom: 5px solid radial-gradient(#fe6f5e,#6f5efe,#5efe6f); */
}
#pass{
	position: absolute;
    top: 97px;
    width: 98%;
    height: 43px;
    font-size: 29px;
    border: 0px;
    /* border-bottom: 5px solid radial-gradient(#fe6f5e,#6f5efe,#5efe6f); */
}
.bar{
	position: absolute;
    top: 340px;
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
    top: 340px;
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
    top: 414px;
    height: 6px;
    width: 273px;
    /* border: 1px solid black; */
    background:#fe6f5e;
    left: 97px;
		display: block;
		border-radius: 27px;

}
.bar1active{
	position: absolute;
    top: 414px;
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
input:focus{
	outline:none;

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


@media (max-width: 900px) and (min-width: 700px) {

}
.sign{
	position: absolute;


    width: 250px;
    height: 50px;
    top: 500px;
    left: 161px;
    color: black;
    font-size: 13px;
    font-family: insightfront;
}
#up{
	font-size: 18px;
}
.butto{
	position: absolute;
    top: 441px;
    height: 45px;
    width: 98px;

    left: 130px;
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
	  font-size:18px;
	  letter-spacing:2px;
	  text-transform:uppercase;
	  display:inline-block;
	  text-align:center;
	  width:209px;
	  font-weight:bold;
	  padding:14px 0px;
	  border:3px solid #fe6f5e;
	  border-radius:2px;
	  position:relative;
	  box-shadow: 0 2px 10px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.1);
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
.feedbackEmail{
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
.gif{
	position: absolute;
	border: 1px solid Black;
	width: 100px;
	height:100px;
	top: 30%;
	background-image: url(images/coingif.gif);
	 background-size: 100px 100px;
}
#aboutus{
	cursor: pointer;
}
#loginscroll{
	cursor: pointer;
}
#gdax{
	display: none;
}
#bitstam{
	display: none;
}
#gemin{
	display: none;
}
#cash{
	display: none;
}
</style>
<script>
$(document).ready(function(){
    $("#more").click(function(){
        // alert("The paragraph was clicked.");
				var radio = $( "input:radio" ).val();
				if(radio==1){
					$("#GDAX").slideDown();
				}
				if(radio==2){
					$("#Bitstamp").slideDown();
				}
				if(radio==3){
					$("#kraken").slideDown();
				}
				if(radio==4){
					$("#gemini").slideDown();
				}

    });
		$("input").change(function(){

    });
		$("#gdax").click(function(){
			// alert("The paragraph was clicked.");
			$( "#gdax" ).css("border-bottom","6px double black");
			$( "#gdax" ).css("border-top","6px double black");
			$( "#gdax" ).css("border-radius","20px");
			$( "#gdax" ).css("padding-bottom","3px");
			$( "#gd" ).prop( "checked", true );
			$( "#bitstam" ).css("border","0px double black");
			$( "#krake" ).css("border","0px double black");
			$( "#gemin" ).css("border","0px double black");
		});
		$("#bitstam").click(function(){
			// alert("The paragraph was clicked.");
			$( "#bitstam" ).css("border-bottom","6px double black");
			$( "#bitstam" ).css("border-top","6px double black");
			$( "#bitstam" ).css("border-radius","20px");
			$( "#bitstam" ).css("padding-bottom","-9px");
			$( "#bits" ).prop( "checked", true );
			$( "#gdax" ).css("border","0px double black");
			$( "#krake" ).css("border","0px double black");
			$( "#gemin" ).css("border","0px double black");
		});
		$("#krake").click(function(){
			// alert("The paragraph was clicked.");
			$( "#krake" ).css("border-bottom","6px double black");
			$( "#krake" ).css("border-top","6px double black");
			$( "#krake" ).css("border-radius","20px");
			$( "#krake" ).css("padding-bottom","3px");
			$( "#krak" ).prop( "checked", true );
			$( "#bitstam" ).css("border","0px double black");
			$( "#gdax" ).css("border","0px double black");
			$( "#gemin" ).css("border","0px double black");
		});
		$("#gemin").click(function(){
			// alert("The paragraph was clicked.");
			$( "#gemin" ).css("border-bottom","6px double black");
			$( "#gemin" ).css("border-top","6px double black");
			$( "#gemin" ).css("border-radius","20px");
			$( "#gemin" ).css("padding-bottom","3px");
			$( "#gemini" ).prop( "checked", true );
			$( "#bitstam" ).css("border","0px double black");
			$( "#krake" ).css("border","0px double black");
			$( "#gdax" ).css("border","0px double black");
		});
		$(window).scroll(function() {
  		var hT = $('#scroll-to').offset().top,
       hH = $('#scroll-to').outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
    	console.log((hT-wH) , wS);
   		if (wS>=150){
				$( "#gdax" ).css("display","block");
				$("#gdax").animate({height: "79px"},{ duration: 800});
   		}

	 		if(wS>=271){
				$( "#bitstam" ).css("display","block");
				$("#bitstam").animate({height: "159px"},{ duration: 800});
			}


			if(wS>=403){
				$( "#krake" ).css("display","block");
				$("#krake").animate({height: "60px"},{ duration: 800});
			}
			if(wS>=520){
				$( "#gemin" ).css("display","block");
				$("#gemin").animate({height: "107px"},{ duration: 800});
			}
			if(wS>=656){
				$( "#cash" ).css("display","block");
				$("#cash").animate({width: "37%"},{ duration: 800});
			}

});
	$("#loginscroll").click(function(){
		$('html, body').animate({
        scrollTop: $(".wrapper1").offset().top
    }, 2000);
	});
$("#aboutus").click(function(){
	$('html, body').animate({
			scrollTop: $("#scroll-to").offset().top
	}, 2000);
	});
});
</script>
</head>
<body>
	<div class="site_container">

	<div class="wrapper">
		<img src="images/logo.png" style="position:absolute;top:-34px;">
	<h1><b>Your Personal </h1><h2>Cyptocurrency Wallet</b></h2>
	<nav>
		<ul>
			<li><a id="loginscroll">Login</a></li>
			<li><a href="regs1.php">Sign-up</a></li>
			<li><a id="aboutus">About us</a></li>
		</ul>
	</nav>

	<img src="images/closeup.png" style="position:absolute; height:65%;top:14%;left:21%; width:75%;" >
</div>

		<div class="containerExchanges" id="scroll-to">
			<h3>Exchanges</h3>
	<img src="images/gdax100.png" id="gdax"style="position:relative;height:0px;left:45%;display:block;padding:10px;top:-50px;">
	<img src="images/bitstamp200.png" id="bitstam" style="position:relative;height:0px;left:36%;display:block;margin-top:-48px;">
	<img src="images/Kraken100.png" id="krake"style="position: relative;height:0px;left:36%;display:block;margin-top:-2px;padding:21px;">

	<img src="images/Gemini.png" id="gemin"style="position:relative;height:0px;left:33%;display:block;margin-top:30px;">
	<img src="images/cash.jpg"id="cash" style="width: 0%;margin-top: 40px;margin-left: 12px;border: 10px solid white;">
</div>
<div class="wrapper1">

<div class="logincont">
	<div class="feedbackPassword">
		Passsword Incorrect!
		<span class="closebtn">&times;</span>
	</div>
	<div class="feedbackEmail">
		Email Doesn't Exist!
		<span class="closebtn">&times;</span>
	</div>


	<div class="logintitle">
		Login
	</div>
	<img src="images/logo.png" style="position: relative;left: 140px;margin-top: 49px;">
	<form >
	<div class="input1">
		<input type="text" id="email"placeholder="Enter Email">
		<input type="password" id="pass"placeholder="Enter password">
	</div>
</form>

	<div class="bar">
	</div>
	<div class="baractive">
	</div>
	<div class="bar1">
	</div>
	<div class="bar1active">
	</div>
	<div class="butto">
		<a class="bttn">Login</a>
	</div>
	<div class="sign">
		Don't Have an Account? <a id="up" href="regs1.php">Sign-up</a>
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

	 $(".bttn").click(function(){
		 // alert("sdmk");

		 email=$("#email").val();
		 pass=$("#pass").val();
		 // alert(email);
		 // alert(pass);
		 $.post("login_handle.php",{"email":email,"password":pass})
		 .done(function(data){
			 if(data=="good"){
				 // alert("good");
				 window.location.href = "homepage.php";
			 }
			 if(data=="password"){
				 // alert("password");
				 $(".feedbackPassword").css("display","block");

			 }
			 if(data=="email"){
				 // alert("email");
				 $(".feedbackEmail").css("display","block");
			 }
			 console.log(data);
		 })
		 .fail(function(){
			 alert("error");
		 });
	 });
	 $(".closebtn").click(function(){
		 $(".feedbackPassword").css("display","none");
		 $(".feedbackEmail").css("display","none");
	 });
});
</script>
</body>
</html>
