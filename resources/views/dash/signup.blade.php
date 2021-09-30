@extends('layouts.welcome')
@section('content')
<div class="inner" style="margin-top: 10% ; margin-bottom: 10%">
    <header class="special">
        <h2>إختيار نوع الحساب</h2>
    </header>
    <div class="highlights justify-content-center">

        <section>
            <div class="content">
                <header>
                    <a href="{{ route('craftsman.register') }}" class="icon fa-user" style="color: orangered"><span class="label">Icon</span></a>
                </header>
                <h3 style="text-align: center">التسجيل كصاحب حرفة</h3>
                <h3 style="text-align: center">Craftsman</h3>
            </div>
        </section>

        <section>
            <div class="content">
                <header>
                    <a href="{{ route('register') }}" class="icon fa-search" style="color: orangered"><span class="label">Icon</span></a>
                </header>
                <h3 style="text-align: center">تسجيل الدخول كباحث عن حرفة او خدمات</h3>
            </div>
        </section>

    </div>
</div>
@endsection