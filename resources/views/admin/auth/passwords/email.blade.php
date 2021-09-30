@extends('layouts.registration')
@section('form')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="kt-login__signup">
        <div class="kt-login__head">
            <h3 class="kt-login__title">نسيت كلمة السر؟</h3>
            <div class="kt-login__desc">الرجاء ادخال البريد الالكتروني لاعادة تعيين كلمة السر</div>
        </div>
        <form class="kt-form" method="POST" action="{{ route('admin.password.request') }}">

            @csrf
            <div class="input-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="كلمة السر القديمة">
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="كلمة السر الجديدة">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="password-confirm" value="{{ old('password-confirm') }}" required autocomplete="password-confirm" autofocus placeholder="تاكيد كلمة السر">
                @error('password-confirm')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="kt-login__actions">
                <button id="" type="submit" class="btn btn-pill kt-login__btn-primary">طلب اعادة تعيين</button>&nbsp;&nbsp;
            </div>
        </form>
    </div>
@endsection
