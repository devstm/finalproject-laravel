@extends('layouts.welcome')
@section('content')
<section id="main" class="wrapper" dir="rtl">
    <div class="inner">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        <div class="content" >
            <div class="row" >
                <h3>{{ __('reports.new') }}</h3>
                <!-- Form -->
                <form method="post" action="{{ route('reports.store') }}" >
                    @csrf
                    <div class="row gtr-uniform">
                        <div class="form-group col-12">
                            <input type="text" name="user_id" id="user_id" value="1" style="display: none"/>
                            <input class="form-control @error('subject') is-invalid @enderror" type="text" name="subject" id="subject" value="" placeholder="{{ __('reports.subject') }}" autofocus autocomplete/>
                            @error('subject')
                                <span class="text-danger text-right">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="" placeholder="{{ __('reports.email') }}" autocomplete>
                            @error('email')
                                <span class="text-danger text-right">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Break -->
                        <div class="form-group col-12">
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" placeholder="{{ __('reports.content') }}" rows="6" autocomplete></textarea>
                            @error('content')
                                <span class="text-danger text-right">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="{{ __('reports.send') }}" class="primary"/></li>
                                <li><input type="reset" value="{{ __('reports.clear') }}"/></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection