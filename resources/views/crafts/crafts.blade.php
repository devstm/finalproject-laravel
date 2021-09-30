@extends('layouts.theme')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        {{ __('craft.craft') }}
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <a href="{{  route('crafts.create')}}" style="margin-bottom:30px">
                    <button type="button" class="btn btn-primary btn-lg btn-block"> {{ __('craft.new')}}</button>
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
                                    <th scope="col">{{ __('craft.id') }}</th>
                                    <th scope="col">{{ __('craft.name') }}</th>
                                    <th scope="col">{{ __('craft.describe') }}</th>
                                    <th scope="col">{{ __('craft.edit') }}</th>
                                    <th scope="col">{{ __('craft.delete') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $index => $crafts)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $crafts->name }}</td>
                                        <td>{{ $crafts->describe }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info"><a class="text-white" href="{{ route("crafts.edit",$crafts->id) }}">{{__('craft.edit')}}</a>
                                            </button>
                                        </td>
                                        <td>
                                            <form action="{{ route('crafts.destroy', $crafts) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">  {{ __('craft.delete') }}</button>
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