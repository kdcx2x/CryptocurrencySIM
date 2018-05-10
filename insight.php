<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/layout.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
      $("p").mouseover(function(){
          $("p").css("background-color", "yellow");
      });
      $("p").mouseout(function(){
          $("p").css("background-color", "#f9f9f9");
      });
  });
  </script>
  <style>
    @font-face {
      font-family: insightfront;
      src: url(fonts/ostrich-sans-master/OstrichSansInline-Italic.otf);
    }
    .container{
      position: absolute;
/* border: 2px solid green; */
/* background-image: url(images/iron-grip.png); */
width: 714px;
height: 480px;
top: 165px;
left: 24%;
font-family: insightfront;
font-weight: 100;
    }
    .container1{
      position: absolute;
    /* border: 2px solid red; */
    top: 130px;
    width: 100%;
    height: 84px;
    color: Black;

    }
    .timeStart{
      /* border: 2px solid purple; */
position: absolute;
width: 357px;
height: 130px;
border-top: 6px solid;
border-left: 6px solid #5efe6f;
border-radius: 17px 0px 0px 0px;
    }
    .timeEnd{

      position: absolute;
      width: 357px;
    left: 357;
    height: 130px;
    }
    .crytpoContainer{
      position: absolute;
    height: 100%;
    width: 225.5px;
    border-left: 6px solid #5efe6f;
    border-top: .5px dashed black;
    border-bottom: 6px solid;
    border-radius: 0px 0px 0px 7px;
    }


    .color{
      position: absolute;
  height: 100%;
  width: 131.5px;
  left: 225.5px;
  border-top: .5px dashed black;
  border-left: 2px solid;
  border-right: 2px solid;
    }
    .container1Text{
      position: absolute;
      top: 26px;
      font-size: 42px;
    }
    #container1Text{
      position: absolute;
    top: 22px;
    font-size: 42px;
    font-family: insightfront;
    width: 195px;
    }
    .container1Text1{
      position: absolute;
      font-size: 14px;
      left: 7px;
      top: 5px;
      z-index: 3;
    }
    .containerText{
      position: absolute;
      font-size: 48px;
    left: 44px;
    top: 44px;
    }

    .containerText1{
      position: absolute;
      font-size: 15px;
      top: 11px;
      left: 10px;
      z-index: 3;
    }
    .container2{
      top: 216px;
/* border: 2px solid purple; */
width: 99.1%;
height: 286px;
position: absolute;
border-left: 3px solid #5efe6f;
border-right: 3px solid #5efe6f;
border-bottom: 3px solid #5efe6f;
    }
    .graph{
      position: absolute;
    width: 75%;
    height: 203px;
    top: 31px;
    border: 2px solid black;
    left: 70px;
    }
    .graph1{
      position: absolute;
    width: 75%;
    height: 203px;
    top: 250px;
    border: 2px solid black;
    left: 70px;
    }
    .graph2{
      position: absolute;
    width: 75%;
    height: 203px;
    top: 470px;
    border: 2px solid black;
    left: 70px;
    }

    .line{
      border: .3px solid red;
      border-top: 10px solid black;
      border-bottom: 10px solid black;
    position: absolute;
    height: 20px;
    display: inline-flex;
    margin-left: 10px;
    }
    .line1{
      border: 2px solid red;
      border-top: 10px solid black;
      border-bottom: 10px solid black;
    position: relative;
    height: 20px;
    display: inline-flex;
    margin-left: 10px;
    }
    #select1:hover{
      border: .5px solid black;
      background-color: #f0f0f0;


    }
    #select1{
      padding-left: 3px;
      padding-right: 9px;
      border: .5px solid black;
    }
    #select1:hover .select-content {
    display: block;
}
    .select-content{
      position: absolute;
      display: none;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      position: absolute;
      top: 76px;
      font-size: 26px;
      font-family: insightfront;
      border: .5px solid black;
      left: 20px;
    width: 115px;
    padding-left: 56px;
    background: white;
        padding-bottom: 9px;
    }
    .select-content:hover{
        background-color: #f0f0f0;
    }
    .crytpo {
        position: relative;
        display: inline-block;
        min-width: 160px;
        padding: 12px 14px;
        font-family: insightfront;
        font-size: 42px;
        border: 0px;
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

    }
    #crytpomaincont{

    }
    #crytpocont1{
      margin-top: 33px;
      border-top: .5px solid black;

    }
    #crytpocont2{
      margin-top: 111px;
    border-top: 0px;
    }
    #crytpocont3{
      margin-top: 188px;
          border-top: 0px;
          border-bottom: 2px solid black;
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

/*****COLOR*******/
.colorcont {
    position: relative;
    display: inline-block;
    min-width: 103px;
    padding: 12px 14px;
    font-family: insightfront;
    font-size: 42px;
    border: 0px;
    background: orange;
    min-height: 60px;
    border-bottom: 6px solid;
}


.colorcont:hover{
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  background: transparent;
}
.colorcont:hover .contentcolor{
    display: block;

}
.contentcolor:hover{
  cursor: pointer;
  background: transparent;
}
.contentcolor:hover .contentcolor{
  display: block;

}

.contentcolor{
  display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 103px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 14px;
    z-index: 2;
    left: -2px;
    top: 43px;
    border-bottom: 3px solid black;
    border: 2px solid black;
        border-bottom: 6px solid black;

}



#covercolorcont1{
  margin-top: 32px;
  border-top: .5px solid black;
    z-index: 1;
    height: 50px;
    background-color: green;
  }
  #covercolorcont2{
    margin-top: 109px;
    border-top: .5px solid black;
      z-index: 1;
      height: 50px;
      background-color: Violet;
    }
    #covercolorcont3{
      margin-top: 185px;
      border-top: .5px solid black;
        z-index: 1;
        height: 50px;
        background-color: red;
      }
      #covercolorcont4{
        margin-top: 261px;
        border-top: .5px solid black;
          z-index: 1;
          height: 50px;
          background-color: blue;
        }
        #covercolorcont5{
          margin-top: 337px;
          border-top: .5px solid black;
            z-index: 1;
            height: 50px;
            background-color: yellow;
          }
          #covercolorcont6{
            margin-top: 413px;
            border-top: .5px solid black;
              z-index: 1;
              height: 50px;
              background-color: pink;
            }






#colorcont1{
  margin-top: 32px;
  border-top: .5px solid black;

  }
#colorcont2{
  margin-top: 109px;
border-top: 0px;
  }
#colorcont3{
  margin-top: 185px;
      border-top: 0px;
}
#colorcont4{
  margin-top: 261px;
      border-top: 0px;

}
#colorcont5{
  margin-top: 337px;
      border-top: 0px;
  }
#colorcont6{
  margin-top: 413px;
      border-top: 0px;
      border-bottom: 2px solid black;
  }
  /******NUMBER**************/
  .periodAmount{
    position: absolute;
    height: 100%;
    width: 132.5px;
    left: 357px;
    border-bottom: 6px solid black;
    border-top: .5px dashed black;
  }
  .amountCont {
    position: relative;
    display: inline-block;
    min-width: 37px;
    padding: 0px 14px;
    font-family: insightfront;
    font-size: 54px;
    border: 0px;
    min-width: 39px;
    left: 56px;
    top: 1px;
  }
  .contentamount{
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 38px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 0px 14px 5px;
    z-index: 2;
    left: -2px;
    top: 43px;
    border-bottom: 3px solid black;
    border: 2px solid black;

  }
  .amountcont:hover{
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    background: transparent;
  }
  .amountcont:hover .contentamount{
      display: block;

  }
  .contentamount:hover{
    cursor: pointer;
    background: #ece4ff;
  }
  .amountcont:hover .contentamount{
    display: block;

  }
  #amountcont1{
    margin-top: 22px;
    border-top: .5px solid black;
    border-right: .5px solid black;
    border-bottom: 0px;
    }
  #amountcont2{
    margin-top: 22px;
    border-top: .5px solid black;
    margin-left: 69px;
    border-left: 0px solid;
    border-bottom: 0px;
    }
  #amountcont3{
      margin-top: 93px;
    border-top: .5px solid black;
    border-right: .5px solid black;
    border-bottom: 0px;
    }
  #amountcont4{
    margin-top: 93px;
    border-top: .5px solid black;
    margin-left: 69px;
    border-left: 0px solid;
    border-bottom: 0px;
    }
  #amountcont5{
      margin-top: 164px;
    border-top: .5px solid black;
    border-right: .5px solid black;
    border-bottom: 0px;
      }
  #amountcont6{
    margin-top: 164px;
    border-top: .5px solid black;
    margin-left: 69px;
    border-left: 0px solid;
    border-bottom: 0px;
    }
    #amountcont7{
    margin-top: 235px;
      border-top: .5px solid black;
      border-right: .5px solid black;
      border-bottom: 0px;
      }
    #amountcont8{
      margin-top: 235px;
      border-top: .5px solid black;
      margin-left: 69px;
      border-left: 0px solid;
      }
    #amountcont9{
      margin-top: 306px;
      border-top: .5px solid black;

      }
    #amountcont10{
      margin-top: 306px;
      border-top: .5px solid black;
      margin-left: 69px;


      }
      .amounthide{
        display: none;
        position: relative;
        min-width: 37px;
        padding: 0px 14px;
        font-family: insightfront;
        font-size: 54px;
        border: 0px;
        min-width: 39px;
        left: 56px;
        top: 1px;
      }

/****TYPE***********/
.periodtype{
  position: absolute;
    height: 100%;
    width: 218px;
    left: 489px;
    border-right: 6px solid #5efe6f;
    border-left: 1px solid;
    border-bottom: 6px solid black;
    border-top: .5px dashed black;
    border-radius: 0px 0px 7px 0px;
}
.typeCont {
  position: relative;
display: inline-block;
padding: 0px 14px;
padding-bottom: 0px;
font-family: insightfront;
font-size: 54px;
border: 0px;
min-width: 117px;
left: 56px;
top: 2px;
min-height: 72px;

}
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
  margin-top: 30px;
    border-top: .5px solid black;
    border-bottom: 0px;
  }
#typecont2{
    margin-top: 102px;
    border-top: .5px solid black;
    border-bottom: 0px;
  }
#typecont3{
  margin-top: 174px;
  border-top: .5px solid black;
  border-bottom: 0px;
}
#typecont4{
  margin-top: 246px;
  border-top: .5px solid black;
  border-bottom: 0px;
}
#typecont5{
  margin-top: 318px;
  border-top: .5px solid black;
}
/*******BUTTON**********/
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  top: 207px;
  cursor: pointer;
  position: absolute;
  left: 19px
}
.button:hover{
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
/**********DATE******************************/
#timeStart{
  position: absolute;
font-size: 35px;
left: 4px;
top: 42px;
border: 0px solid;
font-family: insightfront;
color: black;
outline: 0;
}
#timeEnd{
  position: absolute;
    width: 357px;
    height: 130px;
    border-right: 6px solid #5efe6f;
    border-top: 6px solid;
    border-radius: 0px 17px 0px 0px;
    font-family: insightfront;
    font-size: 35px;
    border-left: .5px dashed black;
    border-bottom: 0px;
}
.fillEnd{
  color: red;
display: none;
left: 253px;
position: absolute;
font-weight: bold;
top: 6px;
letter-spacing: 1px;
}
.fillStart{
  color: red;
    display: none;
    left: 243px;
    position: absolute;
    font-weight: bold;
    top: 6px;
    letter-spacing: 1px;
}
#timeStart:focus{
  border: 0px;
}
.wrapper2{
  height: 100%;
width: 105.3%;
position: absolute;
top: 98%;
display: block;
background: #e6e6e6;
margin-left: -26px;
}

  </style>
</head>
<body>
  <div class="wrapper">
    <header>
      <img id="logo"src="images/logo.png">
      <nav>
        <ul>
          <li><a  href="homepage.php">Homepage</a></li>
          <li><a class="active"href="insight.php">Insights</a></li>
          <li><a href="history.php">History</a></li>
          <li><a href="invest.php">Invest</a></li>
        </ul>
      </nav>
    </header>
  <div class="container">
    <div class="timeStart">
      <div class="containerText1">Time Start:</div>
      <div class="fillStart">Fillout Time Start</div>
      <input id="timeStart"type="datetime-local">
    </div>
    <div class="timeEnd">
      <div class="containerText1">Time End:</div>
      <div class="fillEnd">Fillout Time End</div>
      <input id="timeEnd"type="datetime-local">
    </div>
    <div class="container1">
    <div class="crytpoContainer">
      <div class="container1Text1">Cryptocurrency:</div>
      <div class="crytpo">
        <span id="crytpomaincont">Bitcoin</span>
        <div id="crytpocont1"class="content">Litecoin</div>
        <div id="crytpocont2" class="content">Ethereum</div>
        <div id="crytpocont3" class="content">Bitcoin Cash</div>
      </div>
    </div>
    <div class="color">
      <div class="container1Text1">Color:</div>
      <div class="colorcont">
        <span id="colormaincont">Orange</span>
          <div id="colorcont1" class="contentcolor">Green</div>
          <div id="colorcont2" class="contentcolor">Violet</div>
          <div id="colorcont3" class="contentcolor">Red</div>
          <div id="colorcont4" class="contentcolor">Blue</div>
          <div id="colorcont5" class="contentcolor">Yellow</div>
          <div id="colorcont6" class="contentcolor">Pink</div>
          <div id="covercolorcont1" class="contentcolor"></div>
          <div id="covercolorcont2" class="contentcolor"></div>
          <div id="covercolorcont3" class="contentcolor"></div>
          <div id="covercolorcont4" class="contentcolor"></div>
          <div id="covercolorcont5" class="contentcolor"></div>
          <div id="covercolorcont6" class="contentcolor"></div>

      </div>
    </div>
    <div class="periodAmount">
      <div class="container1Text1"style="left: 7px;">Period Amount:</div>
      <div class="amountCont">
        <span id="amountvalue">1</span>
        <div id="amountcont1" class="contentamount">2</div>
        <div id="amountcont2" class="contentamount">3</div>
        <div id="amountcont3" class="contentamount">4</div>
        <div id="amountcont4" class="contentamount">5</div>
        <div id="amountcont5" class="contentamount">6</div>
        <div id="amountcont6" class="contentamount">10</div>
        <div id="addAmountCont"></div>
        <div id="amountcont7" class="contentamount">15</div>
        <div id="amountcont8" class="contentamount">20</div>
        <div id="amountcont9" class="contentamount">30</div>

        <!-- <div id="amountcontcover10" class="contentamount"></div> -->



        </div>
      </div>
    <div class="periodtype">
      <div class="container1Text1">Period Type:</div>
        <div class="typeCont">
          <span id="typevalue">Second</span>
            <div id="typecont1" class="contenttype">Minute</div>
            <div id="typecont2" class="contenttype">Hour</div>
            <div id="typecont3" class="contenttype">Day</div>
            <div id="typecont4" class="contenttype">Month</div>
            <div id="typecont5" class="contenttype">Year</div>

        </div>
    </div>
  </div>

  <div class="container2">

    <div class="container2text">

  </div>
  <button class="button">Submit</button>
  <button id="testbutton">Submit</button>
  </div>

</div>
<div class="wrapper2">
  <div class="graph">
    <div class="line"id="lin1">
    </div>
  </div>
  <div class="graph1">
    <div class="line"id="li1">
    </div>
  </div>
  <div class="graph2">
    <div class="line"id="lne1">
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    var amountlines=10;
    var difference=70;//difference high-low
    var left=10;//each line would be 10px apart
    var top=50;//line plotted by high
    var crytpomainvalue;
    var crytpocontvalue1;
    var crytpocontvalue2;
    var crytpocontvalue3;
    var colormainvalue;
    var colorcontvalue1;
    var colorcontvalue2;
    var colorcontvalue3;
    var colorcontvalue4;
    var colorcontvalue5;
    var colorcontvalue6;
    var typemainvalue;
    var typecontvalue1;
    var typecontvalue2;
    var typecontvalue3;
    var typecontvalue4;
    var typecontvalue5;
    var typeboxes;
    var removeAmountbox=0;
    var amountvalue;
    var amountcontvalue1;
    var amountcontvalue2;
    var amountcontvalue3;
    var amountcontvalue4;
    var amountcontvalue5;
    var amountcontvalue6;
    var amountcontvalue7;
    var amountcontvalue8;
    var amountcontvalue9;
    var timeStart;
    var timeEnd;
    var margin=13;
    var switc=0;


      $("#test").click(function(){
        $.post("handle_insight.php",{"crypo":"Ethereum"})
        .done(function(data){
          // alert("in");
          // $('#coins').html(data);
          console.log(data);
          // alert("kelsey");
          left+=10;
          $(".line").clone().insertAfter(".line")
          .css("height",difference).css("left",left)
          .css("top",top);

        })
        .fail(function(){
          alert("error");
        });
      });
//***********SUBMITION****************
$("#testbutton").click(function(){
  // alert("dff");
  var i;
  for (i = 0; i < 1000; i++){
    if(i<334){

      var $div = $('div[id^="lin"]:last');
    }
    if (i<667 && i>333) {
      if(switc==0){
        margin=13;
        switc=1;
      }
      // get the last DIV which ID starts with ^= "klon"
      var $div = $('div[id^="li"]:last');
    }
    if(i>666){
        if(switc==1){
          margin=13;
          switc=2;
        }
        var $div = $('div[id^="lne"]:last');
      }




    // Read the Number from that DIV's ID (i.e: 3 from "klon3")
    // And increment that number by 1
    var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

    // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
    var $klon = $div.clone().prop('id', 'lin'+num );
    // Finally insert $klon wherever you want
    $div.after( $klon.text('').css("height","100px").css("margin-left",margin));
    margin=margin+3;
  }
});
$(".button").click(function(){
  // alert("mother");

  // alert(amountvalue);
  // alert(crytpomainvalue);
  // alert(colormainvalue);
  // alert(typemainvalue);
  timeStart=$("#timeStart").val();
  timeEnd=$("#timeEnd").val();
  if(timeEnd==""){
    $(".fillEnd").css("display","inline-flex");
    // alert("end");
  }
  if(timeStart==""){
    $(".fillStart").css("display","inline-flex");
    // alert("start");
  }
  if(timeStart!="" || timeEnd!=""){
    $(".fillStart").css("display","none");
    $(".fillEnd").css("display","none");
    amountvalue=$("#amountvalue").text();
    crytpomainvalue=$("#crytpomaincont").text();
    colormainvalue=$("#colormaincont").text();
    typemainvalue=$("#typevalue").text();

    // alert(timeStart);
    // alert(timeEnd);

    $.post("insight_handle.php",{"crytpo":crytpomainvalue,"type":typemainvalue,"amount":amountvalue,"timeStart":timeStart,"timeEnd":timeEnd})
    .done(function(data){
      $(".line").css("border-color",colormainvalue);
      // alert(data);
      // alert("ss");
      // console.log(data);
      var gra = jQuery.parseJSON(data);
      var len = data.length;
      alert(len);
      var high;
      var low
      for(var i=0;i<len;i++){
        low=data[i][0];
        high=data[i][1];

      }
      console.log(data);
      // var id = data[i].id;
      // var len = data.length;
      // console.log(len);
      // console.log(data);


    })
    .fail(function(){
      alert("error");
    });
  }


});
//**********Cryptocurrency**************
      $("#crytpocont1").click(function(){
          crytpocontvalue1=$("#crytpocont1").text();
          crytpomainvalue=$("#crytpomaincont").text();
          $("#crytpocont1").text(crytpomainvalue);
          $("#crytpomaincont").text(crytpocontvalue1);
          // alert(contvalue1);

        });


      $("#crytpocont2").click(function(){
        crytpocontvalue2=$("#crytpocont2").text();
        crytpomainvalue=$("#crytpomaincont").text();
        $("#crytpocont2").text(crytpomainvalue);
        $("#crytpomaincont").text(crytpocontvalue2);
        // alert(contvalue1);
          // alert("kmmm");

        });


      $("#crytpocont3").click(function(){
        crytpocontvalue3=$("#crytpocont3").text();
        crytpomainvalue=$("#crytpomaincont").text();
        $("#crytpocont3").text(crytpomainvalue);
        $("#crytpomaincont").text(crytpocontvalue3);
        // alert(contvalue1);
          // alert("kmmm");
        });

  //color
  $("#colorcont1").click(function(){

      colorcontvalue1=$("#colorcont1").text();
      colormainvalue=$("#colormaincont").text();
      $("#colorcont1").text(colormainvalue);
      $("#colormaincont").text(colorcontvalue1);
      $(".colorcont").css("background",colorcontvalue1);
      if(colormainvalue=="Orange"){
        $("#covercolorcont1").css("background-color", "orange");
        // alert("kal");
      }
      if(colormainvalue=="Green"){
        $("#covercolorcont1").css("background-color", "green");
      }
      if(colormainvalue=="Violet"){
        $("#covercolorcont1").css("background-color", "violet");
      }
      if(colormainvalue=="Red"){
        $("#covercolorcont1").css("background-color", "red");
      }
      if(colormainvalue=="Blue"){
        $("#covercolorcont1").css("background-color", "blue");
      }
      if(colormainvalue=="Yellow"){
      $("#covercolorcont1").css("background-color", "yellow");
      }
      if(colormainvalue=="Pink"){
        $("#covercolorcont1").css("background-color", "pink");
      }
    });


  $("#colorcont2").click(function(){
    colorcontvalue2=$("#colorcont2").text();
    colormainvalue=$("#colormaincont").text();
    $("#colorcont2").text(colormainvalue);
    $("#colormaincont").text(colorcontvalue2);
    $(".colorcont").css("background",colorcontvalue2);
    if(colormainvalue=="Orange"){
      $("#covercolorcont2").css("background-color", "orange");
      // alert("kal");
    }
    if(colormainvalue=="Green"){
      $("#covercolorcont2").css("background-color", "green");
    }
    if(colormainvalue=="Violet"){
      $("#covercolorcont2").css("background-color", "violet");
    }
    if(colormainvalue=="Red"){
      $("#covercolorcont2").css("background-color", "red");
    }
    if(colormainvalue=="Blue"){
      $("#covercolorcont2").css("background-color", "blue");
    }
    if(colormainvalue=="Yellow"){
    $("#covercolorcont2").css("background-color", "yellow");
    }
    if(colormainvalue=="Pink"){
      $("#covercolorcont2").css("background-color", "pink");
    }
    // alert(contvalue1);
      // alert("kmmm");

    });


  $("#colorcont3").click(function(){
    colorcontvalue3=$("#colorcont3").text();
    colormainvalue=$("#colormaincont").text();
    $("#colorcont3").text(colormainvalue);
    $("#colormaincont").text(colorcontvalue3);
    $(".colorcont").css("background",colorcontvalue3);
    if(colormainvalue=="Orange"){
      $("#covercolorcont3").css("background-color", "orange");
      // alert("kal");
    }
    if(colormainvalue=="Green"){
      $("#covercolorcont3").css("background-color", "green");
    }
    if(colormainvalue=="Violet"){
      $("#covercolorcont3").css("background-color", "violet");
    }
    if(colormainvalue=="Red"){
      $("#covercolorcont3").css("background-color", "red");
    }
    if(colormainvalue=="Blue"){
      $("#covercolorcont3").css("background-color", "blue");
    }
    if(colormainvalue=="Yellow"){
    $("#covercolorcont3").css("background-color", "yellow");
    }
    if(colormainvalue=="Pink"){
      $("#covercolorcont3").css("background-color", "pink");
    }
    });
    $("#colorcont4").click(function(){
      colorcontvalue4=$("#colorcont4").text();
      colormainvalue=$("#colormaincont").text();
      $("#colorcont4").text(colormainvalue);
      $("#colormaincont").text(colorcontvalue4);
      $(".colorcont").css("background",colorcontvalue4);
      if(colormainvalue=="Orange"){
        $("#covercolorcont4").css("background-color", "orange");
        // alert("kal");
      }
      if(colormainvalue=="Green"){
        $("#covercolorcont4").css("background-color", "green");
      }
      if(colormainvalue=="Violet"){
        $("#covercolorcont4").css("background-color", "violet");
      }
      if(colormainvalue=="Red"){
        $("#covercolorcont4").css("background-color", "red");
      }
      if(colormainvalue=="Blue"){
        $("#covercolorcont4").css("background-color", "blue");
      }
      if(colormainvalue=="Yellow"){
      $("#covercolorcont4").css("background-color", "yellow");
      }
      if(colormainvalue=="Pink"){
        $("#covercolorcont4").css("background-color", "pink");
      }
    });
    $("#colorcont5").click(function(){
      colorcontvalue5=$("#colorcont5").text();
      colormainvalue=$("#colormaincont").text();
      $("#colorcont5").text(colormainvalue);
      $("#colormaincont").text(colorcontvalue5);
      $(".colorcont").css("background",colorcontvalue5);
      if(colormainvalue=="Orange"){
        $("#covercolorcont5").css("background-color", "orange");
        // alert("kal");
      }
      if(colormainvalue=="Green"){
        $("#covercolorcont5").css("background-color", "green");
      }
      if(colormainvalue=="Violet"){
        $("#covercolorcont5").css("background-color", "violet");
      }
      if(colormainvalue=="Red"){
        $("#covercolorcont5").css("background-color", "red");
      }
      if(colormainvalue=="Blue"){
        $("#covercolorcont5").css("background-color", "blue");
      }
      if(colormainvalue=="Yellow"){
      $("#covercolorcont5").css("background-color", "yellow");
      }
      if(colormainvalue=="Pink"){
        $("#covercolorcont5").css("background-color", "pink");
      }
    });
    $("#colorcont6").click(function(){
      colorcontvalue6=$("#colorcont6").text();
      colormainvalue=$("#colormaincont").text();
      $("#colorcont6").text(colormainvalue);
      $("#colormaincont").text(colorcontvalue6);
      $(".colorcont").css("background",colorcontvalue6);
      if(colormainvalue=="Orange"){
        $("#covercolorcont6").css("background-color", "orange");
        // alert("kal");
      }
      if(colormainvalue=="Green"){
        $("#covercolorcont6").css("background-color", "green");
      }
      if(colormainvalue=="Violet"){
        $("#covercolorcont6").css("background-color", "violet");
      }
      if(colormainvalue=="Red"){
        $("#covercolorcont6").css("background-color", "red");
      }
      if(colormainvalue=="Blue"){
        $("#covercolorcont6").css("background-color", "blue");
      }
      if(colormainvalue=="Yellow"){
      $("#covercolorcont6").css("background-color", "yellow");
      }
      if(colormainvalue=="Pink"){
        $("#covercolorcont6").css("background-color", "pink");
      }
    });
//*******TYPE***********
$("#typecont1").click(function(){
    typecontvalue1=$("#typecont1").text();
    typemainvalue=$("#typevalue").text();
    // alert(typecontvalue1);
    $("#typecont1").text(typemainvalue);
    $("#typevalue").text(typecontvalue1);
    // alert(contvalue1);
    typeboxes=$("#typevalue").text();
    if(typeboxes=="Minute"){
      // alert("dsd");
      minuteChange();
    }
    if(typeboxes=="Second"){
      // alert("kkk");
      secondChange();
    }
    if(typeboxes=="Hour"){
      // alert("lsd");
      hourChange();

    }
    if(typeboxes=="Day"){
      dayChange();
    }
    if(typeboxes=="Month"){
      monthChange();
    }
    if(typeboxes=="Year"){
      yearChange();

    }
    // minuteChange();
  });
  $("#typecont2").click(function(){
      typecontvalue2=$("#typecont2").text();
      typemainvalue=$("#typevalue").text();
      $("#typecont2").text(typemainvalue);
      $("#typevalue").text(typecontvalue2);
      typeboxes=$("#typevalue").text();
      if(typeboxes=="Minute"){

        minuteChange();
      }
      if(typeboxes=="Second"){

        secondChange();
      }
      if(typeboxes=="Hour"){

        hourChange();

      }
      if(typeboxes=="Day"){
        dayChange();
      }
      if(typeboxes=="Month"){
        monthChange();
      }
      if(typeboxes=="Year"){
        yearChange();

      }
      // alert(contvalue1);
    });
  $("#typecont3").click(function(){
      typecontvalue3=$("#typecont3").text();
      typemainvalue=$("#typevalue").text();
      $("#typecont3").text(typemainvalue);
      $("#typevalue").text(typecontvalue3);
      typeboxes=$("#typevalue").text();
      if(typeboxes=="Minute"){

        minuteChange();
      }
      if(typeboxes=="Second"){

        secondChange();
      }
      if(typeboxes=="Hour"){

        hourChange();

      }
      if(typeboxes=="Day"){
        dayChange();
      }
      if(typeboxes=="Month"){
        monthChange();
      }
      if(typeboxes=="Year"){
        yearChange();

      }
      // alert(contvalue1);
    });
  $("#typecont4").click(function(){
      typecontvalue4=$("#typecont4").text();
      typemainvalue=$("#typevalue").text();
      $("#typecont4").text(typemainvalue);
      $("#typevalue").text(typecontvalue4);
      typeboxes=$("#typevalue").text();
      if(typeboxes=="Minute"){

        minuteChange();
      }
      if(typeboxes=="Second"){

        secondChange();
      }
      if(typeboxes=="Hour"){

        hourChange();

      }
      if(typeboxes=="Day"){
        dayChange();
      }
      if(typeboxes=="Month"){
        monthChange();
      }
      if(typeboxes=="Year"){
        yearChange();

      }
      // alert(contvalue1);

    });
  $("#typecont5").click(function(){
      typecontvalue5=$("#typecont5").text();
      typemainvalue=$("#typevalue").text();
      $("#typecont5").text(typemainvalue);
      $("#typevalue").text(typecontvalue5);
      typeboxes=$("#typevalue").text();
      if(typeboxes=="Minute"){

        minuteChange();
      }
      if(typeboxes=="Second"){

        secondChange();
      }
      if(typeboxes=="Hour"){
        // alert("lsd");
        hourChange();

      }
      if(typeboxes=="Day"){
        dayChange();
      }
      if(typeboxes=="Month"){
        monthChange();
      }
      if(typeboxes=="Year"){
        yearChange();

      }
      // alert(contvalue1);

    });
    function minuteChange() {
      if(removeAmountbox==1){

        $("#addAmountCont").after("<div id='amountcont7' class='contentamount'>15</div>");
        $("#amountcont7").after("<div id='amountcont8' class='contentamount'>20</div>");
        $("#amountcont8").after("<div id='amountcont9' class='contentamount'>30</div>");
        removeAmountbox=0;
      }
      if(removeAmountbox==2){

        $("#addAmountCont").after("<div id='amountcont6' class='contentamount'>15</div>");
        $("#amountcont6").after("<div id='amountcont7' class='contentamount'>20</div>");
        $("#amountcont7").after("<div id='amountcont8' class='contentamount'>30</div>");
        $("#amountcont8").after("<div id='amountcont9' class='contentamount'>30</div>");
        removeAmountbox=0;
      }
      if(removeAmountbox==3){

        $("#addAmountCont").after("<div id='amountcont5' class='contentamount'>15</div>");
        $("#amountcont5").after("<div id='amountcont6' class='contentamount'>20</div>");
        $("#amountcont6").after("<div id='amountcont7' class='contentamount'>20</div>");
        $("#amountcont7").after("<div id='amountcont8' class='contentamount'>30</div>");
        $("#amountcont8").after("<div id='amountcont9' class='contentamount'>30</div>");
        removeAmountbox=0;
      }
      $("#amountvalue").text("1");
      $("#amountcont1").text("2");
      $("#amountcont2").text("3");
      $("#amountcont3").text("4");
      $("#amountcont4").text("5");
      $("#amountcont5").text("6");
      $("#amountcont6").text("10");
      $("#amountcont7").text("15");
      $("#amountcont8").text("20");
      $("#amountcont9").text("30");
    }
    function secondChange() {
      if(removeAmountbox==1){

        $("#addAmountCont").after("<div id='amountcont7' class='contentamount'>15</div>");
        $("#amountcont7").after("<div id='amountcont8' class='contentamount'>20</div>");
        $("#amountcont8").after("<div id='amountcont9' class='contentamount'>30</div>");

        removeAmountbox=0;
      }
      if(removeAmountbox==2){

        $("#addAmountCont").after("<div id='amountcont6' class='contentamount'>15</div>");
        $("#amountcont6").after("<div id='amountcont7' class='contentamount'>20</div>");
        $("#amountcont7").after("<div id='amountcont8' class='contentamount'>30</div>");
        $("#amountcont8").after("<div id='amountcont9' class='contentamount'>30</div>");
        removeAmountbox=0;
      }
      if(removeAmountbox==3){

        $("#addAmountCont").after("<div id='amountcont5' class='contentamount'>15</div>");
        $("#amountcont5").after("<div id='amountcont6' class='contentamount'>20</div>");
        $("#amountcont6").after("<div id='amountcont7' class='contentamount'>20</div>");
        $("#amountcont7").after("<div id='amountcont8' class='contentamount'>30</div>");
        $("#amountcont8").after("<div id='amountcont9' class='contentamount'>30</div>");
        removeAmountbox=0;
      }
      $("#amountvalue").text("1");
      $("#amountcont1").text("2");
      $("#amountcont2").text("3");
      $("#amountcont3").text("4");
      $("#amountcont4").text("5");
      $("#amountcont5").text("6");
      $("#amountcont6").text("10");
      $("#amountcont7").text("15");
      $("#amountcont8").text("20");
      $("#amountcont9").text("30");
    }
    function hourChange() {
      // $("#amountcont9").removeClass("amounthide");
      if(removeAmountbox==0){

        $("#amountcont9").remove();
        $("#amountcont8").remove();
        $("#amountcont7").remove();
        $("#amountcont5").css("border-bottom","2px solid black");
        $("#amountcont6").css("border-bottom","2px solid black");
        removeAmountbox=1;
      }
      if(removeAmountbox==2){

        $("#addAmountCont").after("<div id='amountcont6' class='contentamount'>15</div>");
        $("#amountcont5").css("border-bottom","2px solid black");
        $("#amountcont6").css("border-bottom","2px solid black");
      }
      if(removeAmountbox==3){

        $("#addAmountCont").after("<div id='amountcont5' class='contentamount'>15</div>");
        $("#amountcont5").after("<div id='amountcont6' class='contentamount'>20</div>");
        $("#amountcont5").css("border-bottom","2px solid black");
        $("#amountcont6").css("border-bottom","2px solid black");
      }

      $("#amountvalue").text("1");
      $("#amountcont1").text("2");
      $("#amountcont2").text("3");
      $("#amountcont3").text("4");
      $("#amountcont4").text("6");
      $("#amountcont5").text("8");
      $("#amountcont6").text("12");
    }
    function dayChange() {
      // $("#amountcont9").removeClass("amounthide");
      if(removeAmountbox==0 || removeAmountbox==1  ){

        $("#amountcont9").remove();
        $("#amountcont8").remove();
        $("#amountcont7").remove();
        $("#amountcont6").remove();
        $("#amountcont5").css("border-bottom","2px solid black");
        $("#amountcont5").css("border-right","2px solid black");
        $("#amountcont4").css("border-bottom","2px solid black");
        removeAmountbox=2;
      }
      if(removeAmountbox==3){

        $("#addAmountCont").after("<div id='amountcont5' class='contentamount'>15</div>");
        $("#amountcont5").css("border-bottom","2px solid black");
        $("#amountcont4").css("border-bottom","2px solid black");
        removeAmountbox=2;
      }

      $("#amountvalue").text("1");
      $("#amountcont1").text("2");
      $("#amountcont2").text("3");
      $("#amountcont3").text("5");
      $("#amountcont4").text("7");
      $("#amountcont5").text("10");
    }
    function monthChange() {
      // $("#amountcont9").removeClass("amounthide");
      if(removeAmountbox==0 || removeAmountbox==1 ||removeAmountbox==2 ){

        $("#amountcont9").remove();
        $("#amountcont8").remove();
        $("#amountcont7").remove();
        $("#amountcont6").remove();
        $("#amountcont5").remove();
        $("#amountcont3").css("border-bottom","2px solid black");
        $("#amountcont4").css("border-bottom","2px solid black");
        removeAmountbox=3;
      }

      $("#amountvalue").text("1");
      $("#amountcont1").text("2");
      $("#amountcont2").text("3");
      $("#amountcont3").text("4");
      $("#amountcont4").text("6");
    }
  function yearChange() {
    if(removeAmountbox==0 || removeAmountbox==1 ||removeAmountbox==2 ){

      $("#amountcont9").remove();
      $("#amountcont8").remove();
      $("#amountcont7").remove();
      $("#amountcont6").remove();
      $("#amountcont5").remove();
      $("#amountcont3").css("border-bottom","2px solid black");
      $("#amountcont4").css("border-bottom","2px solid black");
      removeAmountbox=3;
    }
    $("#amountvalue").text("1");
    $("#amountcont1").text("2");
    $("#amountcont2").text("3");
    $("#amountcont3").text("4");
    $("#amountcont4").text("5");
  }
});
//*********AMOUNT********
$("#amountcont1").click(function(){
  amountcontvalue1=$("#amountcont1").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont1").text(amountvalue);
  $("#amountvalue").text(amountcontvalue1);
});
$("#amountcont2").click(function(){
  amountcontvalue2=$("#amountcont2").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont2").text(amountvalue);
  $("#amountvalue").text(amountcontvalue2);
});
$("#amountcont3").click(function(){
  amountcontvalue3=$("#amountcont3").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont3").text(amountvalue);
  $("#amountvalue").text(amountcontvalue3);
});
$("#amountcont4").click(function(){
  amountcontvalue4=$("#amountcont4").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont4").text(amountvalue);
  $("#amountvalue").text(amountcontvalue4);
});
$("#amountcont5").click(function(){
  amountcontvalue5=$("#amountcont5").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont5").text(amountvalue);
  $("#amountvalue").text(amountcontvalue5);
});
$("#amountcont6").click(function(){
  amountcontvalue6=$("#amountcont6").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont6").text(amountvalue);
  $("#amountvalue").text(amountcontvalue6);
});
$("#amountcont7").click(function(){
  amountcontvalue7=$("#amountcont7").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont7").text(amountvalue);
  $("#amountvalue").text(amountcontvalue7);
});
$("#amountcont8").click(function(){
  amountcontvalue8=$("#amountcont8").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont8").text(amountvalue);
  $("#amountvalue").text(amountcontvalue8);
});
$("#amountcont9").click(function(){
  amountcontvalue9=$("#amountcont9").text();
  amountvalue=$("#amountvalue").text();
  $("#amountcont9").text(amountvalue);
  $("#amountvalue").text(amountcontvalue9);
});



</script>
</body>
</html>
