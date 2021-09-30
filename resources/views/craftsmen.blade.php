<style>
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        padding: 10% 20%;
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(0, 0, 0, 0.2); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 10% auto; /* 15% from the top and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
        height: 100%;
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .stars {
        text-align: center;
        font-size: 40px;
        color: white;
        margin: 30px auto; /* 15% from the top and centered */
        width: 80%; /* Could be more or less, depending on screen size */
    }

    .addbutton {
        width: 24%;
        font-size: 100%;
        margin: 10px 36%; /* 15% from the top and centered */
    }

    .fa-star {
        color: orangered;
    }
</style>
@extends('layouts.welcome')
@section('content')

@if($data)
    <div class="inner" style="margin-top: 10%">
        <header class="special">
            <h2>كل الحرفيين المسجلين لدينا</h2>
        </header>

        <div class="highlights">
            @foreach($data as $craftsman)
                <div class="kt-portlet kt-portlet--height-fluid" style="width: 100%">
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-3">
                            <div class="kt-widget__top">
                                <div class="kt-widget__media kt-hidden-">
                                    <img src="/assets/media/users/100_13.jpg" alt="image">
                                </div>
                                <div
                                    class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                </div>
                                <div class="kt-widget__content">
                                    <div class="kt-widget__head">
                                        <a href="craftsman/{{$craftsman->id}}/show" class="kt-widget__username">
                                            {{$craftsman->name}}
                                        </a>
                                        <h1>

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
                                        </h1>
                                        <div class="kt-widget__action">
                                            <a href="{{ URL('/craftsman/'. $craftsman->id .'/show') }}"><button type="button" class="btn btn-label-success btn-sm">الاعمال والمنشورات</button></a>
                                            @if(auth('craftsman')->user())
                                            <form action="{{route('createMessage')}}" method="post" class="d-inline">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{$craftsman->id}}">
                                                <button type="submit" class="btn btn-label-success btn-sm btn-upper">دردشة</button>
                                            </form>
                                            @endif
                                            <button type="button" value="{{ $craftsman->id }}" class="btn btn-label-success btn-sm myBtn">اضافة تقييم
                                            </button>
                                        </div>
                                        <div class="modal modal-{{$craftsman->id}} myModal" data-key="" direction="rtl">
                                            <input id="activeCraftMan" type="hidden" value="0">
                                            <!-- Modal content -->
                                            <div class="modal-content small">
                                                <span class="close"
                                                        style="font-size: 35px; margin: 10px; border: 3px solid #ff2830;border-radius: 30px;width: 40px;text-align: center;color: red">&times;</span>
                                                <h1 style="color: red ; text-align: center ; margin-top: 11%"> ما
                                                    رأيك في هذا الحرفي؟ </h1>
                                                <div class="stars">
                                                    <span class="fa fa-star 0" data-index="1"></span>
                                                    <span class="fa fa-star 1" data-index="2"></span>
                                                    <span class="fa fa-star 2" data-index="3"></span>
                                                    <span class="fa fa-star 3" data-index="4"></span>
                                                    <span class="fa fa-star 4" data-index="5"></span>
                                                </div>
                                                <button class="saveRate" product_id="{{ $craftsman->id }}">ارسال</button>

                                            </div>
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
                                                <div class="progress-bar" role="progressbar" style="width: {{$avg*20}}%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
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
            @endforeach
        </div>
    </div>
@endif

<script>

    var rateIndex = -1;
    $(document).ready(function () {
        $(document).on('click', '.saveRate', function (e) {
            let id = $(this).attr('product_id');
            let stars = document.getElementsByClassName('fa-star');
            // alert(rateIndex);
            $.ajax({
                method: "POST",
                url: '{{ route('rate.store') }}',
                data_type: 'json',
                data: {id: id, rate: rateIndex},
                success: function (data) {
                    console.log(data);
                }, error: function () {
                    alert('error');
                }
            });
            location.reload();

        });
    });
    $(document).ready(function () {

        resetStarColor();
        $('.fa-star').on('click', function () {
            rateIndex = parseInt($(this).data('index'));
        });

        $('.fa-star').mouseover(function () {
            resetStarColor();
            var current = parseInt($(this).data('index'));
            for (var i = 0; i < current; i++) {
                var star = document.getElementsByClassName(i);
                for (let j = 0; j < star.length; j++) {
                    star[j].style.opacity = "1";
                }
            }
        });
        $('.fa-star').mouseleave(function () {
            resetStarColor();
            if(rateIndex != -1){
                for (var i = 0; i < rateIndex; i++) {
                    var star = document.getElementsByClassName(i);
                    for (let j = 0; j < star.length; j++) {
                        star[j].style.opacity = "1";
                    }
                }
            }
        });
    });

    function resetStarColor() {
        $('.fa-star').css('opacity', '0.2')
    }

    $('.myBtn').click(function () {
        let key = $(this).attr('value')
        console.log('fdksghdlfsgh ths is min')
        $('.modal-' + key).css('display', 'block', ' background-color', 'rgba(59,59,58,0.2)');
    });
    $('.close').click(function () {
        $('.myModal').css('display', 'none');
        resetStarColor();
    })
</script>
@endsection