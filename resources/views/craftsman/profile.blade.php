@extends('layouts.craftsman')
@section('content')
@foreach($page as $data)
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid" style="padding: 0;" >
        <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first" style="width: 77% ;">
            <!--end: Form Wizard Nav -->
            <div class="kt-portlet">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid">
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                            <!--begin: Form Wizard Form-->
                            <form class="kt-form" id="kt_user_add_form">

                                <!--begin: Form Wizard Step 1-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">User's Profile Details:</div>
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="kt-section__body">
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="kt-avatar kt-avatar--outline" id="kt_user_add_avatar">
                                                                    <div class="kt-avatar__holder" style="background-image: url(/assets/media/users/300_10.jpg)"></div>
                                                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Change avatar">
                                                                        <i class="fa fa-pen"></i>
                                                                        <input type="file" name="kt_user_add_user_avatar">
                                                                    </label>
                                                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel avatar">
																							<i class="fa fa-times"></i>
																						</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control" type="text" value="{{$data->first_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control" type="text" value="{{$data->last_name}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                                    <input type="text" class="form-control" value="{{optional(auth('craftsman')->user())->phone}}" placeholder="Phone" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 1-->
                                <!--begin: Form Wizard Step 3-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                    <div class="kt-heading kt-heading--md">Setup Your Address</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <input type="text" class="form-control" name="address1" placeholder="Address Line 1" value="Address Line 1">
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" name="address2" placeholder="Address Line 2" value="Address Line 2">
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label>Postcode</label>
                                                        <input type="text" class="form-control" name="postcode" placeholder="Postcode" value="2000">
                                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" class="form-control" name="state" placeholder="City" value="London">
                                                        <span class="form-text text-muted">Please enter your City.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input type="text" class="form-control" name="state" placeholder="State" value="VIC">
                                                        <span class="form-text text-muted">Please enter your Postcode.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 3-->

                                <!--begin: Form Actions -->
                                <div class="kt-form__actions">
                                    <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                        Previous
                                    </div>
                                    <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                        Submit
                                    </div>
                                    <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                        Next Step
                                    </div>
                                </div>

                                <!--end: Form Actions -->
                            </form>

                            <!--end: Form Wizard Form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

    <!-- end:: Content -->
    @endsection
