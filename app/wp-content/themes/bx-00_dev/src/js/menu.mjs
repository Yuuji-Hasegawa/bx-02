export const menu = () => {
  let btn = document.querySelector('.c-menu-btn');
  let gnav = document.querySelector('.c-head-nav');
  window.addEventListener('load', () => {
    if (getComputedStyle(gnav).display != 'none') {
      gnav.setAttribute('aria-hidden', 'false');
    } else {
      gnav.setAttribute('aria-hidden', 'true');
    }
  });
  window.addEventListener('resize', () => {
    if (getComputedStyle(gnav).display != 'none') {
      gnav.setAttribute('aria-hidden', 'false');
    } else {
      gnav.setAttribute('aria-hidden', 'true');
    }
    if (window.matchMedia('(min-width: 768px)').matches) {
      gnav.setAttribute('aria-hidden', 'false');
      btn.setAttribute('aria-expanded', 'false');
      btn.setAttribute('aria-label', 'menu open');
      btn.classList.remove('c-menu-btn:is-open');
      gnav.classList.remove('c-head-nav:is-open');
    }
  });
  function open() {
    btn.classList.add('c-menu-btn:is-open');
    btn.setAttribute('aria-expanded', 'true');
    btn.setAttribute('aria-label', 'menu close');
    gnav.setAttribute('aria-hidden', 'false');
    gnav.classList.add('c-head-nav:is-open');
  }
  function close() {
    btn.classList.remove('c-menu-btn:is-open');
    gnav.classList.remove('c-head-nav:is-open');
    btn.setAttribute('aria-expanded', 'false');
    btn.setAttribute('aria-label', 'menu open');
    gnav.setAttribute('aria-hidden', 'true');
  }
  btn.addEventListener('click', () => {
    if (btn.getAttribute('aria-expanded') == 'false') {
      open();
    } else {
      close();
    }
  });
};
