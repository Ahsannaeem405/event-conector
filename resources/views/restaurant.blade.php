@extends('layouts.main')


@section('body')
    <link rel="stylesheet" href="{{ asset('css/event2.css') }}">
    <style type="text/css">
        html,
        body {
            height: 100%;
        }

        .gm-style-iw-t {
            display: none;
        }

        #map1 {
            max-height: 200px;
        }
    </style>
    <style>
        .dum {
            color: transparent;
        }
    </style>
    <style>
        .touch-fallback, .has-preview {
            height: 106px !important;
            width: 200px !important;
        }

        .dropify-wrapper {
            height: 106px !important;
            background: green;
        }

        .disableddiv {
            pointer-events: none;
            opacity: 0.4;
        }

        .clos_icon {
            color: red;
            line-height: 2.2;
        }

        .add_btn {
            color: green;
            line-height: 2.3;
        }

        .add_btnpkg {
            color: green;
            line-height: 2.3;
            padding-left: 20px;
            cursor: pointer;
        }

        .clos_iconpkg {
            color: red;
            line-height: 2.2;
            padding-left: 20px;
            cursor: pointer;
        }

        .clos_icon2 {
            color: red;
            line-height: 2.2;
        }

        .add_btn2 {
            color: green;
            line-height: 2.3;
        }

        .modal-content {
            background-color: transparent !important;
            border: unset !important;
            border-radius: unset !important;

        }

        .modal-header,
        .modal-footer {
            border-bottom: unset !important;
            border-top: unset !important;

        }

        .event-step .container {
            min-height: unset !important;
        }

        .btn-close {
            background-color: white !important;
            padding: 3% !important;
        }

        .setbtn {
            margin-top: 5px !important;
            margin-left: 12px !important;
        }

        .days {
            margin-right: 17px !important;
        }

        .checkbtn {
            justify-content: right;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addpackage.css')}}">

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBQ7SLGk0rhZBFdEEqKym949WqDeWNZGzY"></script>



    {{--add resturent--}}
    <div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="event-step">
                        <div class="container bg-transparent">
                            <div class="card border-0">
                                <div class="form">
                                    <div class="left-side">
                                        <div class="left-heading">
                                            <h3>Add Your Restaurants</h3>
                                        </div>
                                        <div class="steps-content">
                                            <h3>Step <span class="step-number">1</span></h3>

                                        </div>
                                        <ul class="progress-bar-1 p-0 mt-0"
                                            style="display: flex;flex-direction: column;justify-content: center;overflow: hidden;color: #fff;text-align: center;white-space: nowrap;transition: width .6s ease;">
                                            <li class="active">Welcome Onboard</li>
                                            <li>Location</li>
                                            <li>Opening Hours</li>
                                            <li>Processing</li>
                                        </ul>


                                    </div>
                                    <div class="right-side">
                                        <form method="post" action="{{ url('/planner/addrest') }}"
                                              class="addResturentForm" enctype="multipart/form-data">
                                            @csrf
                                            <div class="main active" style="overflow-y: scroll; height: 498px;">
                                                <div class="text">
                                                    <h2>Welcome Onboard</h2>
                                                    <p>Please provide the following information</p>
                                                </div>

                                                <div class="input-text">
                                                    <div class="input-div">

                                                        <label>Business Category</label>
                                                        <select name="category" required require>
                                                            @foreach($catgs as $catg)
                                                                <option value="{{ $catg->id }}"><a class="dropdown-item"
                                                                                                   href="#">{{ $catg->name}}</a>
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="input-text">
                                                    <div class="input-div">
                                                        <label>Business Name</label>
                                                        <input type="text" name="business" required require>
                                                    </div>
                                                </div>
                                                <div class="input-text">
                                                    <div class="input-div">
                                                        <label>Business Logo</label>
                                                        <input type="file" name="file" required require
                                                               class="dropify2">
                                                    </div>
                                                </div>


                                                <div class="buttons py-4">
                                                    <button type="button" class="next_button">Next Step</button>
                                                </div>
                                            </div>


                                            <div class="main">

                                                <div class="text">
                                                    <h2>Location</h2>
                                                    <p>Where is your busniess located</p>
                                                </div>
                                                <div class="map-section">
                                                    <div id="map">


                                                        <input type="text" name="" id="lati" class="d-none">
                                                        <div id="map1">


                                                            <body style="margin:0px; padding:0px;"
                                                                  onload="initialize('map_canvas')">

                                                            <!-- you can use tables or divs for the overall layout -->
                                                            <table border="1">
                                                                <tr>
                                                                    <td>
                                                                        <div id="map_canvas"
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
                                                        <input type="text" name="address" required require>
                                                        <span>Address</span>
                                                    </div>
                                                </div>


                                                <div class="buttons button_space mt-4">
                                                    <button class="back_button" type="button">Back</button>
                                                    <button class="next_button 2nd_btn" type="button">Next Step</button>
                                                </div>
                                            </div>
                                            <div class="main" style="overflow-y: scroll; height:496px;">

                                                <div class="text">
                                                    <h2>Openning And Closing Hours</h2>
                                                    <p>Please provide your restaurant opening and closing hours</p>
                                                </div>
                                                <div class="hoursmaindiv">
                                                    <input type="hidden" value="0" name="repeatt" class="repeatt">

                                                    <input type="radio" id="_24by7" name="_24by7" value="1"
                                                           class="_24by7open" checked>
                                                    <label for="_24by7"> Available 24/7 </label>

                                                    <input type="radio" id="time" name="_24by7" value="0"
                                                           class="_24by7open" style="margin-left: 30px;">
                                                    <label for="time"> Open in specific hours</label>

                                                    <div class="hoursdiv d-none">

                                                        <h4 class="mb-0 days">Monday</h4>
                                                        <div class="disabl_prnt">
                                                            <div class="d-flex checkbtn">

                                                                <input type="checkbox" id="_24_1stday" name="_24_day1"
                                                                       atty="1"
                                                                       class="setbtn">
                                                                <label for="_24_1stday"> Available 24 Hours </label>


                                                                <input type="checkbox" id="holiday1" name="holiday1"
                                                                       class="setbtn">
                                                                <label for="holiday1"> Holiday </label>

                                                            </div>

                                                            <input type="number" name="count[]" class="count1 d-none"
                                                                   value="0">

                                                            <div class="monday main1">
                                                                <div class="main2 input-text mb-2">
                                                                    <div class="main3 input-div">

                                                                        <input type="time" id="user_name"
                                                                               name="mondayopen[]" class="starttime">
                                                                        <span>Opening</span>
                                                                    </div>

                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name"
                                                                               name="mondayclose[]" class="endtime">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="1" class="fa fa-plus add_btn"
                                                                       aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="div mb-2 text-end">


                                                        </div>

                                                        <h4 class="mb-0 days">Tuesday</h4>
                                                        <div class="disabl_prnt">
                                                            <div class="d-flex checkbtn">
                                                                <input type="checkbox" id="_24_2ndday" name="_24_day2"
                                                                       atty="1"
                                                                       class="setbtn">
                                                                <label for="_24_2ndday"> Available 24 Hours </label>
                                                                <input type="checkbox" id="holiday2" name="holiday2"
                                                                       class="setbtn">
                                                                <label for="holiday2"> Holiday </label>
                                                            </div>

                                                            <input type="number" name="count[]" class="count2 d-none"
                                                                   value="0">

                                                            <div class="tuesday main1">
                                                                <div class="main2 input-text mb-2">
                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name"
                                                                               class="starttime" name="tuesdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none"
                                                                               id="user_name" class="endtime"
                                                                               name="tuesdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="2" class="fa fa-plus add_btn"
                                                                       aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="div mb-2 text-end">


                                                        </div>

                                                        <h4 class="mb-0 days">Wednesday</h4>
                                                        <div class="disabl_prnt">
                                                            <div class="d-flex checkbtn">
                                                                <input type="checkbox" id="_24_3rdday" name="_24_day3"
                                                                       atty="1"
                                                                       class="setbtn">
                                                                <label for="_24_3rdday"> Available 24 Hours </label>
                                                                <input type="checkbox" id="holiday3" name="holiday3"
                                                                       class="setbtn">
                                                                <label for="holiday3"> Holiday </label>
                                                            </div>

                                                            <input type="number" name="count[]" class="count3 d-none"
                                                                   value="0">
                                                            <div class="wednesday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name"
                                                                               class="starttime" name="wednesdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none"
                                                                               id="user_name" class="endtime"
                                                                               name="wednesdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="3" class="fa fa-plus add_btn"
                                                                       aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="div mb-2 text-end">


                                                        </div>

                                                        <h4 class="mb-0 days">Thursday</h4>
                                                        <div class="disabl_prnt">
                                                            <div class="d-flex checkbtn">
                                                                <input type="checkbox" id="_24_4thday" name="_24_day4"
                                                                       atty="1"
                                                                       class="setbtn">
                                                                <label for="_24_4thday"> Available 24 Hours </label>

                                                                <input type="checkbox" id="holiday4" name="holiday4"
                                                                       class="setbtn">
                                                                <label for="holiday4"> Holiday </label>
                                                            </div>

                                                            <input type="number" name="count[]" class="count4 d-none"
                                                                   value="0">
                                                            <div class="thursday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name"
                                                                               class="starttime" name="thursdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none"
                                                                               id="user_name" class="endtime"
                                                                               name="thursdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="4" class="fa fa-plus add_btn"
                                                                       aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="div mb-2 text-end">


                                                        </div>

                                                        <h4 class="mb-0 days">Friday</h4>
                                                        <div class="disabl_prnt">
                                                            <div class="d-flex checkbtn">
                                                                <input type="checkbox" id="_24_5thday" name="_24_day5"
                                                                       atty="1"
                                                                       class="setbtn">
                                                                <label for="_24_5thday"> Available 24 Hours </label>

                                                                <input type="checkbox" id="holiday5" name="holiday5"
                                                                       class="setbtn">
                                                                <label for="holiday5"> Holiday </label>
                                                            </div>

                                                            <input type="number" name="count[]" class="count5 d-none"
                                                                   value="0">

                                                            <div class="friday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name"
                                                                               name="fridayopen[]" class="starttime">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none"
                                                                               id="user_name" class="endtime"
                                                                               name="fridayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="5" class="fa fa-plus add_btn"
                                                                       aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="div mb-2 text-end">


                                                        </div>

                                                        <h4 class="mb-0 days">Saturday</h4>
                                                        <div class="disabl_prnt">
                                                            <div class="d-flex checkbtn">
                                                                <input type="checkbox" id="_24_6thday" name="_24_day6"
                                                                       atty="1"
                                                                       class="setbtn">
                                                                <label for="_24_6thday"> Available 24 Hours </label>

                                                                <input type="checkbox" id="holiday6" name="holiday6"
                                                                       class="setbtn">
                                                                <label for="holiday6"> Holiday </label>
                                                            </div>

                                                            <input type="number" name="count[]" class="count6 d-none"
                                                                   value="0">

                                                            <div class="saturday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name"
                                                                               class="starttime" name="saturdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name"
                                                                               class="endtime" name="saturdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="6" class="fa fa-plus add_btn"
                                                                       aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="div mb-2 text-end">


                                                        </div>

                                                        <h4 class="mb-0 days">Sunday</h4>
                                                        <div class="disabl_prnt">
                                                            <div class="d-flex checkbtn">
                                                                <input type="checkbox" id="_24_7thday" name="_24_day7"
                                                                       atty="1"
                                                                       class="setbtn">
                                                                <label for="_24_7thday"> Available 24 Hours </label>

                                                                <input type="checkbox" id="holiday7" name="holiday7"
                                                                       class="setbtn btnnn2">
                                                                <label for="holiday7"> Holiday </label>
                                                            </div>

                                                            <input type="number" name="count[]" class="count7 d-none"
                                                                   value="0">

                                                            <div class="sunday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" placeholder="dss"
                                                                               id="user_name" class="starttime"
                                                                               name="sundayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none"
                                                                               id="user_name" class="endtime"
                                                                               name="sundayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="7" class="fa fa-plus add_btn"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="div mb-2 text-end">


                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="buttons button_space mt-4">
                                                    <button class="back_button" type="button">Back</button>
                                                    <button class="testbtn">Next Step</button>
                                                </div>
                                            </div>
                                        </form>


                                        <div class="main">
                                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 52 52">
                                                <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                                        fill="none"/>
                                                <path class="checkmark__check" fill="none"
                                                      d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                            </svg>

                                            <div class="text congrats">
                                                <h2>Congratulations!</h2>
                                                <p>Your Business has been in our record. Please give sometime for
                                                    review.</p>
                                            </div>


                                            <div
                                                class="dashBoard d-flex justify-content-end align-items-end mt-5 pt-5">
                                                <a href="">
                                                    <button class="btn btn-green">Add New
                                                        Package
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
    {{--    resturent edit--}}
    <div class="modal  fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdrop2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close croos_btn" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalbod">


                </div>

            </div>
        </div>
    </div>
    {{--    add package--}}
    <div class="modal fade" id="packageSection" aria-hidden="true" aria-labelledby="addPackageLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <!-- MultiStep Form -->
                    <div class="closeBtn text-end pt-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid" id="grad1">
                        <div class="row justify-content-center mt-0">
                            <div class="main-column col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2 ">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2><strong>Add Your Package</strong></h2>
                                    <!-- <p>Fill all form field to go to next step</p> -->
                                    <div class="row">
                                        <div class="col-md-12 mx-0">
                                            <form id="msform" class="addPackageForm" method="post"
                                                  action="{{ url('/user/add_package') }}"
                                                  enctype="multipart/form-data">
                                                <!-- progressbar -->
                                                @csrf
                                                <ul class="progressbar" style="padding-left: 124px;">
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

                                                                <option
                                                                    value="{{$rest->id}}">{{$rest->business}}</option>

                                                            @endforeach

                                                        </select>

                                                    </div>
                                                    <input type="button" name="next" class="next action-button"
                                                           value="Next Step"/>
                                                </fieldset>
                                                <fieldset class="">
                                                    <div class="form-card">
                                                        <h2 class="fs-title">Package Name</h2>

                                                        <input type="text" name="package" placeholder="Package Name"
                                                               required require/>
                                                        <div class="mb-4">
                                                            <label for="allow"
                                                                   class="label-text pb-2 font-17 fontw500">Allowed
                                                                Member</label>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="quantity border rounded-2 px-2">
                                                                    <span class="quantity__minus">-</span>
                                                                    <input name="quantity" type="number"
                                                                           class="quantity__input mb-0 border-0"
                                                                           value="1">
                                                                    <span class="quantity__plus">+</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="price-radio">
                                                            <label for="allow"
                                                                   class="label-text font-17 fontw500">Price</label>
                                                            <div class="d-flex">

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                           name="person" id="flexRadioDefault1"
                                                                           value="Person">
                                                                    <label class="form-check-label"
                                                                           for="flexRadioDefault1">
                                                                        Person
                                                                    </label>
                                                                </div>
                                                                <div class="form-check ms-3">

                                                                    <label class="form-check-label"
                                                                           for="flexRadioDefault2">
                                                                        Menu
                                                                    </label>
                                                                    <input class="form-check-input" type="radio"
                                                                           name="person" id="flexRadioDefault2"
                                                                           value="Menu"
                                                                           checked>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <input type="number" name="amount"
                                                                   placeholder="Enter package amount" required require/>
                                                        </div>
                                                    </div>
                                                    <input type="button" name="previous"
                                                           class="previous action-button-previous" value="Previous"/>
                                                    <input type="button" name="next" class="next action-button"
                                                           value="Next Step"/>
                                                </fieldset>
                                                <fieldset class="custom_pre_model">
                                                    <div class="form-card">
                                                        <h2 class="fs-title">Upload Menu</h2>
                                                        <div class="dropi_parent col-12">
                                                            <input name="image[]" type="file" class="dropify2n col-6"
                                                                   required require
                                                                   data-width="60" data-height="40"/>
                                                            <i class="fa fa-plus add_btnpkg col-1"></i>
                                                        </div>
                                                    </div>
                                                    <input type="button" name="previous"
                                                           class=" previous action-button-previous" value="Previous"/>
                                                    <input type="button" name="next" class="next action-button"
                                                           value="Next Step"/>
                                                </fieldset>
                                                <fieldset class="custom_pre_model2">
                                                    <div class="availability"
                                                         style="overflow-y: scroll; height: 460px;">
                                                        <div class="">
                                                            <div class="text">
                                                                <h2>Openning And Closing Hours</h2>
                                                                <p>Please provide your restaurant opening and closing
                                                                    hours</p>
                                                            </div>
                                                            <div class="hoursmaindiv">
                                                                <input type="hidden" value="0" name="repeatt"
                                                                       class="repeatt">

                                                                <input type="radio" id="_24by73" name="_24by7" value="1"
                                                                       class="_24by7open" checked>
                                                                <label for="_24by73"> Available 24/7 </label>

                                                                <input type="radio" id="time3" name="_24by7" value="0"
                                                                       class="_24by7open" style="margin-left: 30px;">
                                                                <label for="time3"> Open in specific hours</label>

                                                                <div class="hoursdiv d-none col-9 col-md-9"
                                                                     style="margin: auto;">

                                                                    <h4 class="mb-0 mt-4 days">Monday</h4>
                                                                    <div class="disabl_prnt">
                                                                        <div class="d-flex checkbtn">
                                                                            <input type="checkbox" id="_24_day1"
                                                                                   name="_24_day1" atty="1"
                                                                                   class="setbtn">
                                                                            <label for="_24_day1"> Available 24
                                                                                Hours </label>


                                                                            <input type="checkbox" id="holiday31"
                                                                                   name="holiday1"
                                                                                   class="setbtn">
                                                                            <label for="holiday31"> Holiday </label>
                                                                        </div>

                                                                        <input type="number" name="count[]"
                                                                               class="count1 d-none"
                                                                               value="0">

                                                                        <div class="monday main1">
                                                                            <div class="main2 input-text mb-2">
                                                                                <div class="main3 input-div">

                                                                                    <input type="time" id="user_name"
                                                                                           name="mondayopen[]"
                                                                                           class="starttime">
                                                                                    <span>Opening</span>
                                                                                </div>

                                                                                <div class="input-div">
                                                                                    <input type="time" id="user_name"
                                                                                           name="mondayclose[]"
                                                                                           class="endtime">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                <i att="1" class="fa fa-plus add_btn"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="div mb-2 text-end">


                                                                    </div>

                                                                    <h4 class="mb-0 days">Tuesday</h4>
                                                                    <div class="disabl_prnt">
                                                                        <div class="d-flex checkbtn">
                                                                            <input type="checkbox" id="_24_day2"
                                                                                   name="_24_day2" atty="1"
                                                                                   class="setbtn">
                                                                            <label for="_24_day2"> Available 24
                                                                                Hours </label>
                                                                            <input type="checkbox" id="holiday32"
                                                                                   name="holiday2"
                                                                                   class="setbtn">
                                                                            <label for="holiday32"> Holiday </label>
                                                                        </div>

                                                                        <input type="number" name="count[]"
                                                                               class="count2 d-none"
                                                                               value="0">

                                                                        <div class="tuesday main1">
                                                                            <div class="main2 input-text mb-2">
                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name"
                                                                                           class="starttime"
                                                                                           name="tuesdayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time"
                                                                                           placeholder="none"
                                                                                           id="user_name"
                                                                                           class="endtime"
                                                                                           name="tuesdayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                <i att="2" class="fa fa-plus add_btn"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div mb-2 text-end">


                                                                    </div>

                                                                    <h4 class="mb-0 days">Wednesday</h4>
                                                                    <div class="disabl_prnt">
                                                                        <div class="d-flex checkbtn">
                                                                            <input type="checkbox" id="_24_day3"
                                                                                   name="_24_day3" atty="1"
                                                                                   class="setbtn">
                                                                            <label for="_24_day3"> Available 24
                                                                                Hours </label>
                                                                            <input type="checkbox" id="holiday33"
                                                                                   name="holiday3"
                                                                                   class="setbtn">
                                                                            <label for="holiday33"> Holiday </label>
                                                                        </div>

                                                                        <input type="number" name="count[]"
                                                                               class="count3 d-none"
                                                                               value="0">
                                                                        <div class="wednesday main1">
                                                                            <div class="main2 input-text mb-2">

                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name"
                                                                                           class="starttime"
                                                                                           name="wednesdayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time"
                                                                                           placeholder="none"
                                                                                           id="user_name"
                                                                                           class="endtime"
                                                                                           name="wednesdayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                <i att="3" class="fa fa-plus add_btn"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div mb-2 text-end">


                                                                    </div>

                                                                    <h4 class="mb-0 days">Thursday</h4>
                                                                    <div class="disabl_prnt">
                                                                        <div class="d-flex checkbtn">
                                                                            <input type="checkbox" id="_24_day4"
                                                                                   name="_24_day4" atty="1"
                                                                                   class="setbtn">
                                                                            <label for="_24_day4"> Available 24
                                                                                Hours </label>

                                                                            <input type="checkbox" id="holiday34"
                                                                                   name="holiday4"
                                                                                   class="setbtn">
                                                                            <label for="holiday34"> Holiday </label>
                                                                        </div>

                                                                        <input type="number" name="count[]"
                                                                               class="count4 d-none"
                                                                               value="0">
                                                                        <div class="thursday main1">
                                                                            <div class="main2 input-text mb-2">

                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name"
                                                                                           class="starttime"
                                                                                           name="thursdayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time"
                                                                                           placeholder="none"
                                                                                           id="user_name"
                                                                                           class="endtime"
                                                                                           name="thursdayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                <i att="4" class="fa fa-plus add_btn"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div mb-2 text-end">


                                                                    </div>

                                                                    <h4 class="mb-0 days">Friday</h4>
                                                                    <div class="disabl_prnt">
                                                                        <div class="d-flex checkbtn">
                                                                            <input type="checkbox" id="_24_day5"
                                                                                   name="_24_day5" atty="1"
                                                                                   class="setbtn">
                                                                            <label for="_24_day5"> Available 24
                                                                                Hours </label>

                                                                            <input type="checkbox" id="holiday35"
                                                                                   name="holiday5"
                                                                                   class="setbtn">
                                                                            <label for="holiday35"> Holiday </label>
                                                                        </div>

                                                                        <input type="number" name="count[]"
                                                                               class="count5 d-none"
                                                                               value="0">

                                                                        <div class="friday main1">
                                                                            <div class="main2 input-text mb-2">

                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name"
                                                                                           name="fridayopen[]"
                                                                                           class="starttime">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time"
                                                                                           placeholder="none"
                                                                                           id="user_name"
                                                                                           class="endtime"
                                                                                           name="fridayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                <i att="5" class="fa fa-plus add_btn"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div mb-2 text-end">


                                                                    </div>

                                                                    <h4 class="mb-0 days">Saturday</h4>
                                                                    <div class="disabl_prnt">
                                                                        <div class="d-flex checkbtn">
                                                                            <input type="checkbox" id="_24_day6"
                                                                                   name="_24_day6" atty="1"
                                                                                   class="setbtn">
                                                                            <label for="_24_day6"> Available 24
                                                                                Hours </label>

                                                                            <input type="checkbox" id="holiday36"
                                                                                   name="holiday6"
                                                                                   class="setbtn">
                                                                            <label for="holiday36"> Holiday </label>
                                                                        </div>

                                                                        <input type="number" name="count[]"
                                                                               class="count6 d-none"
                                                                               value="0">

                                                                        <div class="saturday main1">
                                                                            <div class="main2 input-text mb-2">

                                                                                <div class="main3 input-div">
                                                                                    <input type="time" id="user_name"
                                                                                           class="starttime"
                                                                                           name="saturdayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time" id="user_name"
                                                                                           class="endtime"
                                                                                           name="saturdayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                <i att="6" class="fa fa-plus add_btn"
                                                                                   aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div mb-2 text-end">


                                                                    </div>

                                                                    <h4 class="mb-0 days">Sunday</h4>
                                                                    <div class="disabl_prnt">
                                                                        <div class="d-flex checkbtn">
                                                                            <input type="checkbox" id="_24_day7"
                                                                                   name="_24_day7" atty="1"
                                                                                   class="setbtn">
                                                                            <label for="_24_day7"> Available 24
                                                                                Hours </label>

                                                                            <input type="checkbox" id="holiday37"
                                                                                   name="holiday7"
                                                                                   class="setbtn">
                                                                            <label for="holiday37"> Holiday </label>
                                                                        </div>

                                                                        <input type="number" name="count[]"
                                                                               class="count7 d-none"
                                                                               value="0">

                                                                        <div class="sunday main1">
                                                                            <div class="main2 input-text mb-2">

                                                                                <div class="main3 input-div">
                                                                                    <input type="time" placeholder="dss"
                                                                                           id="user_name"
                                                                                           class="starttime"
                                                                                           name="sundayopen[]">
                                                                                    <span>Opening</span>
                                                                                </div>
                                                                                <div class="input-div">
                                                                                    <input type="time"
                                                                                           placeholder="none"
                                                                                           id="user_name"
                                                                                           class="endtime"
                                                                                           name="sundayclose[]">
                                                                                    <span>Closing</span>
                                                                                </div>
                                                                                <i att="7"
                                                                                   class="fa fa-plus add_btn"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div mb-2 text-end">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="button" name="previous"
                                                               class="custom_pre action-button-previous"
                                                               value="Previous"/>
                                                        <input type="submit" name="make_payment"
                                                               class="action-button testbtn"
                                                               value="Finish"/>
                                                    </div>

                                                </fieldset>
                                                <fieldset>

                                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 52 52">
                                                        <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                                                fill="none"/>
                                                        <path class="checkmark__check" fill="none"
                                                              d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
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


                </div>

            </div>
        </div>
    </div>
    <!--  edit package -->
    <div class="modal fade" id="packageSection2" aria-hidden="true" aria-labelledby="addPackageLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body" id="modelbody2">
                    <!-- MultiStep Form -->


                </div>

            </div>
        </div>
    </div>




    <!-- NavBar section end -->
    <section class="breadCrumbs mt-lg-5 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ ('/user') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Restaurant</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter div -->
    <section>
        <div class="container">
            <div class="row text-center mt-5">
                <div class="col-md-4 col-6">
                    <div class="counter border-rounded-40">
                        <p class="count-text fontw700">Total Restaurants</p>
                        <h2 class="timer count-title count-number" data-to="50" data-speed="1500"></h2>
                        <p class="count-text fontw500">All</p>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="counter border-rounded-40">
                        <p class="count-text fontw700">Booking</p>
                        <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                        <p class="count-text fontw500">Last 30 Days</p>
                    </div>
                </div>
                <div class="col-md-4 col-6 pt-3 pt-md-0">
                    <div class="counter border-rounded-40">
                        <p class="count-text fontw700">Impression</p>
                        <h2 class="timer count-title count-number" data-to="6789" data-speed="1500"></h2>
                        <p class="count-text fontw500">Last 30 Days</p>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-6">
            <div class="counter">
              <i class="fa fa-bug fa-2x"></i>
              <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
              <p class="count-text ">Coffee With Clients</p>
            </div>
          </div> -->
            </div>
        </div>
    </section>
    <!-- Counter div -->

    <!-- restaurant -->

    <section class="restaurant my-5">
        <input type="hidden" value="" id="current_form">
        <div class="container">
            <div class="row">
                <div class="col-6 py-4">
                    <h3 class="mb-3 fontw700">Restaurants</h3>
                </div>
                <div class="col-6 text-right d-flex justify-content-end py-4">
                    <button type="button" class="btn btn-green rounded-pill change_model" form-id="addResturentForm"
                            data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Add New Restaurant
                    </button>

                    <button id="editmodel" type="button" class="d-none" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop2">test btn
                    </button>
                </div>
            </div>

            <!-- Modal -->

            <div class="row py-3">
                @foreach($rests as $rest)
                    <div class="col-lg-3 col-12 col-sm-6 my-2">
                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                            <img src="{{ asset('upload') }}/{{$rest->logo}}" alt=""
                                 class="img-fluid position-relative border-rounded p-2">
                            <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                                <span class="badge bg-creamy text-danger font-9">4.9</span>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title font-16">{{$rest->business}}</h4>
                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                </div>
                                <!-- <div class="div">
                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                        Trent</p>
                                </div> -->

                                <!-- <div>
                                    <p class="font-9 mb-0 my-3">From</p>

                                </div> -->

                                <div class="pricing-review d-flex justify-content-between">
                                    <div class="pricing">
                                        <!-- <h4 class="font-15">$895.44</h4> -->
                                    </div>
                                    <div class="font-10">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <div class="varies">
                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108) test</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="variesDiv px-3">
                                <div class="pricing-varies">
                                    <!-- <p class="mb-3 text-grey-one font-13">Price Varies</p> -->
                                </div>
                            </div>
                            <div class="proceding px-3 d-flex justify-content-evenly">
                                <div class="">
                                    <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                         data-bs-placement="right" title="Add">
                                        <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                         data-bs-placement="right" title="View">
                                        <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="">
                                    <div restid="{{$rest->id}}"
                                         class="d-inline-block rounded-1 bg-green-two p-2 restedit change_model"
                                         form-id="editResturentForm">
                                        <i class="fa fa-pencil-square-o text-white font-24 " aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>


        </div>
    </section>

    <!-- Package -->
    <section class="package my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6 py-4">
                    <h3 class="mb-3 fontw700">Packages </h3>
                </div>
                <div class="col-6 text-right d-flex justify-content-end py-4">
                    <button class="btn btn-green rounded-pill" data-bs-target="#packageSection" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Add New Package
                    </button>
                </div>
                <div class="col-6 text-right d-flex justify-content-end py-4">
                    <button class="btn btn-green rounded-pill editpakkage d-none" data-bs-target="#packageSection2"
                            data-bs-toggle="modal"
                            data-bs-dismiss="modal">editPackage
                    </button>
                </div>

            </div>
            <div class="row py-3">
                @foreach($pkgs as $pkg)
                    <div class="col-lg-3 col-12 col-sm-6 my-2">
                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                            <img src="{{ asset('img/banner.jpg') }}" alt=""
                                 class="img-fluid position-relative border-rounded p-2">
                            <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                                <span class="badge bg-creamy text-danger font-9">4.9</span>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title font-16">{{$pkg->pkg_name}}</h4>
                                    <i class="fa fa-heart-o text-grey-three pt-2"></i>
                                </div>
                                <div class="div">
                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                        Trent</p>
                                </div>

                                <div>
                                    <p class="font-9 mb-0 my-3">From</p>

                                </div>

                                <div class="pricing-review d-flex justify-content-between">
                                    <div class="pricing">
                                        <h4 class="font-15">$895.44</h4>
                                    </div>
                                    <div class="font-10">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <div class="varies">
                                            <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="variesDiv px-3">
                                <div class="pricing-varies">
                                    <p class="mb-3 text-grey-one font-13">Price Varies</p>
                                </div>
                            </div>
                            <div class="proceding px-3 d-flex justify-content-evenly">
                                <div class="">
                                    <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                         data-bs-placement="right" title="Add">
                                        <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                         data-bs-placement="right" title="View">
                                        <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="">
                                    <div pkgid="{{$pkg->id}}" class="d-inline-block rounded-1 bg-green-two p-2 pkgedit"
                                         data-bs-toggle="tooltip"
                                         data-bs-placement="left" title="Edit">
                                        <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- Still have a question -->
    <section class="faqs my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mb-3 fontw700 text-center">Still have a question?</h3>
                    <p class="text-center text-grey-three">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-md-5 py-md-5 py-3">
                    <div class="bg-green-two text-white border-rounded-1 text-center p-0">
                        <div class=" py-5">
                            <div class="d-inline-block rounded-circle bg-white p-2">
                                <i class="fa fa-headphones bg-white rounded-circle text-seagreen1 font-45"
                                   aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="heading">
                            <h4>For Sales</h4>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <p class="text-white-50" style="max-width: 55%;">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                            </p>
                        </div>
                        <div class="sale py-4">
                            <p class="mb-0">sales@xyz.com</p>
                            <p class="">+977(985)344-33-42</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 py-md-5 py-3">
                    <div class="bg-purple-1 text-white border-rounded-1 text-center p-0">
                        <div class=" py-5">
                            <div class="d-inline-block rounded-circle bg-white p-2">
                                <i class="fa fa-question-circle-o rounded-circle text-purple-1 font-45"
                                   aria-hidden="true">
                                </i>
                            </div>
                        </div>
                        <div class="heading">
                            <h4>Help & Support</h4>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <p class="text-white-50" style="max-width: 55%;">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                            </p>
                        </div>
                        <div class="help py-4">
                            <p class="mb-0">help@xyz.com</p>
                            <p class="">+977(985)344-33-42</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-1"></div>
            </div>
        </div>
    </section>
    <!-- Still have a question -->


    <!-- Bootstrap5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Bootstrap5 CDN -->

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <!-- Jquery CDN -->

    <script src="{{ asset('js/addPackage.js')}}"></script>
    <script src="{{ asset('js/event.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bussiness.js') }}"></script>
    <script src="{{ asset('js/event2.js') }}"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>






    <script>
        $(document).ready(function () {
            (function ($) {
                $.fn.countTo = function (options) {
                    options = options || {};

                    return $(this).each(function () {
                        // set options for current element
                        var settings = $.extend({},
                            $.fn.countTo.defaults, {
                                from: $(this).data("from"),
                                to: $(this).data("to"),
                                speed: $(this).data("speed"),
                                refreshInterval: $(this).data("refresh-interval"),
                                decimals: $(this).data("decimals")
                            },
                            options
                        );

                        // how many times to update the value, and how much to increment the value on each update
                        var loops = Math.ceil(settings.speed / settings.refreshInterval),
                            increment = (settings.to - settings.from) / loops;

                        // references & variables that will change with each update
                        var self = this,
                            $self = $(this),
                            loopCount = 0,
                            value = settings.from,
                            data = $self.data("countTo") || {};

                        $self.data("countTo", data);

                        // if an existing interval can be found, clear it first
                        if (data.interval) {
                            clearInterval(data.interval);
                        }
                        data.interval = setInterval(updateTimer, settings.refreshInterval);

                        // initialize the element with the starting value
                        render(value);

                        function updateTimer() {
                            value += increment;
                            loopCount++;

                            render(value);

                            if (typeof settings.onUpdate == "function") {
                                settings.onUpdate.call(self, value);
                            }

                            if (loopCount >= loops) {
                                // remove the interval
                                $self.removeData("countTo");
                                clearInterval(data.interval);
                                value = settings.to;

                                if (typeof settings.onComplete == "function") {
                                    settings.onComplete.call(self, value);
                                }
                            }
                        }

                        function render(value) {
                            var formattedValue = settings.formatter.call(self, value, settings);
                            $self.html(formattedValue);
                        }
                    });
                };

                $.fn.countTo.defaults = {
                    from: 0, // the number the element should start at
                    to: 0, // the number the element should end at
                    speed: 1000, // how long it should take to count between the target numbers
                    refreshInterval: 100, // how often the element should be updated
                    decimals: 0, // the number of decimal places to show
                    formatter: formatter, // handler for formatting the value before rendering
                    onUpdate: null, // callback method for every time the element is updated
                    onComplete: null // callback method for when the element finishes updating
                };

                function formatter(value, settings) {
                    return value.toFixed(settings.decimals);
                }
            })(jQuery);

            jQuery(function ($) {
                // custom formatting example
                $(".count-number").data("countToOptions", {
                    formatter: function (value, options) {
                        return value
                            .toFixed(options.decimals)
                            .replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
                    }
                });

                // start all the timers
                $(".timer").each(count);

                function count(options) {
                    var $this = $(this);
                    options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                    $this.countTo(options);
                }
            });

        });
    </script>



    <script>
        @if(Session::has('success'))

        toastr.success("{{ session('success') }}");

        @endif

        @if(Session::has('error'))

        toastr.error("{{ session('error') }}");

        @endif




        @if($errors-> any())

        @foreach($errors-> all() as $error)
        toastr.error("{{ $error }}");

        @endforeach
        @endif
    </script>
    <script>
        $(document).ready(function () {
            $(document).on("click", ".restedit", function () {

                var id = $(this).attr('restid');
                // alert();

                $.ajax({
                    type: 'get',
                    url: '{{url('user/editrest')}}',
                    data: {'id': id},

                    success: function (data) {

                        jQuery.noConflict();

                        $('#modalbod').empty().append(data);
                        $('#editmodel').click();
                        initialize('map_canvas2');

                        // $('#staticBackdrop2').modal('show');


                    },

                });
            });

            $(document).on("click", ".pkgedit", function () {

                var id = $(this).attr('pkgid');
                // alert();

                $.ajax({
                    type: 'get',
                    url: '{{url('user/edit_package')}}',
                    data: {'id': id},
                    success: function (data) {


                        $('#modelbody2').empty().append(data);
                        $('.editpakkage').click();
                        // jQuery.noConflict();


                        // $('#staticBackdrop2').modal('show');


                    },

                });
            });

        });
    </script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    {{--   map--}}
    <script type="text/javascript">
        var map = null;
        var marker = null;


        var infowindow = new google.maps.InfoWindow({
            size: new google.maps.Size(150, 50)
        });


        function createMarker(latlng, name, html) {
            var contentString = html;
            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                zIndex: Math.round(latlng.lat() * -100000) << 5
            });

            google.maps.event.addListener(marker, 'click',
                function () {
                    infowindow.setContent(contentString);
                    infowindow.open(map, marker);
                });
            google.maps.event.trigger(marker, 'click');
            return marker;
        }


        function initialize(data) {


            var myOptions = {
                zoom: 8,
                center: new google.maps.LatLng(43.907787, -79.359741),
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle
                        .DROPDOWN_MENU
                },
                navigationControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            map = new google.maps.Map(document.getElementById(data),
                myOptions);


            google.maps.event.addListener(map, 'click',
                function () {
                    infowindow.close();
                });

            google.maps.event.addListener(map, 'click',
                function (event) {
                    //call function to create marker

                    var s = event.latLng;
                    $("#lati").val(s);
                    var lat = $("#lati").val();
                    var divided = lat.split(" ");
                    var divided2 = divided[0].split("(");
                    var divided3 = divided2[1].split(",");
                    var final_lat = divided3[0];

                    var div_lag1 = divided[1].split(")");
                    var final_log = div_lag1[0];


                    if (marker) {
                        marker.setMap(null);
                        marker = null;
                    }
                    marker = createMarker(event.latLng,
                        "name", "<b>Location</b><br>" +
                        event.latLng);
                });

        }
    </script>


    <script>
        $(document).ready(function () {

            $('.change_model').click(function () {
                var id = $(this).attr('form-id');
                $('#current_form').val(id);
            });

            // alert('fff');
            jQuery.noConflict();
            $('.dropify2').dropify();
            $('.dropify2nd').dropify();

            //Near checkboxes
            $(document).on('click', '.setbtn', function () {


                $(this).siblings('input:checkbox').prop('checked', false);
                // alert($(this).attr("name"));

                // $(this).closest(".disabl_prnt").children(".main1").addClass('disableddiv');

                if ($(this).attr("atty") == 1) {
                    if ($(this).is(":checked")) {
                        $(this).closest(".disabl_prnt").children(".main1").addClass('disableddiv');
                    } else {
                        $(this).closest(".disabl_prnt").children(".main1").removeClass('disableddiv');
                    }
                } else {
                    $(this).closest(".disabl_prnt").children(".main1").removeClass('disableddiv');
                }


            });


            $(document).on("click", ".croos_btn", function () {
                formnumbert2 = 0;
                $('#modalbod').empty()

            });

        });
    </script>

@endsection
