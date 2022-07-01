

<section class="event-step">
    <div class="container bg-transparent">
        <div class="card border-0">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>Edit Restaurants</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Step <span class="step-number2">1</span></h3>

                    </div>
                    <ul class="progress-bar-2 p-0 mt-0"
                        style="display: flex;flex-direction: column;justify-content: center;overflow: hidden;color: #fff;text-align: center;white-space: nowrap;transition: width .6s ease;">
                        <li class="active2 progresss">Welcome Onboard</li>
                        <li class="progresss">Location</li>
                        <li class="progresss">Opening Hours</li>
                        <li class="progresss">Processing</li>
                    </ul>



                </div>
                <div class="right-side">
                    <form method="post" action="{{ url('/user/update_restaurant') }}/{{$rest->id}}"
                        enctype="multipart/form-data" class="editResturentForm">
                        @csrf
                        <div class="main2nd active2"  style="overflow-y: scroll; height: 496px;">
                            <div class="text">
                                <h2>Welcome Onboard</h2>
                                <p>Please provide the following information</p>
                            </div>

                            <div class="input-text">
                                <div class="input-div">
                                    <label>Business Category</label>
                                    <select name="category">
                                        @foreach($catgs as $catg)
                                        <option value="{{ $catg->id }}"  {{ $rest->categoryid == $catg->id ? "selected" : "" }}><a class="dropdown-item"
                                                href="#">{{ $catg->name}}</a></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="input-text">
                                <div class="input-div">
                                    <label>Business Name</label>
                                    <input id="business" type="text" name="business" value="{{$rest->business}}"  required require>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <label>Business Logo</label>
                                    <input id="logo" type="file" name="file" value="{{$rest->logo}}" class="dropify"
                                    data-default-file="{{asset('upload') }}/{{$rest->logo}}">
                                </div>
                            </div>





                            <div class="buttons py-4">
                                <button type="button" class="next_button2">Next Step</button>
                            </div>
                        </div>



                        <div class="main2nd">

                            <div class="text">
                                <h2>Location</h2>
                                <p>Where is your busniess located</p>
                            </div>
                            <div class="map-section">
                                <div id="map">


                                    <input type="text" name="" id="lati" class="d-none">
                                    <div id="map1">





                                        <body style="margin:0px; padding:0px;" >

                                            <!-- you can use tables or divs for the overall layout -->
                                            <table border="1">
                                                <tr>
                                                    <td>
                                                        <div id="map_canvas2"
                                                            style="width: 400px; height:200px">
                                                        </div>
                                                    </td>

                                                </tr>
                                            </table>



                                        </body>

                                    </div>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input id="address" type="text" name="address" value="{{$rest->address}}"  required require>
                                    <span>Address</span>
                                </div>
                            </div>


                            <div class="buttons button_space">
                                <button class="back_button2" type="button">Back</button>
                                <button class="next_button2" type="button">Next Step</button>
                            </div>
                        </div>
                        <div class="main2nd" style="overflow-y: scroll; height:496px;">

                            <div class="text">
                                <h2>Openning And Closing Hours</h2>
                                <p>Please provide your restaurant opening and closing hours
                                </p>
                            </div>
                            <div class="hoursmaindiv">
                                                @php
                                                $countval=0;
                                                @endphp
                                            @foreach($rest->time as $time)
                                                @php
                                                $countval=1;
                                                @endphp
                                            @endforeach
                                <input type="hidden" value="{{$countval}}" name="repeatt" class="repeatt">

                                <input type="radio" id="_24by" name="_24by" value="1" {{ $rest->availalltime == 1 ? "checked" : "" }} class="_24by7open" >
                                <label for="_24by"> Available 24/7 </label>

                                <input type="radio" id="timet" name="_24by" value="0" {{ $rest->availalltime != 1 ? "checked" : "" }} class="_24by7open">
                                <label for="timet"> Open in specific hours</label>

                                <div class="hoursdiv {{ $rest->availalltime == 1 ? "d-none" : "" }}">
                                    <h4 class="mb-0 days">Monday</h4>
                                    <div class="disabl_prnt">
                                        <div class="d-flex checkbtn">
                                            <input type="checkbox" id="_24_1stday2" name="_24_day1" atty="1" {{ $rest->holiday1 == 24 ? "checked" : "" }} class="setbtn">
                                            <label for="_24_1stday2"> Available 24 Hours </label>


                                            <input type="checkbox" id="holiday12" name="holiday1" {{ $rest->holiday1 == 1 ? "checked" : "" }} class="setbtn">
                                            <label for="holiday12"> Holiday </label>
                                        </div>

                                        <div class="monday main1 {{ $rest->holiday1 == 24 ? "disableddiv" : "" }}">
                                                @php
                                                $k1=0;
                                                $e1=0;
                                                $count21=0;

                                                @endphp
                                            @foreach($rest->time as $time)

                                                @if($time->mondyopen != null)
                                                    @php
                                                    $k1=1;
                                                    $e1++;
                                                    @endphp
                                                    <div class="main2 input-text mb-2">
                                                        <div class="main3 input-div">

                                                            <input type="time" id="user_name" name="mondayopen[]" value="{{$time->mondyopen}}"
                                                                class="starttime">
                                                            <span>Opening</span>
                                                        </div>

                                                        <div class="input-div">
                                                            <input type="time" id="user_name" name="mondayclose[]" value="{{$time->mondyclose}}"
                                                                class="endtime">
                                                            <span>Closing</span>
                                                        </div>
                                                        @if($e1==1)

                                                            <i att="1" class="fa fa-plus add_btn"
                                                            aria-hidden="true"></i>
                                                        @else
                                                            @php
                                                            $count21++;
                                                            @endphp
                                                            <i att="1" class="fa fa-close clos_icon"
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
                                    </div>
                                    <input type="number" name="count[]" class="count1 d-none" value="{{$count21}}">


                                    <div class="div mb-2 text-end">


                                    </div>

                                    <h4 class="mb-0 days">Tuesday</h4>
                                    <div class="disabl_prnt">
                                        <div class="d-flex checkbtn">
                                            <input type="checkbox" id="_24_2ndday2" name="_24_day2" atty="1" {{ $rest->holiday2 == 24 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="_24_2ndday2"> Available 24 Hours </label>
                                            <input type="checkbox" id="holiday22" name="holiday2" {{ $rest->holiday2 == 1 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="holiday22"> Holiday </label>
                                        </div>

                                        <div class="tuesday main1  {{ $rest->holiday2 == 24 ? "disableddiv" : "" }}">
                                                @php
                                                $k2=0;
                                                $e2=0;
                                                $count22=0;

                                                @endphp
                                            @foreach($rest->time as $time)

                                                @if($time->tuedyopen != null)
                                                @php
                                                $k2=1;
                                                $e2++;

                                                @endphp
                                                    <div class="main2 input-text mb-2">
                                                        <div class="main3 input-div">
                                                            <input type="time" id="user_name" class="starttime" value="{{$time->tuedyopen}}"
                                                                name="tuesdayopen[]">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name" value="{{$time->tuedyclose}}"
                                                                class="endtime" name="tuesdayclose[]">
                                                            <span>Closing</span>
                                                        </div>
                                                        @if($e2==1)
                                                        <i att="2" class="fa fa-plus add_btn"
                                                            aria-hidden="true"></i>
                                                        @else
                                                            @php
                                                            $count22++;
                                                            @endphp
                                                        <i att="2" class="fa fa-close clos_icon"
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
                                    </div>
                                    <input type="number" name="count[]" class="count2 d-none" value="{{$count22}}">


                                    <div class="div mb-2 text-end">


                                    </div>

                                    <h4 class="mb-0 days">Wednesday</h4>
                                    <div class="disabl_prnt">
                                        <div class="d-flex checkbtn">
                                            <input type="checkbox" id="_24_3rdday2" name="_24_day3" atty="1" {{ $rest->holiday3 == 24 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="_24_3rdday2"> Available 24 Hours </label>
                                            <input type="checkbox" id="holiday32" name="holiday3" {{ $rest->holiday3 == 1 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="holiday32"> Holiday </label>
                                        </div>

                                        <div class="wednesday main1  {{ $rest->holiday3 == 24 ? "disableddiv" : "" }}">
                                                @php
                                                $k3=0;
                                                $e3=0;
                                                $count23=0;
                                                @endphp
                                            @foreach($rest->time as $time)

                                                @if($time->wedopen != null)
                                                    @php
                                                    $k3=1;
                                                    $e3++;

                                                    @endphp
                                                    <div class="main2 input-text mb-2">

                                                        <div class="main3 input-div">
                                                            <input type="time" id="user_name" class="starttime"  value="{{$time->wedopen}}"
                                                                name="wednesdayopen[]">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name"  value="{{$time->wedclose}}"
                                                                class="endtime" name="wednesdayclose[]">
                                                            <span>Closing</span>
                                                        </div>
                                                        @if($e3==1)
                                                            <i att="3" class="fa fa-plus add_btn"
                                                                aria-hidden="true"></i>
                                                            @else
                                                                @php
                                                                $count23++;
                                                                @endphp
                                                            <i att="3" class="fa fa-close clos_icon"
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
                                    </div>
                                    <input type="number" name="count[]" class="count3 d-none" value="{{$count23}}">

                                    <div class="div mb-2 text-end">


                                    </div>

                                    <h4 class="mb-0 days">Thursday</h4>
                                    <div class="disabl_prnt">
                                        <div class="d-flex checkbtn">
                                            <input type="checkbox" id="_24_4thday2" name="_24_day4" atty="1" {{ $rest->holiday4 == 24 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="_24_4thday2"> Available 24 Hours </label>

                                            <input type="checkbox" id="holiday42" name="holiday4" {{ $rest->holiday4 == 1 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="holiday42"> Holiday </label>
                                        </div>

                                        <div class="thursday main1  {{ $rest->holiday4 == 24 ? "disableddiv" : "" }}">
                                                @php
                                                $k4=0;
                                                $e4=0;
                                                $count24=0;
                                                @endphp
                                            @foreach($rest->time as $time)
                                                @if($time->thurdyopen != null)
                                                    @php
                                                    $k4=1;
                                                    $e4++;

                                                    @endphp
                                                    <div class="main2 input-text mb-2">

                                                        <div class="main3 input-div">
                                                            <input type="time" id="user_name" class="starttime" value="{{$time->thurdyopen}}"
                                                                name="thursdayopen[]">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name" value="{{$time->thurdyclose}}"
                                                                class="endtime" name="thursdayclose[]">
                                                            <span>Closing</span>
                                                        </div>
                                                        @if($e4==1)
                                                        <i att="4" class="fa fa-plus add_btn"
                                                            aria-hidden="true"></i>
                                                        @else
                                                            @php
                                                            $count24++;
                                                            @endphp
                                                        <i att="4" class="fa fa-close clos_icon"
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
                                    </div>
                                    <input type="number" name="count[]" class="count4 d-none" value="{{$count24}}">
                                    <div class="div mb-2 text-end">


                                    </div>

                                    <h4 class="mb-0 days">Friday</h4>
                                    <div class="disabl_prnt">
                                        <div class="d-flex checkbtn">
                                            <input type="checkbox" id="_24_5thday2" name="_24_day5" atty="1" {{ $rest->holiday5 == 24 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="_24_5thday2"> Available 24 Hours </label>

                                            <input type="checkbox" id="holiday52" name="holiday5" {{ $rest->holiday5 == 1 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="holiday52"> Holiday </label>
                                        </div>


                                        <div class="friday main1 {{ $rest->holiday5 == 24 ? "disableddiv" : "" }}">
                                                @php
                                                $k5=0;
                                                $e5=0;
                                                $count25=0;
                                                @endphp
                                            @foreach($rest->time as $time)
                                                @if($time->fridyopen != null)
                                                    @php
                                                    $k5=1;
                                                    $e5++;

                                                    @endphp
                                                    <div class="main2 input-text mb-2">

                                                        <div class="main3 input-div">
                                                            <input type="time" id="user_name" name="fridayopen[]" value="{{$time->fridyopen}}"
                                                                class="starttime">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name" value="{{$time->fridyclose}}"
                                                                class="endtime" name="fridayclose[]">
                                                            <span>Closing</span>
                                                        </div>
                                                        @if($e5==1)
                                                        <i att="5" class="fa fa-plus add_btn"
                                                            aria-hidden="true"></i>
                                                        @else
                                                            @php
                                                            $count25++;
                                                            @endphp
                                                        <i att="5" class="fa fa-close clos_icon"
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
                                    </div>
                                    <input type="number" name="count[]" class="count5 d-none" value="{{$count25}}">

                                    <div class="div mb-2 text-end">


                                    </div>

                                    <h4 class="mb-0 days">Saturday</h4>
                                    <div class="disabl_prnt">
                                        <div class="d-flex checkbtn">
                                            <input type="checkbox" id="_24_6thday2" name="_24_day6" atty="1" {{ $rest->holiday6 == 24 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="_24_6thday2"> Available 24 Hours </label>

                                            <input type="checkbox" id="holiday62" name="holiday6" {{ $rest->holiday6 == 1 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="holiday62"> Holiday </label>
                                        </div>


                                        <div class="saturday main1 {{ $rest->holiday6 == 24 ? "disableddiv" : "" }}">
                                                @php
                                                $k6=0;
                                                $e6=0;
                                                $count26=0;
                                                @endphp
                                            @foreach($rest->time as $time)
                                                @if($time->satdyopen != null)
                                                    @php
                                                    $k6=1;
                                                    $e6++;
                                                    @endphp
                                                    <div class="main2 input-text mb-2">

                                                        <div class="main3 input-div">
                                                            <input type="time" id="user_name" class="starttime"  value="{{$time->satdyopen}}"
                                                                name="saturdayopen[]">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" id="user_name" class="endtime"  value="{{$time->satdyclose}}"
                                                                name="saturdayclose[]">
                                                            <span>Closing</span>
                                                        </div>
                                                        @if($e6==1)
                                                        <i att="6" class="fa fa-plus add_btn"
                                                            aria-hidden="true"></i>
                                                        @else
                                                            @php
                                                            $count26++;
                                                            @endphp
                                                        <i att="6" class="fa fa-close clos_icon"
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
                                    </div>
                                    <input type="number" name="count[]" class="count6 d-none" value="{{$count26}}">

                                    <div class="div mb-2 text-end">


                                    </div>

                                    <h4 class="mb-0 days">Sunday</h4>
                                    <div class="disabl_prnt">
                                        <div class="d-flex checkbtn">
                                            <input type="checkbox" id="_24_7thday2" name="_24_day7" atty="1" {{ $rest->holiday7 == 24 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="_24_7thday2"> Available 24 Hours </label>

                                            <input type="checkbox" id="holiday72" name="holiday7" {{ $rest->holiday7 == 1 ? "checked" : "" }}
                                                class="setbtn">
                                            <label for="holiday72"> Holiday </label>
                                        </div>


                                        <div class="sunday main1 {{ $rest->holiday7 == 24 ? "disableddiv" : "" }}">
                                                @php
                                                $k7=0;
                                                $e7=0;
                                                $count27=0;
                                                @endphp
                                            @foreach($rest->time as $time)
                                                @if($time->sundyopen != null)
                                                    @php
                                                    $k7=1;
                                                    $e7++;

                                                    @endphp
                                                    <div class="main2 input-text mb-2">

                                                        <div class="main3 input-div">
                                                            <input type="time" placeholder="dss" id="user_name" value="{{$time->sundyopen}}"
                                                                class="starttime" name="sundayopen[]">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name"  value="{{$time->sundyclose}}"
                                                                class="endtime" name="sundayclose[]">
                                                            <span>Closing</span>
                                                        </div>
                                                        @if($e7==1)
                                                        <i att="7" class="fa fa-plus add_btn"
                                                            aria-hidden="true"></i>
                                                        @else
                                                            @php
                                                            $count27++;
                                                            @endphp
                                                        <i att="7" class="fa fa-close clos_icon"
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
                                    </div>
                                    <input type="number" name="count[]" class="count7 d-none" value="{{$count27}}">

                                    <div class="div mb-2 text-end">


                                    </div>
                                </div>
                            </div>


                            <div class="buttons button_space">
                                <button class="back_button2" type="button">Back</button>
                                <button class="testbtn">Next Step</button>
                            </div>
                        </div>
                    </form>


                    <div class="main2nd">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none"
                                d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>

                        <div class="text congrats">
                            <h2>Congratulations!</h2>
                            <p>Your Business has been in our record. Please give sometime
                                for
                                review.</p>
                        </div>


                        <div class="dashBoard d-flex justify-content-end align-items-end mt-5 pt-5">
                            <a href=""><button class="btn btn-green">Add New
                                    Package</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
{{--<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>--}}
<script>
$(document).ready(function(){

        // alert('fff');
       // jQuery.noConflict();

            $('.dropify').dropify();
});


</script>


