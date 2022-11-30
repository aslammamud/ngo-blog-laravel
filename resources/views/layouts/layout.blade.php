<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>NGO Bangladesh</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400"
      rel="stylesheet"
    />

    <link type="text/css" rel="stylesheet" href="{{ asset('frontend-asset/css/bootstrap.min.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('frontend-asset/css/owl.carousel.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend-asset/css/owl.theme.default.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend-asset/css/font-awesome.min.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('frontend-asset/css/style.css') }}" />
    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script nonce="a8e39773-4868-4c7e-8075-744efd30e91f">
      (function (w, d) {
        !(function (e, f, g, h) {
          e.zarazData = e.zarazData || {};
          e.zarazData.executed = [];
          e.zaraz = { deferred: [], listeners: [] };
          e.zaraz.q = [];
          e.zaraz._f = function (i) {
            return function () {
              var j = Array.prototype.slice.call(arguments);
              e.zaraz.q.push({ m: i, a: j });
            };
          };
          for (const k of ["track", "set", "debug"]) e.zaraz[k] = e.zaraz._f(k);
          e.zaraz.init = () => {
            var l = f.getElementsByTagName(h)[0],
              m = f.createElement(h),
              n = f.getElementsByTagName("title")[0];
            n && (e.zarazData.t = f.getElementsByTagName("title")[0].text);
            e.zarazData.x = Math.random();
            e.zarazData.w = e.screen.width;
            e.zarazData.h = e.screen.height;
            e.zarazData.j = e.innerHeight;
            e.zarazData.e = e.innerWidth;
            e.zarazData.l = e.location.href;
            e.zarazData.r = f.referrer;
            e.zarazData.k = e.screen.colorDepth;
            e.zarazData.n = f.characterSet;
            e.zarazData.o = new Date().getTimezoneOffset();
            if (e.dataLayer)
              for (const r of Object.entries(
                Object.entries(dataLayer).reduce((s, t) => ({
                  ...s[1],
                  ...t[1],
                }))
              ))
                zaraz.set(r[0], r[1], { scope: "page" });
            e.zarazData.q = [];
            for (; e.zaraz.q.length; ) {
              const u = e.zaraz.q.shift();
              e.zarazData.q.push(u);
            }
            m.defer = !0;
            for (const v of [localStorage, sessionStorage])
              Object.keys(v || {})
                .filter((x) => x.startsWith("_zaraz_"))
                .forEach((w) => {
                  try {
                    e.zarazData["z_" + w.slice(7)] = JSON.parse(v.getItem(w));
                  } catch {
                    e.zarazData["z_" + w.slice(7)] = v.getItem(w);
                  }
                });
            m.referrerPolicy = "origin";
            m.src =
              "/cdn-cgi/zaraz/s.js?z=" +
              btoa(encodeURIComponent(JSON.stringify(e.zarazData)));
            l.parentNode.insertBefore(m, l);
          };
          ["complete", "interactive"].includes(f.readyState)
            ? zaraz.init()
            : e.addEventListener("DOMContentLoaded", zaraz.init);
        })(w, d, 0, "script");
      })(window, document);
    </script>
  </head>
  <body>
        @include('layouts.header')
            @include('layouts.navbar')
                @yield('content')
        @include('layouts.footer')
    <div id="back-to-top"></div>

    <script src="{{ asset('frontend-asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/main.js') }}"></script>
                
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-23581568-13");
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"76876a6eff2b2f13","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
        crossorigin="anonymous"></script>
    </body>
</html>