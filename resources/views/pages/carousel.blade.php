<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Template Carousel</title>
    <link rel="stylesheet" href="{{ asset('css/landio.min.css') }}">
  </head>

  <body>
    <!-- Navigation
    ================================================== -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-inverse-custom">
      <div class="container">
        <a class="navbar-brand mr-auto" href="/">
          <span class="icon-logo"></span>
          <span class="sr-only">Template</span>
        </a>

        <div class="hidden-md-up">
          <a class="navbar-toggler collapsed" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
            <div class="sr-only">Toggle mobile navigation</div>
          </a>
        </div>

        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom">
          <ul class="nav navbar-nav navbar-nav-transparent float-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#">Slides</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/elements">UI Kit</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank" rel="nofollow">GitHub</a>
            </li>
            <li class="nav-item nav-item-toggable hidden-md-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li>
            <li class="navbar-divider hidden-md-down" aria-hidden="true"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-md-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
                <form class="navbar-form">
                  <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                </form>
              </div>
            </li>
            <li class="nav-item dropdown hidden-md-down textselect-off">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('img/face5.jpg') }}" height="40" width="40" alt="Avatar" class="rounded-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                <div class="media">
                  <div class="media-left">
                    <img src="{{ asset('img/face5.jpg') }}" height="60" width="60" alt="Avatar" class="rounded-circle d-flex mr-2">
                  </div>
                  <div class="media-body align-self-center">
                    <h5 class="mt-0 mb-1">Joel Fisher</h5>
                    <h6 class="mb-0">hey@joelfisher.com</h6>
                  </div>
                </div>
                <a href="#" class="dropdown-item text-uppercase">View posts</a>
                <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
                <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
                <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
                <a href="#" class="btn-circle has-gradient float-right">
                  <span class="sr-only">Edit</span>
                  <span class="icon-edit"></span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Hero Section
    ================================================== -->

    <header id="landioCarousel" class="carousel slide carousel-header jumbotron" data-ride="carousel" data-interval="0" role="banner">
      <ol class="carousel-indicators flex-md-column mb-4 m-md-0">
        <li data-target="#landioCarousel" data-slide-to="0" class="active"><span class="carousel-dot"></span></li>
        <li data-target="#landioCarousel" data-slide-to="1"><span class="carousel-dot"></span></li>
        <li data-target="#landioCarousel" data-slide-to="2"><span class="carousel-dot"></span></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item bg-dark active" style="background-image: url({{ asset('img/bg-header.jpg') }});">
          <div class="carousel-caption d-flex justify-content-center">
            <div class="align-self-center">
            <h1 class="display-3">Bootstrap powered slides.</h1>
            <h2 class="mb-5 hidden-sm-down"><em>Yay, Slides!</em> Create CTA slides with <a href="/" class="jumbolink">Land.io</a>.</h2>
            <a class="btn btn-outline-light btn-lg btn-outline-light mb-4 mb-md-0" href="#" role="button"><span class="icon-sketch"></span>Sketch included</a>
            </div>
          </div>
        </div>
        <div class="carousel-item bg-dark" style="background-image: url({{ asset('img/bg-header-3.jpg')}});">
          <div class="carousel-caption d-flex justify-content-center">
            <div class="align-self-center">
            <h1 class="display-3">Land.io, open source.</h1>
            <h2 class="mb-5 hidden-sm-down">Includes <strong>all assests</strong> for easy customization.</h2>
            <a class="btn btn-outline-light btn-lg btn-outline-light mb-4 mb-md-0" href="#" role="button"><span class="icon-sketch"></span>Sketch included</a>
            </div>
          </div>
        </div>
        <div class="carousel-item bg-dark" style="background-image: url({{ asset('img/bg-header-2.jpg') }});">
          <div class="carousel-caption d-flex justify-content-center">
            <div class="align-self-center">
            <h1 class="display-3">Land.io, blissful innovation.</h1>
            <h2 class="mb-5 hidden-sm-down">Craft your journey, <em>absolutely free</em>, with <a href="/elements" class="jumbolink">Land.io UI kit</a>.</h2>
            <a class="btn btn-outline-light btn-lg btn-outline-light mb-4 mb-md-0" href="#" role="button"><span class="icon-sketch"></span>Sketch included</a>
            </div>
          </div>
        </div>
        <ul class="nav social-share justify-content-center">
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> 1024</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> 562</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span> 356</a></li>
        </ul>
      </div>
    </header>


    <!-- Intro
    ================================================== -->

    <section class="section-intro bg-light text-center">
      <div class="container">
        <h3 class="wp wp-1">Build your beautiful UI, the way you want it, with Land.io</h3>
        <p class="lead wp wp-2">Craft memorable, emotive experiences with our range of beautiful UI elements.</p>
        <img src="{{ asset('img/mock.png') }}" alt="iPad mock" class="img-fluid wp wp-3">
      </div>
    </section>


    <!-- Features
    ================================================== -->

    <section class="section-features text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <span class="icon-pen display-4"></span>
                <h4 class="card-title">250</h4>
                <h6 class="card-subtitle text-muted">UI Elements</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <span class="icon-thunderbolt display-4"></span>
                <h4 class="card-title">Ultra</h4>
                <h6 class="card-subtitle text-muted">Modern design</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-0">
              <div class="card-body">
                <span class="icon-heart display-4"></span>
                <h4 class="card-title">Free</h4>
                <h6 class="card-subtitle text-muted">Forever and ever</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Video
    ================================================== -->

    <section class="section-video bg-dark text-center wp wp-4">
      <h3 class="sr-only">Video</h3>
      <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="{{ asset('img/video-poster.jpg') }}" data-setup='{}'>
        <source src="//vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
        <source src="//vjs.zencdn.net/v/oceans.webm" type='video/webm'>
      </video>
    </section>


    <!-- Pricing
    ================================================== -->

    <section class="section-pricing bg-light text-center">
      <div class="container">
        <h3>Manage your subscriptions</h3>
        <div class="row py-5">
          <div class="col-md-4 p-t-md wp wp-5">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Personal
              </div>
              <div class="card-body">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">19</span>
                  <small class="text-muted text-uppercase">/month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush px-0">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
              </ul>
              <a href="#" class="btn btn-outline-primary btn-lg align-self-center">Get Started</a>
            </div>
          </div>
          <div class="col-md-4 stacking-top">
            <div class="card pricing-box pricing-best px-0">
              <div class="card-header text-uppercase">
                Professional
              </div>
              <div class="card-body">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">49</span>
                  <small class="text-muted text-uppercase">/month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush px-0">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
                <li class="list-group-item">Sed risus feugiat</li>
              </ul>
              <a href="#" class="btn btn-primary btn-lg align-self-center">Get Started</a>
            </div>
          </div>
          <div class="col-md-4 p-t-md wp wp-6">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Enterprise
              </div>
              <div class="card-body">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">99</span>
                  <small class="text-muted text-uppercase">/month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush px-0">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
              </ul>
              <a href="#" class="btn btn-outline-primary btn-lg align-self-center">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Testimonials
    ================================================== -->

    <section class="section-testimonials text-center bg-dark">
      <div class="container">
        <h3 class="sr-only">Testimonials</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
          <div class="carousel-inner">
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="{{ asset('img/face1.jpg') }}" height="80" width="80" alt="Avatar" class="rounded-circle">
                <p class="h3">Good design at the front-end suggests that everything is in order at the back-end, whether or not that is the case.</p>
                <footer>Dmitry Fadeyev</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="{{ asset('img/face2.jpg') }}" height="80" width="80" alt="Avatar" class="rounded-circle">
                <p class="h3">It’s not about knowing all the gimmicks and photo tricks. If you haven’t got the eye, no program will give it to you.</p>
                <footer>David Carson</footer>
              </blockquote>
            </div>
            <div class="carousel-item active">
              <blockquote class="blockquote">
                <img src="{{ asset('img/face3.jpg') }}" height="80" width="80" alt="Avatar" class="rounded-circle">
                <p class="h3">There’s a point when you’re done simplifying. Otherwise, things get really complicated.</p>
                <footer>Frank Chimero</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="{{ asset('img/face4.jpg') }}" height="80" width="80" alt="Avatar" class="rounded-circle">
                <p class="h3">Designing for clients that don’t appreciate the value of design is like buying new tires for a rental car.</p>
                <footer>Joel Fisher</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="{{ asset('img/face5.jpg') }}" height="80" width="80" alt="Avatar" class="rounded-circle">
                <p class="h3">Every picture owes more to other pictures painted before than it owes to nature.</p>
                <footer>E.H. Gombrich</footer>
              </blockquote>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li data-target="#carousel-testimonials" data-slide-to="0"><img src="{{ asset('img/face1.jpg') }}" alt="Navigation avatar" class="img-fluid rounded-circle"></li>
            <li data-target="#carousel-testimonials" data-slide-to="1"><img src="{{ asset('img/face2.jpg') }}" alt="Navigation avatar" class="img-fluid rounded-circle"></li>
            <li data-target="#carousel-testimonials" data-slide-to="2" class="active"><img src="{{ asset('img/face3.jpg') }}" alt="Navigation avatar" class="img-fluid rounded-circle"></li>
            <li data-target="#carousel-testimonials" data-slide-to="3"><img src="{{ asset('img/face4.jpg') }}" alt="Navigation avatar" class="img-fluid rounded-circle"></li>
            <li data-target="#carousel-testimonials" data-slide-to="4"><img src="{{ asset('img/face5.jpg') }}" alt="Navigation avatar" class="img-fluid rounded-circle"></li>
          </ol>
        </div>
      </div>
    </section>


    <!-- Text Content
    ================================================== -->

    <section class="section-text">
      <div class="container">
        <h3 class="text-center">Make your mark on the product industry</h3>
        <div class="row py-5 justify-content-between">
          <div class="col-md-5">
            <p class="wp wp-7">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
          <div class="col-md-5 align-self-end separator-x">
            <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- News
    ================================================== -->

    <section class="section-news">
      <h3 class="sr-only">News</h3>
      <div class="container">
        <div class="row align-items-center no-gutters bg-dark">
          <div class="col-md">
            <figure class="has-light-mask mb-0 image-effect">
              <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
            </figure>
          </div>
          <div class="col-md">
            <article class="mx-auto">
              <span class="badge badge-info">Featured article</span>
              <h5><a href="#">Design studio with product designer Peter Finlan <span class="icon-arrow-right"></span></a></h5>
              <p class="mb-0">
                <a href="#"><span class="badge badge-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                <a href="#"><span class="badge badge-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
              </p>
            </article>
          </div>
        </div>
        <div class="row align-items-center no-gutters bg-dark flex-md-row-reverse">
          <div class="col-md">
            <figure class="has-light-mask mb-0 image-effect">
              <img src="https://images.unsplash.com/photo-1434394673726-e8232a5903b4?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
            </figure>
          </div>
          <div class="col-md">
            <article class="mx-auto">
              <span class="badge badge-info">Featured article</span>
              <h5><a href="#">How bold, emotive imagery can connect with your audience <span class="icon-arrow-right"></span></a></h5>
              <p class="mb-0">
                <a href="#"><span class="badge badge-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                <a href="#"><span class="badge badge-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>


    <!-- Sign Up
    ================================================== -->

    <section class="section-signup bg-light">
      <div class="container">
        <h3 class="text-center mb-5">Sign up to receive free updates as soon as they hit!</h3>
        <form>
          <div class="row">
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Your name</label>
                <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-email">
                <label class="sr-only" for="inputEmail">Email address</label>
                <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-password">
                <label class="sr-only" for="inputPassword">Enter a password</label>
                <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block btn-pill">Sign up for free!</button>
              </div>
            </div>
          </div>
          <label class="c-input c-checkbox">
            <input type="checkbox" checked>
            <span class="c-indicator"></span> I agree to Land.io’s <a href="#">terms of service</a>
          </label>
        </form>
      </div>
    </section>


    <!-- Footer
    ================================================== -->

    <footer class="section-footer bg-dark" role="contentinfo">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-5">
            <div class="media flex-column flex-md-row">
              <span class="d-flex align-self-center align-self-md-start icon-logo"></span>
              <small class="media-body text-center text-md-left">
                &copy; Land.io 2015. <br>
                Designed by Peter Finlan, developed by Taty Grassini, exclusively for Codrops.
              </small>
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav flex-column flex-md-row justify-content-md-end">
              <li class="nav-item">
                <a class="nav-link" href="#"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item"><a class="nav-link" href="/elements">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank" rel="nofollow">GitHub</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/plugins/video.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.vimeo.api.min.js') }}"></script>
    <script src="{{ asset('js/plugins/Chart.min.js') }}"></script>
    <script src="{{ asset('js/landio.js') }}"></script>
  </body>
</html>
