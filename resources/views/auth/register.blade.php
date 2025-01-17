@php
$title="Đăng Ký Tài Khoản Mới";
@endphp

@extends('layouts.app')

@section('css')
<style type="text/css">
    /* CSS here */
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
        .gradient-form {
        height: 100vh !important;
        }
    }
        
    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }

    .card-body {
        padding: 2rem;
    }

    .card-body .text-center img {
        width: 150px;
        margin-bottom: 1rem;
    }

    .card-body .form-group {
        margin-bottom: 1.5rem;
    }

    .card-body .form-group label {
        margin-bottom: .5rem;
        display: block;
    }

    .card-body .form-group input {
        width: 100%;
        padding: .75rem;
        border: 1px solid #ddd;
        border-radius: .25rem;
    }

    .card-body .form-group input.is-invalid {
        border-color: #e3342f;
    }

    .card-body .form-group .invalid-feedback {
        display: block;
        color: #e3342f;
        font-size: .875rem;
        margin-top: .5rem;
    }

    .card-body .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: .75rem 1.5rem;
        font-size: 1rem;
        border-radius: .25rem;
        width: 100%;
    }

    .card-body .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .card-body .row.mb-0 .col-md-12.offset-md-12 a {
        display: block;
        margin-bottom: 1rem;
        color: #007bff;
        text-decoration: underline;
    }

    .card-body .row.mb-0 .col-md-12.offset-md-12 a:hover {
        color: #0056b3;
    }
</style>
@stop

@section('content')


<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="uploads/logo.jpg"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Laptop cũ Huy Nam</h4>
                </div>

                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-12 col-form-label">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-12">
                                <a href="/login"> I have a Account </a>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Laptop Cũ Huy Nam - Chuyên Laptop Giá Rẻ</h4>
                <p class="small mb-0">Chuyên Laptop xách tay giá rẻ - Bảo hành dài lâu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
