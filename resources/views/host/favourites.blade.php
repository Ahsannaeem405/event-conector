@extends('layouts.main')


@section('body')
    <!-- <link rel="stylesheet" href="{{ asset('css/event2.css') }}"> -->


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
        .pointer {
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addpackage.css')}}">



    <!-- NavBar section end -->
    <section class="breadCrumbs mt-lg-5 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ ('/user') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">favourites</li>
                        </ol>
                    </nav>
                </div>
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
                                    <i class="pointer fa fa-heart  {{ $rest->favouriterest ? "text-danger" : "text-grey-three" }}  pt-2 addfav" id="{{$rest->id}}" businessid="restaurant"></i>
                                </div>


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
                                         data-bs-placement="right" title="View">
                                        <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
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
                                    <i class="pointer fa fa-heart {{ $pkg->favourite ? "text-danger" : "text-grey-three" }} pt-2 addfav" id="{{$pkg->id}}" businessid="package"></i>
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
                                        <h4 class="font-15">${{$pkg->amount}}</h4>
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

                            <div class="proceding px-3 d-flex justify-content-evenly">
                                <div class="">
                                    <a href="{{ url('/user/package/detail') }}/{{encrypt($pkg->id)}}"><div class="d-inline-block rounded-1 bg-green-two p-2 detailss" pkgid="{{$pkg->id}}" data-bs-toggle="tooltip"
                                         data-bs-placement="right" title="View">
                                        <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                    </div></a>
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


@endsection
