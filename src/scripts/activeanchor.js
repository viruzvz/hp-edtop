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





// $(window).scroll(function () {
//   var scrollDistance = $(window).scrollTop()

//   // Assign active class to nav links while scolling
//   $('section').each(function (i) {
//     if ($(this).position().top <= scrollDistance) {
//       $('.link-nav.active').removeClass('active')
//       $('.link-nav').eq(i).addClass('active')
//     }
//   })
// }).scroll()
