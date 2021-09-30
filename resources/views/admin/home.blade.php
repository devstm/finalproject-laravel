@extends('layouts.theme')
@section('content')
<div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__body">
                    <div class="kt-widget kt-widget--user-profile-3">
                        <div class="kt-widget__top">

                            <div class="kt-widget__media kt-hidden-">
                                <img src="assets/media/users/100_13.jpg" alt="image">
                            </div>

                            <div class="kt-widget__content">
                                <div class="kt-widget__head">
                                    <a href="#" class="kt-widget__username">
                                        {{ auth('admin')->user()->name }}
                                        <i class="flaticon2-correct"></i>
                                    </a>
                                </div>

                                <div class="kt-widget__subhead">
                                    <a href="mailto:{{ auth('admin')->user()->email }}"><i class="flaticon2-new-email"></i>&nbsp;{{ auth('admin')->user()->email }}</a>
                                    <a href="tel:{{ auth('admin')->user()->phone }}"><i class="flaticon2-calendar-3"></i>&nbsp;{{ auth('admin')->user()->phone }}</a>
                                    <a href="#"><i class="flaticon2-placeholder"></i>&nbsp;{{ auth('admin')->user()->address }}</a>
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
        </div>
    </div>

    <div class="row">
        <div class="kt-portlet">
            <div class="kt-portlet__body  kt-portlet__body--fit">
                <div class="row row-no-padding row-col-separator-xl">
                    <div class="col-xl-4">
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-widget14">
                                
                                <div class="kt-widget14__header kt-margin-b-30">
                                    <h3 class="kt-widget14__title">بيانات النظام</h3>
                                    <span class="kt-widget14__desc">
                                    عند اكتماال تطوير النظام من المفترض ان توضح نسبة زيادة عدد المستخدمين النشيطين بشكل يومي ولمدة 10 ايام
                                    </span>
                                </div>

                                <div class="kt-widget14__chart" style="height:120px;">
                                    <canvas id="kt_chart_daily_sales"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection