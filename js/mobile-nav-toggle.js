const primaryNav = document.querySelector('.site-header .menu');
const navToggle = document.querySelector('.mobile-nav-toggle');



navToggle.addEventListener('click', () => {

const visibility = primaryNav.getAttribute('data-visible');

if (visibility === "false") {
    primaryNav.setAttribute('data-visible', true);
    navToggle.setAttribute('aria-expanded', true);

}  else if (visibility === "true") {
    primaryNav.setAttribute('data-visible', false);
    navToggle.setAttribute('aria-expanded', false);
}


});



(function (d) {
    const hamTop = d.querySelector(".top");
    const toggle = d.querySelector(".mobile-nav-toggle");
    toggle.addEventListener("click", clickMenu);
    function clickMenu() {
      hamTop.classList.toggle("open");
    }
  })(document);