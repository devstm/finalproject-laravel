<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <base href="../../">
    <meta charset="utf-8"/>
    <title>الحرفيين | الصفحة الشخصية</title>
    <meta name="description" content="No aside layout examples">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/skins/header/base/light.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/skins/header/menu/light.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/skins/brand/light.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/skins/aside/dark.rtl.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/pages/todo/todo.css" rel="stylesheet" type="text/css"/>
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="/images/hammer.png"/>
</head>
<!-- begin::Body -->
<body style="background-color: rgba(255,213,182,0.45);" class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-page--loading">
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " style="background-color: orangered">
    <div class="kt-header-mobile__logo">
        <a href="{{ URL('/') }}">
            <img alt="Logo" style="height: 36px" src="/images/logo.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " style="background-color: orangered">
                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
                    <div class="kt-header-logo">
                        <a href="{{ URL('/') }}">
                            <img alt="Logo" style="height: 40px ;" src="{{ asset('/images/logo.png') }}"/>
                        </a>
                    </div>
                    <div id="kt_header_menu"
                         class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
                    </div>
                </div>
                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar" style="background-color: orangered">
                    <!--begin: User Bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @if(auth('craftsman'))
                                        <li style="font-size: 28px" class="nav-item dropdown">
                                            <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle"
                                               href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false" v-pre>
                                                {{ auth('craftsman')->user()->name }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                 aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('تسجيل الخروج') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                            </div>
                                        </li>
                                    @else
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('التسجيل في الموقع') }}</a>
                                            </li>
                                        @endif

                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content" style="padding-bottom: 0px;">
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    <!--Begin::Tasks-->
                    <div class="kt-grid kt-grid--desktop kt-grid--ver-desktop  kt-todo" id="kt_todo">
                        <div class="kt-grid__item kt-grid__item--fluid kt-todo__content" id="kt_todo_content">
                            <div class="kt-todo__tasks-top">
                                <div class="kt-portlet">
                                    <!--Begin:: Tasks Toolbar-->
                                    <div class="kt-todo__header">
                                        <h3 class="kt-todo__title" style="margin-left: 15%">صفحة الحرفيين الرئيسية</h3>
                                        <!--Begin:: Tasks Nav-->
                                        <div class="kt-todo__nav" style="font-size: 18px">
                                            <a href="{{ URL('/craftsman') }}" class="kt-todo__link ">الصفحة الرئيسية</a>
                                            <a href="{{ URL('/craftsman') }}" class="kt-todo__link ">كل المنشورات</a>
                                            <a href="{{ URL('/craftsman_posts') }}" class="kt-todo__link">منشوراتي</a>
                                            <a href="{{ URL('/message') }}" class="kt-todo__link">الدردشة</a>
                                            <a href="/my_rate/{{ optional(auth('craftsman')->user())->id }}" class="kt-todo__link">التقييم الخاص بي</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content" style="padding-top: 0px;">
                <!-- begin:: Subheader -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader" style="">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">
                                <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>الصفحة الرئيسية
                            </h3>
                        </div>
                    </div>
                </div>

                <!--Begin::App-->
                <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                    <!--Begin:: App Aside Mobile Toggle-->
                    <button class="kt-app__aside-close" id="kt_user_profile_aside_close"><i class="la la-close"></i></button>
                    <!--Begin:: App Aside-->
                    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside" style="margin-right: 1%">
                        <!--begin:: Widgets/Applications/User/Profile4-->
                        <div class="kt-portlet kt-portlet--height-fluid-">
                            <div class="kt-portlet__body">
                                <!--begin::Widget -->
                                <div class="kt-widget kt-widget--user-profile-4">
                                    <div class="kt-widget__head">
                                        <div class="kt-widget__media">
                                            @php $image = optional(auth('craftsman')->user())->getProfileImage() @endphp
                                            <img class="kt-widget__img kt-hidden-" src="{{ asset('/storage/' . $image) }}" alt="image">
                                        </div>
                                        <div class="kt-widget__content">
                                            <div class="kt-widget__section">
                                                <a class="kt-widget__username">
                                                    {{ optional(auth('craftsman')->user())->name }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget__body">
                                        @php $id = optional(auth('craftsman')->user())->id @endphp
                                        <a href="{{ route('profile.show' , $id) }}" class="kt-widget__item kt-widget__item--active">الملف الشخصي</a>
                                        <a href="/current-locations/{{ optional(auth('craftsman')->user())->id }}" class="kt-widget__item">اماكن العمل الحالية</a>
                                        <a href="/location/{{ optional(auth('craftsman')->user())->id }}" class="kt-widget__item">اضافة مكان عمل</a>
                                        <a href="/current-crafts/{{ optional(auth('craftsman')->user())->id }}" class="kt-widget__item">الحرف الحالية</a>
                                        <a href="/add-new-craft/{{ optional(auth('craftsman')->user())->id }}" class="kt-widget__item">اضافة حرفة جديدة</a>
                                        <a href="{{ route('craftsman.password.request') }}" class="kt-widget__item">تغيير كلمة السر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                    <!-- begin:: Footer -->
                    <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                        <div class="kt-container kt-container--fluid ">
                            <div class="kt-footer__copyright">
                                2020&nbsp;&copy;&nbsp;<a href="" class="kt-link">{{ __('dashboard.copyright') }}</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>
<script src="/assets/js/pages/dashboard.js" type="text/javascript"></script>
<script src="/assets/js/pages/dashboard.js" type="text/javascript"></script>
<script src="/assets/js/pages/custom/user/profile.js" type="text/javascript"></script>

</body>

</html>
