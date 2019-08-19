<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,300%7CRoboto+Condensed:400,700,300">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel { display: none; background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3); clear: both; text-align: center; position: relative; z-index: 1; } html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel { display: block; }</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <section>
        <!-- Page Header-->
        <header class="section page-header rd-navbar-absolute">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-transparent" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                  <!-- RD Navbar Panel-->
                  <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="{{ asset('images/logoNew.png') }}" alt="" width="482" height="134"/><img class="brand-logo-light" src="{{ asset('images/logoNew.png') }}" alt="" width="482" height="134"/></a>
                    </div>
                  </div>
                  <div class="rd-navbar-main-element">
                    <div class="rd-navbar-nav-wrap">
                      <!-- RD Navbar Nav-->
                      @php $locale = session()->get('locale'); @endphp
                      <ul class="rd-navbar-nav">
                        <li class="rd-nav-item active"><a class="rd-nav-link" href="#map">Home</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#price">About us</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="news.html">News</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                        </li>
                        
                        <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact us</a>
                        </li>
                        <li class="rd-nav-item"><a class="rd-nav-link" style="font-size:14px" href="/ru">RU</a>
                          <!-- RD Navbar Dropdown-->
                          <ul class="rd-menu rd-navbar-dropdown">
                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" style="font-size:14px">EN</a></li>
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
        
        <div class="section swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="5000" data-simulate-touch="false">
          <div class="swiper-wrapper text-center">
        @foreach ($carouselImages as $carousel)
            <div class="swiper-slide context-dark" data-slide-bg="{{ asset('storage/'. $carousel->image) }}" >
              <div class="swiper-slide-caption section-md">
                <div class="container">
                  <div class="row row-fix justify-content-center">
                    <div class="col-md-11 col-lg-9 col-xxl-8">
                      <h2 data-caption-animate="fadeInUp" data-caption-delay="100">{{ $carousel->title }}</h2>
                      <hr>
                      <h4 class="lead" data-caption-animate="fadeInUp" data-caption-delay="250">{{ $carousel->description }}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
        @endforeach
          <!-- Swiper Navigation-->
          <div class="swiper-navigation">
            <div class="swiper-button-prev fa-arrow-left"></div>
            <div class="swiper-button-next fa-arrow-right"></div>
          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <!--
      ========================================================
      CONTENT
      ========================================================
      -->
      <?php $a=0; ?>
      @foreach ($body as $b)
      <?php ++$a ?>
      @if($a%2 != 0)
      <section class="novi-section">
          <div class="bg-aside bg-aside-left center">
            <div class="img"><img src="{{ 'storage/'. $b->image }}" alt="" width="1025" height="664"/>
          </div>
          <div class="cnt-block well-1 novi-background">
            <h2>{{ $b->title }}</h2>
            <hr>
            <h4>{{ $b->body }}</h4>
          </div>
        </div>
      </section>
      @endif
      @if($a %2 == 0)
        <section class="novi-section" data-preset='{"title":"Content box 2","category":"content box","reload":false,"id":"content-box-2"}'>
          <div class="bg-aside bg-aside-right center">
            <div class="img"><img src="{{ 'storage/'. $b->image }}" alt="" width="1025" height="664"/>
          </div>
          <div class="cnt-block well-1 novi-background">
            <h2>{{ $b->title }}</h2>
            <hr>
            <h4>{{ $b->body }}</h4>
          </div>
        </div>
      </section>
      @endif
      @endforeach
      <section class="well-3 bg-pattern center novi-background bg-cover">
        <div class="container">
          <h2>Testimonials</h2>
          <hr>
          <h4>Here's what our children’s parents have to say about Happy Kids.</h4>
          <div class="row row-fix justify-content-center offset-custom-1">
            <div class="col-lg-8 col-lg-offset-2">
              <div class="owl-carousel" data-items="1" data-dots="false" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
                <div class="item">
                  <blockquote><img src="images/home-04-204x204.jpg" alt="" width="204" height="204"/>
                    <p>
                      <cite>Kelly Ryan</cite>
                    </p>
                    <p>
                      <q>Words cannot express the thanks that my family has for each and every Happy Kids early childhood teacher. We enrolled at this nursery center in 2001 when Steven was six weeks old. Since then he has grown and matured into an amazing, intelligent young man.</q>
                    </p><a class="button button-default" href="#">Read more</a>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote><img src="images/home-05-204x204.jpg" alt="" width="204" height="204"/>
                    <p>
                      <cite>Julia Smith</cite>
                    </p>
                    <p>
                      <q>I enrolled my son in this nursery center when he was 13 months old The Assistant Director answered all of my many questions and once we did drop him off the first day, she was there, with tissues in hand, assuring us that our baby would be OK.</q>
                    </p><a class="button button-default" href="#">Read more</a>
                  </blockquote>
                </div>
                <div class="item">
                  <blockquote><img src="images/home-06-204x204.jpg" alt="" width="204" height="204"/>
                    <p>
                      <cite>Jane Williams</cite>
                    </p>
                    <p>
                      <q>As a parent, I entrust my greatest blessing to the staff at Happy Kids every day, and I am grateful for the loving care and guidance my son receives. The teachers and director look at each child as an individual, with their own strengths and needs.</q>
                    </p><a class="button button-default" href="#">Read more</a>
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="gallery gallery-no-padding novi-section">
        <div class="thumb-toggle" data-custom-toggle=".gallery"></div>
        <div class="container-fluid" data-lightgallery="group">
          <div class="row row-30">
            @foreach ($galleries as $gallery)
                
            <div class="col-sm-6 col-md-3"><a class="thumb" href="{{ 'storage/'. $gallery->image }}" data-lightgallery="item"><img src="{{ 'storage/'. $gallery->image }}" alt="" width="513" height="513"/><span class="thumb_overlay novi-background"><span class="thumb_cnt"><span class="thumb-icon novi-icon fl-line-ui-heart369"></span><span>{{ 
            $gallery->title }}</span></span></span></a>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <section class="well-4 bg-default novi-background bg-cover">
        <div class="container center">
          <h2>Our Blog</h2>
          <hr>
          <h4>Read the latest news and updates from Happy Kids.</h4>
          <div class="row row-30 offset-custom-2">
              @foreach ($blogs as $blog)
              {{-- <article class="col-sm-6 col-md-4"><a class="post" href="news/{{ $blog->id }}"><img src="{{ 'storage/'. $blog->image }}" alt="" width="370" height="453"/>
              <article class="col-sm-6 col-md-4"><a class="post" href=""><img src="{{ 'storage/'. $blog->image }}" alt="" width="370" height="453"/>
                <div class="post_cnt">
                  <h3>{{ $blog->title }}</h3>
                  <time datetime="2015-04-14">{{ $blog->created_at }}</time>
                </div></a></article> --}}
              @endforeach
              <iframe width="853" height="480" src="https://www.youtube.com/embed/NtzftGb0EcM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi natus amet tempore beatae, quas odio maxime necessitatibus eius atque quidem. Consequuntur impedit cumque tempora tempore voluptatum, neque eligendi eum rerum.</p>
        </div>
      </section>
      {{-- Price --}}
      <section id="price">
        <div class="container price center">
          <div class="cardPrice">
            <div class="imgg">
              <img src="{{ asset('images/logoNew.png') }}" alt="">
            </div>
             <div class="text">
               <h3><b> BABY SPA</b></h3>
               <ul>
                 <li>
                   Massage...........................................50 000 sum
                 </li>
                 <li>
                  Massage...........................................150 000 sum
                </li>
                <li>
                  Massage...........................................150 000 sum
                </li>
                <li>
                  Massage...........................................150 000 sum
                </li>
                <li>
                  Massage...........................................150 000 sum
                </li>
               </ul>
               <h3><b> Baby Spa</b></h3>
               <ul>
                <li>
                  Massage...........................................50 000 sum
                </li>
                <li>
                 Massage...........................................150 000 sum
                </li>
                <li>
                 Massage...........................................150 000 sum
                </li>
                <li>
                 Massage...........................................150 000 sum
                </li>
                <li>
                 Massage...........................................150 000 sum
                </li>
              </ul>
             </div>
          </div>
          <div class="cardPrice">
              <div class="imgg">
                <img src="{{ asset('images/logoNew.png') }}" alt="">
              </div>
               <div class="text">
                 <h3><b> BABY SPA</b></h3>
                 <ul>
                   <li>
                     Massage...........................................50 000 sum
                   </li>
                   <li>
                    Massage...........................................150 000 sum
                  </li>
                  <li>
                    Massage...........................................150 000 sum
                  </li>
                  <li>
                    Massage...........................................150 000 sum
                  </li>
                  <li>
                    Massage...........................................150 000 sum
                  </li>
                 </ul>
                 <h3><b> Baby Spa</b></h3>
                 <ul>
                  <li>
                    Massage...........................................50 000 sum
                  </li>
                  <li>
                   Massage...........................................150 000 sum
                  </li>
                  <li>
                   Massage...........................................150 000 sum
                  </li>
                  <li>
                   Massage...........................................150 000 sum
                  </li>
                  <li>
                   Massage...........................................150 000 sum
                  </li>
                </ul>
               </div>
            </div>
        </div>
      </section>
      <section id="map" style="height:500px; width:100%;">
      </section>
      <!-- Page Footer-->
      <footer class="bg-default novi-background bg-cover">
        <div class="container center">
          <h2>Contact us</h2>
          <hr>
          <h4>Feel free to send us a message or ask a question.</h4>
          {{-- <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{ url('/commit') }}"> --}}
            {!! Form::open(array('action' => 'LandingController@store','method'=>'POST',)) !!}
            <div class="row row-14 row-fix">
              <div class="col-sm-6">
                <div class="form-wrap">
                  <label class="form-label" for="contact-name">Name</label>
                  <input class="form-input" id="contact-name" type="text" name="name" required data-constraints="@Required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <label class="form-label" for="contact-phone">Phone</label>
                  <input class="form-input" id="contact-phone" type="text" name="phone" required data-constraints="@Required @PhoneNumber">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">E-Mail</label>
                  <input class="form-input" id="contact-email" type="email" name="email" required data-constraints="@Required @Email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-wrap">
                  <label class="form-label" for="contact-address">Address</label>
                  <input class="form-input" id="contact-address" type="text" required name="address">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-wrap">
                  <label class="form-label" for="contact-message">Message</label>
                  <textarea class="form-input" id="contact-message" name="message" required data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <div class="form-button group-sm text-center">
              <button class="button button-2" type="submit">Send</button>
              <button class="button button-default" type="reset">Clear</button>
            </div>
            {{ Form::close() }}
          {{-- </form> --}}
          <ul class="inline-list">
            <li><a class="icon icon-creative novi-icon fa fa-google-plus" href="#"></a></li>
            <li><a class="icon icon-creative novi-icon fa fa-pinterest" href="#"></a></li>
            <li><a class="icon icon-creative novi-icon fa fa-twitter" href="#"></a></li>
            <li><a class="icon icon-creative novi-icon fa fa-facebook" href="#"></a></li>
          </ul>
          <address>9863 - 9867 Mill Road,<br> Cambridge, MG09 99HT</address>
          <div class="info-list">
            <dl>
              <dt>Freephone:</dt>
              <dd><a href="tel:#">+1 800 559 6580</a></dd>
            </dl>
            <dl>
              <dt>Telephone:</dt>
              <dd><a href="tel:#">+1 800 603 6035</a></dd>
            </dl>
          </div>
          <div class="copyright"><span>Happy kids</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a><span>. Design&nbsp;by&nbsp;<a href="https://zemez.io/">Zemez</a></span></div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
    $(document).ready(() => {
      // When the window has finished loading create our google map below
      google.maps.event.addDomListener(window, 'load', init);
      
      function init() {
        var mapOptions = {
          zoom: 11,
          
          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(40.6700, -73.9400), // New York
          
          // How you would like to style the map. 
          // This is where you would paste any style found on Snazzy Maps.
          styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
          };
          
          // Get the HTML DOM element that will contain your map 
          // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');
            
            // Create the Google Map using our element and options defined above
          var map = new google.maps.Map(mapElement, mapOptions);
          
          // Let's also add a marker while we're at it
          var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Snazzy!'
          });
        }
      })
      </script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7jdJhQhRNFFj2za7fz3727EkodXzAIVs"></script>
</body>
</html>