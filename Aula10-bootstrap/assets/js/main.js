const body = document.querySelector('body')
const header = document.querySelector('header')
const goTop = document.querySelector('.goTop')

setInterval(() => {
  if (window.scrollY == 0 && window.scrollX == 0) {
    header.classList.remove('scrolling')
    goTop.classList.add('d-none')
  } else {
    header.classList.add('scrolling')
    goTop.classList.remove('d-none')
  }
}, 1)
