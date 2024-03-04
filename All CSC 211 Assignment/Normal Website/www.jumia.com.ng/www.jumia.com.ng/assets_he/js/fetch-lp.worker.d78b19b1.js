(() => {
    var e = {
            6307: e => {
                e.exports = function(e, t) {
                    return t = t || {}, new Promise((function(r, n) {
                        var o = new XMLHttpRequest,
                            i = [],
                            c = {},
                            a = function e() {
                                return {
                                    ok: 2 == (o.status / 100 | 0),
                                    statusText: o.statusText,
                                    status: o.status,
                                    url: o.responseURL,
                                    text: function() {
                                        return Promise.resolve(o.responseText)
                                    },
                                    json: function() {
                                        return Promise.resolve(o.responseText).then(JSON.parse)
                                    },
                                    blob: function() {
                                        return Promise.resolve(new Blob([o.response]))
                                    },
                                    clone: e,
                                    headers: {
                                        keys: function() {
                                            return i
                                        },
                                        entries: function() {
                                            return i.map((function(e) {
                                                return [e, o.getResponseHeader(e)]
                                            }))
                                        },
                                        get: function(e) {
                                            return o.getResponseHeader(e)
                                        },
                                        has: function(e) {
                                            return null != o.getResponseHeader(e)
                                        }
                                    }
                                }
                            };
                        for (var s in o.open(t.method || "get", e, !0), o.onload = function() {
                                o.getAllResponseHeaders().toLowerCase().replace(/^(.+?):/gm, (function(e, t) {
                                    c[t] || i.push(c[t] = t)
                                })), r(a())
                            }, o.onerror = n, o.withCredentials = "include" == t.credentials, t.headers) o.setRequestHeader(s, t.headers[s]);
                        o.send(t.body || null)
                    }))
                }
            }
        },
        t = {};

    function r(n) {
        var o = t[n];
        if (void 0 !== o) return o.exports;
        var i = t[n] = {
            exports: {}
        };
        return e[n](i, i.exports, r), i.exports
    }(() => {
        "use strict";
        r(6307);

        function e(e, t) {
            this.name = "AggregateError", this.errors = e, this.message = t || ""
        }
        e.prototype = Error.prototype;
        var t = setTimeout;

        function n(e) {
            return Boolean(e && void 0 !== e.length)
        }

        function o() {}

        function i(e) {
            if (!(this instanceof i)) throw new TypeError("Promises must be constructed via new");
            if ("function" != typeof e) throw new TypeError("not a function");
            this._state = 0, this._handled = !1, this._value = void 0, this._deferreds = [], l(e, this)
        }

        function c(e, t) {
            for (; 3 === e._state;) e = e._value;
            0 !== e._state ? (e._handled = !0, i._immediateFn((function() {
                var r = 1 === e._state ? t.onFulfilled : t.onRejected;
                if (null !== r) {
                    var n;
                    try {
                        n = r(e._value)
                    } catch (e) {
                        return void s(t.promise, e)
                    }
                    a(t.promise, n)
                } else(1 === e._state ? a : s)(t.promise, e._value)
            }))) : e._deferreds.push(t)
        }

        function a(e, t) {
            try {
                if (t === e) throw new TypeError("A promise cannot be resolved with itself.");
                if (t && ("object" == typeof t || "function" == typeof t)) {
                    var r = t.then;
                    if (t instanceof i) return e._state = 3, e._value = t, void u(e);
                    if ("function" == typeof r) return void l((n = r, o = t, function() {
                        n.apply(o, arguments)
                    }), e)
                }
                e._state = 1, e._value = t, u(e)
            } catch (t) {
                s(e, t)
            }
            var n, o
        }

        function s(e, t) {
            e._state = 2, e._value = t, u(e)
        }

        function u(e) {
            2 === e._state && 0 === e._deferreds.length && i._immediateFn((function() {
                e._handled || i._unhandledRejectionFn(e._value)
            }));
            for (var t = 0, r = e._deferreds.length; t < r; t++) c(e, e._deferreds[t]);
            e._deferreds = null
        }

        function f(e, t, r) {
            this.onFulfilled = "function" == typeof e ? e : null, this.onRejected = "function" == typeof t ? t : null, this.promise = r
        }

        function l(e, t) {
            var r = !1;
            try {
                e((function(e) {
                    r || (r = !0, a(t, e))
                }), (function(e) {
                    r || (r = !0, s(t, e))
                }))
            } catch (e) {
                if (r) return;
                r = !0, s(t, e)
            }
        }
        i.prototype.catch = function(e) {
            return this.then(null, e)
        }, i.prototype.then = function(e, t) {
            var r = new this.constructor(o);
            return c(this, new f(e, t, r)), r
        }, i.prototype.finally = function(e) {
            var t = this.constructor;
            return this.then((function(r) {
                return t.resolve(e()).then((function() {
                    return r
                }))
            }), (function(r) {
                return t.resolve(e()).then((function() {
                    return t.reject(r)
                }))
            }))
        }, i.all = function(e) {
            return new i((function(t, r) {
                if (!n(e)) return r(new TypeError("Promise.all accepts an array"));
                var o = Array.prototype.slice.call(e);
                if (0 === o.length) return t([]);
                var i = o.length;

                function c(e, n) {
                    try {
                        if (n && ("object" == typeof n || "function" == typeof n)) {
                            var a = n.then;
                            if ("function" == typeof a) return void a.call(n, (function(t) {
                                c(e, t)
                            }), r)
                        }
                        o[e] = n, 0 == --i && t(o)
                    } catch (e) {
                        r(e)
                    }
                }
                for (var a = 0; a < o.length; a++) c(a, o[a])
            }))
        }, i.any = function(t) {
            var r = this;
            return new r((function(n, o) {
                if (!t || void 0 === t.length) return o(new TypeError("Promise.any accepts an array"));
                var i = Array.prototype.slice.call(t);
                if (0 === i.length) return o();
                for (var c = [], a = 0; a < i.length; a++) try {
                    r.resolve(i[a]).then(n).catch((function(t) {
                        c.push(t), c.length === i.length && o(new e(c, "All promises were rejected"))
                    }))
                } catch (e) {
                    o(e)
                }
            }))
        }, i.allSettled = function(e) {
            return new this((function(t, r) {
                if (!e || void 0 === e.length) return r(new TypeError(typeof e + " " + e + " is not iterable(cannot read property Symbol(Symbol.iterator))"));
                var n = Array.prototype.slice.call(e);
                if (0 === n.length) return t([]);
                var o = n.length;

                function i(e, r) {
                    if (r && ("object" == typeof r || "function" == typeof r)) {
                        var c = r.then;
                        if ("function" == typeof c) return void c.call(r, (function(t) {
                            i(e, t)
                        }), (function(r) {
                            n[e] = {
                                status: "rejected",
                                reason: r
                            }, 0 == --o && t(n)
                        }))
                    }
                    n[e] = {
                        status: "fulfilled",
                        value: r
                    }, 0 == --o && t(n)
                }
                for (var c = 0; c < n.length; c++) i(c, n[c])
            }))
        }, i.resolve = function(e) {
            return e && "object" == typeof e && e.constructor === i ? e : new i((function(t) {
                t(e)
            }))
        }, i.reject = function(e) {
            return new i((function(t, r) {
                r(e)
            }))
        }, i.race = function(e) {
            return new i((function(t, r) {
                if (!n(e)) return r(new TypeError("Promise.race accepts an array"));
                for (var o = 0, c = e.length; o < c; o++) i.resolve(e[o]).then(t, r)
            }))
        }, i._immediateFn = "function" == typeof setImmediate && function(e) {
            setImmediate(e)
        } || function(e) {
            t(e, 0)
        }, i._unhandledRejectionFn = function(e) {
            "undefined" != typeof console && console && console.warn("Possible Unhandled Promise Rejection:", e)
        };
        var p = e => caches.open("heRequestsV5").then(e).catch((e => {}));
        try {
            localStorage.setItem("t", "t"), localStorage.removeItem("t")
        } catch (e) {
            !1
        }
        const h = "object" == typeof caches && "function" == typeof caches.open ? function(e, t) {
            var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1;
            return new Promise(((n, o) => {
                var i;
                (i = e, p((e => e.match(i)))).then((i => {
                    void 0 === i || ((e, t) => ((new Date).getTime() - new Date(e.headers.get("Date")).getTime()) / 36e5 > t)(i, r) ? fetch(e, t).then((t => {
                        t.status >= 200 && t.status <= 400 ? ((e, t) => p((r => r.put(e, t))))(e, t.clone()).then((() => {
                            n(t)
                        })) : n(t)
                    })).catch((e => {
                        o(e)
                    })) : n(i)
                }))
            }))
        } : fetch;
        var y = ["body"],
            d = ["body"];

        function v(e, t) {
            if (null == e) return {};
            var r, n, o = function(e, t) {
                if (null == e) return {};
                var r, n, o = {},
                    i = Object.keys(e);
                for (n = 0; n < i.length; n++) r = i[n], t.indexOf(r) >= 0 || (o[r] = e[r]);
                return o
            }(e, t);
            if (Object.getOwnPropertySymbols) {
                var i = Object.getOwnPropertySymbols(e);
                for (n = 0; n < i.length; n++) r = i[n], t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (o[r] = e[r])
            }
            return o
        }

        function g(e, t) {
            var r = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e);
                t && (n = n.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))), r.push.apply(r, n)
            }
            return r
        }

        function m(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {};
                t % 2 ? g(Object(r), !0).forEach((function(t) {
                    var n, o, i, c;
                    n = e, o = t, i = r[t], (o = "symbol" == typeof(c = function(e, t) {
                        if ("object" != typeof e || !e) return e;
                        var r = e[Symbol.toPrimitive];
                        if (void 0 !== r) {
                            var n = r.call(e, "string");
                            if ("object" != typeof n) return n;
                            throw new TypeError("@@toPrimitive must return a primitive value.")
                        }
                        return String(e)
                    }(o)) ? c : String(c)) in n ? Object.defineProperty(n, o, {
                        value: i,
                        enumerable: !0,
                        configurable: !0,
                        writable: !0
                    }) : n[o] = i
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r)) : g(Object(r)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                }))
            }
            return e
        }
        var b = e => Object.keys(e).map((t => "".concat(encodeURIComponent(t), "=").concat(encodeURIComponent(e[t])))).join("&"),
            w = function() {
                return m({
                    credentials: "same-origin"
                }, arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {})
            },
            j = function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "GET",
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2],
                    {
                        body: n
                    } = t,
                    o = v(t, y);
                return w(m(m(m({}, o), {}, {
                    method: e
                }, n ? {
                    body: r ? b(n) : n
                } : {}), {}, {
                    headers: m(m({}, o.headers || {}), {}, {
                        Accept: "application/json",
                        "X-Request-Type": "async"
                    })
                }))
            },
            O = function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "GET",
                    t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                    r = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2],
                    {
                        body: n
                    } = t,
                    o = v(t, d);
                return w(m(m(m({}, o), {}, {
                    method: e
                }, n ? {
                    body: r ? b(n) : n
                } : {}), {}, {
                    headers: m(m({}, o.headers || {}), {}, {
                        "X-Request-Type": "async"
                    })
                }))
            };

        function P(e, t) {
            var r = Object.keys(e);
            if (Object.getOwnPropertySymbols) {
                var n = Object.getOwnPropertySymbols(e);
                t && (n = n.filter((function(t) {
                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                }))), r.push.apply(r, n)
            }
            return r
        }

        function _(e) {
            for (var t = 1; t < arguments.length; t++) {
                var r = null != arguments[t] ? arguments[t] : {};
                t % 2 ? P(Object(r), !0).forEach((function(t) {
                    var n, o, i, c;
                    n = e, o = t, i = r[t], (o = "symbol" == typeof(c = function(e, t) {
                        if ("object" != typeof e || !e) return e;
                        var r = e[Symbol.toPrimitive];
                        if (void 0 !== r) {
                            var n = r.call(e, "string");
                            if ("object" != typeof n) return n;
                            throw new TypeError("@@toPrimitive must return a primitive value.")
                        }
                        return String(e)
                    }(o)) ? c : String(c)) in n ? Object.defineProperty(n, o, {
                        value: i,
                        enumerable: !0,
                        configurable: !0,
                        writable: !0
                    }) : n[o] = i
                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r)) : P(Object(r)).forEach((function(t) {
                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
                }))
            }
            return e
        }
        var T = "Not Found Error",
            E = {
                activeLanguage: "en",
                useFetchWithCache: !1,
                hoursTTL: 1,
                handleNotFound: !1,
                params: {},
                fetchAsJSON: !1
            };
        const S = function(e, t, r) {
            var n, o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {},
                i = _(_({}, E), o),
                c = _(_({}, E.params), o.params);
            (n = i.useFetchWithCache, n ? h : fetch)(((e, t) => {
                var {
                    activeLanguage: r
                } = t;
                return ((e, t = {}) => Object.keys(t).length ? `${e}${e.indexOf("?")>-1?"&":"?"}${(e=>Object.keys(e).map((t=>Array.isArray(e[t])?e[t].map((e=>`${t}[]=${e}`)).join("&"):`${t}=${e[t]}`)).join("&"))(t)}` : e)(e, {
                    lang: r
                })
            })(e, i), (i.fetchAsJSON ? j : O)("GET", c), i.hoursTTL).then((e => {
                if (i.handleNotFound && 404 === e.status) return e;
                if (e.status < 200 || e.status > 400) throw new Error(T);
                if (i.useFetchWithCache && e.redirected) throw new Error("Lazy partial redirected");
                return e
            })).then((e => i.fetchAsJSON ? e.json() : e.text())).then(t).catch((e => {
                if ("function" == typeof r && r(), e.message !== T) throw e
            }))
        };
        self.onmessage = e => {
            var {
                data: {
                    fetchParams: t
                }
            } = e;
            t && function(e, t) {
                e && S(e, (e => {
                    self.postMessage({
                        type: "worker",
                        response: e
                    })
                }), (e => {
                    self.postMessage({
                        type: "worker",
                        error: !0,
                        e: e && e.toString()
                    })
                }), t)
            }(...t)
        }
    })()
})();