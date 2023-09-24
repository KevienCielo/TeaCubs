@section('first-section')
  <section>
    <div class="container">
      <div class="row pt-5">
        <div class="col-lg-6 p-0">
          <div id="featureCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/delivery-tarp.jpg') }}" class="d-block w-100 img-fluid" alt="Delivery" />
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/meal-set.jpg') }}" class="d-block w-100 img-fluid" alt="Meal Set" />
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 tea-bg text-center d-flex flex-column justify-content-center align-items-center p-5 text-wrap text-break">
          <h1 class="mb-4">"It all starts with a cup"</h1>
          <p class="mb-0">
            All items are available for Pick-up or Delivery. Enjoy your
            favorite snacks, drinks, meals, and desserts in the comfort of
            your own home.
          </p>
          <p>Get your orders now!</p>
          <a class="btn btn-dark rounded" href="/menu" role="button">
            Order Now!
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('second-section')
  <section>
    <div class="container">
      <div class="row mt-4">
        <div class="col-lg-12 p-0">
          <img class="img-thumbnail img-fluid" src="{{ asset('images/summer-promo.jpg') }}" alt="Summer Promo" />
        </div>
      </div>
    </div>
  </section>
@endsection

@section('third-section')
  <section>
    <div class="container">
      <div class="row mt-4 pb-5">
        <div class="col-lg-6 p-0">
          <div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/vip-card.jpg') }}" class="d-block w-100 img-fluid" alt="Tea Cubs VIP Card" />
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/loyalty-card.jpg') }}" class="d-block w-100 img-fluid"
                  alt="Tea Cubs Loyalty Card" />
              </div>
            </div>
          </div>
        </div>
        <div
          class="col-lg-6 cubs-bg text-center d-flex flex-column justify-content-center align-items-center p-5 text-wrap text-break">
          <h1 class="mb-4">Rewards..? Freebies..?</h1>
          <p class="mb-0">
            Want some free drinks or free meals? Register an account and
            become a VIP or a Loyalty card holder and accumulate reward points
            everytime you order online. Use your accumulated reward points to
            claim your freebies.
          </p>
          <p>Register an account!</p>
          <a class="btn btn-dark rounded" href="{{ route('register') }}" role="button">
            Join Us!
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection

<x-layouts.default>
  <div class="home">
    @section('first-section')@show
    @section('second-section')@show
    @section('third-section')@show
  </div>
</x-layouts.default>
