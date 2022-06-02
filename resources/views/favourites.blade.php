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
            <img id="main-view" class="main-view rounded-3" src="images/1.jpg" onclick="fullScreenImage();" />

        </div>
    </div>

    <!-- carousil -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-6 col-12">
                    <div class="p-2">
                        <p class="text-grey-three font-14">Destination > Portugal > Laos</p>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fontw700 font-22 text-blue mb-0">Sandy Beach Holiday in Laos</p>
                                <p class="text-blue font-13"><i class="fa-solid fa-location-dot"></i> City,Country</p>
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
                                        aria-selected="true">Overview</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#Itinerary" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Itinerary</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#Inclusion" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Inclusion</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#Reviews" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Reviews</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#FAQ"
                                        type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">FAQ</button>
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


                        <div class="accordion my-3" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button p-2" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="bg-blue px-2 py-1 rounded-circle text-light">1</span> &nbsp; <span
                                            class="font-13 fontw600">Day1</span>
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
                                                <img src="./img/hall.webp" class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">$150</p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-clock"></i> Timings:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">7pm-10pm</p>
                                                </div>
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
                                                <img src="./img/hall4.jpg" class="img-fluid rounded-3" alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="./img/hall3.jpg" class="img-fluid rounded-3" alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="./img/hall4.jpg" class="img-fluid rounded-3" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed p-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span class="bg-blue rounded-circle text-light">2</span> &nbsp; <span
                                            class="font-13 fontw600">Day2</span>
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
                                                <img src="./img/hall.webp" class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">$150</p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-clock"></i> Timings:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">7pm-10pm</p>
                                                </div>
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
                                                <img src="./img/hall4.jpg" class="img-fluid rounded-3" alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="./img/hall3.jpg" class="img-fluid rounded-3" alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="./img/hall4.jpg" class="img-fluid rounded-3" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed p-2" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span class="bg-blue px-2 py-1 rounded-circle text-light">3</span> &nbsp; <span
                                            class="font-13 fontw600">Day3</span>
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
                                                <img src="./img/hall.webp" class="img-fluid rounded-2" alt="">
                                            </div>
                                            <div class="col-md-5 col-7">
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-user"></i> Per Person:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">$150</p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="font-13 fontw600 text-blue mb-2"><i
                                                            class="fa fa-clock"></i> Timings:</p>
                                                    <p class="font-13 fontw600 text-blue mb-2">7pm-10pm</p>
                                                </div>
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
                                                <img src="./img/hall4.jpg" class="img-fluid rounded-3" alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="./img/hall3.jpg" class="img-fluid rounded-3" alt="">
                                            </div>
                                            <div class="col-4 ">
                                                <img src="./img/hall4.jpg" class="img-fluid rounded-3" alt="">
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
                                                class="fontw800 font-17 text-blue">”</span> </p>
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
                                                class="fontw800 font-17 text-blue">”</span> </p>
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
                                                class="fontw800 font-17 text-blue">”</span> </p>
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
                        <p class="font-12 fontw700 text-blue">$2000</p>
                        <div class="d-flex justify-content-between">
                            <p class="fontw700 text-blue font-13 mb-0"><span class="font-24">$2000</span> per Person</p>
                            <p class="mb-0"><span class="font-14 fontw600 bg-green px-3 py-1 rounded-50">20% OFF</span>
                            </p>
                        </div>
                        <p class="text-grey-three">Price based on selection's below</p>
                        <form action="#" method="post">
                            <!-- <input type="text" class="form-control" id="datepicker"> -->
                            <label for="" class="text-blue my-1 font-13 fontw500">Event Date</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-right-0" id="datepicker"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
                                        class="fa fa-calendar text-grey-three"></i></span>
                            </div>
                            <label for="" class="text-blue my-1 font-13 fontw500">Total Person</label>
                            <div class="d-flex justify-content-between border rounded-2 px-2">
                                <div>
                                    <p class="pt-2 text-grey-three font-13">Persons</p>
                                </div>
                                <div class="quantity">
                                    <a href="#" class="quantity__minus"><span>-</span></a>
                                    <input name="quantity" type="text" class="quantity__input" value="1">
                                    <a href="#" class="quantity__plus"><span>+</span></a>
                                </div>
                            </div>
                            <button type="btn" class="btn btn-green my-3">Check Availability</button>

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
                            style="background-image:url('./img/hall.webp');">
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
                            style="background-image:url('./img/hall.webp');">

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
    

    <!-- Bootstrap5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Bootstrap5 CDN -->

    <!-- Jquery CDN -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function () {


            $(".more_review").click(function () {
                $('.less_review').removeClass('d-none');
                $('.more_review').addClass('d-none');


                for (let index = 1; index <= 15; index++) {
                    $('.append_div').append(`
                    <div class="card rounded-2 my-2">
                            <div class="card-header d-flex justify-content-between align-items-center py-0">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle my-2 carousel_img" width="50" src="https://images.unsplash.com/photo-1588361035994-295e21daa761?crop=entropy&amp;cs=tinysrgb&amp;fit=crop&amp;fm=jpg&amp;h=301&amp;ixid=eyJhcHBfaWQiOjF9&amp;ixlib=rb-1.2.1&amp;q=50&amp;w=301" alt="">
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
                                    <p class="card-text mt-2 font-15 fontw600 text-blue mb-0"><span class="fontw800 font-17 text-blue">“</span>Exceptional <span class="fontw800 font-17 text-blue">”</span> </p>
                                    <p class="card-text mt-2 font-15 fontw400 text-grey-three mb-0">Reviewed 23rd November 2022 </p>
                                </div>
                                <p class="card-text mt-2 font-13"><span class="fontw800 font-20 text-blue">“</span> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat <span class="fontw800 font-20 text-blue">”</span> </p>
                            </div>
                        </div>
                    `);

                }

            });
            $(".less_review").click(function () {
                $('.append_div').empty();
                $('.less_review').addClass('d-none');
                $('.more_review').removeClass('d-none');
            });
        });
    </script>
    <script>
        $(function () {
            $("#datepicker").datepicker({
                dateFormat: 'dd-MM-yy',
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
                value++;
                input.val(value);
            })
            $('.showNumber').click(function () {

                $('.hide-no').toggleClass('d-none');
                $('.display-phone-no').toggleClass('d-none');
                // $('.hide-no .display-phone-no').toggleClass('d-none');
            });
        });
    </script>
    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
        let images = [{
            url: 'https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80',
            // caption: '404 wallpaper',
            info: 'Sample info'
        }, {
            url: 'https://images.unsplash.com/photo-1521846562476-9c2446539e47?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80',
            // caption: '404 second wallpaper',
            info: 'Sample info'
        }, {
            url: 'https://images.unsplash.com/photo-1533090161767-e6ffed986c88?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869',
            // caption: '404 third wallpaper',
            info: 'Sample info'
        },];
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