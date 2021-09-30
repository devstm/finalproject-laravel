@extends('craftsman.layouts.craftsman_layout')
@section('content')

    <div class="modal-content" style="max-width: 1000px ;margin-right: 30px ">
        <div class="kt-portlet__body kt-portlet__body--fit" style="text-align: center; background-color: #ff2800">
            <div class="kt-widget17">
                <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides"
                     style="background-color: #ff2800">
                    <div class="kt-widget17__chart" style="height:120px">

                    </div>
                </div>
                <div class="kt-widget17__stats">
                    <div class="kt-widget17__items">
                         <div class="kt-widget17__item">

                                <span class="kt-widget17__icon" >
									<svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"
                                                             height="30px" viewBox="0 0 24 24" version="1.1"
                                                             class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M18.1444251,10.8396467 L12,14.1481833 L5.85557487,10.8396467 C5.4908718,10.6432681 5.03602525,10.7797221 4.83964668,11.1444251 C4.6432681,11.5091282 4.77972206,11.9639747 5.14442513,12.1603533 L11.6444251,15.6603533 C11.8664074,15.7798822 12.1335926,15.7798822 12.3555749,15.6603533 L18.8555749,12.1603533 C19.2202779,11.9639747 19.3567319,11.5091282 19.1603533,11.1444251 C18.9639747,10.7797221 18.5091282,10.6432681 18.1444251,10.8396467 Z"
            fill="#000000"/>
        <path
            d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"
            transform="translate(11.959697, 3.661508) rotate(-270.000000) translate(-11.959697, -3.661508) "/>
    </g>
</svg> </span>
                               <a href="{{route('inbox')}}"> <span class="kt-widget17__subtitle" style="font-size: 30px">
																الرسائل الوارده
															</span></a>

                            </div>
                       <div class="kt-widget17__item">
															<span class="kt-widget17__icon">
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M18.1444251,10.8396467 L12,14.1481833 L5.85557487,10.8396467 C5.4908718,10.6432681 5.03602525,10.7797221 4.83964668,11.1444251 C4.6432681,11.5091282 4.77972206,11.9639747 5.14442513,12.1603533 L11.6444251,15.6603533 C11.8664074,15.7798822 12.1335926,15.7798822 12.3555749,15.6603533 L18.8555749,12.1603533 C19.2202779,11.9639747 19.3567319,11.5091282 19.1603533,11.1444251 C18.9639747,10.7797221 18.5091282,10.6432681 18.1444251,10.8396467 Z"
            fill="#000000"/>
        <path
            d="M11.1288761,0.733697713 L11.1288761,2.69017121 L9.12120481,2.69017121 C8.84506244,2.69017121 8.62120481,2.91402884 8.62120481,3.19017121 L8.62120481,4.21346991 C8.62120481,4.48961229 8.84506244,4.71346991 9.12120481,4.71346991 L11.1288761,4.71346991 L11.1288761,6.66994341 C11.1288761,6.94608579 11.3527337,7.16994341 11.6288761,7.16994341 C11.7471877,7.16994341 11.8616664,7.12798964 11.951961,7.05154023 L15.4576222,4.08341738 C15.6683723,3.90498251 15.6945689,3.58948575 15.5161341,3.37873564 C15.4982803,3.35764848 15.4787093,3.33807751 15.4576222,3.32022374 L11.951961,0.352100892 C11.7412109,0.173666017 11.4257142,0.199862688 11.2472793,0.410612793 C11.1708299,0.500907473 11.1288761,0.615386087 11.1288761,0.733697713 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"
            transform="translate(11.959697, 3.661508) rotate(-90.000000) translate(-11.959697, -3.661508) "/>
    </g>
</svg> </span>
                            <span class="kt-widget17__subtitle" style="font-size: 30px">
																الرسائل المرسله
															</span>

                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-chat">
            <div class="kt-portlet kt-portlet--last">
                <div class="kt-portlet__body">
                    <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="225">
                        <div class="kt-chat__messages kt-chat__messages--solid">
                            @foreach($messages as $message )
                                <div class="kt-chat__message kt-chat__message--success">
                                    <div class="kt-chat__user">
												<span class="kt-media kt-media--circle kt-media--sm">
													<img src="assets/media/users/100_12.jpg" alt="image">
												</span>
                                        <span class="kt-chat__datetime" style="font-size: 30px">المرسل:</span>
                                        <a class="kt-chat__username" style="font-size: 30px"><span>{{optional(auth('craftsman')->user())->name}} </span></a>
                                        <span class="kt-chat__datetime" style="font-size: 30px">المستقبل:{{$message->getReceiverName()}}</span>
                                        <a href="#" class="kt-chat__username" style="font-size: 30px">
                                        </a>
                                        <br>
                                        <span class="kt-chat__datetime" style="font-size: 30px"> </span>
                                    </div>
                                    <div class="kt-chat__text" style="font-size: 30px">
                                        {{ $message->content }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection