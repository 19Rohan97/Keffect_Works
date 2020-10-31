!(function (e) {
  "function" == typeof define && define.amd && define.amd.jQuery
    ? define(["jquery"], e)
    : e(
        "undefined" != typeof module && module.exports
          ? require("jquery")
          : jQuery
      );
})(function (e) {
  function t(t) {
    return (
      !t ||
        void 0 !== t.allowPageScroll ||
        (void 0 === t.swipe && void 0 === t.swipeStatus) ||
        (t.allowPageScroll = s),
      void 0 !== t.click && void 0 === t.tap && (t.tap = t.click),
      t || (t = {}),
      (t = e.extend({}, e.fn.swipe.defaults, t)),
      this.each(function () {
        var r = e(this),
          i = r.data(M);
        i || ((i = new n(this, t)), r.data(M, i));
      })
    );
  }
  function n(t, n) {
    function r(t) {
      if (!(ce() || e(t.target).closest(n.excludedElements, Ve).length > 0)) {
        var r,
          i = t.originalEvent ? t.originalEvent : t,
          o = i.touches,
          u = o ? o[0] : i;
        return (
          (Xe = x),
          o
            ? (Ye = o.length)
            : n.preventDefaultEvents !== !1 && t.preventDefault(),
          (Re = 0),
          (Ie = null),
          ($e = null),
          (qe = null),
          (Ue = 0),
          (Ne = 0),
          (He = 0),
          (Fe = 1),
          (_e = 0),
          (Qe = ve()),
          le(),
          fe(0, u),
          !o || Ye === n.fingers || n.fingers === T || Q()
            ? ((ze = Oe()),
              2 == Ye &&
                (fe(1, o[1]), (Ne = He = Te(We[0].start, We[1].start))),
              (n.swipeStatus || n.pinchStatus) && (r = I(i, Xe)))
            : (r = !1),
          r === !1
            ? ((Xe = S), I(i, Xe), r)
            : (n.hold &&
                (et = setTimeout(
                  e.proxy(function () {
                    Ve.trigger("hold", [i.target]),
                      n.hold && (r = n.hold.call(Ve, i, i.target));
                  }, this),
                  n.longTapThreshold
                )),
              se(!0),
              null)
        );
      }
    }
    function D(e) {
      var t = e.originalEvent ? e.originalEvent : e;
      if (Xe !== E && Xe !== S && !ae()) {
        var r,
          i = t.touches,
          o = i ? i[0] : t,
          u = pe(o);
        if (
          ((Be = Oe()),
          i && (Ye = i.length),
          n.hold && clearTimeout(et),
          (Xe = y),
          2 == Ye &&
            (0 == Ne
              ? (fe(1, i[1]), (Ne = He = Te(We[0].start, We[1].start)))
              : (pe(i[1]),
                (He = Te(We[0].end, We[1].end)),
                (qe = xe(We[0].end, We[1].end))),
            (Fe = me(Ne, He)),
            (_e = Math.abs(Ne - He))),
          Ye === n.fingers || n.fingers === T || !i || Q())
        ) {
          if (
            ((Ie = Se(u.start, u.end)),
            ($e = Se(u.last, u.end)),
            _(e, $e),
            (Re = ye(u.start, u.end)),
            (Ue = be()),
            he(Ie, Re),
            (r = I(t, Xe)),
            !n.triggerOnTouchEnd || n.triggerOnTouchLeave)
          ) {
            var l = !0;
            if (n.triggerOnTouchLeave) {
              var a = je(this);
              l = ke(u.end, a);
            }
            !n.triggerOnTouchEnd && l
              ? (Xe = R(y))
              : n.triggerOnTouchLeave && !l && (Xe = R(E)),
              (Xe == S || Xe == E) && I(t, Xe);
          }
        } else (Xe = S), I(t, Xe);
        r === !1 && ((Xe = S), I(t, Xe));
      }
    }
    function L(e) {
      var t = e.originalEvent ? e.originalEvent : e,
        r = t.touches;
      if (r) {
        if (r.length && !ae()) return ue(t), !0;
        if (r.length && ae()) return !0;
      }
      return (
        ae() && (Ye = Ze),
        (Be = Oe()),
        (Ue = be()),
        N() || !U()
          ? ((Xe = S), I(t, Xe))
          : n.triggerOnTouchEnd || (0 == n.triggerOnTouchEnd && Xe === y)
          ? (n.preventDefaultEvents !== !1 && e.preventDefault(),
            (Xe = E),
            I(t, Xe))
          : !n.triggerOnTouchEnd && G()
          ? ((Xe = E), $(t, Xe, h))
          : Xe === y && ((Xe = S), I(t, Xe)),
        se(!1),
        null
      );
    }
    function A() {
      (Ye = 0), (Be = 0), (ze = 0), (Ne = 0), (He = 0), (Fe = 1), le(), se(!1);
    }
    function P(e) {
      var t = e.originalEvent ? e.originalEvent : e;
      n.triggerOnTouchLeave && ((Xe = R(E)), I(t, Xe));
    }
    function C() {
      Ve.unbind(De, r),
        Ve.unbind(Ce, A),
        Ve.unbind(Le, D),
        Ve.unbind(Ae, L),
        Pe && Ve.unbind(Pe, P),
        se(!1);
    }
    function R(e) {
      var t = e,
        r = F(),
        i = U(),
        o = N();
      return (
        !r || o
          ? (t = S)
          : !i || e != y || (n.triggerOnTouchEnd && !n.triggerOnTouchLeave)
          ? !i && e == E && n.triggerOnTouchLeave && (t = S)
          : (t = E),
        t
      );
    }
    function I(e, t) {
      var n,
        r = e.touches;
      return (
        (W() || Y()) && (n = $(e, t, p)),
        (V() || Q()) && n !== !1 && (n = $(e, t, d)),
        ie() && n !== !1
          ? (n = $(e, t, g))
          : oe() && n !== !1
          ? (n = $(e, t, v))
          : re() && n !== !1 && (n = $(e, t, h)),
        t === S && (Y() && (n = $(e, t, p)), Q() && (n = $(e, t, d)), A(e)),
        t === E && (r ? r.length || A(e) : A(e)),
        n
      );
    }
    function $(t, r, s) {
      var f;
      if (s == p) {
        if (
          (Ve.trigger("swipeStatus", [
            r,
            Ie || null,
            Re || 0,
            Ue || 0,
            Ye,
            We,
            $e,
          ]),
          n.swipeStatus &&
            ((f = n.swipeStatus.call(
              Ve,
              t,
              r,
              Ie || null,
              Re || 0,
              Ue || 0,
              Ye,
              We,
              $e
            )),
            f === !1))
        )
          return !1;
        if (r == E && X()) {
          if (
            (clearTimeout(Ke),
            clearTimeout(et),
            Ve.trigger("swipe", [Ie, Re, Ue, Ye, We, $e]),
            n.swipe &&
              ((f = n.swipe.call(Ve, t, Ie, Re, Ue, Ye, We, $e)), f === !1))
          )
            return !1;
          switch (Ie) {
            case i:
              Ve.trigger("swipeLeft", [Ie, Re, Ue, Ye, We, $e]),
                n.swipeLeft &&
                  (f = n.swipeLeft.call(Ve, t, Ie, Re, Ue, Ye, We, $e));
              break;
            case o:
              Ve.trigger("swipeRight", [Ie, Re, Ue, Ye, We, $e]),
                n.swipeRight &&
                  (f = n.swipeRight.call(Ve, t, Ie, Re, Ue, Ye, We, $e));
              break;
            case u:
              Ve.trigger("swipeUp", [Ie, Re, Ue, Ye, We, $e]),
                n.swipeUp &&
                  (f = n.swipeUp.call(Ve, t, Ie, Re, Ue, Ye, We, $e));
              break;
            case l:
              Ve.trigger("swipeDown", [Ie, Re, Ue, Ye, We, $e]),
                n.swipeDown &&
                  (f = n.swipeDown.call(Ve, t, Ie, Re, Ue, Ye, We, $e));
          }
        }
      }
      if (s == d) {
        if (
          (Ve.trigger("pinchStatus", [
            r,
            qe || null,
            _e || 0,
            Ue || 0,
            Ye,
            Fe,
            We,
          ]),
          n.pinchStatus &&
            ((f = n.pinchStatus.call(
              Ve,
              t,
              r,
              qe || null,
              _e || 0,
              Ue || 0,
              Ye,
              Fe,
              We
            )),
            f === !1))
        )
          return !1;
        if (r == E && q())
          switch (qe) {
            case a:
              Ve.trigger("pinchIn", [qe || null, _e || 0, Ue || 0, Ye, Fe, We]),
                n.pinchIn &&
                  (f = n.pinchIn.call(
                    Ve,
                    t,
                    qe || null,
                    _e || 0,
                    Ue || 0,
                    Ye,
                    Fe,
                    We
                  ));
              break;
            case c:
              Ve.trigger("pinchOut", [
                qe || null,
                _e || 0,
                Ue || 0,
                Ye,
                Fe,
                We,
              ]),
                n.pinchOut &&
                  (f = n.pinchOut.call(
                    Ve,
                    t,
                    qe || null,
                    _e || 0,
                    Ue || 0,
                    Ye,
                    Fe,
                    We
                  ));
          }
      }
      return (
        s == h
          ? (r === S || r === E) &&
            (clearTimeout(Ke),
            clearTimeout(et),
            Z() && !ee()
              ? ((Je = Oe()),
                (Ke = setTimeout(
                  e.proxy(function () {
                    (Je = null),
                      Ve.trigger("tap", [t.target]),
                      n.tap && (f = n.tap.call(Ve, t, t.target));
                  }, this),
                  n.doubleTapThreshold
                )))
              : ((Je = null),
                Ve.trigger("tap", [t.target]),
                n.tap && (f = n.tap.call(Ve, t, t.target))))
          : s == g
          ? (r === S || r === E) &&
            (clearTimeout(Ke),
            clearTimeout(et),
            (Je = null),
            Ve.trigger("doubletap", [t.target]),
            n.doubleTap && (f = n.doubleTap.call(Ve, t, t.target)))
          : s == v &&
            (r === S || r === E) &&
            (clearTimeout(Ke),
            (Je = null),
            Ve.trigger("longtap", [t.target]),
            n.longTap && (f = n.longTap.call(Ve, t, t.target))),
        f
      );
    }
    function U() {
      var e = !0;
      return null !== n.threshold && (e = Re >= n.threshold), e;
    }
    function N() {
      var e = !1;
      return (
        null !== n.cancelThreshold &&
          null !== Ie &&
          (e = ge(Ie) - Re >= n.cancelThreshold),
        e
      );
    }
    function H() {
      return null !== n.pinchThreshold ? _e >= n.pinchThreshold : !0;
    }
    function F() {
      var e;
      return (e = n.maxTimeThreshold && Ue >= n.maxTimeThreshold ? !1 : !0);
    }
    function _(e, t) {
      if (n.preventDefaultEvents !== !1)
        if (n.allowPageScroll === s) e.preventDefault();
        else {
          var r = n.allowPageScroll === f;
          switch (t) {
            case i:
              ((n.swipeLeft && r) || (!r && n.allowPageScroll != w)) &&
                e.preventDefault();
              break;
            case o:
              ((n.swipeRight && r) || (!r && n.allowPageScroll != w)) &&
                e.preventDefault();
              break;
            case u:
              ((n.swipeUp && r) || (!r && n.allowPageScroll != b)) &&
                e.preventDefault();
              break;
            case l:
              ((n.swipeDown && r) || (!r && n.allowPageScroll != b)) &&
                e.preventDefault();
          }
        }
    }
    function q() {
      var e = z(),
        t = B(),
        n = H();
      return e && t && n;
    }
    function Q() {
      return !!(n.pinchStatus || n.pinchIn || n.pinchOut);
    }
    function V() {
      return !(!q() || !Q());
    }
    function X() {
      var e = F(),
        t = U(),
        n = z(),
        r = B(),
        i = N(),
        o = !i && r && n && t && e;
      return o;
    }
    function Y() {
      return !!(
        n.swipe ||
        n.swipeStatus ||
        n.swipeLeft ||
        n.swipeRight ||
        n.swipeUp ||
        n.swipeDown
      );
    }
    function W() {
      return !(!X() || !Y());
    }
    function z() {
      return Ye === n.fingers || n.fingers === T || !O;
    }
    function B() {
      return 0 !== We[0].end.x;
    }
    function G() {
      return !!n.tap;
    }
    function Z() {
      return !!n.doubleTap;
    }
    function J() {
      return !!n.longTap;
    }
    function K() {
      if (null == Je) return !1;
      var e = Oe();
      return Z() && e - Je <= n.doubleTapThreshold;
    }
    function ee() {
      return K();
    }
    function te() {
      return (1 === Ye || !O) && (isNaN(Re) || Re < n.threshold);
    }
    function ne() {
      return Ue > n.longTapThreshold && m > Re;
    }
    function re() {
      return !(!te() || !G());
    }
    function ie() {
      return !(!K() || !Z());
    }
    function oe() {
      return !(!ne() || !J());
    }
    function ue(e) {
      (Ge = Oe()), (Ze = e.touches.length + 1);
    }
    function le() {
      (Ge = 0), (Ze = 0);
    }
    function ae() {
      var e = !1;
      if (Ge) {
        var t = Oe() - Ge;
        t <= n.fingerReleaseThreshold && (e = !0);
      }
      return e;
    }
    function ce() {
      return !(Ve.data(M + "_intouch") !== !0);
    }
    function se(e) {
      Ve &&
        (e === !0
          ? (Ve.bind(Le, D), Ve.bind(Ae, L), Pe && Ve.bind(Pe, P))
          : (Ve.unbind(Le, D, !1),
            Ve.unbind(Ae, L, !1),
            Pe && Ve.unbind(Pe, P, !1)),
        Ve.data(M + "_intouch", e === !0));
    }
    function fe(e, t) {
      var n = {
        start: { x: 0, y: 0 },
        last: { x: 0, y: 0 },
        end: { x: 0, y: 0 },
      };
      return (
        (n.start.x = n.last.x = n.end.x = t.pageX || t.clientX),
        (n.start.y = n.last.y = n.end.y = t.pageY || t.clientY),
        (We[e] = n),
        n
      );
    }
    function pe(e) {
      var t = void 0 !== e.identifier ? e.identifier : 0,
        n = de(t);
      return (
        null === n && (n = fe(t, e)),
        (n.last.x = n.end.x),
        (n.last.y = n.end.y),
        (n.end.x = e.pageX || e.clientX),
        (n.end.y = e.pageY || e.clientY),
        n
      );
    }
    function de(e) {
      return We[e] || null;
    }
    function he(e, t) {
      (t = Math.max(t, ge(e))), (Qe[e].distance = t);
    }
    function ge(e) {
      return Qe[e] ? Qe[e].distance : void 0;
    }
    function ve() {
      var e = {};
      return (e[i] = we(i)), (e[o] = we(o)), (e[u] = we(u)), (e[l] = we(l)), e;
    }
    function we(e) {
      return { direction: e, distance: 0 };
    }
    function be() {
      return Be - ze;
    }
    function Te(e, t) {
      var n = Math.abs(e.x - t.x),
        r = Math.abs(e.y - t.y);
      return Math.round(Math.sqrt(n * n + r * r));
    }
    function me(e, t) {
      var n = (t / e) * 1;
      return n.toFixed(2);
    }
    function xe() {
      return 1 > Fe ? c : a;
    }
    function ye(e, t) {
      return Math.round(
        Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2))
      );
    }
    function Ee(e, t) {
      var n = e.x - t.x,
        r = t.y - e.y,
        i = Math.atan2(r, n),
        o = Math.round((180 * i) / Math.PI);
      return 0 > o && (o = 360 - Math.abs(o)), o;
    }
    function Se(e, t) {
      var n = Ee(e, t);
      return 45 >= n && n >= 0
        ? i
        : 360 >= n && n >= 315
        ? i
        : n >= 135 && 225 >= n
        ? o
        : n > 45 && 135 > n
        ? l
        : u;
    }
    function Oe() {
      var e = new Date();
      return e.getTime();
    }
    function je(t) {
      t = e(t);
      var n = t.offset(),
        r = {
          left: n.left,
          right: n.left + t.outerWidth(),
          top: n.top,
          bottom: n.top + t.outerHeight(),
        };
      return r;
    }
    function ke(e, t) {
      return e.x > t.left && e.x < t.right && e.y > t.top && e.y < t.bottom;
    }
    var n = e.extend({}, n),
      Me = O || k || !n.fallbackToMouseEvents,
      De = Me
        ? k
          ? j
            ? "MSPointerDown"
            : "pointerdown"
          : "touchstart"
        : "mousedown",
      Le = Me
        ? k
          ? j
            ? "MSPointerMove"
            : "pointermove"
          : "touchmove"
        : "mousemove",
      Ae = Me
        ? k
          ? j
            ? "MSPointerUp"
            : "pointerup"
          : "touchend"
        : "mouseup",
      Pe = Me ? (k ? "mouseleave" : null) : "mouseleave",
      Ce = k ? (j ? "MSPointerCancel" : "pointercancel") : "touchcancel",
      Re = 0,
      Ie = null,
      $e = null,
      Ue = 0,
      Ne = 0,
      He = 0,
      Fe = 1,
      _e = 0,
      qe = 0,
      Qe = null,
      Ve = e(t),
      Xe = "start",
      Ye = 0,
      We = {},
      ze = 0,
      Be = 0,
      Ge = 0,
      Ze = 0,
      Je = 0,
      Ke = null,
      et = null;
    try {
      Ve.bind(De, r), Ve.bind(Ce, A);
    } catch (tt) {
      e.error("events not supported " + De + "," + Ce + " on jQuery.swipe");
    }
    (this.enable = function () {
      return Ve.bind(De, r), Ve.bind(Ce, A), Ve;
    }),
      (this.disable = function () {
        return C(), Ve;
      }),
      (this.destroy = function () {
        C(), Ve.data(M, null), (Ve = null);
      }),
      (this.option = function (t, r) {
        if ("object" == typeof t) n = e.extend(n, t);
        else if (void 0 !== n[t]) {
          if (void 0 === r) return n[t];
          n[t] = r;
        } else {
          if (!t) return n;
          e.error("Option " + t + " does not exist on jQuery.swipe.options");
        }
        return null;
      });
  }
  var r = "1.6.15",
    i = "left",
    o = "right",
    u = "up",
    l = "down",
    a = "in",
    c = "out",
    s = "none",
    f = "auto",
    p = "swipe",
    d = "pinch",
    h = "tap",
    g = "doubletap",
    v = "longtap",
    w = "horizontal",
    b = "vertical",
    T = "all",
    m = 10,
    x = "start",
    y = "move",
    E = "end",
    S = "cancel",
    O = "ontouchstart" in window,
    j =
      window.navigator.msPointerEnabled &&
      !window.navigator.pointerEnabled &&
      !O,
    k =
      (window.navigator.pointerEnabled || window.navigator.msPointerEnabled) &&
      !O,
    M = "TouchSwipe",
    D = {
      fingers: 1,
      threshold: 75,
      cancelThreshold: null,
      pinchThreshold: 20,
      maxTimeThreshold: null,
      fingerReleaseThreshold: 250,
      longTapThreshold: 500,
      doubleTapThreshold: 200,
      swipe: null,
      swipeLeft: null,
      swipeRight: null,
      swipeUp: null,
      swipeDown: null,
      swipeStatus: null,
      pinchIn: null,
      pinchOut: null,
      pinchStatus: null,
      click: null,
      tap: null,
      doubleTap: null,
      longTap: null,
      hold: null,
      triggerOnTouchEnd: !0,
      triggerOnTouchLeave: !1,
      allowPageScroll: "auto",
      fallbackToMouseEvents: !0,
      excludedElements: "label, button, input, select, textarea, a, .noSwipe",
      preventDefaultEvents: !0,
    };
  (e.fn.swipe = function (n) {
    var r = e(this),
      i = r.data(M);
    if (i && "string" == typeof n) {
      if (i[n])
        return i[n].apply(this, Array.prototype.slice.call(arguments, 1));
      e.error("Method " + n + " does not exist on jQuery.swipe");
    } else if (i && "object" == typeof n) i.option.apply(this, arguments);
    else if (!(i || ("object" != typeof n && n)))
      return t.apply(this, arguments);
    return r;
  }),
    (e.fn.swipe.version = r),
    (e.fn.swipe.defaults = D),
    (e.fn.swipe.phases = {
      PHASE_START: x,
      PHASE_MOVE: y,
      PHASE_END: E,
      PHASE_CANCEL: S,
    }),
    (e.fn.swipe.directions = {
      LEFT: i,
      RIGHT: o,
      UP: u,
      DOWN: l,
      IN: a,
      OUT: c,
    }),
    (e.fn.swipe.pageScroll = { NONE: s, HORIZONTAL: w, VERTICAL: b, AUTO: f }),
    (e.fn.swipe.fingers = {
      ONE: 1,
      TWO: 2,
      THREE: 3,
      FOUR: 4,
      FIVE: 5,
      ALL: T,
    });
});
var jBox = function (e) {
  function t(e, t) {
    if ("lastOrFirst" != e) {
      v.fadeIn(E);
      var n, r;
      "next" == t && ((n = "fade-in-right"), (r = "fade-out-left")),
        "prev" == t && ((n = "fade-in-left"), (r = "fade-out-right")),
        "first" != t
          ? M &&
            (w.addClass(r),
            setTimeout(function () {
              w.removeClass(r),
                w.addClass(n),
                (M = !1),
                w.attr("src", e),
                b.text(i(e)),
                setTimeout(function () {
                  w.removeClass(n), (M = !0);
                }, S);
            }, S))
          : (w.attr("src", e), b.text(i(e))),
        e == A ? o("prev") : u("prev"),
        e == L ? o("next") : u("next"),
        p();
    }
  }
  function n() {
    v.fadeOut(E), w.attr("src", ""), d();
  }
  function r(e) {
    var t = "lastOrFirst";
    if ("prev" == e && w.attr("src") == D[0].getAttribute("src")) return t;
    if ("next" == e && w.attr("src") == D[D.length - 1].getAttribute("src"))
      return t;
    var n,
      r = w.attr("src");
    if ("next" == e) {
      for (var i = 0; i < D.length; i++)
        if (r == D[i].getAttribute("src")) {
          i++, (n = D[i].getAttribute("src"));
          break;
        }
      return n;
    }
    if ("prev" == e) {
      for (var i = 0; i < D.length; i++)
        if (r == D[i].getAttribute("src")) {
          i--, (n = D[i].getAttribute("src"));
          break;
        }
      return n;
    }
  }
  function i(e) {
    for (var t = "", n = 0; n < D.length - 1; n++)
      if (e == D[n].getAttribute("src")) {
        t = D[n].getAttribute("alt");
        break;
      }
    return null == t && (t = ""), t;
  }
  function o(e) {
    "prev" == e && T.hide(), "next" == e && m.hide();
  }
  function u(e) {
    "prev" == e && T.show(), "next" == e && m.show();
  }
  function l() {
    j ||
      (m.addClass("pop-up"),
      setTimeout(function () {
        m.removeClass("pop-up");
      }, k));
  }
  function a() {
    j ||
      (T.addClass("pop-up"),
      setTimeout(function () {
        T.removeClass("pop-up");
      }, k));
  }
  function c() {
    j ||
      (x.addClass("pop-up"),
      setTimeout(function () {
        x.removeClass("pop-up");
      }, k));
  }
  function s(e) {
    (e = e || window.event),
      e.preventDefault && e.preventDefault(),
      (e.returnValue = !1);
  }
  function f(e) {
    return P[e.keyCode] ? (s(e), !1) : void 0;
  }
  function p() {
    window.addEventListener && window.addEventListener("DOMMouseScroll", s, !1),
      (window.onwheel = s),
      (window.onmousewheel = document.onmousewheel = s),
      (window.ontouchmove = s),
      (document.onkeydown = f);
  }
  function d() {
    window.removeEventListener &&
      window.removeEventListener("DOMMouseScroll", s, !1),
      (window.onmousewheel = document.onmousewheel = null),
      (window.onwheel = null),
      (window.ontouchmove = null),
      (document.onkeydown = null);
  }
  var h = ".jbox-img",
    g = !0;
  "undefined" != typeof e &&
    (e.imageSelector && (h = e.imageSelector), e.altText && (g = e.altText));
  var v = $(".jbox-container"),
    w = $(".jbox-container img"),
    b = $(".jbox-container .img-alt-text"),
    T = $(".jbox-container .jbox-prev"),
    m = $(".jbox-container .jbox-next"),
    x = $(".jbox-container .jbox-close"),
    y = $(
      ".jbox-container .jbox-next, .jbox-container .jbox-prev, .jbox-container jbox-.close"
    ),
    E = 250,
    S = 150,
    O = !1,
    j = !1,
    k = 300,
    M = !0,
    D = $(h),
    L = D[D.length - 1].getAttribute("src"),
    A = D[0].getAttribute("src");
  $(document).ready(function () {
    $(".jbox-img").click(function () {
      var e = $(this).attr("src");
      t(e, "first");
    });
  }),
    w.mouseenter(function () {
      O = !0;
    }),
    w.mouseleave(function () {
      O = !1;
    }),
    y.mouseenter(function () {
      (O = !0), (j = !0);
    }),
    y.mouseleave(function () {
      (O = !1), (j = !1);
    }),
    v.click(function () {
      O || n();
    }),
    m.click(function () {
      t(r("next"), "next");
    }),
    T.click(function () {
      t(r("prev"), "prev");
    }),
    x.click(function () {
      n();
    }),
    v.swipe({
      swipe: function (e, i) {
        "left" == i && t(r("next"), "next"),
          "right" == i && t(r("prev"), "prev"),
          ("up" == i || "down" == i) && n();
      },
    }),
    $(document).keyup(function (e) {
      27 == e.keyCode && (n(), c()),
        37 == (e.keyCode || e.which) && (t(r("prev"), "prev"), a()),
        39 == (e.keyCode || e.which) && (t(r("next"), "next"), l());
    });
  var P = { 37: 1, 38: 1, 39: 1, 40: 1 };
};
