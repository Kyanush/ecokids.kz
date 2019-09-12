! function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof exports ? module.exports = a(require("jquery")) : a(jQuery)
}(function(a) {
    var b = "waitForImages";
    a.waitForImages = {
        hasImageProperties: ["backgroundImage", "listStyleImage", "borderImage", "borderCornerImage", "cursor"],
        hasImageAttributes: ["srcset"]
    }, a.expr[":"]["has-src"] = function(b) {
        return a(b).is('img[src][src!=""]')
    }, a.expr[":"].uncached = function(b) {
        return a(b).is(":has-src") ? !b.complete : !1
    }, a.fn.waitForImages = function() {
        var c, d, e, f = 0,
            g = 0,
            h = a.Deferred();
        if (a.isPlainObject(arguments[0]) ? (e = arguments[0].waitForAll, d = arguments[0].each, c = arguments[0].finished) : 1 === arguments.length && "boolean" === a.type(arguments[0]) ? e = arguments[0] : (c = arguments[0], d = arguments[1], e = arguments[2]), c = c || a.noop, d = d || a.noop, e = !!e, !a.isFunction(c) || !a.isFunction(d)) throw new TypeError("An invalid callback was supplied.");
        return this.each(function() {
            var i = a(this),
                j = [],
                k = a.waitForImages.hasImageProperties || [],
                l = a.waitForImages.hasImageAttributes || [],
                m = /url\(\s*(['"]?)(.*?)\1\s*\)/g;
            e ? i.find("*").addBack().each(function() {
                var b = a(this);
                b.is("img:has-src") && !b.is("[srcset]") && j.push({
                    src: b.attr("src"),
                    element: b[0]
                }), a.each(k, function(a, c) {
                    var d, e = b.css(c);
                    if (!e) return !0;
                    for (; d = m.exec(e);) j.push({
                        src: d[2],
                        element: b[0]
                    })
                }), a.each(l, function(a, c) {
                    var d = b.attr(c);
                    return d ? void j.push({
                        src: b.attr("src"),
                        srcset: b.attr("srcset"),
                        element: b[0]
                    }) : !0
                })
            }) : i.find("img:has-src").each(function() {
                j.push({
                    src: this.src,
                    element: this
                })
            }), f = j.length, g = 0, 0 === f && (c.call(i[0]), h.resolveWith(i[0])), a.each(j, function(e, j) {
                var k = new Image,
                    l = "load." + b + " error." + b;
                a(k).one(l, function m(b) {
                    var e = [g, f, "load" == b.type];
                    return g++, d.apply(j.element, e), h.notifyWith(j.element, e), a(this).off(l, m), g == f ? (c.call(i[0]), h.resolveWith(i[0]), !1) : void 0
                }), j.srcset && (k.srcset = j.srcset), k.src = j.src
            })
        }), h.promise()
    }
});
! function() {
    "use strict";

    function t(t) {
        var e = 1;
        return "-" === t[0] && (e = -1, t = t.substr(1)),
            function(n, r) {
                var i = n[t] < r[t] ? -1 : n[t] > r[t] ? 1 : 0;
                return i * e
            }
    }
    var e = function() {
        this.called = !1, this.callonce = !0, this.compat()
    };
    e.prototype.init = function(t, e) {
        this.retina = window.devicePixelRatio > 1, this.elements = [], this.callback = "function" == typeof e ? e : function() {}, this.curwidth = this.getWidth();
        for (var n = this.gather(t), r = 0, i = n.length; i > r; r++) this.parse(n[r]);
        this.set(), this.resize()
    }, e.prototype.compat = function() {
        var t = document;
        "function" != typeof t.getElementsByClassName && (t.getElementsByClassName = function(e) {
            return t.querySelectorAll("." + e)
        }), String.prototype.trim || (String.prototype.trim = function() {
            return this.replace(/^\s+|\s+$/g, "")
        }), t.addEventListener || (this.addEvent = function(t, e, n) {
            t.attachEvent("on" + e, function(t) {
                n(t || window.event)
            })
        })
    }, e.prototype.gather = function(t) {
        var e = ["HTMLCollection", "NodeList"],
            n = t,
            r = n.nodeType ? "Object" : Object.prototype.toString.call(n).replace(/^\[object |\]$/g, ""),
            i = "parse" + r;
        return e.indexOf(r) > -1 ? n : this[i] ? this[i](n) : []
    }, e.prototype.parseObject = function(t) {
        return t.nodeType ? [t] : []
    }, e.prototype.parseArray = function(t) {
        return t
    }, e.prototype.parseString = function(t) {
        var e = document,
            n = t.trim(),
            r = n[0],
            i = [];
        switch (!0) {
            case "." === r:
                i = e.getElementsByClassName(n.substring(1));
                break;
            case "#" === r:
                i.push(e.getElementById(n.substring(1)));
                break;
            case /^[a-zA-Z]+$/.test(n):
                i = e.getElementsByTagName(n);
                break;
            default:
                i = []
        }
        return i
    }, e.prototype.parse = function(t) {
        var e = t.getAttribute("data-bg-srcset");
        if (null === e) return !1;
        this.elements.push({});
        var n = e.split(","),
            r = "",
            i = this.elements[this.elements.length - 1];
        i.node = t, i.srcset = [];
        for (var s = 0, o = n.length; o > s; s++) {
            i.srcset.push({}), r = n[s].trim();
            for (var a, c, l, h = r.split(" "), u = 0, d = h.length; d > u; u++) {
                switch (a = h[u], c = i.srcset[s], l = a.length - 1, !0) {
                    case "" === a.trim():
                        continue;
                    case "w" !== a[l] && "x" !== a[a.length - 1]:
                        c.src = a;
                        break;
                    case "w" === a[l]:
                        c.width = parseInt(a.slice(0, -1));
                        break;
                    case "x" === a[l]:
                        c.retina = parseInt(a.slice(0, -1)) > 1
                }
                c.width || (c.width = Number.POSITIVE_INFINITY), c.retina || (c.retina = !1)
            }
        }
    }, e.prototype.set = function() {
        for (var t = 0, e = this.elements.length; e > t; t++) this.setSingle(t)
    }, e.prototype.setSingle = function(e) {
        var n = 0,
            r = this.elements[e],
            i = [],
            s = 0,
            o = this;
        n = r.node.clientWidth * (this.retina ? 2 : 1), r.srcset = r.srcset.sort(t("width"));
        for (var a = 0, c = r.srcset.length; c > a; a++) r.srcset[a].width < n || i.push(r.srcset[a]);
        if (0 === i.length && i.push(r.srcset[r.srcset.length - 1]), s = i[0], i.length > 1 && i[0].width === i[1].width && (s = i[0].retina !== this.retina ? i[1] : i[0]), void 0 !== s.src && "null" !== s.src) {
            var l = new Image,
                h = !1;
            l.onload = l.onreadystatechange = function() {
                h || this.readyState && "loaded" !== this.readyState && "complete" !== this.readyState || (h = !0, r.node.style.backgroundImage = "url('" + s.src + "')", o.called || (o.callback(r), o.called = o.callonce))
            }, l.src = s.src
        } else r.node.style.backgroundImage = ""
    }, e.prototype.resize = function() {
        var t = this,
            e = setTimeout(function() {}, 0);
        this.addEvent(window, "resize", function() {
            clearTimeout(e), e = setTimeout(function() {
                var e = t.getWidth();
                e !== t.curwidth && (t.curwidth = e, t.retina = window.devicePixelRatio > 1, t.set())
            }, 250)
        })
    }, e.prototype.addEvent = function(t, e, n) {
        t.addEventListener(e, n, !1)
    }, e.prototype.getWidth = function() {
        var t, e, n, r;
        return t = window, e = document, n = e.documentElement, r = e.getElementsByTagName("body")[0], t.innerWidth || n.clientWidth || r.clientWidth
    }, window.bgsrcset = e
}();
! function(a, b) {
    var c = b(a, a.document);
    a.lazySizes = c, "object" == typeof module && module.exports && (module.exports = c)
}(window, function(a, b) {
    "use strict";
    if (b.getElementsByClassName) {
        var c, d, e = b.documentElement,
            f = a.Date,
            g = a.HTMLPictureElement,
            h = "addEventListener",
            i = "getAttribute",
            j = a[h],
            k = a.setTimeout,
            l = a.requestAnimationFrame || k,
            m = a.requestIdleCallback,
            n = /^picture$/i,
            o = ["load", "error", "lazyincluded", "_lazyloaded"],
            p = {},
            q = Array.prototype.forEach,
            r = function(a, b) {
                return p[b] || (p[b] = new RegExp("(\\s|^)" + b + "(\\s|$)")), p[b].test(a[i]("class") || "") && p[b]
            },
            s = function(a, b) {
                r(a, b) || a.setAttribute("class", (a[i]("class") || "").trim() + " " + b)
            },
            t = function(a, b) {
                var c;
                (c = r(a, b)) && a.setAttribute("class", (a[i]("class") || "").replace(c, " "))
            },
            u = function(a, b, c) {
                var d = c ? h : "removeEventListener";
                c && u(a, b), o.forEach(function(c) {
                    a[d](c, b)
                })
            },
            v = function(a, d, e, f, g) {
                var h = b.createEvent("Event");
                return e || (e = {}), e.instance = c, h.initEvent(d, !f, !g), h.detail = e, a.dispatchEvent(h), h
            },
            w = function(b, c) {
                var e;
                !g && (e = a.picturefill || d.pf) ? (c && c.src && !b[i]("srcset") && b.setAttribute("srcset", c.src), e({
                    reevaluate: !0,
                    elements: [b]
                })) : c && c.src && (b.src = c.src)
            },
            x = function(a, b) {
                return (getComputedStyle(a, null) || {})[b]
            },
            y = function(a, b, c) {
                for (c = c || a.offsetWidth; c < d.minSize && b && !a._lazysizesWidth;) c = b.offsetWidth, b = b.parentNode;
                return c
            },
            z = function() {
                var a, c, d = [],
                    e = [],
                    f = d,
                    g = function() {
                        var b = f;
                        for (f = d.length ? e : d, a = !0, c = !1; b.length;) b.shift()();
                        a = !1
                    },
                    h = function(d, e) {
                        a && !e ? d.apply(this, arguments) : (f.push(d), c || (c = !0, (b.hidden ? k : l)(g)))
                    };
                return h._lsFlush = g, h
            }(),
            A = function(a, b) {
                return b ? function() {
                    z(a)
                } : function() {
                    var b = this,
                        c = arguments;
                    z(function() {
                        a.apply(b, c)
                    })
                }
            },
            B = function(a) {
                var b, c = 0,
                    e = d.throttleDelay,
                    g = d.ricTimeout,
                    h = function() {
                        b = !1, c = f.now(), a()
                    },
                    i = m && g > 49 ? function() {
                        m(h, {
                            timeout: g
                        }), g !== d.ricTimeout && (g = d.ricTimeout)
                    } : A(function() {
                        k(h)
                    }, !0);
                return function(a) {
                    var d;
                    (a = !0 === a) && (g = 33), b || (b = !0, d = e - (f.now() - c), d < 0 && (d = 0), a || d < 9 ? i() : k(i, d))
                }
            },
            C = function(a) {
                var b, c, d = 99,
                    e = function() {
                        b = null, a()
                    },
                    g = function() {
                        var a = f.now() - c;
                        a < d ? k(g, d - a) : (m || e)(e)
                    };
                return function() {
                    c = f.now(), b || (b = k(g, d))
                }
            };
        ! function() {
            var b, c = {
                lazyClass: "lazyload",
                loadedClass: "lazyloaded",
                loadingClass: "lazyloading",
                preloadClass: "lazypreload",
                errorClass: "lazyerror",
                autosizesClass: "lazyautosizes",
                srcAttr: "data-src",
                srcsetAttr: "data-srcset",
                sizesAttr: "data-sizes",
                minSize: 40,
                customMedia: {},
                init: !0,
                expFactor: 1.5,
                hFac: .8,
                loadMode: 2,
                loadHidden: !0,
                ricTimeout: 0,
                throttleDelay: 125
            };
            d = a.lazySizesConfig || a.lazysizesConfig || {};
            for (b in c) b in d || (d[b] = c[b]);
            a.lazySizesConfig = d, k(function() {
                d.init && F()
            })
        }();
        var D = function() {
                var g, l, m, o, p, y, D, F, G, H, I, J, K, L, M = /^img$/i,
                    N = /^iframe$/i,
                    O = "onscroll" in a && !/(gle|ing)bot/.test(navigator.userAgent),
                    P = 0,
                    Q = 0,
                    R = 0,
                    S = -1,
                    T = function(a) {
                        R--, a && a.target && u(a.target, T), (!a || R < 0 || !a.target) && (R = 0)
                    },
                    U = function(a, c) {
                        var d, f = a,
                            g = "hidden" == x(b.body, "visibility") || "hidden" != x(a.parentNode, "visibility") && "hidden" != x(a, "visibility");
                        for (F -= c, I += c, G -= c, H += c; g && (f = f.offsetParent) && f != b.body && f != e;)(g = (x(f, "opacity") || 1) > 0) && "visible" != x(f, "overflow") && (d = f.getBoundingClientRect(), g = H > d.left && G < d.right && I > d.top - 1 && F < d.bottom + 1);
                        return g
                    },
                    V = function() {
                        var a, f, h, j, k, m, n, p, q, r = c.elements;
                        if ((o = d.loadMode) && R < 8 && (a = r.length)) {
                            f = 0, S++, null == K && ("expand" in d || (d.expand = e.clientHeight > 500 && e.clientWidth > 500 ? 500 : 370), J = d.expand, K = J * d.expFactor), Q < K && R < 1 && S > 2 && o > 2 && !b.hidden ? (Q = K, S = 0) : Q = o > 1 && S > 1 && R < 6 ? J : P;
                            for (; f < a; f++)
                                if (r[f] && !r[f]._lazyRace)
                                    if (O)
                                        if ((p = r[f][i]("data-expand")) && (m = 1 * p) || (m = Q), q !== m && (y = innerWidth + m * L, D = innerHeight + m, n = -1 * m, q = m), h = r[f].getBoundingClientRect(), (I = h.bottom) >= n && (F = h.top) <= D && (H = h.right) >= n * L && (G = h.left) <= y && (I || H || G || F) && (d.loadHidden || "hidden" != x(r[f], "visibility")) && (l && R < 3 && !p && (o < 3 || S < 4) || U(r[f], m))) {
                                            if (ba(r[f]), k = !0, R > 9) break
                                        } else !k && l && !j && R < 4 && S < 4 && o > 2 && (g[0] || d.preloadAfterLoad) && (g[0] || !p && (I || H || G || F || "auto" != r[f][i](d.sizesAttr))) && (j = g[0] || r[f]);
                                    else ba(r[f]);
                            j && !k && ba(j)
                        }
                    },
                    W = B(V),
                    X = function(a) {
                        s(a.target, d.loadedClass), t(a.target, d.loadingClass), u(a.target, Z), v(a.target, "lazyloaded")
                    },
                    Y = A(X),
                    Z = function(a) {
                        Y({
                            target: a.target
                        })
                    },
                    $ = function(a, b) {
                        try {
                            a.contentWindow.location.replace(b)
                        } catch (c) {
                            a.src = b
                        }
                    },
                    _ = function(a) {
                        var b, c = a[i](d.srcsetAttr);
                        (b = d.customMedia[a[i]("data-media") || a[i]("media")]) && a.setAttribute("media", b), c && a.setAttribute("srcset", c)
                    },
                    aa = A(function(a, b, c, e, f) {
                        var g, h, j, l, o, p;
                        (o = v(a, "lazybeforeunveil", b)).defaultPrevented || (e && (c ? s(a, d.autosizesClass) : a.setAttribute("sizes", e)), h = a[i](d.srcsetAttr), g = a[i](d.srcAttr), f && (j = a.parentNode, l = j && n.test(j.nodeName || "")), p = b.firesLoad || "src" in a && (h || g || l), o = {
                            target: a
                        }, p && (u(a, T, !0), clearTimeout(m), m = k(T, 2500), s(a, d.loadingClass), u(a, Z, !0)), l && q.call(j.getElementsByTagName("source"), _), h ? a.setAttribute("srcset", h) : g && !l && (N.test(a.nodeName) ? $(a, g) : a.src = g), f && (h || l) && w(a, {
                            src: g
                        })), a._lazyRace && delete a._lazyRace, t(a, d.lazyClass), z(function() {
                            (!p || a.complete && a.naturalWidth > 1) && (p ? T(o) : R--, X(o))
                        }, !0)
                    }),
                    ba = function(a) {
                        var b, c = M.test(a.nodeName),
                            e = c && (a[i](d.sizesAttr) || a[i]("sizes")),
                            f = "auto" == e;
                        (!f && l || !c || !a[i]("src") && !a.srcset || a.complete || r(a, d.errorClass) || !r(a, d.lazyClass)) && (b = v(a, "lazyunveilread").detail, f && E.updateElem(a, !0, a.offsetWidth), a._lazyRace = !0, R++, aa(a, b, f, e, c))
                    },
                    ca = function() {
                        if (!l) {
                            if (f.now() - p < 999) return void k(ca, 999);
                            var a = C(function() {
                                d.loadMode = 3, W()
                            });
                            l = !0, d.loadMode = 3, W(), j("scroll", function() {
                                3 == d.loadMode && (d.loadMode = 2), a()
                            }, !0)
                        }
                    };
                return {
                    _: function() {
                        p = f.now(), c.elements = b.getElementsByClassName(d.lazyClass), g = b.getElementsByClassName(d.lazyClass + " " + d.preloadClass), L = d.hFac, j("scroll", W, !0), j("resize", W, !0), a.MutationObserver ? new MutationObserver(W).observe(e, {
                            childList: !0,
                            subtree: !0,
                            attributes: !0
                        }) : (e[h]("DOMNodeInserted", W, !0), e[h]("DOMAttrModified", W, !0), setInterval(W, 999)), j("hashchange", W, !0), ["focus", "mouseover", "click", "load", "transitionend", "animationend", "webkitAnimationEnd"].forEach(function(a) {
                            b[h](a, W, !0)
                        }), /d$|^c/.test(b.readyState) ? ca() : (j("load", ca), b[h]("DOMContentLoaded", W), k(ca, 2e4)), c.elements.length ? (V(), z._lsFlush()) : W()
                    },
                    checkElems: W,
                    unveil: ba
                }
            }(),
            E = function() {
                var a, c = A(function(a, b, c, d) {
                        var e, f, g;
                        if (a._lazysizesWidth = d, d += "px", a.setAttribute("sizes", d), n.test(b.nodeName || ""))
                            for (e = b.getElementsByTagName("source"), f = 0, g = e.length; f < g; f++) e[f].setAttribute("sizes", d);
                        c.detail.dataAttr || w(a, c.detail)
                    }),
                    e = function(a, b, d) {
                        var e, f = a.parentNode;
                        f && (d = y(a, f, d), e = v(a, "lazybeforesizes", {
                            width: d,
                            dataAttr: !!b
                        }), e.defaultPrevented || (d = e.detail.width) && d !== a._lazysizesWidth && c(a, f, e, d))
                    },
                    f = function() {
                        var b, c = a.length;
                        if (c)
                            for (b = 0; b < c; b++) e(a[b])
                    },
                    g = C(f);
                return {
                    _: function() {
                        a = b.getElementsByClassName(d.autosizesClass), j("resize", g)
                    },
                    checkElems: g,
                    updateElem: e
                }
            }(),
            F = function() {
                F.i || (F.i = !0, E._(), D._())
            };
        return c = {
            cfg: d,
            autoSizer: E,
            loader: D,
            init: F,
            uP: w,
            aC: s,
            rC: t,
            hC: r,
            fire: v,
            gW: y,
            rAF: z
        }
    }
});
! function(a, b) {
    var c = function() {
        b(a.lazySizes), a.removeEventListener("lazyunveilread", c, !0)
    };
    b = b.bind(null, a, a.document), "object" == typeof module && module.exports ? b(require("lazysizes")) : a.lazySizes ? c() : a.addEventListener("lazyunveilread", c, !0)
}(window, function(a, b, c) {
    "use strict";
    if (a.addEventListener) {
        var d = /\s+/g,
            e = /\s*\|\s+|\s+\|\s*/g,
            f = /^(.+?)(?:\s+\[\s*(.+?)\s*\])(?:\s+\[\s*(.+?)\s*\])?$/,
            g = /^\s*\(*\s*type\s*:\s*(.+?)\s*\)*\s*$/,
            h = /\(|\)|'/,
            i = {
                contain: 1,
                cover: 1
            },
            j = function(a) {
                var b = c.gW(a, a.parentNode);
                return (!a._lazysizesWidth || b > a._lazysizesWidth) && (a._lazysizesWidth = b), a._lazysizesWidth
            },
            k = function(a) {
                var b;
                return b = (getComputedStyle(a) || {
                    getPropertyValue: function() {}
                }).getPropertyValue("background-size"), !i[b] && i[a.style.backgroundSize] && (b = a.style.backgroundSize), b
            },
            l = function(a, b) {
                if (b) {
                    var c = b.match(g);
                    c && c[1] ? a.setAttribute("type", c[1]) : a.setAttribute("media", lazySizesConfig.customMedia[b] || b)
                }
            },
            m = function(a, c, g) {
                var h = b.createElement("picture"),
                    i = c.getAttribute(lazySizesConfig.sizesAttr),
                    j = c.getAttribute("data-ratio"),
                    k = c.getAttribute("data-optimumx");
                c._lazybgset && c._lazybgset.parentNode == c && c.removeChild(c._lazybgset), Object.defineProperty(g, "_lazybgset", {
                    value: c,
                    writable: !0
                }), Object.defineProperty(c, "_lazybgset", {
                    value: h,
                    writable: !0
                }), a = a.replace(d, " ").split(e), h.style.display = "none", g.className = lazySizesConfig.lazyClass, 1 != a.length || i || (i = "auto"), a.forEach(function(a) {
                    var c, d = b.createElement("source");
                    i && "auto" != i && d.setAttribute("sizes", i), (c = a.match(f)) ? (d.setAttribute(lazySizesConfig.srcsetAttr, c[1]), l(d, c[2]), l(d, c[3])) : d.setAttribute(lazySizesConfig.srcsetAttr, a), h.appendChild(d)
                }), i && (g.setAttribute(lazySizesConfig.sizesAttr, i), c.removeAttribute(lazySizesConfig.sizesAttr), c.removeAttribute("sizes")), k && g.setAttribute("data-optimumx", k), j && g.setAttribute("data-ratio", j), h.appendChild(g), c.appendChild(h)
            },
            n = function(a) {
                if (a.target._lazybgset) {
                    var b = a.target,
                        d = b._lazybgset,
                        e = b.currentSrc || b.src;
                    if (e) {
                        var f = c.fire(d, "bgsetproxy", {
                            src: e,
                            useSrc: h.test(e) ? JSON.stringify(e) : e
                        });
                        f.defaultPrevented || (d.style.backgroundImage = "url(" + f.detail.useSrc + ")")
                    }
                    b._lazybgsetLoading && (c.fire(d, "_lazyloaded", {}, !1, !0), delete b._lazybgsetLoading)
                }
            };
        addEventListener("lazybeforeunveil", function(a) {
            var d, e, f;
            !a.defaultPrevented && (d = a.target.getAttribute("data-bgset")) && (f = a.target, e = b.createElement("img"), e.alt = "", e._lazybgsetLoading = !0, a.detail.firesLoad = !0, m(d, f, e), setTimeout(function() {
                c.loader.unveil(e), c.rAF(function() {
                    c.fire(e, "_lazyloaded", {}, !0, !0), e.complete && n({
                        target: e
                    })
                })
            }))
        }), b.addEventListener("load", n, !0), a.addEventListener("lazybeforesizes", function(a) {
            if (a.detail.instance == c && a.target._lazybgset && a.detail.dataAttr) {
                var b = a.target._lazybgset,
                    d = k(b);
                i[d] && (a.target._lazysizesParentFit = d, c.rAF(function() {
                    a.target.setAttribute("data-parent-fit", d), a.target._lazysizesParentFit && delete a.target._lazysizesParentFit
                }))
            }
        }, !0), b.documentElement.addEventListener("lazybeforesizes", function(a) {
            !a.defaultPrevented && a.target._lazybgset && a.detail.instance == c && (a.detail.width = j(a.target._lazybgset))
        })
    }
});
! function(a, b) {
    var c = function() {
        b(a.lazySizes), a.removeEventListener("lazyunveilread", c, !0)
    };
    b = b.bind(null, a, a.document), "object" == typeof module && module.exports ? b(require("lazysizes")) : a.lazySizes ? c() : a.addEventListener("lazyunveilread", c, !0)
}(window, function(a, b, c) {
    "use strict";

    function d(a, c) {
        if (!g[a]) {
            var d = b.createElement(c ? "link" : "script"),
                e = b.getElementsByTagName("script")[0];
            c ? (d.rel = "stylesheet", d.href = a) : d.src = a, g[a] = !0, g[d.src || d.href] = !0, e.parentNode.insertBefore(d, e)
        }
    }
    var e, f, g = {};
    b.addEventListener && (f = /\(|\)|\s|'/, e = function(a, c) {
        var d = b.createElement("img");
        d.onload = function() {
            d.onload = null, d.onerror = null, d = null, c()
        }, d.onerror = d.onload, d.src = a, d && d.complete && d.onload && d.onload()
    }, addEventListener("lazybeforeunveil", function(a) {
        if (a.detail.instance == c) {
            var b, g, h, i;
            a.defaultPrevented || ("none" == a.target.preload && (a.target.preload = "auto"), b = a.target.getAttribute("data-link"), b && d(b, !0), b = a.target.getAttribute("data-script"), b && d(b), b = a.target.getAttribute("data-require"), b && (c.cfg.requireJs ? c.cfg.requireJs([b]) : d(b)), h = a.target.getAttribute("data-bg"), h && (a.detail.firesLoad = !0, g = function() {
                a.target.style.backgroundImage = "url(" + (f.test(h) ? JSON.stringify(h) : h) + ")", a.detail.firesLoad = !1, c.fire(a.target, "_lazyloaded", {}, !0, !0)
            }, e(h, g)), (i = a.target.getAttribute("data-poster")) && (a.detail.firesLoad = !0, g = function() {
                a.target.poster = i, a.detail.firesLoad = !1, c.fire(a.target, "_lazyloaded", {}, !0, !0)
            }, e(i, g)))
        }
    }, !1))
});
! function(i) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], i) : "undefined" != typeof exports ? module.exports = i(require("jquery")) : i(jQuery)
}(function(i) {
    "use strict";
    var e = window.Slick || {};
    (e = function() {
        var e = 0;
        return function(t, o) {
            var s, n = this;
            n.defaults = {
                accessibility: !0,
                adaptiveHeight: !1,
                appendArrows: i(t),
                appendDots: i(t),
                arrows: !0,
                asNavFor: null,
                prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
                nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
                autoplay: !1,
                autoplaySpeed: 3e3,
                centerMode: !1,
                centerPadding: "50px",
                cssEase: "ease",
                customPaging: function(e, t) {
                    return i('<button type="button" />').text(t + 1)
                },
                dots: !1,
                dotsClass: "slick-dots",
                draggable: !0,
                easing: "linear",
                edgeFriction: .35,
                fade: !1,
                focusOnSelect: !1,
                focusOnChange: !1,
                infinite: !0,
                initialSlide: 0,
                lazyLoad: "ondemand",
                mobileFirst: !1,
                pauseOnHover: !0,
                pauseOnFocus: !0,
                pauseOnDotsHover: !1,
                respondTo: "window",
                responsive: null,
                rows: 1,
                rtl: !1,
                slide: "",
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                swipe: !0,
                swipeToSlide: !1,
                touchMove: !0,
                touchThreshold: 5,
                useCSS: !0,
                useTransform: !0,
                variableWidth: !1,
                vertical: !1,
                verticalSwiping: !1,
                waitForAnimate: !0,
                zIndex: 1e3
            }, n.initials = {
                animating: !1,
                dragging: !1,
                autoPlayTimer: null,
                currentDirection: 0,
                currentLeft: null,
                currentSlide: 0,
                direction: 1,
                $dots: null,
                listWidth: null,
                listHeight: null,
                loadIndex: 0,
                $nextArrow: null,
                $prevArrow: null,
                scrolling: !1,
                slideCount: null,
                slideWidth: null,
                $slideTrack: null,
                $slides: null,
                sliding: !1,
                slideOffset: 0,
                swipeLeft: null,
                swiping: !1,
                $list: null,
                touchObject: {},
                transformsEnabled: !1,
                unslicked: !1
            }, i.extend(n, n.initials), n.activeBreakpoint = null, n.animType = null, n.animProp = null, n.breakpoints = [], n.breakpointSettings = [], n.cssTransitions = !1, n.focussed = !1, n.interrupted = !1, n.hidden = "hidden", n.paused = !0, n.positionProp = null, n.respondTo = null, n.rowCount = 1, n.shouldClick = !0, n.$slider = i(t), n.$slidesCache = null, n.transformType = null, n.transitionType = null, n.visibilityChange = "visibilitychange", n.windowWidth = 0, n.windowTimer = null, s = i(t).data("slick") || {}, n.options = i.extend({}, n.defaults, o, s), n.currentSlide = n.options.initialSlide, n.originalSettings = n.options, void 0 !== document.mozHidden ? (n.hidden = "mozHidden", n.visibilityChange = "mozvisibilitychange") : void 0 !== document.webkitHidden && (n.hidden = "webkitHidden", n.visibilityChange = "webkitvisibilitychange"), n.autoPlay = i.proxy(n.autoPlay, n), n.autoPlayClear = i.proxy(n.autoPlayClear, n), n.autoPlayIterator = i.proxy(n.autoPlayIterator, n), n.changeSlide = i.proxy(n.changeSlide, n), n.clickHandler = i.proxy(n.clickHandler, n), n.selectHandler = i.proxy(n.selectHandler, n), n.setPosition = i.proxy(n.setPosition, n), n.swipeHandler = i.proxy(n.swipeHandler, n), n.dragHandler = i.proxy(n.dragHandler, n), n.keyHandler = i.proxy(n.keyHandler, n), n.instanceUid = e++, n.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/, n.registerBreakpoints(), n.init(!0)
        }
    }()).prototype.activateADA = function() {
        this.$slideTrack.find(".slick-active").attr({
            "aria-hidden": "false"
        }).find("a, input, button, select").attr({
            tabindex: "0"
        })
    }, e.prototype.addSlide = e.prototype.slickAdd = function(e, t, o) {
        var s = this;
        if ("boolean" == typeof t) o = t, t = null;
        else if (t < 0 || t >= s.slideCount) return !1;
        s.unload(), "number" == typeof t ? 0 === t && 0 === s.$slides.length ? i(e).appendTo(s.$slideTrack) : o ? i(e).insertBefore(s.$slides.eq(t)) : i(e).insertAfter(s.$slides.eq(t)) : !0 === o ? i(e).prependTo(s.$slideTrack) : i(e).appendTo(s.$slideTrack), s.$slides = s.$slideTrack.children(this.options.slide), s.$slideTrack.children(this.options.slide).detach(), s.$slideTrack.append(s.$slides), s.$slides.each(function(e, t) {
            i(t).attr("data-slick-index", e)
        }), s.$slidesCache = s.$slides, s.reinit()
    }, e.prototype.animateHeight = function() {
        var i = this;
        if (1 === i.options.slidesToShow && !0 === i.options.adaptiveHeight && !1 === i.options.vertical) {
            var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
            i.$list.animate({
                height: e
            }, i.options.speed)
        }
    }, e.prototype.animateSlide = function(e, t) {
        var o = {},
            s = this;
        s.animateHeight(), !0 === s.options.rtl && !1 === s.options.vertical && (e = -e), !1 === s.transformsEnabled ? !1 === s.options.vertical ? s.$slideTrack.animate({
            left: e
        }, s.options.speed, s.options.easing, t) : s.$slideTrack.animate({
            top: e
        }, s.options.speed, s.options.easing, t) : !1 === s.cssTransitions ? (!0 === s.options.rtl && (s.currentLeft = -s.currentLeft), i({
            animStart: s.currentLeft
        }).animate({
            animStart: e
        }, {
            duration: s.options.speed,
            easing: s.options.easing,
            step: function(i) {
                i = Math.ceil(i), !1 === s.options.vertical ? (o[s.animType] = "translate(" + i + "px, 0px)", s.$slideTrack.css(o)) : (o[s.animType] = "translate(0px," + i + "px)", s.$slideTrack.css(o))
            },
            complete: function() {
                t && t.call()
            }
        })) : (s.applyTransition(), e = Math.ceil(e), !1 === s.options.vertical ? o[s.animType] = "translate3d(" + e + "px, 0px, 0px)" : o[s.animType] = "translate3d(0px," + e + "px, 0px)", s.$slideTrack.css(o), t && setTimeout(function() {
            s.disableTransition(), t.call()
        }, s.options.speed))
    }, e.prototype.getNavTarget = function() {
        var e = this,
            t = e.options.asNavFor;
        return t && null !== t && (t = i(t).not(e.$slider)), t
    }, e.prototype.asNavFor = function(e) {
        var t = this.getNavTarget();
        null !== t && "object" == typeof t && t.each(function() {
            var t = i(this).slick("getSlick");
            t.unslicked || t.slideHandler(e, !0)
        })
    }, e.prototype.applyTransition = function(i) {
        var e = this,
            t = {};
        !1 === e.options.fade ? t[e.transitionType] = e.transformType + " " + e.options.speed + "ms " + e.options.cssEase : t[e.transitionType] = "opacity " + e.options.speed + "ms " + e.options.cssEase, !1 === e.options.fade ? e.$slideTrack.css(t) : e.$slides.eq(i).css(t)
    }, e.prototype.autoPlay = function() {
        var i = this;
        i.autoPlayClear(), i.slideCount > i.options.slidesToShow && (i.autoPlayTimer = setInterval(i.autoPlayIterator, i.options.autoplaySpeed))
    }, e.prototype.autoPlayClear = function() {
        var i = this;
        i.autoPlayTimer && clearInterval(i.autoPlayTimer)
    }, e.prototype.autoPlayIterator = function() {
        var i = this,
            e = i.currentSlide + i.options.slidesToScroll;
        i.paused || i.interrupted || i.focussed || (!1 === i.options.infinite && (1 === i.direction && i.currentSlide + 1 === i.slideCount - 1 ? i.direction = 0 : 0 === i.direction && (e = i.currentSlide - i.options.slidesToScroll, i.currentSlide - 1 == 0 && (i.direction = 1))), i.slideHandler(e))
    }, e.prototype.buildArrows = function() {
        var e = this;
        !0 === e.options.arrows && (e.$prevArrow = i(e.options.prevArrow).addClass("slick-arrow"), e.$nextArrow = i(e.options.nextArrow).addClass("slick-arrow"), e.slideCount > e.options.slidesToShow ? (e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"), e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.prependTo(e.options.appendArrows), e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.appendTo(e.options.appendArrows), !0 !== e.options.infinite && e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true")) : e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({
            "aria-disabled": "true",
            tabindex: "-1"
        }))
    }, e.prototype.buildDots = function() {
        var e, t, o = this;
        if (!0 === o.options.dots) {
            for (o.$slider.addClass("slick-dotted"), t = i("<ul />").addClass(o.options.dotsClass), e = 0; e <= o.getDotCount(); e += 1) t.append(i("<li />").append(o.options.customPaging.call(this, o, e)));
            o.$dots = t.appendTo(o.options.appendDots), o.$dots.find("li").first().addClass("slick-active")
        }
    }, e.prototype.buildOut = function() {
        var e = this;
        e.$slides = e.$slider.children(e.options.slide + ":not(.slick-cloned)").addClass("slick-slide"), e.slideCount = e.$slides.length, e.$slides.each(function(e, t) {
            i(t).attr("data-slick-index", e).data("originalStyling", i(t).attr("style") || "")
        }), e.$slider.addClass("slick-slider"), e.$slideTrack = 0 === e.slideCount ? i('<div class="slick-track"/>').appendTo(e.$slider) : e.$slides.wrapAll('<div class="slick-track"/>').parent(), e.$list = e.$slideTrack.wrap('<div class="slick-list"/>').parent(), e.$slideTrack.css("opacity", 0), !0 !== e.options.centerMode && !0 !== e.options.swipeToSlide || (e.options.slidesToScroll = 1), i("img[data-lazy]", e.$slider).not("[src]").addClass("slick-loading"), e.setupInfinite(), e.buildArrows(), e.buildDots(), e.updateDots(), e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), !0 === e.options.draggable && e.$list.addClass("draggable")
    }, e.prototype.buildRows = function() {
        var i, e, t, o, s, n, r, l = this;
        if (o = document.createDocumentFragment(), n = l.$slider.children(), l.options.rows > 1) {
            for (r = l.options.slidesPerRow * l.options.rows, s = Math.ceil(n.length / r), i = 0; i < s; i++) {
                var d = document.createElement("div");
                for (e = 0; e < l.options.rows; e++) {
                    var a = document.createElement("div");
                    for (t = 0; t < l.options.slidesPerRow; t++) {
                        var c = i * r + (e * l.options.slidesPerRow + t);
                        n.get(c) && a.appendChild(n.get(c))
                    }
                    d.appendChild(a)
                }
                o.appendChild(d)
            }
            l.$slider.empty().append(o), l.$slider.children().children().children().css({
                width: 100 / l.options.slidesPerRow + "%",
                display: "inline-block"
            })
        }
    }, e.prototype.checkResponsive = function(e, t) {
        var o, s, n, r = this,
            l = !1,
            d = r.$slider.width(),
            a = window.innerWidth || i(window).width();
        if ("window" === r.respondTo ? n = a : "slider" === r.respondTo ? n = d : "min" === r.respondTo && (n = Math.min(a, d)), r.options.responsive && r.options.responsive.length && null !== r.options.responsive) {
            s = null;
            for (o in r.breakpoints) r.breakpoints.hasOwnProperty(o) && (!1 === r.originalSettings.mobileFirst ? n < r.breakpoints[o] && (s = r.breakpoints[o]) : n > r.breakpoints[o] && (s = r.breakpoints[o]));
            null !== s ? null !== r.activeBreakpoint ? (s !== r.activeBreakpoint || t) && (r.activeBreakpoint = s, "unslick" === r.breakpointSettings[s] ? r.unslick(s) : (r.options = i.extend({}, r.originalSettings, r.breakpointSettings[s]), !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e)), l = s) : (r.activeBreakpoint = s, "unslick" === r.breakpointSettings[s] ? r.unslick(s) : (r.options = i.extend({}, r.originalSettings, r.breakpointSettings[s]), !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e)), l = s) : null !== r.activeBreakpoint && (r.activeBreakpoint = null, r.options = r.originalSettings, !0 === e && (r.currentSlide = r.options.initialSlide), r.refresh(e), l = s), e || !1 === l || r.$slider.trigger("breakpoint", [r, l])
        }
    }, e.prototype.changeSlide = function(e, t) {
        var o, s, n, r = this,
            l = i(e.currentTarget);
        switch (l.is("a") && e.preventDefault(), l.is("li") || (l = l.closest("li")), n = r.slideCount % r.options.slidesToScroll != 0, o = n ? 0 : (r.slideCount - r.currentSlide) % r.options.slidesToScroll, e.data.message) {
            case "previous":
                s = 0 === o ? r.options.slidesToScroll : r.options.slidesToShow - o, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide - s, !1, t);
                break;
            case "next":
                s = 0 === o ? r.options.slidesToScroll : o, r.slideCount > r.options.slidesToShow && r.slideHandler(r.currentSlide + s, !1, t);
                break;
            case "index":
                var d = 0 === e.data.index ? 0 : e.data.index || l.index() * r.options.slidesToScroll;
                r.slideHandler(r.checkNavigable(d), !1, t), l.children().trigger("focus");
                break;
            default:
                return
        }
    }, e.prototype.checkNavigable = function(i) {
        var e, t;
        if (e = this.getNavigableIndexes(), t = 0, i > e[e.length - 1]) i = e[e.length - 1];
        else
            for (var o in e) {
                if (i < e[o]) {
                    i = t;
                    break
                }
                t = e[o]
            }
        return i
    }, e.prototype.cleanUpEvents = function() {
        var e = this;
        e.options.dots && null !== e.$dots && (i("li", e.$dots).off("click.slick", e.changeSlide).off("mouseenter.slick", i.proxy(e.interrupt, e, !0)).off("mouseleave.slick", i.proxy(e.interrupt, e, !1)), !0 === e.options.accessibility && e.$dots.off("keydown.slick", e.keyHandler)), e.$slider.off("focus.slick blur.slick"), !0 === e.options.arrows && e.slideCount > e.options.slidesToShow && (e.$prevArrow && e.$prevArrow.off("click.slick", e.changeSlide), e.$nextArrow && e.$nextArrow.off("click.slick", e.changeSlide), !0 === e.options.accessibility && (e.$prevArrow && e.$prevArrow.off("keydown.slick", e.keyHandler), e.$nextArrow && e.$nextArrow.off("keydown.slick", e.keyHandler))), e.$list.off("touchstart.slick mousedown.slick", e.swipeHandler), e.$list.off("touchmove.slick mousemove.slick", e.swipeHandler), e.$list.off("touchend.slick mouseup.slick", e.swipeHandler), e.$list.off("touchcancel.slick mouseleave.slick", e.swipeHandler), e.$list.off("click.slick", e.clickHandler), i(document).off(e.visibilityChange, e.visibility), e.cleanUpSlideEvents(), !0 === e.options.accessibility && e.$list.off("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().off("click.slick", e.selectHandler), i(window).off("orientationchange.slick.slick-" + e.instanceUid, e.orientationChange), i(window).off("resize.slick.slick-" + e.instanceUid, e.resize), i("[draggable!=true]", e.$slideTrack).off("dragstart", e.preventDefault), i(window).off("load.slick.slick-" + e.instanceUid, e.setPosition)
    }, e.prototype.cleanUpSlideEvents = function() {
        var e = this;
        e.$list.off("mouseenter.slick", i.proxy(e.interrupt, e, !0)), e.$list.off("mouseleave.slick", i.proxy(e.interrupt, e, !1))
    }, e.prototype.cleanUpRows = function() {
        var i, e = this;
        e.options.rows > 1 && ((i = e.$slides.children().children()).removeAttr("style"), e.$slider.empty().append(i))
    }, e.prototype.clickHandler = function(i) {
        !1 === this.shouldClick && (i.stopImmediatePropagation(), i.stopPropagation(), i.preventDefault())
    }, e.prototype.destroy = function(e) {
        var t = this;
        t.autoPlayClear(), t.touchObject = {}, t.cleanUpEvents(), i(".slick-cloned", t.$slider).detach(), t.$dots && t.$dots.remove(), t.$prevArrow && t.$prevArrow.length && (t.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), t.htmlExpr.test(t.options.prevArrow) && t.$prevArrow.remove()), t.$nextArrow && t.$nextArrow.length && (t.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), t.htmlExpr.test(t.options.nextArrow) && t.$nextArrow.remove()), t.$slides && (t.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function() {
            i(this).attr("style", i(this).data("originalStyling"))
        }), t.$slideTrack.children(this.options.slide).detach(), t.$slideTrack.detach(), t.$list.detach(), t.$slider.append(t.$slides)), t.cleanUpRows(), t.$slider.removeClass("slick-slider"), t.$slider.removeClass("slick-initialized"), t.$slider.removeClass("slick-dotted"), t.unslicked = !0, e || t.$slider.trigger("destroy", [t])
    }, e.prototype.disableTransition = function(i) {
        var e = this,
            t = {};
        t[e.transitionType] = "", !1 === e.options.fade ? e.$slideTrack.css(t) : e.$slides.eq(i).css(t)
    }, e.prototype.fadeSlide = function(i, e) {
        var t = this;
        !1 === t.cssTransitions ? (t.$slides.eq(i).css({
            zIndex: t.options.zIndex
        }), t.$slides.eq(i).animate({
            opacity: 1
        }, t.options.speed, t.options.easing, e)) : (t.applyTransition(i), t.$slides.eq(i).css({
            opacity: 1,
            zIndex: t.options.zIndex
        }), e && setTimeout(function() {
            t.disableTransition(i), e.call()
        }, t.options.speed))
    }, e.prototype.fadeSlideOut = function(i) {
        var e = this;
        !1 === e.cssTransitions ? e.$slides.eq(i).animate({
            opacity: 0,
            zIndex: e.options.zIndex - 2
        }, e.options.speed, e.options.easing) : (e.applyTransition(i), e.$slides.eq(i).css({
            opacity: 0,
            zIndex: e.options.zIndex - 2
        }))
    }, e.prototype.filterSlides = e.prototype.slickFilter = function(i) {
        var e = this;
        null !== i && (e.$slidesCache = e.$slides, e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.filter(i).appendTo(e.$slideTrack), e.reinit())
    }, e.prototype.focusHandler = function() {
        var e = this;
        e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick", "*", function(t) {
            t.stopImmediatePropagation();
            var o = i(this);
            setTimeout(function() {
                e.options.pauseOnFocus && (e.focussed = o.is(":focus"), e.autoPlay())
            }, 0)
        })
    }, e.prototype.getCurrent = e.prototype.slickCurrentSlide = function() {
        return this.currentSlide
    }, e.prototype.getDotCount = function() {
        var i = this,
            e = 0,
            t = 0,
            o = 0;
        if (!0 === i.options.infinite)
            if (i.slideCount <= i.options.slidesToShow) ++o;
            else
                for (; e < i.slideCount;) ++o, e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
        else if (!0 === i.options.centerMode) o = i.slideCount;
        else if (i.options.asNavFor)
            for (; e < i.slideCount;) ++o, e = t + i.options.slidesToScroll, t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
        else o = 1 + Math.ceil((i.slideCount - i.options.slidesToShow) / i.options.slidesToScroll);
        return o - 1
    }, e.prototype.getLeft = function(i) {
        var e, t, o, s, n = this,
            r = 0;
        return n.slideOffset = 0, t = n.$slides.first().outerHeight(!0), !0 === n.options.infinite ? (n.slideCount > n.options.slidesToShow && (n.slideOffset = n.slideWidth * n.options.slidesToShow * -1, s = -1, !0 === n.options.vertical && !0 === n.options.centerMode && (2 === n.options.slidesToShow ? s = -1.5 : 1 === n.options.slidesToShow && (s = -2)), r = t * n.options.slidesToShow * s), n.slideCount % n.options.slidesToScroll != 0 && i + n.options.slidesToScroll > n.slideCount && n.slideCount > n.options.slidesToShow && (i > n.slideCount ? (n.slideOffset = (n.options.slidesToShow - (i - n.slideCount)) * n.slideWidth * -1, r = (n.options.slidesToShow - (i - n.slideCount)) * t * -1) : (n.slideOffset = n.slideCount % n.options.slidesToScroll * n.slideWidth * -1, r = n.slideCount % n.options.slidesToScroll * t * -1))) : i + n.options.slidesToShow > n.slideCount && (n.slideOffset = (i + n.options.slidesToShow - n.slideCount) * n.slideWidth, r = (i + n.options.slidesToShow - n.slideCount) * t), n.slideCount <= n.options.slidesToShow && (n.slideOffset = 0, r = 0), !0 === n.options.centerMode && n.slideCount <= n.options.slidesToShow ? n.slideOffset = n.slideWidth * Math.floor(n.options.slidesToShow) / 2 - n.slideWidth * n.slideCount / 2 : !0 === n.options.centerMode && !0 === n.options.infinite ? n.slideOffset += n.slideWidth * Math.floor(n.options.slidesToShow / 2) - n.slideWidth : !0 === n.options.centerMode && (n.slideOffset = 0, n.slideOffset += n.slideWidth * Math.floor(n.options.slidesToShow / 2)), e = !1 === n.options.vertical ? i * n.slideWidth * -1 + n.slideOffset : i * t * -1 + r, !0 === n.options.variableWidth && (o = n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite ? n.$slideTrack.children(".slick-slide").eq(i) : n.$slideTrack.children(".slick-slide").eq(i + n.options.slidesToShow), e = !0 === n.options.rtl ? o[0] ? -1 * (n.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, !0 === n.options.centerMode && (o = n.slideCount <= n.options.slidesToShow || !1 === n.options.infinite ? n.$slideTrack.children(".slick-slide").eq(i) : n.$slideTrack.children(".slick-slide").eq(i + n.options.slidesToShow + 1), e = !0 === n.options.rtl ? o[0] ? -1 * (n.$slideTrack.width() - o[0].offsetLeft - o.width()) : 0 : o[0] ? -1 * o[0].offsetLeft : 0, e += (n.$list.width() - o.outerWidth()) / 2)), e
    }, e.prototype.getOption = e.prototype.slickGetOption = function(i) {
        return this.options[i]
    }, e.prototype.getNavigableIndexes = function() {
        var i, e = this,
            t = 0,
            o = 0,
            s = [];
        for (!1 === e.options.infinite ? i = e.slideCount : (t = -1 * e.options.slidesToScroll, o = -1 * e.options.slidesToScroll, i = 2 * e.slideCount); t < i;) s.push(t), t = o + e.options.slidesToScroll, o += e.options.slidesToScroll <= e.options.slidesToShow ? e.options.slidesToScroll : e.options.slidesToShow;
        return s
    }, e.prototype.getSlick = function() {
        return this
    }, e.prototype.getSlideCount = function() {
        var e, t, o = this;
        return t = !0 === o.options.centerMode ? o.slideWidth * Math.floor(o.options.slidesToShow / 2) : 0, !0 === o.options.swipeToSlide ? (o.$slideTrack.find(".slick-slide").each(function(s, n) {
            if (n.offsetLeft - t + i(n).outerWidth() / 2 > -1 * o.swipeLeft) return e = n, !1
        }), Math.abs(i(e).attr("data-slick-index") - o.currentSlide) || 1) : o.options.slidesToScroll
    }, e.prototype.goTo = e.prototype.slickGoTo = function(i, e) {
        this.changeSlide({
            data: {
                message: "index",
                index: parseInt(i)
            }
        }, e)
    }, e.prototype.init = function(e) {
        var t = this;
        i(t.$slider).hasClass("slick-initialized") || (i(t.$slider).addClass("slick-initialized"), t.buildRows(), t.buildOut(), t.setProps(), t.startLoad(), t.loadSlider(), t.initializeEvents(), t.updateArrows(), t.updateDots(), t.checkResponsive(!0), t.focusHandler()), e && t.$slider.trigger("init", [t]), !0 === t.options.accessibility && t.initADA(), t.options.autoplay && (t.paused = !1, t.autoPlay())
    }, e.prototype.initADA = function() {
        var e = this,
            t = Math.ceil(e.slideCount / e.options.slidesToShow),
            o = e.getNavigableIndexes().filter(function(i) {
                return i >= 0 && i < e.slideCount
            });
        e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({
            "aria-hidden": "true",
            tabindex: "-1"
        }).find("a, input, button, select").attr({
            tabindex: "-1"
        }), null !== e.$dots && (e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function(t) {
            var s = o.indexOf(t);
            i(this).attr({
                role: "tabpanel",
                id: "slick-slide" + e.instanceUid + t,
                tabindex: -1
            }), -1 !== s && i(this).attr({
                "aria-describedby": "slick-slide-control" + e.instanceUid + s
            })
        }), e.$dots.attr("role", "tablist").find("li").each(function(s) {
            var n = o[s];
            i(this).attr({
                role: "presentation"
            }), i(this).find("button").first().attr({
                role: "tab",
                id: "slick-slide-control" + e.instanceUid + s,
                "aria-controls": "slick-slide" + e.instanceUid + n,
                "aria-label": s + 1 + " of " + t,
                "aria-selected": null,
                tabindex: "-1"
            })
        }).eq(e.currentSlide).find("button").attr({
            "aria-selected": "true",
            tabindex: "0"
        }).end());
        for (var s = e.currentSlide, n = s + e.options.slidesToShow; s < n; s++) e.$slides.eq(s).attr("tabindex", 0);
        e.activateADA()
    }, e.prototype.initArrowEvents = function() {
        var i = this;
        !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.off("click.slick").on("click.slick", {
            message: "previous"
        }, i.changeSlide), i.$nextArrow.off("click.slick").on("click.slick", {
            message: "next"
        }, i.changeSlide), !0 === i.options.accessibility && (i.$prevArrow.on("keydown.slick", i.keyHandler), i.$nextArrow.on("keydown.slick", i.keyHandler)))
    }, e.prototype.initDotEvents = function() {
        var e = this;
        !0 === e.options.dots && (i("li", e.$dots).on("click.slick", {
            message: "index"
        }, e.changeSlide), !0 === e.options.accessibility && e.$dots.on("keydown.slick", e.keyHandler)), !0 === e.options.dots && !0 === e.options.pauseOnDotsHover && i("li", e.$dots).on("mouseenter.slick", i.proxy(e.interrupt, e, !0)).on("mouseleave.slick", i.proxy(e.interrupt, e, !1))
    }, e.prototype.initSlideEvents = function() {
        var e = this;
        e.options.pauseOnHover && (e.$list.on("mouseenter.slick", i.proxy(e.interrupt, e, !0)), e.$list.on("mouseleave.slick", i.proxy(e.interrupt, e, !1)))
    }, e.prototype.initializeEvents = function() {
        var e = this;
        e.initArrowEvents(), e.initDotEvents(), e.initSlideEvents(), e.$list.on("touchstart.slick mousedown.slick", {
            action: "start"
        }, e.swipeHandler), e.$list.on("touchmove.slick mousemove.slick", {
            action: "move"
        }, e.swipeHandler), e.$list.on("touchend.slick mouseup.slick", {
            action: "end"
        }, e.swipeHandler), e.$list.on("touchcancel.slick mouseleave.slick", {
            action: "end"
        }, e.swipeHandler), e.$list.on("click.slick", e.clickHandler), i(document).on(e.visibilityChange, i.proxy(e.visibility, e)), !0 === e.options.accessibility && e.$list.on("keydown.slick", e.keyHandler), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().on("click.slick", e.selectHandler), i(window).on("orientationchange.slick.slick-" + e.instanceUid, i.proxy(e.orientationChange, e)), i(window).on("resize.slick.slick-" + e.instanceUid, i.proxy(e.resize, e)), i("[draggable!=true]", e.$slideTrack).on("dragstart", e.preventDefault), i(window).on("load.slick.slick-" + e.instanceUid, e.setPosition), i(e.setPosition)
    }, e.prototype.initUI = function() {
        var i = this;
        !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.show(), i.$nextArrow.show()), !0 === i.options.dots && i.slideCount > i.options.slidesToShow && i.$dots.show()
    }, e.prototype.keyHandler = function(i) {
        var e = this;
        i.target.tagName.match("TEXTAREA|INPUT|SELECT") || (37 === i.keyCode && !0 === e.options.accessibility ? e.changeSlide({
            data: {
                message: !0 === e.options.rtl ? "next" : "previous"
            }
        }) : 39 === i.keyCode && !0 === e.options.accessibility && e.changeSlide({
            data: {
                message: !0 === e.options.rtl ? "previous" : "next"
            }
        }))
    }, e.prototype.lazyLoad = function() {
        function e(e) {
            i("img[data-lazy]", e).each(function() {
                var e = i(this),
                    t = i(this).attr("data-lazy"),
                    o = i(this).attr("data-srcset"),
                    s = i(this).attr("data-sizes") || n.$slider.attr("data-sizes"),
                    r = document.createElement("img");
                r.onload = function() {
                    e.animate({
                        opacity: 0
                    }, 100, function() {
                        o && (e.attr("srcset", o), s && e.attr("sizes", s)), e.attr("src", t).animate({
                            opacity: 1
                        }, 200, function() {
                            e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading")
                        }), n.$slider.trigger("lazyLoaded", [n, e, t])
                    })
                }, r.onerror = function() {
                    e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), n.$slider.trigger("lazyLoadError", [n, e, t])
                }, r.src = t
            })
        }
        var t, o, s, n = this;
        if (!0 === n.options.centerMode ? !0 === n.options.infinite ? s = (o = n.currentSlide + (n.options.slidesToShow / 2 + 1)) + n.options.slidesToShow + 2 : (o = Math.max(0, n.currentSlide - (n.options.slidesToShow / 2 + 1)), s = n.options.slidesToShow / 2 + 1 + 2 + n.currentSlide) : (o = n.options.infinite ? n.options.slidesToShow + n.currentSlide : n.currentSlide, s = Math.ceil(o + n.options.slidesToShow), !0 === n.options.fade && (o > 0 && o--, s <= n.slideCount && s++)), t = n.$slider.find(".slick-slide").slice(o, s), "anticipated" === n.options.lazyLoad)
            for (var r = o - 1, l = s, d = n.$slider.find(".slick-slide"), a = 0; a < n.options.slidesToScroll; a++) r < 0 && (r = n.slideCount - 1), t = (t = t.add(d.eq(r))).add(d.eq(l)), r--, l++;
        e(t), n.slideCount <= n.options.slidesToShow ? e(n.$slider.find(".slick-slide")) : n.currentSlide >= n.slideCount - n.options.slidesToShow ? e(n.$slider.find(".slick-cloned").slice(0, n.options.slidesToShow)) : 0 === n.currentSlide && e(n.$slider.find(".slick-cloned").slice(-1 * n.options.slidesToShow))
    }, e.prototype.loadSlider = function() {
        var i = this;
        i.setPosition(), i.$slideTrack.css({
            opacity: 1
        }), i.$slider.removeClass("slick-loading"), i.initUI(), "progressive" === i.options.lazyLoad && i.progressiveLazyLoad()
    }, e.prototype.next = e.prototype.slickNext = function() {
        this.changeSlide({
            data: {
                message: "next"
            }
        })
    }, e.prototype.orientationChange = function() {
        var i = this;
        i.checkResponsive(), i.setPosition()
    }, e.prototype.pause = e.prototype.slickPause = function() {
        var i = this;
        i.autoPlayClear(), i.paused = !0
    }, e.prototype.play = e.prototype.slickPlay = function() {
        var i = this;
        i.autoPlay(), i.options.autoplay = !0, i.paused = !1, i.focussed = !1, i.interrupted = !1
    }, e.prototype.postSlide = function(e) {
        var t = this;
        t.unslicked || (t.$slider.trigger("afterChange", [t, e]), t.animating = !1, t.slideCount > t.options.slidesToShow && t.setPosition(), t.swipeLeft = null, t.options.autoplay && t.autoPlay(), !0 === t.options.accessibility && (t.initADA(), t.options.focusOnChange && i(t.$slides.get(t.currentSlide)).attr("tabindex", 0).focus()))
    }, e.prototype.prev = e.prototype.slickPrev = function() {
        this.changeSlide({
            data: {
                message: "previous"
            }
        })
    }, e.prototype.preventDefault = function(i) {
        i.preventDefault()
    }, e.prototype.progressiveLazyLoad = function(e) {
        e = e || 1;
        var t, o, s, n, r, l = this,
            d = i("img[data-lazy]", l.$slider);
        d.length ? (t = d.first(), o = t.attr("data-lazy"), s = t.attr("data-srcset"), n = t.attr("data-sizes") || l.$slider.attr("data-sizes"), (r = document.createElement("img")).onload = function() {
            s && (t.attr("srcset", s), n && t.attr("sizes", n)), t.attr("src", o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"), !0 === l.options.adaptiveHeight && l.setPosition(), l.$slider.trigger("lazyLoaded", [l, t, o]), l.progressiveLazyLoad()
        }, r.onerror = function() {
            e < 3 ? setTimeout(function() {
                l.progressiveLazyLoad(e + 1)
            }, 500) : (t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), l.$slider.trigger("lazyLoadError", [l, t, o]), l.progressiveLazyLoad())
        }, r.src = o) : l.$slider.trigger("allImagesLoaded", [l])
    }, e.prototype.refresh = function(e) {
        var t, o, s = this;
        o = s.slideCount - s.options.slidesToShow, !s.options.infinite && s.currentSlide > o && (s.currentSlide = o), s.slideCount <= s.options.slidesToShow && (s.currentSlide = 0), t = s.currentSlide, s.destroy(!0), i.extend(s, s.initials, {
            currentSlide: t
        }), s.init(), e || s.changeSlide({
            data: {
                message: "index",
                index: t
            }
        }, !1)
    }, e.prototype.registerBreakpoints = function() {
        var e, t, o, s = this,
            n = s.options.responsive || null;
        if ("array" === i.type(n) && n.length) {
            s.respondTo = s.options.respondTo || "window";
            for (e in n)
                if (o = s.breakpoints.length - 1, n.hasOwnProperty(e)) {
                    for (t = n[e].breakpoint; o >= 0;) s.breakpoints[o] && s.breakpoints[o] === t && s.breakpoints.splice(o, 1), o--;
                    s.breakpoints.push(t), s.breakpointSettings[t] = n[e].settings
                } s.breakpoints.sort(function(i, e) {
                return s.options.mobileFirst ? i - e : e - i
            })
        }
    }, e.prototype.reinit = function() {
        var e = this;
        e.$slides = e.$slideTrack.children(e.options.slide).addClass("slick-slide"), e.slideCount = e.$slides.length, e.currentSlide >= e.slideCount && 0 !== e.currentSlide && (e.currentSlide = e.currentSlide - e.options.slidesToScroll), e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0), e.registerBreakpoints(), e.setProps(), e.setupInfinite(), e.buildArrows(), e.updateArrows(), e.initArrowEvents(), e.buildDots(), e.updateDots(), e.initDotEvents(), e.cleanUpSlideEvents(), e.initSlideEvents(), e.checkResponsive(!1, !0), !0 === e.options.focusOnSelect && i(e.$slideTrack).children().on("click.slick", e.selectHandler), e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0), e.setPosition(), e.focusHandler(), e.paused = !e.options.autoplay, e.autoPlay(), e.$slider.trigger("reInit", [e])
    }, e.prototype.resize = function() {
        var e = this;
        i(window).width() !== e.windowWidth && (clearTimeout(e.windowDelay), e.windowDelay = window.setTimeout(function() {
            e.windowWidth = i(window).width(), e.checkResponsive(), e.unslicked || e.setPosition()
        }, 50))
    }, e.prototype.removeSlide = e.prototype.slickRemove = function(i, e, t) {
        var o = this;
        if (i = "boolean" == typeof i ? !0 === (e = i) ? 0 : o.slideCount - 1 : !0 === e ? --i : i, o.slideCount < 1 || i < 0 || i > o.slideCount - 1) return !1;
        o.unload(), !0 === t ? o.$slideTrack.children().remove() : o.$slideTrack.children(this.options.slide).eq(i).remove(), o.$slides = o.$slideTrack.children(this.options.slide), o.$slideTrack.children(this.options.slide).detach(), o.$slideTrack.append(o.$slides), o.$slidesCache = o.$slides, o.reinit()
    }, e.prototype.setCSS = function(i) {
        var e, t, o = this,
            s = {};
        !0 === o.options.rtl && (i = -i), e = "left" == o.positionProp ? Math.ceil(i) + "px" : "0px", t = "top" == o.positionProp ? Math.ceil(i) + "px" : "0px", s[o.positionProp] = i, !1 === o.transformsEnabled ? o.$slideTrack.css(s) : (s = {}, !1 === o.cssTransitions ? (s[o.animType] = "translate(" + e + ", " + t + ")", o.$slideTrack.css(s)) : (s[o.animType] = "translate3d(" + e + ", " + t + ", 0px)", o.$slideTrack.css(s)))
    }, e.prototype.setDimensions = function() {
        var i = this;
        !1 === i.options.vertical ? !0 === i.options.centerMode && i.$list.css({
            padding: "0px " + i.options.centerPadding
        }) : (i.$list.height(i.$slides.first().outerHeight(!0) * i.options.slidesToShow), !0 === i.options.centerMode && i.$list.css({
            padding: i.options.centerPadding + " 0px"
        })), i.listWidth = i.$list.width(), i.listHeight = i.$list.height(), !1 === i.options.vertical && !1 === i.options.variableWidth ? (i.slideWidth = Math.ceil(i.listWidth / i.options.slidesToShow), i.$slideTrack.width(Math.ceil(i.slideWidth * i.$slideTrack.children(".slick-slide").length))) : !0 === i.options.variableWidth ? i.$slideTrack.width(5e3 * i.slideCount) : (i.slideWidth = Math.ceil(i.listWidth), i.$slideTrack.height(Math.ceil(i.$slides.first().outerHeight(!0) * i.$slideTrack.children(".slick-slide").length)));
        var e = i.$slides.first().outerWidth(!0) - i.$slides.first().width();
        !1 === i.options.variableWidth && i.$slideTrack.children(".slick-slide").width(i.slideWidth - e)
    }, e.prototype.setFade = function() {
        var e, t = this;
        t.$slides.each(function(o, s) {
            e = t.slideWidth * o * -1, !0 === t.options.rtl ? i(s).css({
                position: "relative",
                right: e,
                top: 0,
                zIndex: t.options.zIndex - 2,
                opacity: 0
            }) : i(s).css({
                position: "relative",
                left: e,
                top: 0,
                zIndex: t.options.zIndex - 2,
                opacity: 0
            })
        }), t.$slides.eq(t.currentSlide).css({
            zIndex: t.options.zIndex - 1,
            opacity: 1
        })
    }, e.prototype.setHeight = function() {
        var i = this;
        if (1 === i.options.slidesToShow && !0 === i.options.adaptiveHeight && !1 === i.options.vertical) {
            var e = i.$slides.eq(i.currentSlide).outerHeight(!0);
            i.$list.css("height", e)
        }
    }, e.prototype.setOption = e.prototype.slickSetOption = function() {
        var e, t, o, s, n, r = this,
            l = !1;
        if ("object" === i.type(arguments[0]) ? (o = arguments[0], l = arguments[1], n = "multiple") : "string" === i.type(arguments[0]) && (o = arguments[0], s = arguments[1], l = arguments[2], "responsive" === arguments[0] && "array" === i.type(arguments[1]) ? n = "responsive" : void 0 !== arguments[1] && (n = "single")), "single" === n) r.options[o] = s;
        else if ("multiple" === n) i.each(o, function(i, e) {
            r.options[i] = e
        });
        else if ("responsive" === n)
            for (t in s)
                if ("array" !== i.type(r.options.responsive)) r.options.responsive = [s[t]];
                else {
                    for (e = r.options.responsive.length - 1; e >= 0;) r.options.responsive[e].breakpoint === s[t].breakpoint && r.options.responsive.splice(e, 1), e--;
                    r.options.responsive.push(s[t])
                } l && (r.unload(), r.reinit())
    }, e.prototype.setPosition = function() {
        var i = this;
        i.setDimensions(), i.setHeight(), !1 === i.options.fade ? i.setCSS(i.getLeft(i.currentSlide)) : i.setFade(), i.$slider.trigger("setPosition", [i])
    }, e.prototype.setProps = function() {
        var i = this,
            e = document.body.style;
        i.positionProp = !0 === i.options.vertical ? "top" : "left", "top" === i.positionProp ? i.$slider.addClass("slick-vertical") : i.$slider.removeClass("slick-vertical"), void 0 === e.WebkitTransition && void 0 === e.MozTransition && void 0 === e.msTransition || !0 === i.options.useCSS && (i.cssTransitions = !0), i.options.fade && ("number" == typeof i.options.zIndex ? i.options.zIndex < 3 && (i.options.zIndex = 3) : i.options.zIndex = i.defaults.zIndex), void 0 !== e.OTransform && (i.animType = "OTransform", i.transformType = "-o-transform", i.transitionType = "OTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (i.animType = !1)), void 0 !== e.MozTransform && (i.animType = "MozTransform", i.transformType = "-moz-transform", i.transitionType = "MozTransition", void 0 === e.perspectiveProperty && void 0 === e.MozPerspective && (i.animType = !1)), void 0 !== e.webkitTransform && (i.animType = "webkitTransform", i.transformType = "-webkit-transform", i.transitionType = "webkitTransition", void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (i.animType = !1)), void 0 !== e.msTransform && (i.animType = "msTransform", i.transformType = "-ms-transform", i.transitionType = "msTransition", void 0 === e.msTransform && (i.animType = !1)), void 0 !== e.transform && !1 !== i.animType && (i.animType = "transform", i.transformType = "transform", i.transitionType = "transition"), i.transformsEnabled = i.options.useTransform && null !== i.animType && !1 !== i.animType
    }, e.prototype.setSlideClasses = function(i) {
        var e, t, o, s, n = this;
        if (t = n.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true"), n.$slides.eq(i).addClass("slick-current"), !0 === n.options.centerMode) {
            var r = n.options.slidesToShow % 2 == 0 ? 1 : 0;
            e = Math.floor(n.options.slidesToShow / 2), !0 === n.options.infinite && (i >= e && i <= n.slideCount - 1 - e ? n.$slides.slice(i - e + r, i + e + 1).addClass("slick-active").attr("aria-hidden", "false") : (o = n.options.slidesToShow + i, t.slice(o - e + 1 + r, o + e + 2).addClass("slick-active").attr("aria-hidden", "false")), 0 === i ? t.eq(t.length - 1 - n.options.slidesToShow).addClass("slick-center") : i === n.slideCount - 1 && t.eq(n.options.slidesToShow).addClass("slick-center")), n.$slides.eq(i).addClass("slick-center")
        } else i >= 0 && i <= n.slideCount - n.options.slidesToShow ? n.$slides.slice(i, i + n.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false") : t.length <= n.options.slidesToShow ? t.addClass("slick-active").attr("aria-hidden", "false") : (s = n.slideCount % n.options.slidesToShow, o = !0 === n.options.infinite ? n.options.slidesToShow + i : i, n.options.slidesToShow == n.options.slidesToScroll && n.slideCount - i < n.options.slidesToShow ? t.slice(o - (n.options.slidesToShow - s), o + s).addClass("slick-active").attr("aria-hidden", "false") : t.slice(o, o + n.options.slidesToShow).addClass("slick-active").attr("aria-hidden", "false"));
        "ondemand" !== n.options.lazyLoad && "anticipated" !== n.options.lazyLoad || n.lazyLoad()
    }, e.prototype.setupInfinite = function() {
        var e, t, o, s = this;
        if (!0 === s.options.fade && (s.options.centerMode = !1), !0 === s.options.infinite && !1 === s.options.fade && (t = null, s.slideCount > s.options.slidesToShow)) {
            for (o = !0 === s.options.centerMode ? s.options.slidesToShow + 1 : s.options.slidesToShow, e = s.slideCount; e > s.slideCount - o; e -= 1) t = e - 1, i(s.$slides[t]).clone(!0).attr("id", "").attr("data-slick-index", t - s.slideCount).prependTo(s.$slideTrack).addClass("slick-cloned");
            for (e = 0; e < o + s.slideCount; e += 1) t = e, i(s.$slides[t]).clone(!0).attr("id", "").attr("data-slick-index", t + s.slideCount).appendTo(s.$slideTrack).addClass("slick-cloned");
            s.$slideTrack.find(".slick-cloned").find("[id]").each(function() {
                i(this).attr("id", "")
            })
        }
    }, e.prototype.interrupt = function(i) {
        var e = this;
        i || e.autoPlay(), e.interrupted = i
    }, e.prototype.selectHandler = function(e) {
        var t = this,
            o = i(e.target).is(".slick-slide") ? i(e.target) : i(e.target).parents(".slick-slide"),
            s = parseInt(o.attr("data-slick-index"));
        s || (s = 0), t.slideCount <= t.options.slidesToShow ? t.slideHandler(s, !1, !0) : t.slideHandler(s)
    }, e.prototype.slideHandler = function(i, e, t) {
        var o, s, n, r, l, d = null,
            a = this;
        if (e = e || !1, !(!0 === a.animating && !0 === a.options.waitForAnimate || !0 === a.options.fade && a.currentSlide === i))
            if (!1 === e && a.asNavFor(i), o = i, d = a.getLeft(o), r = a.getLeft(a.currentSlide), a.currentLeft = null === a.swipeLeft ? r : a.swipeLeft, !1 === a.options.infinite && !1 === a.options.centerMode && (i < 0 || i > a.getDotCount() * a.options.slidesToScroll)) !1 === a.options.fade && (o = a.currentSlide, !0 !== t ? a.animateSlide(r, function() {
                a.postSlide(o)
            }) : a.postSlide(o));
            else if (!1 === a.options.infinite && !0 === a.options.centerMode && (i < 0 || i > a.slideCount - a.options.slidesToScroll)) !1 === a.options.fade && (o = a.currentSlide, !0 !== t ? a.animateSlide(r, function() {
                a.postSlide(o)
            }) : a.postSlide(o));
            else {
                if (a.options.autoplay && clearInterval(a.autoPlayTimer), s = o < 0 ? a.slideCount % a.options.slidesToScroll != 0 ? a.slideCount - a.slideCount % a.options.slidesToScroll : a.slideCount + o : o >= a.slideCount ? a.slideCount % a.options.slidesToScroll != 0 ? 0 : o - a.slideCount : o, a.animating = !0, a.$slider.trigger("beforeChange", [a, a.currentSlide, s]), n = a.currentSlide, a.currentSlide = s, a.setSlideClasses(a.currentSlide), a.options.asNavFor && (l = (l = a.getNavTarget()).slick("getSlick")).slideCount <= l.options.slidesToShow && l.setSlideClasses(a.currentSlide), a.updateDots(), a.updateArrows(), !0 === a.options.fade) return !0 !== t ? (a.fadeSlideOut(n), a.fadeSlide(s, function() {
                    a.postSlide(s)
                })) : a.postSlide(s), void a.animateHeight();
                !0 !== t ? a.animateSlide(d, function() {
                    a.postSlide(s)
                }) : a.postSlide(s)
            }
    }, e.prototype.startLoad = function() {
        var i = this;
        !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && (i.$prevArrow.hide(), i.$nextArrow.hide()), !0 === i.options.dots && i.slideCount > i.options.slidesToShow && i.$dots.hide(), i.$slider.addClass("slick-loading")
    }, e.prototype.swipeDirection = function() {
        var i, e, t, o, s = this;
        return i = s.touchObject.startX - s.touchObject.curX, e = s.touchObject.startY - s.touchObject.curY, t = Math.atan2(e, i), (o = Math.round(180 * t / Math.PI)) < 0 && (o = 360 - Math.abs(o)), o <= 45 && o >= 0 ? !1 === s.options.rtl ? "left" : "right" : o <= 360 && o >= 315 ? !1 === s.options.rtl ? "left" : "right" : o >= 135 && o <= 225 ? !1 === s.options.rtl ? "right" : "left" : !0 === s.options.verticalSwiping ? o >= 35 && o <= 135 ? "down" : "up" : "vertical"
    }, e.prototype.swipeEnd = function(i) {
        var e, t, o = this;
        if (o.dragging = !1, o.swiping = !1, o.scrolling) return o.scrolling = !1, !1;
        if (o.interrupted = !1, o.shouldClick = !(o.touchObject.swipeLength > 10), void 0 === o.touchObject.curX) return !1;
        if (!0 === o.touchObject.edgeHit && o.$slider.trigger("edge", [o, o.swipeDirection()]), o.touchObject.swipeLength >= o.touchObject.minSwipe) {
            switch (t = o.swipeDirection()) {
                case "left":
                case "down":
                    e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide + o.getSlideCount()) : o.currentSlide + o.getSlideCount(), o.currentDirection = 0;
                    break;
                case "right":
                case "up":
                    e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide - o.getSlideCount()) : o.currentSlide - o.getSlideCount(), o.currentDirection = 1
            }
            "vertical" != t && (o.slideHandler(e), o.touchObject = {}, o.$slider.trigger("swipe", [o, t]))
        } else o.touchObject.startX !== o.touchObject.curX && (o.slideHandler(o.currentSlide), o.touchObject = {})
    }, e.prototype.swipeHandler = function(i) {
        var e = this;
        if (!(!1 === e.options.swipe || "ontouchend" in document && !1 === e.options.swipe || !1 === e.options.draggable && -1 !== i.type.indexOf("mouse"))) switch (e.touchObject.fingerCount = i.originalEvent && void 0 !== i.originalEvent.touches ? i.originalEvent.touches.length : 1, e.touchObject.minSwipe = e.listWidth / e.options.touchThreshold, !0 === e.options.verticalSwiping && (e.touchObject.minSwipe = e.listHeight / e.options.touchThreshold), i.data.action) {
            case "start":
                e.swipeStart(i);
                break;
            case "move":
                e.swipeMove(i);
                break;
            case "end":
                e.swipeEnd(i)
        }
    }, e.prototype.swipeMove = function(i) {
        var e, t, o, s, n, r, l = this;
        return n = void 0 !== i.originalEvent ? i.originalEvent.touches : null, !(!l.dragging || l.scrolling || n && 1 !== n.length) && (e = l.getLeft(l.currentSlide), l.touchObject.curX = void 0 !== n ? n[0].pageX : i.clientX, l.touchObject.curY = void 0 !== n ? n[0].pageY : i.clientY, l.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(l.touchObject.curX - l.touchObject.startX, 2))), r = Math.round(Math.sqrt(Math.pow(l.touchObject.curY - l.touchObject.startY, 2))), !l.options.verticalSwiping && !l.swiping && r > 4 ? (l.scrolling = !0, !1) : (!0 === l.options.verticalSwiping && (l.touchObject.swipeLength = r), t = l.swipeDirection(), void 0 !== i.originalEvent && l.touchObject.swipeLength > 4 && (l.swiping = !0, i.preventDefault()), s = (!1 === l.options.rtl ? 1 : -1) * (l.touchObject.curX > l.touchObject.startX ? 1 : -1), !0 === l.options.verticalSwiping && (s = l.touchObject.curY > l.touchObject.startY ? 1 : -1), o = l.touchObject.swipeLength, l.touchObject.edgeHit = !1, !1 === l.options.infinite && (0 === l.currentSlide && "right" === t || l.currentSlide >= l.getDotCount() && "left" === t) && (o = l.touchObject.swipeLength * l.options.edgeFriction, l.touchObject.edgeHit = !0), !1 === l.options.vertical ? l.swipeLeft = e + o * s : l.swipeLeft = e + o * (l.$list.height() / l.listWidth) * s, !0 === l.options.verticalSwiping && (l.swipeLeft = e + o * s), !0 !== l.options.fade && !1 !== l.options.touchMove && (!0 === l.animating ? (l.swipeLeft = null, !1) : void l.setCSS(l.swipeLeft))))
    }, e.prototype.swipeStart = function(i) {
        var e, t = this;
        if (t.interrupted = !0, 1 !== t.touchObject.fingerCount || t.slideCount <= t.options.slidesToShow) return t.touchObject = {}, !1;
        void 0 !== i.originalEvent && void 0 !== i.originalEvent.touches && (e = i.originalEvent.touches[0]), t.touchObject.startX = t.touchObject.curX = void 0 !== e ? e.pageX : i.clientX, t.touchObject.startY = t.touchObject.curY = void 0 !== e ? e.pageY : i.clientY, t.dragging = !0
    }, e.prototype.unfilterSlides = e.prototype.slickUnfilter = function() {
        var i = this;
        null !== i.$slidesCache && (i.unload(), i.$slideTrack.children(this.options.slide).detach(), i.$slidesCache.appendTo(i.$slideTrack), i.reinit())
    }, e.prototype.unload = function() {
        var e = this;
        i(".slick-cloned", e.$slider).remove(), e.$dots && e.$dots.remove(), e.$prevArrow && e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.remove(), e.$nextArrow && e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.remove(), e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "")
    }, e.prototype.unslick = function(i) {
        var e = this;
        e.$slider.trigger("unslick", [e, i]), e.destroy()
    }, e.prototype.updateArrows = function() {
        var i = this;
        Math.floor(i.options.slidesToShow / 2), !0 === i.options.arrows && i.slideCount > i.options.slidesToShow && !i.options.infinite && (i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"), 0 === i.currentSlide ? (i.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : i.currentSlide >= i.slideCount - i.options.slidesToShow && !1 === i.options.centerMode ? (i.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")) : i.currentSlide >= i.slideCount - 1 && !0 === i.options.centerMode && (i.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")))
    }, e.prototype.updateDots = function() {
        var i = this;
        null !== i.$dots && (i.$dots.find("li").removeClass("slick-active").end(), i.$dots.find("li").eq(Math.floor(i.currentSlide / i.options.slidesToScroll)).addClass("slick-active"))
    }, e.prototype.visibility = function() {
        var i = this;
        i.options.autoplay && (document[i.hidden] ? i.interrupted = !0 : i.interrupted = !1)
    }, i.fn.slick = function() {
        var i, t, o = this,
            s = arguments[0],
            n = Array.prototype.slice.call(arguments, 1),
            r = o.length;
        for (i = 0; i < r; i++)
            if ("object" == typeof s || void 0 === s ? o[i].slick = new e(o[i], s) : t = o[i].slick[s].apply(o[i].slick, n), void 0 !== t) return t;
        return o
    }
});;
(function($) {
    'use strict';
    $.fn.fitVids = function(options) {
        var settings = {
            customSelector: null,
            ignore: null
        };
        if (!document.getElementById('fit-vids-style')) {
            var head = document.head || document.getElementsByTagName('head')[0];
            var css = '.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}';
            var div = document.createElement("div");
            div.innerHTML = '<p>x</p><style id="fit-vids-style">' + css + '</style>';
            head.appendChild(div.childNodes[1]);
        }
        if (options) {
            $.extend(settings, options);
        }
        return this.each(function() {
            var selectors = ['iframe[src*="player.vimeo.com"]', 'iframe[src*="youtube.com"]', 'iframe[src*="youtube-nocookie.com"]', 'iframe[src*="kickstarter.com"][src*="video.html"]', 'object', 'embed'];
            if (settings.customSelector) {
                selectors.push(settings.customSelector);
            }
            var ignoreList = '.fitvidsignore';
            if (settings.ignore) {
                ignoreList = ignoreList + ', ' + settings.ignore;
            }
            var $allVideos = $(this).find(selectors.join(','));
            $allVideos = $allVideos.not('object object');
            $allVideos = $allVideos.not(ignoreList);
            $allVideos.each(function(count) {
                var $this = $(this);
                if ($this.parents(ignoreList).length > 0) {
                    return;
                }
                if (this.tagName.toLowerCase() === 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) {
                    return;
                }
                if ((!$this.css('height') && !$this.css('width')) && (isNaN($this.attr('height')) || isNaN($this.attr('width')))) {
                    $this.attr('height', 9);
                    $this.attr('width', 16);
                }
                var height = (this.tagName.toLowerCase() === 'object' || ($this.attr('height') && !isNaN(parseInt($this.attr('height'), 10)))) ? parseInt($this.attr('height'), 10) : $this.height(),
                    width = !isNaN(parseInt($this.attr('width'), 10)) ? parseInt($this.attr('width'), 10) : $this.width(),
                    aspectRatio = height / width;
                if (!$this.attr('id')) {
                    var videoID = 'fitvid' + count;
                    $this.attr('id', videoID);
                }
                $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100) + '%');
                $this.removeAttr('height').removeAttr('width');
            });
        });
    };
})(window.jQuery || window.Zepto);
(function(a) {
    a.fn.extend({
        customSelect: function(c) {
            if (typeof document.body.style.maxHeight === "undefined") {
                return this
            }
            var e = {
                    customClass: "customSelect",
                    mapClass: true,
                    mapStyle: true
                },
                c = a.extend(e, c),
                d = c.customClass,
                f = function(h, k) {
                    var g = h.find(":selected"),
                        j = k.children(":first"),
                        i = g.html() || "&nbsp;";
                    j.html(i);
                    if (g.attr("disabled")) {
                        k.addClass(b("DisabledOption"))
                    } else {
                        k.removeClass(b("DisabledOption"))
                    }
                    setTimeout(function() {
                        k.removeClass(b("Open"));
                        a(document).off("mouseup.customSelect")
                    }, 60)
                },
                b = function(g) {
                    return d + g
                };
            return this.each(function() {
                var g = a(this),
                    i = a("<span />").addClass(b("Inner")),
                    h = a("<span />");
                g.after(h.append(i));
                h.addClass(d);
                if (c.mapClass) {
                    h.addClass(g.attr("class"))
                }
                if (c.mapStyle) {
                    h.attr("style", g.attr("style"))
                }
                g.addClass("hasCustomSelect").on("render.customSelect", function() {
                    f(g, h);
                    g.css("width", "");
                    var k = parseInt(g.outerWidth(), 10) - (parseInt(h.outerWidth(), 10) - parseInt(h.width(), 10));
                    h.css({
                        display: "inline-block"
                    });
                    var j = h.outerHeight();
                    if (g.attr("disabled")) {
                        h.addClass(b("Disabled"))
                    } else {
                        h.removeClass(b("Disabled"))
                    }
                    i.css({
                        width: k,
                        display: "inline-block"
                    });
                    g.css({
                        "-webkit-appearance": "menulist-button",
                        width: h.outerWidth(),
                        position: "absolute",
                        opacity: 0,
                        height: j,
                        fontSize: h.css("font-size")
                    })
                }).on("change.customSelect", function() {
                    h.addClass(b("Changed"));
                    f(g, h)
                }).on("keyup.customSelect", function(j) {
                    if (!h.hasClass(b("Open"))) {
                        g.trigger("blur.customSelect");
                        g.trigger("focus.customSelect")
                    } else {
                        if (j.which == 13 || j.which == 27) {
                            f(g, h)
                        }
                    }
                }).on("mousedown.customSelect", function() {
                    h.removeClass(b("Changed"))
                }).on("mouseup.customSelect", function(j) {
                    if (!h.hasClass(b("Open"))) {
                        if (a("." + b("Open")).not(h).length > 0 && typeof InstallTrigger !== "undefined") {
                            g.trigger("focus.customSelect")
                        } else {
                            h.addClass(b("Open"));
                            j.stopPropagation();
                            a(document).one("mouseup.customSelect", function(k) {
                                if (k.target != g.get(0) && a.inArray(k.target, g.find("*").get()) < 0) {
                                    g.trigger("blur.customSelect")
                                } else {
                                    f(g, h)
                                }
                            })
                        }
                    }
                }).on("focus.customSelect", function() {
                    h.removeClass(b("Changed")).addClass(b("Focus"))
                }).on("blur.customSelect", function() {
                    h.removeClass(b("Focus") + " " + b("Open"))
                }).on("mouseenter.customSelect", function() {
                    h.addClass(b("Hover"))
                }).on("mouseleave.customSelect", function() {
                    h.removeClass(b("Hover"))
                }).trigger("render.customSelect")
            })
        }
    })
})(jQuery);
! function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : window.jQuery || window.Zepto)
}(function(a) {
    var b, c, d, e, f, g, h = "Close",
        i = "BeforeClose",
        j = "AfterClose",
        k = "BeforeAppend",
        l = "MarkupParse",
        m = "Open",
        n = "Change",
        o = "mfp",
        p = "." + o,
        q = "mfp-ready",
        r = "mfp-removing",
        s = "mfp-prevent-close",
        t = function() {},
        u = !!window.jQuery,
        v = a(window),
        w = function(a, c) {
            b.ev.on(o + a + p, c)
        },
        x = function(b, c, d, e) {
            var f = document.createElement("div");
            return f.className = "mfp-" + b, d && (f.innerHTML = d), e ? c && c.appendChild(f) : (f = a(f), c && f.appendTo(c)), f
        },
        y = function(c, d) {
            b.ev.triggerHandler(o + c, d), b.st.callbacks && (c = c.charAt(0).toLowerCase() + c.slice(1), b.st.callbacks[c] && b.st.callbacks[c].apply(b, a.isArray(d) ? d : [d]))
        },
        z = function(c) {
            return c === g && b.currTemplate.closeBtn || (b.currTemplate.closeBtn = a(b.st.closeMarkup.replace("%title%", b.st.tClose)), g = c), b.currTemplate.closeBtn
        },
        A = function() {
            a.magnificPopup.instance || (b = new t, b.init(), a.magnificPopup.instance = b)
        },
        B = function() {
            var a = document.createElement("p").style,
                b = ["ms", "O", "Moz", "Webkit"];
            if (void 0 !== a.transition) return !0;
            for (; b.length;)
                if (b.pop() + "Transition" in a) return !0;
            return !1
        };
    t.prototype = {
        constructor: t,
        init: function() {
            var c = navigator.appVersion;
            b.isLowIE = b.isIE8 = document.all && !document.addEventListener, b.isAndroid = /android/gi.test(c), b.isIOS = /iphone|ipad|ipod/gi.test(c), b.supportsTransition = B(), b.probablyMobile = b.isAndroid || b.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent), d = a(document), b.popupsCache = {}
        },
        open: function(c) {
            var e;
            if (c.isObj === !1) {
                b.items = c.items.toArray(), b.index = 0;
                var g, h = c.items;
                for (e = 0; e < h.length; e++)
                    if (g = h[e], g.parsed && (g = g.el[0]), g === c.el[0]) {
                        b.index = e;
                        break
                    }
            } else b.items = a.isArray(c.items) ? c.items : [c.items], b.index = c.index || 0;
            if (b.isOpen) return void b.updateItemHTML();
            b.types = [], f = "", c.mainEl && c.mainEl.length ? b.ev = c.mainEl.eq(0) : b.ev = d, c.key ? (b.popupsCache[c.key] || (b.popupsCache[c.key] = {}), b.currTemplate = b.popupsCache[c.key]) : b.currTemplate = {}, b.st = a.extend(!0, {}, a.magnificPopup.defaults, c), b.fixedContentPos = "auto" === b.st.fixedContentPos ? !b.probablyMobile : b.st.fixedContentPos, b.st.modal && (b.st.closeOnContentClick = !1, b.st.closeOnBgClick = !1, b.st.showCloseBtn = !1, b.st.enableEscapeKey = !1), b.bgOverlay || (b.bgOverlay = x("bg").on("click" + p, function() {
                b.close()
            }), b.wrap = x("wrap").attr("tabindex", -1).on("click" + p, function(a) {
                b._checkIfClose(a.target) && b.close()
            }), b.container = x("container", b.wrap)), b.contentContainer = x("content"), b.st.preloader && (b.preloader = x("preloader", b.container, b.st.tLoading));
            var i = a.magnificPopup.modules;
            for (e = 0; e < i.length; e++) {
                var j = i[e];
                j = j.charAt(0).toUpperCase() + j.slice(1), b["init" + j].call(b)
            }
            y("BeforeOpen"), b.st.showCloseBtn && (b.st.closeBtnInside ? (w(l, function(a, b, c, d) {
                c.close_replaceWith = z(d.type)
            }), f += " mfp-close-btn-in") : b.wrap.append(z())), b.st.alignTop && (f += " mfp-align-top"), b.fixedContentPos ? b.wrap.css({
                overflow: b.st.overflowY,
                overflowX: "hidden",
                overflowY: b.st.overflowY
            }) : b.wrap.css({
                top: v.scrollTop(),
                position: "absolute"
            }), (b.st.fixedBgPos === !1 || "auto" === b.st.fixedBgPos && !b.fixedContentPos) && b.bgOverlay.css({
                height: d.height(),
                position: "absolute"
            }), b.st.enableEscapeKey && d.on("keyup" + p, function(a) {
                27 === a.keyCode && b.close()
            }), v.on("resize" + p, function() {
                b.updateSize()
            }), b.st.closeOnContentClick || (f += " mfp-auto-cursor"), f && b.wrap.addClass(f);
            var k = b.wH = v.height(),
                n = {};
            if (b.fixedContentPos && b._hasScrollBar(k)) {
                var o = b._getScrollbarSize();
                o && (n.marginRight = o)
            }
            b.fixedContentPos && (b.isIE7 ? a("body, html").css("overflow", "hidden") : n.overflow = "hidden");
            var r = b.st.mainClass;
            return b.isIE7 && (r += " mfp-ie7"), r && b._addClassToMFP(r), b.updateItemHTML(), y("BuildControls"), a("html").css(n), b.bgOverlay.add(b.wrap).prependTo(b.st.prependTo || a(document.body)), b._lastFocusedEl = document.activeElement, setTimeout(function() {
                b.content ? (b._addClassToMFP(q), b._setFocus()) : b.bgOverlay.addClass(q), d.on("focusin" + p, b._onFocusIn)
            }, 16), b.isOpen = !0, b.updateSize(k), y(m), c
        },
        close: function() {
            b.isOpen && (y(i), b.isOpen = !1, b.st.removalDelay && !b.isLowIE && b.supportsTransition ? (b._addClassToMFP(r), setTimeout(function() {
                b._close()
            }, b.st.removalDelay)) : b._close())
        },
        _close: function() {
            y(h);
            var c = r + " " + q + " ";
            if (b.bgOverlay.detach(), b.wrap.detach(), b.container.empty(), b.st.mainClass && (c += b.st.mainClass + " "), b._removeClassFromMFP(c), b.fixedContentPos) {
                var e = {
                    marginRight: ""
                };
                b.isIE7 ? a("body, html").css("overflow", "") : e.overflow = "", a("html").css(e)
            }
            d.off("keyup" + p + " focusin" + p), b.ev.off(p), b.wrap.attr("class", "mfp-wrap").removeAttr("style"), b.bgOverlay.attr("class", "mfp-bg"), b.container.attr("class", "mfp-container"), !b.st.showCloseBtn || b.st.closeBtnInside && b.currTemplate[b.currItem.type] !== !0 || b.currTemplate.closeBtn && b.currTemplate.closeBtn.detach(), b.st.autoFocusLast && b._lastFocusedEl && a(b._lastFocusedEl).focus(), b.currItem = null, b.content = null, b.currTemplate = null, b.prevHeight = 0, y(j)
        },
        updateSize: function(a) {
            if (b.isIOS) {
                var c = document.documentElement.clientWidth / window.innerWidth,
                    d = window.innerHeight * c;
                b.wrap.css("height", d), b.wH = d
            } else b.wH = a || v.height();
            b.fixedContentPos || b.wrap.css("height", b.wH), y("Resize")
        },
        updateItemHTML: function() {
            var c = b.items[b.index];
            b.contentContainer.detach(), b.content && b.content.detach(), c.parsed || (c = b.parseEl(b.index));
            var d = c.type;
            if (y("BeforeChange", [b.currItem ? b.currItem.type : "", d]), b.currItem = c, !b.currTemplate[d]) {
                var f = b.st[d] ? b.st[d].markup : !1;
                y("FirstMarkupParse", f), f ? b.currTemplate[d] = a(f) : b.currTemplate[d] = !0
            }
            e && e !== c.type && b.container.removeClass("mfp-" + e + "-holder");
            var g = b["get" + d.charAt(0).toUpperCase() + d.slice(1)](c, b.currTemplate[d]);
            b.appendContent(g, d), c.preloaded = !0, y(n, c), e = c.type, b.container.prepend(b.contentContainer), y("AfterChange")
        },
        appendContent: function(a, c) {
            b.content = a, a ? b.st.showCloseBtn && b.st.closeBtnInside && b.currTemplate[c] === !0 ? b.content.find(".mfp-close").length || b.content.append(z()) : b.content = a : b.content = "", y(k), b.container.addClass("mfp-" + c + "-holder"), b.contentContainer.append(b.content)
        },
        parseEl: function(c) {
            var d, e = b.items[c];
            if (e.tagName ? e = {
                el: a(e)
            } : (d = e.type, e = {
                data: e,
                src: e.src
            }), e.el) {
                for (var f = b.types, g = 0; g < f.length; g++)
                    if (e.el.hasClass("mfp-" + f[g])) {
                        d = f[g];
                        break
                    } e.src = e.el.attr("data-mfp-src"), e.src || (e.src = e.el.attr("href"))
            }
            return e.type = d || b.st.type || "inline", e.index = c, e.parsed = !0, b.items[c] = e, y("ElementParse", e), b.items[c]
        },
        addGroup: function(a, c) {
            var d = function(d) {
                d.mfpEl = this, b._openClick(d, a, c)
            };
            c || (c = {});
            var e = "click.magnificPopup";
            c.mainEl = a, c.items ? (c.isObj = !0, a.off(e).on(e, d)) : (c.isObj = !1, c.delegate ? a.off(e).on(e, c.delegate, d) : (c.items = a, a.off(e).on(e, d)))
        },
        _openClick: function(c, d, e) {
            var f = void 0 !== e.midClick ? e.midClick : a.magnificPopup.defaults.midClick;
            if (f || !(2 === c.which || c.ctrlKey || c.metaKey || c.altKey || c.shiftKey)) {
                var g = void 0 !== e.disableOn ? e.disableOn : a.magnificPopup.defaults.disableOn;
                if (g)
                    if (a.isFunction(g)) {
                        if (!g.call(b)) return !0
                    } else if (v.width() < g) return !0;
                c.type && (c.preventDefault(), b.isOpen && c.stopPropagation()), e.el = a(c.mfpEl), e.delegate && (e.items = d.find(e.delegate)), b.open(e)
            }
        },
        updateStatus: function(a, d) {
            if (b.preloader) {
                c !== a && b.container.removeClass("mfp-s-" + c), d || "loading" !== a || (d = b.st.tLoading);
                var e = {
                    status: a,
                    text: d
                };
                y("UpdateStatus", e), a = e.status, d = e.text, b.preloader.html(d), b.preloader.find("a").on("click", function(a) {
                    a.stopImmediatePropagation()
                }), b.container.addClass("mfp-s-" + a), c = a
            }
        },
        _checkIfClose: function(c) {
            if (!a(c).hasClass(s)) {
                var d = b.st.closeOnContentClick,
                    e = b.st.closeOnBgClick;
                if (d && e) return !0;
                if (!b.content || a(c).hasClass("mfp-close") || b.preloader && c === b.preloader[0]) return !0;
                if (c === b.content[0] || a.contains(b.content[0], c)) {
                    if (d) return !0
                } else if (e && a.contains(document, c)) return !0;
                return !1
            }
        },
        _addClassToMFP: function(a) {
            b.bgOverlay.addClass(a), b.wrap.addClass(a)
        },
        _removeClassFromMFP: function(a) {
            this.bgOverlay.removeClass(a), b.wrap.removeClass(a)
        },
        _hasScrollBar: function(a) {
            return (b.isIE7 ? d.height() : document.body.scrollHeight) > (a || v.height())
        },
        _setFocus: function() {
            (b.st.focus ? b.content.find(b.st.focus).eq(0) : b.wrap).focus()
        },
        _onFocusIn: function(c) {
            return c.target === b.wrap[0] || a.contains(b.wrap[0], c.target) ? void 0 : (b._setFocus(), !1)
        },
        _parseMarkup: function(b, c, d) {
            var e;
            d.data && (c = a.extend(d.data, c)), y(l, [b, c, d]), a.each(c, function(c, d) {
                if (void 0 === d || d === !1) return !0;
                if (e = c.split("_"), e.length > 1) {
                    var f = b.find(p + "-" + e[0]);
                    if (f.length > 0) {
                        var g = e[1];
                        "replaceWith" === g ? f[0] !== d[0] && f.replaceWith(d) : "img" === g ? f.is("img") ? f.attr("src", d) : f.replaceWith(a("<img>").attr("src", d).attr("class", f.attr("class"))) : f.attr(e[1], d)
                    }
                } else b.find(p + "-" + c).html(d)
            })
        },
        _getScrollbarSize: function() {
            if (void 0 === b.scrollbarSize) {
                var a = document.createElement("div");
                a.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;", document.body.appendChild(a), b.scrollbarSize = a.offsetWidth - a.clientWidth, document.body.removeChild(a)
            }
            return b.scrollbarSize
        }
    }, a.magnificPopup = {
        instance: null,
        proto: t.prototype,
        modules: [],
        open: function(b, c) {
            return A(), b = b ? a.extend(!0, {}, b) : {}, b.isObj = !0, b.index = c || 0, this.instance.open(b)
        },
        close: function() {
            return a.magnificPopup.instance && a.magnificPopup.instance.close()
        },
        registerModule: function(b, c) {
            c.options && (a.magnificPopup.defaults[b] = c.options), a.extend(this.proto, c.proto), this.modules.push(b)
        },
        defaults: {
            disableOn: 0,
            key: null,
            midClick: !1,
            mainClass: "",
            preloader: !0,
            focus: "",
            closeOnContentClick: !1,
            closeOnBgClick: !0,
            closeBtnInside: !0,
            showCloseBtn: !0,
            enableEscapeKey: !0,
            modal: !1,
            alignTop: !1,
            removalDelay: 0,
            prependTo: null,
            fixedContentPos: "auto",
            fixedBgPos: "auto",
            overflowY: "auto",
            closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',
            tClose: "Close (Esc)",
            tLoading: "Loading...",
            autoFocusLast: !0
        }
    }, a.fn.magnificPopup = function(c) {
        A();
        var d = a(this);
        if ("string" == typeof c)
            if ("open" === c) {
                var e, f = u ? d.data("magnificPopup") : d[0].magnificPopup,
                    g = parseInt(arguments[1], 10) || 0;
                f.items ? e = f.items[g] : (e = d, f.delegate && (e = e.find(f.delegate)), e = e.eq(g)), b._openClick({
                    mfpEl: e
                }, d, f)
            } else b.isOpen && b[c].apply(b, Array.prototype.slice.call(arguments, 1));
        else c = a.extend(!0, {}, c), u ? d.data("magnificPopup", c) : d[0].magnificPopup = c, b.addGroup(d, c);
        return d
    };
    var C, D, E, F = "inline",
        G = function() {
            E && (D.after(E.addClass(C)).detach(), E = null)
        };
    a.magnificPopup.registerModule(F, {
        options: {
            hiddenClass: "hide",
            markup: "",
            tNotFound: "Content not found"
        },
        proto: {
            initInline: function() {
                b.types.push(F), w(h + "." + F, function() {
                    G()
                })
            },
            getInline: function(c, d) {
                if (G(), c.src) {
                    var e = b.st.inline,
                        f = a(c.src);
                    if (f.length) {
                        var g = f[0].parentNode;
                        g && g.tagName && (D || (C = e.hiddenClass, D = x(C), C = "mfp-" + C), E = f.after(D).detach().removeClass(C)), b.updateStatus("ready")
                    } else b.updateStatus("error", e.tNotFound), f = a("<div>");
                    return c.inlineElement = f, f
                }
                return b.updateStatus("ready"), b._parseMarkup(d, {}, c), d
            }
        }
    });
    var H, I = "ajax",
        J = function() {
            H && a(document.body).removeClass(H)
        },
        K = function() {
            J(), b.req && b.req.abort()
        };
    a.magnificPopup.registerModule(I, {
        options: {
            settings: null,
            cursor: "mfp-ajax-cur",
            tError: '<a href="%url%">The content</a> could not be loaded.'
        },
        proto: {
            initAjax: function() {
                b.types.push(I), H = b.st.ajax.cursor, w(h + "." + I, K), w("BeforeChange." + I, K)
            },
            getAjax: function(c) {
                H && a(document.body).addClass(H), b.updateStatus("loading");
                var d = a.extend({
                    url: c.src,
                    success: function(d, e, f) {
                        var g = {
                            data: d,
                            xhr: f
                        };
                        y("ParseAjax", g), b.appendContent(a(g.data), I), c.finished = !0, J(), b._setFocus(), setTimeout(function() {
                            b.wrap.addClass(q)
                        }, 16), b.updateStatus("ready"), y("AjaxContentAdded")
                    },
                    error: function() {
                        J(), c.finished = c.loadError = !0, b.updateStatus("error", b.st.ajax.tError.replace("%url%", c.src))
                    }
                }, b.st.ajax.settings);
                return b.req = a.ajax(d), ""
            }
        }
    });
    var L, M = function(c) {
        if (c.data && void 0 !== c.data.title) return c.data.title;
        var d = b.st.image.titleSrc;
        if (d) {
            if (a.isFunction(d)) return d.call(b, c);
            if (c.el) return c.el.attr(d) || ""
        }
        return ""
    };
    a.magnificPopup.registerModule("image", {
        options: {
            markup: '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image</a> could not be loaded.'
        },
        proto: {
            initImage: function() {
                var c = b.st.image,
                    d = ".image";
                b.types.push("image"), w(m + d, function() {
                    "image" === b.currItem.type && c.cursor && a(document.body).addClass(c.cursor)
                }), w(h + d, function() {
                    c.cursor && a(document.body).removeClass(c.cursor), v.off("resize" + p)
                }), w("Resize" + d, b.resizeImage), b.isLowIE && w("AfterChange", b.resizeImage)
            },
            resizeImage: function() {
                var a = b.currItem;
                if (a && a.img && b.st.image.verticalFit) {
                    var c = 0;
                    b.isLowIE && (c = parseInt(a.img.css("padding-top"), 10) + parseInt(a.img.css("padding-bottom"), 10)), a.img.css("max-height", b.wH - c)
                }
            },
            _onImageHasSize: function(a) {
                a.img && (a.hasSize = !0, L && clearInterval(L), a.isCheckingImgSize = !1, y("ImageHasSize", a), a.imgHidden && (b.content && b.content.removeClass("mfp-loading"), a.imgHidden = !1))
            },
            findImageSize: function(a) {
                var c = 0,
                    d = a.img[0],
                    e = function(f) {
                        L && clearInterval(L), L = setInterval(function() {
                            return d.naturalWidth > 0 ? void b._onImageHasSize(a) : (c > 200 && clearInterval(L), c++, void(3 === c ? e(10) : 40 === c ? e(50) : 100 === c && e(500)))
                        }, f)
                    };
                e(1)
            },
            getImage: function(c, d) {
                var e = 0,
                    f = function() {
                        c && (c.img[0].complete ? (c.img.off(".mfploader"), c === b.currItem && (b._onImageHasSize(c), b.updateStatus("ready")), c.hasSize = !0, c.loaded = !0, y("ImageLoadComplete")) : (e++, 200 > e ? setTimeout(f, 100) : g()))
                    },
                    g = function() {
                        c && (c.img.off(".mfploader"), c === b.currItem && (b._onImageHasSize(c), b.updateStatus("error", h.tError.replace("%url%", c.src))), c.hasSize = !0, c.loaded = !0, c.loadError = !0)
                    },
                    h = b.st.image,
                    i = d.find(".mfp-img");
                if (i.length) {
                    var j = document.createElement("img");
                    j.className = "mfp-img", c.el && c.el.find("img").length && (j.alt = c.el.find("img").attr("alt")), c.img = a(j).on("load.mfploader", f).on("error.mfploader", g), j.src = c.src, i.is("img") && (c.img = c.img.clone()), j = c.img[0], j.naturalWidth > 0 ? c.hasSize = !0 : j.width || (c.hasSize = !1)
                }
                return b._parseMarkup(d, {
                    title: M(c),
                    img_replaceWith: c.img
                }, c), b.resizeImage(), c.hasSize ? (L && clearInterval(L), c.loadError ? (d.addClass("mfp-loading"), b.updateStatus("error", h.tError.replace("%url%", c.src))) : (d.removeClass("mfp-loading"), b.updateStatus("ready")), d) : (b.updateStatus("loading"), c.loading = !0, c.hasSize || (c.imgHidden = !0, d.addClass("mfp-loading"), b.findImageSize(c)), d)
            }
        }
    });
    var N, O = function() {
        return void 0 === N && (N = void 0 !== document.createElement("p").style.MozTransform), N
    };
    a.magnificPopup.registerModule("zoom", {
        options: {
            enabled: !1,
            easing: "ease-in-out",
            duration: 300,
            opener: function(a) {
                return a.is("img") ? a : a.find("img")
            }
        },
        proto: {
            initZoom: function() {
                var a, c = b.st.zoom,
                    d = ".zoom";
                if (c.enabled && b.supportsTransition) {
                    var e, f, g = c.duration,
                        j = function(a) {
                            var b = a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                                d = "all " + c.duration / 1e3 + "s " + c.easing,
                                e = {
                                    position: "fixed",
                                    zIndex: 9999,
                                    left: 0,
                                    top: 0,
                                    "-webkit-backface-visibility": "hidden"
                                },
                                f = "transition";
                            return e["-webkit-" + f] = e["-moz-" + f] = e["-o-" + f] = e[f] = d, b.css(e), b
                        },
                        k = function() {
                            b.content.css("visibility", "visible")
                        };
                    w("BuildControls" + d, function() {
                        if (b._allowZoom()) {
                            if (clearTimeout(e), b.content.css("visibility", "hidden"), a = b._getItemToZoom(), !a) return void k();
                            f = j(a), f.css(b._getOffset()), b.wrap.append(f), e = setTimeout(function() {
                                f.css(b._getOffset(!0)), e = setTimeout(function() {
                                    k(), setTimeout(function() {
                                        f.remove(), a = f = null, y("ZoomAnimationEnded")
                                    }, 16)
                                }, g)
                            }, 16)
                        }
                    }), w(i + d, function() {
                        if (b._allowZoom()) {
                            if (clearTimeout(e), b.st.removalDelay = g, !a) {
                                if (a = b._getItemToZoom(), !a) return;
                                f = j(a)
                            }
                            f.css(b._getOffset(!0)), b.wrap.append(f), b.content.css("visibility", "hidden"), setTimeout(function() {
                                f.css(b._getOffset())
                            }, 16)
                        }
                    }), w(h + d, function() {
                        b._allowZoom() && (k(), f && f.remove(), a = null)
                    })
                }
            },
            _allowZoom: function() {
                return "image" === b.currItem.type
            },
            _getItemToZoom: function() {
                return b.currItem.hasSize ? b.currItem.img : !1
            },
            _getOffset: function(c) {
                var d;
                d = c ? b.currItem.img : b.st.zoom.opener(b.currItem.el || b.currItem);
                var e = d.offset(),
                    f = parseInt(d.css("padding-top"), 10),
                    g = parseInt(d.css("padding-bottom"), 10);
                e.top -= a(window).scrollTop() - f;
                var h = {
                    width: d.width(),
                    height: (u ? d.innerHeight() : d[0].offsetHeight) - g - f
                };
                return O() ? h["-moz-transform"] = h.transform = "translate(" + e.left + "px," + e.top + "px)" : (h.left = e.left, h.top = e.top), h
            }
        }
    });
    var P = "iframe",
        Q = "//about:blank",
        R = function(a) {
            if (b.currTemplate[P]) {
                var c = b.currTemplate[P].find("iframe");
                c.length && (a || (c[0].src = Q), b.isIE8 && c.css("display", a ? "block" : "none"))
            }
        };
    a.magnificPopup.registerModule(P, {
        options: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
            srcAction: "iframe_src",
            patterns: {
                youtube: {
                    index: "youtube.com",
                    id: "v=",
                    src: "//www.youtube.com/embed/%id%?autoplay=1"
                },
                vimeo: {
                    index: "vimeo.com/",
                    id: "/",
                    src: "//player.vimeo.com/video/%id%?autoplay=1"
                },
                gmaps: {
                    index: "//maps.google.",
                    src: "%id%&output=embed"
                }
            }
        },
        proto: {
            initIframe: function() {
                b.types.push(P), w("BeforeChange", function(a, b, c) {
                    b !== c && (b === P ? R() : c === P && R(!0))
                }), w(h + "." + P, function() {
                    R()
                })
            },
            getIframe: function(c, d) {
                var e = c.src,
                    f = b.st.iframe;
                a.each(f.patterns, function() {
                    return e.indexOf(this.index) > -1 ? (this.id && (e = "string" == typeof this.id ? e.substr(e.lastIndexOf(this.id) + this.id.length, e.length) : this.id.call(this, e)), e = this.src.replace("%id%", e), !1) : void 0
                });
                var g = {};
                return f.srcAction && (g[f.srcAction] = e), b._parseMarkup(d, g, c), b.updateStatus("ready"), d
            }
        }
    });
    var S = function(a) {
            var c = b.items.length;
            return a > c - 1 ? a - c : 0 > a ? c + a : a
        },
        T = function(a, b, c) {
            return a.replace(/%curr%/gi, b + 1).replace(/%total%/gi, c)
        };
    a.magnificPopup.registerModule("gallery", {
        options: {
            enabled: !1,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            preload: [0, 2],
            navigateByImgClick: !0,
            arrows: !0,
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: "%curr% of %total%"
        },
        proto: {
            initGallery: function() {
                var c = b.st.gallery,
                    e = ".mfp-gallery";
                return b.direction = !0, c && c.enabled ? (f += " mfp-gallery", w(m + e, function() {
                    c.navigateByImgClick && b.wrap.on("click" + e, ".mfp-img", function() {
                        return b.items.length > 1 ? (b.next(), !1) : void 0
                    }), d.on("keydown" + e, function(a) {
                        37 === a.keyCode ? b.prev() : 39 === a.keyCode && b.next()
                    })
                }), w("UpdateStatus" + e, function(a, c) {
                    c.text && (c.text = T(c.text, b.currItem.index, b.items.length))
                }), w(l + e, function(a, d, e, f) {
                    var g = b.items.length;
                    e.counter = g > 1 ? T(c.tCounter, f.index, g) : ""
                }), w("BuildControls" + e, function() {
                    if (b.items.length > 1 && c.arrows && !b.arrowLeft) {
                        var d = c.arrowMarkup,
                            e = b.arrowLeft = a(d.replace(/%title%/gi, c.tPrev).replace(/%dir%/gi, "left")).addClass(s),
                            f = b.arrowRight = a(d.replace(/%title%/gi, c.tNext).replace(/%dir%/gi, "right")).addClass(s);
                        e.click(function() {
                            b.prev()
                        }), f.click(function() {
                            b.next()
                        }), b.container.append(e.add(f))
                    }
                }), w(n + e, function() {
                    b._preloadTimeout && clearTimeout(b._preloadTimeout), b._preloadTimeout = setTimeout(function() {
                        b.preloadNearbyImages(), b._preloadTimeout = null
                    }, 16)
                }), void w(h + e, function() {
                    d.off(e), b.wrap.off("click" + e), b.arrowRight = b.arrowLeft = null
                })) : !1
            },
            next: function() {
                b.direction = !0, b.index = S(b.index + 1), b.updateItemHTML()
            },
            prev: function() {
                b.direction = !1, b.index = S(b.index - 1), b.updateItemHTML()
            },
            goTo: function(a) {
                b.direction = a >= b.index, b.index = a, b.updateItemHTML()
            },
            preloadNearbyImages: function() {
                var a, c = b.st.gallery.preload,
                    d = Math.min(c[0], b.items.length),
                    e = Math.min(c[1], b.items.length);
                for (a = 1; a <= (b.direction ? e : d); a++) b._preloadItem(b.index + a);
                for (a = 1; a <= (b.direction ? d : e); a++) b._preloadItem(b.index - a)
            },
            _preloadItem: function(c) {
                if (c = S(c), !b.items[c].preloaded) {
                    var d = b.items[c];
                    d.parsed || (d = b.parseEl(c)), y("LazyLoad", d), "image" === d.type && (d.img = a('<img class="mfp-img" />').on("load.mfploader", function() {
                        d.hasSize = !0
                    }).on("error.mfploader", function() {
                        d.hasSize = !0, d.loadError = !0, y("LazyLoadError", d)
                    }).attr("src", d.src)), d.preloaded = !0
                }
            }
        }
    });
    var U = "retina";
    a.magnificPopup.registerModule(U, {
        options: {
            replaceSrc: function(a) {
                return a.src.replace(/\.\w+$/, function(a) {
                    return "@2x" + a
                })
            },
            ratio: 1
        },
        proto: {
            initRetina: function() {
                if (window.devicePixelRatio > 1) {
                    var a = b.st.retina,
                        c = a.ratio;
                    c = isNaN(c) ? c() : c, c > 1 && (w("ImageHasSize." + U, function(a, b) {
                        b.img.css({
                            "max-width": b.img[0].naturalWidth / c,
                            width: "100%"
                        })
                    }), w("ElementParse." + U, function(b, d) {
                        d.src = a.replaceSrc(d, c)
                    }))
                }
            }
        }
    }), A()
});
! function(t, i, e, s) {
    function o(i, e) {
        var h = this;
        "object" == typeof e && (delete e.refresh, delete e.render, t.extend(this, e)), this.$element = t(i), !this.imageSrc && this.$element.is("img") && (this.imageSrc = this.$element.attr("src"));
        var r = (this.position + "").toLowerCase().match(/\S+/g) || [];
        if (r.length < 1 && r.push("center"), 1 == r.length && r.push(r[0]), "top" != r[0] && "bottom" != r[0] && "left" != r[1] && "right" != r[1] || (r = [r[1], r[0]]), this.positionX !== s && (r[0] = this.positionX.toLowerCase()), this.positionY !== s && (r[1] = this.positionY.toLowerCase()), h.positionX = r[0], h.positionY = r[1], "left" != this.positionX && "right" != this.positionX && (isNaN(parseInt(this.positionX)) ? this.positionX = "center" : this.positionX = parseInt(this.positionX)), "top" != this.positionY && "bottom" != this.positionY && (isNaN(parseInt(this.positionY)) ? this.positionY = "center" : this.positionY = parseInt(this.positionY)), this.position = this.positionX + (isNaN(this.positionX) ? "" : "px") + " " + this.positionY + (isNaN(this.positionY) ? "" : "px"), navigator.userAgent.match(/(iPod|iPhone|iPad)/)) return this.imageSrc && this.iosFix && !this.$element.is("img") && this.$element.css({
            backgroundImage: 'url("' + this.imageSrc + '")',
            backgroundSize: "cover",
            backgroundPosition: this.position
        }), this;
        if (navigator.userAgent.match(/(Android)/)) return this.imageSrc && this.androidFix && !this.$element.is("img") && this.$element.css({
            backgroundImage: 'url("' + this.imageSrc + '")',
            backgroundSize: "cover",
            backgroundPosition: this.position
        }), this;
        this.$mirror = t("<div />").prependTo(this.mirrorContainer);
        var a = this.$element.find(">.parallax-slider"),
            n = !1;
        0 == a.length ? this.$slider = t("<img />").prependTo(this.$mirror) : (this.$slider = a.prependTo(this.$mirror), n = !0), this.$mirror.addClass("parallax-mirror").css({
            visibility: "hidden",
            zIndex: this.zIndex,
            position: "fixed",
            top: 0,
            left: 0,
            overflow: "hidden"
        }), this.$slider.addClass("parallax-slider").one("load", function() {
            h.naturalHeight && h.naturalWidth || (h.naturalHeight = this.naturalHeight || this.height || 1, h.naturalWidth = this.naturalWidth || this.width || 1), h.aspectRatio = h.naturalWidth / h.naturalHeight, o.isSetup || o.setup(), o.sliders.push(h), o.isFresh = !1, o.requestRender()
        }), n || (this.$slider[0].src = this.imageSrc), (this.naturalHeight && this.naturalWidth || this.$slider[0].complete || a.length > 0) && this.$slider.trigger("load")
    }! function() {
        for (var t = 0, e = ["ms", "moz", "webkit", "o"], s = 0; s < e.length && !i.requestAnimationFrame; ++s) i.requestAnimationFrame = i[e[s] + "RequestAnimationFrame"], i.cancelAnimationFrame = i[e[s] + "CancelAnimationFrame"] || i[e[s] + "CancelRequestAnimationFrame"];
        i.requestAnimationFrame || (i.requestAnimationFrame = function(e) {
            var s = (new Date).getTime(),
                o = Math.max(0, 16 - (s - t)),
                h = i.setTimeout(function() {
                    e(s + o)
                }, o);
            return t = s + o, h
        }), i.cancelAnimationFrame || (i.cancelAnimationFrame = function(t) {
            clearTimeout(t)
        })
    }(), t.extend(o.prototype, {
        speed: .2,
        bleed: 0,
        zIndex: -100,
        iosFix: !0,
        androidFix: !0,
        position: "center",
        overScrollFix: !1,
        mirrorContainer: "body",
        refresh: function() {
            this.boxWidth = this.$element.outerWidth(), this.boxHeight = this.$element.outerHeight() + 2 * this.bleed, this.boxOffsetTop = this.$element.offset().top - this.bleed, this.boxOffsetLeft = this.$element.offset().left, this.boxOffsetBottom = this.boxOffsetTop + this.boxHeight;
            var t, i = o.winHeight,
                e = o.docHeight,
                s = Math.min(this.boxOffsetTop, e - i),
                h = Math.max(this.boxOffsetTop + this.boxHeight - i, 0),
                r = this.boxHeight + (s - h) * (1 - this.speed) | 0,
                a = (this.boxOffsetTop - s) * (1 - this.speed) | 0;
            r * this.aspectRatio >= this.boxWidth ? (this.imageWidth = r * this.aspectRatio | 0, this.imageHeight = r, this.offsetBaseTop = a, t = this.imageWidth - this.boxWidth, "left" == this.positionX ? this.offsetLeft = 0 : "right" == this.positionX ? this.offsetLeft = -t : isNaN(this.positionX) ? this.offsetLeft = -t / 2 | 0 : this.offsetLeft = Math.max(this.positionX, -t)) : (this.imageWidth = this.boxWidth, this.imageHeight = this.boxWidth / this.aspectRatio | 0, this.offsetLeft = 0, t = this.imageHeight - r, "top" == this.positionY ? this.offsetBaseTop = a : "bottom" == this.positionY ? this.offsetBaseTop = a - t : isNaN(this.positionY) ? this.offsetBaseTop = a - t / 2 | 0 : this.offsetBaseTop = a + Math.max(this.positionY, -t))
        },
        render: function() {
            var t = o.scrollTop,
                i = o.scrollLeft,
                e = this.overScrollFix ? o.overScroll : 0,
                s = t + o.winHeight;
            this.boxOffsetBottom > t && this.boxOffsetTop <= s ? (this.visibility = "visible", this.mirrorTop = this.boxOffsetTop - t, this.mirrorLeft = this.boxOffsetLeft - i, this.offsetTop = this.offsetBaseTop - this.mirrorTop * (1 - this.speed)) : this.visibility = "hidden", this.$mirror.css({
                transform: "translate3d(" + this.mirrorLeft + "px, " + (this.mirrorTop - e) + "px, 0px)",
                visibility: this.visibility,
                height: this.boxHeight,
                width: this.boxWidth
            }), this.$slider.css({
                transform: "translate3d(" + this.offsetLeft + "px, " + this.offsetTop + "px, 0px)",
                position: "absolute",
                height: this.imageHeight,
                width: this.imageWidth,
                maxWidth: "none"
            })
        }
    }), t.extend(o, {
        scrollTop: 0,
        scrollLeft: 0,
        winHeight: 0,
        winWidth: 0,
        docHeight: 1 << 30,
        docWidth: 1 << 30,
        sliders: [],
        isReady: !1,
        isFresh: !1,
        isBusy: !1,
        setup: function() {
            function s() {
                if (p == i.pageYOffset) return i.requestAnimationFrame(s), !1;
                p = i.pageYOffset, h.render(), i.requestAnimationFrame(s)
            }
            if (!this.isReady) {
                var h = this,
                    r = t(e),
                    a = t(i),
                    n = function() {
                        o.winHeight = a.height(), o.winWidth = a.width(), o.docHeight = r.height(), o.docWidth = r.width()
                    },
                    l = function() {
                        var t = a.scrollTop(),
                            i = o.docHeight - o.winHeight,
                            e = o.docWidth - o.winWidth;
                        o.scrollTop = Math.max(0, Math.min(i, t)), o.scrollLeft = Math.max(0, Math.min(e, a.scrollLeft())), o.overScroll = Math.max(t - i, Math.min(t, 0))
                    };
                a.on("resize.px.parallax load.px.parallax", function() {
                    n(), h.refresh(), o.isFresh = !1, o.requestRender()
                }).on("scroll.px.parallax load.px.parallax", function() {
                    l(), o.requestRender()
                }), n(), l(), this.isReady = !0;
                var p = -1;
                s()
            }
        },
        configure: function(i) {
            "object" == typeof i && (delete i.refresh, delete i.render, t.extend(this.prototype, i))
        },
        refresh: function() {
            t.each(this.sliders, function() {
                this.refresh()
            }), this.isFresh = !0
        },
        render: function() {
            this.isFresh || this.refresh(), t.each(this.sliders, function() {
                this.render()
            })
        },
        requestRender: function() {
            var t = this;
            t.render(), t.isBusy = !1
        },
        destroy: function(e) {
            var s, h = t(e).data("px.parallax");
            for (h.$mirror.remove(), s = 0; s < this.sliders.length; s += 1) this.sliders[s] == h && this.sliders.splice(s, 1);
            t(e).data("px.parallax", !1), 0 === this.sliders.length && (t(i).off("scroll.px.parallax resize.px.parallax load.px.parallax"), this.isReady = !1, o.isSetup = !1)
        }
    });
    var h = t.fn.parallax;
    t.fn.parallax = function(s) {
        return this.each(function() {
            var h = t(this),
                r = "object" == typeof s && s;
            this == i || this == e || h.is("body") ? o.configure(r) : h.data("px.parallax") ? "object" == typeof s && t.extend(h.data("px.parallax"), r) : (r = t.extend({}, h.data(), r), h.data("px.parallax", new o(this, r))), "string" == typeof s && ("destroy" == s ? o.destroy(this) : o[s]())
        })
    }, t.fn.parallax.Constructor = o, t.fn.parallax.noConflict = function() {
        return t.fn.parallax = h, this
    }, t(function() {
        t('[data-parallax="scroll"]').parallax()
    })
}(jQuery, window, document);
! function(o, e) {
    if ("function" == typeof define && define.amd) define(["exports"], e);
    else if ("undefined" != typeof exports) e(exports);
    else {
        var t = {};
        e(t), o.bodyScrollLock = t
    }
}(this, function(exports) {
    "use strict";
    Object.defineProperty(exports, "__esModule", {
        value: !0
    });
    var n = "undefined" != typeof window && window.navigator && window.navigator.platform && /iPad|iPhone|iPod|(iPad Simulator)|(iPhone Simulator)|(iPod Simulator)/.test(window.navigator.platform),
        i = null,
        l = [],
        d = !1,
        u = -1,
        c = void 0,
        a = void 0,
        s = function(o) {
            var e = o || window.event;
            return e.preventDefault && e.preventDefault(), !1
        },
        o = function() {
            setTimeout(function() {
                void 0 !== a && (document.body.style.paddingRight = a, a = void 0), void 0 !== c && (document.body.style.overflow = c, c = void 0)
            })
        };
    exports.disableBodyScroll = function(r, o) {
        var t;
        n ? r && !l.includes(r) && (l = [].concat(function(o) {
            if (Array.isArray(o)) {
                for (var e = 0, t = Array(o.length); e < o.length; e++) t[e] = o[e];
                return t
            }
            return Array.from(o)
        }(l), [r]), r.ontouchstart = function(o) {
            1 === o.targetTouches.length && (u = o.targetTouches[0].clientY)
        }, r.ontouchmove = function(o) {
            var e, t, n, i;
            1 === o.targetTouches.length && (t = r, i = (e = o).targetTouches[0].clientY - u, t && 0 === t.scrollTop && 0 < i ? s(e) : (n = t) && n.scrollHeight - n.scrollTop <= n.clientHeight && i < 0 ? s(e) : e.stopPropagation())
        }, d || (document.addEventListener("touchmove", s, {
            passive: !1
        }), d = !0)) : (t = o, setTimeout(function() {
            if (void 0 === a) {
                var o = !!t && !0 === t.reserveScrollBarGap,
                    e = window.innerWidth - document.documentElement.clientWidth;
                o && 0 < e && (a = document.body.style.paddingRight, document.body.style.paddingRight = e + "px")
            }
            void 0 === c && (c = document.body.style.overflow, document.body.style.overflow = "hidden")
        }), i || (i = r))
    }, exports.clearAllBodyScrollLocks = function() {
        n ? (l.forEach(function(o) {
            o.ontouchstart = null, o.ontouchmove = null
        }), d && (document.removeEventListener("touchmove", s, {
            passive: !1
        }), d = !1), l = [], u = -1) : (o(), i = null)
    }, exports.enableBodyScroll = function(e) {
        n ? (e.ontouchstart = null, e.ontouchmove = null, l = l.filter(function(o) {
            return o !== e
        }), d && 0 === l.length && (document.removeEventListener("touchmove", s, {
            passive: !1
        }), d = !1)) : i === e && (o(), i = null)
    }
});
(function($, root, undefined) {
    "use strict";
    try {
        document.createEvent("TouchEvent");
        root.ideapark_is_mobile = true;
    } catch (e) {
        root.ideapark_is_mobile = false;
    }
    root.ideapark_is_responsinator = false;
    if (document.referrer) {
        root.ideapark_is_responsinator = (document.referrer.split('/')[2] == 'www.responsinator.com');
    }
    root.ideapark_debounce = function(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    };
    root.ideapark_isset = function(obj) {
        return typeof(obj) != 'undefined';
    };
    root.ideapark_empty = function(obj) {
        return typeof(obj) == 'undefined' || (typeof(obj) == 'object' && obj == null) || (typeof(obj) == 'array' && obj.length == 0) || (typeof(obj) == 'string' && ideapark_alltrim(obj) == '') || obj === 0;
    };
    root.ideapark_is_array = function(obj) {
        return typeof(obj) == 'array';
    };
    root.ideapark_is_function = function(obj) {
        return typeof(obj) == 'function';
    };
    root.ideapark_is_object = function(obj) {
        return typeof(obj) == 'object';
    };
    root.ideapark_alltrim = function(str) {
        var dir = arguments[1] !== undefined ? arguments[1] : 'a';
        var rez = '';
        var i, start = 0,
            end = str.length - 1;
        if (dir == 'a' || dir == 'l') {
            for (i = 0; i < str.length; i++) {
                if (str.substr(i, 1) != ' ') {
                    start = i;
                    break;
                }
            }
        }
        if (dir == 'a' || dir == 'r') {
            for (i = str.length - 1; i >= 0; i--) {
                if (str.substr(i, 1) != ' ') {
                    end = i;
                    break;
                }
            }
        }
        return str.substring(start, end + 1);
    };
    root.ideapark_ltrim = function(str) {
        return ideapark_alltrim(str, 'l');
    };
    root.ideapark_rtrim = function(str) {
        return ideapark_alltrim(str, 'r');
    };
    root.ideapark_dec2hex = function(n) {
        return Number(n).toString(16);
    };
    root.ideapark_hex2dec = function(hex) {
        return parseInt(hex, 16);
    };
    root.ideapark_in_array = function(val, thearray) {
        var rez = false;
        for (var i = 0; i < thearray.length; i++) {
            if (thearray[i] == val) {
                rez = true;
                break;
            }
        }
        return rez;
    };
    root.ideapark_detectIE = function() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf('MSIE ');
        if (msie > 0) {
            return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        }
        var trident = ua.indexOf('Trident/');
        if (trident > 0) {
            var rv = ua.indexOf('rv:');
            return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
        }
        var edge = ua.indexOf('Edge/');
        if (edge > 0) {
            return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        }
        return false;
    };
    root.ideapark_loadScript = function(src, cb, async) {
        var script = document.createElement('script');
        script.async = !!(typeof async !=='undefined' && async);
        script.src = src;
        script.onerror = function() {
            if (typeof cb !== 'undefined') {
                cb(new Error("Failed to load" + src));
            }
        };
        script.onload = function() {
            if (typeof cb !== 'undefined') {
                cb();
            }
        };
        document.getElementsByTagName("head")[0].appendChild(script);
    }
})(jQuery, this);
(function($, root, undefined) {
    "use strict";
    root.ideapark_videos = [];
    root.ideapark_players = [];
    root.ideapark_env_init = false;
    root.ideapark_slick_paused = false;
    root.ideapark_is_mobile = false;
    try {
        document.createEvent("TouchEvent");
        root.ideapark_is_mobile = true;
    } catch (e) {
        root.ideapark_is_mobile = false;
    }
    root.ideapark_is_responsinator = false;
    if (document.referrer) {
        root.ideapark_is_responsinator = (document.referrer.split('/')[2] == 'www.responsinator.com');
    }
    root.old_windows_width = 0;
    var $body = $('body');
    var $window = $(window);
    var ideapark_scroll_busy = true;
    var ideapark_resize_busy = true;
    var ideaparkStickHeight = 0;
    var needUpdateIdeaparkStickHeight = false;
    var lastBannerIndex = 0;
    var $home_banners_count = $('#home-banners .banner').length;
    var $home_banners = $('#home-banners');
    var ideapark_parallax_on = !!$('.parallax').length;
    var ideaparkStickyCheckoutTimeout = null;
    var $ideaparkCheckout = $('.checkout-collaterals');
    var $ideaparkWoocommerce = $('.woocommerce');
    var ideaparkCheckoutTop = 0;
    var ideaparkCheckoutInTransition = false;
    var $to_top_button = $('.to-top-button');
    var ideapark_mega_menu_break_mode = 0;
    var ideapark_submenu_direction_set = false;
    var ideapark_megamenu_left_set = false;
    var ideapark_slick_current_slide = 0;
    var $slick_product_single = $('.slick-product-single');
    var $slick_product_single_slides = $('.slide', $slick_product_single);
    var product_thumbnails_click = false;
    var $slick_product_thumbnails = $('.slick-product');
    var $slick_product_thumbnails_slides = $('.slide', $slick_product_thumbnails);
    var $ideapark_submenu_open = [];
    $(function() {
        $('html > head').append($('<style>svg{width: initial;height: initial;}</style>'));
        $('#ajax-search,#ajax-search-result,.search-shadow,.menu-shadow').removeClass('hidden');
        $('select.styled, .variations select').customSelect();
        ideapark_mega_menu_init();
        ideapark_banners();
        ideapark_stickyNav();
        ideapark_init_product_tabs();
        ideapark_init_home_tabs();
        ideapark_init_home_slider();
        ideapark_init_home_brands();
        ideapark_init_home_review();
        ideapark_to_top_button();
        $('#header .main-menu').addClass('initialized');
        if (ideapark_wp_vars.stickyMenu) {
            $('#header .logo').waitForImages().done(function() {
                ideaparkStickHeight = $('#header').outerHeight();
                ideapark_stickyNav();
            });
        }
        if (ideapark_parallax_on) {
            $(document).on('lazybeforeunveil', function() {
                ideapark_refresh_parallax();
            });
        }
        var bgss = new bgsrcset();
        bgss.init('.bgimg');
        if ($slick_product_single.length) {
            $slick_product_single.on('init', function() {
                $('.slick-product-single.preloading').removeClass('preloading');
                $slick_product_single_slides.bind('click', function(e) {
                    if ($slick_product_single.hasClass('animating')) {
                        return;
                    }
                    e.preventDefault();
                    var $this = $(this);
                    var index = $this.index();
                    if (ideapark_wp_vars.shopProductModal && $this.hasClass('ip-product-image--zoom')) {
                        ideapark_open_photo_swipe(this, index);
                    }
                });
            });
            $slick_product_single.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                if (!product_thumbnails_click) {
                    $slick_product_thumbnails_slides.eq(nextSlide).trigger('click');
                }
                product_thumbnails_click = false;
                $slick_product_single.addClass('animating');
            });
            $slick_product_single.on('afterChange', function() {
                $slick_product_single.removeClass('animating');
            });
            $slick_product_single.slick({
                dots: false,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                rtl: !!ideapark_wp_vars.isRtl,
                prevArrow: ideapark_wp_vars.arrowLeft,
                nextArrow: ideapark_wp_vars.arrowRight
            });
        }
        if ($slick_product_thumbnails.length) {
            $slick_product_thumbnails.on('init', function() {
                $slick_product_thumbnails_slides.bind('click', function() {
                    var _ = $(this);
                    if ($slick_product_single.hasClass('animating') || _.hasClass('current')) {
                        return;
                    }
                    product_thumbnails_click = true;
                    $('.slide.current', $slick_product_thumbnails).removeClass('current');
                    _.addClass('current');
                    if (!_.next().hasClass('slick-active')) {
                        $slick_product_thumbnails.slick('slickNext');
                    } else if (!_.prev().hasClass('slick-active')) {
                        $slick_product_thumbnails.slick('slickPrev');
                    }
                    $slick_product_single.slick('slickGoTo', _.index(), false);
                });
            });
            $slick_product_thumbnails.slick({
                dots: false,
                arrows: false,
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 1,
                rtl: !!ideapark_wp_vars.isRtl,
                adaptiveHeight: false,
                vertical: true,
                focusOnSelect: false,
                draggable: false,
                touchMove: false
            });
        }
        if ($.fn.masonry) {
            var $grid = $('.grid.masonry');
            if ($grid.length) {
                $grid.masonry({
                    itemSelector: '.post, .page, .product',
                    columnWidth: '.post-sizer',
                    percentPosition: true
                });
                $grid.imagesLoaded().progress(function() {
                    $grid.masonry('layout');
                });
                $grid.imagesLoaded(function() {
                    $grid.masonry('layout');
                });
            }
        }
        $(".container").fitVids();
        if ($ideaparkCheckout.length) {
            $ideaparkCheckout.css('position', 'relative');
            $ideaparkCheckout.on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(e) {
                ideaparkCheckoutInTransition = false;
            });
            var ideapark_stickyCheckout = function() {
                if ($(window).width() < 992) {
                    if (ideaparkCheckoutTop > 0) {
                        ideaparkCheckoutTop = 0;
                        ideaparkCheckoutInTransition = true;
                        setTimeout(function() {
                            ideaparkCheckoutInTransition = false;
                        }, 700);
                        $ideaparkCheckout.css({
                            top: ideaparkCheckoutTop
                        });
                    }
                    ideaparkStickyCheckoutTimeout = null;
                    return;
                }
                var $ideaparkPayment = $('#payment');
                var scrollTop = $(window).scrollTop();
                var scrollTopOrig = scrollTop;
                var payment_top = $ideaparkPayment.offset().top;
                if (ideapark_wp_vars.stickyMenu) {
                    var $sticky_menu = $('body.sticky #header .main-menu');
                    var $admin_menu = $('#wpadminbar');
                    if ($sticky_menu.length) {
                        scrollTop += $sticky_menu.height();
                    }
                    if ($admin_menu.length) {
                        scrollTop += $admin_menu.height();
                    }
                }
                var dif = scrollTop - payment_top;
                if ((ideaparkCheckoutTop > 0 || dif !== 0) && !ideaparkCheckoutInTransition) {
                    if (dif > 0 || ideaparkCheckoutTop !== 0) {
                        var checkout_bottom = $ideaparkCheckout.offset().top + $ideaparkCheckout.outerHeight();
                        var overdif = dif + checkout_bottom - ($(window).height() + scrollTopOrig);
                        if (overdif > 0) {
                            dif -= overdif;
                        }
                        overdif = dif + checkout_bottom - ($ideaparkWoocommerce.offset().top + $ideaparkWoocommerce.outerHeight());
                        if (overdif > 0) {
                            dif -= overdif;
                        }
                        ideaparkCheckoutTop += dif;
                        if (ideaparkCheckoutTop < 0) {
                            ideaparkCheckoutTop = 0;
                        }
                        ideaparkCheckoutInTransition = true;
                        setTimeout(function() {
                            ideaparkCheckoutInTransition = false;
                        }, 700);
                        $ideaparkCheckout.css({
                            top: ideaparkCheckoutTop
                        });
                    }
                }
                ideaparkStickyCheckoutTimeout = null;
            };
            ideapark_stickyCheckout();
            $(window).on('scroll resize', function() {
                if (!ideaparkStickyCheckoutTimeout) ideaparkStickyCheckoutTimeout = setTimeout(ideapark_stickyCheckout, 500);
            });
        }
        ideapark_scroll_actions();
        ideapark_resize_actions();
        $('body.preload').removeClass('preload');
    });
    root.ideapark_scroll_actions = function() {
        ideapark_banners();
        ideapark_stickyNav();
        ideapark_to_top_button();
        ideapark_scroll_busy = false;
    };
    $window.scroll(function() {
        if (window.requestAnimationFrame) {
            if (!ideapark_scroll_busy) {
                ideapark_scroll_busy = true;
                window.requestAnimationFrame(ideapark_scroll_actions);
            }
        } else {
            ideapark_scroll_actions();
        }
    });
    root.ideapark_resize_actions = function() {
        ideapark_banners();
        ideapark_stickyNav();
        ideapark_submenu_direction();
        ideapark_mega_menu_break();
        ideapark_megamenu();
        ideapark_wpadminbar_mobile();
        ideapark_resize_busy = false;
    };
    $window.resize(function() {
        if (window.requestAnimationFrame) {
            if (!ideapark_resize_busy) {
                ideapark_resize_busy = true;
                window.requestAnimationFrame(ideapark_resize_actions);
            }
        } else {
            ideapark_resize_actions();
        }
    });
    $('.woocommerce-tabs .tabs li a').click(function() {
        var _ = $(this);
        var $tab = $(_.attr('href'));
        var $li = $(this).parent('li');
        if ($li.hasClass('active') && $(window).width() < 992 && $tab.hasClass('current')) {
            $li.parent('ul').toggleClass('expand');
        } else {
            $('.woocommerce-tabs .tabs li.active').removeClass('active');
            $li.addClass('active');
            $('.woocommerce-tabs .current').removeClass('current');
            setTimeout(function() {
                $tab.addClass('current');
            }, 100);
            $li.parent('ul').removeClass('expand');
        }
    });
    $(document).on('click', ".product-categories > ul li.has-children > a:not(.js-more), .product-categories > ul li.menu-item-has-children > a:not(.js-more)", function() {
        if ($(this).closest('.sub-menu .sub-menu').length > 0) {
            return true;
        }
        if ($(window).width() >= 992) {
            return true;
        }
        if (!$(this).attr('href')) {
            $(this).parent().children('.js-more').trigger('click');
            return false;
        }
    }).on('click', ".js-more", function() {
        if ($(window).width() >= 992) {
            return true;
        }
        if ($ideapark_submenu_open.length === 0) {
            $(document.body).addClass("submenu-open");
        }
        $ideapark_submenu_open.push($(this).closest('li'));
        $(this).closest('li').addClass('selected');
        return false;
    }).on('click', '#header .search, #header .mobile-search, #search-close', function() {
        $('html').toggleClass('search-open');
        if ($body.toggleClass('search-open').hasClass('search-open')) {
            bodyScrollLock.disableBodyScroll($('#ajax-search-result')[0]);
            setTimeout(function() {
                $("#ajax-search-input").focus();
            }, 200);
        } else {
            bodyScrollLock.clearAllBodyScrollLocks();
            var $slick = $('#home-slider .slick');
            if ($slick.length) {
                $slick.slick('setPosition');
            }
        }
        if (!$(".js-ajax-search-result").text() && $("#ajax-search-input").val().trim()) {
            ajaxSearchFunction();
        }
        return false;
    }).on('click', '.mobile-menu, .mobile-menu-close, .menu-open .menu-shadow', function() {
        $('html').toggleClass('menu-open');
        if ($body.toggleClass('menu-open').hasClass('menu-open')) {
            bodyScrollLock.disableBodyScroll($('.product-categories > .menu')[0]);
        } else {
            bodyScrollLock.clearAllBodyScrollLocks();
        }
        return false;
    }).on('click', '.mobile-sidebar, .mobile-sidebar-close, .sidebar-open .menu-shadow', function() {
        $('html').toggleClass('sidebar-open');
        if ($body.toggleClass('sidebar-open').hasClass('sidebar-open')) {
            bodyScrollLock.disableBodyScroll($('#ip-shop-sidebar')[0]);
        } else {
            bodyScrollLock.clearAllBodyScrollLocks();
        }
        return false;
    }).on('click', ".collaterals .coupon .header a", function() {
        var $coupon = $(".collaterals .coupon");
        $coupon.toggleClass('opened');
        if ($coupon.hasClass('opened')) {
            setTimeout(function() {
                $coupon.find('input[type=text]').first().focus();
            }, 500);
        }
        return false;
    }).on('click', ".collaterals .shipping-calculator .header a", function() {
        $(this).closest('.shipping-calculator').toggleClass('opened');
    }).on('click', ".ip-prod-quantity-minus", function(e) {
        e.stopPropagation();
        e.preventDefault();
        var $input = $(this).parent().find('input[type=number]');
        var quantity = $input.val().trim();
        var min = $input.attr('min');
        quantity--;
        if (quantity < (min !== '' ? min : 1)) {
            quantity = (min !== '' ? min : 1);
        }
        $input.val(quantity);
        $input.trigger('change');
    }).on('click', ".ip-prod-quantity-plus", function(e) {
        e.stopPropagation();
        e.preventDefault();
        var $input = $(this).parent().find('input[type=number]');
        var quantity = $input.val().trim();
        var max = $input.attr('max');
        quantity++;
        if ((max !== '') && (quantity > max)) {
            quantity = max;
        }
        if (quantity > 0) {
            $input.val(quantity);
            $input.trigger('change');
        }
    }).on('click', "#ip-checkout-apply-coupon", function() {
        var $form = $(this).closest('form');
        if ($form.is('.processing')) {
            return false;
        }
        $form.addClass('processing').block({
            message: null,
            overlayCSS: {
                background: '#fff',
                opacity: 0.6
            }
        });
        var data = {
            security: wc_checkout_params.apply_coupon_nonce,
            coupon_code: $form.find('input[name="coupon_code"]').val()
        };
        $.ajax({
            type: 'POST',
            url: wc_checkout_params.wc_ajax_url.toString().replace('%%endpoint%%', 'apply_coupon'),
            data: data,
            success: function(code) {
                $('.woocommerce-error, .woocommerce-message').remove();
                $form.removeClass('processing').unblock();
                if (code) {
                    $form.before(code);
                    $(".collaterals .coupon.opened").removeClass('opened');
                    $(document.body).trigger('update_checkout', {
                        update_shipping_method: false
                    });
                }
            },
            dataType: 'html'
        });
        return false;
    });
    $(".variations_form").on("woocommerce_variation_select_change", function() {
        $(".variations_form select").each(function() {
            $(this).next('span.customSelect').html($(this).find(':selected').html());
        });
        if (typeof $slick_product_single != 'undefined' && $slick_product_single.length) {
            setTimeout(function() {
                $slick_product_single.slick('slickGoTo', 0, false);
                var $fisrtSlide = $slick_product_single_slides.first().children('a');
                $("<img/>").attr("src", $fisrtSlide.attr('href')).load(function() {
                    $fisrtSlide.attr('data-size', this.width + 'x' + this.height);
                });
            }, 500);
        }
    });
    $("#header .mobile-menu-back").click(function() {
        if ($ideapark_submenu_open.length) {
            var $li = $ideapark_submenu_open.pop();
            $li.removeClass('selected');
            if ($ideapark_submenu_open.length === 0) {
                $(document.body).removeClass("submenu-open");
            }
        }
        return false;
    });
    $("#ip-wishlist-share-link").focus(function() {
        $(this).select();
    });
    $('.menu-item').click(function() {
        $(this).toggleClass('open');
    });
    $('#customer_login .tab-header').click(function() {
        $('#customer_login .tab-header.active').removeClass('active');
        $(this).addClass('active');
        $('#customer_login .wrap li.active').removeClass('active');
        $('#customer_login .wrap li.' + $(this).data('tab-class')).addClass('active');
        return false;
    });
    $(".product-categories > ul").append('<li class="space-item"></li>');
    $('#header .top-menu .menu > li').each(function() {
        $(".product-categories > ul").append($(this).clone());
    });
    $("#ajax-search-input").on('input', function() {
        if (ideapark_wp_vars.searchType != 'search-type-3') {
            var _ = $(this);
            if (_.val().trim().length > 1) {
                $(".js-ajax-search-result").removeClass('loaded');
                $('.search-shadow').addClass('loading');
                ajaxSearchFunction();
            } else {
                $('.search-shadow').removeClass('loading');
                $(".js-ajax-search-result").removeClass('loaded');
            }
        }
    }).on('keydown', function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            $('.search-shadow').removeClass('loading');
            if ($("#ajax-search-input").val().trim()) {
                $("#ajax-search form").submit();
            }
        } else if (event.keyCode == 27) {
            $('.search-shadow').removeClass('loading');
            $('#mobilesearch-close').trigger('click');
            $('#search-close').trigger('click');
        }
    });
    $("#ajax-search form").on('submit', function() {
        if (!$("#ajax-search-input").val().trim()) {
            return false;
        }
    });
    $('.ip-watch-video-btn').click(function() {
        var $container = $('#ip-quickview'),
            $video_code = $("#ip_hidden_product_video");
        if ($body.hasClass('quickview-open') || $video_code.length != 1) {
            return false;
        }
        var $shadow = $('<div id="ip-quickview-shadow" class="loading"><div class="ip-shop-loop-loading"><i></i><i></i><i></i></div></div>');
        $body.append($shadow);
        $body.addClass('quickview-open');
        $container.html($video_code.val());
        $container.fitVids();
        $.magnificPopup.open({
            mainClass: 'ip-mfp-quickview ip-mfp-fade-in',
            closeMarkup: '<a class="mfp-close ip-mfp-close video"><svg><use xlink:href="' + ideapark_wp_vars.svgUrl + '#svg-close-light" /></svg></a>',
            removalDelay: 180,
            items: {
                src: $container,
                type: 'inline'
            },
            callbacks: {
                open: function() {
                    $shadow.removeClass('loading');
                    $shadow.one('touchstart', function() {
                        $.magnificPopup.close();
                    });
                },
                beforeClose: function() {
                    $shadow.addClass('mfp-removing');
                },
                close: function() {
                    $shadow.remove();
                    $body.removeClass('quickview-open');
                }
            }
        });
        return false;
    });
    $('.ip-quickview-btn').click(function() {
        var $container = $('#ip-quickview'),
            ajaxUrl, productId = $(this).data('product_id'),
            data = {
                product_id: productId
            };
        if ($body.hasClass('quickview-open')) {
            return false;
        }
        if (productId) {
            var $shadow = $('<div id="ip-quickview-shadow" class="loading"><div class="ip-shop-loop-loading"><i></i><i></i><i></i></div></div>');
            $body.append($shadow);
            setTimeout(function() {
                $body.addClass('quickview-open');
            }, 100);
            if (typeof wc_add_to_cart_params !== 'undefined') {
                ajaxUrl = wc_add_to_cart_params.wc_ajax_url.toString().replace('%%endpoint%%', 'ip_ajax_load_product');
            } else {
                ajaxUrl = ip_wp_vars.ajaxUrl;
                data.action = 'ip_ajax_load_product';
            }
            root.ip_quickview_get_product = $.ajax({
                type: 'POST',
                url: ajaxUrl,
                data: data,
                dataType: 'html',
                cache: false,
                headers: {
                    'cache-control': 'no-cache'
                },
                beforeSend: function() {
                    if (root.window.ip_quickview_get_product === 'object') {
                        root.ip_quickview_get_product.abort();
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $shadow.remove();
                    $body.removeClass('quickview-open');
                },
                success: function(data) {
                    $container.html(data);
                    $.magnificPopup.open({
                        mainClass: 'ip-mfp-quickview ip-mfp-fade-in',
                        closeMarkup: '<a class="mfp-close ip-mfp-close"><svg><use xlink:href="' + ideapark_wp_vars.svgUrl + '#svg-close-light" /></svg></a>',
                        removalDelay: 300,
                        items: {
                            src: $container,
                            type: 'inline'
                        },
                        callbacks: {
                            open: function() {
                                $shadow.removeClass('loading');
                                $shadow.one('touchstart', function() {
                                    $.magnificPopup.close();
                                });
                                var $slick_product_qv = $('.slick-product-qv', $container);
                                if ($slick_product_qv.length == 1) {
                                    $slick_product_qv.slick({
                                        dots: false,
                                        arrows: true,
                                        infinite: false,
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        adaptiveHeight: false,
                                        rtl: !!ideapark_wp_vars.isRtl,
                                        prevArrow: ideapark_wp_vars.arrowLeft,
                                        nextArrow: ideapark_wp_vars.arrowRight
                                    });
                                }
                                $('select.styled, .variations select', $container).customSelect();
                                var $currentContainer = $container.find('#product-' + productId),
                                    $productForm = $currentContainer.find('form.cart');
                                $('.product-images', $container).waitForImages().done(function() {
                                    if ($currentContainer.hasClass('product-type-variable')) {
                                        $productForm.wc_variation_form().find('.variations select:eq(0)').change();
                                        $(".variations_form").on("woocommerce_variation_select_change", function() {
                                            $(".variations_form select").each(function() {
                                                $(this).next('span.customSelect').html($(this).find(':selected').html());
                                            });
                                            if (typeof $slick_product_single != 'undefined' && $slick_product_single.length) {
                                                setTimeout(function() {
                                                    $slick_product_single.slick('slickGoTo', 0, false);
                                                    var $fisrtSlide = $slick_product_single_slides.first().children('a');
                                                    $("<img/>").attr("src", $fisrtSlide.attr('href')).load(function() {
                                                        $fisrtSlide.attr('data-size', this.width + 'x' + this.height);
                                                    });
                                                }, 500);
                                            }
                                        });
                                    }
                                });
                            },
                            beforeClose: function() {
                                $body.removeClass('quickview-open');
                            },
                            close: function() {
                                $shadow.remove();
                            }
                        }
                    });
                }
            });
        }
        return false;
    });
    $('.entry-content a > img').each(function() {
        var $shadow, $a = $(this).closest('a');
        if ($a.attr('href').search(/\.(gif|jpg|png|jpeg)$/i) >= 0) {
            $a.magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                image: {
                    verticalFit: true
                },
                mainClass: 'ip-mfp-quickview ip-mfp-fade-in',
                closeMarkup: '<a class="mfp-close ip-mfp-close"><svg><use xlink:href="' + ideapark_wp_vars.svgUrl + '#svg-close-light" /></svg></a>',
                removalDelay: 300,
                callbacks: {
                    beforeOpen: function() {
                        $shadow = $('<div id="ip-quickview-shadow" class="loading"><div class="ip-shop-loop-loading"><i></i><i></i><i></i></div></div>');
                        $body.append($shadow);
                        $shadow.one('touchstart', function() {
                            $.magnificPopup.close();
                        });
                    },
                    open: function() {
                        $body.addClass('quickview-open');
                    },
                    imageLoadComplete: function() {
                        $shadow.removeClass('loading');
                    },
                    beforeClose: function() {
                        $shadow.addClass('mfp-removing');
                        $body.removeClass('quickview-open');
                    },
                    close: function() {
                        $shadow.remove();
                    }
                }
            });
        }
    });
    $to_top_button.click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    root.ideapark_refresh_parallax = ideapark_debounce(function() {
        $(window).trigger('resize.px.parallax');
    }, 500);
    root.ideapark_third_party_reload = function() {
        if (typeof root.sbi_init === "function") {
            window.sbiCommentCacheStatus = 0;
            root.sbi_init(function(imagesArr, transientName) {
                root.sbi_cache_all(imagesArr, transientName);
            });
        }
    };
    root.ideapark_parallax_destroy = function() {
        if (ideapark_parallax_on && typeof $().parallax === 'function') {
            $('.parallax').parallax('destroy');
        }
    };
    root.ideapark_parallax_init = function() {
        if (ideapark_parallax_on && typeof $().parallax === 'function') {
            $('.parallax').parallax();
        }
    };
    root.ideapark_mega_menu_break = function(force) {
        if (force) {
            ideapark_mega_menu_break_mode = 0;
        }
        if ($window.width() < 992) {
            if (ideapark_mega_menu_break_mode === 1) {
                $('.mega-menu-break').each(function() {
                    var $ul = $(this);
                    $ul.css({
                        height: ''
                    }).removeClass('mega-menu-break');
                });
                ideapark_mega_menu_break_mode = 0;
            }
            return;
        }
        if (ideapark_mega_menu_break_mode === 0) {
            var main_items = $('.main-menu .menu').find('.col-2,.col-3,.col-4');
            if (main_items.length) {
                main_items.each(function() {
                    var $li_main = $(this);
                    var cols = 0;
                    if ($li_main.hasClass('col-2')) {
                        cols = 2;
                    } else if ($li_main.hasClass('col-3')) {
                        cols = 3;
                    } else if ($li_main.hasClass('col-4')) {
                        cols = 4;
                    }
                    var $ul = $li_main.find('.sub-menu').first();
                    var padding_top = $ul.css('padding-top') ? parseInt($ul.css('padding-top').replace('px', '')) : 0;
                    var padding_bottom = $ul.css('padding-bottom') ? parseInt($ul.css('padding-bottom').replace('px', '')) : 0;
                    var heights = [];
                    var max_height = 0;
                    var all_sum_height = 0;
                    $ul.children('li').each(function() {
                        var $li = $(this);
                        var height = $li.outerHeight();
                        if (height > max_height) {
                            max_height = height;
                        }
                        all_sum_height += height;
                        heights.push(height);
                    });
                    var test_cols = 0;
                    var cnt = 0;
                    var test_height = max_height - 1;
                    do {
                        test_height++;
                        cnt++;
                        test_cols = 1;
                        var sum_height = 0;
                        for (var i = 0; i < heights.length; i++) {
                            sum_height += heights[i];
                            if (sum_height > test_height) {
                                sum_height = 0;
                                i--;
                                test_cols++;
                            }
                        }
                    } while (test_cols > cols && cnt < 1000);
                    if (test_cols <= cols && test_height > 0) {
                        $ul.css({
                            height: (test_height + padding_top + padding_bottom) + 'px'
                        }).addClass('mega-menu-break');
                    }
                });
                ideapark_mega_menu_break_mode = 1;
            }
        }
    };
    root.ideapark_init_home_slider = function() {
        var $slick = $('#home-slider .slick');
        if ($slick.length) {
            root.ideapark_videos = [];
            root.ideapark_players = [];
            root.ideapark_env_init = false;
            root.ideapark_slick_paused = false;
            ideapark_slick_current_slide = 0;
            var $slider = $('#home-slider');
            var $home_slider = $slick;
            var sliderSpeed = $slider.data('slider_speed');
            var sliderEffect = $slider.data('slider_effect');
            var sliderInterval = $slider.data('slider_interval');
            var sliderHideDots = !!$slider.data('slider_hide_dots');
            var sliderShowMuteUnmute = !!$slider.data('slider_show_mute_unmute');
            var is_start_video = $home_slider.find('.video').length && !ideapark_is_mobile && typeof window.orientation === 'undefined' && (ideapark_detectIE() === false || ideapark_detectIE() >= 11) && !ideapark_is_responsinator;
            var $first_slide = $('.slick .bgimg').first();
            if ($first_slide.length == 1) {
                var img = new Image();
                img.onload = function() {
                    if ($slick.hasClass('preloading')) {
                        $slick.on('init', function() {
                            $('.slick .slick-slide.slick-current').addClass('slide-visible');
                            $slick.removeClass('preloading');
                        });
                        $slick.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                            if (Object.keys(ideapark_players).length) {
                                for (var frameID in ideapark_players) {
                                    if (ideapark_players[frameID].videoSource == 'youtube' && ideapark_players[frameID].hasOwnProperty('isVideoLoaded')) {
                                        ideapark_players[frameID].pauseVideo();
                                    } else if (ideapark_players[frameID].videoSource == 'vimeo' && ideapark_players[frameID].hasOwnProperty('isVideoLoaded')) {
                                        ideapark_players[frameID].pause();
                                    }
                                }
                                var video = $home_slider.find('.slick-slide[data-slick-index=' + nextSlide + '] .video .screen');
                                if (video.length == 1) {
                                    frameID = video.get(0).id;
                                    $home_slider.slick('slickPause');
                                    root.ideapark_slick_paused = true;
                                    if (ideapark_players.hasOwnProperty(frameID)) {
                                        if (ideapark_players[frameID].videoSource == 'youtube' && ideapark_players[frameID].hasOwnProperty('isVideoLoaded')) {
                                            ideapark_players[frameID].playVideo();
                                            if (!$('.slick .volume').hasClass('mute')) {
                                                ideapark_players[frameID].unMute();
                                            } else {
                                                ideapark_players[frameID].mute();
                                            }
                                        } else if (ideapark_players[frameID].videoSource == 'vimeo' && ideapark_players[frameID].hasOwnProperty('isVideoLoaded')) {
                                            ideapark_players[frameID].play();
                                            if (!$('.slick .volume').hasClass('mute')) {
                                                ideapark_players[frameID].setVolume(1);
                                            } else {
                                                ideapark_players[frameID].setVolume(0);
                                            }
                                        }
                                    }
                                }
                            }
                            $('.slick .slick-slide.slide-visible').removeClass('slide-visible');
                        });
                        $slick.on('afterChange', function(event, slick, currentSlide) {
                            ideapark_slick_current_slide = currentSlide;
                            if (root.ideapark_slick_paused) {
                                if (Object.keys(ideapark_players).length) {
                                    var video = $home_slider.find('.slick-slide[data-slick-index=' + currentSlide + '] .video .screen');
                                    if (!video.length && ideapark_wp_vars.sliderInterval > 0) {
                                        $home_slider.slick('slickPlay');
                                        root.ideapark_slick_paused = false;
                                    }
                                }
                            }
                            $('.slick .slick-slide.slick-current').addClass('slide-visible');
                        });
                        $slick.on('transitionend webkitTransitionEnd oTransitionEnd', function() {
                            $('.slick-preloader').remove();
                        });
                        $slick.slick({
                            dots: sliderHideDots == '1' ? false : true,
                            infinite: !is_start_video,
                            speed: sliderSpeed,
                            autoplay: sliderInterval > 0,
                            autoplaySpeed: sliderInterval,
                            slidesToShow: 1,
                            fade: sliderEffect == 'fade',
                            prevArrow: ideapark_wp_vars.arrowLeft,
                            nextArrow: ideapark_wp_vars.arrowRight,
                            rtl: !!ideapark_wp_vars.isRtl
                        });
                        if (is_start_video) {
                            var is_youtube_api_init = false;
                            var is_vimeo_api_init = false;
                            var is_vimeo_api_loaded = false;
                            $home_slider.addClass('video-started');
                            $home_slider.on('click', ".slick-next", function() {
                                var max_index = $slider.data('slides-count') - 1;
                                if (ideapark_slick_current_slide == max_index)
                                    $home_slider.slick('slickGoTo', 0);
                            });
                            $home_slider.on('click', ".slick-prev", function() {
                                var max_index = $slider.data('slides-count') - 1;
                                if (!ideapark_slick_current_slide)
                                    $home_slider.slick('slickGoTo', max_index);
                            });
                            root.ideaparkEnvInit = function() {
                                if (root.ideapark_env_init) {
                                    return;
                                }
                                root.ideapark_env_init = true;
                                $window.resize(function() {
                                    if (window.requestAnimationFrame) {
                                        window.requestAnimationFrame(ideaparkVideoRescale);
                                    } else {
                                        ideapark_resize_actions();
                                    }
                                });
                                if (!$home_slider.find(".volume").length && sliderShowMuteUnmute) {
                                    $home_slider.append('<a href="#" class="volume mute"><svg class="fa-volume-off"><use xlink:href="' + ideapark_wp_vars.svgUrl + '#svg-volume-off" /></svg><svg class="fa-volume-up"><use xlink:href="' + ideapark_wp_vars.svgUrl + '#svg-volume-up" /></svg></a>');
                                } else {
                                    $home_slider.append('<span class="volume mute"></span>');
                                }
                                $(document).on('click', '.slick .volume', function() {
                                    var _ = $(this),
                                        frameID;
                                    if (_.hasClass('mute')) {
                                        for (frameID in ideapark_players) {
                                            if (ideapark_players[frameID].videoSource == 'youtube' && ideapark_players[frameID].hasOwnProperty('isVideoLoaded')) {
                                                ideapark_players[frameID].unMute();
                                            } else if (ideapark_players[frameID].videoSource == 'vimeo' && ideapark_players[frameID].hasOwnProperty('isVideoLoaded')) {
                                                ideapark_players[frameID].setVolume(1);
                                            }
                                        }
                                        _.removeClass('mute');
                                    } else {
                                        for (frameID in ideapark_players) {
                                            if (ideapark_players[frameID].videoSource == 'youtube' && ideapark_players[frameID].hasOwnProperty('isVideoLoaded')) {
                                                ideapark_players[frameID].mute();
                                            } else if (ideapark_players[frameID].videoSource == 'vimeo' && ideapark_players[frameID].hasOwnProperty('isVideoLoaded')) {
                                                ideapark_players[frameID].setVolume(0);
                                            }
                                        }
                                        _.addClass('mute');
                                    }
                                    return false;
                                });
                            };
                            root.onYouTubePlayerAPIReady = function() {
                                if ($home_slider) {
                                    $home_slider.find(".video[data-video-source=youtube]").append('<span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>').insertAfter();
                                    var playerDefaults = {
                                        autoplay: 0,
                                        autohide: 1,
                                        modestbranding: 0,
                                        rel: 0,
                                        showinfo: 0,
                                        controls: 0,
                                        disablekb: 1,
                                        enablejsapi: 0,
                                        iv_load_policy: 3
                                    };
                                    for (var i = 0; i < ideapark_videos.length; i++) {
                                        var obj = ideapark_videos[i];
                                        if (obj.source == 'youtube') {
                                            ideapark_players[obj.id] = new YT.Player(obj.id, {
                                                events: {
                                                    'onReady': ideaparkCreateYTEventReady(obj.id, obj),
                                                    'onStateChange': ideaparkCreateYTEventStateChange(obj.id, obj)
                                                },
                                                origin: ideapark_wp_vars.homeUrl,
                                                wmode: 'transparent',
                                                playerVars: playerDefaults
                                            });
                                            ideapark_players[obj.id].videoSource = 'youtube';
                                        }
                                    }
                                    ideaparkVideoRescale();
                                    ideaparkEnvInit();
                                }
                            };
                            root.ideaparkVimeoPlayerAPIReady = function() {
                                if ($home_slider) {
                                    $home_slider.find(".video[data-video-source=vimeo]").append('<span class="ip-shop-loop-loading"><i></i><i></i><i></i></span>').insertAfter();
                                    var player_on_loaded = function(data) {
                                        var frameId = this.frameId;
                                        ideapark_players[frameId].isVideoLoaded = true;
                                        $('#' + frameId + ' iframe').width('100%').height('100%');
                                        ideaparkVideoRescale();
                                        var video = $home_slider.find('.slick-slide[data-slick-index=' + $home_slider.slick('slickCurrentSlide') + '] .video .screen');
                                        if (video.length == 1 && video.get(0).id == frameId) {
                                            $home_slider.slick('slickPause');
                                            root.ideapark_slick_paused = true;
                                            var _ = ideapark_players[frameId];
                                            _.seekLock = true;
                                            _.setCurrentTime(ideapark_players[frameId].startSeconds).then(function(seconds) {
                                                _.play().then(function() {
                                                    _.seekLock = false;
                                                });
                                            });
                                            if (!$('.slick .volume').hasClass('mute')) {
                                                ideapark_players[frameId].setVolume(1);
                                            }
                                        }
                                    };
                                    var player_on_timeupdate = function(data) {
                                        var frameId = this.frameId;
                                        if (!$('#' + frameId + '.active').length) {
                                            $('#' + frameId).addClass('active');
                                        }
                                        if (data.seconds >= ideapark_players[frameId].endSeconds && (!this.hasOwnProperty('seekLock') || !this.seekLock)) {
                                            var _ = this;
                                            _.seekLock = true;
                                            _.pause().then(function() {
                                                _.setCurrentTime(ideapark_players[frameId].startSeconds).then(function(seconds) {
                                                    _.play().then(function() {
                                                        _.seekLock = false;
                                                    });
                                                });
                                            });
                                        }
                                        if (root.ideapark_slick_paused && $home_slider.data('interval') > 0) {
                                            $home_slider.slick('slickPlay');
                                            root.ideapark_slick_paused = false;
                                        }
                                    };
                                    for (var i = 0; i < ideapark_videos.length; i++) {
                                        var obj = ideapark_videos[i];
                                        if (obj.source == 'vimeo') {
                                            var player = ideapark_players[obj.id] = new Vimeo.Player(obj.id, {
                                                id: obj.vm.videoId,
                                                width: '640',
                                                byline: false,
                                                autopause: false,
                                                title: false
                                            });
                                            ideapark_players[obj.id].videoSource = 'vimeo';
                                            ideapark_players[obj.id].frameId = obj.id;
                                            ideapark_players[obj.id].startSeconds = obj.vm.startSeconds;
                                            ideapark_players[obj.id].endSeconds = obj.vm.endSeconds;
                                            player.setVolume(0);
                                            player.on('loaded', player_on_loaded);
                                            player.on('timeupdate', player_on_timeupdate);
                                        }
                                    }
                                    ideaparkEnvInit();
                                }
                            };
                            root.ideaparkCreateYTEventReady = function(frameID, obj) {
                                return function(event) {
                                    var player = ideapark_players[frameID];
                                    var the_div = $('#' + frameID);
                                    ideapark_players[frameID].isVideoLoaded = true;
                                    player.cueVideoById(obj.yt);
                                    player.mute();
                                    var video = $home_slider.find('.slick-slide[data-slick-index=' + $home_slider.slick('slickCurrentSlide') + '] .video .screen');
                                    if (video.length == 1 && video.get(0).id == frameID) {
                                        $home_slider.slick('slickPause');
                                        root.ideapark_slick_paused = true;
                                        ideapark_players[frameID].playVideo();
                                        if (!$('.slick .volume').hasClass('mute')) {
                                            ideapark_players[frameID].unMute();
                                        }
                                    }
                                };
                            };
                            root.ideaparkCreateYTEventStateChange = function(frameID, obj) {
                                return function(event) {
                                    var player = ideapark_players[frameID];
                                    var the_div = $('#' + frameID);
                                    if (event.data === 1) {
                                        the_div.addClass('active');
                                        if (root.ideapark_slick_paused && $home_slider.data('interval') > 0) {
                                            $home_slider.slick('slickPlay');
                                            root.ideapark_slick_paused = false;
                                        }
                                    } else if (event.data === 0) {
                                        player.seekTo(obj.start);
                                    }
                                };
                            };
                            root.ideaparkVideoRescale = function() {
                                var w = $home_slider.width() + 200,
                                    h = $home_slider.height() + 200;
                                for (var frameID in ideapark_players) {
                                    if ($('#' + frameID).parent().data('video-source') == 'youtube') {
                                        if (w / h > 16 / 9) {
                                            ideapark_players[frameID].setSize(w, w / 16 * 9);
                                        } else {
                                            ideapark_players[frameID].setSize(h / 9 * 16, h);
                                        }
                                    } else {
                                        if (w / h > 16 / 9) {
                                            $('#' + frameID).width(w).height(w / 16 * 9);
                                        } else {
                                            $('#' + frameID).width(h / 9 * 16).height(h);
                                        }
                                    }
                                }
                                if (w / h > 16 / 9) {
                                    $home_slider.find('.video .screen').css({
                                        'left': -100
                                    });
                                } else {
                                    $home_slider.find('.video .screen').each(function() {
                                        $(this).css({
                                            'left': -Math.abs($(this).outerWidth() - $home_slider.width()) / 2
                                        });
                                    });
                                }
                            };
                            $home_slider.find('.video').each(function() {
                                var _ = $(this),
                                    tag, firstScriptTag;
                                var video_id = _.data('video-id');
                                var video_start = _.data('video-start');
                                var video_duration = _.data('video-duration');
                                var player_id = _.data('id');
                                if (_.data('video-source') == 'youtube') {
                                    ideapark_videos.push({
                                        'id': player_id,
                                        'source': 'youtube',
                                        'start': video_start,
                                        'duration': video_duration,
                                        'yt': {
                                            'videoId': video_id,
                                            'startSeconds': video_start,
                                            'endSeconds': video_start + video_duration,
                                            'suggestedQuality': 'hd720'
                                        }
                                    });
                                    if (!is_youtube_api_init) {
                                        if ($('#youtube_player_api').length) {
                                            is_youtube_api_init = true;
                                            onYouTubePlayerAPIReady();
                                        } else {
                                            tag = document.createElement('script');
                                            tag.id = 'youtube_player_api';
                                            tag.src = 'https://www.youtube.com/player_api';
                                            firstScriptTag = document.getElementsByTagName('script')[0];
                                            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                                            is_youtube_api_init = true;
                                        }
                                    }
                                } else if (_.data('video-source') == 'vimeo') {
                                    ideapark_videos.push({
                                        'id': player_id,
                                        'source': 'vimeo',
                                        'start': video_start,
                                        'duration': video_duration,
                                        'vm': {
                                            'videoId': video_id,
                                            'startSeconds': video_start,
                                            'endSeconds': video_start + video_duration
                                        }
                                    });
                                    if (!is_vimeo_api_init) {
                                        tag = document.createElement('script');
                                        tag.src = 'https://player.vimeo.com/api/player.js';
                                        tag.onload = tag.onreadystatechange = function() {
                                            if (!is_vimeo_api_loaded && (!this.readyState || this.readyState == 'complete')) {
                                                is_vimeo_api_loaded = true;
                                                ideaparkVimeoPlayerAPIReady();
                                            }
                                        };
                                        firstScriptTag = document.getElementsByTagName('script')[0];
                                        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                                        is_vimeo_api_init = true;
                                    }
                                }
                            });
                        }
                    }
                };
                var src = $first_slide.css('background-image');
                var match = src.match(/\((.*?)\)/);
                if (match !== null) {
                    var url = src.match(/\((.*?)\)/)[1].replace(/('|")/g, '');
                    img.src = url;
                    if (img.complete) {
                        img.onload();
                    }
                } else {
                    img.onload();
                }
            }
        }
    };
    root.ideapark_init_home_review = function() {
        if ($('.slick-review').length) {
            $('.slick-review').on('init', function() {
                $('.slick-review.preloading').removeClass('preloading');
            });
            $('.slick-review').slick({
                dots: false,
                infinite: true,
                slidesToShow: 1,
                adaptiveHeight: true,
                prevArrow: ideapark_wp_vars.arrowLeft,
                nextArrow: ideapark_wp_vars.arrowRight,
                rtl: !!ideapark_wp_vars.isRtl,
                responsive: [{
                    breakpoint: 480,
                    settings: {
                        dots: true
                    }
                }]
            });
        }
    };
    root.ideapark_init_home_brands = function() {
        if ($('.slick-brands').length) {
            $('.slick-brands').on('init', function() {
                $('.slick-brands.preloading').removeClass('preloading');
            });
            $('.slick-brands').slick({
                dots: false,
                infinite: false,
                slidesToShow: 6,
                slidesToScroll: 6,
                prevArrow: ideapark_wp_vars.arrowLeft,
                nextArrow: ideapark_wp_vars.arrowRight,
                rtl: !!ideapark_wp_vars.isRtl,
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                    }
                }, {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                }, {
                    breakpoint: 690,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: true
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true
                    }
                }, {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }]
            });
        }
    };
    root.ideapark_init_home_tabs = function() {
        var $tabs = $(".home-tabs li");
        if ($tabs.length) {
            var set_tab_width = function() {
                var el = document.getElementById('ideapark-core-css');
                if (el) {
                    if (el.getAttribute('media') === 'all' && $tabs.first().outerWidth() > 0) {
                        var maxTabWidth = 0;
                        $tabs.each(function() {
                            var _ = $(this);
                            if (_.outerWidth() > maxTabWidth) {
                                maxTabWidth = _.outerWidth();
                            }
                        });
                        $(".home-tabs").css({
                            width: maxTabWidth + 10
                        });
                    } else {
                        setTimeout(set_tab_width, 100);
                    }
                }
            };
            set_tab_width();
            $('.home-tabs li a').click(function() {
                var _ = $(this);
                var $wrap = _.closest('.c-home-tabs');
                var $tab = $(_.attr('href'));
                var $li = $(this).parent('li');
                if ($li.hasClass('current')) {
                    $li.parent('ul').toggleClass('expand');
                    return false;
                }
                $('.home-tabs li.current', $wrap).removeClass('current');
                $li.addClass('current');
                $('.home-tab.current', $wrap).removeClass('current');
                $('.home-tab.visible', $wrap).removeClass('visible');
                $tab.addClass('visible');
                setTimeout(function() {
                    $tab.addClass('current');
                    setTimeout(function() {
                        $tab.find('[data-src]').each(function() {
                            var $this = $(this);
                            $this.attr('srcset', $this.attr('data-srcset'));
                            $this.attr('src', $this.attr('data-src'));
                            $this.attr('sizes', $this.attr('data-sizes'));
                            $this.removeAttr('data-srcset');
                            $this.removeAttr('data-src');
                            $this.removeAttr('data-sizes');
                        });
                    }, 500);
                }, 100);
                $li.parent('ul').removeClass('expand');
                return false;
            });
        }
    };
    root.ideapark_init_product_tabs = function() {
        var $tabs = $(".woocommerce-tabs .tabs li");
        if ($tabs.length) {
            var set_product_tab_width = function() {
                var el = document.getElementById('ideapark-core-css');
                if (el && el.getAttribute('media') === 'all' && $tabs.first().outerWidth() > 0) {
                    var maxTabWidth = 0;
                    $tabs.each(function() {
                        var _ = $(this);
                        if (_.outerWidth() > maxTabWidth) {
                            maxTabWidth = _.outerWidth();
                        }
                    });
                    $(".woocommerce-tabs .tabs").css({
                        width: maxTabWidth + 10
                    });
                } else {
                    setTimeout(set_product_tab_width, 100);
                }
            };
            set_product_tab_width();
        }
    };
    root.ideapark_wpadminbar_mobile = function() {
        var $ideapark_admin_bar = $('#wpadminbar');
        if ($ideapark_admin_bar.length) {
            var window_width = $window.width();
            if (window_width > 782 && $ideapark_admin_bar.hasClass('mobile')) {
                $ideapark_admin_bar.removeClass('mobile');
            } else if (window_width <= 782 && !$ideapark_admin_bar.hasClass('mobile')) {
                $ideapark_admin_bar.addClass('mobile');
            }
        }
    };
    root.ideapark_submenu_direction = function(force) {
        if (force) {
            ideapark_submenu_direction_set = false;
        }
        if ($(window).width() < 992 || ideapark_submenu_direction_set) {
            return true;
        }
        var $nav = $('.product-categories > ul');
        if ($nav.length) {
            var nav_center = Math.round($nav.offset().left + $nav.width() / 2 - 40);
            $nav.children('li').each(function() {
                var _ = $(this);
                if (_.offset().left <= nav_center && !_.hasClass('ltr')) {
                    _.removeClass('rtl');
                    _.addClass('ltr');
                }
                if (_.offset().left > nav_center && !_.hasClass('rtl')) {
                    _.removeClass('ltr');
                    _.addClass('rtl');
                }
            });
        }
        ideapark_submenu_direction_set = true;
    };
    root.ideapark_megamenu = function() {
        var window_width = $window.width();
        if (window_width >= 992) {
            var $uls = $('.main-menu .product-categories > ul > li[class*="col-"] > ul');
            if ($uls.length) {
                var $container = $('.main-menu .container').first();
                var container_left = $container.offset().left;
                var container_right = container_left + $container.width();
                $uls.each(function() {
                    var delta;
                    var _ = $(this);
                    if (!_.attr('data-left')) {
                        _.attr('data-left', _.css('left'));
                    } else {
                        _.css({
                            left: _.attr('data-left')
                        });
                    }
                    var ul_left = _.offset().left;
                    var ul_right = ul_left + _.width();
                    if (ul_left < container_left) {
                        delta = Math.round(parseInt(_.attr('data-left').replace('px', '')) + container_left - ul_left + 1);
                        _.css({
                            left: delta
                        });
                    }
                    if (ul_right > container_right) {
                        delta = Math.round(parseInt(_.attr('data-left').replace('px', '')) - ul_right + container_right - 1);
                        _.css({
                            left: delta
                        });
                    }
                });
                ideapark_megamenu_left_set = true;
            }
        } else if (window_width > 600 && window_width < 992) {
            var max_height = 0;
            var count = 0;
            $('.c-a-w').each(function() {
                var height = $(this).outerHeight();
                if (height > max_height) {
                    max_height = height;
                }
                count++;
            });
            if (max_height > 0) {
                $('.c-a-w').each(function() {
                    var height = $(this).outerHeight();
                    if (height < max_height) {
                        $(this).css({
                            height: max_height + '.px'
                        }).addClass('set-height');
                    }
                    if (count == 2) {
                        $(this).css({
                            width: '50%'
                        }).addClass('set-height');
                    } else if (count == 1) {
                        $(this).css({
                            width: '100%'
                        }).addClass('set-height');
                    }
                });
            }
        } else {
            $('.c-a-w.set-height').each(function() {
                $(this).css({
                    height: 'auto',
                    width: ''
                }).removeClass('set-height');
            });
        }
        $('.c-a-w.inv').removeClass('inv');
        if (ideapark_megamenu_left_set && window_width < 992) {
            $('.main-menu .product-categories > ul > li[class*="col-"] > ul[data-left]').each(function() {
                var _ = $(this);
                _.css({
                    left: 0
                });
                ideapark_megamenu_left_set = false;
            });
        }
    };
    root.ideapark_mega_menu_init = function() {
        ideapark_mega_menu_break(true);
        ideapark_submenu_direction(true);
        ideapark_megamenu();
    };
    root.ideapark_stickyNav = function() {
        if (ideapark_wp_vars.stickyMenu) {
            if (ideaparkStickHeight) {
                var scrollTop = $(window).scrollTop();
                var is_modal_open = $body.hasClass('menu-open') || $body.hasClass('sidebar-open');
                if (scrollTop > ideaparkStickHeight && !$body.hasClass('sticky')) {
                    $('#header').css({
                        height: ideaparkStickHeight
                    });
                    needUpdateIdeaparkStickHeight = true;
                    if (!is_modal_open) {
                        $('#header .main-menu').hide();
                    }
                    $body.addClass('sticky');
                    if (!is_modal_open) {
                        $('#header .main-menu').fadeTo(300, 1);
                    }
                    if (ideapark_parallax_on) {
                        ideapark_refresh_parallax();
                    }
                } else if (scrollTop <= ideaparkStickHeight && $body.hasClass('sticky')) {
                    $body.removeClass('sticky');
                    if (needUpdateIdeaparkStickHeight) {
                        $('#header').css({
                            height: ''
                        });
                        ideaparkStickHeight = $('#header').outerHeight();
                        needUpdateIdeaparkStickHeight = false;
                        if (ideapark_parallax_on) {
                            ideapark_refresh_parallax();
                        }
                    }
                }
            }
        }
    };
    root.ideapark_banners = function() {
        var $w = $window;
        if ($home_banners_count) {
            if ($w.width() <= 991) {
                var wst = $w.scrollTop();
                var wh = $w.height();
                var bh = $('.banner', $home_banners).first().outerHeight();
                var bot = $home_banners.offset().top;
                var mmh = $body.hasClass('sticky') ? $('.main-menu').outerHeight() + 50 : 0;
                var delta = (bot - mmh) - (bot + bh - wh);
                var index = Math.round((wst - (bot + bh - wh)) / delta * $home_banners_count);
                if (wst < bot - mmh && wst >= bot + bh - wh || lastBannerIndex != index || wst < bot + bh - wh && lastBannerIndex != 1 || wst > bot - mmh && lastBannerIndex != $home_banners_count) {
                    if (index <= 0) {
                        index = 1;
                    } else if (index >= $home_banners_count) {
                        index = $home_banners_count;
                    }
                    if (!$home_banners.hasClass('shift-' + index)) {
                        $home_banners.removeClass();
                        $home_banners.addClass('shift-' + index);
                    }
                    lastBannerIndex = index;
                }
                $home_banners.removeClass('preloading');
            }
        }
    };
    root.ideapark_open_photo_swipe = function(imageWrap, index) {
        var $this, $a, $img, items = [],
            size, item;
        $slick_product_single_slides.each(function() {
            $this = $(this);
            $a = $this.children('a');
            $img = $a.children('img');
            size = $a.data('size').split('x');
            item = {
                src: $a.attr('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10),
                msrc: $img.attr('src'),
                el: $a[0]
            };
            items.push(item);
        });
        var options = {
            index: index,
            showHideOpacity: true,
            bgOpacity: 1,
            loop: false,
            closeOnVerticalDrag: false,
            mainClass: ($slick_product_single_slides.length > 1) ? 'pswp--minimal--dark' : 'pswp--minimal--dark pswp--single--image',
            barsSize: {
                top: 0,
                bottom: 0
            },
            captionEl: false,
            fullscreenEl: false,
            zoomEl: false,
            shareEl: false,
            counterEl: false,
            tapToClose: true,
            tapToToggleControls: false
        };
        var pswpElement = $('.pswp')[0];
        var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
        gallery.listen('initialZoomIn', function() {
            $(this).product_thumbnails_speed = $slick_product_thumbnails.slick('slickGetOption', 'speed');
            $slick_product_thumbnails.slick('slickSetOption', 'speed', 0);
        });
        var slide = index;
        gallery.listen('beforeChange', function(dirVal) {
            slide = slide + dirVal;
            $slick_product_single.slick('slickGoTo', slide, true);
        });
        gallery.listen('close', function() {
            $slick_product_thumbnails.slick('slickSetOption', 'speed', $(this).product_thumbnails_speed);
        });
    };
    root.ajaxSearchFunction = ideapark_debounce(function() {
        var search = $("#ajax-search-input").val();
        $.ajax({
            url: ideapark_wp_vars.ajaxUrl,
            type: 'POST',
            data: {
                action: 'ideapark_ajax_search',
                s: search
            },
            success: function(results) {
                $(".js-ajax-search-result").html(results).addClass('loaded');
                $('.search-shadow').removeClass('loading');
            }
        });
    }, 500);
    root.ideapark_to_top_button = function() {
        if ($to_top_button.length) {
            if ($window.scrollTop() > 500) {
                if (!$to_top_button.hasClass('active')) {
                    $to_top_button.addClass('active');
                }
            } else {
                if ($to_top_button.hasClass('active')) {
                    $to_top_button.removeClass('active');
                }
            }
        }
    };
})(jQuery, this);
