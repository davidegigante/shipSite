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
    <script>
    var slideIndex = 1;
    var slideInterval = setInterval(function(){plusSlides(1)}, 4000);

    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1} 
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" dotactive", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " dotactive";
    }

    var dots = document.getElementsByClassName("dot");
    for (let i = 0; i < dots.length; i++) {
        dots[i].addEventListener("click", function() {
            // Resetta l'intervallo
        clearInterval(slideInterval);
        // Vai alla slide corrispondente
        currentSlide(i+1);
        // Avvia un nuovo intervallo
        slideInterval = setInterval(function(){plusSlides(1)}, 4000);
        });
    }
    
    </script>

</body>
</html>