export const menu = () => {
  let btns = document.querySelectorAll('.c-menu-btn');
  let btn = Array.prototype.slice.call(btns, 0);
  let cover = document.querySelector('.c-sidebar-bg');
  let sidebar = document.querySelector('.c-sidebar');
  let header = document.querySelector('#header');
  if (header != null) {
    let headerH = header.clientHeight;
    window.addEventListener('scroll', () => {
      let scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      if (document.body.classList.contains('is-fixed')) {
        return;
      } else {
        if (scrollTop > headerH) {
          header.classList.add('o-container:is-header-scroll');
        } else {
          header.classList.remove('o-container:is-header-scroll');
        }
      }
    });
  }
  function open() {
    let nowscroll = document.documentElement.scrollTop || document.body.scrollTop;
    document.body.style.top = -1 * nowscroll + 'px';
    for (var i = 0; i < btns.length; i++) {
      btns[i].classList.add('c-menu-btn:is-open');
      btns[i].setAttribute('aria-expanded', 'true');
      btns[i].setAttribute('aria-label', 'menu close');
    }
    sidebar.setAttribute('aria-hidden', 'false');
    sidebar.classList.add('c-sidebar:is-open');
    document.body.classList.add('is-fixed');
  }
  function close() {
    var pos = parseInt(document.body.style.top);
    if (pos != '0') {
      pos = pos * -1;
    }
    document.body.style.top = 0;
    for (var i = 0; i < btns.length; i++) {
      btns[i].classList.remove('c-menu-btn:is-open');
      btns[i].setAttribute('aria-expanded', 'false');
      btns[i].setAttribute('aria-label', 'menu open');
    }
    sidebar.setAttribute('aria-hidden', 'true');
    sidebar.classList.remove('c-sidebar:is-open');
    document.body.classList.remove('is-fixed');
    window.scrollTo(0, pos);
  }
  btn.forEach((target) => {
    target.addEventListener('click', () => {
      if (target.getAttribute('aria-expanded') == 'false') {
        open();
      } else {
        close();
      }
    });
  });
  cover.addEventListener('click', () => {
    close();
  });
};
