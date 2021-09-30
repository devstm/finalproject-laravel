@extends('layouts.welcome')
@section('content')

@if($data)
<div class="inner" style="margin-top: 10%">
    <header class="special">
        <h2>نتائج البحث</h2>
    </header>

    <div class="highlights">
        @if($data[0])
        @foreach($data[0] as $craftsman)
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__body">
                    <div class="kt-widget kt-widget--user-profile-3">
                        <div class="kt-widget__top">

                            <div class="kt-widget__media kt-hidden-">
                                <img src="{{ URL('/assets/media/users/100_13.jpg') }}" alt="image">
                            </div>

                            <div class="kt-widget__content">
                                <div class="kt-widget__head">
                                    <a href="{{ URL('craftsman/' . $craftsman->id . '/show') }}" class="kt-widget__username">
                                        {{ $craftsman->name }}
                                    </a>
                                    <div class="kt-widget__action">
                                        <a href="{{ URL('/craftsman/'. $craftsman->id .'/show') }}"><button type="button" class="btn btn-label-success btn-sm">الاعمال والمنشورات</button></a>
                                        <button type="button" class="btn btn-label-success btn-sm btn-upper">دردشة</button>
                                    </div>
                                </div>
                                <div class="kt-widget__subhead">
                                    <a href="mailto:{{ $craftsman->email }}"><i class="flaticon2-new-email"></i>&nbsp;{{ $craftsman->email }}</a>
                                    <a href="tel:{{ $craftsman->phone }}"><i class="flaticon2-calendar-3"></i>&nbsp;{{ $craftsman->phone }}</a>
                                    <a href="#"><i class="flaticon2-placeholder"></i>&nbsp;{{ $craftsman->address }}</a>
                                </div>
                                <div class="kt-widget__info">
                                    <div class="kt-widget__desc">
                                    أميز بين ثلاثة أهداف نصية رئيسية يمكن أن تكون مجرد إعلام الناس.
                                        <br>والثانية يمكن أن تقنع الناس ، فأنت تريد من الناس الاصرار على الهدف.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @else
            <h1>نأسف! لم يفلح بحثك حاول مرة اخرى</h1>
        @endif
    </div>
</div>
@else
    <h1>نأسف! لم يفلح بحثك حاول مرة اخرى</h1>
@endif
@endsection