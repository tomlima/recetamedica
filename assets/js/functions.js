// Header scroll
window.addEventListener('scroll', function () {
  let header = document.querySelector('header')
  if (window.pageYOffset > 50) {
    header.classList.add('is-sticky')
  } else {
    header.classList.remove('is-sticky')
  }
})

// Links
let headerLinks = document.querySelectorAll('.c-nav__link')
const navMenu = document.querySelector('.js-nav__menu')
for (var i = 0; i < headerLinks.length; i++) {
  headerLinks[i].addEventListener('click', function () {
    navMenu.classList.remove('is-open')
  })
}

// Anchor
let anchor = document.querySelectorAll('.js-anchor')
for (var i = 0; i < anchor.length; i++) {
  anchor[i].addEventListener('click', function (event) {
    const anchorTo = this.getAttribute('anchor-to')
    const element = document.getElementById(anchorTo)

    const topPosition = element.getBoundingClientRect().top + window.pageYOffset

    window.scrollTo({
      top: topPosition - 150,
      behavior: 'smooth'
    })
  })
}

// Toogle menu
var toggle = document.querySelector('.c-nav__toggle')
toggle.addEventListener('click', function () {
  const navMenu = document.querySelector('.js-nav__menu')
  navMenu.classList.add('is-open')
})

// Close menu
var close = document.querySelector('.c-nav__close')
close.addEventListener('click', function () {
  const navMenu = document.querySelector('.js-nav__menu')
  navMenu.classList.remove('is-open')
})

// Scroll up
window.addEventListener('scroll', function () {
  let scroll = document.querySelector('.js-scrollup')
  if (window.pageYOffset > 350) {
    scroll.classList.add('is-active')
  } else {
    scroll.classList.remove('is-active')
  }
})
