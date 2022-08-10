@extends('layouts.main')


@section('body')
    <!-- navbar section end -->
    <section class="breadCrumbs mt-lg-3 pt-lg-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ ('/user')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Page 2</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- carousil -->
    <div class="gallery">

        <div id="thumbnails" class="thumbnails"></div>
        <div class="main-image-section">
            <img id="main-view" class="main-view rounded-3" src="{{ asset('images/1.jpg') }}"
                 onclick="fullScreenImage();"/>

        </div>
    </div>



    {{--    modal booking--}}
    <div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('user.book.package')}}" method="post">
                        @csrf

                    <div class="row">
                        <div class="col-6 my-2">
                            <lable class="lable"><b>Name:</b> <span>{{$user->name}}</span></lable>

                        </div>

                        <div class="col-6 my-2">
                            <lable class="label"><b>Email:</b> <span>{{$user->email}}</span></lable>

                        </div>
                        <div class="col-6 my-2">
                            <lable class="label"><b>Phone:</b> <span>{{$user->phone}}</span></lable>
                        </div>

                        <div class="col-6 my-2">
                            <lable class="label"><b>Event date:</b> <span class="event_date">{{$user->phone}}</span></lable>
                        </div>

                        <div class="col-6 my-2">
                            <lable class="label"><b>Event Start Time:</b> <span class="event_start_time"></span></lable>
                        </div>

                        <div class="col-6 my-2">
                            <lable class="label"><b>Event End Time:</b> <span class="event_end_time"></span></lable>
                        </div>

                        <div class="col-6 my-2">
                            <lable class="label"><b>Total Person:</b> <span class="total_person"></span></lable>
                        </div>



                        <input type="hidden" name="event_date" class="event_date">
                        <input type="hidden" name="event_start_time" class="event_start_time">
                        <input type="hidden" name="event_end_time" class="event_end_time">
                        <input type="hidden" name="total_person" class="total_person">

                        <input type="hidden" name="package_id" value="{{$pkg->id}}">
                    </div>



                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-green mt-2">Book Now</button>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- carousil -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-6 col-12">
                    <div class="p-2">
                        <p class="text-grey-three font-14">{{$pkg->resturent->business}}</p>
                        <div class="d-flex justify-content-between">
                            <div>
                                <input type="hidden" value="{{$pkg->id}}" name="package_id" id="package_id">
                                <p class="fontw700 font-22 text-blue mb-0">{{$pkg->pkg_name}}</p>
                                <p class="text-blue font-13"><i
                                        class="fa-solid fa-location-dot"></i> {{$pkg->resturent->address}}</p>
                            </div>
                            <div class="d-flex pt-3 font-15">
                                <i class="far fa-heart text-grey-three"></i>
                            </div>

                        </div>
                        <div class="font-10">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> <span class="text-blue fontw600"> 4321 reviews</span>
                        </div>
                        <div id="nav">
                            <ul class="nav nav-tabs my-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                            aria-selected="true">Overview
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#Itinerary" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Itinerary
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#Inclusion" type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Inclusion
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#Reviews" type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">Reviews
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#FAQ"
                                            type="button" role="tab" aria-controls="contact"
                                            aria-selected="false">FAQ
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="d-md-flex  justify-content-between">
                                    <div class="px-5 py-md-0 py-3 text-center">

                                        <i class="far fa-file-alt text-blue font-45"></i>
                                    </div>
                                    <div>
                                        <p class="fontw600 mb-1">A restaurant is a business that prepares and serves
                                            food and drinks to customers. Meals are generally served and eaten on the
                                            premises, but many restaurants also offer take-out and food delivery
                                            services.</p>

                                        <span class="show1 text-blue fontw600" style="cursor: pointer ;">Show
                                            More</span>
                                        <div class="d-flex justify-content-between py-4">
                                            <div>
                                                <h6 class="text-blue">Duration</h6>
                                                <p class="py-2">
                                                    <i class="far fa-clock text-blue font-20"></i> <span
                                                        class="fontw600 font-14">2 Days</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-walking text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Walking</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-tachometer text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Stenuous</span>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between py-1">
                                            <div>
                                                <h6 class="text-blue">Group Size</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-users text-blue font-20"></i> <span
                                                        class="fontw600 font-14">8</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-birthday-cake text-blue font-20"></i><span
                                                        class="fontw600 font-14"> 7+</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-cog text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Apr-Sep</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Itinerary" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="d-flex justify-content-between ">
                                    <div class="px-5">

                                        <i class="far fa-file-alt text-blue font-45"></i>
                                    </div>
                                    <div>
                                        <p class="fontw600 mb-1">A restaurant is a business that prepares and serves
                                            food and drinks to customers. Meals are generally served and eaten on the
                                            premises, but many restaurants also offer take-out and food delivery
                                            services.</p>

                                        <span class="show1 text-blue fontw600" style="cursor: pointer ;">Show
                                            More</span>
                                        <div class="d-flex justify-content-between py-4">
                                            <div>
                                                <h6 class="text-blue">Duration</h6>
                                                <p class="py-2">
                                                    <i class="far fa-clock text-blue font-20"></i> <span
                                                        class="fontw600 font-14">2 Days</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-walking text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Walking</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-tachometer text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Stenuous</span>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between py-1">
                                            <div>
                                                <h6 class="text-blue">Group Size</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-users text-blue font-20"></i> <span
                                                        class="fontw600 font-14">8</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-birthday-cake text-blue font-20"></i><span
                                                        class="fontw600 font-14"> 7+</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-cog text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Apr-Sep</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Inclusion" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="d-flex justify-content-between">
                                    <div class="px-5">

                                        <i class="far fa-file-alt text-blue font-45"></i>
                                    </div>
                                    <div>
                                        <p class="fontw600 mb-1">A restaurant is a business that prepares and serves
                                            food and drinks to customers. Meals are generally served and eaten on the
                                            premises, but many restaurants also offer take-out and food delivery
                                            services.</p>

                                        <span class="show1 text-blue fontw600" style="cursor: pointer ;">Show
                                            More</span>
                                        <div class="d-flex justify-content-between py-4">
                                            <div>
                                                <h6 class="text-blue">Duration</h6>
                                                <p class="py-2">
                                                    <i class="far fa-clock text-blue font-20"></i> <span
                                                        class="fontw600 font-14">2 Days</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-walking text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Walking</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-tachometer text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Stenuous</span>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between py-1">
                                            <div>
                                                <h6 class="text-blue">Group Size</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-users text-blue font-20"></i> <span
                                                        class="fontw600 font-14">8</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-birthday-cake text-blue font-20"></i><span
                                                        class="fontw600 font-14"> 7+</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-cog text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Apr-Sep</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="d-flex justify-content-between">
                                    <div class="px-5">

                                        <i class="far fa-file-alt text-blue font-45"></i>
                                    </div>
                                    <div>
                                        <p class="fontw600 mb-1">A restaurant is a business that prepares and serves
                                            food and drinks to customers. Meals are generally served and eaten on the
                                            premises, but many restaurants also offer take-out and food delivery
                                            services.</p>

                                        <span class="show1 text-blue fontw600" style="cursor: pointer ;">Show
                                            More</span>
                                        <div class="d-flex justify-content-between py-4">
                                            <div>
                                                <h6 class="text-blue">Duration</h6>
                                                <p class="py-2">
                                                    <i class="far fa-clock text-blue font-20"></i> <span
                                                        class="fontw600 font-14">2 Days</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-walking text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Walking</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-tachometer text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Stenuous</span>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between py-1">
                                            <div>
                                                <h6 class="text-blue">Group Size</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-users text-blue font-20"></i> <span
                                                        class="fontw600 font-14">8</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-birthday-cake text-blue font-20"></i><span
                                                        class="fontw600 font-14"> 7+</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-cog text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Apr-Sep</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="FAQ" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="d-flex justify-content-betweenf">
                                    <div class="px-5">

                                        <i class="far fa-file-alt text-blue font-45"></i>
                                    </div>
                                    <div>
                                        <p class="fontw600 mb-1">A restaurant is a business that prepares and serves
                                            food and drinks to customers. Meals are generally served and eaten on the
                                            premises, but many restaurants also offer take-out and food delivery
                                            services.</p>

                                        <span class="show1 text-blue fontw600" style="cursor: pointer ;">Show
                                            More</span>
                                        <div class="d-flex justify-content-between py-4">
                                            <div>
                                                <h6 class="text-blue">Duration</h6>
                                                <p class="py-2">
                                                    <i class="far fa-clock text-blue font-20"></i> <span
                                                        class="fontw600 font-14">2 Days</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-walking text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Walking</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-tachometer text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Stenuous</span>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between py-1">
                                            <div>
                                                <h6 class="text-blue">Group Size</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-users text-blue font-20"></i> <span
                                                        class="fontw600 font-14">8</span>
                                                </p>
                                            </div>

                                            <div>
                                                <h6 class="text-blue">Activity</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-birthday-cake text-blue font-20"></i><span
                                                        class="fontw600 font-14"> 7+</span>
                                                </p>
                                            </div>
                                            <div>
                                                <h6 class="text-blue">Physical</h6>
                                                <p class="py-2">
                                                    <i class="fa fa-cog text-blue font-20"></i><span
                                                        class="fontw600 font-14"> Apr-Sep</span>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="accordion my-3 {{ $pkg->availalltime == 1 ? 'd-none' : ''}} " id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button p-2" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <span class="bg-blue px-2 py-1 rounded-circle text-light">1</span> &nbsp; <span
                                            class="font-13 fontw600">Monday</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6 class="text-blue">You're Engaged, Congratulations! We know this dream to get
                                            Married is special.</h6>
                                        <p class="font-14">You want the wedding of your dreams without compromise. A
                                            ceremony expressing the heart. Food which is delicious and tempts seconds.
                                            Styling where guests go wow. A room which allows you to celebrate.</p>
                                        <div class="row py-2">
                                            <div class="col-md-7 col-5">
                                                <img src="{{ asset('upload') }}/{{$pkg->getimage()}}"
                                                     class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">${{$pkg->amount}}</p>
                                                </div>
                                                @foreach($pkg->pkgtime as $time)
                                                    @if($time->mondyopen != null)
                                                        <div class="d-flex justify-content-between">
                                                            <p class="font-13 fontw600 text-blue mb-2"><i
                                                                    class="fa fa-clock"></i> Timings:</p>
                                                            <p class="font-13 fontw600 text-blue mb-2">{{ date('h:i A', strtotime($time->mondyopen)) }}
                                                                -{{date('h:i A', strtotime($time->mondyclose))}}</p>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-users"></i> Capacity</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">500/Persons</p>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <p class="font-14 pt-3 text-blue fontw600">Images</p>
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall3.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed p-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <span class="bg-blue rounded-circle text-light">2</span> &nbsp; <span
                                            class="font-13 fontw600">Tuesday</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                     data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6 class="text-blue">You're Engaged, Congratulations! We know this dream to get
                                            Married is special.</h6>
                                        <p class="font-14">You want the wedding of your dreams without compromise. A
                                            ceremony expressing the heart. Food which is delicious and tempts seconds.
                                            Styling where guests go wow. A room which allows you to celebrate.</p>
                                        <div class="row py-2">
                                            <div class="col-md-7 col-5">
                                                <img src="{{ asset('upload') }}/{{$pkg->getimage()}}"
                                                     class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">${{$pkg->amount}}</p>
                                                </div>
                                                @foreach($pkg->pkgtime as $time)
                                                    @if($time->tuedyopen != null)
                                                        <div class="d-flex justify-content-between">
                                                            <p class="font-13 fontw600 text-blue mb-2"><i
                                                                    class="fa fa-clock"></i> Timings:</p>
                                                            <p class="font-13 fontw600 text-blue mb-2">{{date('h:i A', strtotime($time->tuedyopen))}}
                                                                -{{date('h:i A', strtotime($time->tuedyclose))}}</p>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-users"></i> Capacity</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">500/Persons</p>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <p class="font-14 pt-3 text-blue fontw600">Images</p>
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall3.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed p-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree">
                                        <span class="bg-blue px-2 py-1 rounded-circle text-light">3</span> &nbsp; <span
                                            class="font-13 fontw600">Wednesday</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                     aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6 class="text-blue">You're Engaged, Congratulations! We know this dream to get
                                            Married is special.</h6>
                                        <p class="font-14">You want the wedding of your dreams without compromise. A
                                            ceremony expressing the heart. Food which is delicious and tempts seconds.
                                            Styling where guests go wow. A room which allows you to celebrate.</p>
                                        <div class="row py-2">
                                            <div class="col-md-7 col-5">
                                                <img src="{{ asset('upload') }}/{{$pkg->getimage()}}"
                                                     class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">${{$pkg->amount}}</p>
                                                </div>
                                                @foreach($pkg->pkgtime as $time)
                                                    @if($time->wedopen != null)

                                                        <div class="d-flex justify-content-between">
                                                            <p class="font-13 fontw600 text-blue mb-2"><i
                                                                    class="fa fa-clock"></i> Timings:</p>
                                                            <p class="font-13 fontw600 text-blue mb-2">{{ date('h:i A', strtotime($time->wedopen)) }}
                                                                -{{ date('h:i A', strtotime($time->wedclose)) }}</p>
                                                        </div>
                                                    @endif
                                                @endforeach

                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-users"></i> Capacity</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">500/Persons</p>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <p class="font-14 pt-3 text-blue fontw600">Images</p>
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall3.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed p-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false"
                                            aria-controls="collapseFour">
                                        <span class="bg-blue px-2 py-1 rounded-circle text-light">3</span> &nbsp; <span
                                            class="font-13 fontw600">Thursday</span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                     aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6 class="text-blue">You're Engaged, Congratulations! We know this dream to get
                                            Married is special.</h6>
                                        <p class="font-14">You want the wedding of your dreams without compromise. A
                                            ceremony expressing the heart. Food which is delicious and tempts seconds.
                                            Styling where guests go wow. A room which allows you to celebrate.</p>
                                        <div class="row py-2">
                                            <div class="col-md-7 col-5">
                                                <img src="{{ asset('upload') }}/{{$pkg->getimage()}}"
                                                     class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">${{$pkg->amount}}</p>
                                                </div>

                                                @foreach($pkg->pkgtime as $time)
                                                    @if($time->thurdyopen != null)

                                                        <div class="d-flex justify-content-between">
                                                            <p class="font-13 fontw600 text-blue mb-2"><i
                                                                    class="fa fa-clock"></i> Timings:</p>
                                                            <p class="font-13 fontw600 text-blue mb-2">{{ date('h:i A', strtotime($time->thurdyopen)) }}
                                                                -{{ date('h:i A', strtotime($time->thurdyclose)) }}</p>
                                                        </div>
                                                    @endif
                                                @endforeach

                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-users"></i> Capacity</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">500/Persons</p>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <p class="font-14 pt-3 text-blue fontw600">Images</p>
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall3.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed p-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false"
                                            aria-controls="collapseFive">
                                        <span class="bg-blue px-2 py-1 rounded-circle text-light">3</span> &nbsp; <span
                                            class="font-13 fontw600">Friday</span>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                     aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6 class="text-blue">You're Engaged, Congratulations! We know this dream to get
                                            Married is special.</h6>
                                        <p class="font-14">You want the wedding of your dreams without compromise. A
                                            ceremony expressing the heart. Food which is delicious and tempts seconds.
                                            Styling where guests go wow. A room which allows you to celebrate.</p>
                                        <div class="row py-2">
                                            <div class="col-md-7 col-5">
                                                <img src="{{ asset('upload') }}/{{$pkg->getimage()}}"
                                                     class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">${{$pkg->amount}}</p>
                                                </div>
                                                @foreach($pkg->pkgtime as $time)
                                                    @if($time->fridyopen != null)

                                                        <div class="d-flex justify-content-between">
                                                            <p class="font-13 fontw600 text-blue mb-2"><i
                                                                    class="fa fa-clock"></i> Timings:</p>
                                                            <p class="font-13 fontw600 text-blue mb-2">{{ date('h:i A', strtotime($time->fridyopen)) }}
                                                                -{{ date('h:i A', strtotime($time->fridyclose)) }}</p>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-users"></i> Capacity</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">500/Persons</p>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <p class="font-14 pt-3 text-blue fontw600">Images</p>
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall3.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed p-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false"
                                            aria-controls="collapseSix">
                                        <span class="bg-blue px-2 py-1 rounded-circle text-light">3</span> &nbsp; <span
                                            class="font-13 fontw600">Saturday</span>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse"
                                     aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6 class="text-blue">You're Engaged, Congratulations! We know this dream to get
                                            Married is special.</h6>
                                        <p class="font-14">You want the wedding of your dreams without compromise. A
                                            ceremony expressing the heart. Food which is delicious and tempts seconds.
                                            Styling where guests go wow. A room which allows you to celebrate.</p>
                                        <div class="row py-2">
                                            <div class="col-md-7 col-5">
                                                <img src="{{ asset('upload') }}/{{$pkg->getimage()}}"
                                                     class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">${{$pkg->amount}}</p>
                                                </div>
                                                @foreach($pkg->pkgtime as $time)
                                                    @if($time->satdyopen != null)

                                                        <div class="d-flex justify-content-between">
                                                            <p class="font-13 fontw600 text-blue mb-2"><i
                                                                    class="fa fa-clock"></i> Timings:</p>
                                                            <p class="font-13 fontw600 text-blue mb-2">{{ date('h:i A', strtotime($time->satdyopen)) }}
                                                                -{{ date('h:i A', strtotime($time->satdyclose)) }}</p>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-users"></i> Capacity</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">500/Persons</p>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <p class="font-14 pt-3 text-blue fontw600">Images</p>
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall3.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed p-2" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false"
                                            aria-controls="collapseSeven">
                                        <span class="bg-blue px-2 py-1 rounded-circle text-light">3</span> &nbsp; <span
                                            class="font-13 fontw600">Sunday</span>
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                     aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h6 class="text-blue">You're Engaged, Congratulations! We know this dream to get
                                            Married is special.</h6>
                                        <p class="font-14">You want the wedding of your dreams without compromise. A
                                            ceremony expressing the heart. Food which is delicious and tempts seconds.
                                            Styling where guests go wow. A room which allows you to celebrate.</p>
                                        <div class="row py-2">
                                            <div class="col-md-7 col-5">
                                                <img src="{{ asset('upload') }}/{{$pkg->getimage()}}"
                                                     class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">${{$pkg->amount}}</p>
                                                </div>
                                                @foreach($pkg->pkgtime as $time)
                                                    @if($time->sundyopen != null)

                                                        <div class="d-flex justify-content-between">
                                                            <p class="font-13 fontw600 text-blue mb-2"><i
                                                                    class="fa fa-clock"></i> Timings:</p>
                                                            <p class="font-13 fontw600 text-blue mb-2">{{ date('h:i A', strtotime($time->sundyopen)) }}
                                                                -{{ date('h:i A', strtotime($time->sundyclose)) }}</p>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-users"></i> Capacity</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">500/Persons</p>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <p class="font-14 pt-3 text-blue fontw600">Images</p>
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall3.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="{{ asset('img/hall4.jpg') }}" class="img-fluid rounded-3"
                                                     alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- testimonial  -->
                        <section class=" testimonials">

                            <!-- <h5 class="text-blue">Testimonials</h5> -->
                            <div class="card rounded-2 my-2">
                                <div class="card-header d-flex justify-content-between align-items-center py-0">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle my-2 carousel_img" width="50"
                                             src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301"
                                             alt="">
                                        <p class="text-blue font-17 mb-0 fontw600 ms-2">Paul</p>

                                    </div>
                                    <div class="font-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-md-flex  justify-content-between border-bottom">
                                        <p class="card-text mt-2 font-15 fontw600 text-blue mb-0"><span
                                                class="fontw800 font-17 text-blue">“</span>Exceptional <span
                                                class="fontw800 font-17 text-blue">”</span></p>
                                        <p class="card-text mt-2 font-15 fontw400 text-grey-three mb-0">Reviewed 23rd
                                            November 2022 </p>
                                    </div>
                                    <p class="card-text mt-2 font-13"><span class="fontw800 font-20 text-blue">“</span>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat <span class="fontw800 font-20 text-blue">”</span>
                                    </p>
                                </div>
                            </div>

                            <div class="card rounded-2 my-2">
                                <div class="card-header d-flex justify-content-between align-items-center py-0">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle my-2 carousel_img" width="50"
                                             src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301"
                                             alt="">
                                        <p class="text-blue font-17 mb-0 fontw600 ms-2">Jason</p>

                                    </div>
                                    <div class="font-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-md-flex justify-content-between border-bottom">
                                        <p class="card-text mt-2 font-15 fontw600 text-blue mb-0"><span
                                                class="fontw800 font-17 text-blue">“</span>Exceptional <span
                                                class="fontw800 font-17 text-blue">”</span></p>
                                        <p class="card-text mt-2 font-15 fontw400 text-grey-three mb-0">Reviewed 23rd
                                            November 2022 </p>
                                    </div>
                                    <p class="card-text mt-2 font-13"><span class="fontw800 font-20 text-blue">“</span>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat <span class="fontw800 font-20 text-blue">”</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card rounded-2 my-2">
                                <div class="card-header d-flex justify-content-between align-items-center py-0">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle my-2 carousel_img" width="50"
                                             src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=50&w=301"
                                             alt="">
                                        <p class="text-blue font-17 mb-0 fontw600 ms-2">Rock</p>

                                    </div>
                                    <div class="font-12">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-md-flex justify-content-between border-bottom">
                                        <p class="card-text mt-2 font-15 fontw600 text-blue mb-0"><span
                                                class="fontw800 font-17 text-blue">“</span>Exceptional <span
                                                class="fontw800 font-17 text-blue">”</span></p>
                                        <p class="card-text mt-2 font-15 fontw400 text-grey-three mb-0">Reviewed 23rd
                                            November 2022 </p>
                                    </div>
                                    <p class="card-text mt-2 font-13"><span class="fontw800 font-20 text-blue">“</span>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo
                                        minus id quod maxime placeat <span class="fontw800 font-20 text-blue">”</span>
                                    </p>
                                </div>
                            </div>
                            <div class="append_div">

                            </div>
                            <p class="text-blue font-12 mt-3 more_review" style="cursor:pointer;">Show 15+ more Reviews
                                <i class="fa fa-angles-right"></i></p>
                            <p class="text-blue font-12 mt-3 less_review d-none" style="cursor:pointer;">Show Less
                                Reviews <i class="fa fa-angles-left"></i></p>


                        </section>

                        <!-- testimonial -->
                    </div>

                </div>
                <div class="col-lg-4 col-12">
                    <div class="bg-light rounded-2 p-2">
                        <p class="font-12 fontw700 text-blue">${{$pkg->amount}}</p>
                        <div class="d-flex justify-content-between">
                            <p class="fontw700 text-blue font-13 mb-0"><span
                                    class="font-24">${{$pkg->amount}}</span> {{$pkg->price_for=='Menu'? 'for Menu' :'per Person'}}
                            </p>
                            <p class="mb-0"><span class="font-14 fontw600 bg-green px-3 py-1 rounded-50">20% OFF</span>
                            </p>
                        </div>
                        <p class="text-grey-three">Price based on selection's below</p>
                        <form action="#" method="post">
                            <!-- <input type="text" class="form-control" id="datepicker"> -->
                            <label for="" class="text-blue my-1 font-13 fontw500">Event Date</label>
                            <div class="input-group mb-3">
                                <input type="text" value="{{date('d-M-Y')}}" class="form-control border-right-0"
                                       id="datepicker"
                                       aria-describedby="basic-addon2">
                                <span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
                                        class="fa fa-calendar text-grey-three"></i></span>
                            </div>

                            <label for="" class="text-blue my-1 font-13 fontw500">Event Time</label>
                            <div class="input-group mb-3">
                                <input type="time" value="{{date('h:i')}}" class="form-control time_start">
                            </div>

                            <label for="" class="text-blue my-1 font-13 fontw500">Event End Time</label>
                            <div class="input-group mb-3">
                                <input type="time" value="{{date('h:i')}}" class="form-control time_end">
                            </div>
                            <label for="" class="text-blue my-1 font-13 fontw500">Total Person (Allowed
                                persons {{$pkg->mem_allow}})</label>
                            <div class="d-flex justify-content-between border rounded-2 px-2">
                                <div>
                                    <p class="pt-2 text-grey-three font-13">Persons</p>
                                </div>
                                <div class="quantity">
                                    <a href="#" class="quantity__minus"><span>-</span></a>
                                    <input name="quantity" type="text" readonly class="quantity__input" min="1"
                                           max="{{$pkg->mem_allow}}" value="1">
                                    <a href="#" class="quantity__plus"><span>+</span></a>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="button" id="check_avibility" class="btn btn-green my-3">Check
                                    Availability
                                </button>
                            </div>


                            <div class="showPhoneNo d-flex justify-content-center align-items-center">
                                <i class="fa fa-phone pe-3"></i>
                                <p class="mb-0"><span class="hide-no">**********</span> <span
                                        class="d-none display-phone-no">03123456789</span></p>
                                <a href="javascript:void(0)" class="ps-3 pb-1 showNumber">Show Number</a>
                            </div>

                        </form>
                    </div>


                </div>


                <!-- similar product -->
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-blue">Similar Restaurants</h3>
                    </div>
                </div>
                <div class="owl-carousel">
                    <div class="item">
                        <div class="image_div py-3 px-3 position-relative"
                             style="background-image:url('{{ asset('img/hall.webp') }}');">
                            <div class="row">
                                <div class="col-12">
                                    <span class="badge bg-green float-end">30%</span>

                                </div>
                            </div>


                            <div class="d-flex justify-content-between align-items-end mt-30">
                                <div>
                                    <h6 class="text-light fontw400">10 Days | 9 Nights</h6>
                                    <h3 class="text-light"> $200</h3>
                                </div>
                                <div class="d-flex ms-4">

                                    <button class="btn btn-green px-3 py-1 h-50 border-rounded-50">Explore</button>
                                </div>

                            </div>


                        </div>
                        <div class="text-center py-3">
                            <h5 class="text-blue font-16 fontw400">Product 1</h5>
                            <p class="text-grey-three font-14">Checkout daily Deal</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image_div py-3 px-3 position-relative"
                             style="background-image:url('{{ asset('img/hall.webp') }}');">

                        </div>
                        <div class="text-center py-3">
                            <h5 class="text-blue font-16 fontw400">Product 2</h5>
                            <p class="text-grey-three font-14">Checkout daily Deal</p>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- footer section -->

@endsection

@section('js')

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function () {
            $("#datepicker").datepicker({
                dateFormat: 'dd-M-yy',
                showOtherMonths: true,
                selectOtherMonths: true
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            const minus = $('.quantity__minus');
            const plus = $('.quantity__plus');
            const input = $('.quantity__input');
            minus.click(function (e) {
                e.preventDefault();
                var value = input.val();
                if (value > 1) {
                    value--;
                }
                input.val(value);
            });

            plus.click(function (e) {
                e.preventDefault();
                var value = input.val();
                var max = $('.quantity__input').attr('max');

                if (value < max) {
                    value++;
                    input.val(value);
                }

            })
            $('.showNumber').click(function () {

                $('.hide-no').toggleClass('d-none');
                $('.display-phone-no').toggleClass('d-none');
                // $('.hide-no .display-phone-no').toggleClass('d-none');
            });

            $('#check_avibility').click(function () {
                var date = $('#datepicker').val();
                var person = $('.quantity__input').val();
                var time_start = $('.time_start').val();
                var time_end = $('.time_end').val();
                var package_id = $('#package_id').val();


                $.ajax({
                    type: 'post',
                    url: "{{url('user/check/avibility')}}",
                    data: {'date': date, 'person': person, 'time_start': time_start,'time_end':time_end, 'id': package_id},
                    async: false,

                    success: function (response) {

                        if (response.available == true) {
                            toastr.success(response.message);

                            $('.event_date').empty().append(date).val(date);
                            $('.event_start_time').empty().append(time_start).val(time_start);
                            $('.event_end_time').empty().append(time_end).val(time_end);
                            $('.total_person').empty().append(person).val(person);




                          var per=  @if($pkg->price_for=='Menu'){{$pkg->amount}} @else person *{{$pkg->amount}}@endif;


                            $('#booking').modal('show');
                        } else {
                            toastr.error(response.error);
                        }

                    }
                });

            });
        });
    </script>
    <!-- Jquery CDN -->
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                nav: false,
                dots: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                margin: 20,
                slideSpeed: 3000,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    960: {
                        items: 3
                    }
                }
            });


            var setMinHeight = function (minheight = 0) {
                jQuery('.owl-carousel').each(function (i, e) {
                    var oldminheight = minheight;
                    jQuery(e).find('.owl-item').each(function (i, e) {
                        minheight = jQuery(e).height() > minheight ? jQuery(e).height() : minheight;
                    });
                    jQuery(e).find('.item').css("min-height", minheight + "px");
                    minheight = oldminheight;
                });
            };

            setMinHeight();
        });

        $(document).on('resize', function () {
            setMinHeight();
        });
    </script>

    <script>
        var JS_Obj = '<?php echo $imgs ?>';
        var obj = JSON.parse(JS_Obj);
        var res = [];
        for (var i in obj) {
            res.push(obj[i]);
        }
        var base_url = window.location.origin;
        let images = [{}];
        for (let k = 0; k < res.length; k++) {
            images[k] = {url: base_url + '/upload/' + res[k], info: 'Sample info'};
        }
        const mainView = document.getElementById('main-view');
        const caption = document.getElementById('caption');
        const info = document.getElementById('info');

        const thumbnails = document.getElementById('thumbnails');

        for (let i = 0; i < images.length; i++) {
            let image = images[i];
            let img = document.createElement('img');
            img.src = images[i].url;
            img.setAttribute('width', 170);
            img.setAttribute('data-index', i);
            img.addEventListener('click', changeImage);
            thumbnails.appendChild(img);
        }

        function initGallery() {
            loadImage(0);
        };

        function slideImage() {
            let currentIndex = parseInt(mainView.getAttribute('data-index'));
            currentIndex = currentIndex + 1 == images.length ? 1 : currentIndex + 1;
            loadImage(currentIndex);
            setTimeout(slideImage, 3000);

        }

        function changeImage(event) {
            let target = event.currentTarget;
            let index = target.getAttribute('data-index');
            loadImage(index);
        }

        function loadImage(index) {
            let image = images[index];
            mainView.src = image.url;
            mainView.setAttribute('data-index', index);
            mainView.setAttribute('id', 'image-' + index);
            mainView.style.opacity = 1;
            caption.textContent = image.caption;
            info.textContent = image.info;

        }

        function fullScreenImage() {
            toggleFullscreen(mainView);
        }

        function toggleFullscreen(el) {
            if (document.fullscreenElement || document.mozFullScreenElement ||
                document.webkitFullscreenElement || document.msFullscreenElement) {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            } else {
                if (document.documentElement.requestFullscreen) {
                    el.requestFullscreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    el.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullscreen) {
                    el.webkitRequestFullscreen();
                } else if (document.documentElement.msRequestFullscreen) {
                    el.msRequestFullscreen();
                }
            }
        }

        initGallery();
        setTimeout(slideImage, 3000);

    </script>

@endsection
