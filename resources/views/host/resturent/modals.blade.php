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
                                    <form method="post" action="{{ url('user/addrest') }}"
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
                                            <ul class="progressbar" id="progressbar" style="padding-left: 124px;">
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

                                                    <h2 class="fs-title">Package Description</h2>

                                                    <textarea name="desc" class="mt-2" id="" cols="5" rows="3"  required require></textarea>

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
                                                        <input type="number" class="form-control" name="amount"
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

                                                    <div>
                                                        <h2 class="fs-title mt-4">Add Tags</h2>
                                                        <select class="form-control w-100 tag-select" multiple="multiple" name="tags[]">

                                                        </select>
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

