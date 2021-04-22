/**
 * TODO: Desarrollar el código del slider
 */

// Slider basado en el que proporciona w3school, ya que no sabía cómo hacerlo
// Sólo tiene la función de automático, ya que no fui capaz a poner ambos (que funcionasen los botones)
//  a la vez


 var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000);
}


/**
 * TODO: Desarrollar el código para cargar productos por Ajax
 */
