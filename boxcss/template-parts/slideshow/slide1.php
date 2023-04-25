<style>
.slider {
    border-radius: 5px;
    position: relative;
}
 
.slider ul {
    list-style-type: none;
    margin: 0;
    padding: 0;    
}
 
.slider ul li  {
    position: relative;
    display: none;
    height:350px;
}
 
.slider ul li img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 5px;
}
.slider ul li span {
    position: absolute;
    bottom: 0;
    background: hsl(0, 1%, 72%, .1);
    left: 0;
    width: 100%;
    padding: 5px;
    text-align: center;
    color: #fff;
}
/* buttons */
.slider .buttons  {
    position: absolute;
    top: 40%;
    width:  100%;
}
.slider .buttons .next {
    font-size: 2rem;
    right: 0;
    position: absolute;
    cursor: pointer;
    width: 50px;
    text-align: center;
    padding: 0.35em;
    color: #fff;
}    
.slider .buttons .prev {
    font-size: 2rem;
    left: 0;
    position: absolute;
    cursor: pointer;
    width: 50px;
    text-align: center;
    padding: 0.35em;
    color: #fff;
}   
.slider .buttons .next:hover {
    background: hsl(0, 0%, 25%);
    color: hsl(0, 0%, 93%);
}
.slider .buttons .prev:hover {
    background: hsl(0, 0%, 25%);
    color: hsl(0, 0%, 93%);
}
 
/* slider animation */
.slider ul li {
    animation-name: fade;
    animation-duration: 2.5s;
}
  
@keyframes fade {
    from {opacity: .2} 
    to {opacity: 1}
}
</style>
<div class="slider">
    <ul class="slides">
        <li class="h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img1.jpg" alt="imagen1" />
            <span>imagen1</span>
        </li>
        <li class="h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img2.jpg" alt="imagen2" />
            <span>imagen2</span>
        </li>
        <li class="h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img3.jpg" alt="imagen3" />
            <span>imagen3</span>
        </li>
        <li class="h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img4.jpg" alt="imagen4" />
            <span>imagen4</span>
        </li>
        <li class="h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img5.jpg" alt="imagen5" />
            <span>imagen5</span>
        </li>
        <li class="h-full">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img6.jpg" alt="imagen6" />
            <span>imagen6</span>
        </li>
    </ul>
    <div class="buttons">
        <div class="next"><span class="lnr lnr-chevron-right"></span></div>
        <div class="prev"><span class="lnr lnr-chevron-left"></span></div>
    </div>
</div>

<script>
    window.addEventListener('load', () => {


// initial slide
let slide = 1;

// total slides
let slides = document.querySelectorAll(".slider ul li");
total = slides.length;

// show first side
showSlide(1);

next = document.querySelector(".next");
prev = document.querySelector(".prev")

/**
 * event next button
 */
next.addEventListener('click', (evt) => {
    evt.preventDefault();
    slide++;
    if (slide > total) { slide = 1; }
    showSlide(slide);
})

/** 
 * event prev button
 */
prev.addEventListener("click", (evt) => {
    evt.preventDefault();
    slide--;
    if (slide < 1) { slide = total; }
    showSlide(slide);
})

/**
 * show slides
 * 
 * @param {number} n 
 * @return {null}
 * 
 */
function showSlide(n) {
    n--; // decrement 1
    for (i = 0; i < slides.length; i++) {
        (i == n) ? slides[n].style.display = "block" : slides[i].style.display = "none";
    }
}

})
</script>