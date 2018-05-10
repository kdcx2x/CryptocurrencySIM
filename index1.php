<html>
<head>
  <script type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style>
@media (max-width: 900px) and (min-width: 700px) {
  header{

  }
  body{

  }
  #closeup{
    position: absolute;
    width: 100%;
    height: 100px;
  }
}
@font-face {
	font-family: insightfront;
	src: url(fonts/ostrich-sans-master/OstrichSansInline-Italic.otf);
}
header{


  width: 100%;
  height: 105px;

  top: 0;
  left: 0;
  background: transparent;
  z-index: 2;
  position: fixed;

}
footer{
  position: fixed;
  top: 95%;
  left: 0;
  height: 5%;
  width: 100%;
  z-index: 2;
  background: white;
  -webkit-box-shadow: 0px -1px 21px 2px rgba(0,0,0,0.75);
-moz-box-shadow: 0px -1px 21px 2px rgba(0,0,0,0.75);
/* box-shadow: 0px -1px 21px 2px rgba(0,0,0,0); */
}
body{
  font-family: insightfront;
  min-width:1439px;
  max-width:1439px;
  margin: 0 auto;
}
#closeup{
  position: absolute;
  width: 100%;
  height: auto;
  top: -43%;
  left: 0;
  -webkit-filter: opacity(85%);filter: opacity(85%)
  /* -webkit-filter: blur(4px);
  filter: blur(4px); */
}
li a.active {
    background-color: #6f5efe;
    color: white;
}
a{
  text-decoration: none;
  padding: 8px;
  border-radius: 10px 10px 0px 0px;
}
li a:hover:not(.active) {
    background-color: #fe6f5e;

}
nav{
  margin: 1%;
color: black;
font-family: insightfront;
position: absolute;
top: 5%;
left: 56%;
font-size: 25px;
color: white;
}
ul{

}
li{
    display: inline;
    padding: 5px;
    margin: 5px;
}
/* unvisited link */
a:link {
    color: white;
}

/* visited link */
a:visited {
    color: white;
}

.sticky{
  position: fixed;
  background: white;
  color: black;
  width: 100%;
  height: 136px;

}
.addcolor{
  color: black;
  top: 5%;
  left: 56%;
  font-size: 40px;
}
.containerExchanges{
  position: relative;
    width: 100%;
    top: 73%;
    height: 100%;
    left: 0;
    background: white;
    background-image: url(images/stardust.png);

}
#logo{
  height: 154px;
}
.hometext{
  /* border: 1px solid black; */
  position: absolute;
  height: 100px;
  width: 400px;
  top: 29%;
  font-size: 80px;
  color: black;
  font-weight: bolder;
  left: 7%;
  letter-spacing: -5px;
}
.hometext1{
  /* border: 1px solid black; */
  position: absolute;
  height: 100px;
  width: auto;
  top: 36%;
  font-size: 80px;
  color: white;
  font-weight: bolder;
  left: 14%;
  letter-spacing: 8px;
}
.exchangeTitle{
  position: absolute;
border: 5px double #5efe6f;
width: 91px;
height: 250px;
top: 10%;
border-radius: 0px 20px 20px 0px;
border-left: 0px;
}
.rotate{
  font-size: 67px;
position: absolute;
top: 36%;
left: -85%;
-webkit-transform: rotate(-90deg);
-moz-transform: rotate(-90deg);
-ms-transform: rotate(-90deg);
-o-transform: rotate(-90deg);

}
.stickyexchange{
  position: fixed;
  background: white;
  top: 47%;

}
.exchangeTitle1{

top: 155%;

}
.cont{
  position: relative;
left: 20%;

background: white;
width: 70%;
height: 50%;
top: 5%;
margin-top: 5%;
background-image: url(images/light-wool.png);
border-radius: 10px;
}
#gdax{
  position: absolute;
height: 30%;
left: 37%;
}
#gdaxdesc{
  position: absolute;
  width: 46%;
  font-size: 28px;
  top: 123px;
  background: #d8e6f3;
  border-radius: 6px;
  padding: 11px;
  left: 50%;
}
#bitstam{
  position: absolute;
    height: 48%;
    left: 28%;
}
#bitstamdesc{
  position: absolute;
  width: 46%;
  font-size: 28px;
  top: 167px;
  background: #e3fdbd;
  border-radius: 6px;
  padding: 11px;
  left: 50%;
}
#krake{
  height: 16%;
position: absolute;
top: 8%;
left: 32%;
}
#krakedesc{
  position: absolute;
    width: 47%;
    font-size: 20px;
    top: 126px;
    background: #c1cfdc;
    border-radius: 6px;
    padding: 11px;
    left: 50%;
}
.wrapper1{
  position: relative;
width: 100%;
height: 100%;
background: white;
margin-left: 6%;
z-index: -1;
margin-right: 81px;
background-image: url(images/stardust.png);
/* margin-top: 90; */
top: 71%;
}
.logincont{
  position: absolute;
    width: 437px;
    height: 622px;
    top: -7%;
    left: 40%;
    /* box-shadow: 14px 69px 300px -33px rgba(111,94,254,1); */
    border-radius: 39px;
    border: 6px double #5efe6f;
    background-image: url(images/skulls.png);
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
      #cash{
        height: 38%;
    position: absolute;
    left: 9%;
    top: 252%;

      }
      #aboutus:hover{
        cursor: pointer;
      }
      #login:hover{
        cursor: pointer;
      }
</style>
</head>
<body>
  <header>
    <img src="images/logo.png" id="logo" style="position:absolute;top:-34px;">
    <nav>
  		<ul>
        <li><a class="active">homepage</a></li>
  			<li><a id="login">Login</a></li>
  			<li><a href="regs1.php">Sign-up</a></li>
  			<li><a id="aboutus">About us</a></li>
  		</ul>
  	</nav>
  </header>
  <img src="images/closeup.png" id="closeup">
  <div class="hometext">Your Personal</div>
  <div class="hometext1">Cyptocurrency Wallet</div>
  <div class="containerExchanges">
    <div class="exchangeTitle"><span class="rotate">Exchanges</span></div>
    <div class="cont" style="margin-top:0px;">
      <img src="images/gdax100.png" id="gdax"style="">
        <span id="gdaxdesc">GDAX (Global Digital Asset Exchange) offers a secure
          and easy way for traders of all levels to buy and sell digital
          assets online instantly across trading pairs</span>
      <img class="bitcoin"src="images/bitcoin.png"style="position: absolute;height: 20%;top: 130px;left: 5%;">
      <img class="ethereum"src="images/ethereum.png" style="height: 20%;left: 7%;position: absolute;top: 55%;">
      <img class="bitcash"src="images/bitcoinclogo.png"style="height: 21.8%;position: absolute;top: 127px;left: 24%;">
      <img class="lite"src="images/litecoin.png"style="    height: 22%;position: absolute;top: 55%;left: 23.5%;">
    </div>
    <div class="cont">
      <img src="images/bitstamp100.png" id="bitstam" style="">
      <span id="bitstamdesc">We believe bitcoin is here to stay. Our goal is to provide reliable
      easy to use service for companies and individuals to exchange bitcoins.</span>
      <img class="bitcoin"src="images/bitcoin.png"style="position: absolute;height: 20%;top: 180px;left: 5%;">
      <img class="ethereum"src="images/ethereum.png" style="height: 20%;left: 7%;position: absolute;top: 70%;">
      <img class="bitcash"src="images/bitcoinclogo.png"style="height: 21.8%;position: absolute;top: 180px;left: 24%;">
      <img class="lite"src="images/litecoin.png"style="    height: 22%;position: absolute;top: 70%;left: 23.5%;">
      </div>
  </div>
  <div class="containerExchanges"style="z-index:-1;">
    <div class="cont"style="top:15%;">
      <img src="images/Kraken100.png" id="krake">
      <span id="krakedesc">Founded in 2011, San Francisco-based Kraken is the largest Bitcoin exchange in euro volume and liquidity and also trading Canadian dollars, US dollars, British pounds and Japanese yen. Kraken is consistently rated the best and most secure Bitcoin exchange by independent news media. Kraken was the first Bitcoin exchange to have trading price and volume displayed on the Bloomberg Terminal, the first to pass a cryptographically verifiable proof-of-reserves audit, and is a partner in the first cryptocurrency bank. Kraken is trusted by hundreds of thousands of traders, the Tokyo government's court-appointed trustee, and Germany's BaFin regulated Fidor Bank.</span>
      <img class="bitcoin"src="images/bitcoin.png"style="position: absolute;height: 20%;top: 180px;left: 5%;">
      <img class="ethereum"src="images/ethereum.png" style="height: 20%;left: 7%;position: absolute;top: 70%;">
      <img class="bitcash"src="images/bitcoinclogo.png"style="height: 21.8%;position: absolute;top: 180px;left: 24%;">
      <img class="lite"src="images/litecoin.png"style="    height: 22%;position: absolute;top: 70%;left: 23.5%;">
      </div>
    </div>
    <img src="images/cash.jpg"id="cash">
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
      <footer>

      </footer>
  <script>
  $(document).ready(function(){
    console.log($(window).scrollTop());
    $(window).scroll(function() {
      if ($(this).scrollTop() > 1){
        $('header').addClass('sticky');
        $('nav').addClass('addcolor');
        $('a:link').css('color','black');
        $('a:visited ').css('color','black');
        $('#logo ').css('height','204px');
      }
      else{
        $('header').removeClass('sticky');
        $('nav').removeClass('addcolor');
        $('a:link').css('color','white');
        $('a:visited ').css('color','white');
        $('#logo ').css('height','154px');
      }
    });
    $(window).scroll(function() {
      if ($(this).scrollTop() > 300){
          $('.exchangeTitle').addClass('stickyexchange');
          $('.exchangeTitle').removeClass('exchangeTitle1');
        // alert("ass");
      }
      if($(this).scrollTop() <= 300 || $(this).scrollTop() > 1500){
        $('.exchangeTitle').removeClass('stickyexchange');
        $('.exchangeTitle').addClass('exchangeTitle1');
      }
      if ($(this).scrollTop() <= 300){
        $('.exchangeTitle').removeClass('exchangeTitle1');
      }

     });
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
   				 window.location.href = "home.php";
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
     $("#aboutus").click(function(){
     	$('html, body').animate({
     			scrollTop: $("#gdax").offset().top
     	}, 2000);
     	});
      $("#login").click(function(){
       $('html, body').animate({
           scrollTop: $("#cash").offset().top
       }, 2000);
       });
    //
  });
  </script>
</body>
</html>
