@extends('layouts.welcome')
@section('content')
<center>
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <header>
                    <h2 style="color: black;">لاتوجد منشورات</h2>
                </header>
                <img src="{{ asset('/images/hammer.png') }}" style="height:60% ; width60%;" alt="hammer.png">
                <p style="color: black; font-size: 22px ; justify-content: center; margin: 15px">
                    هذا المحتوى غير موجود او لم يتم نشر منشورات على هذه الصفحة</p>
            </div>
        </div>
    </section>
</center>
@endsection