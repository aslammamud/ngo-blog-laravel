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
    <header id="header">
      <div id="top-header">
        <div class="container">
          <div class="header-links">
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Advertisement</a></li>
              <li><a href="#">Privacy</a></li>
              <li>
                <a href="#"><i class="fa fa-sign-in"></i> Login</a>
              </li>
            </ul>
          </div>
          <div class="header-social">
            <ul>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div id="center-header">
        <div class="container">
          <div class="header-logo">
            <a href="#" class="logo"><img src="{{ asset('frontend-asset/img/logo.png') }}" alt="" /></a>
          </div>
          <div class="header-ads">
            <img class="center-block" src="{{ asset('frontend-asset/img/ad-2.jpg') }}" alt="" />
          </div>
        </div>
      </div>

      <div id="nav-header">
        <div class="container">
          <nav id="main-nav">
            <div class="nav-logo">
              <a href="#" class="logo"
                ><img src="{{ asset('frontend-asset/img/logo-alt.png') }}" alt=""
              /></a>
            </div>
            <ul class="main-nav nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Sport</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Music</a></li>
              <li><a href="#">Business</a></li>
            </ul>
          </nav>
          <div class="button-nav">
            <button class="search-collapse-btn">
              <i class="fa fa-search"></i>
            </button>
            <button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
            <div class="search-form">
              <form>
                <input
                  class="input"
                  type="text"
                  name="search"
                  placeholder="Search"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
      <article class="article thumb-article">
        <div class="article-img">
          <img src="{{ asset('frontend-asset/img/img-lg-1.jpg') }}" alt="" />
        </div>
        <div class="article-body">
          <ul class="article-info">
            <li class="article-category"><a href="#">News</a></li>
            <li class="article-type"><i class="fa fa-camera"></i></li>
          </ul>
          <h2 class="article-title">
            <a href="#">Duis urbanitas eam in, tempor consequat.</a>
          </h2>
          <ul class="article-meta">
            <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
            <li><i class="fa fa-comments"></i> 33</li>
          </ul>
        </div>
      </article>

      <article class="article thumb-article">
        <div class="article-img">
          <img src="{{ asset('frontend-asset/img/img-lg-2.jpg') }}" alt="" />
        </div>
        <div class="article-body">
          <ul class="article-info">
            <li class="article-category"><a href="#">News</a></li>
            <li class="article-type"><i class="fa fa-file-text"></i></li>
          </ul>
          <h2 class="article-title">
            <a href="#">Duis urbanitas eam in, tempor consequat.</a>
          </h2>
          <ul class="article-meta">
            <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
            <li><i class="fa fa-comments"></i> 33</li>
          </ul>
        </div>
      </article>

      <article class="article thumb-article">
        <div class="article-img">
          <img src="{{ asset('frontend-asset/img/img-lg-3.jpg') }}" alt="" />
        </div>
        <div class="article-body">
          <ul class="article-info">
            <li class="article-category"><a href="#">News</a></li>
            <li class="article-type"><i class="fa fa-camera"></i></li>
          </ul>
          <h2 class="article-title">
            <a href="#">Duis urbanitas eam in, tempor consequat.</a>
          </h2>
          <ul class="article-meta">
            <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
            <li><i class="fa fa-comments"></i> 33</li>
          </ul>
        </div>
      </article>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2 class="title">Trending Posts</h2>

              <ul class="tab-nav pull-right">
                <li class="active">
                  <a data-toggle="tab" href="#tab1">All</a>
                </li>
                <li><a data-toggle="tab" href="#tab1">News</a></li>
                <li><a data-toggle="tab" href="#tab1">Sport</a></li>
                <li><a data-toggle="tab" href="#tab1">Music</a></li>
                <li><a data-toggle="tab" href="#tab1">Business</a></li>
                <li><a data-toggle="tab" href="#tab1">Lifestyle</a></li>
              </ul>
            </div>

            <div class="tab-content">
              <div id="tab1" class="tab-pane fade in active">
                <div class="row">
                  <div class="col-md-3 col-sm-6">
                    <article class="article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-md-1.jpg') }}" alt="" />
                        </a>
                        <ul class="article-info">
                          <li class="article-type">
                            <i class="fa fa-camera"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>
                  </div>

                  <div class="col-md-3 col-sm-6">
                    <article class="article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-md-2.jpg') }}" alt="" />
                        </a>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>
                  </div>

                  <div class="col-md-3 col-sm-6">
                    <article class="article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-md-3.jpg') }}" alt="" />
                        </a>
                        <ul class="article-info">
                          <li class="article-type">
                            <i class="fa fa-file-text"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>
                  </div>

                  <div class="col-md-3 col-sm-6">
                    <article class="article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-md-4.jpg') }}" alt="" />
                        </a>
                        <ul class="article-info">
                          <li class="article-type">
                            <i class="fa fa-file-text"></i>
                          </li>
                        </ul>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-6">
                    <article class="article widget-article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-widget-1.jpg') }}" alt="" />
                        </a>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>

                    <article class="article widget-article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-widget-2.jpg') }}" alt="" />
                        </a>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>
                  </div>

                  <div class="col-md-4 col-sm-6">
                    <article class="article widget-article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-widget-3.jpg') }}" alt="" />
                        </a>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>

                    <article class="article widget-article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-widget-4.jpg') }}" alt="" />
                        </a>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>
                  </div>

                  <div class="col-md-4 hidden-sm">
                    <article class="article widget-article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-widget-5.jpg') }}" alt="" />
                        </a>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>

                    <article class="article widget-article">
                      <div class="article-img">
                        <a href="#">
                          <img src="{{ asset('frontend-asset/img/img-widget-6.jpg') }}" alt="" />
                        </a>
                      </div>
                      <div class="article-body">
                        <h4 class="article-title">
                          <a href="#"
                            >Duis urbanitas eam in, tempor consequat.</a
                          >
                        </h4>
                        <ul class="article-meta">
                          <li>
                            <i class="fa fa-clock-o"></i> January 31, 2017
                          </li>
                          <li><i class="fa fa-comments"></i> 33</li>
                        </ul>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="section-title">
                  <h2 class="title">News</h2>
                </div>

                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-sm-1.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type"><i class="fa fa-camera"></i></li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h3 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h3>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                    <p>
                      Populo tritani laboramus ex mei, no eum iuvaret ceteros
                      euripidis, ne alia sadipscing mei. Te inciderint
                      cotidieque pro, ei iisque docendi qui, ne accommodare
                      theophrastus reprehendunt vel. Et commodo menandri eam.
                    </p>
                  </div>
                </article>

                <article class="article widget-article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-widget-7.jpg') }}" alt="" />
                    </a>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>

                <article class="article widget-article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-widget-8.jpg') }}" alt="" />
                    </a>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>
              </div>

              <div class="col-md-6 col-sm-6">
                <div class="section-title">
                  <h2 class="title">Sport</h2>
                </div>

                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-sm-2.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type">
                        <i class="fa fa-file-text"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h3 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h3>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                    <p>
                      Populo tritani laboramus ex mei, no eum iuvaret ceteros
                      euripidis, ne alia sadipscing mei. Te inciderint
                      cotidieque pro, ei iisque docendi qui, ne accommodare
                      theophrastus reprehendunt vel. Et commodo menandri eam.
                    </p>
                  </div>
                </article>

                <article class="article widget-article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-widget-9.jpg') }}" alt="" />
                    </a>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>

                <article class="article widget-article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-widget-10.jpg') }}" alt="" />
                    </a>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="section-title">
                  <h2 class="title">News</h2>
                </div>
              </div>

              <div class="col-md-6 col-sm-6">
                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-sm-3.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type"><i class="fa fa-camera"></i></li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h3 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h3>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                    <p>
                      Populo tritani laboramus ex mei, no eum iuvaret ceteros
                      euripidis, ne alia sadipscing mei. Te inciderint
                      cotidieque pro, ei iisque docendi qui, ne accommodare
                      theophrastus reprehendunt vel. Et commodo menandri eam.
                    </p>
                  </div>
                </article>
              </div>

              <div class="col-md-6 col-sm-6">
                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-sm-4.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type"><i class="fa fa-camera"></i></li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h3 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h3>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                    <p>
                      Populo tritani laboramus ex mei, no eum iuvaret ceteros
                      euripidis, ne alia sadipscing mei. Te inciderint
                      cotidieque pro, ei iisque docendi qui, ne accommodare
                      theophrastus reprehendunt vel. Et commodo menandri eam.
                    </p>
                  </div>
                </article>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 col-sm-4">
                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-md-1.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type">
                        <i class="fa fa-file-text"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>
              </div>

              <div class="col-md-4 col-sm-4">
                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-md-2.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type">
                        <i class="fa fa-file-text"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>
              </div>

              <div class="col-md-4 col-sm-4">
                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-md-3.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type">
                        <i class="fa fa-file-text"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="widget center-block hidden-xs">
              <img class="center-block" src="{{ asset('frontend-asset/img/ad-1.jpg') }}" alt="" />
            </div>

            <div class="widget social-widget">
              <div class="widget-title">
                <h2 class="title">Stay Connected</h2>
              </div>
              <ul>
                <li>
                  <a href="#" class="facebook"
                    ><i class="fa fa-facebook"></i><br /><span
                      >Facebook</span
                    ></a
                  >
                </li>
                <li>
                  <a href="#" class="twitter"
                    ><i class="fa fa-twitter"></i><br /><span>Twitter</span></a
                  >
                </li>
                <li>
                  <a href="#" class="google"
                    ><i class="fa fa-google"></i><br /><span>Google+</span></a
                  >
                </li>
                <li>
                  <a href="#" class="instagram"
                    ><i class="fa fa-instagram"></i><br /><span
                      >Instagram</span
                    ></a
                  >
                </li>
                <li>
                  <a href="#" class="youtube"
                    ><i class="fa fa-youtube"></i><br /><span>Youtube</span></a
                  >
                </li>
                <li>
                  <a href="#" class="rss"
                    ><i class="fa fa-rss"></i><br /><span>RSS</span></a
                  >
                </li>
              </ul>
            </div>

            <div class="widget subscribe-widget">
              <div class="widget-title">
                <h2 class="title">Subscribe to Newslatter</h2>
              </div>
              <form>
                <input
                  class="input"
                  type="email"
                  placeholder="Enter Your Email"
                />
                <button class="input-btn">Subscribe</button>
              </form>
            </div>

            <div class="widget">
              <div class="widget-title">
                <h2 class="title">Most Read</h2>
              </div>

              <div
                id="owl-carousel-3"
                class="owl-carousel owl-theme center-owl-nav"
              >
                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-md-3.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type">
                        <i class="fa fa-file-text"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>

                <article class="article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-md-4.jpg') }}" alt="" />
                    </a>
                    <ul class="article-info">
                      <li class="article-type">
                        <i class="fa fa-file-text"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>
              </div>

              <article class="article widget-article">
                <div class="article-img">
                  <a href="#">
                    <img src="{{ asset('frontend-asset/img/img-widget-1.jpg') }}" alt="" />
                  </a>
                </div>
                <div class="article-body">
                  <h4 class="article-title">
                    <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                  </h4>
                  <ul class="article-meta">
                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                    <li><i class="fa fa-comments"></i> 33</li>
                  </ul>
                </div>
              </article>

              <article class="article widget-article">
                <div class="article-img">
                  <a href="#">
                    <img src="{{ asset('frontend-asset/img/img-widget-2.jpg') }}" alt="" />
                  </a>
                </div>
                <div class="article-body">
                  <h4 class="article-title">
                    <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                  </h4>
                  <ul class="article-meta">
                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                    <li><i class="fa fa-comments"></i> 33</li>
                  </ul>
                </div>
              </article>

              <article class="article widget-article">
                <div class="article-img">
                  <a href="#">
                    <img src="{{ asset('frontend-asset/img/img-widget-3.jpg') }}" alt="" />
                  </a>
                </div>
                <div class="article-body">
                  <h4 class="article-title">
                    <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                  </h4>
                  <ul class="article-meta">
                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                    <li><i class="fa fa-comments"></i> 33</li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="visible-lg visible-md">
      <img class="center-block" src="{{ asset('frontend-asset/img/ad-3.jpg') }}" alt="" />
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2 class="title">Popular Video</h2>
              <div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
            </div>

            <div id="owl-carousel-2" class="owl-carousel owl-theme">
              <article class="article thumb-article">
                <div class="article-img">
                  <img src="{{ asset('frontend-asset/img/img-thumb-1.jpg') }}" alt="" />
                </div>
                <div class="article-body">
                  <ul class="article-info">
                    <li class="article-category"><a href="#">News</a></li>
                    <li class="article-type">
                      <i class="fa fa-video-camera"></i>
                    </li>
                  </ul>
                  <h3 class="article-title">
                    <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                  </h3>
                  <ul class="article-meta">
                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                    <li><i class="fa fa-comments"></i> 33</li>
                  </ul>
                </div>
              </article>

              <article class="article thumb-article">
                <div class="article-img">
                  <img src="{{ asset('frontend-asset/img/img-thumb-2.jpg') }}" alt="" />
                </div>
                <div class="article-body">
                  <ul class="article-info">
                    <li class="article-category"><a href="#">News</a></li>
                    <li class="article-type">
                      <i class="fa fa-video-camera"></i>
                    </li>
                  </ul>
                  <h3 class="article-title">
                    <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                  </h3>
                  <ul class="article-meta">
                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                    <li><i class="fa fa-comments"></i> 33</li>
                  </ul>
                </div>
              </article>

              <article class="article thumb-article">
                <div class="article-img">
                  <img src="{{ asset('frontend-asset/img/img-thumb-3.jpg') }}" alt="" />
                </div>
                <div class="article-body">
                  <ul class="article-info">
                    <li class="article-category"><a href="#">News</a></li>
                    <li class="article-type">
                      <i class="fa fa-video-camera"></i>
                    </li>
                  </ul>
                  <h3 class="article-title">
                    <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                  </h3>
                  <ul class="article-meta">
                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                    <li><i class="fa fa-comments"></i> 33</li>
                  </ul>
                </div>
              </article>

              <article class="article thumb-article">
                <div class="article-img">
                  <img src="{{ asset('frontend-asset/img/img-thumb-4.jpg') }}" alt="" />
                </div>
                <div class="article-body">
                  <ul class="article-info">
                    <li class="article-category"><a href="#">News</a></li>
                    <li class="article-type">
                      <i class="fa fa-video-camera"></i>
                    </li>
                  </ul>
                  <h3 class="article-title">
                    <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                  </h3>
                  <ul class="article-meta">
                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                    <li><i class="fa fa-comments"></i> 33</li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="section-title">
              <h2 class="title">Popular Posts</h2>
            </div>

            <article class="article row-article">
              <div class="article-img">
                <a href="#">
                  <img src="{{ asset('frontend-asset/img/img-md-1.jpg') }}" alt="" />
                </a>
              </div>
              <div class="article-body">
                <ul class="article-info">
                  <li class="article-category"><a href="#">News</a></li>
                  <li class="article-type"><i class="fa fa-file-text"></i></li>
                </ul>
                <h3 class="article-title">
                  <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                </h3>
                <ul class="article-meta">
                  <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                  <li><i class="fa fa-comments"></i> 33</li>
                </ul>
                <p>
                  Populo tritani laboramus ex mei, no eum iuvaret ceteros
                  euripidis, ne alia sadipscing mei. Te inciderint cotidieque
                  pro, ei iisque docendi qui.
                </p>
              </div>
            </article>

            <article class="article row-article">
              <div class="article-img">
                <a href="#">
                  <img src="{{ asset('frontend-asset/img/img-md-2.jpg') }}" alt="" />
                </a>
              </div>
              <div class="article-body">
                <ul class="article-info">
                  <li class="article-category"><a href="#">News</a></li>
                  <li class="article-type"><i class="fa fa-file-text"></i></li>
                </ul>
                <h3 class="article-title">
                  <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                </h3>
                <ul class="article-meta">
                  <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                  <li><i class="fa fa-comments"></i> 33</li>
                </ul>
                <p>
                  Populo tritani laboramus ex mei, no eum iuvaret ceteros
                  euripidis, ne alia sadipscing mei. Te inciderint cotidieque
                  pro, ei iisque docendi qui.
                </p>
              </div>
            </article>

            <article class="article row-article">
              <div class="article-img">
                <a href="#">
                  <img src="{{ asset('frontend-asset/img/img-md-3.jpg') }}" alt="" />
                </a>
              </div>
              <div class="article-body">
                <ul class="article-info">
                  <li class="article-category"><a href="#">News</a></li>
                  <li class="article-type"><i class="fa fa-file-text"></i></li>
                </ul>
                <h3 class="article-title">
                  <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                </h3>
                <ul class="article-meta">
                  <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                  <li><i class="fa fa-comments"></i> 33</li>
                </ul>
                <p>
                  Populo tritani laboramus ex mei, no eum iuvaret ceteros
                  euripidis, ne alia sadipscing mei. Te inciderint cotidieque
                  pro, ei iisque docendi qui.
                </p>
              </div>
            </article>

            <article class="article row-article">
              <div class="article-img">
                <a href="#">
                  <img src="{{ asset('frontend-asset/img/img-md-4.jpg') }}" alt="" />
                </a>
              </div>
              <div class="article-body">
                <ul class="article-info">
                  <li class="article-category"><a href="#">News</a></li>
                  <li class="article-type"><i class="fa fa-file-text"></i></li>
                </ul>
                <h3 class="article-title">
                  <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                </h3>
                <ul class="article-meta">
                  <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                  <li><i class="fa fa-comments"></i> 33</li>
                </ul>
                <p>
                  Populo tritani laboramus ex mei, no eum iuvaret ceteros
                  euripidis, ne alia sadipscing mei. Te inciderint cotidieque
                  pro, ei iisque docendi qui.
                </p>
              </div>
            </article>

            <div class="article-pagination">
              <ul>
                <li class="active"><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li>
                  <a href="#"><i class="fa fa-angle-right"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="widget">
              <div class="widget-title">
                <h2 class="title">Featured Posts</h2>
              </div>

              <div id="owl-carousel-4" class="owl-carousel owl-theme">
                <article class="article thumb-article">
                  <div class="article-img">
                    <img src="{{ asset('frontend-asset/img/img-thumb-1.jpg') }}" alt="" />
                  </div>
                  <div class="article-body">
                    <ul class="article-info">
                      <li class="article-category"><a href="#">News</a></li>
                      <li class="article-type">
                        <i class="fa fa-video-camera"></i>
                      </li>
                    </ul>
                    <h3 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h3>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>

                <article class="article thumb-article">
                  <div class="article-img">
                    <img src="{{ asset('frontend-asset/img/img-thumb-2.jpg') }}" alt="" />
                  </div>
                  <div class="article-body">
                    <ul class="article-info">
                      <li class="article-category"><a href="#">News</a></li>
                      <li class="article-type">
                        <i class="fa fa-video-camera"></i>
                      </li>
                    </ul>
                    <h3 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h3>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>
              </div>
            </div>

            <div class="widget galery-widget">
              <div class="widget-title">
                <h2 class="title">Flickr Photos</h2>
              </div>
              <ul>
                <li>
                  <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-3.jpg') }}" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-4.jpg') }}" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-5.jpg') }}" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-6.jpg') }}" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-7.jpg') }}" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-8.jpg') }}" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-9.jpg') }}" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-10.jpg') }}" alt="" /></a>
                </li>
              </ul>
            </div>

            <div class="widget tweets-widget">
              <div class="widget-title">
                <h2 class="title">Recent Tweets</h2>
              </div>
              <ul>
                <li class="tweet">
                  <i class="fa fa-twitter"></i>
                  <div class="tweet-body">
                    <p>
                      <a href="#">@magnews</a> Populo tritani laboramus ex mei,
                      no eum iuvaret ceteros euripidis
                      <a href="#">https://t.co/DwsTbsmxTP</a>
                    </p>
                  </div>
                </li>
                <li class="tweet">
                  <i class="fa fa-twitter"></i>
                  <div class="tweet-body">
                    <p>
                      <a href="#">@magnews</a> Populo tritani laboramus ex mei,
                      no eum iuvaret ceteros euripidis
                      <a href="#">https://t.co/DwsTbsmxTP</a>
                    </p>
                  </div>
                </li>
                <li class="tweet">
                  <i class="fa fa-twitter"></i>
                  <div class="tweet-body">
                    <p>
                      <a href="#">@magnews</a> Populo tritani laboramus ex mei,
                      no eum iuvaret ceteros euripidis
                      <a href="#">https://t.co/DwsTbsmxTP</a>
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer id="footer">
      <div id="top-footer" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="footer-widget about-widget">
                <div class="footer-logo">
                  <a href="#" class="logo"
                    ><img src="{{ asset('frontend-asset/img/logo-alt.png') }}" alt=""
                  /></a>
                  <p>
                    Populo tritani laboramus ex mei, no eum iuvaret ceteros
                    euripidis, ne alia sadipscing mei. Te inciderint cotidieque
                    pro, ei iisque docendi qui.
                  </p>
                </div>
              </div>

              <div class="footer-widget social-widget">
                <div class="widget-title">
                  <h3 class="title">Follow Us</h3>
                </div>
                <ul>
                  <li>
                    <a href="#" class="facebook"
                      ><i class="fa fa-facebook"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="twitter"
                      ><i class="fa fa-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                  </li>
                  <li>
                    <a href="#" class="instagram"
                      ><i class="fa fa-instagram"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="youtube"
                      ><i class="fa fa-youtube"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                  </li>
                </ul>
              </div>

              <div class="footer-widget subscribe-widget">
                <div class="widget-title">
                  <h2 class="title">Subscribe to Newslatter</h2>
                </div>
                <form>
                  <input
                    class="input"
                    type="email"
                    placeholder="Enter Your Email"
                  />
                  <button class="input-btn">Subscribe</button>
                </form>
              </div>
            </div>

            <div class="col-md-4">
              <div class="footer-widget">
                <div class="widget-title">
                  <h2 class="title">Featured Posts</h2>
                </div>

                <article class="article widget-article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-widget-1.jpg') }}" alt="" />
                    </a>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>

                <article class="article widget-article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-widget-2.jpg') }}" alt="" />
                    </a>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>

                <article class="article widget-article">
                  <div class="article-img">
                    <a href="#">
                      <img src="{{ asset('frontend-asset/img/img-widget-3.jpg') }}" alt="" />
                    </a>
                  </div>
                  <div class="article-body">
                    <h4 class="article-title">
                      <a href="#">Duis urbanitas eam in, tempor consequat.</a>
                    </h4>
                    <ul class="article-meta">
                      <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                      <li><i class="fa fa-comments"></i> 33</li>
                    </ul>
                  </div>
                </article>
              </div>
            </div>

            <div class="col-md-4">
              <div class="footer-widget galery-widget">
                <div class="widget-title">
                  <h2 class="title">Flickr Photos</h2>
                </div>
                <ul>
                  <li>
                    <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-3.jpg') }}" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-4.jpg') }}" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-5.jpg') }}" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-6.jpg') }}" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-7.jpg') }}" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-8.jpg') }}" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-9.jpg') }}" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"><img src="{{ asset('frontend-asset/img/img-widget-10.jpg') }}" alt="" /></a>
                  </li>
                </ul>
              </div>

              <div class="footer-widget tweets-widget">
                <div class="widget-title">
                  <h2 class="title">Recent Tweets</h2>
                </div>
                <ul>
                  <li class="tweet">
                    <i class="fa fa-twitter"></i>
                    <div class="tweet-body">
                      <p>
                        <a href="#">@magnews</a> Populo tritani laboramus ex
                        mei, no eum iuvaret ceteros euripidis
                        <a href="#">https://t.co/DwsTbsmxTP</a>
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="bottom-footer" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-push-6">
              <ul class="footer-links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Advertisement</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>
            </div>

            <div class="col-md-6 col-md-pull-6">
              <div class="footer-copyright">
                <span>
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | This template is made with
                  <i class="fa fa-heart-o" aria-hidden="true"></i> by
                  <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div id="back-to-top"></div>

    <script src="{{ asset('frontend-asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend-asset/js/main.js') }}"></script>

    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
      integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
      data-cf-beacon='{"rayId":"76876a6eff2b2f13","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}'
      crossorigin="anonymous"
    ></script>
  </body>
</html>
