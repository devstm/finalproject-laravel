@extends('craftsman.layouts.craftsman_layout')
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
    <div class="row " style="margin: 0;">
        <div class="col-md-10">
            <div class="kt-portlet">

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 style="font-size: 22px ; color:orangered" class="kt-portlet__head-title">
                            إضافة منشور جديد
                        </h3>
                    </div>
                </div>

                <form class="kt-form" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="kt-portlet__body" style="padding: 5px">
                        <div class="form-group" style="margin-bottom: 0">
                            <input class="form-control" type="text" name="title" placeholder="عنوان المنشور" id="title" autocomplete="title" required>
                        </div>
                    </div>
                    <div class="kt-portlet__body" style="padding: 5px">
                        <div class="form-group" style="margin-bottom: 0">
                            <textarea name="body" class="form-control" rows="3" placeholder="في ماذا تفكر {{ auth('craftsman')->user()->name }}" autocomplete="body" required></textarea>
                        </div>
                    </div>
                    <div class="kt-portlet__body" style="padding: 5px">
                        <div class="form-group" style="margin-bottom: 0">
                            <input class="form-control" type="file" name="cover_image" id="cover_image">
                        </div>
                    </div>
                    <div class="kt-portlet__foot" style="padding: 5px">
                        <div class="kt-form__actions" style="padding: 0 25px">
                            <button style="width: 90px; font-size: 18px; background-color: orangered;" type="submit" class="btn btn-danger">نشر</button>
                            <button style="width: 90px; font-size: 18px; color: orangered;" type="reset" class="btn btn-secondary">تجاهل</button>
                        </div>
                    </div>
                </form>
                
            </div>

            @foreach($posts as $post )
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 style="font-size: 22px ; color:orangered" class="kt-portlet__head-title">
                            {{ $post->getCraftsmanName() }}
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <div class="kt-portlet__body" style="padding: 5px ; text-align: center">
                @if($post->cover_image != 'noimage.jpg')
                    <img src="{{ asset('/storage/cover_images/' . $post->cover_image) }}" style="height:100% ; width:100%;">
                @endif
                    <h2 style="color:black; margin-top:20px;">{{ $post->title }}</h2>
                    <p style="color: black ; font-size: 20px ; alignment: right; margin: 15px">{{ $post->body }}</p>
                </div>
                <div class="kt-portlet__foot" style="padding: 5px;">
                    <div class="kt-form__actions" style="padding: 0 25px;">
                        <button style="width: 33% ; font-size: 18px ; background-color: orangered" type="submit" class="btn btn-danger"><i class="flaticon-like"></i>أعجبني</button>
                        <button style="width: 32.2% ; font-size: 18px ; color: orangered" type="reset" class="btn btn-secondary"><i class="flaticon-comment"></i>تعليق</button>
                        <button style="width: 33% ; font-size: 18px ; color: orangered" type="reset" class="btn btn-secondary"><i style="color: red" class="flaticon-share"></i>مشاركة</button>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>

</div>
</div>
@endsection