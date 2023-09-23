@section('logo-header')
  <div class="d-flex justify-content-center py-4">
    <a href="/" class="navbar-brand d-flex justify-content-center align-items-center">
      <img src="images/teacubs-logo.png" width="60" height="45" class="d-inline-block align-top" alt="Tea Cubs Logo" />
      <p class="m-auto h2">
        <span class="tea-span">Tea</span>
        <span class="cubs-span">Cubs</span>
      </p>
    </a>
  </div>
@endsection

@section('card')
  <div class="card mb-3">
    <div class="card-body">
      <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
        <p class="text-center small">Enter your personal details to create account</p>
      </div>
      <form class="row g-3" action="/users" method="POST">
        @csrf
        <div class="col-12">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name"
            value="{{ old('name') }}">
          @error('name')
            <p class="text-danger m-0 p-0 mt-1 fw-light fs-6">{{ $message }}</p>
          @enderror
        </div>
        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address"
            value="{{ old('email') }}">
          @error('email')
            <p class="text-danger m-0 p-0 mt-1 fw-light fs-6">{{ $message }}</p>
          @enderror
        </div>
        <div class="col-12">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control d-inline" id="password"
            placeholder="Enter your password" value="{{ old('password') }}">
          <i class="bi bi-eye-slash d-inline" id="togglePassword"></i>
          @error('password')
            <p class="text-danger m-0 p-0 mt-1 fw-light fs-6">{{ $message }}</p>
          @enderror
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms">
            <label class="form-check-label" for="acceptTerms">
              I agree and accept the
              <a href="/terms-and-conditions">
                Terms and Conditions
              </a>
            </label>
            <div class="invalid-feedback">You must agree before submitting.</div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary w-100" type="submit">Create Account</button>
        </div>
        <div class="col-12">
          <p class="small mb-0">
            Already have an account?
            <a href="/login">Login</a>
          </p>
        </div>
      </form>
    </div>
  </div>
@endsection

<x-layouts.authentication>
  <section class="register min-vh-100 d-flex flex-column align-items-center justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          @section('logo-header')@show
          @section('card')@show
        </div>
      </div>
    </div>
  </section>
</x-layouts.authentication>
