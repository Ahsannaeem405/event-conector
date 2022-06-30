@extends('layouts.main')


@section('body')
<style type="text/css">
    .input-text {
        margin: 15px 0!important;
    }
    .progress-bar-1 {
        margin-top: unset!important;

    }
    input[type="file"] {
    width: 100%;
    height: 40px;
    border-radius: 5px
    }
    input[type="number"] {
    width: 100%;
    height: 40px;
    border-radius: 5px
    }
    .intl-tel-input{
        width: 100%;
    }
    .text {
        margin-top: unset!important;
    }
    .mainy {
        padding-top: 20px!important;
    }
    .input-text2{
        margin: 30px 0!important;

    }
    .btn-close{
        background-color: white!important;
        padding: 3%!important;
    }
    .setbtn {
        margin-top: 5px !important;
        margin-left: 12px !important;
    }
    .days {
        margin-right: 17px !important;
    }
    .checkbtn{
        justify-content: right;
    }
    .clos_icon{
        color: red;
        line-height: 2.2;
    }
    .add_btn{
        color: green;
        line-height: 2.3;
    }


</style>
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">

    <section class="event-step" style="background-image: url('{{ asset('img/banner4.jpg') }}'); background-position: center; background-size: cover;">
        <div class="container bg-transparent">
            <div class="card border-0">
                <div class="form">
                    <div class="left-side">
                        <div class="left-heading">
                            <h3>Event Planner</h3>
                        </div>
                        <div class="steps-content">
                            <h3>Step <span class="step-number">1</span></h3>

                        </div>
                        <ul class="progress-bar-1"
                            style="display: flex;flex-direction: column;justify-content: center;overflow: hidden;color: #fff;text-align: center;white-space: nowrap;transition: width .6s ease;">
                            <li class="active">Welcome Onboard</li>
                            <li>Personal Information</li>
                            <li>Location</li>
                            <li>Opening Hours</li>
                            <li>Processing</li>
                        </ul>



                    </div>
                      <div class="right-side">
                       <form method="post" action="{{ url('/addplanner') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="main mainy active">
                                                    <div class="text">
                                                        <h2>Welcome Onboard</h2>
                                                        <p>Please provide the following information</p>
                                                    </div>

                                                    <div class="input-text">
                                                        <div class="input-div">

                                                            <label>Business Category</label>
                                                            <select name="category" required require >
                                                                @foreach($catgs as $catg)
                                                                <option value="{{ $catg->id }}"><a class="dropdown-item"
                                                                        href="#">{{ $catg->name}}</a></option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="input-text">
                                                        <div class="input-div">
                                                            <label>Business Name</label>
                                                            <input type="text" name="business"  required require>
                                                        </div>
                                                    </div>
                                                    <div class="input-text">
                                                        <div class="input-div">
                                                            <label>Business Logo</label>
                                                            <input type="file" name="file"  required require>
                                                        </div>
                                                    </div>

                                                    <div class="input-text" style="margin-bottom: 0PX!important ;">

                                                            <label>Phone No</label>
                                                    </div>


                                                    <input type="number" class="form-control" placeholder="Phone #" required require name="phone"  id="phone" value="{{ old('phone') }}">
                                                    <input type="hidden" id="contrycode" name="contrycode">







                                                    <div class="buttons py-4">
                                                        <button type="button" class="next_button">Next Step</button>
                                                    </div>
                                                </div>





                                                <div class="main">

                                                    <div class="text">
                                                        <h2>Almost There!</h2>
                                                        <p>Please provide some of your information</p>
                                                    </div>
                                                    <div class="input-text  input-text2">
                                                        <div class="input-div">

                                                            <input type="text" name="name" required="" require="" id="user_name">
                                                            <span>First Name</span>
                                                        </div>
                                                        <div class="input-div">
                                                             <input type="text"  name="lastname"  id="user_name" value="{{ old('lastname') }}" required="" require="">
                                                            <span>Last Name</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-text  input-text2">
                                                        <div class="input-div">
                                                            <input type="text"  name="email"  id="email" value="{{ old('email') }}" required="" require="">
                                                            <span>E-mail Address</span>
                                                        </div>
                                                    </div>
                                                    <div class="input-text input-text2">
                                                        <div class="input-div">
                                                             <input id="password" type="password" required  name="password" autocomplete="new-password">
                                                            <span>Password</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input id="password-confirm" type="password"  required autocomplete="new-password" name="password_confirmation">
                                                            <span>Confirm password</span>
                                                        </div>
                                                    </div>

                                                    <div class="buttons button_space">
                                                        <button class="back_button">Back</button>
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




                                                                <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
                                                                <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
                                                                <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBQ7SLGk0rhZBFdEEqKym949WqDeWNZGzY">
                                                                </script>
                                                                <script type="text/javascript" src="{{ asset('downloadxml.js') }}"></script>
                                                                <style type="text/css">
                                                                    html,
                                                                    body {
                                                                        height: 100%;
                                                                    }

                                                                    .gm-style-iw-t {
                                                                        display: none;
                                                                    }
                                                                    #map1{
                                                                        max-height: 200px;
                                                                    }

                                                                </style>
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

                                                                        google.maps.event.addListener(marker, 'click', function() {
                                                                            infowindow.setContent(contentString);
                                                                            infowindow.open(map, marker);
                                                                        });
                                                                        google.maps.event.trigger(marker, 'click');
                                                                        return marker;
                                                                    }



                                                                    function initialize() {


                                                                        var myOptions = {
                                                                            zoom: 8,
                                                                            center: new google.maps.LatLng(43.907787, -79.359741),
                                                                            mapTypeControl: true,
                                                                            mapTypeControlOptions: {
                                                                                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                                                                            },
                                                                            navigationControl: true,
                                                                            mapTypeId: google.maps.MapTypeId.ROADMAP
                                                                        }
                                                                        map = new google.maps.Map(document.getElementById("map_canvas"),
                                                                            myOptions);

                                                                        google.maps.event.addListener(map, 'click', function() {
                                                                            infowindow.close();
                                                                        });

                                                                        google.maps.event.addListener(map, 'click', function(event) {
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
                                                                            marker = createMarker(event.latLng, "name", "<b>Location</b><br>" + event.latLng);
                                                                        });

                                                                    }
                                                                </script>

                                                                <body style="margin:0px; padding:0px;" onload="initialize()">

                                                                    <!-- you can use tables or divs for the overall layout -->
                                                                    <table border="1">
                                                                        <tr>
                                                                            <td>
                                                                                <div id="map_canvas" style="width: 400px; height:200px"></div>
                                                                            </td>

                                                                        </tr>
                                                                    </table>

                                                                    <noscript>
                                                                        <p><b>JavaScript must be enabled in order for you to use Google Maps.</b>
                                                                            However, it seems JavaScript is either disabled or not supported by your
                                                                            browser.
                                                                            To view Google Maps, enable JavaScript by changing your browser options, and
                                                                            then
                                                                            try again.</p>
                                                                    </noscript>
                                                                    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
                                                                    </script>
                                                                    <script type="text/javascript">
                                                                        _uacct = "UA-162157-1";
                                                                        urchinTracker();
                                                                    </script>
                                                                    <script type="text/javascript">
                                                                        <!--
                                                                        google_ad_client = "pub-8586773609818529";
                                                                        google_ad_width = 728;
                                                                        google_ad_height = 90;
                                                                        google_ad_format = "728x90_as";
                                                                        google_ad_type = "text";
                                                                        google_ad_channel = "";
                                                                        google_color_border = "CCCCCC";
                                                                        google_color_bg = "FFFFFF";
                                                                        google_color_link = "000000";
                                                                        google_color_url = "666666";
                                                                        google_color_text = "333333";
                                                                        //
                                                                        -->
                                                                    </script>
                                                                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                                                                    </script>
                                                                </body>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-text">
                                                        <div class="input-div">
                                                            <input type="text" name="address"  required require>
                                                            <span>Address</span>
                                                        </div>
                                                    </div>


                                                    <div class="buttons button_space">
                                                        <button class="back_button" type="button">Back</button>
                                                        <button class="next_button" type="button">Next Step</button>
                                                    </div>
                                                </div>
                                                <div class="main" style="overflow-y: scroll; height:496px;">

                                                    <div class="text">
                                                        <h2>Openning And Closing Hours</h2>
                                                        <p>Please provide your restaurant opening and closing hours</p>
                                                    </div>
                                                    <div class="hoursmaindiv">
                                                        <input type="hidden" value="0" name="repeatt" class="repeatt">

                                                        <input type="radio" id="_24by7" name="_24by7" value="1" class="_24by7open" checked>
                                                        <label for="_24by7"> Available 24/7 </label>

                                                        <input type="radio" id="time" name="_24by7" value="0"  class="_24by7open">
                                                        <label for="time"> Open in specific hours</label>

                                                        <div class="hoursdiv d-none">

                                                                <h4 class="mb-0 days">Monday</h4>
                                                                <div class="d-flex checkbtn">
                                                                    <input type="checkbox" id="_24_1stday" name="_24_1stday"  class="setbtn">
                                                                    <label for="_24_1stday"> Available 24 Hours </label>


                                                                    <input type="checkbox" id="holiday1" name="holiday1"  class="setbtn">
                                                                    <label for="holiday1"> Holiday </label>
                                                                </div>

                                                            <input type="number" name="count[]" class="count1 d-none" value="0">

                                                            <div class="monday main1">
                                                                <div class="main2 input-text mb-2" >
                                                                    <div class="main3 input-div">

                                                                        <input type="time" id="user_name" name="mondayopen[]" class="starttime">
                                                                        <span>Opening</span>
                                                                    </div>

                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name"
                                                                            name="mondayclose[]" class="endtime">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="1" class="fa fa-plus add_btn" aria-hidden="true"></i>
                                                                </div>
                                                            </div>

                                                            <div class="div mb-2 text-end">


                                                            </div>

                                                                <h4 class="mb-0 days">Tuesday</h4>
                                                                <div class="d-flex checkbtn">
                                                                    <input type="checkbox" id="_24_2ndday" name="_24_2ndday" class="setbtn">
                                                                    <label for="_24_2ndday"> Available 24 Hours </label>
                                                                    <input type="checkbox" id="holiday2" name="holiday2" class="setbtn">
                                                                    <label for="holiday2"> Holiday </label>
                                                                </div>

                                                            <input type="number" name="count[]" class="count2 d-none" value="0">

                                                            <div class="tuesday main1">
                                                                <div class="main2 input-text mb-2">
                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name" class="starttime"
                                                                            name="tuesdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="tuesdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="2" class="fa fa-plus add_btn" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">


                                                            </div>

                                                                <h4 class="mb-0 days">Wednesday</h4>
                                                                <div class="d-flex checkbtn">
                                                                    <input type="checkbox" id="_24_3rdday" name="_24_3rdday" class="setbtn">
                                                                    <label for="_24_3rdday"> Available 24 Hours </label>
                                                                    <input type="checkbox" id="holiday3" name="holiday3" class="setbtn">
                                                                    <label for="holiday3"> Holiday </label>
                                                                </div>

                                                            <input type="number" name="count[]" class="count3 d-none" value="0">
                                                            <div class="wednesday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name" class="starttime"
                                                                            name="wednesdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="wednesdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="3" class="fa fa-plus add_btn" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">


                                                            </div>

                                                                <h4 class="mb-0 days">Thursday</h4>
                                                                <div class="d-flex checkbtn">
                                                                    <input type="checkbox" id="_24_4thday" name="_24_4thday" class="setbtn">
                                                                    <label for="_24_4thday"> Available 24 Hours </label>

                                                                    <input type="checkbox" id="holiday4" name="holiday4" class="setbtn">
                                                                    <label for="holiday4"> Holiday </label>
                                                                </div>

                                                            <input type="number" name="count[]" class="count4 d-none" value="0">
                                                            <div class="thursday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name" class="starttime"
                                                                            name="thursdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="thursdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="4" class="fa fa-plus add_btn" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">


                                                            </div>

                                                                <h4 class="mb-0 days">Friday</h4>
                                                                <div class="d-flex checkbtn">
                                                                    <input type="checkbox" id="_24_5thday" name="_24_5thday" class="setbtn">
                                                                    <label for="_24_5thday"> Available 24 Hours </label>

                                                                    <input type="checkbox" id="holiday5" name="holiday5" class="setbtn">
                                                                    <label for="holiday5"> Holiday </label>
                                                                </div>

                                                            <input type="number" name="count[]" class="count5 d-none" value="0">

                                                            <div class="friday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" id="user_name" name="fridayopen[]" class="starttime">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="fridayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i att="5" class="fa fa-plus add_btn" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">


                                                            </div>

                                                                <h4 class="mb-0 days">Saturday</h4>
                                                                <div class="d-flex checkbtn">
                                                                    <input type="checkbox" id="_24_6thday" name="_24_6thday" class="setbtn">
                                                                    <label for="_24_6thday"> Available 24 Hours </label>

                                                                    <input type="checkbox" id="holiday6" name="holiday6" class="setbtn">
                                                                    <label for="holiday6"> Holiday </label>
                                                                </div>

                                                            <input type="number" name="count[]" class="count6 d-none" value="0">

                                                            <div class="saturday main1">
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
                                                                    <i att="6" class="fa fa-plus add_btn" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">


                                                            </div>

                                                                <h4 class="mb-0 days">Sunday</h4>
                                                                <div class="d-flex checkbtn">
                                                                    <input type="checkbox" id="_24_7thday" name="_24_7thday" class="setbtn">
                                                                    <label for="_24_7thday"> Available 24 Hours </label>

                                                                    <input type="checkbox" id="holiday7" name="holiday7" class="setbtn">
                                                                    <label for="holiday7"> Holiday </label>
                                                                </div>

                                                            <input type="number" name="count[]" class="count7 d-none" value="0">

                                                            <div class="sunday main1">
                                                                <div class="main2 input-text mb-2">

                                                                    <div class="main3 input-div">
                                                                        <input type="time" placeholder="dss" id="user_name" class="starttime"
                                                                            name="sundayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="sundayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                    <i  att="7" class="fa fa-plus add_btn"></i>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">


                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="buttons button_space">
                                                        <button class="back_button" type="button">Back</button>
                                                        <button class="next_button" type="submit">Next Step</button>
                                                    </div>
                                                </div>
                                            </form>


                                            <div class="main">
                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 52 52">
                                                    <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                                        fill="none" />
                                                    <path class="checkmark__check" fill="none"
                                                        d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                                </svg>

                                                <div class="text congrats">
                                                    <h2>Congratulations!</h2>
                                                    <p>Your Business has been in our record. Please give sometime for
                                                        review.</p>
                                                </div>


                                                <div
                                                    class="dashBoard d-flex justify-content-end align-items-end mt-5 pt-5">
                                                    <a href=""><button class="btn btn-green">Add New
                                                            Package</button></a>
                                                </div>
                                            </div>
                                        </div>

                </div>
            </div>
        </div>
    </section>





   <!-- Bootstrap5 CDN -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
   crossorigin="anonymous"></script>
<!-- Bootstrap5 CDN -->

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> -->
    <!-- Jquery CDN -->



    <script src="{{ asset('js/event.js') }}"></script>

<script>

  @if(Session::has('success'))

  toastr.success("{{ session('success') }}");

  @endif

  @if(Session::has('error'))

  toastr.error("{{ session('error') }}");

  @endif




@if($errors->any())


        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");

        @endforeach
@endif


</script>


<script>

</script>




<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
    <script>
        var telInput = $("#phone"),

  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");
// initialise plugin
telInput.intlTelInput({
  allowExtensions: true,
  formatOnDisplay: true,
  autoFormat: true,
  autoHideDialCode: true,
  autoPlaceholder: true,
  defaultCountry: "auto",
  ipinfoToken: "yolo",
  nationalMode: false,
  numberType: "MOBILE",
  //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
  preventInvalidNumbers: true,
  separateDialCode: true,
  initialCountry: "auto",
  geoIpLookup: function(callback) {
  $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    var countryCode = (resp && resp.country) ? resp.country : "";
    callback(countryCode);
  });
},
   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
});
var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};
// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});
// on keyup / change flag: reset
telInput.on("keyup change", reset);
</script>



<script>

$( document ).ready(function() {

        $(".selected-flag").bind("DOMSubtreeModified",function(){

            $("#contrycode").val($(this).text()+$("#phone").val());
        });

        $("#subbtn").click(function(){
            $("#contrycode").val($('.selected-flag').text()+$("#phone").val());
        });




});


</script>
 <script type="text/javascript" src="{{ asset('js/bussiness.js') }}"></script>


@endsection
