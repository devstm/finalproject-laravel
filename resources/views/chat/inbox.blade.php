@extends('craftsman.layouts.craftsman_layout')
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
    <div class="row " style="margin: 0;">
        <div class="col-md-10">
            <div class="kt-portlet">

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label m-auto">
						<a href="{{ route('inbox') }}" type="button" class="btn btn-warning">الرسائل الورادة</a>
						<a href="{{ route('message.index') }}" type="button" class="btn btn-success">الرسائل المرسلة</a>
                    </div>
                </div>

                @php $i = 0; @endphp
                @if($messages)
                @foreach($messages as $message )
                @php $i = 1; @endphp
                <div class="container pb-4">
                    <div class="container shadow rounded">
                        <div class="row">
                            <div class="col-12">
                                <span class="kt-media kt-media--circle kt-media--sm">
                                    <img src="assets/media/users/100_12.jpg" alt="image">
                                </span>
                                <span class="kt-chat__datetime" style="font-size: 26px">من:{{ optional(auth('craftsman')->user())->name }}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="kt-chat__datetime" style="font-size: 26px">الى:{{ $message->getSenderName() }}</span>
                                <br>
                                <span class="kt-chat__datetime" style="font-size: 26px">&nbsp;&nbsp;&nbsp;&nbsp;النص:{{ $message->content }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @if($i == 0)
                <div class="container pb-4">
                    <div class="container shadow rounded">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="m-auto">لايوجد رسائل واردة</h2>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>

        </div>
    </div>
</div>

</div>
</div>
@endsection