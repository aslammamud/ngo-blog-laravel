@extends('layouts.layout')
@section('content') 
    

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

    @endsection
