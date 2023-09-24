<header class="shadow">
  <nav class="navbar navbar-expand-md sticky-top header">
    <div class="container-lg">
      <a href="{{ route('home') }}" class="navbar-brand d-flex justify-content-center align-items-center">
        <img src="images/teacubs-logo.png" width="80" height="60" class="d-inline-block align-top"
          alt="Tea Cubs Logo" />
        <p class="m-auto h3">
          <span class="tea-span">Tea</span>
          <span class="cubs-span">Cubs</span>
        </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"
        aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="header-nav">
        <ul class="navbar-nav">
          <li class="nav-item header-li">
            <a class="nav-link header-a" aria-current="page" href="/menu">
              <p class="h5 m-auto">
                Menu
              </p>
            </a>
          </li>
          <li class="nav-item header-li">
            <a class="nav-link header-a" href="/reservations">
              <p class="h5 m-auto">
                Reservations
              </p>
            </a>
          </li>
          <li class="nav-item header-li">
            <a class="nav-link header-a" href="/locations">
              <p class="h5 m-auto">
                Locations
              </p>
            </a>
          </li>
        </ul>
        @auth
          <ul class="navbar-nav ms-auto">
            <span class="navbar-text fw-bold fs-5">
              Welcome:
            </span>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle account-dropdown fw-bold fs-5" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/user/account-information">Account Information</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        @else
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="{{ route('login') }}" class=" fw-bold fs-5 nav-link me-2">
                <i class="bi bi-box-arrow-in-right icons"></i>
                Login
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('register') }}"class=" fw-bold fs-5 nav-link ">
                <i class="bi bi-person-plus icons"></i>
                Register
              </a>
            </li>
          </ul>
        @endauth
      </div>
    </div>
  </nav>
</header>
