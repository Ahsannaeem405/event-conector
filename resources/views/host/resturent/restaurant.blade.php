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

            width:100% !important;
        }

        .dropify-render {

            width: 100%;
            height: 100%;

        }
        .dropify-wrapper .dropify-preview .dropify-render img{
            padding:20px;
        }
        .file-icon p {
            font-size: 25px !important;
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




@include('host.resturent.modals')


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
                        <h2 class="timer count-title count-number" data-to="{{$response['resturent']}}" data-speed="1500"></h2>
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
                                    <i class="fa fa-heart  {{ $rest->favouriterest ? "text-danger" : "text-grey-three" }}  pt-2 addfav" id="{{$rest->id}}" businessid="restaurant"></i>
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
                    <button class="btn btn-green rounded-pill change_model" data-bs-target="#packageSection" form-id="addPackageForm"  data-bs-toggle="modal"
                            data-bs-dismiss="modal">Add New Package
                    </button>
                </div>
                <div class="col-6 text-right d-flex justify-content-end py-4">
                    <button class="btn btn-green rounded-pill editpakkage d-none"  data-bs-target="#packageSection2"
                            data-bs-toggle="modal"
                            data-bs-dismiss="modal">editPackage
                    </button>
                </div>

            </div>
            <div class="row py-3">
                @foreach($pkgs as $pkg)
                    <div class="col-lg-3 col-12 col-sm-6 my-2">
                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                            <img src="{{ asset('upload') }}/{{$pkg->getimage()}}" alt=""
                                 class="img-fluid position-relative border-rounded p-2">
                            <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                                <span class="badge bg-creamy text-danger font-9">4.9</span>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title font-16">{{$pkg->pkg_name}}</h4>
                                    <i class="fa fa-heart {{ $pkg->favourite ? "text-danger" : "text-grey-three" }} pt-2 addfav" id="{{$pkg->id}}" businessid="package"></i>
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
                                    <div pkgid="{{$pkg->id}}" class="d-inline-block rounded-1 bg-green-two p-2 pkgedit change_model" form-id="editPackageForm"
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

@endsection
@section('js')



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
        $(document).ready(function () {
            $(document).on("click", ".restedit", function () {

                var id = $(this).attr('restid');
                // alert();

                $.ajax({
                    type: 'get',
                    url: '{{url('user/editrest')}}',
                    data: {'id': id},

                    success: function (data) {

                        //jQuery.noConflict();

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
                        // //jQuery.noConflict();


                        // $('#staticBackdrop2').modal('show');


                    },

                });
            });

        });
    </script>

    {{--   map--}}
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBQ7SLGk0rhZBFdEEqKym949WqDeWNZGzY"></script>

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
            //jQuery.noConflict();
            $('.dropify2').dropify();
            $('.dropify2nd').dropify();



        });
    </script>
    <script type="text/javascript" src="{{ asset('js/favourite.js') }}"></script>
@endsection
