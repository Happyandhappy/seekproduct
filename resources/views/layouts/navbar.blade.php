<nav class="navbar navbar-expand-md navbar-dark bg-dark">
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
              <a class="nav-link" href="/main" rel="nofollow">Home</a>
            </li> 
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            @if(!Auth::check())
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/login" rel="nofollow">Log In</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="/register" rel="nofollow">Register</a>
            </li>
            @endif         
   
            <li class="nav-item nav-item-toggable hidden-md-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li>
            
            @if(Auth::check())
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
                    <h5 class="mt-0 mb-1">{{Auth::user()->name}}</h5>
                    <h6 class="mb-0">{{Auth::user()->email}}</h6>
                  </div>
                </div>
                <a href="/logout" class="dropdown-item text-uppercase">Log out</a>
              </div>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>