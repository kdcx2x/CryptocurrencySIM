<html>
<head>
  <script src="js/page.js"></script>
  <script type="text/javascript"src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="layout22.css">
  <script src="js/yrss.min.js"></script>
  <style>
  .cont{
    /* border: 1px solid; */
  position: absolute;
  width: 24%;
  height: 7%;
  padding: 14px;
  top: 22%;
  left: 15%;
  background: white;
  /* background: url(images/binding-dark.png); */
  /* border-radius: 0px 20px 0px 20px; */
  font-size: 55px;
  }
  .cont1{
    position: absolute;
    font-size: 55px;
    width: 8%;
    height: 7%;
    padding: 14px;
    top: 32%;
    left: 36%;
    background: white;
    /* border-radius: 0px 20px 0px 20px; */
}
  }
  #wrapper12 {
    margin: 0 auto;
  top: 78%;
  max-width: 1200px;
  padding: 3rem 0 5rem;
  width: 90%;
  position: absolute;
  left: 5%;
  }
  .rss-feed {
  -webkit-perspective:1;
  column-fill:balance;
  column-gap:2rem;
  margin:0;
  padding:0;
  }
  .entry-wrapper {

  border-radius:1px;
  display:inline-block;
  margin-bottom:2rem;
  position:relative;
  vertical-align:top;
  width:100%;
  border: 2px solid black;
  background: white;
  background-image: url(images/skulls.png);
  }

  .entry-image img {
      border-radius: 50%;
      display: block;
      height: auto;
      max-width: 100%;
      width: 26%;
    height: 9%;
    margin-left: 14px;
    margin-top: 2px;
        border: 0px;
  }

  .entry-title h4 {
  font-size:1.5rem;
  line-height:1.2;
  }

  .entry-title h4 a {
  color:#fe6f5e;
  text-decoration:none;
  transition:color 200ms ease-in-out;
  font-family: insightfront;
  letter-spacing: 2px;
  }

  .entry-title h4 a:hover {
  color:rgba(254,111,94,.5);

  }

  .entry-title h4 a::after {
  content:"\02197";
  margin-left:.5rem;
  }


  .entry-date {
  font-size:.75rem;
  padding:.625rem 0 0;
  }

  .entry-image + .entry-text .entry-date {
  background-color:white;
  position:absolute;
  top:0;
  right:0;
  padding:.25rem .5rem;
  border-radius:0 0 0 1px;

  }


  .entry-text {
  padding:1rem;
  }

  .entry-image + .entry-text {
  /* border-top:3px solid white; */
  position: relative;
    margin-left: 27%;
    margin-top: -23%;
  }

  .entry-content {
  /* margin:.625rem 0 0; */
  margin-left: -80px;
margin-top: -18px;
  }
  /* li a:hover:not(.active){
    background-color: transparent;
  } */
  font[Attributes Style]{
    color: white;
  }
  /* a:hover{
    color:rgba(0,0,0,.5); */
    /* background: white; */
  /* } */

  .entry-content:empty {
  display:none;
  }

  @media only screen and (min-width:480px) {
      .rss-feed {
      column-count:1;
      }
  }

  @media only screen and (min-width:700px) {
      .rss-feed {
      column-count:2;
      }
  }

  @media only screen and (min-width:900px) {
      .rss-feed {
      column-count:3;
      }
  }

  @media only screen and (min-width:1200px) {
      .rss-feed {
      column-count:4;
      }
  }
#stock{
  position: absolute;
top: 17%;
left: 36%;
width: 55%;
height: auto;

}
a:link {
    /* font-weight: bold; */
}
a:visited{

}
  </style>
</head>
<body>
  <header>
    <img src="images/logo.png" id="logo" style="position:absolute;top:-34px;">
    <nav>
  		<ul>
        <li><a  href="home.php"style="color:black;">Homepage</a></li>
        <li><a href="userhistory.php"style="color:black;">History</a></li>
        <li><a href="investment.php"style="color:black;">Invest</a></li>
        <li><a class="active"href="press.php">Press</a></li>
  		</ul>
  	</nav>
  </header>
  <img src="images/StockSnap.jpg" id="stock">

  <div class="cont">
    Cryptocurrency
  </div>
  <div class="cont1">
    News
  </div>
<div id="wrapper12" style="position:absolute;top:90%;">
    <div id="feed"></div>
</div>
<footer>
  <a href="logout.php">Logout</a>
</footer>
  <script>
  var feed = 'https://news.google.com/news/u/0/rss/headlines/section/q/cryptocurrency/cryptocurrency?ned=us&hl=en&gl=US';
  $('#feed').yrss(feed, {
      ssl: false,
      limit: 20,
      reverse: false,
      cache: true,
      maxage: 3600,
      showerror: true,
      errormsg: '',
      tags: true,
      date: true,
      dateformat: 'spellmonth',
      titletag: 'h4',
      content: true,
      image: true,
      snippet: false,
      snippetlimit: 120,
      linktarget: '_blank',
      logging: true
  }, function () {
      // optional callback function
      $('.entry-content').each(function () {
          if (!$(this).is(':empty')) {
              $(this).find('p:last-child').remove();
          }
      });
  });
$(document).ready(function(){
  $(function() {
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

        $('#logo ').css('height','154px');
      }
    });
    });
});
  </script>
</body>
</html>
