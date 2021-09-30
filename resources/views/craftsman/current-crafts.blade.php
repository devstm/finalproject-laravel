@extends('craftsman.layouts.craftsman_layout')
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        @if(session()->has('message'))
            <div class="col-10 alert alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row" style="margin: 0;">
            <div class="col-md-10">
                <div class="kt-portlet">

                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 style="font-size: 22px ; color:orangered" class="kt-portlet__head-title">
                                 الحرف الحالية
                            </h3>
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">اسم الحرفة</th>
                            <th scope="col">وصف الحرفة</th>
                            <th scope="col">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $index = 1; @endphp
                        @foreach($data as $craft)
                            <tr>
                                <th>{{ $index }}</th>
                                <td>{{ $craft->name }}</td>
                                <td>{{ $craft->describe }}</td>
                                <td>
                                    <form action="/crafts/{{ $craft->id }}/delete/" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">حذف</button>
                                    </form>
                                </td>
                            </tr>
                            @php $index += 1; @endphp
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

@endsection
