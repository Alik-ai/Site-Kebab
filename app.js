function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }


  var slide = new Array("foret-peuplier.jpg", "paysage-montagne.jpg", "chemin-automne.jpg", "prairie-alpes.jpg");
var numero = 0;

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}


$(function(){
  // On recupere la position du bloc par rapport au haut du site
  var position_top_raccourci = $("#navigation").offset().top;
  
  //Au scroll dans la fenetre on déclenche la fonction
  $(window).scroll(function () {
  
  //si on a defile de plus de 150px du haut vers le bas
  if ($(this).scrollTop() > position_top_raccourci) {
  
  //on ajoute la classe "fixNavigation" a <div id="navigation">
  $('#navigation').addClass("fixNavigation"); 
  } else {
  
  //sinon on retire la classe "fixNavigation" a <div id="navigation">
  $('#navigation').removeClass("fixNavigation");
  }
  });
  });