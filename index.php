<?php

?>

<html lang="en">
<head>
<title>Food Order</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Dynalight_400.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script src="js/tms-0.3.js" type="text/javascript"></script>
<script src="js/tms_presets.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.equalheights.js" type="text/javascript"></script>
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!--==============================header=================================-->
<header>
  <div class="row-top">
    <div class="main">
      <div class="wrapper">
        <h1><a href="index.php">Food <span>Order</span></a></h1>
        <nav>
          <ul class="menu">
            <li><a class="active" href="index.php">About</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="catalogue.php">Catalogue </a></li>
            <li><a href="shipping.php">Shipping</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="log.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="row-bot">
    <div class="row-bot-bg">
      <div class="main">
        <h2>Delicious food. <span>for any Occasion</span></h2>
        <div class="slider-wrapper">
          <div class="slider">
            <ul class="items">
              <li> <img src="images/slider-img4.jpg" alt="" /> </li>
              <li> <img src="images/slider-img2.jpg" alt="" /> </li>
              <li> <img src="images/slider-img3.jpg" alt="" /> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    
    <div class="wrapper">
      <article class="column-1">
        <div class="indent-left">
          <div class="maxheight indent-bot">
            <h3>Our Services</h3>
            <ul class="list-1">
              <li><a href="#">Duis autem vel eum iriure dolor</a></li>
              <li><a href="#">Hendrerit in vulputate velit esse molestie </a></li>
              <li><a href="#">Consequat vel illum dolore</a></li>
              <li><a href="#">Feugiat nulla facilisis at vero eros</a></li>
              <li><a href="#">Accumsan et iusto odio dignissim qui</a></li>
              <li><a href="#">Blandit praesent luptatum azril</a></li>
              <li><a href="#">Delenit augue duis dolore te feugait</a></li>
            </ul>
          </div>
          <a class="button-1" href="#">Read More</a> </div>
      </article>
      <article class="column-2">
        <div class="maxheight indent-bot">
          <h3 class="p1">About the Catering</h3>
          <h6 class="p2">Catering is one of free website templates created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</h6>
          <p class="p2">This Catering Template goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplatesMonster.com. The basic package (without PSD source) is available for anyone without registration.</p>
          This website template has several pages: <a href="index.php">About</a>, <a href="menu.php">Menu</a>, <a href="catalogue.php">Catalogue</a>, <a href="shipping.php">Shipping</a>, <a href="faq.php">FAQ</a>, <a href="contact.php">Contact</a> (note that contact us form – doesn’t work). </div>
        <a class="button-2" href="#">Read More</a> </article>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
<footer>
  <div class="main">
    <div class="aligncenter"> <span>Copyright &copy; <a href="#">Universal Informatics</a> All Rights Reserved</span> Design by : Php3pm</div>
  </div>
</footer>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuint',
        preset: 'slideDown',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        pagination: true,
        pagNums: false
    });
});
</script>
</body>
</html>
