/*!
 * FullCalendar v1.6.1
 * Docs & License: http://arshaw.com/fullcalendar/
 * (c) 2013 Adam Shaw
 */
(function (t, e) {
    function n(e) {
        t.extend(!0, ye, e)
    }

    function r(n, r, l) {
        function u(t) {
            G ? (S(), C(), R(), b(t)) : f()
        }

        function f() {
            K = r.theme ? "ui" : "fc", n.addClass("fc"), r.isRTL ? n.addClass("fc-rtl") : n.addClass("fc-ltr"), r.theme && n.addClass("ui-widget"), G = t("<div class='fc-content' style='position:relative'/>").prependTo(n), $ = new a(Z, r), Q = $.render(), Q && n.prepend(Q), y(r.defaultView), t(window).resize(x), m() || v()
        }

        function v() {
            setTimeout(function () {
                !te.start && m() && b()
            }, 0)
        }

        function h() {
            t(window).unbind("resize", x), $.destroy(), G.remove(), n.removeClass("fc fc-rtl ui-widget")
        }

        function g() {
            return 0 !== se.offsetWidth
        }

        function m() {
            return 0 !== t("body")[0].offsetWidth
        }

        function y(e) {
            if (!te || e != te.name) {
                ue++, W();
                var n, r = te;
                r ? ((r.beforeHide || I)(), q(G, G.height()), r.element.hide()) : q(G, 1), G.css("overflow", "hidden"), te = ce[e], te ? te.element.show() : te = ce[e] = new De[e](n = re = t("<div class='fc-view fc-view-" + e + "' style='position:absolute'/>").appendTo(G), Z), r && $.deactivateButton(r.name), $.activateButton(e), b(), G.css("overflow", ""), r && q(G, 1), n || (te.afterShow || I)(), ue--
            }
        }

        function b(t) {
            if (g()) {
                ue++, W(), ne === e && S();
                var r = !1;
                !te.start || t || te.start > fe || fe >= te.end ? (te.render(fe, t || 0), E(!0), r = !0) : te.sizeDirty ? (te.clearEvents(), E(), r = !0) : te.eventsDirty && (te.clearEvents(), r = !0), te.sizeDirty = !1, te.eventsDirty = !1, T(r), ee = n.outerWidth(), $.updateTitle(te.title);
                var a = new Date;
                a >= te.start && te.end > a ? $.disableButton("today") : $.enableButton("today"), ue--, te.trigger("viewDisplay", se)
            }
        }

        function M() {
            C(), g() && (S(), E(), W(), te.clearEvents(), te.renderEvents(de), te.sizeDirty = !1)
        }

        function C() {
            t.each(ce, function (t, e) {
                e.sizeDirty = !0
            })
        }

        function S() {
            ne = r.contentHeight ? r.contentHeight : r.height ? r.height - (Q ? Q.height() : 0) - L(G) : Math.round(G.width() / Math.max(r.aspectRatio, .5))
        }

        function E(t) {
            ue++, te.setHeight(ne, t), re && (re.css("position", "relative"), re = null), te.setWidth(G.width(), t), ue--
        }

        function x() {
            if (!ue)
                if (te.start) {
                    var t = ++le;
                    setTimeout(function () {
                        t == le && !ue && g() && ee != (ee = n.outerWidth()) && (ue++, M(), te.trigger("windowResize", se), ue--)
                    }, 200)
                } else v()
        }

        function T(t) {
            !r.lazyFetching || oe(te.visStart, te.visEnd) ? k() : t && F()
        }

        function k() {
            ie(te.visStart, te.visEnd)
        }

        function H(t) {
            de = t, F()
        }

        function z(t) {
            F(t)
        }

        function F(t) {
            R(), g() && (te.clearEvents(), te.renderEvents(de, t), te.eventsDirty = !1)
        }

        function R() {
            t.each(ce, function (t, e) {
                e.eventsDirty = !0
            })
        }

        function N(t, n, r) {
            te.select(t, n, r === e ? !0 : r)
        }

        function W() {
            te && te.unselect()
        }

        function A() {
            b(-1)
        }

        function _() {
            b(1)
        }

        function O() {
            i(fe, -1), b()
        }

        function B() {
            i(fe, 1), b()
        }

        function Y() {
            fe = new Date, b()
        }

        function j(t, e, n) {
            t instanceof Date ? fe = d(t) : p(fe, t, e, n), b()
        }

        function P(t, n, r) {
            t !== e && i(fe, t), n !== e && s(fe, n), r !== e && c(fe, r), b()
        }

        function J() {
            return d(fe)
        }

        function V() {
            return te
        }

        function X(t, n) {
            return n === e ? r[t] : (("height" == t || "contentHeight" == t || "aspectRatio" == t) && (r[t] = n, M()), e)
        }

        function U(t, n) {
            return r[t] ? r[t].apply(n || se, Array.prototype.slice.call(arguments, 2)) : e
        }
        var Z = this;
        Z.options = r, Z.render = u, Z.destroy = h, Z.refetchEvents = k, Z.reportEvents = H, Z.reportEventChange = z, Z.rerenderEvents = F, Z.changeView = y, Z.select = N, Z.unselect = W, Z.prev = A, Z.next = _, Z.prevYear = O, Z.nextYear = B, Z.today = Y, Z.gotoDate = j, Z.incrementDate = P, Z.formatDate = function (t, e) {
            return w(t, e, r)
        }, Z.formatDates = function (t, e, n) {
            return D(t, e, n, r)
        }, Z.getDate = J, Z.getView = V, Z.option = X, Z.trigger = U, o.call(Z, r, l);
        var $, Q, G, K, te, ee, ne, re, ae, oe = Z.isFetchNeeded,
            ie = Z.fetchEvents,
            se = n[0],
            ce = {}, le = 0,
            ue = 0,
            fe = new Date,
            de = [];
        p(fe, r.year, r.month, r.date), r.droppable && t(document).bind("dragstart", function (e, n) {
            var a = e.target,
                o = t(a);
            if (!o.parents(".fc").length) {
                var i = r.dropAccept;
                (t.isFunction(i) ? i.call(a, o) : o.is(i)) && (ae = a, te.dragStart(ae, e, n))
            }
        }).bind("dragstop", function (t, e) {
            ae && (te.dragStop(ae, t, e), ae = null)
        })
    }

    function a(n, r) {
        function a() {
            v = r.theme ? "ui" : "fc";
            var n = r.header;
            return n ? h = t("<table class='fc-header' style='width:100%'/>").append(t("<tr/>").append(i("left")).append(i("center")).append(i("right"))) : e
        }

        function o() {
            h.remove()
        }

        function i(e) {
            var a = t("<td class='fc-header-" + e + "'/>"),
                o = r.header[e];
            return o && t.each(o.split(" "), function (e) {
                e > 0 && a.append("<span class='fc-header-space'/>");
                var o;
                t.each(this.split(","), function (e, i) {
                    if ("title" == i) a.append("<span class='fc-header-title'><h2>&nbsp;</h2></span>"), o && o.addClass(v + "-corner-right"), o = null;
                    else {
                        var s;
                        if (n[i] ? s = n[i] : De[i] && (s = function () {
                            u.removeClass(v + "-state-hover"), n.changeView(i)
                        }), s) {
                            var c = r.theme ? J(r.buttonIcons, i) : null,
                                l = J(r.buttonText, i),
                                u = t("<span class='fc-button fc-button-" + i + " " + v + "-state-default'>" + (c ? "<span class='fc-icon-wrap'><span class='ui-icon ui-icon-" + c + "'/>" + "</span>" : l) + "</span>").click(function () {
                                    u.hasClass(v + "-state-disabled") || s()
                                }).mousedown(function () {
                                    u.not("." + v + "-state-active").not("." + v + "-state-disabled").addClass(v + "-state-down")
                                }).mouseup(function () {
                                    u.removeClass(v + "-state-down")
                                }).hover(function () {
                                    u.not("." + v + "-state-active").not("." + v + "-state-disabled").addClass(v + "-state-hover")
                                }, function () {
                                    u.removeClass(v + "-state-hover").removeClass(v + "-state-down")
                                }).appendTo(a);
                            U(u), o || u.addClass(v + "-corner-left"), o = u
                        }
                    }
                }), o && o.addClass(v + "-corner-right")
            }), a
        }

        function s(t) {
            h.find("h2").html(t)
        }

        function c(t) {
            h.find("span.fc-button-" + t).addClass(v + "-state-active")
        }

        function l(t) {
            h.find("span.fc-button-" + t).removeClass(v + "-state-active")
        }

        function u(t) {
            h.find("span.fc-button-" + t).addClass(v + "-state-disabled")
        }

        function f(t) {
            h.find("span.fc-button-" + t).removeClass(v + "-state-disabled")
        }
        var d = this;
        d.render = a, d.destroy = o, d.updateTitle = s, d.activateButton = c, d.deactivateButton = l, d.disableButton = u, d.enableButton = f;
        var v, h = t([])
    }

    function o(n, r) {
        function a(t, e) {
            return !S || S > t || e > E
        }

        function o(t, e) {
            S = t, E = e, W = [];
            var n = ++F,
                r = z.length;
            R = r;
            for (var a = 0; r > a; a++) i(z[a], n)
        }

        function i(e, r) {
            s(e, function (a) {
                if (r == F) {
                    if (a) {
                        n.eventDataTransform && (a = t.map(a, n.eventDataTransform)), e.eventDataTransform && (a = t.map(a, e.eventDataTransform));
                        for (var o = 0; a.length > o; o++) a[o].source = e, b(a[o]);
                        W = W.concat(a)
                    }
                    R--, R || k(W)
                }
            })
        }

        function s(r, a) {
            var o, i, c = we.sourceFetchers;
            for (o = 0; c.length > o; o++) {
                if (i = c[o](r, S, E, a), i === !0) return;
                if ("object" == typeof i) return s(i, a), e
            }
            var l = r.events;
            if (l) t.isFunction(l) ? (p(), l(d(S), d(E), function (t) {
                a(t), y()
            })) : t.isArray(l) ? a(l) : a();
            else {
                var u = r.url;
                if (u) {
                    var f = r.success,
                        v = r.error,
                        h = r.complete,
                        g = t.extend({}, r.data || {}),
                        m = K(r.startParam, n.startParam),
                        b = K(r.endParam, n.endParam);
                    m && (g[m] = Math.round(+S / 1e3)), b && (g[b] = Math.round(+E / 1e3)), p(), t.ajax(t.extend({}, Me, r, {
                        data: g,
                        success: function (e) {
                            e = e || [];
                            var n = G(f, this, arguments);
                            t.isArray(n) && (e = n), a(e)
                        },
                        error: function () {
                            G(v, this, arguments), a()
                        },
                        complete: function () {
                            G(h, this, arguments), y()
                        }
                    }))
                } else a()
            }
        }

        function c(t) {
            t = l(t), t && (R++, i(t, F))
        }

        function l(n) {
            return t.isFunction(n) || t.isArray(n) ? n = {
                events: n
            } : "string" == typeof n && (n = {
                url: n
            }), "object" == typeof n ? (w(n), z.push(n), n) : e
        }

        function u(e) {
            z = t.grep(z, function (t) {
                return !D(t, e)
            }), W = t.grep(W, function (t) {
                return !D(t.source, e)
            }), k(W)
        }

        function f(t) {
            var e, n, r = W.length,
                a = T().defaultEventEnd,
                o = t.start - t._start,
                i = t.end ? t.end - (t._end || a(t)) : 0;
            for (e = 0; r > e; e++) n = W[e], n._id == t._id && n != t && (n.start = new Date(+n.start + o), n.end = t.end ? n.end ? new Date(+n.end + i) : new Date(+a(n) + i) : null, n.title = t.title, n.url = t.url, n.allDay = t.allDay, n.className = t.className, n.editable = t.editable, n.color = t.color, n.backgroudColor = t.backgroudColor, n.borderColor = t.borderColor, n.textColor = t.textColor, b(n));
            b(t), k(W)
        }

        function v(t, e) {
            b(t), t.source || (e && (H.events.push(t), t.source = H), W.push(t)), k(W)
        }

        function h(e) {
            if (e) {
                if (!t.isFunction(e)) {
                    var n = e + "";
                    e = function (t) {
                        return t._id == n
                    }
                }
                W = t.grep(W, e, !0);
                for (var r = 0; z.length > r; r++) t.isArray(z[r].events) && (z[r].events = t.grep(z[r].events, e, !0))
            } else {
                W = [];
                for (var r = 0; z.length > r; r++) t.isArray(z[r].events) && (z[r].events = [])
            }
            k(W)
        }

        function g(e) {
            return t.isFunction(e) ? t.grep(W, e) : e ? (e += "", t.grep(W, function (t) {
                return t._id == e
            })) : W
        }

        function p() {
            N++ || x("loading", null, !0)
        }

        function y() {
            --N || x("loading", null, !1)
        }

        function b(t) {
            var r = t.source || {}, a = K(r.ignoreTimezone, n.ignoreTimezone);
            t._id = t._id || (t.id === e ? "_fc" + Ce++ : t.id + ""), t.date && (t.start || (t.start = t.date), delete t.date), t._start = d(t.start = m(t.start, a)), t.end = m(t.end, a), t.end && t.end <= t.start && (t.end = null), t._end = t.end ? d(t.end) : null, t.allDay === e && (t.allDay = K(r.allDayDefault, n.allDayDefault)), t.className ? "string" == typeof t.className && (t.className = t.className.split(/\s+/)) : t.className = []
        }

        function w(t) {
            t.className ? "string" == typeof t.className && (t.className = t.className.split(/\s+/)) : t.className = [];
            for (var e = we.sourceNormalizers, n = 0; e.length > n; n++) e[n](t)
        }

        function D(t, e) {
            return t && e && M(t) == M(e)
        }

        function M(t) {
            return ("object" == typeof t ? t.events || t.url : "") || t
        }
        var C = this;
        C.isFetchNeeded = a, C.fetchEvents = o, C.addEventSource = c, C.removeEventSource = u, C.updateEvent = f, C.renderEvent = v, C.removeEvents = h, C.clientEvents = g, C.normalizeEvent = b;
        for (var S, E, x = C.trigger, T = C.getView, k = C.reportEvents, H = {
                events: []
            }, z = [H], F = 0, R = 0, N = 0, W = [], A = 0; r.length > A; A++) l(r[A])
    }

    function i(t, e, n) {
        return t.setFullYear(t.getFullYear() + e), n || f(t), t
    }

    function s(t, e, n) {
        if (+t) {
            var r = t.getMonth() + e,
                a = d(t);
            for (a.setDate(1), a.setMonth(r), t.setMonth(r), n || f(t); t.getMonth() != a.getMonth();) t.setDate(t.getDate() + (a > t ? 1 : -1))
        }
        return t
    }

    function c(t, e, n) {
        if (+t) {
            var r = t.getDate() + e,
                a = d(t);
            a.setHours(9), a.setDate(r), t.setDate(r), n || f(t), l(t, a)
        }
        return t
    }

    function l(t, e) {
        if (+t)
            for (; t.getDate() != e.getDate();) t.setTime(+t + (e > t ? 1 : -1) * xe)
    }

    function u(t, e) {
        return t.setMinutes(t.getMinutes() + e), t
    }

    function f(t) {
        return t.setHours(0), t.setMinutes(0), t.setSeconds(0), t.setMilliseconds(0), t
    }

    function d(t, e) {
        return e ? f(new Date(+t)) : new Date(+t)
    }

    function v() {
        var t, e = 0;
        do t = new Date(1970, e++, 1); while (t.getHours());
        return t
    }

    function h(t, e, n) {
        for (e = e || 1; !t.getDay() || n && 1 == t.getDay() || !n && 6 == t.getDay();) c(t, e);
        return t
    }

    function g(t, e) {
        return Math.round((d(t, !0) - d(e, !0)) / Ee)
    }

    function p(t, n, r, a) {
        n !== e && n != t.getFullYear() && (t.setDate(1), t.setMonth(0), t.setFullYear(n)), r !== e && r != t.getMonth() && (t.setDate(1), t.setMonth(r)), a !== e && t.setDate(a)
    }

    function m(t, n) {
        return "object" == typeof t ? t : "number" == typeof t ? new Date(1e3 * t) : "string" == typeof t ? t.match(/^\d+(\.\d+)?$/) ? new Date(1e3 * parseFloat(t)) : (n === e && (n = !0), y(t, n) || (t ? new Date(t) : null)) : null
    }

    function y(t, e) {
        var n = t.match(/^([0-9]{4})(-([0-9]{2})(-([0-9]{2})([T ]([0-9]{2}):([0-9]{2})(:([0-9]{2})(\.([0-9]+))?)?(Z|(([-+])([0-9]{2})(:?([0-9]{2}))?))?)?)?)?$/);
        if (!n) return null;
        var r = new Date(n[1], 0, 1);
        if (e || !n[13]) {
            var a = new Date(n[1], 0, 1, 9, 0);
            n[3] && (r.setMonth(n[3] - 1), a.setMonth(n[3] - 1)), n[5] && (r.setDate(n[5]), a.setDate(n[5])), l(r, a), n[7] && r.setHours(n[7]), n[8] && r.setMinutes(n[8]), n[10] && r.setSeconds(n[10]), n[12] && r.setMilliseconds(1e3 * Number("0." + n[12])), l(r, a)
        } else if (r.setUTCFullYear(n[1], n[3] ? n[3] - 1 : 0, n[5] || 1), r.setUTCHours(n[7] || 0, n[8] || 0, n[10] || 0, n[12] ? 1e3 * Number("0." + n[12]) : 0), n[14]) {
            var o = 60 * Number(n[16]) + (n[18] ? Number(n[18]) : 0);
            o *= "-" == n[15] ? 1 : -1, r = new Date(+r + 1e3 * 60 * o)
        }
        return r
    }

    function b(t) {
        if ("number" == typeof t) return 60 * t;
        if ("object" == typeof t) return 60 * t.getHours() + t.getMinutes();
        var e = t.match(/(\d+)(?::(\d+))?\s*(\w+)?/);
        if (e) {
            var n = parseInt(e[1], 10);
            return e[3] && (n %= 12, "p" == e[3].toLowerCase().charAt(0) && (n += 12)), 60 * n + (e[2] ? parseInt(e[2], 10) : 0)
        }
    }

    function w(t, e, n) {
        return D(t, null, e, n)
    }

    function D(t, e, n, r) {
        r = r || ye;
        var a, o, i, s, c = t,
            l = e,
            u = n.length,
            f = "";
        for (a = 0; u > a; a++)
            if (o = n.charAt(a), "'" == o) {
                for (i = a + 1; u > i; i++)
                    if ("'" == n.charAt(i)) {
                        c && (f += i == a + 1 ? "'" : n.substring(a + 1, i), a = i);
                        break
                    }
            } else if ("(" == o) {
            for (i = a + 1; u > i; i++)
                if (")" == n.charAt(i)) {
                    var d = w(c, n.substring(a + 1, i), r);
                    parseInt(d.replace(/\D/, ""), 10) && (f += d), a = i;
                    break
                }
        } else if ("[" == o) {
            for (i = a + 1; u > i; i++)
                if ("]" == n.charAt(i)) {
                    var v = n.substring(a + 1, i),
                        d = w(c, v, r);
                    d != w(l, v, r) && (f += d), a = i;
                    break
                }
        } else if ("{" == o) c = e, l = t;
        else if ("}" == o) c = t, l = e;
        else {
            for (i = u; i > a; i--)
                if (s = ke[n.substring(a, i)]) {
                    c && (f += s(c, r)), a = i - 1;
                    break
                }
            i == a && c && (f += o)
        }
        return f
    }

    function M(t) {
        var e, n = new Date(t.getTime());
        return n.setDate(n.getDate() + 4 - (n.getDay() || 7)), e = n.getTime(), n.setMonth(0), n.setDate(1), Math.floor(Math.round((e - n) / 864e5) / 7) + 1
    }

    function C(t) {
        return t.end ? S(t.end, t.allDay) : c(d(t.start), 1)
    }

    function S(t, e) {
        return t = d(t), e || t.getHours() || t.getMinutes() ? c(t, 1) : f(t)
    }

    function E(t, e) {
        return 100 * (e.msLength - t.msLength) + (t.event.start - e.event.start)
    }

    function x(t, e) {
        return t.end > e.start && t.start < e.end
    }

    function T(t, e, n, r) {
        var a, o, i, s, c, l, u, f, v = [],
            h = t.length;
        for (a = 0; h > a; a++) o = t[a], i = o.start, s = e[a], s > n && r > i && (n > i ? (c = d(n), u = !1) : (c = i, u = !0), s > r ? (l = d(r), f = !1) : (l = s, f = !0), v.push({
            event: o,
            start: c,
            end: l,
            isStart: u,
            isEnd: f,
            msLength: l - c
        }));
        return v.sort(E)
    }

    function k(t) {
        var e, n, r, a, o, i = [],
            s = t.length;
        for (e = 0; s > e; e++) {
            for (n = t[e], r = 0;;) {
                if (a = !1, i[r])
                    for (o = 0; i[r].length > o; o++)
                        if (x(i[r][o], n)) {
                            a = !0;
                            break
                        }
                if (!a) break;
                r++
            }
            i[r] ? i[r].push(n) : i[r] = [n]
        }
        return i
    }

    function H(n, r, a) {
        n.unbind("mouseover").mouseover(function (n) {
            for (var o, i, s, c = n.target; c != this;) o = c, c = c.parentNode;
            (i = o._fci) !== e && (o._fci = e, s = r[i], a(s.event, s.element, s), t(n.target).trigger(n)), n.stopPropagation()
        })
    }

    function z(e, n, r) {
        for (var a, o = 0; e.length > o; o++) a = t(e[o]), a.width(Math.max(0, n - R(a, r)))
    }

    function F(e, n, r) {
        for (var a, o = 0; e.length > o; o++) a = t(e[o]), a.height(Math.max(0, n - L(a, r)))
    }

    function R(t, e) {
        return N(t) + A(t) + (e ? W(t) : 0)
    }

    function N(e) {
        return (parseFloat(t.css(e[0], "paddingLeft", !0)) || 0) + (parseFloat(t.css(e[0], "paddingRight", !0)) || 0)
    }

    function W(e) {
        return (parseFloat(t.css(e[0], "marginLeft", !0)) || 0) + (parseFloat(t.css(e[0], "marginRight", !0)) || 0)
    }

    function A(e) {
        return (parseFloat(t.css(e[0], "borderLeftWidth", !0)) || 0) + (parseFloat(t.css(e[0], "borderRightWidth", !0)) || 0)
    }

    function L(t, e) {
        return _(t) + B(t) + (e ? O(t) : 0)
    }

    function _(e) {
        return (parseFloat(t.css(e[0], "paddingTop", !0)) || 0) + (parseFloat(t.css(e[0], "paddingBottom", !0)) || 0)
    }

    function O(e) {
        return (parseFloat(t.css(e[0], "marginTop", !0)) || 0) + (parseFloat(t.css(e[0], "marginBottom", !0)) || 0)
    }

    function B(e) {
        return (parseFloat(t.css(e[0], "borderTopWidth", !0)) || 0) + (parseFloat(t.css(e[0], "borderBottomWidth", !0)) || 0)
    }

    function q(t, e) {
        e = "number" == typeof e ? e + "px" : e, t.each(function (t, n) {
            n.style.cssText += ";min-height:" + e + ";_height:" + e
        })
    }

    function I() {}

    function Y(t, e) {
        return t - e
    }

    function j(t) {
        return Math.max.apply(Math, t)
    }

    function P(t) {
        return (10 > t ? "0" : "") + t
    }

    function J(t, n) {
        if (t[n] !== e) return t[n];
        for (var r, a = n.split(/(?=[A-Z])/), o = a.length - 1; o >= 0; o--)
            if (r = t[a[o].toLowerCase()], r !== e) return r;
        return t[""]
    }

    function V(t) {
        return t.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/'/g, "&#039;").replace(/"/g, "&quot;").replace(/\n/g, "<br />")
    }

    function X(t) {
        return t.id + "/" + t.className + "/" + t.style.cssText.replace(/(^|;)\s*(top|left|width|height)\s*:[^;]*/gi, "")
    }

    function U(t) {
        t.attr("unselectable", "on").css("MozUserSelect", "none").bind("selectstart.ui", function () {
            return !1
        })
    }

    function Z(t) {
        t.children().removeClass("fc-first fc-last").filter(":first-child").addClass("fc-first").end().filter(":last-child").addClass("fc-last")
    }

    function $(t, e) {
        t.each(function (t, n) {
            n.className = n.className.replace(/^fc-\w*/, "fc-" + Se[e.getDay()])
        })
    }

    function Q(t, e) {
        var n = t.source || {}, r = t.color,
            a = n.color,
            o = e("eventColor"),
            i = t.backgroundColor || r || n.backgroundColor || a || e("eventBackgroundColor") || o,
            s = t.borderColor || r || n.borderColor || a || e("eventBorderColor") || o,
            c = t.textColor || n.textColor || e("eventTextColor"),
            l = [];
        return i && l.push("background-color:" + i), s && l.push("border-color:" + s), c && l.push("color:" + c), l.join(";")
    }

    function G(e, n, r) {
        if (t.isFunction(e) && (e = [e]), e) {
            var a, o;
            for (a = 0; e.length > a; a++) o = e[a].apply(n, r) || o;
            return o
        }
    }

    function K() {
        for (var t = 0; arguments.length > t; t++)
            if (arguments[t] !== e) return arguments[t]
    }

    function te(t, e) {
        function n(t, e) {
            e && (s(t, e), t.setDate(1));
            var n = d(t, !0);
            n.setDate(1);
            var l = s(d(n), 1),
                u = d(n),
                f = d(l),
                v = a("firstDay"),
                g = a("weekends") ? 0 : 1;
            g && (h(u), h(f, -1, !0)), c(u, -((u.getDay() - Math.max(v, g) + 7) % 7)), c(f, (7 - f.getDay() + Math.max(v, g)) % 7);
            var p = Math.round((f - u) / (7 * Ee));
            "fixed" == a("weekMode") && (c(f, 7 * (6 - p)), p = 6), r.title = i(n, a("titleFormat")), r.start = n, r.end = l, r.visStart = u, r.visEnd = f, o(p, g ? 5 : 7, !0)
        }
        var r = this;
        r.render = n, re.call(r, t, e, "month");
        var a = r.opt,
            o = r.renderBasic,
            i = e.formatDate
    }

    function ee(t, e) {
        function n(t, e) {
            e && c(t, 7 * e);
            var n = c(d(t), -((t.getDay() - a("firstDay") + 7) % 7)),
                s = c(d(n), 7),
                l = d(n),
                u = d(s),
                f = a("weekends");
            f || (h(l), h(u, -1, !0)), r.title = i(l, c(d(u), -1), a("titleFormat")), r.start = n, r.end = s, r.visStart = l, r.visEnd = u, o(1, f ? 7 : 5, !1)
        }
        var r = this;
        r.render = n, re.call(r, t, e, "basicWeek");
        var a = r.opt,
            o = r.renderBasic,
            i = e.formatDates
    }

    function ne(t, e) {
        function n(t, e) {
            e && (c(t, e), a("weekends") || h(t, 0 > e ? -1 : 1)), r.title = i(t, a("titleFormat")), r.start = r.visStart = d(t, !0), r.end = r.visEnd = c(d(r.start), 1), o(1, 1, !1)
        }
        var r = this;
        r.render = n, re.call(r, t, e, "basicDay");
        var a = r.opt,
            o = r.renderBasic,
            i = e.formatDate
    }

    function re(e, n, r) {
        function a(t, e, n) {
            ne = t, re = e, o();
            var r = !P;
            r ? i() : Te(), s(n)
        }

        function o() {
            ce = Ee("isRTL"), ce ? (le = -1, fe = re - 1) : (le = 1, fe = 0), pe = Ee("firstDay"), ye = Ee("weekends") ? 0 : 1, be = Ee("theme") ? "ui" : "fc", we = Ee("columnFormat"), De = Ee("weekNumbers"), Me = Ee("weekNumberTitle"), Ce = "iso" != Ee("weekNumberCalculation") ? "w" : "W"
        }

        function i() {
            Q = t("<div style='position:absolute;z-index:8;top:0;left:0'/>").appendTo(e)
        }

        function s(n) {
            var r, a, o, i, s = "",
                c = be + "-widget-header",
                l = be + "-widget-content",
                u = B.start.getMonth(),
                d = f(new Date);
            for (s += "<table class='fc-border-separate' style='width:100%' cellspacing='0'><thead><tr>", De && (s += "<th class='fc-week-number " + c + "'/>"), r = 0; re > r; r++) o = F(0, r), s += "<th class='fc-day-header fc-" + Se[o.getDay()] + " " + c + "'/>";
            for (s += "</tr></thead><tbody>", r = 0; ne > r; r++) {
                for (s += "<tr class='fc-week'>", De && (s += "<td class='fc-week-number " + l + "'>" + "<div/>" + "</td>"), a = 0; re > a; a++) o = F(r, a), i = ["fc-day", "fc-" + Se[o.getDay()], l], o.getMonth() != u && i.push("fc-other-month"), +o == +d && (i.push("fc-today"), i.push(be + "-state-highlight")), s += "<td class='" + i.join(" ") + "'" + " data-date='" + Fe(o, "yyyy-MM-dd") + "'" + ">" + "<div>", n && (s += "<div class='fc-day-number'>" + o.getDate() + "</div>"), s += "<div class='fc-day-content'><div style='position:relative'>&nbsp;</div></div></div></td>";
                s += "</tr>"
            }
            s += "</tbody></table>", _(), I && I.remove(), I = t(s).appendTo(e), Y = I.find("thead"), j = Y.find(".fc-day-header"), P = I.find("tbody"), J = P.find("tr"), V = P.find(".fc-day"), X = J.find("td:first-child"), $ = J.eq(0).find(".fc-day-content > div"), Z(Y.add(Y.find("tr"))), Z(J), J.eq(0).addClass("fc-first"), J.filter(":last").addClass("fc-last"), De && Y.find(".fc-week-number").text(Me), j.each(function (e, n) {
                var r = R(e);
                t(n).text(Fe(r, we))
            }), De && P.find(".fc-week-number > div").each(function (e, n) {
                var r = F(e, 0);
                t(n).text(Fe(r, Ce))
            }), V.each(function (e, n) {
                var r = R(e);
                xe("dayRender", B, r, t(n))
            }), v(V)
        }

        function l(e) {
            K = e;
            var n, r, a, o = K - Y.height();
            "variable" == Ee("weekMode") ? n = r = Math.floor(o / (1 == ne ? 2 : 6)) : (n = Math.floor(o / ne), r = o - n * (ne - 1)), X.each(function (e, o) {
                ne > e && (a = t(o), q(a.find("> div"), (e == ne - 1 ? r : n) - L(a)))
            }), O()
        }

        function u(t) {
            G = t, se.clear(), ee = 0, De && (ee = Y.find("th.fc-week-number").outerWidth()), te = Math.floor((G - ee) / re), z(j.slice(0, -1), te)
        }

        function v(t) {
            t.click(h).mousedown(ze)
        }

        function h(e) {
            if (!Ee("selectable")) {
                var n = y(t(this).data("date"));
                xe("dayClick", this, n, !0, e)
            }
        }

        function p(t, e, n) {
            n && oe.build();
            for (var r = d(B.visStart), a = c(d(r), re), o = 0; ne > o; o++) {
                var i = new Date(Math.max(r, t)),
                    s = new Date(Math.min(a, e));
                if (s > i) {
                    var l, u;
                    ce ? (l = g(s, r) * le + fe + 1, u = g(i, r) * le + fe + 1) : (l = g(i, r), u = g(s, r)), v(m(o, l, o, u - 1))
                }
                c(r, 7), c(a, 7)
            }
        }

        function m(t, n, r, a) {
            var o = oe.rect(t, n, r, a, e);
            return ke(o, e)
        }

        function b(t) {
            return d(t)
        }

        function w(t, e) {
            p(t, c(d(e), 1), !0)
        }

        function D() {
            He()
        }

        function M(t, e, n) {
            var r = k(t),
                a = V[r.row * re + r.col];
            xe("dayClick", a, t, e, n)
        }

        function C(t, e) {
            ie.start(function (t) {
                He(), t && m(t.row, t.col, t.row, t.col)
            }, e)
        }

        function S(t, e, n) {
            var r = ie.stop();
            if (He(), r) {
                var a = H(r);
                xe("drop", t, a, !0, e, n)
            }
        }

        function E(t) {
            return d(t.start)
        }

        function x(t) {
            return se.left(t)
        }

        function T(t) {
            return se.right(t)
        }

        function k(t) {
            return {
                row: Math.floor(g(t, B.visStart) / 7),
                col: N(t.getDay())
            }
        }

        function H(t) {
            return F(t.row, t.col)
        }

        function F(t, e) {
            return c(d(B.visStart), 7 * t + e * le + fe)
        }

        function R(t) {
            return F(Math.floor(t / re), t % re)
        }

        function N(t) {
            return (t - Math.max(pe, ye) + re) % re * le + fe
        }

        function W(t) {
            return J.eq(t)
        }

        function A() {
            var t = 0;
            return De && (t += ee), {
                left: t,
                right: G
            }
        }

        function _() {
            q(e, e.height())
        }

        function O() {
            q(e, 1)
        }
        var B = this;
        B.renderBasic = a, B.setHeight = l, B.setWidth = u, B.renderDayOverlay = p, B.defaultSelectionEnd = b, B.renderSelection = w, B.clearSelection = D, B.reportDayClick = M, B.dragStart = C, B.dragStop = S, B.defaultEventEnd = E, B.getHoverListener = function () {
            return ie
        }, B.colContentLeft = x, B.colContentRight = T, B.dayOfWeekCol = N, B.dateCell = k, B.cellDate = H, B.cellIsAllDay = function () {
            return !0
        }, B.allDayRow = W, B.allDayBounds = A, B.getRowCnt = function () {
            return ne
        }, B.getColCnt = function () {
            return re
        }, B.getColWidth = function () {
            return te
        }, B.getDaySegmentContainer = function () {
            return Q
        }, ue.call(B, e, n, r), ve.call(B), de.call(B), ae.call(B);
        var I, Y, j, P, J, V, X, $, Q, G, K, te, ee, ne, re, oe, ie, se, ce, le, fe, pe, ye, be, we, De, Me, Ce, Ee = B.opt,
            xe = B.trigger,
            Te = B.clearEvents,
            ke = B.renderOverlay,
            He = B.clearOverlays,
            ze = B.daySelectionMousedown,
            Fe = n.formatDate;
        U(e.addClass("fc-grid")), oe = new he(function (e, n) {
            var r, a, o;
            j.each(function (e, i) {
                r = t(i), a = r.offset().left, e && (o[1] = a), o = [a], n[e] = o
            }), o[1] = a + r.outerWidth(), J.each(function (n, i) {
                ne > n && (r = t(i), a = r.offset().top, n && (o[1] = a), o = [a], e[n] = o)
            }), o[1] = a + r.outerHeight()
        }), ie = new ge(oe), se = new me(function (t) {
            return $.eq(t)
        })
    }

    function ae() {
        function e(t, e) {
            v(t), x(r(t), e), l("eventAfterAllRender")
        }

        function n() {
            h(), b().empty()
        }

        function r(e) {
            var n, r, a, o, s, l, u = S(),
                f = E(),
                v = d(i.visStart),
                h = c(d(v), f),
                g = t.map(e, C),
                p = [];
            for (n = 0; u > n; n++) {
                for (r = k(T(e, g, v, h)), a = 0; r.length > a; a++)
                    for (o = r[a], s = 0; o.length > s; s++) l = o[s], l.row = n, l.level = a, p.push(l);
                c(v, 7), c(h, 7)
            }
            return p
        }

        function a(t, e, n) {
            u(t) && o(t, e), n.isEnd && f(t) && H(t, e, n), g(t, e)
        }

        function o(t, e) {
            var n, r = w();
            e.draggable({
                zIndex: 9,
                delay: 50,
                opacity: s("dragOpacity"),
                revertDuration: s("dragRevertDuration"),
                start: function (a, o) {
                    l("eventDragStart", e, t, a, o), m(t, e), r.start(function (r, a, o, i) {
                        e.draggable("option", "revert", !r || !o && !i), M(), r ? (n = 7 * o + i * (s("isRTL") ? -1 : 1), D(c(d(t.start), n), c(C(t), n))) : n = 0
                    }, a, "drag")
                },
                stop: function (a, o) {
                    r.stop(), M(), l("eventDragStop", e, t, a, o), n ? y(this, t, n, 0, t.allDay, a, o) : (e.css("filter", ""), p(t, e))
                }
            })
        }
        var i = this;
        i.renderEvents = e, i.compileDaySegs = r, i.clearEvents = n, i.bindDaySeg = a, fe.call(i);
        var s = i.opt,
            l = i.trigger,
            u = i.isEventDraggable,
            f = i.isEventResizable,
            v = i.reportEvents,
            h = i.reportEventClear,
            g = i.eventElementHandlers,
            p = i.showEvents,
            m = i.hideEvents,
            y = i.eventDrop,
            b = i.getDaySegmentContainer,
            w = i.getHoverListener,
            D = i.renderDayOverlay,
            M = i.clearOverlays,
            S = i.getRowCnt,
            E = i.getColCnt,
            x = i.renderDaySegs,
            H = i.resizableDayEvent
    }

    function oe(t, e) {
        function n(t, e) {
            e && c(t, 7 * e);
            var n = c(d(t), -((t.getDay() - a("firstDay") + 7) % 7)),
                s = c(d(n), 7),
                l = d(n),
                u = d(s),
                f = a("weekends");
            f || (h(l), h(u, -1, !0)), r.title = i(l, c(d(u), -1), a("titleFormat")), r.start = n, r.end = s, r.visStart = l, r.visEnd = u, o(f ? 7 : 5)
        }
        var r = this;
        r.render = n, se.call(r, t, e, "agendaWeek");
        var a = r.opt,
            o = r.renderAgenda,
            i = e.formatDates
    }

    function ie(t, e) {
        function n(t, e) {
            e && (c(t, e), a("weekends") || h(t, 0 > e ? -1 : 1));
            var n = d(t, !0),
                s = c(d(n), 1);
            r.title = i(t, a("titleFormat")), r.start = r.visStart = n, r.end = r.visEnd = s, o(1)
        }
        var r = this;
        r.render = n, se.call(r, t, e, "agendaDay");
        var a = r.opt,
            o = r.renderAgenda,
            i = e.formatDate
    }

    function se(n, r, a) {
        function o(t) {
            Le = t, i(), te ? nn() : s(), l()
        }

        function i() {
            Ye = tn("theme") ? "ui" : "fc", Pe = tn("weekends") ? 0 : 1, je = tn("firstDay"), (Je = tn("isRTL")) ? (Ve = -1, Xe = Le - 1) : (Ve = 1, Xe = 0), Ue = b(tn("minTime")), Ze = b(tn("maxTime")), $e = tn("columnFormat"), Qe = tn("weekNumbers"), Ge = tn("weekNumberTitle"), Ke = "iso" != tn("weekNumberCalculation") ? "w" : "W", Ne = tn("snapMinutes") || tn("slotMinutes")
        }

        function s() {
            var e, r, a, o, i, s = Ye + "-widget-header",
                c = Ye + "-widget-content",
                l = 0 == tn("slotMinutes") % 15;
            for (e = "<table style='width:100%' class='fc-agenda-days fc-border-separate' cellspacing='0'><thead><tr>", e += Qe ? "<th class='fc-agenda-axis fc-week-number " + s + "'/>" : "<th class='fc-agenda-axis " + s + "'>&nbsp;</th>", r = 0; Le > r; r++) e += "<th class='fc- fc-col" + r + " " + s + "'/>";
            for (e += "<th class='fc-agenda-gutter " + s + "'>&nbsp;</th>" + "</tr>" + "</thead>" + "<tbody>" + "<tr>" + "<th class='fc-agenda-axis " + s + "'>&nbsp;</th>", r = 0; Le > r; r++) e += "<td class='fc- fc-col" + r + " " + c + "'>" + "<div>" + "<div class='fc-day-content'>" + "<div style='position:relative'>&nbsp;</div>" + "</div>" + "</div>" + "</td>";
            for (e += "<td class='fc-agenda-gutter " + c + "'>&nbsp;</td>" + "</tr>" + "</tbody>" + "</table>", te = t(e).appendTo(n), ee = te.find("thead"), ne = ee.find("th").slice(1, -1), re = te.find("tbody"), ae = re.find("td").slice(0, -1), oe = ae.find("div.fc-day-content div"), ie = ae.eq(0), se = ie.find("> div"), Z(ee.add(ee.find("tr"))), Z(re.add(re.find("tr"))), Se = ee.find("th:first"), Ee = te.find(".fc-agenda-gutter"), le = t("<div style='position:absolute;z-index:2;left:0;width:100%'/>").appendTo(n), tn("allDaySlot") ? (fe = t("<div style='position:absolute;z-index:8;top:0;left:0'/>").appendTo(le), e = "<table style='width:100%' class='fc-agenda-allday' cellspacing='0'><tr><th class='" + s + " fc-agenda-axis'>" + tn("allDayText") + "</th>" + "<td>" + "<div class='fc-day-content'><div style='position:relative'/></div>" + "</td>" + "<th class='" + s + " fc-agenda-gutter'>&nbsp;</th>" + "</tr>" + "</table>", pe = t(e).appendTo(le), ye = pe.find("tr"), D(ye.find("td")), Se = Se.add(pe.find("th:first")), Ee = Ee.add(pe.find("th.fc-agenda-gutter")), le.append("<div class='fc-agenda-divider " + s + "'>" + "<div class='fc-agenda-divider-inner'/>" + "</div>")) : fe = t([]), be = t("<div style='position:absolute;width:100%;overflow-x:hidden;overflow-y:auto'/>").appendTo(le), we = t("<div style='position:relative;width:100%;overflow:hidden'/>").appendTo(be), De = t("<div style='position:absolute;z-index:8;top:0;left:0'/>").appendTo(we), e = "<table class='fc-agenda-slots' style='width:100%' cellspacing='0'><tbody>", a = v(), o = u(d(a), Ze), u(a, Ue), _e = 0, r = 0; o > a; r++) i = a.getMinutes(), e += "<tr class='fc-slot" + r + " " + (i ? "fc-minor" : "") + "'>" + "<th class='fc-agenda-axis " + s + "'>" + (l && i ? "&nbsp;" : un(a, tn("axisFormat"))) + "</th>" + "<td class='" + c + "'>" + "<div style='position:relative'>&nbsp;</div>" + "</td>" + "</tr>", u(a, tn("slotMinutes")), _e++;
            e += "</tbody></table>", Me = t(e).appendTo(we), Ce = Me.find("div:first"), M(Me.find("td")), Se = Se.add(Me.find("th:first"))
        }

        function l() {
            var t, e, n, r, a = f(new Date);
            if (Qe) {
                var o = un(N(0), Ke);
                Je ? o += Ge : o = Ge + o, ee.find(".fc-week-number").text(o)
            }
            for (t = 0; Le > t; t++) r = N(t), e = ne.eq(t), e.html(un(r, $e)), n = ae.eq(t), +r == +a ? n.addClass(Ye + "-state-highlight fc-today") : n.removeClass(Ye + "-state-highlight fc-today"), $(e.add(n), r)
        }

        function h(t, n) {
            t === e && (t = ke), ke = t, fn = {};
            var r = re.position().top,
                a = be.position().top,
                o = Math.min(t - r, Me.height() + a + 1);
            se.height(o - L(ie)), le.css("top", r), be.height(o - a - 1), Re = Ce.height() + 1, We = tn("slotMinutes") / Ne, Ae = Re / We, n && m()
        }

        function p(e) {
            Te = e, qe.clear(), He = 0, z(Se.width("").each(function (e, n) {
                He = Math.max(He, t(n).outerWidth())
            }), He);
            var n = be[0].clientWidth;
            Fe = be.width() - n, Fe ? (z(Ee, Fe), Ee.show().prev().removeClass("fc-last")) : Ee.hide().prev().addClass("fc-last"), ze = Math.floor((n - He) / Le), z(ne.slice(0, -1), ze)
        }

        function m() {
            function t() {
                be.scrollTop(r)
            }
            var e = v(),
                n = d(e);
            n.setHours(tn("firstHour"));
            var r = _(e, n) + 1;
            t(), setTimeout(t, 0)
        }

        function y() {
            Ie = be.scrollTop()
        }

        function w() {
            be.scrollTop(Ie)
        }

        function D(t) {
            t.click(C).mousedown(cn)
        }

        function M(t) {
            t.click(C).mousedown(V)
        }

        function C(t) {
            if (!tn("selectable")) {
                var e = Math.min(Le - 1, Math.floor((t.pageX - te.offset().left - He) / ze)),
                    n = N(e),
                    r = this.parentNode.className.match(/fc-slot(\d+)/);
                if (r) {
                    var a = parseInt(r[1]) * tn("slotMinutes"),
                        o = Math.floor(a / 60);
                    n.setHours(o), n.setMinutes(a % 60 + Ue), en("dayClick", ae[e], n, !1, t)
                } else en("dayClick", ae[e], n, !0, t)
            }
        }

        function S(t, e, n) {
            n && Oe.build();
            var r, a, o = d(K.visStart);
            Je ? (r = g(e, o) * Ve + Xe + 1, a = g(t, o) * Ve + Xe + 1) : (r = g(t, o), a = g(e, o)), r = Math.max(0, r), a = Math.min(Le, a), a > r && D(E(0, r, 0, a - 1))
        }

        function E(t, e, n, r) {
            var a = Oe.rect(t, e, n, r, le);
            return rn(a, le)
        }

        function x(t, e) {
            for (var n = d(K.visStart), r = c(d(n), 1), a = 0; Le > a; a++) {
                var o = new Date(Math.max(n, t)),
                    i = new Date(Math.min(r, e));
                if (i > o) {
                    var s = a * Ve + Xe,
                        l = Oe.rect(0, s, 0, s, we),
                        u = _(n, o),
                        f = _(n, i);
                    l.top = u, l.height = f - u, M(rn(l, we))
                }
                c(n, 1), c(r, 1)
            }
        }

        function T(t) {
            return qe.left(t)
        }

        function k(t) {
            return qe.right(t)
        }

        function H(t) {
            return {
                row: Math.floor(g(t, K.visStart) / 7),
                col: A(t.getDay())
            }
        }

        function R(t) {
            var e = N(t.col),
                n = t.row;
            return tn("allDaySlot") && n--, n >= 0 && u(e, Ue + n * Ne), e
        }

        function N(t) {
            return c(d(K.visStart), t * Ve + Xe)
        }

        function W(t) {
            return tn("allDaySlot") && !t.row
        }

        function A(t) {
            return (t - Math.max(je, Pe) + Le) % Le * Ve + Xe
        }

        function _(t, n) {
            if (t = d(t, !0), u(d(t), Ue) > n) return 0;
            if (n >= u(d(t), Ze)) return Me.height();
            var r = tn("slotMinutes"),
                a = 60 * n.getHours() + n.getMinutes() - Ue,
                o = Math.floor(a / r),
                i = fn[o];
            return i === e && (i = fn[o] = Me.find("tr:eq(" + o + ") td div")[0].offsetTop), Math.max(0, Math.round(i - 1 + Re * (a % r / r)))
        }

        function O() {
            return {
                left: He,
                right: Te - Fe
            }
        }

        function B() {
            return ye
        }

        function q(t) {
            var e = d(t.start);
            return t.allDay ? e : u(e, tn("defaultEventMinutes"))
        }

        function I(t, e) {
            return e ? d(t) : u(d(t), tn("slotMinutes"))
        }

        function j(t, e, n) {
            n ? tn("allDaySlot") && S(t, c(d(e), 1), !0) : P(t, e)
        }

        function P(e, n) {
            var r = tn("selectHelper");
            if (Oe.build(), r) {
                var a = g(e, K.visStart) * Ve + Xe;
                if (a >= 0 && Le > a) {
                    var o = Oe.rect(0, a, 0, a, we),
                        i = _(e, e),
                        s = _(e, n);
                    if (s > i) {
                        if (o.top = i, o.height = s - i, o.left += 2, o.width -= 5, t.isFunction(r)) {
                            var c = r(e, n);
                            c && (o.position = "absolute", o.zIndex = 8, xe = t(c).css(o).appendTo(we))
                        } else o.isStart = !0, o.isEnd = !0, xe = t(ln({
                            title: "",
                            start: e,
                            end: n,
                            className: ["fc-select-helper"],
                            editable: !1
                        }, o)), xe.css("opacity", tn("dragOpacity"));
                        xe && (M(xe), we.append(xe), z(xe, o.width, !0), F(xe, o.height, !0))
                    }
                }
            } else x(e, n)
        }

        function J() {
            an(), xe && (xe.remove(), xe = null)
        }

        function V(e) {
            if (1 == e.which && tn("selectable")) {
                sn(e);
                var n;
                Be.start(function (t, e) {
                    if (J(), t && t.col == e.col && !W(t)) {
                        var r = R(e),
                            a = R(t);
                        n = [r, u(d(r), Ne), a, u(d(a), Ne)].sort(Y), P(n[0], n[3])
                    } else n = null
                }, e), t(document).one("mouseup", function (t) {
                    Be.stop(), n && (+n[0] == +n[1] && X(n[0], !1, t), on(n[0], n[3], !1, t))
                })
            }
        }

        function X(t, e, n) {
            en("dayClick", ae[A(t.getDay())], t, e, n)
        }

        function Q(t, e) {
            Be.start(function (t) {
                if (an(), t)
                    if (W(t)) E(t.row, t.col, t.row, t.col);
                    else {
                        var e = R(t),
                            n = u(d(e), tn("defaultEventMinutes"));
                        x(e, n)
                    }
            }, e)
        }

        function G(t, e, n) {
            var r = Be.stop();
            an(), r && en("drop", t, R(r), W(r), e, n)
        }
        var K = this;
        K.renderAgenda = o, K.setWidth = p, K.setHeight = h, K.beforeHide = y, K.afterShow = w, K.defaultEventEnd = q, K.timePosition = _, K.dayOfWeekCol = A, K.dateCell = H, K.cellDate = R, K.cellIsAllDay = W, K.allDayRow = B, K.allDayBounds = O, K.getHoverListener = function () {
            return Be
        }, K.colContentLeft = T, K.colContentRight = k, K.getDaySegmentContainer = function () {
            return fe
        }, K.getSlotSegmentContainer = function () {
            return De
        }, K.getMinMinute = function () {
            return Ue
        }, K.getMaxMinute = function () {
            return Ze
        }, K.getBodyContent = function () {
            return we
        }, K.getRowCnt = function () {
            return 1
        }, K.getColCnt = function () {
            return Le
        }, K.getColWidth = function () {
            return ze
        }, K.getSnapHeight = function () {
            return Ae
        }, K.getSnapMinutes = function () {
            return Ne
        }, K.defaultSelectionEnd = I, K.renderDayOverlay = S, K.renderSelection = j, K.clearSelection = J, K.reportDayClick = X, K.dragStart = Q, K.dragStop = G, ue.call(K, n, r, a), ve.call(K), de.call(K), ce.call(K);
        var te, ee, ne, re, ae, oe, ie, se, le, fe, pe, ye, be, we, De, Me, Ce, Se, Ee, xe, Te, ke, He, ze, Fe, Re, Ne, We, Ae, Le, _e, Oe, Be, qe, Ie, Ye, je, Pe, Je, Ve, Xe, Ue, Ze, $e, Qe, Ge, Ke, tn = K.opt,
            en = K.trigger,
            nn = K.clearEvents,
            rn = K.renderOverlay,
            an = K.clearOverlays,
            on = K.reportSelection,
            sn = K.unselect,
            cn = K.daySelectionMousedown,
            ln = K.slotSegHtml,
            un = r.formatDate,
            fn = {};
        U(n.addClass("fc-agenda")), Oe = new he(function (e, n) {
            function r(t) {
                return Math.max(c, Math.min(l, t))
            }
            var a, o, i;
            ne.each(function (e, r) {
                a = t(r), o = a.offset().left, e && (i[1] = o), i = [o], n[e] = i
            }), i[1] = o + a.outerWidth(), tn("allDaySlot") && (a = ye, o = a.offset().top, e[0] = [o, o + a.outerHeight()]);
            for (var s = we.offset().top, c = be.offset().top, l = c + be.outerHeight(), u = 0; _e * We > u; u++) e.push([r(s + Ae * u), r(s + Ae * (u + 1))])
        }), Be = new ge(Oe), qe = new me(function (t) {
            return oe.eq(t)
        })
    }

    function ce() {
        function n(t, e) {
            S(t);
            var n, r = t.length,
                i = [],
                c = [];
            for (n = 0; r > n; n++) t[n].allDay ? i.push(t[n]) : c.push(t[n]);
            y("allDaySlot") && (Y(a(i), e), z()), s(o(c), e), b("eventAfterAllRender")
        }

        function r() {
            E(), N().empty(), W().empty()
        }

        function a(e) {
            var n, r, a, o, i = k(T(e, t.map(e, C), m.visStart, m.visEnd)),
                s = i.length,
                c = [];
            for (n = 0; s > n; n++)
                for (r = i[n], a = 0; r.length > a; a++) o = r[a], o.row = 0, o.level = n, c.push(o);
            return c
        }

        function o(e) {
            var n, r, a, o, s, l, f = P(),
                v = O(),
                h = _(),
                g = u(d(m.visStart), v),
                p = t.map(e, i),
                y = [];
            for (n = 0; f > n; n++) {
                for (r = k(T(e, p, g, u(d(g), h - v))), le(r), a = 0; r.length > a; a++)
                    for (o = r[a], s = 0; o.length > s; s++) l = o[s], l.col = n, l.level = a, y.push(l);
                c(g, 1, !0)
            }
            return y
        }

        function i(t) {
            return t.end ? d(t.end) : u(d(t.start), y("defaultEventMinutes"))
        }

        function s(n, r) {
            var a, o, i, s, c, u, f, d, h, g, p, m, w, D, M, C, S, E, x, T, k, z, F = n.length,
                N = "",
                A = {}, _ = {}, O = W(),
                Y = P();
            for ((T = y("isRTL")) ? (k = -1, z = Y - 1) : (k = 1, z = 0), a = 0; F > a; a++) o = n[a], i = o.event, s = B(o.start, o.start), c = B(o.start, o.end), u = o.col, f = o.level, d = o.forward || 0, h = q(u * k + z), g = I(u * k + z) - h, g = Math.min(g - 6, .95 * g), p = f ? g / (f + d + 1) : d ? 2 * (g / (d + 1) - 6) : g, m = h + g / (f + d + 1) * f * k + (T ? g - p : 0), o.top = s, o.left = m, o.outerWidth = p, o.outerHeight = c - s, N += l(i, o);
            for (O[0].innerHTML = N, w = O.children(), a = 0; F > a; a++) o = n[a], i = o.event, D = t(w[a]), M = b("eventRender", i, i, D), M === !1 ? D.remove() : (M && M !== !0 && (D.remove(), D = t(M).css({
                position: "absolute",
                top: o.top,
                left: o.left
            }).appendTo(O)), o.element = D, i._id === r ? v(i, D, o) : D[0]._fci = a, G(i, D));
            for (H(O, n, v), a = 0; F > a; a++) o = n[a], (D = o.element) && (S = A[C = o.key = X(D[0])], o.vsides = S === e ? A[C] = L(D, !0) : S, S = _[C], o.hsides = S === e ? _[C] = R(D, !0) : S, E = D.find(".fc-event-title"), E.length && (o.contentTop = E[0].offsetTop));
            for (a = 0; F > a; a++) o = n[a], (D = o.element) && (D[0].style.width = Math.max(0, o.outerWidth - o.hsides) + "px", x = Math.max(0, o.outerHeight - o.vsides), D[0].style.height = x + "px", i = o.event, o.contentTop !== e && 10 > x - o.contentTop && (D.find("div.fc-event-time").text(ie(i.start, y("timeFormat")) + " - " + i.title), D.find("div.fc-event-title").remove()), b("eventAfterRender", i, i, D))
        }

        function l(t, e) {
            var n = "<",
                r = t.url,
                a = Q(t, y),
                o = ["fc-event", "fc-event-vert"];
            return w(t) && o.push("fc-event-draggable"), e.isStart && o.push("fc-event-start"), e.isEnd && o.push("fc-event-end"), o = o.concat(t.className), t.source && (o = o.concat(t.source.className || [])), n += r ? "a href='" + V(t.url) + "'" : "div", n += " class='" + o.join(" ") + "'" + " style='position:absolute;z-index:8;top:" + e.top + "px;left:" + e.left + "px;" + a + "'" + ">" + "<div class='fc-event-inner'>" + "<div class='fc-event-time'>" + V(se(t.start, t.end, y("timeFormat"))) + "</div>" + "<div class='fc-event-title'>" + V(t.title) + "</div>" + "</div>" + "<div class='fc-event-bg'></div>", e.isEnd && D(t) && (n += "<div class='ui-resizable-handle ui-resizable-s'>=</div>"), n += "</" + (r ? "a" : "div") + ">"
        }

        function f(t, e, n) {
            w(t) && h(t, e, n.isStart), n.isEnd && D(t) && j(t, e, n), x(t, e)
        }

        function v(t, e, n) {
            var r = e.find("div.fc-event-time");
            w(t) && g(t, e, r), n.isEnd && D(t) && p(t, e, r), x(t, e)
        }

        function h(t, e, n) {
            function r() {
                s || (e.width(a).height("").draggable("option", "grid", null), s = !0)
            }
            var a, o, i, s = !0,
                l = y("isRTL") ? -1 : 1,
                u = A(),
                f = J(),
                v = U(),
                h = Z(),
                g = O();
            e.draggable({
                zIndex: 9,
                opacity: y("dragOpacity", "month"),
                revertDuration: y("dragRevertDuration"),
                start: function (g, p) {
                    b("eventDragStart", e, t, g, p), te(t, e), a = e.width(), u.start(function (a, u, g, p) {
                        ae(), a ? (o = !1, i = p * l, a.row ? n ? s && (e.width(f - 10), F(e, v * Math.round((t.end ? (t.end - t.start) / Te : y("defaultEventMinutes")) / h)), e.draggable("option", "grid", [f, 1]), s = !1) : o = !0 : (re(c(d(t.start), i), c(C(t), i)), r()), o = o || s && !i) : (r(), o = !0), e.draggable("option", "revert", o)
                    }, g, "drag")
                },
                stop: function (n, a) {
                    if (u.stop(), ae(), b("eventDragStop", e, t, n, a), o) r(), e.css("filter", ""), K(t, e);
                    else {
                        var c = 0;
                        s || (c = Math.round((e.offset().top - $().offset().top) / v) * h + g - (60 * t.start.getHours() + t.start.getMinutes())), ee(this, t, i, c, s, n, a)
                    }
                }
            })
        }

        function g(t, e, n) {
            function r(e) {
                var r, a = u(d(t.start), e);
                t.end && (r = u(d(t.end), e)), n.text(se(a, r, y("timeFormat")))
            }

            function a() {
                f && (n.css("display", ""), e.draggable("option", "grid", [p, m]), f = !1)
            }
            var o, i, s, l, f = !1,
                v = y("isRTL") ? -1 : 1,
                h = A(),
                g = P(),
                p = J(),
                m = U(),
                w = Z();
            e.draggable({
                zIndex: 9,
                scroll: !1,
                grid: [p, m],
                axis: 1 == g ? "y" : !1,
                opacity: y("dragOpacity"),
                revertDuration: y("dragRevertDuration"),
                start: function (r, u) {
                    b("eventDragStart", e, t, r, u), te(t, e), o = e.position(), s = l = 0, h.start(function (r, o, s, l) {
                        e.draggable("option", "revert", !r), ae(), r && (i = l * v, y("allDaySlot") && !r.row ? (f || (f = !0, n.hide(), e.draggable("option", "grid", null)), re(c(d(t.start), i), c(C(t), i))) : a())
                    }, r, "drag")
                },
                drag: function (t, e) {
                    s = Math.round((e.position.top - o.top) / m) * w, s != l && (f || r(s), l = s)
                },
                stop: function (n, c) {
                    var l = h.stop();
                    ae(), b("eventDragStop", e, t, n, c), l && (i || s || f) ? ee(this, t, i, f ? 0 : s, f, n, c) : (a(), e.css("filter", ""), e.css(o), r(0), K(t, e))
                }
            })
        }

        function p(t, e, n) {
            var r, a, o = U(),
                i = Z();
            e.resizable({
                handles: {
                    s: ".ui-resizable-handle"
                },
                grid: o,
                start: function (n, o) {
                    r = a = 0, te(t, e), e.css("z-index", 9), b("eventResizeStart", this, t, n, o)
                },
                resize: function (s, c) {
                    r = Math.round((Math.max(o, e.height()) - c.originalSize.height) / o), r != a && (n.text(se(t.start, r || t.end ? u(M(t), i * r) : null, y("timeFormat"))), a = r)
                },
                stop: function (n, a) {
                    b("eventResizeStop", this, t, n, a), r ? ne(this, t, 0, i * r, n, a) : (e.css("z-index", 8), K(t, e))
                }
            })
        }
        var m = this;
        m.renderEvents = n, m.compileDaySegs = a, m.clearEvents = r, m.slotSegHtml = l, m.bindDaySeg = f, fe.call(m);
        var y = m.opt,
            b = m.trigger,
            w = m.isEventDraggable,
            D = m.isEventResizable,
            M = m.eventEnd,
            S = m.reportEvents,
            E = m.reportEventClear,
            x = m.eventElementHandlers,
            z = m.setHeight,
            N = m.getDaySegmentContainer,
            W = m.getSlotSegmentContainer,
            A = m.getHoverListener,
            _ = m.getMaxMinute,
            O = m.getMinMinute,
            B = m.timePosition,
            q = m.colContentLeft,
            I = m.colContentRight,
            Y = m.renderDaySegs,
            j = m.resizableDayEvent,
            P = m.getColCnt,
            J = m.getColWidth,
            U = m.getSnapHeight,
            Z = m.getSnapMinutes,
            $ = m.getBodyContent,
            G = m.reportEventElement,
            K = m.showEvents,
            te = m.hideEvents,
            ee = m.eventDrop,
            ne = m.eventResize,
            re = m.renderDayOverlay,
            ae = m.clearOverlays,
            oe = m.calendar,
            ie = oe.formatDate,
            se = oe.formatDates
    }

    function le(t) {
        var e, n, r, a, o, i;
        for (e = t.length - 1; e > 0; e--)
            for (a = t[e], n = 0; a.length > n; n++)
                for (o = a[n], r = 0; t[e - 1].length > r; r++) i = t[e - 1][r], x(o, i) && (i.forward = Math.max(i.forward || 0, (o.forward || 0) + 1))
    }

    function ue(t, n, r) {
        function a(t, e) {
            var n = F[t];
            return "object" == typeof n ? J(n, e || r) : n
        }

        function o(t, e) {
            return n.trigger.apply(n, [t, e || S].concat(Array.prototype.slice.call(arguments, 2), [S]))
        }

        function i(t) {
            return l(t) && !a("disableDragging")
        }

        function s(t) {
            return l(t) && !a("disableResizing")
        }

        function l(t) {
            return K(t.editable, (t.source || {}).editable, a("editable"))
        }

        function f(t) {
            k = {};
            var e, n, r = t.length;
            for (e = 0; r > e; e++) n = t[e], k[n._id] ? k[n._id].push(n) : k[n._id] = [n]
        }

        function v(t) {
            return t.end ? d(t.end) : E(t)
        }

        function h(t, e) {
            H.push(e), z[t._id] ? z[t._id].push(e) : z[t._id] = [e]
        }

        function g() {
            H = [], z = {}
        }

        function p(t, n) {
            n.click(function (r) {
                return n.hasClass("ui-draggable-dragging") || n.hasClass("ui-resizable-resizing") ? e : o("eventClick", this, t, r)
            }).hover(function (e) {
                o("eventMouseover", this, t, e)
            }, function (e) {
                o("eventMouseout", this, t, e)
            })
        }

        function m(t, e) {
            b(t, e, "show")
        }

        function y(t, e) {
            b(t, e, "hide")
        }

        function b(t, e, n) {
            var r, a = z[t._id],
                o = a.length;
            for (r = 0; o > r; r++) e && a[r][0] == e[0] || a[r][n]()
        }

        function w(t, e, n, r, a, i, s) {
            var c = e.allDay,
                l = e._id;
            M(k[l], n, r, a), o("eventDrop", t, e, n, r, a, function () {
                M(k[l], -n, -r, c), T(l)
            }, i, s), T(l)
        }

        function D(t, e, n, r, a, i) {
            var s = e._id;
            C(k[s], n, r), o("eventResize", t, e, n, r, function () {
                C(k[s], -n, -r), T(s)
            }, a, i), T(s)
        }

        function M(t, n, r, a) {
            r = r || 0;
            for (var o, i = t.length, s = 0; i > s; s++) o = t[s], a !== e && (o.allDay = a), u(c(o.start, n, !0), r), o.end && (o.end = u(c(o.end, n, !0), r)), x(o, F)
        }

        function C(t, e, n) {
            n = n || 0;
            for (var r, a = t.length, o = 0; a > o; o++) r = t[o], r.end = u(c(v(r), e, !0), n), x(r, F)
        }
        var S = this;
        S.element = t, S.calendar = n, S.name = r, S.opt = a, S.trigger = o, S.isEventDraggable = i, S.isEventResizable = s, S.reportEvents = f, S.eventEnd = v, S.reportEventElement = h, S.reportEventClear = g, S.eventElementHandlers = p, S.showEvents = m, S.hideEvents = y, S.eventDrop = w, S.eventResize = D;
        var E = S.defaultEventEnd,
            x = n.normalizeEvent,
            T = n.reportEventChange,
            k = {}, H = [],
            z = {}, F = n.options
    }

    function fe() {
        function n(t, e) {
            var n, r, c, d, p, m, y, b, w = B(),
                D = T(),
                M = k(),
                C = 0,
                S = t.length;
            for (w[0].innerHTML = a(t), o(t, w.children()), i(t), s(t, w, e), l(t), u(t), f(t), n = v(), r = 0; D > r; r++) {
                for (c = 0, d = [], p = 0; M > p; p++) d[p] = 0;
                for (; S > C && (m = t[C]).row == r;) {
                    for (y = j(d.slice(m.startCol, m.endCol)), m.top = y, y += m.outerHeight, b = m.startCol; m.endCol > b; b++) d[b] = y;
                    C++
                }
                n[r].height(j(d))
            }
            g(t, h(n))
        }

        function r(e, n, r) {
            var i, s, c, d = t("<div/>"),
                p = B(),
                m = e.length;
            for (d[0].innerHTML = a(e), i = d.children(), p.append(i), o(e, i), l(e), u(e), f(e), g(e, h(v())), i = [], s = 0; m > s; s++) c = e[s].element, c && (e[s].row === n && c.css("top", r), i.push(c[0]));
            return t(i)
        }

        function a(t) {
            var e, n, r, a, o, i, s, c, l, u, f = y("isRTL"),
                d = t.length,
                v = F(),
                h = v.left,
                g = v.right,
                p = "";
            for (e = 0; d > e; e++) n = t[e], r = n.event, o = ["fc-event", "fc-event-hori"], w(r) && o.push("fc-event-draggable"), n.isStart && o.push("fc-event-start"), n.isEnd && o.push("fc-event-end"), f ? (i = A(n.end.getDay() - 1), s = A(n.start.getDay()), c = n.isEnd ? N(i) : h, l = n.isStart ? W(s) : g) : (i = A(n.start.getDay()), s = A(n.end.getDay() - 1), c = n.isStart ? N(i) : h, l = n.isEnd ? W(s) : g), o = o.concat(r.className), r.source && (o = o.concat(r.source.className || [])), a = r.url, u = Q(r, y), p += a ? "<a href='" + V(a) + "'" : "<div", p += " class='" + o.join(" ") + "'" + " style='position:absolute;z-index:8;left:" + c + "px;" + u + "'" + ">" + "<div class='fc-event-inner'>", !r.allDay && n.isStart && (p += "<span class='fc-event-time'>" + V(I(r.start, r.end, y("timeFormat"))) + "</span>"), p += "<span class='fc-event-title'>" + V(r.title) + "</span>" + "</div>", n.isEnd && D(r) && (p += "<div class='ui-resizable-handle ui-resizable-" + (f ? "w" : "e") + "'>" + "&nbsp;&nbsp;&nbsp;" + "</div>"), p += "</" + (a ? "a" : "div") + ">", n.left = c, n.outerWidth = l - c, n.startCol = i, n.endCol = s + 1;
            return p
        }

        function o(e, n) {
            var r, a, o, i, s, c = e.length;
            for (r = 0; c > r; r++) a = e[r], o = a.event, i = t(n[r]), s = b("eventRender", o, o, i), s === !1 ? i.remove() : (s && s !== !0 && (s = t(s).css({
                position: "absolute",
                left: a.left
            }), i.replaceWith(s), i = s), a.element = i)
        }

        function i(t) {
            var e, n, r, a = t.length;
            for (e = 0; a > e; e++) n = t[e], r = n.element, r && C(n.event, r)
        }

        function s(t, e, n) {
            var r, a, o, i, s = t.length;
            for (r = 0; s > r; r++) a = t[r], o = a.element, o && (i = a.event, i._id === n ? q(i, o, a) : o[0]._fci = r);
            H(e, t, q)
        }

        function l(t) {
            var n, r, a, o, i, s = t.length,
                c = {};
            for (n = 0; s > n; n++) r = t[n], a = r.element, a && (o = r.key = X(a[0]), i = c[o], i === e && (i = c[o] = R(a, !0)), r.hsides = i)
        }

        function u(t) {
            var e, n, r, a = t.length;
            for (e = 0; a > e; e++) n = t[e], r = n.element, r && (r[0].style.width = Math.max(0, n.outerWidth - n.hsides) + "px")
        }

        function f(t) {
            var n, r, a, o, i, s = t.length,
                c = {};
            for (n = 0; s > n; n++) r = t[n], a = r.element, a && (o = r.key, i = c[o], i === e && (i = c[o] = O(a)), r.outerHeight = a[0].offsetHeight + i)
        }

        function v() {
            var t, e = T(),
                n = [];
            for (t = 0; e > t; t++) n[t] = z(t).find("div.fc-day-content > div");
            return n
        }

        function h(t) {
            var e, n = t.length,
                r = [];
            for (e = 0; n > e; e++) r[e] = t[e][0].offsetTop;
            return r
        }

        function g(t, e) {
            var n, r, a, o, i = t.length;
            for (n = 0; i > n; n++) r = t[n], a = r.element, a && (a[0].style.top = e[r.row] + (r.top || 0) + "px", o = r.event, b("eventAfterRender", o, o, a))
        }

        function p(e, n, a) {
            var o = y("isRTL"),
                i = o ? "w" : "e",
                s = n.find(".ui-resizable-" + i),
                l = !1;
            U(n), n.mousedown(function (t) {
                t.preventDefault()
            }).click(function (t) {
                l && (t.preventDefault(), t.stopImmediatePropagation())
            }), s.mousedown(function (s) {
                function u(n) {
                    b("eventResizeStop", this, e, n), t("body").css("cursor", ""), h.stop(), P(), f && x(this, e, f, 0, n), setTimeout(function () {
                        l = !1
                    }, 0)
                }
                if (1 == s.which) {
                    l = !0;
                    var f, v, h = m.getHoverListener(),
                        g = T(),
                        p = k(),
                        y = o ? -1 : 1,
                        w = o ? p - 1 : 0,
                        D = n.css("top"),
                        C = t.extend({}, e),
                        H = L(e.start);
                    J(), t("body").css("cursor", i + "-resize").one("mouseup", u), b("eventResizeStart", this, e, s), h.start(function (t, n) {
                        if (t) {
                            var s = Math.max(H.row, t.row),
                                l = t.col;
                            1 == g && (s = 0), s == H.row && (l = o ? Math.min(H.col, l) : Math.max(H.col, l)), f = 7 * s + l * y + w - (7 * n.row + n.col * y + w);
                            var u = c(M(e), f, !0);
                            if (f) {
                                C.end = u;
                                var h = v;
                                v = r(_([C]), a.row, D), v.find("*").css("cursor", i + "-resize"), h && h.remove(), E(e)
                            } else v && (S(e), v.remove(), v = null);
                            P(), Y(e.start, c(d(u), 1))
                        }
                    }, s)
                }
            })
        }
        var m = this;
        m.renderDaySegs = n, m.resizableDayEvent = p;
        var y = m.opt,
            b = m.trigger,
            w = m.isEventDraggable,
            D = m.isEventResizable,
            M = m.eventEnd,
            C = m.reportEventElement,
            S = m.showEvents,
            E = m.hideEvents,
            x = m.eventResize,
            T = m.getRowCnt,
            k = m.getColCnt;
        m.getColWidth;
        var z = m.allDayRow,
            F = m.allDayBounds,
            N = m.colContentLeft,
            W = m.colContentRight,
            A = m.dayOfWeekCol,
            L = m.dateCell,
            _ = m.compileDaySegs,
            B = m.getDaySegmentContainer,
            q = m.bindDaySeg,
            I = m.calendar.formatDates,
            Y = m.renderDayOverlay,
            P = m.clearOverlays,
            J = m.clearSelection
    }

    function de() {
        function e(t, e, a) {
            n(), e || (e = c(t, a)), l(t, e, a), r(t, e, a)
        }

        function n(t) {
            f && (f = !1, u(), s("unselect", null, t))
        }

        function r(t, e, n, r) {
            f = !0, s("select", null, t, e, n, r)
        }

        function a(e) {
            var a = o.cellDate,
                s = o.cellIsAllDay,
                c = o.getHoverListener(),
                f = o.reportDayClick;
            if (1 == e.which && i("selectable")) {
                n(e);
                var d;
                c.start(function (t, e) {
                    u(), t && s(t) ? (d = [a(e), a(t)].sort(Y), l(d[0], d[1], !0)) : d = null
                }, e), t(document).one("mouseup", function (t) {
                    c.stop(), d && (+d[0] == +d[1] && f(d[0], !0, t), r(d[0], d[1], !0, t))
                })
            }
        }
        var o = this;
        o.select = e, o.unselect = n, o.reportSelection = r, o.daySelectionMousedown = a;
        var i = o.opt,
            s = o.trigger,
            c = o.defaultSelectionEnd,
            l = o.renderSelection,
            u = o.clearSelection,
            f = !1;
        i("selectable") && i("unselectAuto") && t(document).mousedown(function (e) {
            var r = i("unselectCancel");
            r && t(e.target).parents(r).length || n(e)
        })
    }

    function ve() {
        function e(e, n) {
            var r = o.shift();
            return r || (r = t("<div class='fc-cell-overlay' style='position:absolute;z-index:3'/>")), r[0].parentNode != n[0] && r.appendTo(n), a.push(r.css(e).show()), r
        }

        function n() {
            for (var t; t = a.shift();) o.push(t.hide().unbind())
        }
        var r = this;
        r.renderOverlay = e, r.clearOverlays = n;
        var a = [],
            o = []
    }

    function he(t) {
        var e, n, r = this;
        r.build = function () {
            e = [], n = [], t(e, n)
        }, r.cell = function (t, r) {
            var a, o = e.length,
                i = n.length,
                s = -1,
                c = -1;
            for (a = 0; o > a; a++)
                if (r >= e[a][0] && e[a][1] > r) {
                    s = a;
                    break
                }
            for (a = 0; i > a; a++)
                if (t >= n[a][0] && n[a][1] > t) {
                    c = a;
                    break
                }
            return s >= 0 && c >= 0 ? {
                row: s,
                col: c
            } : null
        }, r.rect = function (t, r, a, o, i) {
            var s = i.offset();
            return {
                top: e[t][0] - s.top,
                left: n[r][0] - s.left,
                width: n[o][1] - n[r][0],
                height: e[a][1] - e[t][0]
            }
        }
    }

    function ge(e) {
        function n(t) {
            pe(t);
            var n = e.cell(t.pageX, t.pageY);
            (!n != !i || n && (n.row != i.row || n.col != i.col)) && (n ? (o || (o = n), a(n, o, n.row - o.row, n.col - o.col)) : a(n, o), i = n)
        }
        var r, a, o, i, s = this;
        s.start = function (s, c, l) {
            a = s, o = i = null, e.build(), n(c), r = l || "mousemove", t(document).bind(r, n)
        }, s.stop = function () {
            return t(document).unbind(r, n), i
        }
    }

    function pe(t) {
        t.pageX === e && (t.pageX = t.originalEvent.pageX, t.pageY = t.originalEvent.pageY)
    }

    function me(t) {
        function n(e) {
            return a[e] = a[e] || t(e)
        }
        var r = this,
            a = {}, o = {}, i = {};
        r.left = function (t) {
            return o[t] = o[t] === e ? n(t).position().left : o[t]
        }, r.right = function (t) {
            return i[t] = i[t] === e ? r.left(t) + n(t).width() : i[t]
        }, r.clear = function () {
            a = {}, o = {}, i = {}
        }
    }
    var ye = {
        defaultView: "month",
        aspectRatio: 1.35,
        header: {
            left: "title",
            center: "",
            right: "today prev,next"
        },
        weekends: !0,
        weekNumbers: !1,
        weekNumberCalculation: "iso",
        weekNumberTitle: "W",
        allDayDefault: !0,
        ignoreTimezone: !0,
        lazyFetching: !0,
        startParam: "start",
        endParam: "end",
        titleFormat: {
            month: "MMMM yyyy",
            week: "MMM d[ yyyy]{ '&#8212;'[ MMM] d yyyy}",
            day: "dddd, MMM d, yyyy"
        },
        columnFormat: {
            month: "ddd",
            week: "ddd M/d",
            day: "dddd M/d"
        },
        timeFormat: {
            "": "h(:mm)t"
        },
        isRTL: !1,
        firstDay: 0,
        monthNames: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
		monthNamesShort: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
		dayNames: ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'],
		dayNamesShort: ["อ.","จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
        // monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        // monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        // dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        // dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        buttonText: {
            prev: "<span class='fc-text-arrow'>&lsaquo;</span>",
            next: "<span class='fc-text-arrow'>&rsaquo;</span>",
            prevYear: "<span class='fc-text-arrow'>&laquo;</span>",
            nextYear: "<span class='fc-text-arrow'>&raquo;</span>",
            today: "today",
            month: "month",
            week: "week",
            day: "day"
        },
        theme: !1,
        buttonIcons: {
            prev: "circle-triangle-w",
            next: "circle-triangle-e"
        },
        unselectAuto: !0,
        dropAccept: "*"
    }, be = {
            header: {
                left: "next,prev today",
                center: "",
                right: "title"
            },
            buttonText: {
                prev: "<span class='fc-text-arrow'>&rsaquo;</span>",
                next: "<span class='fc-text-arrow'>&lsaquo;</span>",
                prevYear: "<span class='fc-text-arrow'>&raquo;</span>",
                nextYear: "<span class='fc-text-arrow'>&laquo;</span>"
            },
            buttonIcons: {
                prev: "circle-triangle-e",
                next: "circle-triangle-w"
            }
        }, we = t.fullCalendar = {
            version: "1.6.1"
        }, De = we.views = {};
    t.fn.fullCalendar = function (n) {
        if ("string" == typeof n) {
            var a, o = Array.prototype.slice.call(arguments, 1);
            return this.each(function () {
                var r = t.data(this, "fullCalendar");
                if (r && t.isFunction(r[n])) {
                    var i = r[n].apply(r, o);
                    a === e && (a = i), "destroy" == n && t.removeData(this, "fullCalendar")
                }
            }), a !== e ? a : this
        }
        var i = n.eventSources || [];
        return delete n.eventSources, n.events && (i.push(n.events), delete n.events), n = t.extend(!0, {}, ye, n.isRTL || n.isRTL === e && ye.isRTL ? be : {}, n), this.each(function (e, a) {
            var o = t(a),
                s = new r(o, n, i);
            o.data("fullCalendar", s), s.render()
        }), this
    }, we.sourceNormalizers = [], we.sourceFetchers = [];
    var Me = {
        dataType: "json",
        cache: !1
    }, Ce = 1;
    we.addDays = c, we.cloneDate = d, we.parseDate = m, we.parseISO8601 = y, we.parseTime = b, we.formatDate = w, we.formatDates = D;
    var Se = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"],
        Ee = 864e5,
        xe = 36e5,
        Te = 6e4,
        ke = {
            s: function (t) {
                return t.getSeconds()
            },
            ss: function (t) {
                return P(t.getSeconds())
            },
            m: function (t) {
                return t.getMinutes()
            },
            mm: function (t) {
                return P(t.getMinutes())
            },
            h: function (t) {
                return t.getHours() % 12 || 12
            },
            hh: function (t) {
                return P(t.getHours() % 12 || 12)
            },
            H: function (t) {
                return t.getHours()
            },
            HH: function (t) {
                return P(t.getHours())
            },
            d: function (t) {
                return t.getDate()
            },
            dd: function (t) {
                return P(t.getDate())
            },
            ddd: function (t, e) {
                return e.dayNamesShort[t.getDay()]
            },
            dddd: function (t, e) {
                return e.dayNames[t.getDay()]
            },
            M: function (t) {
                return t.getMonth() + 1
            },
            MM: function (t) {
                return P(t.getMonth() + 1)
            },
            MMM: function (t, e) {
                return e.monthNamesShort[t.getMonth()]
            },
            MMMM: function (t, e) {
                return e.monthNames[t.getMonth()]
            },
            yy: function (t) {
                return (t.getFullYear() + "").substring(2)
            },
            yyyy: function (t) {
                return t.getFullYear()+543
            },
            t: function (t) {
                return 12 > t.getHours() ? "a" : "p"
            },
            tt: function (t) {
                return 12 > t.getHours() ? "am" : "pm"
            },
            T: function (t) {
                return 12 > t.getHours() ? "A" : "P"
            },
            TT: function (t) {
                return 12 > t.getHours() ? "AM" : "PM"
            },
            u: function (t) {
                return w(t, "yyyy-MM-dd'T'HH:mm:ss'Z'")
            },
            S: function (t) {
                var e = t.getDate();
                return e > 10 && 20 > e ? "th" : ["st", "nd", "rd"][e % 10 - 1] || "th"
            },
            w: function (t, e) {
                return e.weekNumberCalculation(t)
            },
            W: function (t) {
                return M(t)
            }
        };
    we.dateFormatters = ke, we.applyAll = G, De.month = te, De.basicWeek = ee, De.basicDay = ne, n({
        weekMode: "fixed"
    }), De.agendaWeek = oe, De.agendaDay = ie, n({
        allDaySlot: !0,
        allDayText: "all-day",
        firstHour: 6,
        slotMinutes: 30,
        defaultEventMinutes: 120,
        axisFormat: "h(:mm)tt",
        timeFormat: {
            agenda: "h:mm{ - h:mm}"
        },
        dragOpacity: {
            agenda: .5
        },
        minTime: 0,
        maxTime: 24
    })
})(jQuery);