const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');
const menuMap = document.querySelector('.menu-sidebar input')
const navMap = document.querySelector('.nav-maps ul')

menuToggle.addEventListener('click', function() {
  nav.classList.toggle('slide');
})
menuMap.addEventListener('click', function() {
  navMap.classList.toggle('slide-map');
})
