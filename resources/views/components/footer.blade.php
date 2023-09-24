@section('first-column')
  <div class="col-xl-3 col-md-4 mx-auto shfooter">
    <h5 class="my-2 font-weight-bold fs-4 d-none d-md-block">
      Contact Info
    </h5>
    <div class="d-md-none title" type="button" data-bs-toggle="collapse" data-bs-target="#contactInfo" aria-expanded="false"
      aria-controls="contactInfo">
      <div class="d-flex justify-content-between align-items-center">
        <span class="align-self-center my-3 font-weight-bold fs-4">
          <h5>Contact Info</h5>
        </span>
        <span class="align-self-center my-3 navbar-toggler">
          <i class="bi bi-caret-down-fill"></i>
          <i class="bi bi-caret-up-fill"></i>
        </span>
      </div>
    </div>
    <div class="collapse" id="contactInfo">
      <ul class="list-unstyled">
        <li class="mb-3">
          <span class="me-3">
            <i class="bi bi-geo-alt-fill icons" style="font-size: 20px"></i>
          </span>
          <span>
            2nd floor CCN Bldg. Onjiangco St., Sta. Veronica District,
            Guimba, Philippines, 3115
          </span>
        </li>
        <li class="mb-3">
          <span class="d-inline-block me-3">
            <i class="bi bi-telephone-fill icons" style="font-size: 20px"></i>
          </span>
          <span>0916 567 5405</span>
        </li>
        <li class="mb-3">
          <span class="d-inline-block me-3">
            <i class="bi bi-envelope-fill icons" style="font-size: 20px"></i>
          </span>
          <span>teacubsguimba@gmail.com</span>
        </li>
        <li class="mt-4">
          <ul class="navbar m-0 p-0 socials justify-content-start">
            <li class="nav-link">
              <a href="https://www.facebook.com/teacubsguimba" target="_blank" class="nav-item m-0 mb-3 me-3 p-0">
                <i class="bi bi-facebook icons" style="font-size: 25px"></i>
              </a>
            </li>
            <li class="nav-link">
              <a href="https://www.instagram.com/teacubsph/" target="_blank" class="nav-item m-0 mb-3 me-3 p-0">
                <i class="bi bi-instagram icons" style="font-size: 25px"></i>
              </a>
            </li>
            <li class="nav-link">
              <a href="/" target="_blank" class="nav-item m-0 mb-3 me-3 p-0">
                <i class="bi bi-twitter icons" style="font-size: 25px"></i>
              </a>
            </li>
            <li class="nav-link">
              <a href="/" target="_blank" class="nav-item m-0 mb-3 me-3 p-0">
                <i class="bi bi-linkedin icons" style="font-size: 25px"></i>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
@endsection

@section('second-column')
  <div class="col-xl-3 col-md-4 mx-auto shfooter">
    <h5 class="my-2 font-weight-bold fs-4 d-none d-md-block">
      Information
    </h5>
    <div class="d-md-none title" type="button" data-bs-toggle="collapse" data-bs-target="#information"
      aria-expanded="false" aria-controls="information">
      <div class="d-flex justify-content-between align-items-center">
        <span class="align-self-center my-3 font-weight-bold fs-4">
          <h5>Information</h5>
        </span>
        <span class="align-self-center my-3 navbar-toggler">
          <i class="bi bi-caret-down-fill"></i>
          <i class="bi bi-caret-up-fill"></i>
        </span>
      </div>
    </div>
    <div class="collapse" id="information">
      <ul class="list-unstyled">
        <li class="mb-3">
          <a class="text-decoration-none text-black" href="/about-us">
            <span class="navlink">About Us</span>
          </a>
        </li>
        <li class="mb-3">
          <a class="text-decoration-none text-black" href="/delivery-information">
            <span class="navlink">Delivery Information</span>
          </a>
        </li>
        <li class="mb-3">
          <a class="text-decoration-none text-black" href="/privacy-policy">
            <span class="navlink">Privacy Policy</span>
          </a>
        </li>
        <li class="">
          <a class="text-decoration-none text-black" href="/terms-and-conditions">
            <span class="navlink">Terms & Conditions</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
@endsection

@section('third-column')
  <div class="col-xl-3 col-md-4 mx-auto shfooter">
    <h5 class="my-2 font-weight-bold fs-4 d-none d-md-block">
      My Account
    </h5>
    <div class="d-md-none title" type="button" data-bs-toggle="collapse" data-bs-target="#myAccount"
      aria-expanded="false" aria-controls="myAccount">
      <div class="d-flex justify-content-between align-items-center">
        <span class="align-self-center my-3 font-weight-bold fs-4">
          <h5>My Account</h5>
        </span>
        <span class="align-self-center my-3 navbar-toggler">
          <i class="bi bi-caret-down-fill"></i>
          <i class="bi bi-caret-up-fill"></i>
        </span>
      </div>
    </div>
    <div class="collapse" id="myAccount">
      <ul class="list-unstyled">
        <li class="mb-3">
          <a class="text-decoration-none text-black" href="/user/information">
            <span class="navlink">Account Information</span>
          </a>
        </li>
        <li class="mb-3">
          <a class="text-decoration-none text-black" href="/user/order-history">
            <span class="navlink">Oder History</span>
          </a>
        </li>
        <li class="mb-3">
          <a class="text-decoration-none text-black" href="/user/favorites">
            <span class="navlink">Favorites</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
@endsection

@section('fourth-column')
  <div class="col-xl-3 col-md-4 mx-auto">
    <h5 class="my-2 font-weight-bold fs-4">Subscribe</h5>
    <p class="text-muted">
      Subscribe to our newsletter and stay up to date with new items in our
      menu, promos, and exclusive reawards.
    </p>
    <form action="/newsletter" method="post">
      @csrf
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Enter email address" aria-label="Recipient's email"
          aria-describedby="newsletter">
        <button type="submit" class="btn brown-button" id="subscribe">
          Subscribe
        </button>
      </div>
    </form>
  </div>
@endsection

@section('bottom-section')
  <div class="col">
    <p className="text-muted text-start">
      Copyright &copy; 2023, Tea Cubs Cafe. All
      rights reserved.
    </p>
  </div>
  <div class="col">
    <div class="container d-flex justify-content-end">
      <div class="m-0 p-0 border-0">
        <ul class="navbar m-0 p-0">
          <li class="nav-link m-0 me-3 p-0 footer-li">
            <a class="text-decoration-none text-black footer-a" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-link m-0 me-3 p-0 footer-li">
            <a class="text-decoration-none text-black footer-a" href="/menu">Menu</a>
          </li>
          <li class="nav-link m-0 me-3 p-0 footer-li">
            <a class="text-decoration-none text-black footer-a" href="/reservations">Reservations</a>
          </li>
          <li class="nav-link m-0 me-3 p-0 footer-li">
            <a class="text-decoration-none text-black footer-a" href="/locations">Locations</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection

<footer class="shadow d-flex flex-column pt-2">
  <div class="container-lg text-left">
    <div class="row">
      @section('first-column')@show
      @section('second-column')@show
      @section('third-column')@show
      @section('fourth-column')@show
    </div>
    <div class="row divider mb-4 border-dark"></div>
    <div class="row">
      @section('bottom-section')@show
    </div>
  </div>
</footer>
