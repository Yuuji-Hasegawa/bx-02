import smoothscroll from 'smoothscroll-polyfill';
smoothscroll.polyfill();

let btn = document.querySelector('.c-menu-btn');
let sidebar = document.querySelector('.c-sidebar');

export const smoothScroll = () => {
  let elems = document.querySelectorAll('a[href^="#"]');
  if (elems) {
    elems.forEach((elem) => {
      let href = elem.getAttribute('href').split('#')[1];
      if (href) {
        let target = document.getElementById(href);
        if (target) {
          elem.addEventListener('click', (e) => {
            e.preventDefault();
            if (document.body.classList.contains('is-fixed')) {
              document.body.style.top = 0;
              btn.classList.remove('c-menu-btn:is-open');
              btn.setAttribute('aria-expanded', 'false');
              btn.setAttribute('aria-label', 'menu open');
              sidebar.setAttribute('aria-hidden', 'true');
              sidebar.classList.remove('c-sidebar:is-open');
              document.body.classList.remove('is-fixed');
            }
            let pos = target.getBoundingClientRect().top;
            let header = document.querySelector('#header').clientHeight;
            let offset = window.pageYOffset;
            let scroll = pos + offset - header;
            window.scrollTo({
              top: scroll,
              behavior: 'smooth',
            });
          });
        }
      }
    });
  }
};
