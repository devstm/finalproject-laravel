@extends('layouts.theme')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
            Session::forget('success');
        @endphp
    </div>
@endif
@foreach($data as $report)
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__body">
                    <div class="kt-widget kt-widget--user-profile-3">
                        <div class="kt-widget__top">
                            <div class="kt-widget__content">
                                <div class="kt-widget__info">
                                    <div class="kt-widget__desc">

                                        <div class="kt-portlet">

                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title">
                                                        {{ $report->subject }}
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="kt-portlet__body">
                                                <div class="form-group form-group-last">
                                                    <div class="alert alert-secondary" role="alert">
                                                        <div class="alert-text">
                                                            {{ $report->content }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions">
                                                    <form method="POST" action="{{ route('reports.destroy', $report->id) }}" style="display:inline;">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger text-white">{{ __('reports.done') }}</button></form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection