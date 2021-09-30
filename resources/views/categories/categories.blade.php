@extends('layouts.theme')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__head" >
                <div class="kt-portlet__head-label" >
                    <h3 class="kt-portlet__head-title">
                        {{ __('categories.allCategories') }}
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body" >
                <a href="{{  url('category/create')}}" style="margin-bottom: 30px">
                    <button type="button" class="btn btn-primary btn-lg btn-block"> {{ __('categories.new') }}</button>
                </a>
                <!--begin::Section-->
                <div class="kt-section">
                    <div class="kt-section__content">
                        <div class="table-responsive">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{session()->get('message')}}
                                </div>
                            @endif

                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">{{ __('categories.id') }}</th>
                                        <th scope="col">{{ __('categories.name') }}</th>
                                        <th scope="col">{{ __('categories.describe') }}</th>
                                        <th scope="col">{{ __('categories.edit') }}</th>
                                        <th scope="col">{{ __('categories.delete') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $index => $val)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>{{$val->describe}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info"><a
                                                    class="text-white" href="{{ route("category.edit",$val->id) }}">{{__('categories.edit')}}</a>
                                            </button>
                                        </td>
                                        <td>
                                            <form action="{{ route('category.destroy',$val->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">{{ __('categories.delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection