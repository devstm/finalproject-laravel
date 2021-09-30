@extends('layouts.registration')
@section('form')
    <div class="kt-login__signup">
        <div class="kt-login__head">
            <h3 class="kt-login__title">{{ __('craftsman.signin') }}</h3>
            <div class="kt-login__desc">{{ __('craftsman.signinPlease') }}</div>
        </div>
        <form class="kt-login__form kt-form" method="POST" action="{{ route('craftsman.login') }}">
            @csrf
            
            <div class="input-group">
                <input id="email" type="email" placeholder="{{ __('craftsman.email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password" type="password" placeholder="{{ __('craftsman.password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div>
            <center><a href="{{ route('craftsman.password.request') }}"  class="kt-link kt-link--light kt-login__account-link">{{ __('craftsman.forgotPassword') }}</a></center>
        </div>

            <div class="kt-login__actions">
                <button type="submit" class="btn btn-pill kt-login__btn-primary">
                    {{ __('craftsman.signin') }}
                </button>
            </div>

        </form>
    </div>
    <div>
        <span style="color: white">{{ __('craftsman.dontHaveAccount') }}</span>&nbsp;&nbsp;
        <a href="{{ route('craftsman.register') }}"  class="kt-link kt-link--light kt-login__account-link">{{ __('craftsman.register') }}</a>
    </div>
@endsection