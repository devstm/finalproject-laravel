@extends('layouts.registration')

@section('form')
    <div class="kt-login__signup">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Sign Up</h3>
            <div class="kt-login__desc">Enter your details to create your account:</div>
        </div>
        <form class="kt-login__form kt-form" method="POST" action="{{ route('admin.register') }}">
            @csrf
            <div class="input-group">
                <input id="email" type="email" placeholder="{{__('email')}}"
                       class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>
            <div class="input-group">
                <input id="name" type="text" placeholder="{{__('name')}}"
                       class="form-control @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="username" type="text" placeholder="{{__('username')}}"
                       class="form-control @error('username') is-invalid @enderror" name="username"
                       value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="phone" type="text" placeholder="{{__('phone')}}"
                       class="form-control @error('phone') is-invalid @enderror" name="phone"
                       value="{{ old('phone') }}" required autocomplete="username" autofocus>

                @error('phone')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="address" type="text" placeholder="{{__('address')}}"
                       class="form-control @error('address') is-invalid @enderror" name="address"
                       value="{{ old('address') }}" required autocomplete="address" autofocus>

                @error('address')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password" type="password"  placeholder="{{__('password')}}"
                       class="form-control @error('password') is-invalid @enderror" name="password"
                       required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="input-group">
                <input id="password-confirm" type="password" class="form-control" placeholder="{{__('password confirm')}}"
                       name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="kt-login__actions">
                <button type="submit" class="btn btn-pill kt-login__btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
        <div>
            <span style="color: white"> Or Login if you have account? </span>
            <a href="{{ route('craftsman.login') }}"  class="kt-link kt-link--light kt-login__account-link">Sign In</a>
        </div>
    </div>
@endsection
