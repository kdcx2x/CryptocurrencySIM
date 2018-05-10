<?php

 ?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>

  </script>
<style>
@font-face {
  font-family: insightfront;
  src: url(fonts/ostrich-sans-master/OstrichSansInline-Italic.otf);
}
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
    left: 19px;
}
.button:hover{
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}


</style>
</head>
<body>
  <input id="datetime"type="datetime-local">
  <button class="button">Button</button>

<script>



  $(document).ready(function(){
    var timeStart;
    var timeEnd;
    $(".button").click(function(){
      alert("mother");
      // alert(amountvalue);
      // alert(crytpomainvalue);
      // alert(colormainvalue);
      // alert(typemainvalue);
      timeStart=$("#datetime").val();
      alert(timeStart);

    });


  });
</script>
</body>
</html>
