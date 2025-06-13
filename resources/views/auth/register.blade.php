@extends('layouts.app')

@section('content')
<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                            <span class="d-none d-lg-block">NiceAdmin</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">{{ __('Create an Account') }}</h5>
                                <p class="text-center small">{{ __('Enter your personal details to create an account') }}</p>
                            </div>

                            <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}" novalidate>
                                @csrf

                                <div class="col-12">
                                    <label for="name" class="form-label">{{ __('Your Name') }}</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">{{ __('Your Email') }}</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password-confirm" required>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="terms" type="checkbox" id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">{{ __('I agree and accept the terms and conditions') }}</label>
                                        <div class="invalid-feedback">{{ __('You must agree before submitting.') }}</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">{{ __('Create Account') }}</button>
                                </div>

                                <div class="col-12 text-center">
                                    <p class="small mb-0">{{ __('Already have an account?') }} <a href="{{ route('login') }}">{{ __('Log in') }}</a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection
