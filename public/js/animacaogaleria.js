var slideIndex = 0;
const  slides = document.getElementsByClassName("imagem")


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
    console.log('entrei')
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}
