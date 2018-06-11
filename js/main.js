var slideCol = document.getElementById("range");
var y = document.getElementById("f");
var selectAdded = '<select class="added customselect"><option value="0">Adult (25 years and older)</option><option value="1">Young (12 – 24 years)</option><option value="2">Child (2 – 11 years)</option><option value="3">Infant (0 – 23 months)</option></select>';
y.innerHTML = slideCol.value;

slideCol.oninput = function() {
    y.innerHTML = this.value;
    document.getElementById("passengers-span").innerHTML = selectAdded;
    for(i = 1; i < this.value; i++){
        document.getElementById("passengers-span").innerHTML += selectAdded;
    }
};

function changeInterior(url) {
    document.getElementById('interior-img').innerHTML = '<img src= "'+url+'">';
};

function addMeal() {
    document.getElementById('addMealbutton').remove();
    document.getElementById('meal2').innerHTML += '<p>Meal 4 - <select class="customselect"><option value="0">breakfast</option><option value="1">lunch</option><option value="2">dinner</option><option value="3">snack</option><option value="3">refreshment</option><option value="3">cocktail</option></select></p>'
}

var slideIndex = 0;
var timeout;
showSlides();

$(".container-carousel").hover(function(){
    window.clearTimeout(timeout);
}, function(){
    showSlides();
});

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("imgSlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" activ", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " activ";
    timeout = setTimeout(showSlides, 4000); // Change image every 4 seconds
};