@extends('layouts.theme')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h1 class="kt-portlet__head-title">
                        {{ __('categories.editAllCategories') }}
                    </h1>
                </div>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            <form class="kt-form kt-form--label-right" action="/category/{{ $category->id }}" method="POST">
                @csrf
                @method('put')
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label"> {{__('categories.name')}}:</label>
                        <div class="col-10">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ $category->name }}" placeholder="اسم الفئة" id="example-text-input" autocomplete>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="describe" class="col-2 col-form-label"> {{__('categories.describe')}}:</label>
                        <div class="col-10">
                            <input class="form-control @error('describe') is-invalid @enderror" type="text" name="describe" value="{{ $category->describe }}" placeholder="وصف القئة" id="describe" autocomplete>
                            @error('describe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-2">
                            </div>
                            <div class="col-10">
                                <button type="submit" class="btn btn-success"> {{__('categories.edit')}}</button>
                                <a href="{{ route('category.index') }}">
                                    <button type="button" class="btn btn-secondary"> {{__('categories.cancel')}}</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection