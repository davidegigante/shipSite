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
