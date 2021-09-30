@extends('craftsman.layouts.craftsman_layout')
@section('content')

    <div class="modal-content" style="max-width: 1500px ;margin-right: 50px ">
        <div class="kt-portlet__body kt-portlet__body--fit" style="text-align: center; background-color: #ff2800">
            <div class="kt-widget17">
                <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides"
                     style="background-color: #ff2800">
                    <h1 style="padding-top: 50px; color: white" > ارسال إلى :{{$receiver->name}}</h1>
                    <div class="kt-widget17__chart" style="max-height:120px">
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-chat">
            <div class="kt-portlet kt-portlet--last">
                <div class="kt-portlet__body">
                    <div class="kt-portlet__foot">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif
                        <div class="kt-chat__input">
                            <form class="kt-form kt-form--label-right" action="{{route('message.store')}}" method="post">
                                @method('POST')
                                {{ csrf_field() }}
                                <input type="hidden" name="receiver_id" value="{{$receiver->id}}">
                                <input type="hidden" name="sender_id" value="{{optional(auth('craftsman')->user())->id}}">
                            <div class="kt-chat__editor">
                                <textarea placeholder="Type here..." name="content" style="height: 120px"></textarea>
                            </div>
                            <div class="kt-chat__toolbar">

                                <div class="kt_chat__actions">
                                    <button type="submit" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">
                                        ارسال
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection