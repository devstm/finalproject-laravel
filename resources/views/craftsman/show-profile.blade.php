@extends('craftsman.layouts.craftsman_layout')
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
    <div class="row " style="margin: 0;">
        <div class="col-md-10">
            <div class="kt-portlet">

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 style="font-size: 22px ; color:orangered" class="kt-portlet__head-title">
                        الملف الشخصي
                        </h3>
                    </div>
                </div>

                <form class="kt-form">
                    @csrf
                    <div class="row">
                        <div class="col-11 m-auto">
                            <div class="form-group row">
                                
                                <p class="form-text mt-5 mr-5">صورة الملف الشخصي</p>
                                @php $image = optional(auth('craftsman')->user())->getProfileImage() @endphp
                                <img class="mt-2 mb-2" src="@if(!empty($profile)) {{ asset('/storage/' . $profile->image_path) }} @else {{ asset('/storage/' . $image) }} @endif" style="height:15% ; width:15%; border-radius: 50%;">

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="first_name" placeholder="الاسم" aria-describedby="basic-addon1" autocomplete="first_name" disabled value="@if(!empty($profile)) {{ $profile->first_name }} @endif">
                                    </div>
                                    <span class="form-text text-muted">لن نشارك اسمك مع اي احد</span>
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="last_name" placeholder="اسم العائلة" aria-describedby="basic-addon1" autocomplete="last_name" disabled value="@if(!empty($profile)) {{ $profile->last_name }} @endif">
                                    </div>
                                    <span class="form-text text-muted">لن نشارك اسم عائلتك مع اي احد</span>
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="phone" placeholder="رقم الهاتف" aria-describedby="basic-addon1" autocomplete="phone" disabled value="@if(!empty($profile)) {{ $profile->phone }} @endif">
                                    </div>
                                    <span class="form-text text-muted">لن نشارك رقم هاتفك مع اي احد</span>
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-male"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="martial_status" placeholder="الحالة الاجتماعية" aria-describedby="basic-addon1" autocomplete="martial_status" disabled value="@if(!empty($profile)) {{ $profile->martial_status }} @endif">
                                    </div>
                                    <span class="form-text text-muted">لن نشارك حالتك مع اي احد</span>
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-link"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="contact" placeholder="رابط وسيلة تواصل" aria-describedby="basic-addon1" autocomplete="contact" disabled value="@if(!empty($profile)) {{ $profile->contact }} @endif">
                                        <input style="display: none" name="craftsman_id" value="{{ optional(auth('craftsman')->user())->id }}">
                                    </div>
                                    <span class="form-text text-muted">لن نشارك رابطك مع اي احد</span>
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px 25px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-book"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="description" placeholder="اوصف نفسط بفقرة" aria-describedby="basic-addon1" autocomplete="description" disabled value="@if(!empty($profile)) {{ $profile->description }} @endif">
                                    </div>
                                    <span class="form-text text-muted">لن نشارك وصفك مع اي احد</span>
                                </div>
                                        
                            </div>
                        </div>

                        <div class="kt-portlet__foot" style="padding: 5px">
                            <div class="kt-form__actions" style="padding: 0 25px">
                                <a href="{{ route('profile.edit' , optional(auth('craftsman')->user())->id) }}" style="width: 90px; font-size: 18px; background-color: orangered;" type="button" class="btn btn-danger">تعديل</a>
                                <a href="/craftsman" style="width: 90px; font-size: 18px; color: orangered;" type="button" class="btn btn-secondary">الغاء</a>
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