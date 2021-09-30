@extends('craftsman.layouts.craftsman_layout')
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
    <div class="row " style="margin: 0;">
        <div class="col-md-10">
            <div class="kt-portlet">

                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 style="font-size: 22px ; color:orangered" class="kt-portlet__head-title">
                         تعديل الملف الشخصي
                        </h3>
                    </div>
                </div>

                <form class="kt-form" action="/update-profile/{{ optional(auth('craftsman')->user())->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-11 m-auto">
                            <div class="form-group row">
                                
                                <p class="form-text mt-5 mr-5">صورة الملف الشخصي</p>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-image"></i></span>
                                        </div>
                                        <input type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" autocomplete="image_path" required value="@if(!empty($profile)) {{ $profile->image_path }} @endif">
                                    </div>
                                    @error('image_path')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @else
                                        <span class="form-text text-muted">لن نشارك صورتك مع اي احد</span>
                                    @enderror
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="الاسم" aria-describedby="basic-addon1" autocomplete="first_name" required value="@if(!empty($profile)) {{ $profile->first_name }} @endif">
                                    </div>
                                    @error('first_name')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @else
                                        <span class="form-text text-muted">لن نشارك اسمك مع اي احد</span>
                                    @enderror
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="اسم العائلة" aria-describedby="basic-addon1" autocomplete="last_name" required value="@if(!empty($profile)) {{ $profile->last_name }} @endif">
                                    </div>
                                    @error('last_name')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @else
                                        <span class="form-text text-muted">لن نشارك اسم عائلتك مع اي احد</span>
                                    @enderror
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="رقم الهاتف" aria-describedby="basic-addon1" autocomplete="phone" required value="@if(!empty($profile)) {{ $profile->phone }} @endif">
                                    </div>
                                    @error('phone')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @else
                                        <span class="form-text text-muted">لن نشارك رقم هاتفك مع اي احد</span>
                                    @enderror
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-male"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('martial_status') is-invalid @enderror" name="martial_status" placeholder="الحالة الاجتماعية" aria-describedby="basic-addon1" autocomplete="martial_status" required value="@if(!empty($profile)) {{ $profile->martial_status }} @endif">
                                    </div>
                                    @error('martial_status')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @else
                                        <span class="form-text text-muted">لن نشارك حالتك مع اي احد</span>
                                    @enderror
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-link"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" placeholder="رابط وسيلة تواصل" aria-describedby="basic-addon1" autocomplete="contact" required value="@if(!empty($profile)) {{ $profile->contact }} @endif">
                                        <input style="display: none" name="craftsman_id" value="{{ optional(auth('craftsman')->user())->id }}">
                                    </div>
                                    @error('contact')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @else
                                        <span class="form-text text-muted">لن نشارك رابطك مع اي احد</span>
                                    @enderror
                                </div>

                                <div class="kt-portlet__body col-12" style="padding: 2px 5px 25px 5px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="la la-book"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="اوصف نفسط بفقرة" aria-describedby="basic-addon1" autocomplete="description" required value="@if(!empty($profile)) {{ $profile->description }} @endif">
                                    </div>
                                    @error('description')
                                        <span class="form-text text-danger">{{ $message }}</span>
                                    @else
                                        <span class="form-text text-muted">لن نشارك وصفك مع اي احد</span>
                                    @enderror
                                </div>
                                        
                            </div>
                        </div>

                        <div class="kt-portlet__foot" style="padding: 5px">
                            <div class="kt-form__actions" style="padding: 0 25px">
                                <button style="width: 90px; font-size: 18px; background-color: orangered;" type="submit" class="btn btn-danger">تحديث</button>
                                <a href="{{ URL('/craftsman') }}" style="width: 90px; font-size: 18px; color: orangered;" type="button" class="btn btn-secondary">الغاء</a>
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