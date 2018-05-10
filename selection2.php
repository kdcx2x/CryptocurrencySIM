<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="layout11.css">
  <style>

  .whitesquare{
    border-radius: 50%;
    position: relative;
    border: 2px solid red;
    height: 75px;
    display: inline-block;
    width: 75px;
    left: 75%;
    margin-top: 30px;
    font-size: 20px;

  }
  .whitesquare:hover{
    background: #fe6f5e;
    cursor: pointer;
  }
    .wrapper{
      position: relative;
      top: 0;
      left: 0;
      height: 20%;
      width: 100%;
      border-bottom: 5px solid #fe6f5e;
    }
    .wrapper1{
      position: absolute;
      width: 50%;
      height: 100%;
      /* border: 5px solid green; */

    }
    .wrapper2{
      position: absolute;
      width: 50%;
      height: 100%;
      left:50%;
      top: 17%;
    }

    .wrapper4{
      position: relative;
  top: -36px;
  left: 0;
  height: 100%;
  width: 91.5%;
  margin-left: 81px;
  margin-right: 81px;
  background: #e6e6e6;
background-image: url(images/stardust.png);
    }
    .box{
      padding: 20px;
      top: 81px;
      left:16px;
      position: relative;
      height: 50px;
      background: #5efe6f;
      height: auto;
      display: block;
      width: 97%;
      border: solid black 3px;
      border-style: outset;
      border-radius: 71px;
    }
    .Crypoimgcontainer{
      position: relative;
      width: 115px;
      background: white;
      height: 115px;
      border-style: solid;
      border-color: black;
      border-radius: 12px;
      border-width: 2px;
      display: inline-table;
      padding: 5px;
      margin-left: 94px;
    }
      /* Customize the label (the container) */
    .container {
      display: table;
      position: relative;
      padding-left: 75px;
      margin-bottom: 0px;
      cursor: pointer;
      font-size: 35px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      left: 100px;
      margin-left: 63px;
      font-family: fantasy;
      margin-top: 20px;
      font-weight: bolder;
    }

    /* Hide the browser's default radio button */
    .container input {
      position: absolute;
      opacity: 0;
    }

    /* Create a custom radio button */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 50px;
      width: 50px;
      background-color: #eee;

    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
      background-color: #fe6f5e;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked ~ .checkmark {
      background-color: #fe6f5e;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked ~ .checkmark:after {
      display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
      top: 16px;
      left: 16px;
      width: 19px;
      height: 19px;

      background: white;
    }

    p{
      color: black;
      font-size: 20px;
      margin-left: 45px;
      margin-right: 100px;
      top:230px;
      font-weight: bold;
      position: absolute;


    }

    .EXimgcontainer{
      position: relative;
      width: 115px;
      margin-left: 120px;
      margin-top: 9px;
    }
    h1{
      position: relative;
      font-family: fantasy;
      top: 50%;
      left:70%;
      text-decoration: underline;
      letter-spacing: -3px;
      font-weight: bold;
      display: inline-block;
      word-spacing: 7px;
      font-size: 34px;
      /* color:  #6f5efe; */
    }
    h2{
      position: relative;
      font-size: 20px;
      padding-left: 3px;
      padding-top: 1px;
    }
    h3{
      font-size: 33px;


    }
    h4{
      color: black;
      font-size: 20px;
      margin-left: 45px;
      margin-right: 100px;
      top:230px;
      font-weight: bold;
      position: absolute;
      background: #c0c0c0;
    padding: 13px;
    width: 70%;
    border-radius: 17px;
    -webkit-box-shadow: -14px -17px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: -14px -17px 5px 0px rgba(0,0,0,0.75);
box-shadow: -14px -17px 5px 0px rgba(0,0,0,0.75);
    }
    h5{
      position: relative;
      margin-left: 107px;
      display: inline-block;
      font-size: 33px;
    }
    h6{
      position: relative;
      margin-left: 140px;
      display: inline-block;
      font-size: 33px;
    }

    .GDAX1{
      position: absolute;
      top: 20px;
      font-size: 40px;
      letter-spacing: -6px;
    }
    .kraken1{
      position: absolute;
      top: 20px;
      font-size: 40px;
      letter-spacing: -6px;
    }
    .Bitstamp1{
      position: absolute;
      top: 20px;
      font-size: 40px;
      letter-spacing: -6px;
    }
    .Gemini1{
      position: absolute;
      top: 20px;
      font-size: 40px;
      letter-spacing: -6px;
    }

.crypocont{
  display: inline-grid;
  /* border: 2px solid black; */
  position: relative;
  margin-top: 70px;
    margin-left: 6%;
    text-align: center;
    justify-content: center;
    background: white;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);

}
h1{
  position: absolute;
  top: 20%;
}
  </style>
</head>
<body>

  <content>
    <div class="wrapper3">
      <header>
        <img src="images/logo.png" style="position:absolute;top:-34px;">



      </header>
    <div class="wrapper1">
      <h1>Exchange Selection</h1>
      <form action="selection_handle.php" method="post" id="form">
        <label class="container">GDX
          <input id="GDX"type="radio" name="exchange" value="GDX"checked>
          <span class="checkmark"></span>
        </label>
        <label class="container">Kraken
          <input id="krak"type="radio" name="exchange" value="Kraken">
          <span class="checkmark"></span>
        </label>
        <label class="container">Bitstamp Ltd.
          <input id="bits"type="radio" name="exchange" value="Bitstamp">
          <span class="checkmark"></span>
        </label>
        <label class="container">Gemini
          <input id="gem"type="radio" name="exchange" value="Gemini">
          <span class="checkmark"></span>
        </label>

        </form>
        <button id="butto"class="whitesquare"style="display:block;margin-top:63px;">
          Finish
        </button>

    </div>
    <div class="wrapper2">

        <img id="GDAX" src="images/GDAX100.png"style="margin-left: 50px;margin-top: 20px;height:160px;">


        <img id="kraken"src="images/Kraken100.png"style="margin-left: 50px;margin-top: 60px;display:none;height:70px;">


        <img id="Bitstamp" src="images/Bitstamp200.png"style="margin-left: 20px;margin-top: -10px;display:none;height:300px;">


        <img id="gemini" src="images/Gemini.png"style="margin-left: 50px;margin-top: 59px;display:none;height:90px;">

      <h4 id="geminip" style="display:none">
        They are a licensed digital asset exchange and custodian built for both individuals and institutions. They are a New York trust company regulated by the New York State Department of Financial Services (NYSDFS). Gemini is a fiduciary and subject to the capital reserve requirements, cybersecurity requirements, and banking compliance standards set forth by the NYSDFS and the New York Banking Law.
      </h4>
      <h4 id="Bitstampp"style="display:none">
        We believe bitcoin is here to stay. Our goal is to provide reliable
        easy to use service for companies and individuals to exchange bitcoins.
      </h4>
      <h4 id="GDAXp"style="">
        GDAX (Global Digital Asset Exchange) offers a secure and easy way for traders of all levels to buy and sell digital assets online instantly across trading pairs
      </h4>
      <h4 id="krakenp"style="display:none">
        Founded in 2011, San Francisco-based Kraken is the largest Bitcoin exchange in euro volume and liquidity and also trading Canadian dollars, US dollars, British pounds and Japanese yen. Kraken is consistently rated the best and most secure Bitcoin exchange by independent news media. Kraken was the first Bitcoin exchange to have trading price and volume displayed on the Bloomberg Terminal, the first to pass a cryptographically verifiable proof-of-reserves audit, and is a partner in the first cryptocurrency bank. Kraken is trusted by hundreds of thousands of traders, the Tokyo government's court-appointed trustee, and Germany's BaFin regulated Fidor Bank.
      </h4>
    </div>
  </div>
  <!-- <div class="wrapper4"id="scroll">
    <h1 style="top:0px;left:631px;display:flex;">Available Cryptocurrencies</h1>
    <p class="GDAX1" style="">GDAX</p>
    <p class="kraken1" style="display:none">Kraken</p>
    <p class="Bitstamp1" style="display:none">Bitstamp</p>
    <p class="Gemini1"  style="display:none">Gemini</p>
    <div class="crypocont">
      <img class="bitcoin"src="images/bitcoin.png"style="height: 160px;">
      <h3>Bitcoin</h3>
    </div>

    <div class="crypocont">
      <img class="ethereum"src="images/ethereum.png" style="height: 160px;">
      <h3>Ethereum</h3>
      </div>
      <div class="crypocont">
      <img class="bitcash"src="images/bitcoincash.png"style=" height: 160px;">
      <h3>Bitcoin Cash</h3>
    </div>
    <div class="crypocont">
    <img class="lite"src="images/litecoin.png"style=" height: 160px;">
    <h3>Litecoin</h3>
  </div>

      <!-- <img class="bitcash"src="images/bitcoincash.png"style="position: relative; height: 160px;margin-top: 40px;margin-left: 90px;">
      <img class="lite"src="images/litecoin.png"style="position: relative; height: 160px;margin-top: 40px;margin-left: 90px;"> -->

      <!--
      <h5>Bitcoin Cash</h4>
       -->
    <!-- <div class="Crypoimgcontainer" id="bitcash">
      <img src="images/bitcoincash.png">
    </div>
    <div class="Crypoimgcontainer"id="litecoin">

    </div> -->
  </content>
<footer>
</footer>
<script>
$(document).ready(function(){
  var exchange;
    $("#GDX").click(function(){
      $(".gemini1").hide();
      $(".Bitstamp1").hide();
      $(".kraken1").hide();
      $(".GDAX1").show();
        $("#gemini").hide();
        $("#Bitstamp").hide();
        $("#kraken").hide();
        $("#GDAX").show();
        $("#geminip").hide();
        $("#Bitstampp").hide();
        $("#krakenp").hide();
        $("#GDAXp").show();
        $(".bitcoin").fadein(slow);
        $(".ethereum").fadein(slow);
        $(".bitcash").fadein(slow);
        $(".lite").fadein(slow);
    });
    $("#krak").click(function(){
        $(".kkk").hide();
        $("#gemini").hide();
        $("#Bitstamp").hide();
        $("#kraken").show();
        $("#GDAX").hide();
        $(".gemini1").hide();
        $(".Bitstamp1").hide();
        $(".kraken1").show();
        $(".GDAX1").hide();
        $("#geminip").hide();
        $("#Bitstampp").hide();
        $("#krakenp").show();
        $("#GDAXp").hide();
        $(".bitcoin").fadein(slow);
        $(".ethereum").fadein(slow);
        $(".bitcash").fadein(slow);
        $(".lite").fadein(slow);
    });
    $("#bits").click(function(){
        $("#gemini").hide();
        $("#Bitstamp").show();
        $("#kraken").hide();
        $("#GDAX").hide();
        $(".gemini1").hide();
        $(".Bitstamp1").show();
        $(".kraken1").hide();
        $(".GDAX1").hide();
        $("#geminip").hide();
        $("#Bitstampp").show();
        $("#krakenp").hide();
        $("#GDAXp").hide();
        $(".bitcoin").fadein(slow);
        $(".ethereum").fadein(slow);
        $(".bitcash").fadein(slow);
        $(".lite").fadein(slow);
    });
    $("#gem").click(function(){
        // alert("sss");
        $("#gemini").show();
        $("#Bitstamp").hide();
        $("#kraken").hide();
        $("#GDAX").hide();
        $(".gemini1").show();
        $(".Bitstamp1").hide();
        $(".kraken1").hide();
        $(".GDAX1").hide();
        $("#geminip").hide();
        $("#Bitstampp").hide();
        $("#krakenp").show();
        $("#GDAXp").hide();
        $(".bitcoin").fadein(slow);
        $(".ethereum").fadein(slow);
        $(".bitcash").fadeTo(1000, 0.4);
        $(".lite").fadeTo(1000, 0.4);
    });
      $("#butto").click(function(){
        // alert("asas");
        exchange=$( "input:checked" ).val()
        // alert(exchange);
        $.post("selection_handle.php",{"exchange":exchange})
        .done(function(data){
          console.log(data);
          if(data=="good"){
            window.location = "empty.php";
          }
        })
        .fail(function(){
          alert("error");
        });

      });
      $(".whitesquare").click(function(){
        $('html, body').animate({
            scrollTop: $(".wrapper4").offset().top
        }, 2000);
      });
});
function movedown() {
    var elmnt = document.getElementById("scroll");
    elmnt.scrollIntoView();
}
</script>
</body>
</html>
