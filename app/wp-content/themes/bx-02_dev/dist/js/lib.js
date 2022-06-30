!(function (e) {
  'function' == typeof define && define.amd ? define(e) : e();
})(function () {
  'use strict';
  var e = { exports: {} };
  (e.exports = {
    polyfill: function () {
      var e = window,
        t = document;
      if (!('scrollBehavior' in t.documentElement.style) || !0 === e.__forceSmoothScrollPolyfill__) {
        var o,
          r = e.HTMLElement || e.Element,
          l = {
            scroll: e.scroll || e.scrollTo,
            scrollBy: e.scrollBy,
            elementScroll: r.prototype.scroll || i,
            scrollIntoView: r.prototype.scrollIntoView,
          },
          s = e.performance && e.performance.now ? e.performance.now.bind(e.performance) : Date.now,
          c = ((o = e.navigator.userAgent), new RegExp(['MSIE ', 'Trident/', 'Edge/'].join('|')).test(o) ? 1 : 0);
        (e.scroll = e.scrollTo =
          function () {
            void 0 !== arguments[0] &&
              (!0 !== n(arguments[0])
                ? m.call(
                    e,
                    t.body,
                    void 0 !== arguments[0].left ? ~~arguments[0].left : e.scrollX || e.pageXOffset,
                    void 0 !== arguments[0].top ? ~~arguments[0].top : e.scrollY || e.pageYOffset,
                  )
                : l.scroll.call(
                    e,
                    void 0 !== arguments[0].left
                      ? arguments[0].left
                      : 'object' != typeof arguments[0]
                      ? arguments[0]
                      : e.scrollX || e.pageXOffset,
                    void 0 !== arguments[0].top
                      ? arguments[0].top
                      : void 0 !== arguments[1]
                      ? arguments[1]
                      : e.scrollY || e.pageYOffset,
                  ));
          }),
          (e.scrollBy = function () {
            void 0 !== arguments[0] &&
              (n(arguments[0])
                ? l.scrollBy.call(
                    e,
                    void 0 !== arguments[0].left
                      ? arguments[0].left
                      : 'object' != typeof arguments[0]
                      ? arguments[0]
                      : 0,
                    void 0 !== arguments[0].top ? arguments[0].top : void 0 !== arguments[1] ? arguments[1] : 0,
                  )
                : m.call(
                    e,
                    t.body,
                    ~~arguments[0].left + (e.scrollX || e.pageXOffset),
                    ~~arguments[0].top + (e.scrollY || e.pageYOffset),
                  ));
          }),
          (r.prototype.scroll = r.prototype.scrollTo =
            function () {
              if (void 0 !== arguments[0])
                if (!0 !== n(arguments[0])) {
                  var e = arguments[0].left,
                    t = arguments[0].top;
                  m.call(this, this, void 0 === e ? this.scrollLeft : ~~e, void 0 === t ? this.scrollTop : ~~t);
                } else {
                  if ('number' == typeof arguments[0] && void 0 === arguments[1])
                    throw new SyntaxError('Value could not be converted');
                  l.elementScroll.call(
                    this,
                    void 0 !== arguments[0].left
                      ? ~~arguments[0].left
                      : 'object' != typeof arguments[0]
                      ? ~~arguments[0]
                      : this.scrollLeft,
                    void 0 !== arguments[0].top
                      ? ~~arguments[0].top
                      : void 0 !== arguments[1]
                      ? ~~arguments[1]
                      : this.scrollTop,
                  );
                }
            }),
          (r.prototype.scrollBy = function () {
            void 0 !== arguments[0] &&
              (!0 !== n(arguments[0])
                ? this.scroll({
                    left: ~~arguments[0].left + this.scrollLeft,
                    top: ~~arguments[0].top + this.scrollTop,
                    behavior: arguments[0].behavior,
                  })
                : l.elementScroll.call(
                    this,
                    void 0 !== arguments[0].left
                      ? ~~arguments[0].left + this.scrollLeft
                      : ~~arguments[0] + this.scrollLeft,
                    void 0 !== arguments[0].top ? ~~arguments[0].top + this.scrollTop : ~~arguments[1] + this.scrollTop,
                  ));
          }),
          (r.prototype.scrollIntoView = function () {
            if (!0 !== n(arguments[0])) {
              var o = f(this),
                r = o.getBoundingClientRect(),
                s = this.getBoundingClientRect();
              o !== t.body
                ? (m.call(this, o, o.scrollLeft + s.left - r.left, o.scrollTop + s.top - r.top),
                  'fixed' !== e.getComputedStyle(o).position &&
                    e.scrollBy({ left: r.left, top: r.top, behavior: 'smooth' }))
                : e.scrollBy({ left: s.left, top: s.top, behavior: 'smooth' });
            } else l.scrollIntoView.call(this, void 0 === arguments[0] || arguments[0]);
          });
      }
      function i(e, t) {
        (this.scrollLeft = e), (this.scrollTop = t);
      }
      function n(e) {
        if (
          null === e ||
          'object' != typeof e ||
          void 0 === e.behavior ||
          'auto' === e.behavior ||
          'instant' === e.behavior
        )
          return !0;
        if ('object' == typeof e && 'smooth' === e.behavior) return !1;
        throw new TypeError(
          'behavior member of ScrollOptions ' + e.behavior + ' is not a valid value for enumeration ScrollBehavior.',
        );
      }
      function a(e, t) {
        return 'Y' === t ? e.clientHeight + c < e.scrollHeight : 'X' === t ? e.clientWidth + c < e.scrollWidth : void 0;
      }
      function d(t, o) {
        var r = e.getComputedStyle(t, null)['overflow' + o];
        return 'auto' === r || 'scroll' === r;
      }
      function u(e) {
        var t = a(e, 'Y') && d(e, 'Y'),
          o = a(e, 'X') && d(e, 'X');
        return t || o;
      }
      function f(e) {
        for (; e !== t.body && !1 === u(e); ) e = e.parentNode || e.host;
        return e;
      }
      function p(t) {
        var o,
          r,
          l,
          c,
          i = (s() - t.startTime) / 468;
        (c = i = i > 1 ? 1 : i),
          (o = 0.5 * (1 - Math.cos(Math.PI * c))),
          (r = t.startX + (t.x - t.startX) * o),
          (l = t.startY + (t.y - t.startY) * o),
          t.method.call(t.scrollable, r, l),
          (r === t.x && l === t.y) || e.requestAnimationFrame(p.bind(e, t));
      }
      function m(o, r, c) {
        var n,
          a,
          d,
          u,
          f = s();
        o === t.body
          ? ((n = e), (a = e.scrollX || e.pageXOffset), (d = e.scrollY || e.pageYOffset), (u = l.scroll))
          : ((n = o), (a = o.scrollLeft), (d = o.scrollTop), (u = i)),
          p({ scrollable: n, method: u, startTime: f, startX: a, startY: d, x: r, y: c });
      }
    },
  }),
    e.exports.polyfill();
  let t = document.querySelector('.c-menu-btn'),
    o = document.querySelector('.c-sidebar');
  (() => {
    let e = document.querySelectorAll('.c-menu-btn'),
      t = Array.prototype.slice.call(e, 0),
      o = document.querySelector('.c-sidebar-bg'),
      r = document.querySelector('.c-sidebar'),
      l = document.querySelector('#header');
    if (null != l) {
      let e = l.clientHeight;
      window.addEventListener('scroll', () => {
        let t = document.documentElement.scrollTop || document.body.scrollTop;
        document.body.classList.contains('is-fixed') ||
          (t > e
            ? l.classList.add('o-container:is-header-scroll')
            : l.classList.remove('o-container:is-header-scroll'));
      });
    }
    function s() {
      var t = parseInt(document.body.style.top);
      '0' != t && (t *= -1), (document.body.style.top = 0);
      for (var o = 0; o < e.length; o++)
        e[o].classList.remove('c-menu-btn:is-open'),
          e[o].setAttribute('aria-expanded', 'false'),
          e[o].setAttribute('aria-label', 'menu open');
      r.setAttribute('aria-hidden', 'true'),
        r.classList.remove('c-sidebar:is-open'),
        document.body.classList.remove('is-fixed'),
        window.scrollTo(0, t);
    }
    t.forEach((t) => {
      t.addEventListener('click', () => {
        'false' == t.getAttribute('aria-expanded')
          ? (function () {
              let t = document.documentElement.scrollTop || document.body.scrollTop;
              document.body.style.top = -1 * t + 'px';
              for (var o = 0; o < e.length; o++)
                e[o].classList.add('c-menu-btn:is-open'),
                  e[o].setAttribute('aria-expanded', 'true'),
                  e[o].setAttribute('aria-label', 'menu close');
              r.setAttribute('aria-hidden', 'false'),
                r.classList.add('c-sidebar:is-open'),
                document.body.classList.add('is-fixed');
            })()
          : s();
      });
    }),
      o.addEventListener('click', () => {
        s();
      });
  })(),
    (() => {
      let e = document.querySelectorAll('a[href^="#"]');
      e &&
        e.forEach((e) => {
          let r = e.getAttribute('href').split('#')[1];
          if (r) {
            let l = document.getElementById(r);
            l &&
              e.addEventListener('click', (e) => {
                e.preventDefault(),
                  document.body.classList.contains('is-fixed') &&
                    ((document.body.style.top = 0),
                    t.classList.remove('c-menu-btn:is-open'),
                    t.setAttribute('aria-expanded', 'false'),
                    t.setAttribute('aria-label', 'menu open'),
                    o.setAttribute('aria-hidden', 'true'),
                    o.classList.remove('c-sidebar:is-open'),
                    document.body.classList.remove('is-fixed'));
                let r = l.getBoundingClientRect().top,
                  s = document.querySelector('#header').clientHeight,
                  c = r + window.pageYOffset - s;
                window.scrollTo({ top: c, behavior: 'smooth' });
              });
          }
        });
    })(),
    (() => {
      let e = document.querySelector('#shareBtn'),
        t = document.querySelector('#shareURL');
      document.querySelector('.c-input-copy'),
        null != e &&
          e.addEventListener('click', () => {
            (e.disabled = !0),
              (function () {
                t.select();
                let o = t.value,
                  r = document.createElement('dialog');
                r.classList.add('c-copy-message'),
                  navigator.clipboard
                    .writeText(o)
                    .then(function () {
                      (r.innerHTML = 'クリップボードにコピー'),
                        t.parentNode.appendChild(r),
                        setTimeout(() => {
                          document.querySelector('.c-copy-message').remove(), (e.disabled = !1);
                        }, 4e3);
                    })
                    .catch(function (o) {
                      (r.innerHTML = 'コピーに失敗しました'),
                        t.parentNode.appendChild(r),
                        setTimeout(() => {
                          document.querySelector('.c-copy-message').remove(), (e.disabled = !1);
                        }, 4e3);
                    });
              })();
          });
    })(),
    (() => {
      let e = document.querySelectorAll('img[data-src]');
      const t = new IntersectionObserver(
        function (e, o) {
          e.forEach((e) => {
            if (e.intersectionRatio > 0) {
              const o = e.target;
              if (((o.src = o.dataset.src), o.dataset.srcset && (o.srcset = o.dataset.srcset), o.parentNode)) {
                o.parentNode.querySelectorAll('source[data-srcset]').forEach((e) => {
                  e.srcset = e.dataset.srcset;
                });
              }
              o.addEventListener('load', () => {
                if (
                  (o.removeAttribute('data-src'), o.dataset.srcset && o.removeAttribute('data-srcset'), o.parentNode)
                ) {
                  o.parentNode.querySelectorAll('source[data-srcset]').forEach((e) => {
                    e.removeAttribute('data-srcset');
                  });
                }
              }),
                t.unobserve(e.target);
            }
          });
        },
        { threshold: [0] },
      );
      Array.from(e).forEach((e) => {
        t.observe(e);
      });
    })(),
    (() => {
      let e = document.querySelector('#redumeBtn'),
        t = document.querySelector('#redumeBody'),
        o = document.querySelector('.c-redume-marker');
      null != e &&
        e.addEventListener('click', () => {
          e.classList.contains('o-has-icon:redume-is-open')
            ? (e.classList.remove('o-has-icon:redume-is-open'),
              t.classList.remove('c-list:redume-is-open'),
              o.classList.remove('c-redume-marker:is-open'))
            : (e.classList.add('o-has-icon:redume-is-open'),
              t.classList.add('c-list:redume-is-open'),
              o.classList.add('c-redume-marker:is-open'));
        });
    })(),
    (() => {
      let e = document.querySelectorAll('.c-review-body');
      Array.prototype.slice.call(e, 0).forEach((e) => {
        e.offsetHeight < e.scrollHeight &&
          ((e.style.cursor = 'pointer'),
          e.addEventListener('click', () => {
            e.classList.contains('c-review-body:is-view')
              ? e.classList.remove('c-review-body:is-view')
              : e.classList.add('c-review-body:is-view');
          }));
      });
    })();
});
