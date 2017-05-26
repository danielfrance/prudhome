<html>

<?php
    $path = $_SERVER['REQUEST_URI'];

    $title = 'Home';

    if($path == '/')
        $title = 'Home';
    elseif($path == '/about.php')
        $title = "About";
    elseif($path == '/services.php')
        $title = "Services";
    elseif($path == '/products.php')
        $title = "Products";
    elseif($path == '/gallery.php')
        $title = "Gallery";
    elseif($path == '/contact.php')
        $title = "Contact";
?>

<head>
    <title><?= $title ?> | Prudhom Heating and Air</title>
    <link rel="stylesheet" href="/css/fonts/stylesheet.css" />
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link rel="stylesheet" href="/css/layout.css" />

    <script src="https://use.fontawesome.com/79c71fd04f.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89046954-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>

<header>
    <nav>
        <ul>
            <li <? if($path == '/') echo 'class="active"'; ?>><a href="/">HOME</a></li>
            <li <? if($path == '/about.php') echo 'class="active"'; ?>><a href="/about.php">ABOUT</a></li>
            <li <? if($path == '/services.php') echo 'class="active"'; ?>><a href="/services.php">SERVICES</a></li>
            <li><a href="/"><img src="/img/logo.png" /></a></li>
            <li <? if($path == '/products.php') echo 'class="active"'; ?>><a href="/products.php">PRODUCTS</a></li>
            <li <? if($path == '/gallery.php') echo 'class="active"'; ?>><a href="/gallery.php">GALLERY</a></li>
            <li <? if($path == '/contact.php') echo 'class="active"'; ?>><a href="/contact.php">CONTACT</a></li>
        </ul>
        <div class="mobile-nav">
            <a href="/"><img src="/img/logo.png" /></a>
            <div class="hamburger">
                <img src="/img/hamburger.png" />
            </div>
        </div>
    </nav>

    <div class="mobile-nav-dropdown">
        <img src="/img/mobile-close.png" />

        <ul>
            <a href="/"><li <? if($path == '/') echo 'class="active"'; ?>><p>HOME</p></li></a>
            <a href="/about.php"><li <? if($path == '/about.php') echo 'class="active"'; ?>><p>ABOUT</p></li></a>
            <a href="/services.php"><li <? if($path == '/services.php') echo 'class="active"'; ?>><p>SERVICES</p></li></a>
            <a href="/products.php"><li <? if($path == '/products.php') echo 'class="active"'; ?>><p>PRODUCTS</p></li></a>
            <a href="/gallery.php"><li <? if($path == '/gallery.php') echo 'class="active"'; ?>><p>GALLERY</p></li></a>
            <a href="/contact.php"><li <? if($path == '/contact.php') echo 'class="active"'; ?>><p>CONTACT</p></li></a>
        </ul>
    </div>

    <div class="subnav">
        <ul>
            <li data-id="request"><a href="#"><img src="/img/fan.png" /><p>REQUEST MAINTENANCE</p></a></li>
            <li data-id="schedule"><a href="#"><img src="/img/snowflakes.png" /><p>SCHEDULE REPAIR</p></a></li>
            <li data-id="upgrade"><a href="#"><img src="/img/radiator.png" /><p>UPGRADE SYSTEM</p></a></li>
        </ul>
    </div>
</header>

<div class="subnav-dropdown">
    <div class="container">
        <div class="title">
            <div class="type">
                <div class="left">
                    <img class="form-img request" src="/img/fan.png" />
                    <img class="form-img schedule" src="/img/snowflakes.png" />
                    <img class="form-img upgrade" src="/img/radiator.png" />
                </div>
                <div class="right">
                    <p class="form-title request">REQUEST<br>MAINTENANCE</p>
                    <p class="form-title schedule">SCHEDULE<br>REPAIR</p>
                    <p class="form-title upgrade">UPGRADE<br>SYSTEM</p>
                </div>
            </div>
        </div>
        <div class="form">
            <form method="post" action="send_form_email.php">
                <input type="hidden" id="type" name="form-type" />
                <input type="text" name="name" placeholder="NAME" required />
                <input type="text" name="email" placeholder="EMAIL" required />
                <input type="text" name="phone" placeholder="PHONE" required />
                <input type="text" name="message" placeholder="MESSAGE" required />
                <input id="formsubmit" type="submit" name="submit" value="SUBMIT" />
            </form>
        </div>
    </div>
</div>
