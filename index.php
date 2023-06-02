<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>ShipSite</title>
    <link rel="stylesheet" href="styleindex.css" />
</head>

<body>
    <?php include_once 'navbar.html';?>
    
    <div class="slideshow-container">

    <!-- Slides -->
    <div class="mySlides fade">
        <img src="imgs/brt.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="imgs/dhl.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <img src="imgs/gls.jpg" style="width:100%">
    </div>

    <!-- Punti/bottoni di navigazione -->
    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    </div>

    <script type="text/javascript" src="scriptindex.js"></script>
</body>
</html>