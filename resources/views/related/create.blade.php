@extends('craftsman.layouts.craftsman_layout')
@section('content')

    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row " style="margin: 0;">
            <div class="col-md-10">
                <div class="kt-portlet">

                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 style="font-size: 22px ; color:orangered" class="kt-portlet__head-title">
                                اضافة حرفة جديدة
                            </h3>
                        </div>
                    </div>

                    <form class="kt-form kt-form--label-right" action="{{ URL('/related-crafts/' . optional(auth('craftsman')->user())->id)}}" method="POST">

                        {{ csrf_field() }}
                        <div class="row" style="margin-top: 25px">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="col-12">
                                        <select class="form-control @error('craft_id') is-invalid @enderror" data-dependent name="craft_id" id="city" required>
                                            <option>إختر الحرفة</option>
                                            @foreach($data as $craft)
                                                <option value="{{ $craft->id }}">{{ $craft->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('craft_id')
                                            <span class="text-danger text-right">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div style="display: none">
                                <div class="col-10">
                                    <input class="form-control" type="text" name="craftsmanId" value="{{optional(auth('craftsman')->user())->id}}" id="street">
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="col-12 d-inline">
                                        <button type="submit" class="btn btn-info" style="display:inline;">اضافة</button>
                                        <a href="{{ URL('/current-crafts/' . auth('craftsman')->user()->id) }}" type="button" class="btn btn-secondary d-inline">الغاء</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

@endsection
