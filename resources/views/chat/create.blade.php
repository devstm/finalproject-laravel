@extends('craftsman.layouts.craftsman_layout')
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
    <div class="row " style="margin: 0;">
        <div class="col-md-10">
            <div class="kt-portlet">

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 style="font-size: 22px ; color:orangered" class="kt-portlet__head-title">
                        ارسال رسالة الى:{{ $receiver->name }}
                        </h3>
                    </div>
                </div>

                <form class="kt-form" action="{{ route('message.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="kt-portlet__body" style="padding: 5px">
                        <div class="form-group" style="margin-bottom: 0">
                            <input type="hidden" name="receiver_id" value="{{ $receiver->id }}">
                            <input type="hidden" name="sender_id" value="{{ optional(auth('craftsman')->user())->id }}">
                            <textarea name="content" class="form-control" rows="3" placeholder="اكتب شئ ل: {{ $receiver->name }}" autocomplete="content" required></textarea>
                        </div>
                    </div>
                    <div class="kt-portlet__foot" style="padding: 5px">
                        <div class="kt-form__actions" style="padding: 0 25px">
                            <button style="width: 90px; font-size: 18px; background-color: orangered;" type="submit" class="btn btn-danger">ارسال</button>
                            <a href="{{ URL('/') }}" style="width: 90px; font-size: 18px; color: orangered;" type="button" class="btn btn-secondary">تجاهل</a>
                        </div>
                    </div>
                </form>
                
            </div>

        </div>
    </div>
</div>

</div>
</div>
@endsection