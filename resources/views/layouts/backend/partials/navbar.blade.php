<aside class="navbar navbar-vertical navbar-expand-lg navbar-transparent">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand navbar-brand-autodark">
        <a href=".">
          <img src="{{ asset('assets/backend') }}/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </h1>
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="navbar-nav pt-lg-3">
          <li class="nav-item">
            <a class="nav-link" href="./index.html" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
              </span>
              <span class="nav-link-title">
                Interface
              </span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-columns">
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./empty.html" >
                    Empty page
                  </a>
                  <a class="dropdown-item" href="./accordion.html" >
                    Accordion
                  </a>
                  <a class="dropdown-item" href="./blank.html" >
                    Blank page
                  </a>
                  <a class="dropdown-item" href="./buttons.html" >
                    Buttons
                  </a>
                  <a class="dropdown-item" href="./cards.html" >
                    Cards
                  </a>
                  <a class="dropdown-item" href="./cards-masonry.html" >
                    Cards Masonry
                  </a>
                  <a class="dropdown-item" href="./colors.html" >
                    Colors
                  </a>
                  <a class="dropdown-item" href="./dropdowns.html" >
                    Dropdowns
                  </a>
                  <a class="dropdown-item" href="./icons.html" >
                    Icons
                  </a>
                  <a class="dropdown-item" href="./modals.html" >
                    Modals
                  </a>
                  <a class="dropdown-item" href="./maps.html" >
                    Maps
                  </a>
                  <a class="dropdown-item" href="./map-fullsize.html" >
                    Map fullsize
                  </a>
                  <a class="dropdown-item" href="./maps-vector.html" >
                    Vector maps
                  </a>
                </div>
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./navigation.html" >
                    Navigation
                  </a>
                  <a class="dropdown-item" href="./charts.html" >
                    Charts
                  </a>
                  <a class="dropdown-item" href="./pagination.html" >
                    Pagination
                  </a>
                  <a class="dropdown-item" href="./skeleton.html" >
                    Skeleton
                  </a>
                  <a class="dropdown-item" href="./tabs.html" >
                    Tabs
                  </a>
                  <a class="dropdown-item" href="./tables.html" >
                    Tables
                  </a>
                  <a class="dropdown-item" href="./carousel.html" >
                    Carousel
                  </a>
                  <a class="dropdown-item" href="./lists.html" >
                    Lists
                  </a>
                  <a class="dropdown-item" href="./typography.html" >
                    Typography
                  </a>
                  <a class="dropdown-item" href="./markdown.html" >
                    Markdown
                  </a>
                  <div class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                      Authentication
                    </a>
                    <div class="dropdown-menu">
                      <a href="./sign-in.html" class="dropdown-item">Sign in</a>
                      <a href="./sign-up.html" class="dropdown-item">Sign up</a>
                      <a href="./forgot-password.html" class="dropdown-item">Forgot password</a>
                      <a href="./terms-of-service.html" class="dropdown-item">Terms of service</a>
                      <a href="./auth-lock.html" class="dropdown-item">Lock screen</a>
                    </div>
                  </div>
                  <div class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                      Error pages
                    </a>
                    <div class="dropdown-menu">
                      <a href="./error-404.html" class="dropdown-item">404 page</a>
                      <a href="./error-500.html" class="dropdown-item">500 page</a>
                      <a href="./error-maintenance.html" class="dropdown-item">Maintenance page</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./docs/index.html" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
              </span>
              <span class="nav-link-title">
                Documentation
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </aside>