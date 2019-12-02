 <?php get_header();?>
 

    <main>
      <div class="main_box">
        <div data-cover-image-frame class="main_img">
          <div data-cover-image-container class="frame">
            <img data-cover-image-back class="image" src="/images/index/mainvis_ribbon2019.jpg">
            <img data-cover-image-fore class="image" src="/images/index/mainvis_ribbon2019.jpg">
          </div>
          
          <div data-link-box-ribbon2019 class="link_box_ribbon2019" style="display:block;">
            <div class="link_box_bg">
              <div class="link_box_inner">
                <div class="link_btn">
                  <a href="https://c.cocacola.co.jp/ribbon2019/" target="_blank">
                    <img src="/images/index/ribbon2019_btn2.png" alt="アイスケーキとLINEポイントのシリアルコードの入力はこちら！">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
          <div data-link-box-ribbon2019-2 class="link_box_ribbon2019_2" style="display:block;">
            <div class="link_box_bg">
              <div class="link_box_inner">
                <div class="link_btn">
                  <a href="https://c.cocacola.co.jp/ribbon2019/" target="_blank">
                    <img src="/images/index/ribbon2019_bnr.png" alt="もれなく聴けるLittle Glee Monsterの楽曲を楽しもう！">
                  </a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <script>
    (function () {
        'use strict';

        /* <!-{* カル拏セルの動く秒摧 default: 8000 *}--> */
        var interval = 8000;

        var module = {};

        (function (module, exports) {
            /*!
             * @license catch-message.js ver.0.0.0 Copyright(c) 2016 sasa+1
             * https://github.com/sasaplus1-prototype/catch-message.js
             * Released under the MIT license.
             */
            !function (t, e) {
                "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.catchMessage = e() : t.catchMessage = e()
            }(this, function () {
                return function (t) {
                    function e(o) {
                        if (n[o])return n[o].exports;
                        var r = n[o] = {exports: {}, id: o, loaded: !1};
                        return t[o].call(r.exports, r, r.exports, e), r.loaded = !0, r.exports
                    }

                    var n = {};
                    return e.m = t, e.c = n, e.p = "", e(0)
                }([function (t, e, n) {
                    "use strict";
                    function o(t) {
                        var e, n, o, r, i;
                        for (e = 0, n = c.length; e < n; ++e)o = c[e].handler, r = c[e].options, i = r.origin || s, t.origin === i && o(r.json ? JSON.parse(t.data) : t.data)
                    }

                    function r(t, e) {
                        c.push({handler: t, options: e})
                    }

                    var i = n(1), s = n(2).get(), c = [];
                    i.on(window, "message", o, !1), t.exports = r
                }, function (t, e) {
                    "use strict";
                    function n(t, e, n, i) {
                        var s = function () {
                            switch (o(t, e, s, i), arguments.length) {
                                case 0:
                                    return n.call(this);
                                case 1:
                                    return n.call(this, arguments[0]);
                                case 2:
                                    return n.call(this, arguments[0], arguments[1]);
                                case 3:
                                    return n.call(this, arguments[0], arguments[1], arguments[2]);
                                default:
                                    return n.apply(this, arguments)
                            }
                        };
                        return r(t, e, s, i)
                    }

                    var o = "undefined" != typeof removeEventListener ? function (t, e, n, o) {
                        return t.removeEventListener(e, n, o)
                    } : function (t, e, n) {
                        return t.detachEvent("on" + e, n)
                    }, r = "undefined" != typeof addEventListener ? function (t, e, n, o) {
                        return t.addEventListener(e, n, o)
                    } : function (t, e, n) {
                        return t.attachEvent("on" + e, n)
                    };
                    t.exports = {off: o, on: r, once: n}
                }, function (t, e) {
                    "use strict";
                    function n() {
                        return o || (o = window.location), o.origin || o.protocol + "//" + o.hostname + ("" !== o.port ? ":" + o.port : "")
                    }

                    var o;
                    t.exports = {get: n}
                }])
            });
        }(module, module));

        var catchMessage = module.exports;

        function startAutoMove() {
            var carousel = window.liquidCarousel.instances.footerCarousel;

            var point = 0;

            setInterval(function () {
                point += carousel.viewCount;

                if (point === carousel.itemCount) {
                    point = 0;
                } else if (point + carousel.viewCount > carousel.itemCount) {
                    point = carousel.itemCount - carousel.viewCount;
                }

                carousel.flipsnap.moveToPoint(point);
            }, interval);
        }

        catchMessage(function (json) {
            var data;

            try {
                data = JSON.parse(json);
            } catch (e) {
                return;
            }

            if (data.name === 'liquid-carousel' && data.event === 'loaded') {
                startAutoMove();
            }
        }, {json: false});
    }());
</script>

<script data-liquid-carousel-json type="application/json">
    {
        "apply": true,
        "autoRefresh": true,
        "flipsnapOptions": {
            "disableTouch": true
        },
        "instanceVariableName": "footerCarousel",
        "margins": {
            "left": null,
            "right": "3.50877%"
        },
        "selectors": {
            "frameElement": "[data-carousel-frame]",
            "innerElement": "[data-carousel-inner]"
        },
        "viewCount": 3
    }
</script>
<script async charset="utf-8" src="/js/liquid-carousel.min.js"></script>

  <?php get_footer();?>

