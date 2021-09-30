@extends('layouts.theme')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        {{ __('craft.edit') }}
                    </h3>
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
            <form class="kt-form kt-form--label-right" action="/crafts/{{ $craft->id }}" method="post">
                {{ csrf_field() }}
                @method('put')
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label"> {{ __('craft.name') }}:</label>
                        <div class="col-10">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ $craft->name }}" placeholder="اسم الحرفة" id="example-text-input" autofocus autocomplete>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="describe" class="col-2 col-form-label"> {{ __('craft.describe') }}</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name="describe" value="{{ $craft->describe }}" placeholder="وصف الحرفة" id="describe" autocomplete>
                            @error('describe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="describe" class="col-2 col-form-label"> {{__('craft.craft')}}</label>
                        <div class="col-10">
                            <select class="form-control" name="category_id" id="exampleSelect1">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($category->id == $craft->category_id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
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
                                <button type="submit" class="btn btn-success"> {{ __('craft.edit') }}</button>
                                <a href="{{route('crafts.index')}}">
                                    <button type="button" class="btn btn-secondary"> {{ __('craft.cancel') }}</button>
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