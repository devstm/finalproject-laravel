@extends('layouts.theme')
@section('content')
@foreach($craftsmen as $craftsman)
@if($craftsman->Rates)
    <?php
        $count = -1;
        $sum= 0;
        $rate=0;
        $avg=0;
    ?>
    @foreach($craftsman->Rates as $rate)
        <?php
            $sum=$sum+$rate->rate_value;
            $count++;
            $avg=$sum/($count+1);
        ?>
    @endforeach
@else
@endif
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__body">
                <div class="kt-widget kt-widget--user-profile-3">
                    <div class="kt-widget__top">

                        <div class="kt-widget__media kt-hidden-">
                            <img src="/assets/media/users/100_13.jpg" alt="image">
                        </div>

                        <div class="kt-widget__content">
                            <div class="kt-widget__head">
                                <a href="#" class="kt-widget__username">{{ $craftsman->name }}</a>
                                <div class="kt-widget__action">
                                    <form action="{{ route('craftsman.delete', $craftsman) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  href="/craftsman/{{$craftsman->id}}/delete" class="btn btn-danger btn-sm">{{ __('craftsman.delete') }}</button>
                                    </form>
                                </div>
                            </div>
                            <div class="kt-widget__subhead">
                                <a href="mailto:{{ $craftsman->email }}"><i class="flaticon2-new-email"></i>&nbsp;{{ $craftsman->email }}</a>
                                <a href="tel:{{ $craftsman->phone }}"><i class="flaticon2-calendar-3"></i>&nbsp;{{ $craftsman->phone }}</a>
                                <a href="#"><i class="flaticon2-placeholder"></i>&nbsp;{{ $craftsman->address }}</a>
                            </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__desc">
                                أميز بين ثلاثة أهداف نصية رئيسية يمكن أن تكون مجرد إعلام الناس.
                                    <br>والثانية يمكن أن تقنع الناس ، فأنت تريد من الناس الاصرار على الهدف.
                                </div>
                                <div class="kt-widget__progress">
                                    <div class="kt-widget__text">{{ __('craftsman.rate') }}</div>
                                    <div class="progress" style="height: 5px;width: 100%;">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $avg*20 }}%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="kt-widget__stats">
                                        {{ number_format((float)$avg*20, 2, '.', '') }}%
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