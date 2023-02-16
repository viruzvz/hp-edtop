// Altera estado da logo nav-secundary
const el = document.querySelector(".nav-primary")
const observer = new IntersectionObserver( 
  ([e]) => e.target.classList.toggle("is-pinned", e.intersectionRatio < 1),
  { threshold: [1] }
);

observer.observe(el);

// Aciona focus no input ao abrir modal bootstrap
$(document).ready(function(){
    $('#buscarModal').on('shown.bs.modal', function(){
        $(this).find('#search').focus()
    })
})

// Smoth scroll page (necessida do css no html)
const textElement = document.getElementById("text")

// active menu when scroll
const sections = document.querySelectorAll("section");
const navLi = document.querySelectorAll(".content .nav-primary .navbar-collapse .nav-ul li");
window.onscroll = () => {
  var current = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (pageYOffset >= sectionTop - 60) {
      current = section.getAttribute("id"); }
  });

  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
};

// botão voltar ao topo
var btn = $('.backtotop')

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show')
  } else {
    btn.removeClass('show')
  }
})

btn.on('click', function(e) {
  e.preventDefault()
  $('html, body').animate({scrollTop:0}, '300')
})

// add class no ul widget

jQuery( document ).ready(function() {
  jQuery('.widget ul').addClass('widget-menu');
});
