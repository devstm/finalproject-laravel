@extends('craftsman.layouts.craftsman_layout')
@section('content')

<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="row " style="margin: 0;">
        <div class="col-md-10">
            <div class="kt-portlet">

				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h3 style="font-size: 22px ; color:orangered" class="kt-portlet__head-title">
							اضافة مكان عمل جديد
						</h3>
					</div>
				</div>

                <form class="kt-form kt-form--label-right" action="{{ URL('/location/' . $data[2]->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row" style="margin-top: 25px">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <div class="col-12">
                                <select class="form-control @error('city_id') is-invalid @enderror" data-dependent name="city_id" id="city" required>
                                    <option>إختر المدينة</option>
                                    @foreach($data[0] as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                    <span class="text-danger text-right">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <div class="col-12">
                                <select class="form-control dynamic @error('neighborhood_id') is-invalid @enderror" name="neighborhood_id" id="net" required>
                                    <option>إختر الحي السكني</option>
                                    @foreach($data[1] as $neighborhood)
                                        <option value="{{ $neighborhood->id }}">{{ $neighborhood->name }}</option>
                                    @endforeach
                                </select>
                                @error('neighborhood_id')
                                    <span class="text-danger text-right">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control @error('street') is-invalid @enderror" type="text" name="street" placeholder="اسم الشارع" id="street" required>
                                @error('street')
                                    <span class="text-danger text-right">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div style="display: none">
                        <div class="col-10">
                            <input class="form-control" type="text" name="craftsmanId" value="{{ $data[2]->id }}" id="street">
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="col-12 d-inline">
                                <button type="submit" class="btn btn-info" style="display:inline;">اضافة</button>
                                <a href="{{ URL('/current-locations/' . auth('craftsman')->user()->id) }}" type="button" class="btn btn-secondary d-inline">الغاء</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>

                <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

                <script type="text/javascript">
                    $("#city").change(function () {
                        $.ajax({
                            url: "{{ url('/location/get') }}?country_id=" + $(this).val(),
                            method: 'GET',
                            success: function (data) {
                                $('#net').html(data.html);
                            }
                        });
                    });
                </script>

            </div>
        </div>
    </div>
</div>

</div>
</div>

@endsection
