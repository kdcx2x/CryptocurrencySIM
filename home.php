<?php
  // $ID=$_SESSION['userid'];
  date_default_timezone_set("America/New_York");
session_start();
  $user_ID=$_SESSION['userid'];
  $exchange_ID=  $_SESSION['exchangeID'];

  $time=date("h:i:sa m/d/Y");
 ?>
<html>
<head>
  <script src="js/page.js"></script>
  <script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="layout11.css">
  <style>
/***************RATES************************************/
  .rates{
    position: relative;
    width: 90%;
    height: 18%;
    top: 19%;
    left: 10%;
  }
  .bitcoin{
    border: 3px outset black;
    position: relative;
    width: 22%;
    height: 37%;
    display: inline-flex;
    background: #F8AA49;
    /* background: #6f5efe; */
  }
  .bitcoinMore{
    border: 3px solid #F8AA49;
    position: absolute;
    width: 30%;
    height: 52%;
    display: none;
    color: black;
    font-size: 28px;
    font-family: monospace;
    top: 41%;
    left: 0px;
  }
  .litecoin{
    border: 3px outset black;
    position: relative;
    width: 22%;
    height: 37%;
    display: inline-flex;
    background: #B7B7B7;
  }
  .litecoinMore{
    border: 3px solid #B7B7B7;
    position: absolute;
    width: 30%;
    height: 52%;
    display: none;
    color: black;
    font-size: 28px;
    font-family: monospace;
    top: 41%;
    left: 22.7%;
  }
  .ether{
    border: 3px outset black;
    position: relative;
    width: 22%;
    height: 37%;
    display: inline-flex;
    background: #848482;
  }
  .etherMore{
    border: 3px solid #848482;
      position: absolute;
      width: 30%;
      height: 52%;
      display: none;
      color: black;
      font-size: 28px;
      font-family: monospace;
      top: 41%;
      left: 68.3%;
  }
  .bitcash{
    border: 3px outset black;
    position: relative;
    width: 22%;
    height: 37%;
    display: inline-flex;
    background: #4CC947;
  }
  .bitcashMore{
    border: 3px solid #4CC947;
    position: absolute;
    width: 30%;
    height: 52%;
    display: none;
    color: black;
    font-size: 28px;
    font-family: monospace;
    top: 41%;
    left: 45.5%;
  }
  .insideNum{
    display: inline-flex;
  margin-left: 48px;
  margin-top: 22px;
  }
  h4{
    font-size: 18px;
      color: black;
      display: inline-flex;
      margin-left: 11px;
      font-family: Impact, Charcoal, sans-serif;
  }
  .add{
    position: absolute;
  height: 47%;
  margin-top: 8px;
  left: 79%;
  top: 9px;
  display: unset;

  }
  .add:hover{
    cursor: pointer;

  }
/************description*************************************/
.descript{
  border: 0px solid Black;
    height: 33%;
    width: 7%;
    position: absolute;
    top: 47%;
    left: 0px;
    border-left: 0px;
    border-radius: 3px 30px 30px 3px;
    /* background-image: linear-gradient(to bottom,#fe6f5e,#5efe6f); */
    background: #fe6f5e;
}
.descript1{
  border: 0px solid Black;
    height: 33%;
    width: 7%;
    position: absolute;
    top: 47%;
    left: 93%;
    border-left: 0px;
    border-radius: 30px 3px 3px 30px;
    /* background-image: linear-gradient(to bottom,#fe6f5e,#5efe6f); */
    background: #fe6f5e;
}
.words{

  position: absolute;
    font-size: 42px;
    top: 38%;
}
/************SHOWPROFIT*****************************************/
.container{
  position: relative;
display: inline-table;
width: 19%;
height: auto;
margin-top: 18%;
margin-left: 24px;
color: black;
text-align: -webkit-center;
font-size: 27px;
font-family: monospace;
left: 11%;
}
.whitecircle{

  position: relative;
  border: 2px solid red;
  height: 175px;
  display: inline-block;
  width: 175px;
  text-align: center;
}
h2{
  margin-top: 72px;
  font-size: 17px;
  position: absolute;
  margin-left: 27px;
}
h1{
  color: black;
margin-top: 50px;
margin-left: 44%;
font-size: 40px;
}
  </style>
</head>
<body>
  <header>

    <img src="images/logo.png" id="logo" style="position:absolute;top:-34px;">
    <nav>
      <ul>
        <li><a class="active" href="home.php">Homepage</a></li>
        <li><a href="userhistory.php">History</a></li>
        <li><a href="investment.php">Invest</a></li>
        <li><a href="press.php">Press</a></li>
      </ul>
  	</nav>
  </header>
  <div class="rates">
    <div class="bitcoin">
      <h4>Bitcoin</h4>
      <img src="images/add.png"class="add" id="bit">
    </div>
    <div class="bitcoinMore">
      <h4>Rate:</h4>
      <div class="insideNum">
    </div>
    </div>
    <div class="litecoin">
      <h4>Litecoin</h4>
      <img src="images/add.png"class="add" id="lit">
    </div>
    <div class="litecoinMore">
      <h4>Rate:</h4>
      <div class="insideNum">
    </div>
    </div>

    <div class="bitcash">
      <h4>BitcoinCash</h4>
      <img src="images/add.png"class="add" id="cash">
    </div>
    <div class="bitcashMore">
      <h4>Rate:</h4>
      <div class="insideNum">
    </div>
    </div>

    <div class="ether">
      <h4>Ethereum</h4>
      <img src="images/add.png"class="add" id="eth">
    </div>
    <div class="etherMore">
      <h4>Rate:</h4>
      <div class="insideNum">
    </div>
    </div>
  </div>
  <div class="descript" >
    <div class="words"style="transform: rotate(270deg);">
      Total
    </div>
  </div>
  <div class="descript1">
    <div class="words" style="transform: rotate(90deg);">
      Profit
    </div>
  </div>
  <div class="container">
    <div class="whitecircle">
      <h2 id="profitBit"></h2>
    </div>
    Bitcoin
  </div>
  <div class="container">
    <div class="whitecircle">
      <h2 id="profitLit"></h2>
    </div>
    Litecoin
  </div>
  <div class="container">
    <div class="whitecircle">
      <h2 id="profitCash"></h2>
    </div>
    BitcoinCash
  </div>
  <div class="container">
    <div class="whitecircle">
      <h2 id="profitEth"></h2>
    </div>
    Ethereum
  </div>
  <h1><?php echo $time; ?></h1>
  </div>
  <div class="descript" >
    <div class="words"style="transform: rotate(270deg);">
      Total
    </div>
  </div>
  <div class="descript1">
    <div class="words" style="transform: rotate(90deg);">
      Profit
    </div>
  </div>
  <footer>
    <a href="logout.php">Logout</a>
  </footer>
  <script>

  $(document).ready(function(){
      var hideBit=0;
      var hideLit=0;
      var hideEth=0;
      var hideCash=0;

      //
      $.post("handle_profit.php",{"crypo":"Bitcoin"})
      .done(function(data){

        $('#profitBit').html(data);
        if(data=="$0.00"){
          $('#profitBit').css("margin-left","45px");
        }else{
          $('#profitBit').css("margin-left","20px");
        }
        console.log(data);

      })
      .fail(function(){
        alert("error");
      });
      $.post("handle_profit.php",{"crypo":"Litecoin"})
      .done(function(data){

        $('#profitLit').html(data);
        if(data=="$0.00"){
          $('#profitLit').css("margin-left","45px");
        }else{
          $('#profitLit').css("margin-left","20px");
        }
        console.log(data);

      })
      .fail(function(){
        alert("error");
      });
      $.post("handle_profit.php",{"crypo":"BitcoinCash"})
      .done(function(data){

        $('#profitCash').html(data);
        if(data=="$0.00"){
          $('#profitCash').css("margin-left","45px");
        }else{
          $('#profitCash').css("margin-left","20px");
        }
        console.log(data);

      })
      .fail(function(){
        alert("error");
      });
      $.post("handle_profit.php",{"crypo":"Ethereum"})
      .done(function(data){

        $('#profitEth').html(data);
        if(data=="$0.00"){
          $('#profitEth').css("margin-left","45px");
        }else{
          $('#profitEth').css("margin-left","20px");
        }
        console.log(data);

      })
      .fail(function(){
        alert("error");
      });




      $("#bit").click(function(){

          var exchange = <?php echo json_encode($exchange); ?>;
          var user_ID = <?php echo json_encode($user_ID); ?>;

          // alert(exchange);
          if(hideBit==1){
              $(".bitcoinMore").toggle("slow");
              hideBit=0;
          }else{
            if(hideLit==1){
              $(".litecoinMore").toggle("slow");
              hideLit=0;
            }
            if(hideEth==1){
              $(".EtherMore").toggle("slow");
              hideEth=0;
            }
            if(hideCash==1){
              $(".bitcashMore").toggle("slow");
              hideCash=0;
            }
          $(".bitcoinMore").toggle( "slow",function(){
            $(".bitcoinMore").css("display", "inline-block");
            $.post("hphandle.php",{"crypo":"Bitcoin"})
            .done(function(data){

              console.log(data);
              $('.insideNum').html(data);
              hideBit=1;
            })
            .fail(function(){
              alert("error");
            });
            // alert("in");
          });
        }

      });
      $("#lit").click(function(){
          var exchange = <?php echo json_encode($exchange); ?>;
          var user_ID = <?php echo json_encode($user_ID); ?>;

          // alert(exchange);
          if(hideLit==1){
            $(".litecoinMore").toggle( "slow");
            hideLit=0;
          }else{
            if(hideBit==1){
              $(".bitcoinMore").toggle("slow");
              hideBit=0;
            }
            if(hideEth==1){
              $(".EtherMore").toggle("slow");
              hideEth=0;
            }
            if(hideCash==1){
              $(".bitcashMore").toggle("slow");
              hideCash=0;
            }
          $(".litecoinMore").toggle( "slow",function(){

            $(".litecoinMore").css("display", "inline-block");
            $.post("hphandle.php",{"crypo":"Litecoin"})
            .done(function(data){

              console.log(data);
              $('.insideNum').html(data);
              hideLit=1;

            })
            .fail(function(){
              alert("error");
            });
            // alert("in");
          });
        }

      });
      $("#cash").click(function(){
          var exchange = <?php echo json_encode($exchange); ?>;
          var user_ID = <?php echo json_encode($user_ID); ?>;

          // alert(exchange);
          if(hideCash==1){
            $(".bitcashMore").toggle( "slow");
            hideCash=0;
          }else{
            if(hideBit==1){
              $(".bitcoinMore").toggle("slow");
              hideBit=0;
            }
            if(hideEth==1){
              $(".EtherMore").toggle("slow");
              hideEth=0;
            }
            if(hideLit==1){
              $(".litecoinMore").toggle( "slow");
              hideLit=0;
            }
          $(".bitcashMore").toggle( "slow",function(){

            $(".bitcashMore").css("display", "inline-block");
            $.post("hphandle.php",{"crypo":"BitcoinCash"})
            .done(function(data){
              console.log(data);
              $('.insideNum').html(data);
              hideCash=1;

            })
            .fail(function(){
              alert("error");
            });
            // alert("in");
          });
        }

      });

      $("#eth").click(function(){
          var exchange = <?php echo json_encode($exchange); ?>;
          var user_ID = <?php echo json_encode($user_ID); ?>;

          // alert(exchange);
          if(hideEth==1){
            $(".etherMore").toggle( "slow");
            hideEth=0;
          }else{
            if(hideBit==1){
              $(".bitcoinMore").toggle("slow");
              hideBit=0;
            }
            if(hideLit==1){
              $(".litecoinMore").toggle( "slow");
              hideLit=0;
            }
            if(hideCash==1){
              $(".bitcashMore").toggle( "slow");
              hideCash=0;
            }
          $(".EtherMore").toggle( "slow",function(){

            $(".EtherMore").css("display", "inline-block");
            $.post("hphandle.php",{"crypo":"Ethereum"})
            .done(function(data){

              console.log(data);
              $('.insideNum').html(data);
              hideEth=1;

            })
            .fail(function(){
              alert("error");
            });
            // alert("in");
          });
        }

      });
  });

  </script>
</body>
</html>
