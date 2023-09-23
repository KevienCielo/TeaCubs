<header class="shadow">
    <nav class="navbar navbar-expand-md sticky-top header">
        <div class="container-lg">
            <a
                href="/"
                class="navbar-brand d-flex justify-content-center align-items-center"
            >
                <img
                src="images/teacubs-logo.png"
                width="80"
                height="60"
                class="d-inline-block align-top"
                alt="Tea Cubs Logo"
                />
                <p class="m-auto h3">
                    <span class="tea-span">Tea</span>
                    <span class="cubs-span">Cubs</span>
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <ul class="navbar-nav">
                        <span class="navbar-text">
                            Welcome:
                        </span>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle account-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                NameOfUser
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/user/account-information">Account Information</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/login" type="button" class="btn btn-outline-primary header-button yellow-outline me-2">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" type="button" class="btn btn-primary header-button blue-button">
                                Register
                            </a>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>
</header>