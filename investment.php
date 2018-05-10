<html>
<head>
  <script src="js/page.js"></script>
  <script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="layout22.css">
  <style>
  body{
    font-family:Impact, Charcoal, sans-serif;
  }
  /***************alertS***********************************/
  .note{
      position: absolute;
      width: 318px;
      height: 29px;
      top: 142px;
      left: 512px;
      background: #f8a23b;
      border-radius: 30px;
      color: white;
      letter-spacing: 3px;
      padding-top: 8px;
      padding-left: 11px;
      display: none;
  }
  .note1{
    position: absolute;
    width: 318px;
    height: 29px;
    top: 142px;
    left: 512px;
    background: #f8a23b;
    border-radius: 30px;
    color: white;
    letter-spacing: 3px;
    padding-top: 8px;
    padding-left: 11px;
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
/****************LABEL**************************************/
.name{
  border: 0px solid Black;
  height: 33%;
  width: 7%;
  position: absolute;
  top: 47%;
  left: 0px;
  border-left: 0px;
  border-radius: 3px 30px 30px 3px;
  /* background-image: linear-gradient(to bottom,#fe6f5e,#5efe6f); */
  background: #6f5efe;
}
.wor{
  position: absolute;
    font-size: 42px;
    top: 38%;
}
/*************PLUS/MINUS CONTAINER****************************************/
.container{
  border: .5px solid black;
  border-bottom: 0px solid black;
  height: 42px;
  top:  243px;
  position: absolute;
  width: 123px;
  border-radius: 19px 19px 0px 0px;
  margin-left: 18%;
    background: url(images/light-wool.png);
}
.plus{
  display: inline-flex;
  width: 61.5px;
  position: absolute;
  height: 100%;
  background: url(images/light-wool.png);
  background-color: #f8a23b;
  border-radius: 19px 0px 0px 0px;
  cursor: pointer;
  border-left: .5px solid;

}
.minus{
  display: inline-flex;
  width: 61.5px;
  border-left: 2px solid black;
  border-right:  .5px solid black;
  border-bottom:  .5px solid black;
  position: absolute;
  height: 100%;
  left: 61.6px;
  border-radius: 0px 19px 0px 0px;
  background: url(images/light-wool.png);
  background-color: white;
  cursor: pointer;
}
#addminus{
  position: absolute;
  margin-left: 18px;
  width: 22px;
  top: 9px;
}
/***************INVESTMENT CONTAINER TABS***************************************************/
h1{
  margin-left: 1px;
  font-size: 20px;
  position: absolute;
}
.crytpoBitcoin{
  display: inline-flex;
width: 130.5px;

position: absolute;
height: 100%;
font-size: 10px;
color: black;
background: url(images/light-wool.png);
background: #F8A23B;
border-radius: 17px 0px 0px 0px;
letter-spacing: 1px;
cursor: pointer;
}
.cryptoLitcoin{
  display: inline-flex;
  width: 130.5px;
  position: absolute;
  height: 100%;
  left:130.5px;
  font-size: 10px;
  color: #f4f4f4;
  background: url(images/light-wool.png);
  background: #878787;
  border-left: .5px solid black;
  border-right: .5px solid black;
  letter-spacing: 1px;
  border-bottom:  .5px solid black;
  cursor: pointer;
}
.cryptoEthereum{
  display: inline-flex;
  width: 130.5px;
  position: absolute;
  height: 100%;
  left: 391.5;
  font-size: 10px;
  color: #e0e0e0;
  background: url(images/light-wool.png);
  background: #2F3030;
  border-radius: 0px 17px 0px 0px;
  letter-spacing: 1px;
  border-bottom:  .5px solid black;
  cursor: pointer;
}
.crytpoCash{
  display: inline-flex;
  width: 130.5px;
  position: absolute;
  height: 100%;
  left:261px;
  font-size: 10px;
  color: black;
  background: url(images/light-wool.png);
  background: #4CC947;
  border-right: .5px solid black;
  border-bottom:  .5px solid black;
  cursor: pointer;

}
/*****************INVESTMENT CONTAINER**********************************/
.container1{
  border: .5px solid black;
  border-top: 0px solid black;
  width: 58.7%;
  height: 39%;
  position: absolute;
  top: 286px;
  border-radius: 0px 0px 19px 19px;
  margin-left: 18%;
  /* background: url(images/asfalt-dark.png); */
  background: url(images/light-wool.png);
  background-color: #f8a23b;

}
.topborder{
  position: absolute;
border: .5px solid black;
display: inline-flex;
left: 125px;
width: 198;
top: -1px;
}
.value{
  position: absolute;
  border: .8px solid black;
  display: inline-flex;
  color: black;
  font-size: 37px;
  border-radius: 10px 0px 10px 0px;
  top: 80px;
  background: #ba9c79;
  padding-left: 36px;
  padding-right: 36px;
  cursor: pointer;
}
#buysell{
  cursor: pointer;
}
#buying{
  display: inline-flex;
}
#buying2{
  background: none;
  border: 0px solid black;
  color: black;
  font-size: 37px;
  width: 157px;
  outline: none;
  font-family: Impact, Charcoal, sans-serif;
  display: none;
}
#coins2{
  /* display: inline-flex; */
  font-size: 18px;
  position: relative;
  margin-top: 6%;
  display: none;
  margin-left: -27px;
}
#coins{
  display: inline-flex;
}
value:focus{
  border: .5px solid #fe6f5e;
}
#valuerate{
  display: none;
}
#wordrate{
  cursor: pointer;
}
#coinper{
  cursor: pointer;
}
.reader{
  position: absolute;

}

input[type=number]{
  background: none;
  border: 0px solid black;
  color: black;
  font-size: 37px;
  width: 157px;
  outline: none;
  font-family: Impact, Charcoal, sans-serif;
  /* display: none; */
}
input[type=number]:focus{
  border: 0px solid black;
}
.words{
  position: absolute;
  border: .8px solid black;
  border-top: 0px solid black;
  top: 127px;
  display: inline-flex;
  color: black;
  font-size: 20px;
  border-radius: 0px 0px 10px 10px;
  padding-left: 10px;
  padding-right: 10px;
  background: black;
  color: white;
  letter-spacing: 3px;
}
/***********INVEST BUTTON**************************************/
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
      background-color:black;
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
      background:black;
    }

    .flex {
      min-height:50vh;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    a.bttn {
      color:black;
      text-decoration:none;
      -webkit-transition:0.3s all ease;
      transition:0.3s ease all;
      position: absolute;
          top: 77%;
  z-index: 5;
  left: 73%;
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
      border:3px solid black;
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
        background-color:black;
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
        <li><a href="userhistory.php">History</a></li>
        <li><a class="active" href="investment.php">Invest</a></li>
        <li><a href="press.php">Press</a></li>
      </ul>
  	</nav>
  </header>



    <div class="note">
      Transaction Completed!
      <span class="closebtn">&times;</span>
    </div>
    <div class="note1">
      Transaction Uncompleted!
      <span class="closebtn">&times;</span>
    </div>
  <div class="name">
    <div class="wor" style="transform: rotate(270deg);">
      Invest
    </div>
  </div>
  <div class="container">

    <div class="plus" >
      <img src="images/addcry.png" id="addminus">
  </div>
  <div class="minus">
    <img src="images/minuscry.png"id="addminus">
  </div>
</div>
  <div class="container" style="left:324px;width:522px;">
    <div class="crytpoBitcoin">
      <h1 style="left:37px">Bitcoin</h1>
  </div>
  <div class="crytpoCash">
    <h1 style="left: 15px;">Bitcoin Cash</h1>
  </div>
  <div class="cryptoEthereum">
    <h1 style="left:24px;letter-spacing:2px;">Ethereum</h1>
  </div>
  <div class="cryptoLitcoin">
    <h1 style="left:32px;letter-spacing:2px;">Litecoin</h1>
  </div>
</div>
<div class="container1">
  <div class="topborder">
  </div>
  <div class="value"style="left: 351px;width:180px;height: 45px;">

    <input type="number" name="quantity"id="coins" value="0.0"style="font-size: 18px;width: 239px;padding: 0px;margin-left: -27px;">
    <span id="coins2">0</span>
    <!-- coins -->
  </div>
  <div class="value" id="rate"style="left: 620px;width:147px;">
    $<span id="valuerate2">0000.00</span>
    <input type="number" id="valuerate"name="quantity" value="0.00" step=".01" min=".01" >
    <!-- rate -->
  </div>
  <div class="value" style="left:54px;width:157px;">

    $<input type="number"id="buying"name="quantity" value="0.00" step=".01" min=".01" >
    <span id="buying2">0000.00</span>
    <!-- buying -->
  </div>
  <div class="words" id="wordrate"style="left: 653px;">
    Rate
  </div>
  <div class="words" id="coinper"style="left: 380px;">
    Coins
  </div>
  <div class="words"id="buysell"style="left: 81px;">
    Buying
  </div>
  <form  name="invest"style="display:none">
  <input type="radio" name="type" value="0" checked>
  <input type="radio" name="type"value="1">
  <input type="radio" name="crytpo" value="0" checked>
  <input type="radio" name="crytpo" value="1">
  <input type="radio" name="crytpo" value="2">
  <input type="radio" name="crytpo" value="3">
  </form>
</div>
<div class="reader">
<!-- <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="76111/"></script>  -->
</div>

<div class="flex">
<a href="#0" class="bttn">Invest</a>
</div>

  <footer>
    <a href="logout.php">Logout</a>
  </footer>
  <script>
  $(document).ready(function(){
    var plus=0;
    var minus=1;
    var maincolor=1;
    var bitrate=8909;
    var litrate;
    var cashrate;
    var ethrate;
    var buying;
    var coins;
    var rate;
    var crytpo;
    var changerate=1;
    var changebuysell=1;
    var changecoin=1;
    var num;
    var num1;

    $.post("invest_handle.php",{"type":1,"crypo":"Bitcoin"})
    .done(function(data){
      // var testnum=parseInt($(this).attr(data), 10);
      // alert(testnum);
      console.log(data);
      num=data;
      // alert(num);
      $('#valuerate2').text(data);
      crytpo="Bitcoin";

    })
    .fail(function(){
      alert("error");
    });

    $(".crytpoBitcoin").click(function(){
      $.post("invest_handle.php",{"type":1,"crypo":"Bitcoin"})
      .done(function(data){
        num=data;
        console.log(data);
        $('#valuerate2').html(data);
        rate=data;
            crytpo="Bitcoin";
            $(".note").css("display","none");
            $(".note1").css("display","none");
            $(".note1").css("background","#F8A23B");
            $(".note").css("background","#F8A23B");

      })
      .fail(function(){
        alert("error");
      });
    });

    $("#wordrate").click(function(){
      if(changerate==1){
        //a(changerate);
      $("#valuerate").css("display","inline-flex");
      $("#valuerate2").css("display","none");
      }
    if(changerate==0){

      //alert(changerate);
      $("#valuerate").css("display","none");
      $("#valuerate2").css("display","inline-flex");

    }
    if(changerate==0){
      changerate=1;
    }else{
      changerate=0;
    }

    });
    $("#coinper").click(function(){
      if(changecoin==1){
        //a(changerate);
      $("#coins2").css("display","inline-flex");
      $("#coins").css("display","none");
      }
    if(changecoin==0){

      //alert(changerate);
      $("#coins2").css("display","none");
      $("#coins").css("display","inline-flex");

    }
    if(changecoin==0){
      changecoin=1;
    }else{
      changecoin=0;
    }

    });
    $("#buysell").click(function(){
      if(changebuysell==1){
        //a(changerate);
      $("#buying").css("display","inline-flex");
      $("#buying2").css("display","none");
      }
    if(changebuysell==0){


      $("#buying").css("display","none");
      $("#buying2").css("display","inline-flex");

    }
    // alert(changebuysell);
    var numm=0;
    if(changebuysell==0){
      changebuysell=1;
      $("#coins").val("0.0");
    }else{
      changebuysell=0;
      $("#coins").val("0.0");
      // ('').val(num);
    }

    });

    $(".cryptoLitcoin").click(function(){

        $.post("invest_handle.php",{"type":1,"crypo":"Litecoin"})
        .done(function(data){
          num=data;
          // parseInt($(this).find('.number').text(), 10);
          console.log(data);
          $('#valuerate2').html("");
          $('#valuerate2').html(data);
          crytpo="Litecoin";
          $(".note").css("display","none");
          $(".note1").css("display","none");
          $(".note1").css("background","#878787");
          $(".note").css("background","#878787");
        })
        .fail(function(){
          alert("error");
        });
    });
    $(".cryptoEthereum").click(function(){

        $.post("invest_handle.php",{"type":1,"crypo":"Ethereum"})
        .done(function(data){
          num=data;
          console.log(data);
          // $('#valuerate2').html("");

          $('#valuerate2').text(data);
          crytpo="Ethereum";
          $(".note").css("display","none");
          $(".note1").css("display","none");
          $(".note1").css("background","#2F3030");
          $(".note").css("background","#2F3030");

        })
        .fail(function(){
          alert("error");
        });
    });
    $(".crytpoCash").click(function(){

        $.post("invest_handle.php",{"type":1,"crypo":"BitcoinCash"})
        .done(function(data){
          num=data;
          console.log(data);
          $('#valuerate2').html(data);

          crytpo="Bitcoin Cash";
          $(".note").css("display","none");
          $(".note1").css("display","none");
          $(".note1").css("background","#4CC947");
          $(".note").css("background","#4CC947");

        })
        .fail(function(){
          alert("error");
        });
    });
    $("#buying").change(function(){
            // alert('sdsd');
            var spent=$("#buying").val();
            $("#coins").css("display","none");
            $("#coins2").css("display","inline-flex");
            // alert(buying);
            if(buying<0){
              $('#buying').val('0');
            }else{
              $.post("invest_handle.php",{"type":5,"spent":spent,"rate1":num})
              .done(function(data){

                  console.log(data);
                $('#coins2').html(data);
               })
               .fail(function(){
                 alert("error");
               });
          }
        });

        $("#coins").change(function(){
                // alert('sdsd');
                coins= $("#coins").val();
                // alert(buying);

                // alert(coins);
                num1= $("#valuerate").text();
                $("#buying").css("display","none");
                $("#buying2").css("display","inline-flex");
                // alert(num1);
                // alert(rate);
                // alert(jquery.type(num));
                // alert(jquery.type(coins));
                if(coins<0){
                  $('#coins').val('0');
                }else{
                  $.post("invest_handle.php",{"type":4,"coins":coins,"rate1":num})
                  .done(function(data){

                      console.log(data);
                    $('#buying2').html(data);
                   })
                   .fail(function(){
                     alert("error");
                   });
                // buying=coins*num;
                // alert(coins);

                // alert(buying);
              }
            });
        $("#valuerate").change(function(){
                // alert('sdsd');

                rate= $("#valuerate").val();
                buying = $("#buying").val();
                // alert(buying);
                if(rate<0){
                  $('#valuerate').val('0');

                }else{
                  coins= $("#coins").val();
                  if(coins==0 && buying!=0){
                    coins=buying/rate;
                    $('#coins').val(coins);
                  }
                  if(coins!=0 && buying==0){
                    buying=coins*bitrate;
                    $('#buying').val(buying);
                  }
                  if(coins!=0 && buying!=0){
                    coins=buying/rate;
                    $('#coins').val(coins);
                  }
                  if(coins==0 && buying==0)
                  buying=coins*bitrate;
                  $('#buying').val(buying);
                }
            });



// buying=100;
// coins=buying/bitrate;
// alert(coins);
// $('#coins').val(coins);


      $(".plus").click(function(){
        // alert("kelsey");
        if(plus==1){
          // alert("choice");
          plus=0;
          minus=1;
          $('input:radio[name=type]')[0].checked = true;
          $(".minus").css("background-color", "white");
          $(".plus").css("border-bottom", "0px solid black");
          $(".minus").css("border-bottom", ".5px solid black");
          $("#buysell").replaceWith("<div class='words' id='buysell'style='left: 81px;'>Buying</div>");
          if(maincolor==1){
            $(".plus").css("background-color", "#f8a23b");
          }
          if(maincolor==1){
            $(".plus").css("background-color", "#f8a23b");
          }
          if(maincolor==2){
            $(".plus").css("background-color", "#878787");
          }
          if(maincolor==3){
            $(".plus").css("background-color", "#4CC947");
          }
          if(maincolor==4){
            $(".plus").css("background-color", "#2F3030");
          }
        }
      });
      $(".minus").click(function(){
        if(minus==1){
          // alert("ass");
          minus=0;
          plus=1;
          $('input:radio[name=type]')[1].checked = true;
          $(".plus").css("background-color", "white");
          $(".minus").css("border-bottom", "0px solid black");
          $(".plus").css("border-bottom", ".5px solid black");
          $("#buysell").replaceWith("<div class='words' id='buysell'style='left: 81px;'>Selling</div>");





          if(maincolor==1){
            $(".minus").css("background-color", "#f8a23b");
            $.post("handle_coins.php",{"crypo":"Bitcoin"})
            .done(function(data){
              // alert("in");
              $('#coins').html(data);
              console.log(data);

            })
            .fail(function(){
              alert("error");
            });
          }
          if(maincolor==2){
            $(".minus").css("background-color", "#878787");
            $.post("handle_coins.php",{"crypo":"litecoin"})
            .done(function(data){
              // alert("in");
              $('#coins').html(data);
              console.log(data);

            })
            .fail(function(){
              alert("error");
            });
          }
          if(maincolor==3){
            $(".minus").css("background-color", "#4CC947");
            $.post("handle_coins.php",{"crypo":"BitcoinCash"})
            .done(function(data){
              // alert("in");
              $('#coins').html(data);
              console.log(data);

            })
            .fail(function(){
              alert("error");
            });
          }
          if(maincolor==4){
            $(".minus").css("background-color", "#2F3030");
            $.post("handle_coins.php",{"crypo":"Ethereum"})
            .done(function(data){
              // alert("in");
              $('#coins').html(data);
              console.log(data);

            })
            .fail(function(){
              alert("error");
            });
          }
        }
      });
      $(".crytpoBitcoin").click(function(){
        if(maincolor!=1){
          // alert("bit");
          maincolor=1;
          $('input:radio[name=crytpo]')[0].checked = true;
          $('#valuerate').html(bitrate);
          $(".container1").css("background-color", "#f8a23b");
          $(".crytpoBitcoin").css("border-bottom", "0px solid black");
          $(".cryptoLitcoin").css("border-bottom", ".5px solid black");
          $(".crytpoCash").css("border-bottom", ".5px solid black");
          $(".cryptoEthereum").css("border-bottom", ".5px solid black");
          $(".value").css("background-color", "#ba9c79");
          if(plus==0){
            $(".plus").css("background-color", "#f8a23b");
          }
          if(minus==0){
            $(".minus").css("background-color", "#f8a23b");
          }
        }
      });
      $(".cryptoLitcoin").click(function(){
        if(maincolor!=2){
          // alert("lite");
          maincolor=2;
          $('input:radio[name=crytpo]')[1].checked = true;
          $('#valuerate').html(litrate);
          $(".container1").css("background-color", "#878787");
          $(".crytpoBitcoin").css("border-bottom", ".5px solid black");
          $(".cryptoLitcoin").css("border-bottom", "0px solid black");
          $(".crytpoCash").css("border-bottom", ".5px solid black");
          $(".cryptoEthereum").css("border-bottom", ".5px solid black");
          $(".value").css("background-color", "#f3f3f3");



          if(plus==0){
            $(".plus").css("background-color", "#878787");
          }
          if(minus==0){
            $(".minus").css("background-color", "#878787");
          }
        }
      });
      $(".crytpoCash").click(function(){
        if(maincolor!=3){
          // alert("cash");
          maincolor=3;
          $('input:radio[name=crytpo]')[2].checked = true;
          $('#valuerate').html(cashrate);
          $(".container1").css("background-color", "#4CC947");
          $(".crytpoBitcoin").css("border-bottom", ".5px solid black");
          $(".cryptoLitcoin").css("border-bottom", ".5px solid black");
          $(".crytpoCash").css("border-bottom", "0px solid black");
          $(".cryptoEthereum").css("border-bottom", ".5px solid black");
          $(".value").css("background-color", "#7f927e");
          if(plus==0){
            $(".plus").css("background-color", "#4CC947");
          }
          if(minus==0){
            $(".minus").css("background-color", "#4CC947");
          }
        }
      });
      $(".cryptoEthereum").click(function(){
        if(maincolor!=4){
          // alert("eth");
          maincolor=4;
          $('input:radio[name=crytpo]')[3].checked = true;
          $('#valuerate').html(ethrate);
          $(".container1").css("background-color", "#2F3030");
          $(".crytpoBitcoin").css("border-bottom", ".5px solid black");
          $(".cryptoLitcoin").css("border-bottom", ".5px solid black");
          $(".crytpoCash").css("border-bottom", ".5px solid black");
          $(".cryptoEthereum").css("border-bottom", "0px solid black");
          $(".value").css("background-color", "#f4f4f4");
          $(".words").css("background-color", "white");
          $(".words").css("color", "black");
          if(plus==0){
            $(".plus").css("background-color", "#2F3030");
          }
          if(minus==0){
            $(".minus").css("background-color", "#2F3030");
          }
        }
      });
      $(".bttn").click(function(){
        if(changerate==1){
          var bprice=$("#valuerate2").text();
        }
        if(changerate==0){
          var bprice=$("#valuerate").val();
        }
        $(".note").css("display","none");
        $(".note1").css("display","none");
        var spent=$("#buying").val();
        //alert(bprice);
      //alert(spent);
      //alert(minus);
      //alert(plus);
      if(minus==0){
        //alert("minus");
        $.post("invest_handle.php",{"type":2,"crypo":crytpo,"bPrice":bprice,"spent":spent})
        .done(function(data){
          console.log(data);
          if(data=="good"){
            //alert("good");
            $(".note").css("display","block");
          }else{
            //alert("bad");
            $(".note1").css("display","block");
          }

        })
        .fail(function(){
          alert("error");
        });
      }
      if(plus==0){
        //alert("plus")
        $.post("invest_handle.php",{"type":3,"crypo":crytpo,"bPrice":bprice,"spent":spent})
        .done(function(data){
          console.log(data);
          if(data=="good"){
            // alert("good");
            $(".note").css("display","block");
          }else{
            // alert("bad");
            $(".note1").css("display","block");
          }

        })
        .fail(function(){
          //alert("error");
        });
      }


      });
      $(".closebtn").click(function(){
        $(".note").fadeOut();
          $(".note1").fadeOut();
        // $(".note").css("display","none");
      });
  });
  </script>
</body>
</html>
