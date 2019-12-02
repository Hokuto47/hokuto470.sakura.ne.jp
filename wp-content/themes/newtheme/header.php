 <!DOCTYPE html>
<html>
 	<head>
 		<?php wp_head();?>
  <meta charset="Shift_JIS">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="Coca-Cola(Japan) company,Limited">
  <link rel="shortcut icon" href="/common/images/ko_icon.ico">
  <title>コカ･コーラ（Coca-Cola）公式ブランドサイト</title>
  <meta name="description" content="みんなで楽しもう、リボンボトル。もれなく聴けるクリスマスソング♪その場で当たるクリスマスギフト！">
  <meta name="keywords" content="コカ･コーラ,コカコーラ,コーラ,コーク,coca,cola,coke,リボンボトル,ribon bottle,ウィンター,winter,クリスマス,Xmas,Christmas,Little Glee Monster,リトルグリーモンスター,リトグリ,限定ソング">
  <link rel="alternate" media="handheld" type="text/html" href="https://www.cocacola.jp/i/">
  <link rel="alternate" media="only screen and (max-width: 640px)" href="https://www.cocacola.jp/spn/">
  <link rel="canonical" href="https://www.cocacola.jp">
  <meta name="viewport" content="width=750, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="index,follow">
  <meta property="og:title" content="コカ･コーラ（Coca-Cola）公式ブランドサイト">
  <meta property="og:site_name" content="コカ･コーラ（Coca-Cola）公式ブランドサイト">
  <meta property="og:description" content="コカ･コーラ（Coca-Cola）公式ブランドサイト。炭酸の刺激と独特の味わいで、ココロとカラダの両方をリフレッシュ。">
  <meta property="og:url" content="https://www.cocacola.jp/">
  <meta property="og:image" content="https://www.cocacola.jp/images/og_ribbon2019.jpg">
  
  <link crossorigin rel="preload" as="image" type="image/jpg" href="/images/og_ribbon2019.jpg">
  
  <link href="/css/common2017.css" rel="stylesheet" type="text/css">
  <link href="/css/index.css" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]>
    <script src="/common/js/gateway/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
    (function () {

      // モジュールの受け渡し
      var module = {};

      // catch-messageの読み込み
      (function (module, exports) {
        /*!
         * @license catch-message.js ver.0.0.0 Copyright(c) 2016 sasa+1
         * https://github.com/sasaplus1-prototype/catch-message.js
         * Released under the MIT license.
         */
        !(function (t, e) {
          'object' == typeof exports && 'object' == typeof module
            ? (module.exports = e())
            : 'function' == typeof define && define.amd
              ? define([], e)
              : 'object' == typeof exports
                ? (exports.catchMessage = e())
                : (t.catchMessage = e());
        })(this, function () {
          return (function (t) {
            function e(o) {
              if (n[o]) return n[o].exports;
              var r = (n[o] = { exports: {}, id: o, loaded: !1 });
              return (
                t[o].call(r.exports, r, r.exports, e), (r.loaded = !0), r.exports
              );
            }

            var n = {};
            return (e.m = t), (e.c = n), (e.p = ''), e(0);
          })([
            function (t, e, n) {
              'use strict';
              function o(t) {
                var e, n, o, r, i;
                for (e = 0, n = c.length; e < n; ++e)
                  (o = c[e].handler),
                    (r = c[e].options),
                    (i = r.origin || s),
                    t.origin === i && o(r.json ? JSON.parse(t.data) : t.data);
              }

              function r(t, e) {
                c.push({ handler: t, options: e });
              }

              var i = n(1),
                s = n(2).get(),
                c = [];
              i.on(window, 'message', o, !1), (t.exports = r);
            },
            function (t, e) {
              'use strict';
              function n(t, e, n, i) {
                var s = function () {
                  switch ((o(t, e, s, i), arguments.length)) {
                    case 0:
                      return n.call(this);
                    case 1:
                      return n.call(this, arguments[0]);
                    case 2:
                      return n.call(this, arguments[0], arguments[1]);
                    case 3:
                      return n.call(this, arguments[0], arguments[1], arguments[2]);
                    default:
                      return n.apply(this, arguments);
                  }
                };
                return r(t, e, s, i);
              }

              var o =
                'undefined' != typeof removeEventListener
                  ? function (t, e, n, o) {
                    return t.removeEventListener(e, n, o);
                  }
                  : function (t, e, n) {
                    return t.detachEvent('on' + e, n);
                  },
                r =
                  'undefined' != typeof addEventListener
                    ? function (t, e, n, o) {
                      return t.addEventListener(e, n, o);
                    }
                    : function (t, e, n) {
                      return t.attachEvent('on' + e, n);
                    };
              t.exports = { off: o, on: r, once: n };
            },
            function (t, e) {
              'use strict';
              function n() {
                return (
                  o || (o = window.location),
                  o.origin ||
                  o.protocol +
                  '//' +
                  o.hostname +
                  ('' !== o.port ? ':' + o.port : '')
                );
              }

              var o;
              t.exports = { get: n };
            }
          ]);
        });
      })(module, module);

      var catchMessage = module.exports;

      // load-imageの読み込み
      (function (module, exports) {
        /*!
         * @license load-image.js ver.1.0.0 Copyright(c) 2016 sasa+1
         * https://github.com/sasaplus1-prototype/load-image.js
         * Released under the MIT license.
         */
        !(function (t, n) {
          'object' == typeof exports && 'object' == typeof module
            ? (module.exports = n())
            : 'function' == typeof define && define.amd
              ? define([], n)
              : 'object' == typeof exports
                ? (exports.loadImage = n())
                : (t.loadImage = n());
        })(this, function () {
          return (function (t) {
            function n(e) {
              if (r[e]) return r[e].exports;
              var o = (r[e] = { exports: {}, id: e, loaded: !1 });
              return (
                t[e].call(o.exports, o, o.exports, n), (o.loaded = !0), o.exports
              );
            }

            var r = {};
            return (n.m = t), (n.c = r), (n.p = ''), n(0);
          })([
            function (t, n, r) {
              'use strict';
              function e(t, n) {
                var r = new Image();
                (r.onabort = function (t) {
                  n(new Error('onabort'), t);
                }),
                  (r.onerror = function (t) {
                    n(new Error('onerror'), t);
                  }),
                  (r.onload = function () {
                    n(null, r);
                  }),
                  (r.src = t),
                  (r.naturalWidth || r.complete) && n(null, r);
              }

              function o(t, n) {
                return i(n)
                  ? void e(t, u(n))
                  : new o.Promise(function (n, r) {
                    e(t, function (t, e) {
                      t ? r(t) : n(e);
                    });
                  });
              }

              var i = r(1),
                u = r(2);
              (o.Promise = Function('return this')().Promise), (t.exports = o);
            },
            function (t, n) {
              'use strict';
              var r = Object.prototype.toString;
              t.exports = function (t) {
                return 'function' == typeof t || '[object Function]' === r.call(t);
              };
            },
            function (t, n, r) {
              'use strict';
              var e = r(1);
              t.exports = function (t) {
                var n;
                if (!e(t)) throw new TypeError('fn must be a Function');
                return (
                  (n = 1),
                  function () {
                    var r, e;
                    if (!(n-- <= 0))
                      switch (((r = arguments), (e = 'call'), r.length)) {
                        case 0:
                          return t[e](this);
                        case 1:
                          return t[e](this, r[0]);
                        case 2:
                          return t[e](this, r[0], r[1]);
                        case 3:
                          return t[e](this, r[0], r[1], r[2]);
                        default:
                          return t.apply(this, r);
                      }
                  }
                );
              };
            }
          ]);
        });
      })(module, module);

      var loadImage = module.exports;

      // イメージの適用
      catchMessage(
        function (json) {
          var data;

          try {
            data = JSON.parse(json);
          } catch (e) {
            return;
          }

          if (data.name === 'cover-image' && data.event === 'loaded') {
            loadImage('/images/index/mainvis_ribbon2019.jpg', function () {
              coverImage.apply();
            });
          }
        },
        { json: false }
      );

      // loopImage
      catchMessage(
        function (json) {
          var data;

          try {
            data = JSON.parse(json);
          } catch (e) {
            return;
          }
          if (data.name === 'loop-image' && data.event === 'loaded') {
            LoopImage.instances.mainVisual.on('after', function (images) {
              if (
                $(images.backElement).attr('src') ===
                '/images/index/mainvis_ribbon2019.jpg'
              ) {
              }
            });
          }
        },
        { json: false }
      );
    })();
  </script>

  <script>
    (function () {
      var module = {},
        domready;

      // domreadyの読み込み
      (function (module, exports) {
        /*!
         * domready (c) Dustin Diaz 2014 - License MIT
         */
        !(function (e, t) {
          typeof module != 'undefined'
            ? (module.exports = t())
            : typeof define == 'function' && typeof define.amd == 'object'
              ? define(t)
              : (this[e] = t());
        })('domready', function () {
          var e = [],
            t,
            n = document,
            r = n.documentElement.doScroll,
            i = 'DOMContentLoaded',
            s = (r ? /^loaded|^c/ : /^loaded|^i|^c/).test(n.readyState);
          return (
            s ||
            n.addEventListener(
              i,
              (t = function () {
                n.removeEventListener(i, t), (s = 1);
                while ((t = e.shift())) t();
              })
            ),
            function (t) {
              s ? setTimeout(t, 0) : e.push(t);
            }
          );
        });
      })(module, module);

      domready = module.exports;

      domready(function () {

        // フレームの高さの調整
        (function () {
          var header = document.querySelector('header'),
            footer = document.querySelector('footer'),
            frame = document.querySelector('[data-cover-image-frame]');

          if (!header || !footer || !frame) {
            return;
          }

          function resizeFrame() {
            frame.style.height = window.innerHeight - header.scrollHeight - 10 + 'px';
          }

          window.addEventListener('resize', resizeFrame, false);
          window.addEventListener('load', resizeFrame, false);

          resizeFrame();
        })();

        // .bnr-ballのスタイルの調整
        (function () {
          var frame = document.querySelector('[data-cover-image-frame]'),
            linkMatchBall = document.querySelector('.bnr-ball'),
            frameImage = document.querySelector('[data-cover-image-fore]')
          relativeBox = document.querySelector('[data-link-box-ribbon2019] .link_box_inner');

          if (!linkMatchBall) { return; }

          function resizeFrame() {
            setTimeout(function () {
              adjustMatchBallBannerPosition();
            }, 5);
          }

          function adjustMatchBallBannerPosition() {
            var relativeLeft = window.innerWidth < 802 ? 0 : (window.innerWidth - 802) / 2;
            var frameWidth = parseFloat(frame.clientWidth);
            var frameHeight = parseFloat(frame.clientHeight);
            var frameImagePosition = {
              marginLeft: frameImage.style.left !== '50%'
                ? 0
                : frameWidth / 2 + parseFloat(frameImage.style.marginLeft) || 0,
              marginTop: frameImage.style.top !== '50%'
                ? 0
                : frameHeight / 2 + parseFloat(frameImage.style.marginTop) || 0,
              width: parseFloat(frameImage.clientWidth),
              height: parseFloat(frameImage.clientHeight)
            };
            linkMatchBall.style.left = -relativeLeft + frameImagePosition.marginLeft + frameImagePosition.width * 0.451 + 'px';
            linkMatchBall.style.top = 60 + 137 - frameHeight + frameImagePosition.marginTop + frameImagePosition.height * 0.565 - 62 + 'px';
          }

          window.addEventListener('resize', resizeFrame, false);
          window.addEventListener('load', resizeFrame, false);

          resizeFrame();
        })();

        // [data-link-box-hw2017]のスタイルの調整
        (function () {
          var linkBox = document.querySelector('[data-link-box-ribbon2019-2]');

          if (!linkBox) {
            return;
          }

          function repositionBoxes() {
            if (window.innerHeight < 800) {
              linkBox.style.top = '';
              linkBox.style.top = '12%';
            } else {
              linkBox.style.top = '20%';
              //linkBox.style.bottom = window.innerHeight / 2 - 260 + 'px';
            }
          }

          window.addEventListener('resize', repositionBoxes, false);

          repositionBoxes();
        })();
      });
    })();
  </script>

  <script data-cover-image-json type="application/json">
          {
              "selectorPairs": [
                  {
                      "containerSelector": "[data-cover-image-container]",
                      "targetSelector": "[data-cover-image-back]"
                  },
                  {
                      "containerSelector": "[data-cover-image-container]",
                      "targetSelector": "[data-cover-image-fore]"
                  }
              ]
          }
      </script>
  <script async charset="utf-8" src="/js/cover-image.min.js"></script>

  <script data-loop-image-json type="application/json">
          {
              "className": "fade-out",
              "images": [
                  "/images/index/mainvis_ribbon2019.jpg"
              ],
              "instanceVariableName": "mainVisual",
              "interval": 5000,
              "loop": true,
              "selectors": {
                  "backElement": "[data-cover-image-back]",
                  "foreElement": "[data-cover-image-fore]"
              },
              "start": true
          }
      </script>
  <script async charset="utf-8" src="/js/loop-image.min.js"></script>

  <script async charset="utf-8" src="/js/share-analytics.min.js"></script>


                    <script>var w=window;if(w.performance||w.mozPerformance||w.msPerformance||w.webkitPerformance){var d=document;AKSB=w.AKSB||{},AKSB.q=AKSB.q||[],AKSB.mark=AKSB.mark||function(e,_){AKSB.q.push(["mark",e,_||(new Date).getTime()])},AKSB.measure=AKSB.measure||function(e,_,t){AKSB.q.push(["measure",e,_,t||(new Date).getTime()])},AKSB.done=AKSB.done||function(e){AKSB.q.push(["done",e])},AKSB.mark("firstbyte",(new Date).getTime()),AKSB.prof={custid:"465273",ustr:"cookiepresent",originlat:"0",clientrtt:"68",ghostip:"23.219.39.157",ipv6:false,pct:"10",clientip:"59.166.192.158",requestid:"662175",region:"14027",protocol:"h2",blver:14,akM:"x",akN:"ae",akTT:"O",akTX:"1",akTI:"662175",ai:"432935",ra:"true",pmgn:"",pmgi:"",pmp:"",qc:""},function(e){var _=d.createElement("script");_.async="async",_.src=e;var t=d.getElementsByTagName("script"),t=t[t.length-1];t.parentNode.insertBefore(_,t)}(("https:"===d.location.protocol?"https:":"http:")+"//ds-aksb-a.akamaihd.net/aksb.min.js")}</script>
                    </head>
 


 


<html lang="ja">

<head>

<body class="index" <?php body_class();?>>
  <div class="carma_wrap">
        <script data-event-class-json type="application/json">
      {
        "events": [
          {
            "className": "open",
            "eventType": "click",
            "method": "toggle",
            "selectors": {
              "source": "[data-share-button]",
              "target": "[data-share-area]"
            }
          }
        ]
      }
    </script>
    <script async charset="utf-8" src="/js/event-class.min.js"></script>

		<header class="header">
			<div class="header_inner">
				<div class="header_left">
					<h1><a href="/"><img src="/images/common/coca-cola_logo.png" alt="Coca-Cola"></a></h1>
				</div>
				<div class="header_right">
					<ul class="header_navi">
						<li class="navi_top"><a href="/"><img src="/images/common/navi_top.png" alt="トップ"></a></li>
						<li class="navi_product"><a href="/gateway/product/"><img src="/images/common/navi_product.png" alt="攴品"></a></li>
						<li class="navi_cm"><a href="/gateway/cm/"><img src="/images/common/navi_cm.png" alt="CM/動画"></a></li>
						<li class="navi_campaign"><a href="/gateway/campaign/"><img src="/images/common/navi_campaign.png" alt="キャンペ拏ン"></a></li>
					</ul>

    <div data-share-area class="header_share">
      <a data-share-button class="share" href="javascript:;">SHARE</a>
      <ul class="header_share_list">
        <li class="facebook">
          <a data-analytics-facebook href="javascript:;" onclick="
              window.open(
                'https://www.facebook.com/sharer/sharer.php' +
                  '?u=' + encodeURIComponent('http://bit.ly/2nl2iQ3'),
                '',
                'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=626,height=436'
              );
            ">
            <img src="/images/common/header_share_list_fb.png" alt="">
          </a>
        </li>
        <li class="twitter">
          <a data-analytics-twitter href="javascript:;" onclick="
              window.open(
                'https://twitter.com/intent/tweet' +
                  '?text=' + encodeURIComponent('今年のリボンボトルはもれなく聴ける！リトグリの限定クリスマスソング♪ 総計100万名様にクリスマスケーキやLINEポイントも当たる！') +
                  '&amp;url='  + encodeURIComponent('http://bit.ly/2nl2iQ3'),
                '',
                'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=600,height=600'
              );
            ">
            <img src="/images/common/header_share_list_tw.png" alt="">
          </a>
        </li>
      </ul>
    </div>
    				</div>
			</div>
		</header>
