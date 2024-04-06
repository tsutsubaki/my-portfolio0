


//ハンバーガーメニュー

document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.c-hamburger');
    const headNav = document.querySelector('#js-nav');
  
    hamburger.addEventListener('click', () => {
      if (hamburger.classList.contains("is-active")) {
        hamburger.classList.remove('is-active');
        hamburger.querySelector('.c-hamburger__text').textContent = 'MENU';
        headNav.classList.remove('is-active')
      } else {
        hamburger.classList.add('is-active');
        hamburger.querySelector('.c-hamburger__text').textContent = 'CLOSE';
        headNav.classList.add('is-active')
      }
    });
  
  
    headNav.addEventListener('click', () => {
      hamburger.classList.remove('is-active');
      hamburger.querySelector('.c-hamburger__text').textContent = 'MENU';
      headNav.classList.remove('is-active')
    });
  
  });
