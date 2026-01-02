//When scrolling drop down section
document.addEventListener('DOMContentLoaded',()=>{
    window.addEventListener('scroll',()=>{
        var sector = document.querySelector('section');
        sector.classList.toggle('sticky',window.scrollY>0);
    })    
});

let slideIndex = 1;
let timer = null;  // Keep track of the auto-slideshow timer
showSlides(slideIndex);  // Show the first slide

// Next/previous controls
function plusSlides(n) {
    clearTimeout(timer);  // Stop the automatic slideshow when user clicks
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    clearTimeout(timer);  // Stop the automatic slideshow when user clicks
    showSlides(slideIndex = n);
}

// Main function to display slides
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

    // Restart the auto-slideshow after manual interaction
    timer = setTimeout(autoshowSlides, 5000);
}

// Automatic Slideshow function
function autoshowSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if (slides.length === 0 || dots.length === 0) {
        console.error("Slides or dots not found in the DOM");
        return -1;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

    // Automatically change slide every 5 seconds
    timer = setTimeout(autoshowSlides, 5000);
}

// Start the automatic slideshow when the page is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    autoshowSlides();
});
