<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#663fb5">
    <title>Template Elements</title>
    <link rel="stylesheet" href="{{ asset('css/landio.min.css') }}">
  </head>

  <body class="bg-light pt-4">
    <div class="container">
      <h3 class="py-3 text-center"> Template <strong> UI Elements</strong></h3>
    </div>

    <!-- WHITE navigation
    ================================================== -->

    <nav class="navbar navbar-expand-md navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand mr-auto" href="/">
          <span class="icon-logo"></span>
          <span class="sr-only">SeekProduct</span>
        </a>

        <div class="hidden-md-up">
          <a class="navbar-toggler collapsed" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
            <div class="sr-only">Toggle mobile navigation</div>
          </a>
        </div>

        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom">
          <ul class="nav navbar-nav float-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#" target="_blank" rel="nofollow">Codrops</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/">SeekProduct</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/carousel">Slides</a>
            </li>
            <li class="nav-item nav-item-toggable active">
              <a class="nav-link" href="/elements">UI Kit <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="//github.com/tatygrassini/landio-html" target="_blank" rel="nofollow">GitHub</a>
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

    <hr class="invisible">

    <!-- DARK navigation
    ================================================== -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand mr-auto" href="/">
          <span class="icon-logo"></span>
          <span class="sr-only">SeekProduct</span>
        </a>

        <div class="hidden-md-up">
          <a class="navbar-toggler collapsed" data-toggle="collapse" href="#collapsingNavbarInverse" aria-expanded="false" aria-controls="collapsingNavbarInverse">
            <div class="sr-only">Toggle mobile navigation</div>
          </a>
        </div>

        <div id="collapsingNavbarInverse" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbarInverse">
          <ul class="nav navbar-nav float-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#" target="_blank" rel="nofollow">Codrops</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/">Land.io</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/carousel">Slides</a>
            </li>
            <li class="nav-item nav-item-toggable active">
              <a class="nav-link" href="">UI Kit <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="//github.com/tatygrassini/landio-html" target="_blank" rel="nofollow">GitHub</a>
            </li>
            <li class="nav-item nav-item-toggable hidden-md-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li>
            <li class="navbar-divider hidden-md-down" aria-hidden="true"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-md-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenuInverse1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenuInverse1">
                <form class="navbar-form">
                  <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                </form>
              </div>
            </li>
            <li class="nav-item dropdown hidden-md-down textselect-off">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenuInverse2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('img/face5.jpg') }}" height="40" width="40" alt="Avatar" class="rounded-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenuInverse2">
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

    <hr class="invisible">

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-4">

          <!-- Forms
          ================================================== -->

          <div class="form-group has-icon-left form-control-name">
            <label class="sr-only" for="inputName">Your name</label>
            <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
          </div>
          <div class="form-group has-icon-left form-control-email">
            <label class="sr-only" for="inputEmail">Email address</label>
            <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
          </div>
          <div class="form-group has-icon-left form-control-password">
            <label class="sr-only" for="inputPassword">Enter a password</label>
            <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
          </div>

          <!-- Buttons
          ================================================== -->

          <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up for free!</button>
          <hr class="invisible">
          <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign up for free!</button>
          <hr class="invisible">
          <button type="submit" class="btn btn-primary has-gradient btn-block btn-lg">Sign up for free!</button>

          <hr class="invisible">
        </div>
        <div class="col-md-6 col-xl-4">

          <!-- SOCIAL buttons
          ================================================== -->

          <a href="#" class="btn btn-social btn-block bg-facebook">
            <span class="icon-facebook"></span> Login with Facebook
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-twitter">
            <span class="icon-twitter"></span> Login with Twitter
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-google">
            <span class="icon-google"></span> Login with Google
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-linkedin">
            <span class="icon-linkedin"></span> Login with LinkedIn
          </a>

          <hr class="invisible">

          <div class="text-center">

            <!-- SOCIAL icon buttons
            ================================================== -->

            <a href="#" class="btn btn-social btn-social-icon btn-social-facebook">
              <span class="icon-facebook"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-twitter">
              <span class="icon-twitter"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-google">
              <span class="icon-google"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-linkedin">
              <span class="icon-linkedin"></span>
            </a>
          </div>

          <hr class="invisible">

        </div>

        <div class="clearfix hidden-xl-up"></div>

        <div class="col-md-4">

          <!-- Chart
          ================================================== -->

          <div class="card card-chart">
            <div id="chart-holder" class="m-x-auto" data-active="90%">
              <canvas id="chart-area" class="m-x-auto" width="200" height="200"></canvas>
            </div>
            <ul class="list-group">
              <li class="list-group-item complete">
                <span class="label float-right">324</span>
                <span class="icon-status status-completed"></span> Completed
              </li>
              <li class="list-group-item">
                <span class="label float-right">34</span>
                <span class="icon-status status-backlog"></span> In backlog
              </li>
              <li class="list-group-item">
                <span class="label float-right">20</span>
                <span class="icon-status status-noticket"></span> Without ticket
              </li>
            </ul>
          </div>

          <hr class="invisible">

        </div>

        <div class="col-md-8 col-xl-6 mx-auto">

          <!-- User Card
          ================================================== -->

          <div class="card card-social text-center">
            <div class="card-body has-gradient text-white">
              <img src="{{ asset('img/face5.jpg') }}" height="90" width="90" alt="Avatar" class="rounded-circle">
              <h5 class="card-title">Joel Fisher</h5>
              <h6 class="card-subtitle">hey@joelfisher.com</h6>
              <button type="submit" class="btn btn-outline-secondary btn-sm">Follow</button>
            </div>
            <div class="card-body container">
              <div class="row">
                <div class="col-md-4 card-stat">
                  <h4>149 <small class="text-uppercase">Shots</small></h4>
                </div>
                <div class="col-md-4 card-stat">
                  <h4>1,763 <small class="text-uppercase">Follows</small></h4>
                </div>
                <div class="col-md-4 card-stat">
                  <h4>324 <small>D/Ls</small></h4>
                </div>
              </div>
            </div>
          </div>

          <hr class="invisible">

        </div>
      </div>
    </div>

    <section class="section-news" style="padding-bottom:2rem;">
      <div class="container">
        <h3 class="sr-only">News</h3>

        <!-- News
        ================================================== -->

        <div class="bg-dark">
          <div class="row align-items-center no-gutters bg-dark">
            <div class="col-md">
              <figure class="has-light-mask mb-0 image-effect">
                <img src="//images.unsplash.com/photo-1442328166075-47fe7153c128?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md">
              <article class="mx-auto">
                <span class="badge badge-info">Featured article</span>
                <br>
                <h5><a href="#">Design studio with product designer Peter Finlan <span class="icon-arrow-right"></span></a></h5>
                <p class="mb-0">
                  <a href="#"><span class="badge badge-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                  <a href="#"><span class="badge badge-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                </p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <h4 class="my-4 text-center">Video JS</h4>

    <!-- Video JS
    ================================================== -->

    <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="{{ asset('img/video-poster.jpg') }}" data-setup='{}'>
      <source src="//vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
      <source src="//vjs.zencdn.net/v/oceans.webm" type='video/webm'>
    </video>

    <hr class="invisible">

    <h4 class="my-4 text-center">Vimeo (Bootstrap modal)</h4>

    <!-- VIMEO video
    ================================================== -->

    <figure class="has-light-mask">
      <a class="icon-play-button" href="#videoModal" data-toggle="modal" data-target="#videoModal">
        <span class="icon-play"></span>
      </a>
      <img class="w-100" src="{{ asset('img/video-poster.jpg') }}" alt="Video poster">
    </figure>

    <hr class="invisible">

    <h4 class="my-4 text-center">YouTube (Bootstrap modal)</h4>

    <!-- YOUTUBE video
    ================================================== -->

    <figure class="has-light-mask">
      <a id="youtube-trigger" class="icon-play-button" href="#" data-toggle="modal" data-target="#youtubeModal" data-video="//www.youtube.com/embed/loFtozxZG0s">
        <span class="icon-play"></span>
      </a>
      <img class="w-100" src="{{asset('img/video-poster.jpg') }}" alt="Video poster">
    </figure>

    <hr class="invisible">

    <!-- WHITE Footer
    ================================================== -->

    <footer class="section-footer bg-white" role="contentinfo">
      <div class="container">
        <div class="row">
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
                <a class="nav-link" href="/carousel"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active"><a class="nav-link" href="#">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="//github.com/tatygrassini/landio-html" target="_blank" rel="nofollow">GitHub</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <hr class="invisible">

    <!-- DARK footer
    ================================================== -->

    <footer class="section-footer bg-dark" role="contentinfo">
      <div class="container">
        <div class="row">
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
                <a class="nav-link" href="/carousel"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active"><a class="nav-link" href="#">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="//github.com/tatygrassini/landio-html" target="_blank" rel="nofollow">GitHub</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- video modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
      <div class="modal-dialog modal-video" role="document">
        <div class="modal-content">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" id="vimeo-play" src="//player.vimeo.com/video/98330466?color=6c59b4&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- video modal -->
    <div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="youtubeModal" aria-hidden="true">
      <div class="modal-dialog modal-video" role="document">
        <div class="modal-content">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="youtube-play" class="embed-responsive-item" src="" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/plugins/video.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.vimeo.api.min.js') }}"></script>
    <script src="{{ asset('js/plugins/Chart.min.js') }}"></script>
    <script src="{{ asset('js/landio.js') }}"></script>
    <script>
      var ctx = document.getElementById('chart-area').getContext('2d');
      var chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["Completed", "In backlog", "Without ticket"],
          datasets: [{
            data: [324, 34, 20],
            backgroundColor: ["#5e98e3", "#59d0bd", "#e8e9ec"],
            hoverBackgroundColor: ["#424753", "#424753", "#424753"]
          }]
        },
        options: {
          legend: false,
          responsive: true,
          cutoutPercentage: 80,
          tooltips: {
          }
        }
      });
    </script>
  </body>
</html>
