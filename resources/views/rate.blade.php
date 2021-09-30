@extends('layouts.theme')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        @foreach($rate as $key => $value)
        <div class="row">
            <div class="col-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-2">
                            <div class="kt-widget__body">
                                <div class="kt-widget__item">
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">{{ $key }}</span>
                                        <a href="#" class="kt-widget__data">{{ $value }}%</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
