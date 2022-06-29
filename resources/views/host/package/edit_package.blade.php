<!-- <link rel="stylesheet" href="{{ asset('css/event2.css') }}"> -->

<!-- <link rel="stylesheet" href="{{ asset('css/addpackage.css') }}"> -->
<!-- <script type="text/javascript" src="{{ asset('js/bussiness2.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{ asset('js/addPackage.js') }}"></script> -->
<style>
    .dum
    {
        color: transparent;
    }
    .touch-fallback, .has-preview {

    height: 106px !important;
    width: 200px !important;
    }

</style>
<div class="closeBtn text-end pt-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="container-fluid" id="grad1">
                    <div class="row justify-content-center mt-0">
                        <div class="main-column col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2 ">
                            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                <h2><strong>Edit Package</strong></h2>
                                <!-- <p>Fill all form field to go to next step</p> -->
                                <div class="row">
                                    <div class="col-md-12 mx-0">
                                        <form id="msform2" method="post" class="editPackageForm" action="{{ url('/user/update_package') }}"
                                                enctype="multipart/form-data">
                                            <!-- progressbar -->
                                            @csrf
                                            <ul class="progressbar" id="editPackageForm" style="padding-left: 124px;">
                                                <li class="active" id="account"><strong>Welcome</strong>
                                                </li>
                                                <li id="personal"><strong>Offer</strong></li>
                                                <li id="payment"><strong>Upload Menu</strong></li>
                                                <li id="confirm"><strong>Availability</strong></li>
                                                <!-- <li id="finish"><strong>Finish</strong></li> -->
                                            </ul>
                                            <!-- fieldsets -->
                                            <fieldset class="active">
                                                <div class="form-card">
                                                    <h2 class="fs-title">Your Business</h2>
                                                    <select class="list-dt" id="selectBNS" name="restaurant">

                                                        @foreach($rests as $rest)

                                                            <option value="{{$rest->id}}" {{ $pkg->restaurant_id == $rest->id ? "selected" : "" }}>{{$rest->business}}</option>

                                                        @endforeach

                                                    </select>

                                                </div>
                                                <input type="button" name="next" class="next action-button"
                                                    value="Next Step" />
                                            </fieldset>
                                            <fieldset class="">
                                                <div class="form-card">
                                                    <h2 class="fs-title">Package Name</h2>

                                                    <input type="text" name="package" placeholder="Package Name"  value="{{ $pkg->pkg_name }}" required require/>
                                                    <div class="mb-4">
                                                        <label for="allow"
                                                            class="label-text pb-2 font-17 fontw500">Allowed
                                                            Member</label>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="quantity border rounded-2 px-2">
                                                                <span class="quantity__minus">-</span>
                                                                <input name="quantity" type="number" value="{{$pkg->mem_allow}}"
                                                                    class="quantity__input mb-0 border-0" value="1">
                                                                <span class="quantity__plus">+</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="price-radio">
                                                        <label for="allow"
                                                            class="label-text font-17 fontw500">Price</label>
                                                        <div class="d-flex">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" {{ $pkg->price_for == "Person" ? "checked" : "" }}
                                                                    name="person" id="flexRadioDefault1" value="Person">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Person
                                                                </label>
                                                            </div>
                                                            <div class="form-check ms-3">

                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Menu
                                                                </label>
                                                                <input class="form-check-input" type="radio" {{ $pkg->price_for == "Menu" ? "checked" : "" }}
                                                                    name="person" id="flexRadioDefault2" value="Menu"
                                                                    >
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <input type="number" name="amount" placeholder="Enter package amount" value="{{ $pkg->amount }}"  required require/>
                                                    </div>
                                                </div>
                                                <input type="button" name="previous"
                                                    class="previous action-button-previous" value="Previous" />
                                                <input type="button" name="next" class="next action-button"
                                                    value="Next Step" />
                                            </fieldset>
                                            <fieldset class="custom_pre_model">
                                                <div class="form-card">
                                                    <h2 class="fs-title">Upload Menu</h2>
                                                    <div class="dropi_parent row ">
                                                        <input name="image[]" type="file" class="dropify2n col-6"
                                                            data-width="60" data-height="40" value="{{ $pkg->getimage() }}" />
                                                            <i class="fa fa-plus add_btnpkg col-3"></i>
                                                    </div>
                                                </div>
                                                <input type="button" name="previous"
                                                    class=" previous action-button-previous" value="Previous" />
                                                <input type="button" name="next" class="next action-button"
                                                    value="Next Step" />
                                            </fieldset>
                                            <fieldset class="custom_pre_model2">
                                                <div class="availability"  style="overflow-y: scroll; height: 460px;">
                                                    <div class="">
                                                        <div class="text">
                                                            <h2>Openning And Closing Hours</h2>
                                                            <p>Please provide your restaurant opening and closing hours</p>
                                                        </div>
                                                        <div class="hoursmaindiv">
                                                            <input type="hidden" value="0" name="repeatt" class="repeatt">

                                                            <input type="radio" id="_24by74" name="_24by7" value="1" {{ $pkg->availalltime == 1 ? "checked" : "" }}
                                                                class="_24by7open" >
                                                            <label for="_24by74"> Available 24/7 </label>

                                                            <input type="radio" id="time4" name="_24by7" value="0"  {{ $pkg->availalltime != 1 ? "checked" : "" }}
                                                                class="_24by7open" style="margin-left: 30px;">
                                                            <label for="time4"> Open in specific hours</label>

                                                            <div class="hoursdiv {{ $pkg->availalltime == 1 ? "d-none" : "" }} col-9 col-md-9" style="margin: auto;">

                                                                <h4 class="mb-0 mt-4 days">Monday</h4>
                                                                <div class="disabl_prnt">
                                                                    <div class="d-flex checkbtn">
                                                                        <input type="checkbox" id="_24_day11" name="_24_day1" atty="1" {{ $pkg->holiday1 == 24 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="_24_day11"> Available 24 Hours </label>


                                                                        <input type="checkbox" id="holiday311" name="holiday1"  {{ $pkg->holiday1 == 1 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="holiday311"> Holiday </label>
                                                                    </div>



                                                                    <div class="monday main1 {{ $pkg->holiday1 == 24 ? "disableddiv" : "" }}">
                                                                            @php
                                                                            $k1=0;
                                                                            $j1=0;
                                                                            $count21=0;

                                                                            @endphp
                                                                        @foreach($pkg->pkgtime as $time)

                                                                            @if($time->mondyopen != null)
                                                                                @php
                                                                                $k1=1;
                                                                                $j1++;
                                                                                $count21++;
                                                                                @endphp
                                                                                <div class="main2 input-text mb-2">
                                                                                    <div class="main3 input-div">

                                                                                        <input type="time" id="user_name"
                                                                                            name="mondayopen[]" class="starttime" value="{{$time->mondyopen}}">
                                                                                        <span>Opening</span>
                                                                                    </div>

                                                                                    <div class="input-div">
                                                                                        <input type="time" id="user_name"
                                                                                            name="mondayclose[]" class="endtime"  value="{{$time->mondyclose}}">
                                                                                        <span>Closing</span>
                                                                                    </div>
                                                                                    @if($j1==1)
                                                                                        <i att="1" class="fa fa-plus add_btn"
                                                                                        aria-hidden="true"></i>
                                                                                    @else
                                                                                        <i class="fa fa-plus dum"
                                                                                        aria-hidden="true"></i>

                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                        @if($k1 != 1)
                                                                            <div class="main2 input-text mb-2">
                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name" name="mondayopen[]"
                                                                                        class="starttime">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time" id="user_name" name="mondayclose[]"
                                                                                        class="endtime">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                    <i att="1" class="fa fa-plus add_btn"
                                                                                    aria-hidden="true"></i>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <input type="number" name="count[]" class="count1 d-none"
                                                                        value="{{$count21}}">
                                                                </div>

                                                                <div class="div mb-2 text-end">


                                                                </div>

                                                                <h4 class="mb-0 days">Tuesday</h4>
                                                                <div class="disabl_prnt">
                                                                    <div class="d-flex checkbtn">
                                                                        <input type="checkbox" id="_24_day21" name="_24_day2" atty="1" {{ $pkg->holiday2 == 24 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="_24_day21"> Available 24 Hours </label>
                                                                        <input type="checkbox" id="holiday321" name="holiday2" {{ $pkg->holiday2 == 1 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="holiday321"> Holiday </label>
                                                                    </div>

                                                                    <div class="tuesday main1 {{ $pkg->holiday2 == 24 ? "disableddiv" : "" }}">
                                                                            @php
                                                                            $k2=0;
                                                                            $j2=0;
                                                                            $count22=0;

                                                                            @endphp
                                                                        @foreach($pkg->pkgtime as $time)

                                                                            @if($time->tuedyopen != null)
                                                                                @php
                                                                                $k2=1;
                                                                                $j2++;
                                                                                $count22++;
                                                                                @endphp
                                                                                <div class="main2 input-text mb-2">
                                                                                    <div class="main3 input-div">
                                                                                        <input type="time" id="user_name"
                                                                                            class="starttime" name="tuesdayopen[]" value="{{$time->tuedyopen}}">
                                                                                        <span>Opening</span>
                                                                                    </div>
                                                                                    <div class="input-div">
                                                                                        <input type="time" placeholder="none" value="{{$time->tuedyclose}}"
                                                                                            id="user_name" class="endtime"
                                                                                            name="tuesdayclose[]">
                                                                                        <span>Closing</span>
                                                                                    </div>
                                                                                    @if($j2==1)
                                                                                        <i att="2" class="fa fa-plus add_btn"
                                                                                        aria-hidden="true"></i>
                                                                                    @else
                                                                                        <i class="fa fa-plus dum"
                                                                                        aria-hidden="true"></i>

                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                        @if($k2 != 1)
                                                                            <div class="main2 input-text mb-2">
                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name" class="starttime"
                                                                                        name="tuesdayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time" placeholder="none" id="user_name"
                                                                                        class="endtime" name="tuesdayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>

                                                                                <i att="2" class="fa fa-plus add_btn"
                                                                                    aria-hidden="true"></i>

                                                                            </div>

                                                                        @endif
                                                                    </div>
                                                                    <input type="number" name="count[]" class="count2 d-none"
                                                                        value="{{ $count22 }}">
                                                                </div>
                                                                <div class="div mb-2 text-end">


                                                                </div>

                                                                <h4 class="mb-0 days">Wednesday</h4>
                                                                <div class="disabl_prnt">
                                                                    <div class="d-flex checkbtn">
                                                                        <input type="checkbox" id="_24_day31" name="_24_day3" atty="1" {{ $pkg->holiday3 == 24 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="_24_day31"> Available 24 Hours </label>
                                                                        <input type="checkbox" id="holiday331" name="holiday3" {{ $pkg->holiday3 == 1 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="holiday331"> Holiday </label>
                                                                    </div>


                                                                    <div class="wednesday main1 {{ $pkg->holiday3 == 24 ? "disableddiv" : "" }}">
                                                                            @php
                                                                            $k3=0;
                                                                            $j3=0;
                                                                            $count23=0;
                                                                            @endphp
                                                                        @foreach($pkg->pkgtime as $time)

                                                                            @if($time->wedopen != null)
                                                                                @php
                                                                                $k3=1;
                                                                                $j3++;
                                                                                $count23++;
                                                                                @endphp
                                                                                    <div class="main2 input-text mb-2">

                                                                                        <div class="main3 input-div">
                                                                                            <input type="time" id="user_name"
                                                                                                class="starttime" name="wednesdayopen[]" value="{{$time->wedopen}}">
                                                                                            <span>Opening</span>
                                                                                        </div>
                                                                                        <div class="input-div">
                                                                                            <input type="time" placeholder="none" value="{{$time->wedclose}}"
                                                                                                id="user_name" class="endtime"
                                                                                                name="wednesdayclose[]">
                                                                                            <span>Closing</span>
                                                                                        </div>
                                                                                        @if($j3==1)
                                                                                            <i att="3" class="fa fa-plus add_btn"
                                                                                            aria-hidden="true"></i>
                                                                                        @else
                                                                                            <i class="fa fa-plus dum"
                                                                                            aria-hidden="true"></i>

                                                                                        @endif
                                                                                    </div>
                                                                            @endif
                                                                        @endforeach
                                                                        @if($k3 != 1)
                                                                            <div class="main2 input-text mb-2">
                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name" class="starttime"
                                                                                        name="wednesdayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time" placeholder="none" id="user_name"
                                                                                        class="endtime" name="wednesdayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                    <i att="3" class="fa fa-plus add_btn"
                                                                                        aria-hidden="true"></i>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <input type="number" name="count[]" class="count3 d-none"
                                                                        value="{{ $count23 }}">
                                                                </div>
                                                                <div class="div mb-2 text-end">


                                                                </div>

                                                                <h4 class="mb-0 days">Thursday</h4>
                                                                <div class="disabl_prnt">
                                                                    <div class="d-flex checkbtn">
                                                                        <input type="checkbox" id="_24_day41" name="_24_day4" atty="1" {{ $pkg->holiday4 == 24 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="_24_day41"> Available 24 Hours </label>

                                                                        <input type="checkbox" id="holiday341" name="holiday4" {{ $pkg->holiday4 == 1 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="holiday341"> Holiday </label>
                                                                    </div>


                                                                    <div class="thursday main1 {{ $pkg->holiday4 == 24 ? "disableddiv" : "" }}">
                                                                            @php
                                                                            $k4=0;
                                                                            $j4=0;
                                                                            $count24=0;
                                                                            @endphp
                                                                        @foreach($pkg->pkgtime as $time)
                                                                            @if($time->thurdyopen != null)
                                                                                @php
                                                                                $k4=1;
                                                                                $j4++;
                                                                                $count24++;
                                                                                @endphp
                                                                                    <div class="main2 input-text mb-2">

                                                                                        <div class="main3 input-div">
                                                                                            <input type="time" id="user_name"
                                                                                                class="starttime" name="thursdayopen[]" value="{{$time->thurdyopen}}">
                                                                                            <span>Opening</span>
                                                                                        </div>
                                                                                        <div class="input-div">
                                                                                            <input type="time" placeholder="none" value="{{$time->thurdyclose}}"
                                                                                                id="user_name" class="endtime"
                                                                                                name="thursdayclose[]">
                                                                                            <span>Closing</span>
                                                                                        </div>
                                                                                        @if($j4==1)
                                                                                            <i att="4" class="fa fa-plus add_btn"
                                                                                            aria-hidden="true"></i>
                                                                                        @else
                                                                                            <i class="fa fa-plus dum"
                                                                                            aria-hidden="true"></i>

                                                                                        @endif
                                                                                    </div>
                                                                            @endif
                                                                        @endforeach
                                                                        @if($k4 != 1)
                                                                            <div class="main2 input-text mb-2">
                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name" class="starttime"
                                                                                        name="thursdayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time" placeholder="none" id="user_name"
                                                                                        class="endtime" name="thursdayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                <i att="4" class="fa fa-plus add_btn"
                                                                                    aria-hidden="true"></i>
                                                                            </div>

                                                                        @endif
                                                                    </div>
                                                                    <input type="number" name="count[]" class="count4 d-none"
                                                                        value="{{ $count24 }}">
                                                                </div>
                                                                <div class="div mb-2 text-end">


                                                                </div>

                                                                <h4 class="mb-0 days">Friday</h4>
                                                                <div class="disabl_prnt">
                                                                    <div class="d-flex checkbtn">
                                                                        <input type="checkbox" id="_24_day51" name="_24_day5" atty="1" {{ $pkg->holiday5 == 24 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="_24_day51"> Available 24 Hours </label>

                                                                        <input type="checkbox" id="holiday351" name="holiday5" {{ $pkg->holiday5 == 1 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="holiday351"> Holiday </label>
                                                                    </div>



                                                                    <div class="friday main1 {{ $pkg->holiday5 == 24 ? "disableddiv" : "" }}">
                                                                            @php
                                                                            $k5=0;
                                                                            $j5=0;
                                                                            $count25=0;
                                                                            @endphp
                                                                        @foreach($pkg->pkgtime as $time)
                                                                            @if($time->fridyopen != null)
                                                                                @php
                                                                                $k5=1;
                                                                                $j5++;
                                                                                $count25++;
                                                                                @endphp
                                                                                    <div class="main2 input-text mb-2">

                                                                                        <div class="main3 input-div">
                                                                                            <input type="time" id="user_name"
                                                                                                name="fridayopen[]" class="starttime" value="{{$time->fridyopen}}">
                                                                                            <span>Opening</span>
                                                                                        </div>
                                                                                        <div class="input-div">
                                                                                            <input type="time" placeholder="none" value="{{$time->fridyclose}}"
                                                                                                id="user_name" class="endtime"
                                                                                                name="fridayclose[]">
                                                                                            <span>Closing</span>
                                                                                        </div>
                                                                                        @if($j5==1)
                                                                                            <i att="5" class="fa fa-plus add_btn"
                                                                                            aria-hidden="true"></i>
                                                                                        @else
                                                                                            <i class="fa fa-plus dum"
                                                                                            aria-hidden="true"></i>

                                                                                        @endif
                                                                                    </div>
                                                                                @endif
                                                                        @endforeach
                                                                        @if($k5 != 1)
                                                                            <div class="main2 input-text mb-2">
                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name" name="fridayopen[]"
                                                                                        class="starttime">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time" placeholder="none" id="user_name"
                                                                                        class="endtime" name="fridayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>

                                                                                <i att="5" class="fa fa-plus add_btn"
                                                                                    aria-hidden="true"></i>

                                                                            </div>

                                                                        @endif
                                                                    </div>

                                                                    <input type="number" name="count[]" class="count5 d-none"
                                                                           value="{{ $count25 }}">
                                                                </div>
                                                                <div class="div mb-2 text-end">


                                                                </div>

                                                                <h4 class="mb-0 days">Saturday</h4>
                                                                <div class="disabl_prnt">
                                                                    <div class="d-flex checkbtn">
                                                                        <input type="checkbox" id="_24_day61" name="_24_day6" atty="1" {{ $pkg->holiday6 == 24 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="_24_day61"> Available 24 Hours </label>

                                                                        <input type="checkbox" id="holiday361" name="holiday6" {{ $pkg->holiday6 == 1 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="holiday361"> Holiday </label>
                                                                    </div>



                                                                    <div class="saturday main1 {{ $pkg->holiday6 == 24 ? "disableddiv" : "" }}">
                                                                            @php
                                                                            $k6=0;
                                                                            $j6=0;
                                                                            $count26=0;
                                                                            @endphp
                                                                        @foreach($pkg->pkgtime as $time)
                                                                            @if($time->satdyopen != null)
                                                                                @php
                                                                                $k6=1;
                                                                                $j6++;
                                                                                $count26++;
                                                                                @endphp
                                                                                    <div class="main2 input-text mb-2">

                                                                                        <div class="main3 input-div">
                                                                                            <input type="time" id="user_name"
                                                                                                class="starttime" name="saturdayopen[]" value="{{$time->satdyopen}}">
                                                                                            <span>Opening</span>
                                                                                        </div>
                                                                                        <div class="input-div">
                                                                                            <input type="time" id="user_name"
                                                                                                class="endtime" name="saturdayclose[]" value="{{$time->satdyclose}}">
                                                                                            <span>Closing</span>
                                                                                        </div>
                                                                                        @if($j6==1)
                                                                                            <i att="6" class="fa fa-plus add_btn"
                                                                                            aria-hidden="true"></i>
                                                                                        @else
                                                                                            <i class="fa fa-plus dum"
                                                                                            aria-hidden="true"></i>

                                                                                        @endif
                                                                                    </div>
                                                                            @endif
                                                                        @endforeach
                                                                        @if($k6 != 1)
                                                                            <div class="main2 input-text mb-2">

                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name" class="starttime"
                                                                                        name="saturdayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time" id="user_name" class="endtime"
                                                                                        name="saturdayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>

                                                                                <i att="6" class="fa fa-plus add_btn"
                                                                                    aria-hidden="true"></i>

                                                                            </div>
                                                                        @endif
                                                                    </div>

                                                                    <input type="number" name="count[]" class="count6 d-none"
                                                                           value="0">
                                                                </div>
                                                                <div class="div mb-2 text-end">


                                                                </div>

                                                                <h4 class="mb-0 days">Sunday</h4>
                                                                <div class="disabl_prnt">
                                                                    <div class="d-flex checkbtn">
                                                                        <input type="checkbox" id="_24_day71" name="_24_day7" atty="1" {{ $pkg->holiday7 == 24 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="_24_day71"> Available 24 Hours </label>

                                                                        <input type="checkbox" id="holiday371" name="holiday7" {{ $pkg->holiday7 == 1 ? "checked" : "" }}
                                                                            class="setbtn">
                                                                        <label for="holiday371"> Holiday </label>
                                                                    </div>



                                                                    <div class="sunday main1 {{ $pkg->holiday7 == 24 ? "disableddiv" : "" }}">
                                                                            @php
                                                                            $k7=0;
                                                                            $j7=0;
                                                                            $count27=0;
                                                                            @endphp
                                                                        @foreach($pkg->pkgtime as $time)
                                                                            @if($time->sundyopen != null)
                                                                                @php
                                                                                $k7=1;
                                                                                $j7++;
                                                                                $count27++;
                                                                                @endphp
                                                                                    <div class="main2 input-text mb-2">

                                                                                        <div class="main3 input-div">
                                                                                            <input type="time" placeholder="dss" value="{{$time->sundyopen}}"
                                                                                                id="user_name" class="starttime"
                                                                                                name="sundayopen[]">
                                                                                            <span>Opening</span>
                                                                                        </div>
                                                                                        <div class="input-div">
                                                                                            <input type="time" placeholder="none" value="{{$time->sundyclose}}"
                                                                                                id="user_name" class="endtime"
                                                                                                name="sundayclose[]">
                                                                                            <span>Closing</span>
                                                                                        </div>
                                                                                        @if($j7==1)
                                                                                            <i att="7" class="fa fa-plus add_btn"
                                                                                            aria-hidden="true"></i>
                                                                                        @else
                                                                                            <i class="fa fa-plus dum"
                                                                                            aria-hidden="true"></i>

                                                                                        @endif
                                                                                    </div>
                                                                            @endif
                                                                        @endforeach

                                                                        @if($k7 != 1)
                                                                            <div class="main2 input-text mb-2">

                                                                                <div class="main3 input-div">
                                                                                    <input type="time" placeholder="dss" id="user_name"
                                                                                        class="starttime" name="sundayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time" placeholder="none" id="user_name"
                                                                                        class="endtime" name="sundayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>

                                                                                <i att="7" class="fa fa-plus add_btn"
                                                                                    aria-hidden="true"></i>

                                                                            </div>
                                                                        @endif
                                                                    </div>

                                                                    <input type="number" name="count[]" class="count7 d-none"
                                                                           value="0">
                                                                </div>
                                                                <div class="div mb-2 text-end">


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="button" name="previous"
                                                        class="custom_pre action-button-previous" value="Previous" />
                                                    <input type="submit" name="make_payment" class="action-button testbtn"
                                                        value="Finish" />
                                                </div>

                                            </fieldset>
                                            <fieldset>

                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 52 52">
                                                    <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                                        fill="none" />
                                                    <path class="checkmark__check" fill="none"
                                                        d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                                </svg>

                                                <div class="text congrats">
                                                    <h2>Congratulations!</h2>
                                                    <p>Processing your information to help you onboard</p>
                                                </div>

                                            </fieldset>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- <script src="{{ asset('js/event2.js') }}"></script> -->


<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

<script>
    $(document).ready(function(){
        // jQuery.noConflict();
            // $('.dropify2n').dropify();
            $('.setbtn').click(function(){


                $(this).siblings('input:checkbox').prop('checked',false);
                // alert($(this).attr("name"));

                // $(this).closest(".disabl_prnt").children(".main1").addClass('disableddiv');

                if($(this).attr("atty")== 1)
                {
                    if($(this).is(":checked"))
                    {
                        $(this).closest(".disabl_prnt").children(".main1").addClass('disableddiv');
                    }
                    else{
                        $(this).closest(".disabl_prnt").children(".main1").removeClass('disableddiv');
                    }
                }
                else{
                    $(this).closest(".disabl_prnt").children(".main1").removeClass('disableddiv');
                }


            });







        });
</script>

