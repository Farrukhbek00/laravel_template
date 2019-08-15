<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Blog post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300%7CRoboto+Condensed:400,700,300">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>.ie-panel { display: none; background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3); clear: both; text-align: center; position: relative; z-index: 1; } html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel { display: block; }</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic-dark novi-background bg-cover" style="background-image: url({{ asset('images/header-bg.jpg') }})" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel -->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle -->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand -->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logoNew.png') }}" alt="" width="482" height="134"/><img class="brand-logo-light" src="{{ asset('images/logoNew.png') }}" alt="" width="482" height="134"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav -->
                    <ul class="rd-navbar-nav">  
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About us</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="news.html">News</a>
                        <!-- RD Navbar Dropdown -->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="blog-post.html">Blog post</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                        <!-- RD Navbar Dropdown -->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="gallery.html">Gallery</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="404.html">404</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="privacy-policy.html">Privacy policy</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Blocks</a>
                        <!-- RD Navbar Megamenu-->
                        <ul class="rd-menu rd-navbar-megamenu">
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Blocks 1</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="headers.html">Headers</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="footers.html">Footers</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="blog-page.html">Blog page</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Blocks 2</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="maps.html">Maps</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="newsletter.html">Newsletter</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Blocks 3</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="call-to-action.html">Call to action</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="gallery-page.html">Gallery page</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="gallery-album.html">Gallery album</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <h6 class="rd-megamenu-title">Blocks</h6>
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="sliders.html">Sliders</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team.html">Team</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="testimonials.html">Testimonials</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="well-4 bg-default novi-background bg-cover">
        <div class="container">
          <div class="row row-fix justify-content-center">
            <div class="col-lg-10">
              <div class="post-single">
                <h2>{{ $blog->title }}</h2>
                <hr><img src="{{ asset('storage/'. $blog->image) }}" alt="" width="1000" height="667"/>
                {!! $blog->body !!}
                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                <blockquote class="quote-lined">
                  <div class="icon quote-icon novi-icon fa fa-quote-right"></div>
                  <p>
                    <q>Lorem ipsum dolor sit amet consectetuer adip iscing elit. Praesent vestibulum molestie lacus.<br> Aenean nonummyendrit maulus porta. Fusce suscipit varius m sociis natoquibus et magn<br>dis parturientontes nascetur ridiculus mus.</q>
                  </p>
                </blockquote>
                <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="footer-minimal bg-default novi-background bg-cover center">
        <div class="container">
          <div class="copyright"><span>Happy kids</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a><span>. Design&nbsp;by&nbsp;<a href="https://zemez.io/">Zemez</a></span></div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>