<html>
<head>
  <script src="js/page.js"></script>
  <script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="layout22.css">
  <style>
  .contenttype{
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 117px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      padding: 0px 14px 0px;
    z-index: 2;
    left: -2px;
    top: 43px;
    border-bottom: 3px solid black;
    border: 2px solid black;
    min-height: 71px;
  }
  /*************CIRCLE****************************/
  .circle{
    position: relative;
      width: 253px;
      height: 256px;
      border: .5px solid black;
      top: 26%;
      left: 6%;
      border-radius: 50%;
      font-family: insightfront;
      font-size: 90px;
      -webkit-box-shadow: 0px 0px 156px 28px #F8AA49 ;
      -moz-box-shadow: 0px 0px 156px 28px #F8AA49;
      box-shadow: 0px 0px 156px 28px #F8AA49;
      background: white;
      background-image: url(images/polonez-pattern.png);


  }
  .yournum{
    position: relative;
    top: 21%;
    left: 20%;
  }
  /**************NOTIFICATION******************************************/
  .wrong{
    position: absolute;
      font-size: 30px;
      color: #ff033e;
      height: 48px;
      width: 205px;
      top: 55%;
      left: 8%;
      padding: 44px;
      letter-spacing: 3px;
      display: none;
  }
  /****************************TIME******************************************/
  .container{
    position: relative;
    width: 58%;
    height: 47%;
    left: 35%;
    top: -58px;
  }
  .cont1{
    position: absolute;
      top: 0px;
      border: 1px solid black;
      width: 50%;
      height: 37%;
      display: inline-flex;
      left: 24%;
      -webkit-box-shadow: 0px 0px 5px 17px #F8AA49;
      -moz-box-shadow: 0px 0px 5px 17px #F8AA49;
      box-shadow: 0px 0px 5px 17px #F8AA49;
      color: #F8AA49;
      background: white;
      background-image: url(images/polonez-pattern.png);
  }
  .typeCont {
    position: relative;
      display: inline-block;
      padding: 0px 14px;
      padding-bottom: 0px;
      font-family: insightfront;
      font-size: 80px;
      border: 0px;
          min-width: 174px;
      left: 56px;
      top: 22px;
      min-height: 72px;
  }
  .typeText{
    position: absolute;
    font-size: 29px;
    left: 7px;
    top: 5px;
    color: black;
    z-index: 3;
  }
  .typecont:hover{
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    background: transparent;
  }
  .typecont:hover .contenttype{
      display: block;

  }
  .contenttype:hover{
    cursor: pointer;
    background: #ece4ff;
  }
  .typecont:hover .contenttype{
    display: block;

  }
  #typecont1{

      border-top: .5px solid black;
      border-bottom: .5px solid black;
      font-size: 42px;
      min-width: 90px;
      top: 86%;
      left: -69%;

    }
  #typecont2{
      top: 86%;
      border-top: .5px solid black;
      border-bottom: .5px solid black;
      font-size: 42px;
      min-width: 90px;
          left: -10%;
    }
  #typecont3{
    top: 86%;
    border-top: .5px solid black;
    border-bottom: .5px solid black;
    font-size: 42px;
      min-width: 90px;
          left: 49%;
  }
  #typecont4{
  top: 86%;
    border-top: .5px solid black;
    border-bottom: .5px solid black;
    font-size: 42px;
      min-width: 90px;
      left: 108%;
  }
/*****************Cryptocurrency**************************************/
.content{
  display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 14px;
    z-index: 2;
    left: -2px;
    top: 43px;
    border-bottom: 3px solid black;
    width: 10px;
    border: 2px solid black;
    color: black;
}
.crytpo:hover{
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  background: transparent;
}
.crytpo:hover .content{
    display: block;

}
.content:hover .crytpo:hover .content{
  display: block;
}
.cont3{
  position: absolute;

width: 100%;
height: 33%;
left: 0%;
display: inline-flex;
top: 67%;
}
.crytpoContainer{
  border: 2px solid yellow;
  position: absolute;
  height: 100%;
  width: 225.5px;
}
.containerCrytoText{
  position: absolute;
    font-size: 17px;
    left: 2px;
    top: 10%;
    z-index: 3;
    color: black;
}
.crytpo {
  position: relative;
    display: inline-block;
    min-width: 160px;
    padding: 12px 14px;
    font-family: insightfront;
    font-size: 42px;
    border: 0px;
    left: 29%;
    top: 19%;
}
.cont4{
  position: absolute;
border: 5px solid #F8AA49;
width: 50%;
left:50%;
height: 100%;
-webkit-box-shadow: 0px 0px 5px 5px #F8AA49;
-moz-box-shadow: 0px 0px 5px 5px #F8AA49;
box-shadow: 0px 0px 5px 5px #F8AA49;
color:#F8AA49;

}
#crytpocont1{
  left: -63%;
border-top: .5px solid black;
top: 103%;
  }
#crytpocont2{
left: 38%;
    top: 103%;
    border-top: .5px solid black;
}
#crytpocont3{
    border-top: 0px;
    border-bottom: 2px solid black;
    left: -19%;
    top: 205%;
}
#crytpocont1:hover{
  background:#ece4ff;
  cursor: pointer;
}
#crytpocont2:hover{
  background: #ece4ff;
  cursor: pointer;
}
#crytpocont3:hover{
  background: #ece4ff;
  cursor: pointer;
}
#cash{
  position: absolute;
    width: 32%;
    display: none;
    left: 7%;
   top: -23px;

}
#bitcoin{
  width: 27%;
    display: inline-flex;
    left: 10%;
    position: absolute;

}
#eth{
  position: absolute;
    width: 19%;
    left: 10%;
    display: none;
}
#lite{
      width: 24%;
    position: absolute;
        left: 10%;
    display: none;
}
.descript1{
  border: 0px solid Black;
height: 22%;
width: 7%;
position: absolute;
top: 9%;
left: 93.0%;
border-left: 0px;
border-radius: 30px 3px 3px 30px;
/* background-image: linear-gradient(to bottom,#fe6f5e,#5efe6f); */
background: #6f5efe;
}
.descript2{
  border: 0px solid Black;
height: 22%;
width: 7%;
position: absolute;
    top: 72.5%;
left: 93.0%;
border-left: 0px;
border-radius: 30px 3px 3px 30px;
/* background-image: linear-gradient(to bottom,#fe6f5e,#5efe6f); */
background: #6f5efe;
}
.words{

  position: absolute;
    font-size: 42px;
    top: 38%;
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
  color:#6f5efe;
  text-decoration:none;
  -webkit-transition:0.3s all ease;
  transition:0.3s ease all;
  position: absolute;
top: 71%;
z-index: 5;
left: 6%;
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
	  border:3px solid #6f5efe;
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
	    background-color:#6f5efe;
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




    .dark {
      background:#6f5efe;
    }

    .flex {
      min-height:50vh;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    a.bttn {
      color:#6f5efe;
      text-decoration:none;
      -webkit-transition:0.3s all ease;
      transition:0.3s ease all;
      &:hover {
        color:#FFF;
      }
      &:focus {
        color:#FFF;
      }
    }




    .bttn {
      font-size:18px;
      letter-spacing:2px;
      text-transform:uppercase;
      display:inline-block;
      text-align:center;
      width:270px;
      font-weight:bold;
      padding:14px 0px;
      border:3px solid #6f5efe;
      border-radius:2px;
      position:relative;
      box-shadow: 0 2px 10px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.1);
      &:before {
        -webkit-transition:0.5s all ease;
        transition:0.5s all ease;
        position:absolute;
        top:0;
        left:50%;
        right:50%;
        bottom:0;
        opacity:0;
        content:'';
        background-color:#6f5efe;
        z-index:-2;
      }
      &:hover {
        &:before {
          -webkit-transition:0.5s all ease;
          transition:0.5s all ease;
          left:0;
          right:0;
          opacity:1;
        }
      }
      &:focus {
        &:before {
          transition:0.5s all ease;
          left:0;
          right:0;
          opacity:1;
        }
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="images/logo.png" id="logo" style="position:absolute;top:-34px;">
    <nav>
  		<ul>
        <li><a  href="home.php">Homepage</a></li>
        <li><a class="active"href="userhistory.php">History</a></li>
        <li><a href="investment.php">Invest</a></li>
        <li><a href="press.php">Press</a></li>
  		</ul>
  	</nav>
  </header>
  <div class="circle">
    <div class="yournum">
    $0.00
  </div>
  </div>
  <div class="wrong">
    Can't Be Done
  </div>
  <div class="container">
    <div class="cont1">
      <div class="typeText">Period:</div>
        <div class="typeCont">
          <span id="typevalue">Hour</span>
            <div id="typecont1" class="contenttype">Day</div>
            <div id="typecont2" class="contenttype">Week</div>
            <div id="typecont3" class="contenttype">Month</div>
            <div id="typecont4" class="contenttype">Year</div>
        </div>
    </div>
    <div class="cont3">
      <div class="cont6">
        <img id="cash" src="images/bitcoinclogo.png">
        <img id="bitcoin" src="images/bitcoin.png">
        <img id="eth" src="images/ethereum.png">
        <img id="lite" src="images/litecoin.png">
        <div class="cont4">
            <div class="containerCrytoText">Cryptocurrency:</div>
            <div class="crytpo">
              <span id="crytpomaincont">Bitcoin</span>
              <div id="crytpocont1"class="content">Litecoin</div>
              <div id="crytpocont2" class="content">Ethereum</div>
              <div id="crytpocont3" class="content">Bitcoin Cash</div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="descript1">
    <div class="words" style="transform: rotate(90deg);">
      Your
    </div>
  </div>

    <div class="descript2">
      <div class="words" style="transform: rotate(90deg);    ">
        History
      </div>
  </div>
<div class="flex">
    <a href="#0" class="bttn">Lookup</a>
</div>
  <footer>
    <a href="logout.php">Logout</a>
  </footer>
  <script>
  /*************BUTTON**********************************/
  var num;
  $(".bttn").click(function(){

    typemainvalue=$("#typevalue").text();
    cryptomainvalue=$("#crytpomaincont").text();
    // alert(typemainvalue);
    // alert(cryptomainvalue);


    $.post("history_handle.php",{"crypto":cryptomainvalue,"period":typemainvalue})
    .done(function(data){
      // alert("in");
      console.log(data);

      if(data=="bad"){
        // alert("bad");
        $(".wrong").css("display","inline-flex");
      }else{
        $(".wrong").css("display","none");
        // alert(data);
        $(".yournum").text(data);
      }


    })
    .fail(function(){
      alert("error");
    });


  });




  /******************Cyptocurrency**********************/
  $("#crytpocont1").click(function(){
      crytpocontvalue1=$("#crytpocont1").text();
      crytpomainvalue=$("#crytpomaincont").text();
      $("#crytpocont1").text(crytpomainvalue);
      $("#crytpomaincont").text(crytpocontvalue1);

      if(crytpocontvalue1=="Litecoin"){
        $("#lite").css("display","inline-flex");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #B7B7B7");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("color","#B7B7B7");
        $(".cont1").css("border","5px solid #B7B7B7");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("color","#B7B7B7");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #B7B7B7");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #B7B7B7");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #B7B7B7");

      }
      if(crytpocontvalue1=="Bitcoin"){
        $("#lite").css("display","none");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","inline-flex");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #F8AA49");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("color","#F8AA49");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("color","#F8AA49");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #F8AA49");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #F8AA49");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #F8AA49");
      }
      if(crytpocontvalue1=="Ethereum"){
        $("#lite").css("display","none");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","inline-flex");
        $(".cont4").css("border","5px solid #848482");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("color","#848482");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("color","#848482");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #848482");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #848482");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #848482");
      }
      if(crytpocontvalue1=="Bitcoin Cash"){
        $("#lite").css("display","none");
        $("#cash").css("display","inline-flex");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #4CC947");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("color","#4CC947");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("color","#4CC947");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #4CC947");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #4CC947");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #4CC947");
      }

    });


  $("#crytpocont2").click(function(){
    crytpocontvalue2=$("#crytpocont2").text();
    crytpomainvalue=$("#crytpomaincont").text();
    $("#crytpocont2").text(crytpomainvalue);
    $("#crytpomaincont").text(crytpocontvalue2);
    // alert(contvalue1);
      // alert("kmmm");
      if(crytpocontvalue2=="Litecoin"){
        $("#lite").css("display","inline-flex");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #B7B7B7");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("color","#B7B7B7");
        $(".cont1").css("border","5px solid #B7B7B7");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("color","#B7B7B7");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #B7B7B7");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #B7B7B7");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #B7B7B7");

      }
      if(crytpocontvalue2=="Bitcoin"){
        $("#lite").css("display","none");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","inline-flex");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #F8AA49");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("color","#F8AA49");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("color","#F8AA49");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #F8AA49");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #F8AA49");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #F8AA49");
      }
      if(crytpocontvalue2=="Ethereum"){
        $("#lite").css("display","none");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","inline-flex");
        $(".cont4").css("border","5px solid #848482");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("color","#848482");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("color","#848482");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #848482");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #848482");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #848482");
      }
      if(crytpocontvalue2=="Bitcoin Cash"){
        $("#lite").css("display","none");
        $("#cash").css("display","inline-flex");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #4CC947");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("color","#4CC947");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("color","#4CC947");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #4CC947");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #4CC947");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #4CC947");
      }

    });


  $("#crytpocont3").click(function(){
    crytpocontvalue3=$("#crytpocont3").text();
    crytpomainvalue=$("#crytpomaincont").text();
    $("#crytpocont3").text(crytpomainvalue);
    $("#crytpomaincont").text(crytpocontvalue3);
    // alert(contvalue1);
      // alert("kmmm");
      if(crytpocontvalue3=="Litecoin"){
        $("#lite").css("display","inline-flex");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #B7B7B7");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #B7B7B7");
        $(".cont4").css("color","#B7B7B7");
        $(".cont1").css("border","5px solid #B7B7B7");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #B7B7B7");
        $(".cont1").css("color","#B7B7B7");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #B7B7B7");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #B7B7B7");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #B7B7B7");

      }
      if(crytpocontvalue3=="Bitcoin"){
        $("#lite").css("display","none");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","inline-flex");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #F8AA49");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #F8AA49");
        $(".cont4").css("color","#F8AA49");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #F8AA49");
        $(".cont1").css("color","#F8AA49");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #F8AA49");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #F8AA49");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #F8AA49");
      }
      if(crytpocontvalue3=="Ethereum"){
        $("#lite").css("display","none");
        $("#cash").css("display","none");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","inline-flex");
        $(".cont4").css("border","5px solid #848482");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #848482");
        $(".cont4").css("color","#848482");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #848482");
        $(".cont1").css("color","#848482");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #848482");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #848482");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #848482");
      }
      if(crytpocontvalue3=="Bitcoin Cash"){
        $("#lite").css("display","none");
        $("#cash").css("display","inline-flex");
        $("#bitcoin").css("display","none");
        $("#eth").css("display","none");
        $(".cont4").css("border","5px solid #4CC947");
        $(".cont4").css("box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("-moz-box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("-webkit-box-shadow","0px 0px 5px 5px #4CC947");
        $(".cont4").css("color","#4CC947");
        $(".cont1").css("box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("-moz-box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("-webkit-box-shadow","0px 0px 5px 17px #4CC947");
        $(".cont1").css("color","#4CC947");
        $(".circle").css("-webkit-box-shadow","0px 0px 156px 28px #4CC947");
        $(".circle").css("-moz-box-shadow","0px 0px 156px 28px #4CC947");
        $(".circle").css("box-shadow:","0px 0px 156px 28px #4CC947");
      }
    });

/******************PERIOD**********************************/
    $("#typecont1").click(function(){
        typecontvalue1=$("#typecont1").text();
        typemainvalue=$("#typevalue").text();
        // alert(typecontvalue1);
        $("#typecont1").text(typemainvalue);
        $("#typevalue").text(typecontvalue1);
        // alert(contvalue1);
        typeboxes=$("#typevalue").text();
      });
      $("#typecont2").click(function(){
          typecontvalue2=$("#typecont2").text();
          typemainvalue=$("#typevalue").text();
          $("#typecont2").text(typemainvalue);
          $("#typevalue").text(typecontvalue2);
          typeboxes=$("#typevalue").text();

        });
      $("#typecont3").click(function(){
          typecontvalue3=$("#typecont3").text();
          typemainvalue=$("#typevalue").text();
          $("#typecont3").text(typemainvalue);
          $("#typevalue").text(typecontvalue3);
          typeboxes=$("#typevalue").text();

        });
      $("#typecont4").click(function(){
          typecontvalue4=$("#typecont4").text();
          typemainvalue=$("#typevalue").text();
          $("#typecont4").text(typemainvalue);
          $("#typevalue").text(typecontvalue4);
          typeboxes=$("#typevalue").text();


        });
      $("#typecont5").click(function(){
          typecontvalue5=$("#typecont5").text();
          typemainvalue=$("#typevalue").text();
          $("#typecont5").text(typemainvalue);
          $("#typevalue").text(typecontvalue5);
          typeboxes=$("#typevalue").text();


        });
  </script>
</body>
</html>
